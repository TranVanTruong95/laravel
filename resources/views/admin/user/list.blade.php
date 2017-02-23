@extends('admin.master')
@section('content')
<div class="col-lg-12">
    <h1 class="page-header">User
        <small>List</small>
    </h1>
</div>
@if(Session::has('flash_message'))
    <div class="col-lg-12">
        <div class="alert alert-{!! Session::get('level') !!}">
            {!! Session::get('flash_message') !!}
        </div>
    </div>  
@endif
<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Username</th>
            <th>Level</th>
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
            <td>{!! $item['username'] !!}</td>
            <td>
               @if($item['id'] == 2)
                  supperAdmin
               @elseif($item['level'] == 1)
                  Admin
               @else
                  Member
               @endif
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Do you want delete this user?')" href="{!! route('admin.user.getDelete',$item['id']) !!}"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('admin.user.getEdit',$item['id']) !!}">Edit</a></td>
        </tr>
      @endforeach
    </tbody>
</table>
@stop