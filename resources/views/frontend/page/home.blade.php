@extends('frontend.master')
@section('slider')
@include('frontend.block.slider')
@stop
@section('ortherdetail')
@include('frontend.block.ortherdetail')
@stop
@section('content')
<!-- Featured Product-->

  <section id="featured" class="row mt40">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See Our Most featured Products</span></h1>
      <ul class="thumbnails">
        @foreach($product as $item)
        <li class="col-sm-3">
          <a class="prdocutname" href="product.html">{!! $item['name'] !!}</a>
          <div class="thumbnail">
            <span class="sale tooltip-test">Sale</span>
            <a href="{!! url('san-pham',$item['id']) !!}"><img alt="" src="{!! asset('resources/upload/'.$item['image']) !!}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="{!! url('mua-hang',[$item['id'],$item['alias']]) !!}" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">${!! number_format($item['price'],0,',','.') !!}</div>
              </div>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </section>
  
  <!-- Latest Product-->
  <section id="latest" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Latest Products</span><span class="subtext"> See Our  Latest Products</span></h1>
      <ul class="thumbnails">
        @foreach($product_relative as $item)
        <li class="col-sm-3">
          <a class="prdocutname" href="product.html">{!! $item['name'] !!}</a>
          <div class="thumbnail">
            <a href="{!! url('san-pham',$item['id']) !!}"><img alt="" src="{!! asset('resources/upload/'.$item['image']) !!}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="{!! url('mua-hang',[$item['id'],$item['alias']]) !!}" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">${!! number_format($item['price'],0,',','.') !!}</div>
              </div>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </section>
  @stop