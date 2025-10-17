@extends('backend.layouts.main')

@push('js')

@endpush

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Study Abroad</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.products.index') }}">Study Abroad</a>
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
                                <a href="{{ route('admin.products.index') }}" class="btn btn-w-m btn-default">Geri</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form action="{{ route('admin.products.update', $product->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="row">
                                @foreach(config('app.locales') as $locale)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Başlıq {{ strtoupper($locale) }}</label>
                                        <input type="text"
                                               value="{{ old('title.' . $locale, $product?->title?->$locale) }}" name="title[{{ $locale }}]"
                                               class="form-control {{ $errors->first('title.' . $locale) ? 'is-invalid' : '' }}">
                                        @error('title.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Şəkil</label>
                                        <input type="file" name="images[]" multiple
                                               class="form-control {{ $errors->first('images') ? 'is-invalid' : '' }}">
                                        @error('images')<small class="text-danger">{{ $message }}</small> @enderror

                                        <div>
                                            <br>
                                            @if(count($product?->getMedia('images') ?? []))
                                                <ul class="list-group" style="flex-direction: row">
                                                    @foreach($product?->getMedia('images') as $media)
                                                        <li class="list-group-item" data-media-parent>
                                                            <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->file_name }}</a>
                                                            <span class="badge badge-danger remove-media" data-route="{{ route('admin.remove-media', ['id' => $media->id]) }}" style="cursor: pointer;"><i class="fa fa-close"></i></span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Universitet sayı</label>
                                        <input type="number" value="{{ old('university_count', $product->university_count) }}" name="university_count" class="form-control {{ $errors->first('university_count') ? 'is-invalid' : '' }}">
                                        @error('university_count')<small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

{{--                                @foreach(config('app.locales') as $locale)--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="">Sitat {{ strtoupper($locale) }}</label>--}}
{{--                                            <textarea  name="quote[{{ $locale }}]" class="form-control summernote {{ $errors->first('quote.' . $locale) ? 'is-invalid' : '' }}" >{{ old('quote.' . $locale, $product?->quote?->$locale) }}</textarea>--}}
{{--                                            @error('quote.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
                            </div>

                            <div class="row">
                                @foreach(config('app.locales') as $locale)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Məzmun 1 {{ strtoupper($locale) }}</label>
                                        <textarea name="content_1[{{ $locale }}]"
                                                  class="form-control summernote {{ $errors->first('content_1.' . $locale) ? 'is-invalid' : '' }}">{{ old('content_1.' . $locale, $product?->content_1?->$locale) }}</textarea>
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
                                                  class="form-control summernote {{ $errors->first('content_2.' . $locale) ? 'is-invalid' : '' }}">{{ old('content_2.' . $locale, $product?->content_2?->$locale) }}</textarea>
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
