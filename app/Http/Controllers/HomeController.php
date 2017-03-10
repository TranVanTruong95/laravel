<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cate;
use DB,Mail;
use Request,Cart;
use View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::select('id','name','price','image','alias')->orderBy('id','DESC')->skip(0)->take(4)->get()->toArray();
        $product_relative = Product::select('id','name','price','image','alias')->orderBy('id','DESC')->skip(1)->take(4)->get()->toArray();
       
        return view('frontend.page.home',['product'=>$product,'product_relative'=>$product_relative]);
    }

    public function loaisanpham($id){
        $product = Product::where('cate_id',$id)->paginate(3);
        $category = DB::table('cates')->where('id',$id)->first();
        $cate_parent = DB::table('cates')->where('id',$id)->first();
        $cate = Cate::select('id','name','alias','parent_id')->where('parent_id',$cate_parent->parent_id)->get();
        $product_recent = Product::select('id','name','price','image')->where('cate_id',$id)->get();
        return view('frontend.page.category',compact('category','product','cate','product_recent','id'));
    }

    public function sanpham($id){
        $product_detail = Product::find($id)->toArray();
        $pro_images = Product::find($id)->pimages;
        return view('frontend.page.product',compact('product_detail','pro_images'));
    }

    public function cart(){
        return view('frontend.page.shopping-cart');
    }

    public function getLienHe(){
        return view('frontend.page.contact');
    }

    public function postLienHe(Request $request){
        $data = [
        'hoten' => Request::input('name'),
        'tinnhan' => Request::input('message')
        ];
        Mail::send('mail.blank',$data,function($message){
            $message->from('quangtruongvttb@gmail.com','Quang Truong');
            $message->to('quangtruongvttb@gmail.com','No name')->subject('Đây là mail thông báo');
        });
        echo "<script>
            alert('Cảm ơn quý khách đã góp ý. Chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất');
            window.location = '".url('/')."'</script>";
    }

    public function getMuaHang($id){
        $product_buy = DB::table('products')->where('id',$id)->first();
        Cart::add(['id'=>$id,'name'=>$product_buy->name,'qty'=>'1','price'=>$product_buy->price,'options'=>['image'=>$product_buy->image]]);
        return redirect()->route('giohang');
    }

    public function giohang(){
        $content = Cart::content();
        $total = Cart::subtotal();
        // dd($total);
        return view('frontend.page.shopping-cart',compact('content','total'));
    }

    public function xoagiohang($rowId){
        Cart::remove($rowId);
        return redirect()->route('giohang');
    }

    public function suagiohang(){
        if(Request::ajax()){
            $id = Request::get('id');
            $qty = Request::get('qty');
            Cart::update($id,$qty);
            echo 'oke';
        }
    }

    public function thanhtoan(){
        $content = Cart::content();
        $total = Cart::subtotal();
        return view('frontend.page.checkout',compact('content','total'));
    }

    public function payWithPaypal(){
        if(Request::ajax()){
            $total = Request::get('total');
            return view('paywithpaypal',compact('total'));
        }else{
            return view('paywithpaypal');            
        }
    }
}
