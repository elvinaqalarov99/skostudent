@extends('backend.layouts.main')

@push('js')

    <script>
        $('[name="type"]').on('change', function () {
            let type = $(this).val();
            $('[data-toggle="type"]').addClass('d-none').each((index, element) => {
                $(element).find('input').attr('disabled', 'disabled');
                $(element).find('textarea').attr('disabled', 'disabled');
                $(element).find('input').removeClass('is-invalid');
                $(element).find('textarea').removeClass('is-invalid');
            })


            $(`[data-toggle="type"][data-type="${type}"]`).removeClass('d-none').each((index, element) => {
                $(element).find('input').removeAttr('disabled')
                $(element).find('textarea').removeAttr('disabled')
            })
        })
    </script>
@endpush

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Tənzimləmələr</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.settings.index') }}">Tənzimləmələr</a>
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
                                <h5>Redaktə et ({{ $setting->key }})</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('admin.settings.index') }}" class="btn btn-w-m btn-default">Geri</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form action="{{ route('admin.settings.update', $setting->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row {{ old('type', $setting->type) && old('type', $setting->type) != 1 ? 'd-none' : '' }}"
                                 data-type="1" data-toggle="type">
                                @foreach(config('app.locales') as $locale)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Dəyər {{ strtoupper($locale) }}</label>
                                        <input type="text"
                                               value="{{ old('type', $setting->type) == 1 ? old('value.' . $locale, $setting?->value?->$locale) : '' }}"
                                               {{ old('type', $setting->type) != 1 && old('type', $setting->type) ? 'disabled' : '' }} name="value[{{ $locale }}]"
                                               class="form-control {{ $errors->first('value.' . $locale) ? 'is-invalid' : '' }}">
                                        @error('value.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="row {{ old('type', $setting->type) == 2 ? '' : 'd-none ' }}" data-type="2"
                                 data-toggle="type">
                                @foreach(config('app.locales') as $locale)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Dəyər {{ strtoupper($locale) }}</label>
                                        <textarea
                                            {{ old('type', $setting->type) == 2  ? '' : 'disabled' }} name="value[{{ $locale }}]"
                                            class="form-control {{ $errors->first('value.' . $locale) ? 'is-invalid' : '' }}">{{ old('type', $setting->type) == 2 ? old('value.' . $locale, $setting?->value?->$locale) : '' }}</textarea>
                                        @error('value.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="row {{ old('type', $setting->type) == 3 ? '' : 'd-none' }}" data-type="3"
                                 data-toggle="type">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Dəyər </label>
                                        <input type="file"
                                               {{ old('type', $setting->type) == 3 ? '' : 'disabled' }} name="value"
                                               class="form-control {{ $errors->first('value') ? 'is-invalid' : '' }}">

                                        <div>
                                            <br>
                                            @if($setting->getFirstMediaUrl('image'))
                                                <ul class="list-group" style="flex-direction: row">
                                                    <li class="list-group-item" data-media-parent>
                                                        <a href="{{ $setting->getFirstMediaUrl('image') }}"
                                                           target="_blank">{{ $setting->getFirstMedia('image')->file_name }}</a>
                                                        <span class="badge badge-danger remove-media"
                                                              data-route="{{ route('admin.remove-media', ['id' => $setting->getFirstMedia('image')->id]) }}"
                                                              style="cursor: pointer;"><i
                                                                class="fa fa-close"></i></span>
                                                    </li>
                                                </ul>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row {{ old('type', $setting->type) == 4 ? '' : 'd-none ' }}" data-type="4"
                                 data-toggle="type">
                                @foreach(config('app.locales') as $locale)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Dəyər {{ strtoupper($locale) }}</label>
                                        <textarea
                                            {{ old('type', $setting->type) == 4  ? '' : 'disabled' }} name="value[{{ $locale }}]"
                                            class="form-control summernote {{ $errors->first('value.' . $locale) ? 'is-invalid' : '' }}">{{ old('type', $setting->type) == 4 ? old('value.' . $locale, $setting?->value?->$locale) : '' }}</textarea>
                                        @error('value.' . $locale)<small class="text-danger">{{ $message }}</small> @enderror
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
