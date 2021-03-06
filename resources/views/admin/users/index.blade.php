@extends('admin.layouts.master')

@section('title', '使用者管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            使用者管理 <small>所有使用者列表</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 使用者管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <a href="{{ route('admin.users.create') }}" class="btn btn-success">建立新診所</a>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="50" style="text-align: center">診所編號</th>
                        <th style="text-align: center">診所名稱</th>
                        <th style="text-align: center">診所科別</th>
                        <th width="100"style="text-align: center">診所管理員姓名</th>
                        <th style="text-align: center">信箱</th>
                        <th style="text-align: center">password</th>
                        <th width="100" style="text-align: center">功能</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($clinics as $clinic)
                    @foreach($staffs as $staff)
                    @if($staff->position_id ===1)
                        @if($staff->clinic_id === $clinic->id)
                    <tr>
                        <td style="text-align: center">{{ $clinic->id }}</td>
                        <td style="text-align: center">{{ $clinic->name }}</td>
                        @foreach($categories as $category)
                            @if($category->id === $clinic->category_id)
                        <td style="text-align: center">{{ $category->category}}</td>
                            @endif
                        @endforeach
                        <td style="text-align: center">{{ $staff->name }}</td>
                        <td style="text-align: center">{{ $staff->email}}</td>
                        <td style="text-align: center">{{ $staff->password }}</td>

                        <td style="text-align: center">
                            <form action="/clinics/{{$clinic->id}}}/staff/{{$staff->id}}}/edit" method="POST">
                                {{ csrf_field() }}

                                <button class="btn btn-link">修改</button></form>
                                        /
                                <form action="{{ route('admin.users.destroy', $clinic->id,$staff->id) }}" method="POST">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                <button class="btn btn-link">刪除</button></form>
                        </td>
                    </tr>
                        @endif
                    @endif
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
