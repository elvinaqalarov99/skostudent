@extends('backend.layouts.main')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>About History</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.about.histories.index') }}">About History</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>{{ isset($history) ? 'Edit' : 'New' }}</strong>
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
                                <h5>{{ isset($history) ? 'Edit History Item' : 'New History Item' }}</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('admin.about.histories.index') }}" class="btn btn-default btn-w-m">Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <form
                            action="{{ isset($history)
                            ? route('admin.about.histories.update', $history)
                            : route('admin.about.histories.store') }}"
                            method="POST">
                            @csrf

                            @if(isset($history))
                                @method('PUT')
                            @endif

                            <div class="row">
                                {{-- Year --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="number"
                                               name="year"
                                               value="{{ old('year', $history->year ?? '') }}"
                                               class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}">
                                        @error('year')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                {{-- Title fields --}}
                                @foreach(config('app.locales') as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title ({{ strtoupper($locale) }})</label>
                                            <input type="text"
                                                   name="title[{{ $locale }}]"
                                                   value="{{ old('title.' . $locale, $history->title->$locale ?? '') }}"
                                                   class="form-control {{ $errors->has('title.' . $locale) ? 'is-invalid' : '' }}">
                                            @error('title.' . $locale)
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="row">
                                {{-- Description fields --}}
                                @foreach(config('app.locales') as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description ({{ strtoupper($locale) }})</label>
                                            <textarea name="description[{{ $locale }}]"
                                                      class="form-control {{ $errors->has('description.' . $locale) ? 'is-invalid' : '' }}"
                                                      rows="3">{{ old('description.' . $locale, $history->description->$locale ?? '') }}</textarea>
                                            @error('description.' . $locale)
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <button class="btn btn-primary mt-3">
                                {{ isset($history) ? 'Update' : 'Save' }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
