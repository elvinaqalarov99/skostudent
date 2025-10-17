@extends('backend.layouts.main')

@push('js')
@endpush

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Privacy Policy</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><strong>Privacy Policy</strong></li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox">
            <div class="ibox-title"><h5>Edit Privacy Policy</h5></div>
            <div class="ibox-content">
                <form action="{{ route('admin.privacy-policy.update') }}" method="POST">
                    @csrf

                    @if(isset($privacy))
                        @method('PUT')
                    @endif

                    <div class="row">
                        @foreach(config('app.locales') as $locale)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title ({{ strtoupper($locale) }})</label>
                                    <input type="text" value="{{ old('title.' . $locale, $privacy?->title?->$locale ?? '') }}" name="title[{{ $locale }}]" class="form-control {{ $errors->first('title.' . $locale) ? 'is-invalid' : '' }}">
                                    @error('title.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        @endforeach

                        @foreach(config('app.locales') as $locale)
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Content ({{ strtoupper($locale) }})</label>
                                    <textarea name="description[{{ $locale }}]" class="form-control summernote">{{ old('description.' . $locale, $privacy?->description?->$locale ?? '') }}</textarea>
                                    @error('description.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <hr>

                    <button class="btn btn-primary mt-4">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
