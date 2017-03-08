@extends('frontend.master')
@section('content')

  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="{!! route('home') !!}">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Category</li>
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        <aside class="col-sm-3">
         <!-- Category-->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Categories</span></h2>
            <ul class="nav nav-list categories">
               @foreach($cate as $item_cate)
              <li>
                <a href="{!! url('loai-san-pham',$item_cate->id) !!}">{!! $item_cate->name !!}</a>
              </li>
              @endforeach
            </ul>
          </div>
         <!--  Best Seller -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Best Seller</span></h2>
            <ul class="bestseller">
            @foreach($product_recent as $recent)
               <li>
                  <img width="40" height="40" src="{!! asset('resources/upload/'.$recent->image) !!}" alt="product" title="product">
                  <a class="productname" href="product.html">{!! $recent->name !!}</a>
                  <span class="procategory">{!! $category->name !!}</span>
                  <span class="price">${!! $recent->price !!}</span>
               </li>
            @endforeach
            </ul>
          </div>
          <!-- Latest Product -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Latest Products</span></h2>
            <ul class="bestseller">
              @foreach($product_recent as $recent)
               <li>
                  <img width="40" height="40" src="{!! asset('resources/upload/'.$recent->image) !!}" alt="product" title="product">
                  <a class="productname" href="product.html">{!! $recent->name !!}</a>
                  <span class="procategory">{!! $category->name !!}</span>
                  <span class="price">$250</span>
               </li>
            @endforeach
            </ul>
          </div>
          <!--  Must have -->  
          <div class="sidewidt">
          <h2 class="heading2"><span>Must have</span></h2>
          <div class="flexslider" id="mainslider">
            <ul class="slides">
              <li>
                <img src="{!! url('public/frontend/img/product1.jpg') !!}" alt="" />
              </li>
              <li>
                <img src="{!! url('public/frontend/img/product2.jpg') !!}" alt="" />
              </li>
            </ul>
          </div>
          </div>
        </aside>
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="col-sm-9">          
          <!-- Category Products-->
          <section id="category">
            <div class="row">
               <!-- Category-->
                <section id="categorygrid">
                  <ul class="thumbnails grid">
                     @foreach($product as $item)
                     <li class="col-sm-4">
                      <a class="prdocutname" href="product.html">{!! $item->name !!}</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <div class="thumbnail-img">
                          <a href="{!! url('san-pham',$item->id) !!}"><img alt="" src="{!! asset('resources/upload/'.$item->image) !!}"></a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="{!! url('cart') !!}" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">${!! $item->price !!}</div>
                          </div>
                        </div>
                      </div>
                     </li>
                     @endforeach
                  </ul>
                  <div class="pagination pull-right">
                    <ul>
                      @if($product->currentPage() != 1)  
                      <li><a href="{!! $product->url($product->currentPage()-1) !!}">Prev</a></li>
                      @endif
                      @for($i = 1;$i <= $product->lastPage();$i++)
                      <li><a href="{!! $product->url($i) !!}">{!! $i !!}</a></li>
                      @endfor
                      @if($product->currentPage() != $product->lastPage())
                      <li><a href="{!! $product->url($product->currentPage()+1) !!}">Next</a></li>
                      @endif
                    </ul>
                  </div>
                </section>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
@stop
