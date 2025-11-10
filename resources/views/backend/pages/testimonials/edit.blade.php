@extends('backend.layouts.main')

@push('js')

@endpush

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Testimonials</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.testimonials.index') }}">Testimonials</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Redaktə</strong>
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
                                <h5>Redaktə</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-w-m btn-default">Geri</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                @foreach(config('app.locales') as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Ad {{ strtoupper($locale) }} *</label>
                                            <input type="text" value="{{ old('name.' . $locale, $testimonial->name?->$locale ?? '') }}" name="name[{{ $locale }}]" class="form-control {{ $errors->first('name.' . $locale) ? 'is-invalid' : '' }}" required>
                                            @error('name.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="row">
                                @foreach(config('app.locales') as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Vəzifə/Rol {{ strtoupper($locale) }}</label>
                                            <input type="text" value="{{ old('position.' . $locale, $testimonial->position?->$locale ?? '') }}" name="position[{{ $locale }}]" class="form-control {{ $errors->first('position.' . $locale) ? 'is-invalid' : '' }}" placeholder="Məsələn, Keçmiş Tələbə, Tələbə, Məzun">
                                            @error('position.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="row">
                                @foreach(config('app.locales') as $locale)
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Tövsiyə məzmunu {{ strtoupper($locale) }} *</label>
                                            <textarea name="content[{{ $locale }}]" class="form-control {{ $errors->first('content.' . $locale) ? 'is-invalid' : '' }}" rows="5" required>{{ old('content.' . $locale, $testimonial->content?->$locale ?? '') }}</textarea>
                                            @error('content.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Şəkil</label>
                                        <input type="file" name="image"
                                               class="form-control {{ $errors->first('image') ? 'is-invalid' : '' }}">
                                        @error('image')<small class="text-danger">{{ $message }}</small> @enderror
                                        @if($testimonial->getFirstMediaUrl('file'))
                                            <div class="mt-2">
                                                <img src="{{ $testimonial->getFirstMediaUrl('file') }}" alt="{{ localized($testimonial->name) }}" style="max-width: 150px; max-height: 150px;">
                                                <p class="text-muted small mt-1">Cari şəkil</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary">Yenilə</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

