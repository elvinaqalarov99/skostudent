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
                    <strong>{{ isset($team) ? 'Redaktə et' : 'Yeni' }}</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5>{{ isset($team) ? 'Redaktə et' : 'Yeni' }}</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('admin.teams.index') }}" class="btn btn-w-m btn-default">Geri</a>
                            </div>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <form
                            action="{{ isset($team) ? route('admin.teams.update', $team->id) : route('admin.teams.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($team))
                                @method('put')
                            @endif

                            <div class="row">
                                {{-- Name fields --}}
                                @foreach(config('app.locales') as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name {{ strtoupper($locale) }}</label>
                                            <input type="text"
                                                   name="name[{{ $locale }}]"
                                                   value="{{ old('name.' . $locale, $team?->name?->$locale ?? '') }}"
                                                   class="form-control {{ $errors->first('name.' . $locale) ? 'is-invalid' : '' }}">
                                            @error('name.' . $locale)
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach

                                {{-- Position fields --}}
                                @foreach(config('app.locales') as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Position {{ strtoupper($locale) }}</label>
                                            <input type="text"
                                                   name="position[{{ $locale }}]"
                                                   value="{{ old('position.' . $locale, $team?->position?->$locale ?? '') }}"
                                                   class="form-control {{ $errors->first('position.' . $locale) ? 'is-invalid' : '' }}">
                                            @error('position.' . $locale)
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach

                                {{-- Linkedin --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Linkedin</label>
                                        <input type="text"
                                               name="linkedin"
                                               value="{{ old('linkedin', $team->linkedin ?? '') }}"
                                               class="form-control {{ $errors->first('linkedin') ? 'is-invalid' : '' }}">
                                        @error('linkedin')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Image --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Şəkil</label>
                                        <input type="file" name="image"
                                               class="form-control {{ $errors->first('image') ? 'is-invalid' : '' }}">
                                        @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                        @if(isset($team) && $team->getFirstMediaUrl('file'))
                                            <div class="mt-3">
                                                <ul class="list-group" style="flex-direction: row">
                                                    <li class="list-group-item" data-media-parent>
                                                        <a href="{{ $team->getFirstMediaUrl('file') }}" target="_blank">
                                                            {{ $team->getFirstMedia('file')->file_name }}
                                                        </a>
                                                        <span class="badge badge-danger remove-media"
                                                              data-route="{{ route('admin.remove-media', ['id' => $team->getFirstMedia('file')->id]) }}"
                                                              style="cursor: pointer;">
                                                            <i class="fa fa-close"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary">
                                {{ isset($team) ? 'Yenilə' : 'Saxla' }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
