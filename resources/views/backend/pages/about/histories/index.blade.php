@extends('backend.layouts.main')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>About History</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><strong>History</strong></li>
            </ol>
        </div>
        <div class="col-lg-2 text-right">
            <a href="{{ route('admin.about.histories.create') }}" class="btn btn-primary mt-4">New</a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox">
            <div class="ibox-content">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Year</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($histories as $history)
                        <tr>
                            <td>{{ $history->year }}</td>
                            <td>{{ localized($history->title) }}</td>
                            <td>{{ Str::limit(localized($history->description), 80) }}</td>
                            <td class="text-right">
                                <a href="{{ route('admin.about.histories.edit', $history) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('admin.about.histories.delete', $history) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
