@extends('backend.layouts.main')

@push('css')

    <style>

        .user__avatar__update {
            padding-bottom: 50px;
        }

        .user__avatar__update img {
            width: 150px;
            height: 150px;
            border-radius: 100%;
        }

        .user__avatar__update .avatar {
            width: 150px;
            height: 150px;
            position: relative;
        }

    </style>

@endpush


@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Profil</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Profil</strong>
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
                        <div class="ibox-tools">
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
                    </div>
                    <div class="ibox-content">
                        <div class="user__avatar__update">
                            <div class="avatar">
                                <img
                                    src="{{ asset('assets/images/default.jpg')  }}"
                                    alt="">
                            </div>
                        </div>
                        <form action="{{ route('admin.profile.save') }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Ad soyad</label>
                                        <input type="text"
                                               value="{{ old('name', auth('admins')->user()->name) }}" name="name"
                                               class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">E-poçt</label>
                                        <input type="text"
                                               value="{{ old('email', auth('admins')->user()->email) }}" name="email"
                                               class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Şifrə</label>
                                        <input type="password"
                                               value="" name="password"
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
