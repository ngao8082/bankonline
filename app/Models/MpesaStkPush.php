<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpesaStkPush extends Model
{
    use HasFactory;
    protected $consumner_key;
    protected $consumer_secret;
    protected $passkey;
    protected $amount;
    protected $accountReference;
    protected $phone;
    protected $env;
    protected $short_code;
    protected $parent_short_code;
    protected $initiatorName;
    protected $initiatorPassword;

    public function  __construct(){
        $this->short_code = '7854001';
        $this->parent_short_code = '5868111';
        $this->consumner_key =' L9pS5uk2idlpkTzhN2TvtAU9H0gvaNBA';
        $this->consumer_secret = 'MUs6BGr87BXblCn8';
        $this->passkey = '';
        $this->CallbackUrl = 'https://';
        $this->env='sandbox';
        $this->initiatorName ='testapi';
        $this->initiatorPassword = 'safaricomtest80';
    }
    public function getPassword(){
        $timestamp=Carbon::now()->format('Y-m-d');
        $passWord=base64_encode($this->short_code . "" . $this->passkey ."". $timestamp);
        return $passWord;
    }
    public function LipaNaMpesa($amount,$phone,$accountreference){
        $this->phone=$phone;
        $this->amount=$amount;
        $this->accountReference=$accountreference;
        $passWord=$this->getPassword();
        $headers=['Content-Type:application/json; charset=utf8'];
        $access_token_url=($this->env ==="live")?"https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials":
            "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
        $initiate_url= ($this->env==="live")?
            "https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest":
            "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";

        $curl= curl_init($access_token_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_HEADER, FALSE);
        curl_setopt($curl, CURLOPT_USERPWD, $this->consumner_key. ':'.$this->consumer_secret);
        $result=curl_exec($curl);
        $Status=curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result=json_decode($result);
        $access_token = $result->access_token;
        curl_close($curl);
        $stkheader = ['Content-Type:application/json','Authorization:Bearer'. $access_token];
        $curl= curl_init();
        curl_setopt($curl, CURLOPT_URL, $initiate_url);
        curl_setopt($curl, CURLOPT_HEADER, $stkheader);
        $curl_post_data=array(
           'businessCode'=>"",
            'password'=>"",
            'timestamp'=>"",
            'transactionType'=>"",
            'Amount'=>$this->amount,
            'partyA'=>$phone,
            'CallbackUrl'=>$this->CallbackUrl,
            'AccountReference'=>$this->accountReference,
            'transaction_desc'=>$phone. "has paid". $this->amount. "to". $this->short_code,
        );
        $data_string=json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $response=curl_exec($curl);
        return $response;

    }
    public function Status($transaction_code){
        $type=4;
        $command="TransactionStatusQuery";
        $remarks="Transaction Status Query";
        $occasion="Transaction Status Query";
        $results_url="https://mydomain.com/transactionstatus/results/";
        $timeout_url="https://mydomain.com/transactionstatus/queue/";
        $access_token=($this->env ==="live")?"https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials":
            "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
        $credentials= base64_encode($this->consumner_key.':'. $this->consumer_secret);
       $ch=curl_init($access_token);
       curl_setopt($ch, CURLOPT_HTTPHEADER, ["authorization:Basic" . $credentials]);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       $response=curl_exec($ch);
       curl_close($ch);
       $result=json_decode($response);
//       echo $result->{'access_token'};
        $token=isset($result->{'access_token'})? $result->{'access_token'} : "N/A";
        $publicKey=file_get_contents(__DIR__ . "/mpesa_public_cert.cert");
        $invalid=openssl_public_encrypt($this->initiatorPassword, $encrypted, $publicKey, OPENSSL_PKCS1_PADDING);
        $password=base64_encode($encrypted);
//         echo $token;
        $curl_post_data=array(
            "initiator"=>$this->initiatorName,
            "securityCredentials"=>$password,
            "commandID"=>$command,
            "TransactionID"=>$transaction_code,
            "partyA"=>$this->short_code,
            "IdentifierType"=>$type,
            "ResultURL"=>$results_url,
            "queueTimeOutURL"=>$timeout_url,
            "Remarks"=>$remarks,
            "Occasion"=>$occasion,
        );
        $data_string=json_encode($curl_post_data);
        $endpoint=($env=== "live")?
            "https://api.safaricom.co.ke/mpesa/transactionstatus/v1/query":
            "https://sandbox.safaricom.co.ke/mpesa/transactionstatus/v1/query";
        $ch2= curl_init($endpoint);
        curl_setopt($ch2,CURLOPT_HTTPHEADER, [
            'Authorization: Bearer'. $token,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch2,CURLOPT_POST,1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
$response= curl_exec($ch2);
curl_close($ch2);
$result=json_decode($response);
return $result;
}
}