@extends('admin.master')
@section('content')
<div class="col-lg-12">
    <h1 class="page-header">Category
        <small>Edit</small>
    </h1>
</div>
@include('admin.block.error')
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="{!! route('admin.cate.postEdit',$data['id']) !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="stlParent">
                <?php cate_parent($parent,0,'--',$data['parent_id']); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Category Name</label>
            <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{!! old('txtCateName',isset($data)? $data['name']:'') !!}" />
        </div>
        <div class="form-group">
            <label>Category Order</label>
            <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" value="{!! old('txtOrder',isset($data)? $data['order']:'') !!}"/>
        </div>
        <div class="form-group">
            <label>Category Keywords</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords',isset($data)? $data['keywords']:'') !!}"/>
        </div>
        <div class="form-group">
            <label>Category Description</label>
            <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription',isset($data)? $data['description']:'') !!}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Category Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@stop