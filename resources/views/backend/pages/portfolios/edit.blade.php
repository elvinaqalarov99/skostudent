@extends('backend.layouts.main')

@push('js')

@endpush

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Qalereya</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.portfolios.index') }}">Qalereya</a>
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
                                <a href="{{ route('admin.portfolios.index') }}" class="btn btn-w-m btn-default">Geri</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="row">
                                @foreach(config('app.locales') as $locale)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Başlıq {{ strtoupper($locale) }}</label>
                                        <input type="text"
                                               value="{{ old('title.' . $locale, $portfolio?->title?->$locale) }}" name="title[{{ $locale }}]"
                                               class="form-control {{ $errors->first('title.' . $locale) ? 'is-invalid' : '' }}">
                                        @error('title')<small class="text-danger">{{ $message }}</small> @enderror

                                    </div>
                                </div>
                                @endforeach

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Qalereya Tipləri</label>
                                        <select name="portfolio_type" class="form-control {{ $errors->first('portfolio_type') ? 'is-invalid' : '' }}">
                                            <option value="" disabled selected>-- Seçim edin --</option>
                                            @foreach(\App\Models\PortfolioType::all() as $type)
                                                <option @selected(old('portfolio_type', $portfolio->portfolio_type_id) == $type->id) value="{{ $type->id }}">{{ localized($type->title) }}</option>
                                            @endforeach
                                        </select>
                                        @error('portfolio_type')<small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                @foreach(config('app.locales') as $locale)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Məzmun {{ strtoupper($locale) }}</label>
                                        <textarea  name="content[{{ $locale }}]" class="form-control summernote {{ $errors->first('content.' . $locale) ? 'is-invalid' : '' }}" >{{ old('content.' . $locale, $portfolio?->content?->$locale) }}</textarea>
                                        @error('content.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Images</label>
                                        <input type="file" name="images[]" multiple class="form-control {{ $errors->first('image') ? 'is-invalid' : '' }}">
                                        @error('image')<small class="text-danger">{{ $message }}</small> @enderror

                                        <div>
                                            <br>
                                            @if(count($portfolio?->getMedia('images') ?? []))
                                                <ul class="list-group" style="flex-direction: row">
                                                    @foreach($portfolio?->getMedia('images') as $media)
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
                            </div>

                            <button class="btn btn-primary">Yenilə</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
