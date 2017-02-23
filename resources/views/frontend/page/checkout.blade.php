@extends('frontend.master')
@section('content')
<section id="product">
  <div class="container">
  <!--  breadcrumb -->  
    <ul class="breadcrumb">
      <li>
        <a href="#">Home</a>
        <span class="divider">/</span>
      </li>
      <li class="active">Checkout</li>
    </ul>
    <div class="row">        
      <!-- Account Login-->
      <div class="span12">
        <div class="checkoutsteptitle">Confirm Order<a class="modify">Modify</a></div>
        <div class="checkoutstep">
          <div class="cart-info">
            <table class="table table-striped table-bordered">
              <tr>
                <th class="image">Image</th>
                <th class="name">Product Name</th>
                <th class="quantity">Quantity</th>
                <th class="price">Unit Price</th>
                <th class="total">Total</th>
              </tr>
              @foreach($content as $item)
              <tr>
                <td class="image"><a href="{!! url('san-pham',$item->id) !!}"><img title="product" alt="product" src="{!! asset('resources/upload/'.$item->options->image) !!}" height="50" width="50"></a></td>
                <td  class="name"><a href="">{!! $item->name !!}</a></td>
                <td class="quantity"><input type="text" size="1" value="{!! $item->qty !!}" name="quantity[40]" class="span1">
                  &nbsp;
                  <a href="#"><img class="tooltip-test" data-original-title="Update" src="{!! ('public/frontend/img/update.png') !!}" alt=""></a>
                  <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="{!! ('public/frontend/img/remove.png') !!}" alt=""></a></td>
                <td class="price">${!! number_format($item->price,0) !!}</td>
                <td class="total">${!! number_format($item->price*$item->qty,0) !!}</td>
              </tr>
              @endforeach
            </table>
          </div>
          <div class="row">
            <div class="pull-right">
              <div class="span4 pull-right">
                <table class="table table-striped table-bordered ">
                  <tbody>
                    <tr>
                      <td><span class="extra bold totalamout">Total :</span></td>
                      <td><span class="bold totalamout">{!! $total !!}</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="pm">
            <div class="checkoutsteptitle">
                Choose Payment Method
            </div>
            <div class="checkout">
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group" style="margin-left: 10px;">
                        <label for="paypal">
                            <input type="radio" id="paypal" name="thanh-toan" value="paypal" class="form-control payment" style="margin:0 4px !important;">Payment with paypal
                        </label>
                        <label for="balance">
                            <input type="radio" id="balance" name="thanh-toan" value="balance" class="form-control payment" style="margin:0 4px !important;">Payment with balance</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="pm">
            <div class="checkoutsteptitle">
                Confirm Payment Method
            </div>
            <div class="view_payment">
            
            </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
@stop
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.payment').click(function(){
        var method = $(this).attr('id');
        var token = $("input[name='_token']").val();
        var total = '<?php echo (float)$total; ?>';
        if(method == 'paypal'){
            $.ajax({
            url:'addmoney/paywithpaypal',
            type: 'GET',
            cache: false,
            data: {'_token':token,'total':total},
            success: function(data){
                $('.view_payment').append(data);
            }
        });
        }
        
    });
});
</script>
