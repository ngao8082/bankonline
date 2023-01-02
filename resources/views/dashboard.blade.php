@extends('layouts.app')


    @section('homesection')
    <div class="row">
  <div class="col-12">
    <div class="my-info-container">
      <div class="my-info-box">
        <div class="me-info-block">
          <div class="my-photo-block">
           
          </div>
          <div class="my-info">
            <div class="name">
              <span>
              
              </span>
              <a href="#" class="small indent10"><i class="fas fa-edit" data-toggle="tooltip" data-title="{{ trans('theme.edit_account') }}"></i></a>
            </div>
            <div class="messages">
              <span>
                <i class="fas fa-clock-o"></i>
                {{ trans('theme.member_since') }}: <em></em>
              </span>
            </div>
          </div>

          <div class="pull-right">
            <a href="{{ url('/') }}" class="btn btn-primary flat">
              <i class="fas fa-shopping-cart"></i> @lang('theme.button.continue_shopping')
            </a>

            
              <a href="#address-tab" class="btn btn-default flat">
                <i class="fas fa-truck"></i> @lang('theme.add_shipping_address')
              </a>
           
          </div>
        </div>
      </div><!-- .my-info-box -->

      <div class="my-info-details">
        <ul>
          <li>
            <a href="">
              <span class="v"></span>
              <span class="d"><i class="fas fa-shopping-cart"></i> @lang('theme.orders')</span>
            </a>
          </li>
          
            <li>
              <a href="">
                <span class="v"></span>
                <span class="d"><i class="fas fa-heart"></i> @lang('theme.wishlist')</span>
              </a>
            </li>
         
          <li>
            <a href="">
              <span class="v"></span>
              <span class="d"><i class="fas fa-envelope"></i> @lang('theme.unread_messages')</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="v"></span>
              <span class="d"><i class="fas fa-tags"></i> @lang('coupons')</span>
            </a>
          </li>
          <li class="last">
            <a href="">
              <span class="v"></span>
              <span class="d"><i class="fas fa-envelope"></i> @lang('theme.disputes')</span>
            </a>
          </li>
        </ul>
      </div><!-- .my-info-details -->
    </div><!-- .my-info-container -->
  </div><!-- .col-sm-12 -->
</div><!-- .row -->

<div class="row">
  <div class="col-md-6 nopadding-right">
    <table class="table table-bordered">
      <thead>
        <tr class="text-muted">
          <th>{{ trans('theme.date') }}</th>
          <th>
            {{ trans('theme.orders') }}
            <i class="fas fa-question-circle pull-right" data-toggle="tooltip" data-title="{{ trans('theme.item_count') }}"></i>
          </th>
          <th>{{ trans('theme.amount') }}</th>
        </tr>
      </thead>
      <tbody>
  
          <tr>
            <td></td>
            <td>
              
              <a href="">
                
              </a>
              <small class="indent10"></small>
              <span class="label label-outline pull-right">  </span>
            </td>
            <td></td>
          </tr>
       
      </tbody>
    </table>
  </div><!-- .col-sm-6 -->
  
    <div class="col-md-6 nopadding-left">
      <table class="table table-bordered">
        <thead>
          <tr class="text-muted">
            <th>{{ trans('theme.wishlist') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          
            
              <tr>
                <td>
                 

                 
                </td>
                <td>
                  
                    <i class="fas fa-rocket"></i> @lang('theme.button.buy_now')
                  
                </td>
              </tr>
            
              <tr>
                <td>
                  

                  
                </td>
                <td>
                  
                    @lang('theme.view_more_offers')
                  
                </td>
              </tr>
           
         
        </tbody>
      </table>
    </div><!-- .col-sm-6 -->
  
</div><!-- .row -->
<div class="clearfix space50"></div>
@endsection
