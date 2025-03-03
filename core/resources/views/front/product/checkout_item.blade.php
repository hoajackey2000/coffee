@extends('front.layout')

@section('content')
<!--   hero area start   -->
<section class="page-title-area d-flex align-items-center" style="background-image:url('{{asset('assets/front/img/'.$bs->breadcrumb)}}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-item text-center">
                    <h2 class="title">{{convertUtf8($bs->checkout_title)}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('front.index')}}"><i class="flaticon-home"></i>{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{convertUtf8($bs->checkout_title)}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        

    </div>
</section>
<!--====== PAGE TITLE PART ENDS ======-->
<!--   hero area end    -->
  
 <!--================Billing Details Area =================-->    
 <section class="checkout-area">
    <form action="{{route('product.checkout_item.submit')}}" method="POST" id="payment">
        @csrf
        @if(Session::has('stock_error'))
        <p class="text-danger text-center my-3">{{Session::get('stock_error')}}</p>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="form billing-info">
                        <div class="shop-title-box">
                            <h3>{{__('Billing Address')}}</h3>
                        </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="field-label">{{__('Country')}} *</div>
                                    <div class="field-input">
                                        <input type="text" name="billing_country" value="{{$user->billing_country}}">
                                    </div>
                                    @error('billing_country')
                                        <p class="text-danger">{{convertUtf8($message)}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="field-label">{{__('First Name')}} *</div>
                                    <div class="field-input">
                                        <input type="text" name="billing_fname" value="{{$user->billing_fname}}">
                                    </div>
                                    @error('billing_fname')
                                        <p class="text-danger">{{convertUtf8($message)}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="field-label">{{__('Last Name')}} *</div>
                                    <div class="field-input">
                                        <input type="text" name="billing_lname" value="{{$user->billing_lname}}">
                                    </div>
                                    @error('billing_lname')
                                        <p class="text-danger">{{convertUtf8($message)}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="field-label">{{__('Address')}} *</div>
                                    <div class="field-input">
                                        <input type="text" name="billing_address" value="{{$user->billing_address}}">
                                    </div>
                                    @error('billing_address')
                                        <p class="text-danger">{{convertUtf8($message)}}</p>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="field-label">{{__('Town / City')}} *</div>
                                    <div class="field-input">
                                        <input type="text" name="billing_city" value="{{$user->billing_city}}">
                                    </div>
                                    @error('billing_city')
                                    <p class="text-danger">{{convertUtf8($message)}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="field-label">{{__('Contact Email')}} *</div>
                                    <div class="field-input">
                                        <input type="text" name="billing_email" value="{{$user->billing_email}}">
                                    </div>
                                    @error('billing_email')
                                    <p class="text-danger">{{convertUtf8($message)}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="field-label">{{__('Phone')}} *</div>
                                    <div class="field-input">
                                        <input type="text" name="billing_number" value="{{$user->billing_number}}">
                                    </div>
                                    @error('billing_number')
                                    <p class="text-danger">{{convertUtf8($message)}}</p>
                                    @enderror
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="form shipping-info">
                        <div class="shop-title-box">
                            <h3>{{__('Shipping Address')}}<div class="field-label">(nếu có)</div></h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-label">{{__('Country')}} *</div>
                                <div class="field-input">
                                    <input type="text" name="shpping_country" value="{{$user->shpping_country}}">
                                </div>
                                @error('shpping_country')
                                    <p class="text-danger">{{convertUtf8($message)}}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">{{__('First Name')}} *</div>
                                <div class="field-input">
                                    <input type="text" name="shpping_fname" value="{{$user->shpping_fname}}">
                                </div>
                                @error('shpping_fname')
                                <p class="text-danger">{{convertUtf8($message)}}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">{{__('Last Name')}} *</div>
                                <div class="field-input">
                                    <input type="text" name="shpping_lname" value="{{$user->shpping_lname}}">
                                </div>
                                @error('shpping_lname')
                                <p class="text-danger">{{convertUtf8($message)}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">{{__('Address')}} *</div>
                                <div class="field-input">
                                    <input type="text" name="shpping_address" value="{{$user->shpping_address}}">
                                </div>
                                @error('shpping_address')
                                <p class="text-danger">{{convertUtf8($message)}}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="field-label">{{__('Town / City')}} *</div>
                                <div class="field-input">
                                    <input type="text" name="shpping_city" value="{{$user->shpping_city}}">
                                </div>
                                @error('shpping_city')
                                <p class="text-danger">{{convertUtf8($message)}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">{{__('Contact Email')}} *</div>
                                <div class="field-input">
                                    <input type="text" name="shpping_email" value="{{$user->shpping_email}}">
                                </div>
                                @error('shpping_email')
                                <p class="text-danger">{{convertUtf8($message)}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">{{__('Phone')}} *</div>
                                <div class="field-input">
                                    <input type="text" name="shpping_number" value="{{$user->shpping_number}}">
                                </div>
                                @error('shpping_number')
                                <p class="text-danger">{{convertUtf8($message)}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">    
                @if($shippings->count() > 0)
                    <div class="col-12 mb-5">
                        <div class="table">
                            <div class="shop-title-box">
                                <h3>{{__('Shipping Methods')}}</h3>
                            </div>
                            <table class="cart-table shipping-method">
                                <thead class="cart-header">
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('Method')}}</th>
                                        <th class="price">{{__('Cost')}}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if($shippings)
                                        @foreach ($shippings as $key => $charge)
                                        <tr>
                                            <td>
                                                <input type="radio" {{$key == 0 ? 'checked' : ''}} name="shipping_charge" {{$cart == null ? 'disabled' : ''}} data="{{$charge->charge}}"   class="shipping-charge"  value="{{$charge->id}}">
                                            </td>
                                            <td>
                                            <p class="mb-2"><strong>{{convertUtf8($charge->title)}}</strong></p>
                                                <p><small>{{convertUtf8($charge->text)}}</small></p>
                                            </td>
                                            <td>{{$be->base_currency_symbol_position == 'left' ? $be->base_currency_symbol : ''}} <span>{{number_format($charge->charge,0,',','.')}}</span> {{$be->base_currency_symbol_position == 'right' ? $be->base_currency_symbol : ''}}</td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="table">
                        <div class="shop-title-box">
                            <h3>{{__('Order Summary')}}</h3>
                        </div>
                        <table class="cart-table">
                            <thead class="cart-header">
                                <tr>
                                    <th class="product-column">{{__('Products')}}</th>
                                    <th>&nbsp;</th>
                                    <th>{{__('Quantity')}}</th>
                                    <th class="price">{{__('Total')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @if($cart)
                                @foreach ($cart as $key => $item)
                                <input type="hidden" name="product_id[]" value="{{$key}}" >
                                @php
                                    $total += $item['price'] * $item['qty'];
                                    $product = App\Models\Product::findOrFail($key);

                                @endphp
                                <tr>
                                    <td colspan="2" class="product-column">
                                        <div class="column-box">
                                            <div class="prod-thumb">
                                            <img src="{{asset('assets/front/img/product/featured/'.$item['photo'])}}" alt="">
                                            </div>
                                            <div class="product-title">
                                                <a target="_blank" href="{{route('front.product.details',[$product->slug,$product->id])}}"><h3 class="prod-title">{{convertUtf8($item['name'])}}</h3></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="qty">
                                        <input class="quantity-spinner" disabled type="text" value="{{$item['qty']}}" name="quantity">
                                    </td>
                                    <td class="price">{{$be->base_currency_symbol_position == 'left' ? $be->base_currency_symbol : ''}} {{$item['qty'] * $item['price']}} {{$be->base_currency_symbol_position == 'right' ? $be->base_currency_symbol : ''}}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr class="text-center">
                                <td colspan="4">{{__('Cart is empty')}}</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="cart-total">
                        <div class="shop-title-box">
                            <h3>{{__('Cart Totals')}}</h3>
                        </div>
                        <ul class="cart-total-table">
                            <li class="clearfix">
                                <span class="col col-title">{{__('Cart Subtotal')}}</span>
                                <span class="col">{{$be->base_currency_symbol_position == 'left' ? $be->base_currency_symbol : ''}} <span data="{{round($total,2)}}" class="subtotal">{{number_format($total,0,',','.')}}</span> {{$be->base_currency_symbol_position == 'right' ? $be->base_currency_symbol : ''}}</span>
                            </li>
                            <li class="clearfix">
                                <span class="col col-title">{{__('Shipping Charge')}}</span>
                                <span class="col">{{$be->base_currency_symbol_position == 'left' ? $be->base_currency_symbol : ''}} <span data="{{$shippings->count() > 0 ? round($shippings[0]->charge,2) : 0}}" class="shipping">{{$shippings->count() > 0 ? round($shippings[0]->charge,2) : 0}}</span> {{$be->base_currency_symbol_position == 'right' ? $be->base_currency_symbol : ''}}</span>
                            </li>
                            <li class="clearfix">
                                <span class="col col-title">{{__('Order Total')}}</span>
                                <span class="col">{{$be->base_currency_symbol_position == 'left' ? $be->base_currency_symbol : ''}} <span data="{{$shippings->count() > 0 ? round($total + $shippings[0]->charge,2) : number_format($total,0,',','.') }}" class="grandTotal">{{$shippings->count() > 0 ? number_format($total + $shippings[0]->charge,0,',','.') : number_format($total,0,',','.') }}</span> {{$be->base_currency_symbol_position == 'right' ? $be->base_currency_symbol : ''}}</span>
                            </li>
                        </ul>

                        <div class="payment-options">
                            <h4 class="mb-4">{{__('Pay Via')}}</h4>

                            <div id="accordion" class="accordion_area">
                                {{-- paypal --}}
                                {{-- @if ($paypal->status == 1) --}}
                                    {{-- <div class="option-block">
                                        <div class="radio-block">
                                            
                                            <div class="checkbox" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <input name="method" type="radio" class="paypal-check" value="paypal">                  
                                                <a class="collapsed">                                              
                                                    <span>{{__('Paypal')}}</span>
                                                </a> <br>
                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Cửa hàng sẽ gửi đến địa chỉ của bạn, bạn vui lòng điền đẩy đủ thông tin tài khoản paypal để thanh toán đơn hàng. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                {{-- @endif --}}

                                {{-- cod --}}
                                {{-- @if ($paypal->status == 1) --}}
                                    <div class="option-block">
                                        <div class="radio-block">
                                            <div class="checkbox" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <input name="method" type="radio" checked="checked" class="delivery-check" value="delivery">                  
                                                <a class="collapsed">                                              
                                                <span>{{__('Thanh Toán Khi Nhận Hàng ')}}</span>
                                                </a> <br>
                                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Cửa hàng sẽ gửi đến địa chỉ của bạn, bạn vui lòng xem hàng rồi thanh toán tiền cho nhân viên giao hàng.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {{-- @endif --}}

                                {{-- atm --}}
                                {{-- @if ($paypal->status == 1) --}}
                                    <div class="option-block">
                                        <div class="radio-block">
                                            <div class="checkbox" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">                 
                                                <input name="method" type="radio" class="atm-check" value="atm">                  
                                                <a class="collapsed" >
                                                <span>{{__('Chuyển Khoản')}}</span>
                                                </a>
                                                    
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <b>HƯỚNG DẪN THANH TOÁN</b><br />

                                                        {{__('Method_1')}}<br/>
                                                        
                                                        {{__('Method_1')}}<br/>
                                                        Chủ Tài Khoản : <b><i>{{__('Name_ATM')}}</i></b><br/>
                                                        Số tài khoản : <b><i>{{__('STK_ATM')}}</i></b><br/>
                                                        Địa chỉ: {{__('Address_ATM')}}<br/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {{-- @endif --}}

                            </div>
                            
                            
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="no_note" value="1">
                            <input type="hidden" name="lc" value="UK">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="ref_id" id="ref_id" value="">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <input type="hidden" name="currency_sign" value="$">


                            <div class="placeorder-button text-left mt-4">
                                <button {{$cart ? '' : 'disabled' }}  class="main-btn" id="Payment"  type="submit"><span class="btn-title">{{__('Pleace Order')}}</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<!--================End Billing Details Area =================-->   

<style type="text/css">
  .form-group .form-control{
    color: #000!important;
  }
</style>
    
    

@endsection


@section('script')
<script src="https://js.stripe.com/v2/"></script>
<script>
    "use strict";
    var paypalSubmit = '{{route("product.paypal.submit")}}';
    var stripeSubmit = '{{route("product.stripe.submit")}}';
</script>


<script src="{{asset('assets/front/js/checkout.js')}}"></script>
@endsection
