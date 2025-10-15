@extends('backend.layouts.main')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>İdarəçilər</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.admins.index') }}">İdarəçilər</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Yeni</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <div class="ibox-tools mb-3">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="fullscreen-link">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5>Yeni</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('admin.admins.index') }}" class="btn btn-w-m btn-default">Geri</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form action="{{ route('admin.admins.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Ad</label>
                                        <input type="text"
                                               value="{{ old('name') }}" name="name"
                                               class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">E-poçt</label>
                                        <input type="text"
                                               value="{{ old('email') }}" name="email"
                                               class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Şifrə</label>
                                        <input type="password" name="password"
                                               class="form-control {{ $errors->first('password') ? 'is-invalid' : '' }}">

                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary">Saxla</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
