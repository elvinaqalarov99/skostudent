@extends('backend.layouts.main')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>{{ isset($scholarship) ? 'Redaktə et' : 'Yeni' }}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.scholarships.index') }}">Təqaüdlər</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>{{ isset($scholarship) ? 'Redaktə et' : 'Yeni' }}</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <form action="{{ isset($scholarship) ? route('admin.scholarships.update', $scholarship->id) : route('admin.scholarships.store') }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($scholarship)) @method('put') @endif

                            <div class="row">
                                {{-- Title --}}
                                @foreach(config('app.locales') as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title {{ strtoupper($locale) }}</label>
                                            <input type="text"
                                                   name="title[{{ $locale }}]"
                                                   value="{{ old('title.' . $locale, isset($scholarship) ? $scholarship?->title?->$locale ?? '' : '') }}"
                                                   class="form-control {{ $errors->first('title.' . $locale) ? 'is-invalid' : '' }}">
                                            @error('title.' . $locale)
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach

                                {{-- Description --}}
                                @foreach(config('app.locales') as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description {{ strtoupper($locale) }}</label>
                                            <textarea name="description[{{ $locale }}]" rows="4"
                                                      class="form-control {{ $errors->first('description.' . $locale) ? 'is-invalid' : '' }}">{{ old('description.' . $locale, isset($scholarship) ? $scholarship?->description?->$locale ?? '' : '') }}</textarea>
                                            @error('description.' . $locale)
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach

                                {{-- Tuition --}}
                                @foreach(config('app.locales') as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tuition {{ strtoupper($locale) }}</label>
                                            <input type="text"
                                                   name="tuition[{{ $locale }}]"
                                                   value="{{ old('tuition.' . $locale, isset($scholarship) ? $scholarship?->tuition?->$locale ?? '' : '') }}"
                                                   class="form-control {{ $errors->first('tuition.' . $locale) ? 'is-invalid' : '' }}">
                                            @error('tuition.' . $locale)
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach

                                {{-- University --}}
                                @foreach(config('app.locales') as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>University {{ strtoupper($locale) }}</label>
                                            <input type="text"
                                                   name="university[{{ $locale }}]"
                                                   value="{{ old('university.' . $locale, isset($scholarship) ? $scholarship->university?->$locale ?? '' : '') }}"
                                                   class="form-control {{ $errors->first('university.' . $locale) ? 'is-invalid' : '' }}">
                                            @error('university.' . $locale)
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach

                                {{-- Deadline --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deadline</label>
                                        <input type="date" name="deadline"
                                               value="{{ old('deadline', isset($scholarship) ? $scholarship->deadline?->format('Y-m-d') : '') }}"
                                               class="form-control @error('deadline') is-invalid @enderror">
                                        @error('deadline')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Images --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="images[]" multiple
                                               class="form-control {{ $errors->first('images') ? 'is-invalid' : '' }}">
                                        @error('images')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                        @if(isset($scholarship) && $scholarship->getMedia('images')->count())
                                            <div class="mt-3">
                                                <ul class="list-group" style="flex-direction: row; gap:5px;">
                                                    @foreach($scholarship->getMedia('images') as $media)
                                                        <li class="list-group-item" data-media-parent>
                                                            <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->file_name }}</a>
                                                            <span class="badge badge-danger remove-media"
                                                                  data-route="{{ route('admin.remove-media', ['id' => $media->id]) }}"
                                                                  style="cursor: pointer;">
                                                            <i class="fa fa-close"></i>
                                                        </span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary">{{ isset($scholarship) ? 'Yenilə' : 'Saxla' }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
