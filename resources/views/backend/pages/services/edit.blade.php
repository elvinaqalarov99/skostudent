@extends('backend.layouts.main')

@push('js')

@endpush

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Services</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.services.index') }}">Services</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Redaktə et</strong>
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
                                <h5>Redaktə et</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('admin.services.index') }}" class="btn btn-w-m btn-default">Geri</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form action="{{ route('admin.services.update', $service->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="row">
                                @foreach(config('app.locales') as $locale)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Başlıq {{ strtoupper($locale) }}</label>
                                        <input type="text"
                                               value="{{ old('title.' . $locale, $service->title?->$locale) }}" name="title[{{ $locale }}]"
                                               class="form-control {{ $errors->first('title.' . $locale) ? 'is-invalid' : '' }}">
                                        @error('title.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror

                                    </div>
                                </div>
                                @endforeach
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Şəkil</label>
                                        <input type="file" name="image"
                                               class="form-control {{ $errors->first('image') ? 'is-invalid' : '' }}">
                                        @error('image')<small class="text-danger">{{ $message }}</small> @enderror

                                        <div>
                                            <br>
                                            @if($service->getFirstMediaUrl('file'))
                                                <ul class="list-group" style="flex-direction: row">
                                                    <li class="list-group-item" data-media-parent>
                                                        <a href="{{ $service->getFirstMediaUrl('file') }}"
                                                           target="_blank">{{ $service->getFirstMedia('file')->file_name }}</a>
                                                        <span class="badge badge-danger remove-media"
                                                              data-route="{{ route('admin.remove-media', ['id' => $service->getFirstMedia('file')->id]) }}"
                                                              style="cursor: pointer;"><i
                                                                class="fa fa-close"></i></span>
                                                    </li>
                                                </ul>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                @foreach(config('app.locales') as $locale)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Description {{ strtoupper($locale) }}</label>
                                        <textarea name="description[{{ $locale }}]" class="form-control {{ $errors->first('description.' . $locale) ? 'is-invalid' : '' }}">{{ old('description.' . $locale, $service->description?->$locale) }}</textarea>
                                        @error('description.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="row">
                                @foreach(config('app.locales') as $locale)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Məzmun 1 {{ strtoupper($locale) }}</label>
                                        <textarea name="content_1[{{ $locale }}]"
                                                  class="form-control summernote {{ $errors->first('content_1.' . $locale) ? 'is-invalid' : '' }}">{{ old('content_1.' . $locale, $service->content_1?->$locale) }}</textarea>
                                        @error('content_1.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="row">
                                @foreach(config('app.locales') as $locale)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Məzmun 2 {{ strtoupper($locale) }}</label>
                                        <textarea name="content_2[{{ $locale }}]"
                                                  class="form-control summernote {{ $errors->first('content_2.' . $locale) ? 'is-invalid' : '' }}">{{ old('content_2.' . $locale, $service->content_2?->$locale) }}</textarea>
                                        @error('content_2.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                @endforeach
                            </div>


                            <button class="btn btn-primary">Yenilə</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
