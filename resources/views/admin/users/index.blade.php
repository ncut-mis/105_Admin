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
        <a href="{{ route('admin.users.create') }}" class="btn btn-success">建立新使用者</a>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="30" style="text-align: center">#</th>
                        <th>姓名</th>
                        <th>生日</th>
                        <th>電話</th>
                        <th>地址</th>
                        <th>緊急聯絡人</th>
                        <th>聯絡人電話</th>
                        <th>信箱</th>
                        <th>password</th>
                        <th width="100" style="text-align: center">功能</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td style="text-align: center">{{ $user->id }}</td>
                        <td style="text-align: center">{{ $user->name }}</td>
                        <td width="200">{{ $user->birthday }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->contact_person }}</td>
                        <td>{{ $user->cp_phone }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>

                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}"> 編輯</a>
                            /
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-link">刪除</button></form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
