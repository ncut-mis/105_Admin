@extends('admin.layouts.master')

@section('title', '使用者')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯使用者 <small>編輯使用者內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 使用者管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

@include('admin.layouts.partials.validation')

<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="/admin/users/{{$users->id}}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label>姓名：</label>
                <input name="name" class="form-control" placeholder="請輸入姓名" value="{{$users->name}}">
            </div>

            <div class="form-group">
                <label>生日：</label>
                <input name="birthday" class="form-control" placeholder="請輸入生日" value="{{$users->birthday}}">
             </div>

            <div class="form-group">
                <label>電話：</label>
                <input name="phone" class="form-control" placeholder="請輸入電話" value="{{$users->phone}}">
            </div>

            <div class="form-group">
                <label>地址：</label>
                <input name="address" class="form-control" placeholder="請輸入地址" value="{{$users->address}}">
            </div>

            <div class="form-group">
                <label>聯絡人：</label>
                <input name="contact_person" class="form-control" placeholder="請輸入聯絡人" value="{{$users->contact_person}}">
            </div>

            <div class="form-group">
                <label>聯絡人電話：</label>
                <input name="cp_phone" class="form-control" placeholder="請輸入聯絡人電話" value="{{$users->cp_phone}}">
            </div>

            <div class="form-group">
                <label>信箱：</label>
                <input name="email" class="form-control" placeholder="請輸入email" value="{{$users->email}}">
            </div>

            <div class="form-group">
                <label>password：</label>
                <input name="password" class="form-control" placeholder="請輸入password" value="{{$users->password}}">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">更新</button>
            </div>

        </form>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
