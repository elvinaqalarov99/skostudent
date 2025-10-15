@extends('backend.layouts.main')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Tənzimləmələr</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Tənzimləmələr</strong>
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

                        <h5>Tənzimləmələr</h5>


                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered table-hover dataTables-base" data-order="1" data-display-length="25">
                            <thead>
                            <tr>
                                <th>Key</th>
                                <th>Dəyər</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($settings as $data)
                                <tr class="gradeX">
                                    <td>{{ $data->key }}</td>
                                    <td>
                                        @switch($data->type)
                                            @case(1)
                                            @case(2)
                                                {{ localized($data->value) }}
                                                @break
                                            @case(4)
                                                {{ substr(strip_tags(localized($data->value)), 0, 150) }}
                                                @break
                                            @case(3)
                                                <a href="{{ $data->getFirstMediaUrl('image') }}"><i class="fa fa-cloud-download fa-2x"></i></a>
                                            @default
                                                @break
                                        @endswitch
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('admin.settings.edit', $data->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="{{ route('admin.settings.delete', $data->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
