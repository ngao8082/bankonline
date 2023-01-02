@extends('layouts.app')

@section('withdrawcontent')
<div class="col-md-10 bg-white">
    <div class="card" style="border: 0px">
        <div class="card-body">
            @if(route('transact')){
                @include('withdraw')
            }@elseif(route('deposit')){
                @include('deposit')
            }@endif
        </div>
    </div>
</div>
@endsection
