@extends('backend.layouts.main')

@push('js')

@endpush

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Teams (Home Page)</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.teams.index') }}">Teams (Home Page)</a>
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
                                <a href="{{ route('admin.teams.index') }}" class="btn btn-w-m btn-default">Geri</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row" >
                                @foreach(config('app.locales') as $locale)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name {{ strtoupper($locale) }}</label>
                                        <input type="text" value="{{ old('name.' . $locale) }}" name="name[{{ $locale }}]" class="form-control {{ $errors->first('name.' . $locale) ? 'is-invalid' : '' }}">
                                        @error('name.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                @endforeach
                                    @foreach(config('app.locales') as $locale)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Position {{ strtoupper($locale) }}</label>
                                        <input type="text" value="{{ old('position.' . $locale) }}" name="position[{{ $locale }}]" class="form-control {{ $errors->first('position.' . $locale) ? 'is-invalid' : '' }}">
                                        @error('position.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                    @endforeach
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Şəkil</label>
                                        <input type="file" name="image"
                                               class="form-control {{ $errors->first('image') ? 'is-invalid' : '' }}">
                                        @error('image')<small class="text-danger">{{ $message }}</small> @enderror
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
