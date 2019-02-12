@extends('admin.layouts.master')

@section('title', '新增使用者')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                新增使用者 <small>請輸入資料</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 使用者管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->


    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <form action="/admin/users" method="POST" role="form">
                {{ csrf_field() }}

                <div class="form-group">
                    <label>name：</label>
                    <input name ='name'  class="form-control" placeholder="請輸入name">

                </div>

                <div class="form-group">
                    <label>birthday：</label>
                    <input name="birthday" class="form-control" placeholder="請輸入birthday">
                </div>

                <div class="form-group">
                    <label>phone：</label>
                    <input name="phone" class="form-control" placeholder="請輸入phone">
                </div>

                <div class="form-group">
                    <label>birthday：</label>
                    <input name="birthday" class="form-control" placeholder="請輸入birthday">
                </div>

                <div class="form-group">
                    <label>address：</label>
                    <input name="address" class="form-control" placeholder="請輸入address">
                </div>

                <div class="form-group">
                    <label>contact_person：</label>
                    <input name="contact_person" class="form-control" placeholder="請輸入contact_person">
                </div>

                <div class="form-group">
                    <label>cp_phone：</label>
                    <input name="cp_phone" class="form-control" placeholder="請輸入cp_phone">
                </div>

                <div class="form-group">
                    <label>email：</label>
                    <input name="email" class="form-control" placeholder="請輸入email">
                </div>

                <div class="form-group">
                    <label>password：</label>
                    <input name= "password" class="form-control"  placeholder="請輸入password">
                </div>

                <div class="form-group">
                    <label>email_verified_at：</label>
                    <input name="email_verified_at" class="form-control" placeholder="請輸入email_verified_at">
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">新增</button>
                </div>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection
