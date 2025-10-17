@extends('backend.layouts.main')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Təqaüdlər</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Təqaüdlər</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2 text-right">
            <a href="{{ route('admin.scholarships.create') }}" class="btn btn-primary btn-w-m mt-3">Yeni</a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <table class="table table-bordered table-hover dataTables-base" data-order="1">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>University</th>
                                <th>Tuition</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($scholarships as $scholarship)
                                <tr>
                                    <td>{{ localized($scholarship->title) }}</td>
                                    <td>{{ Str::limit(localized($scholarship->description), 50) }}</td>
                                    <td>{{ localized($scholarship->university) }}</td>
                                    <td>{{ localized($scholarship->tuition) }}</td>
                                    <td>{{ $scholarship->slug }}</td>
                                    <td>
                                        @if($scholarship->getMedia('images')->count())
                                            <ul class="list-group" style="flex-direction: row; gap:5px;">
                                                @foreach($scholarship->getMedia('images') as $media)
                                                    <li class="list-group-item p-1">
                                                        <a href="{{ $media->getUrl() }}" target="_blank">
                                                            <img src="{{ $media->getUrl() }}" alt="{{ $media->file_name }}" style="width:50px; height:auto;">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('admin.scholarships.edit', $scholarship->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>
                                        <a href="{{ route('admin.scholarships.delete', $scholarship->id) }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
