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
                    <label>診所編號：</label>
                    <input type="text" name ='clinic_no'  class="form-control" value="{{$clinics->first()->id+1}}" readonly>
                </div>

                <div class="form-group">
                    <label>診所名稱：</label>
                    <input name ='clinic_name'  class="form-control" placeholder="請輸入診所名稱">
                </div>

                <div class="form-group">
                    <label>診所管理員姓名：</label>
                    <input name="clinic_admin" class="form-control" placeholder="請輸入診所管理員姓名">
                </div>

                <div class="form-group">
                    <label>email：</label>
                    <input name="email" class="form-control" placeholder="請輸入email">
                </div>

                <div class="form-group">
                    <label>password：</label>
                    <input type="password" name= "password" class="form-control"  placeholder="請輸入password">
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
