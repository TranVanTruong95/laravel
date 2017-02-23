<?php

namespace App\Http\Controllers;

use Request;
use App\Cate;
use App\Product;
use App\Http\Requests\ProductRequest;
use Input,File;
use App\ProductImage;

class ProductController extends Controller
{
    public function getAdd(){
    	$cate = Cate::select('id','name','parent_id')->get()->toArray();
    	return view('admin.product.add',compact('cate'));
    }

    public function postAdd(ProductRequest $request){
    	$filename            = $request->file('fImages')->getClientOriginalName();
    	$product             = new Product;
    	$product->name       = $request->txtName;
    	$product->alias      = to_slug($request->txtName);
    	$product->price      = $request->txtPrice;
    	$product->intro      = $request->txtIntro;
    	$product->content    = $request->txtContent;
    	$product->image      = $filename;
    	$product->keywords   = $request->txtKeywords;
    	$product->description= $request->txtDescription;
    	$product->user_id    = 1;
    	$product->cate_id    = $request->sltParent;
    	
    	$product->save();

    	$product_id = $product->id;
    	if(Input::hasFile('fImageProduct')){
    		foreach(Input::file('fImageProduct') as $file){
    			$pro = new ProductImage;
    			if(isset($file)){
    				$pro->images = $file->getClientOriginalName();
    				$pro->product_id = $product_id;
    				$pro->save();
    				$file->move('resources/upload/detail/',$file->getClientOriginalName());
    			}
    		}
    	}
    	$request->file('fImages')->move('resources/upload/',$filename);
    	return redirect()->route('admin.product.list')->with(['level'=>'success','flash_message'=>'Success! Complete Add Product']);
    }

    public function getList(){
    	$data = Product::select('id','name','price','cate_id','created_at')->orderBy('id','DESC')->get()->toArray();
    	return view('admin.product.list',compact('data'));
    }

    public function getDelete($id){
    	$pro_img = Product::find($id)->pimages->toArray();
    	foreach ($pro_img as $value) {
    		File::delete('resources/upload/detail/'.$value['images']);
    	}
    	$pro = Product::find($id);
    	File::delete('resources/upload/'.$pro->image);
    	$pro->delete();
    	return redirect()->route('admin.product.list')->with(['level'=>'success','flash_message'=>'Success! Complete Delete Product']);
    }

    public function getEdit($id){
    	$parent = Cate::select('id','name','parent_id')->get()->toArray();
    	$data = Product::findOrFail($id)->toArray();
    	$product_img = Product::find($id)->pimages;
    	return view('admin.product.edit',compact('data','parent','product_img'));
    }

    public function postEdit(Request $request,$id){
    	$product = Product::find($id);
    	if(Input::hasFile('fImages')){
    		$img_current = Request::input('img_current');
    		$new_img = Input::file('fImages')->getClientOriginalName();
    		$product->image = $new_img;
    		Input::file('fImages')->move('resources/upload/',$new_img);
    		File::delete('resources/upload/'.$img_current);
    	}

    	$product->name = Request::input('txtName');
    	$product->alias = to_slug(Request::input('txtName'));
    	$product->price = Request::input('txtPrice');
    	$product->intro = Request::input('txtIntro');
    	$product->content = Request::input('txtContent');
    	$product->keywords = Request::input('txtKeywords');
    	$product->description = Request::input('txtDescription');
    	$product->user_id = 1;
    	$product->cate_id = Request::input('sltParent');
    	$product->save();

    	if(Input::hasFile('fProductDetail')){
    		$product_img = new ProductImage;
    		foreach(Input::file('fProductDetail') as $file){
    			if(isset($file)){
    				$product_img->images = $file->getClientOriginalName();
    				$product_img->product_id = $id;
    				$product_img->save();
    				$file->move('resources/upload/detail/',$file->getClientOriginalName());
    			}
    		}
    	}
    	return redirect()->route('admin.product.list')->with(['level'=>'success','flash_message'=>'Success! Complete Edit Product']);
    }

    public function getDelImg($id){
    	if(Request::ajax()){
    		$idHinh = (int)Request::get('idHinh');
    		$image_detail = ProductImage::find($idHinh);
    		if(!empty($image_detail)){
    			$img = 'resources/upload/detail/'.$image_detail->image;
	    		if(File::exists($img)){
	    			File::delete($img);
	    		}
    			$image_detail->delete();
    		}
    		$result = array();
    		$result['id'] = $idHinh;
    		return $result;
    	}
    }
}
