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
                <li class="breadcrumb-item active">
                    <strong>Study Abroad</strong>
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
                                <h5>Study Abroad</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('admin.products.create') }}" class="btn btn-w-m btn-primary">Yeni</a>
                            </div>
                        </div>


                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered table-hover dataTables-base" data-order="1">
                            <thead>
                            <tr>
                                <th>Başlıq</th>
                                <th>Slug</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $data)
                                <tr class="gradeX">

                                    <td>{{ localized($data->title) }}</td>
                                    <td>{{ $data->slug }}</td>

                                    <td class="text-right">
                                        <a href="{{ route('admin.products.edit', $data->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="{{ route('admin.products.delete', $data->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
