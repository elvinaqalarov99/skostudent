@extends('backend.layouts.main')

@push('js')
@endpush

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>About Us</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><strong>About Us</strong></li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox">
            <div class="ibox-title"><h5>Edit About Us</h5></div>
            <div class="ibox-content">
                <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if(isset($about))
                        @method('PUT')
                    @endif

                    <div class="row">
                        @foreach(config('app.locales') as $locale)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Short Info ({{ strtoupper($locale) }})</label>
                                    <textarea name="short_info[{{ $locale }}]" class="form-control">{{ old('short_info.' . $locale, $about?->short_info?->$locale ?? '') }}</textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <hr>

                    <div class="row">
                        @foreach(['values' => 'Dəyərlərimiz', 'mission' => 'Missiyamız', 'vision' => 'Vizyonumuz'] as $field => $label)
                            @foreach(config('app.locales') as $locale)
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ $label }} ({{ strtoupper($locale) }})</label>
                                        <textarea name="{{ $field }}[{{ $locale }}]" class="form-control">{{ old("$field.$locale", $about?->$field?->$locale ?? '') }}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>

                    <hr>

                    <h4>Statistics</h4>
                    <div class="row">
                        <div class="col-md-3"><label>Countries</label><input type="number" name="country_count" class="form-control" value="{{ old('country_count', $about->country_count ?? 0) }}"></div>
                        <div class="col-md-3"><label>Students</label><input type="number" name="student_count" class="form-control" value="{{ old('student_count', $about->student_count ?? 0) }}"></div>
                        <div class="col-md-3"><label>Scholarships</label><input type="number" name="scholarship_count" class="form-control" value="{{ old('scholarship_count', $about->scholarship_count ?? 0) }}"></div>
                        <div class="col-md-3"><label>Universities</label><input type="number" name="university_count" class="form-control" value="{{ old('university_count', $about->university_count ?? 0) }}"></div>
                    </div>

                    {{-- Image --}}
                    <div class="col-md-6 mt-5">
                        <div class="form-group">
                            <label>Şəkillər</label>
                            <input type="file" name="images[]" multiple
                                   class="form-control {{ $errors->first('images') ? 'is-invalid' : '' }}">
                            @error('images')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror

                            {{-- Display existing images --}}
                            @if(isset($about) && $about->getMedia('file')->count())
                                <div class="mt-3 d-flex flex-wrap gap-2">
                                    @foreach($about->getMedia('file') as $media)
                                        <div class="position-relative" data-media-parent>
                                            <a href="{{ $media->getUrl() }}" target="_blank">
                                                <img src="{{ $media->getUrl() }}" alt="{{ $media->file_name }}" style="width:80px; height:80px; object-fit:cover; border-radius:4px;">
                                            </a>
                                            <span class="badge badge-danger remove-media position-absolute"
                                                  data-route="{{ route('admin.remove-media', ['id' => $media->id]) }}"
                                                  style="cursor: pointer; top:0; right:0;">
                                                <i class="fa fa-close"></i>
                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
