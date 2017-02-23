@extends('admin.master')
@section('content')
<div class="col-lg-12">
    <h1 class="page-header">Product
        <small>List</small>
    </h1>
</div>
@include('admin.block.error')
<div class="col-lg-12">
    @if (Session::has('flash_message'))
        <div class="alert alert-{!! Session::get('level') !!}">
            {!! Session::get('flash_message') !!}
        </div>
    @endif
</div>
<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Date</th>
            <th>Category</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0; ?>
        @foreach($data as $item)
            <?php $stt++; ?>
            <tr class="odd gradeX" align="center">
                <td>{!! $stt !!}</td>
                <td>{!! $item['name'] !!}</td>
                <td>{!! number_format($item['price'],0,',','.') !!} VNĐ</td>
                <td>{!! $item['created_at'] !!}</td>
                <td>
                    <?php $cate = DB::table('cates')->where('id',$item['cate_id'])->first(); ?>
                    @if($cate)
                        {!! $cate->name !!}
                    @endif
                </td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Do you want to delete this product?')" href="{!! route('admin.product.getDelete',$item['id']) !!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('admin.product.getEdit',$item['id']) !!}">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop