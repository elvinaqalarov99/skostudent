@extends('backend.layouts.main')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Testimonials</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><strong>Testimonials</strong></li>
            </ol>
        </div>
        <div class="col-lg-2 text-right">
            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary mt-4">New</a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox">
            <div class="ibox-content">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($testimonials as $testimonial)
                        <tr>
                            <td>{{ localized($testimonial->name) }}</td>
                            <td>{{ localized($testimonial->position) ?: '-' }}</td>
                            <td>{{ Str::limit(strip_tags(localized($testimonial->content)), 80) }}</td>
                            <td>
                                @if($testimonial->getFirstMediaUrl('file'))
                                    <img src="{{ $testimonial->getFirstMediaUrl('file') }}" alt="{{ localized($testimonial->name) }}" style="max-width: 50px; max-height: 50px;">
                                @else
                                    -
                                @endif
                            </td>
                            <td class="text-right">
                                <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('admin.testimonials.delete', $testimonial->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

