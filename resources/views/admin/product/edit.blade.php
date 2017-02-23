@extends('admin.master')
@section('content')
<style type="text/css">
    .img_current {
        max-width: 150px;
    }
    .img_detail {
        max-width: 200px;
    }
    .icon_del {
        position: relative;
        top: -50px;
        left: -20px;
    }
</style>
<div class="col-lg-12">
    <h1 class="page-header">Product
        <small>Edit</small>
    </h1>
</div>
@include('admin.block.error')
<!-- /.col-lg-12 -->
<form action="" method="POST" name="frmEditProduct" enctype="multipart/form-data">
    <div class="col-lg-7" style="padding-bottom:120px">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="sltParent">
                <?php cate_parent($parent,0,'--',$data['cate_id']); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Username" value="{!! old('txtName',isset($data)? $data['name']:'') !!}" />
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="txtPrice" placeholder="Please Enter Password" value="{!! old('txtPrice',isset($data)? $data['price']:'') !!}" />
        </div>
        <div class="form-group">
            <label>Intro</label>
            <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro',isset($data)? $data['intro']:'') !!}</textarea>
            <script type="text/javascript">ckeditor('txtIntro')</script>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent',isset($data)? $data['content']:'') !!}</textarea>
            <script type="text/javascript">ckeditor('txtContent')</script>
        </div>
        <div class="form-group">
            <img src="{{ asset('resources/upload/'.$data['image']) }}" class="img_current">
            <input type="hidden" name="img_current" value="{!! $data['image'] !!}">
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages">
        </div>
        <div class="form-group">
            <label>Product Keywords</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords',isset($data)? $data['keywords']:'') !!}" />
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription',isset($data)? $data['description']:'') !!}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Product Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-4">
        @foreach($product_img as $key => $item)
            <div class="form-group" id="{!! $key !!}">
                <img src="{!! asset('resources/upload/detail/'.$item['images']) !!}" class="img_detail" idHinh="{!! $item['id'] !!}" id="{!! $key !!}">
                <a type="button" class="btn btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a>
            </div>
        @endforeach
        <div id="insert"></div>
        <button type="button" class="btn btn-primary" id="addImages">Add Images</button>
    </div>
<form>
@stop