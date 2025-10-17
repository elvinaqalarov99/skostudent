@extends('backend.layouts.main')

@section('content')

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <span class="label label-success float-right"><i class="fa fa-list-alt"></i></span>
                        <h5>Xaricdə Təhsil</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ \App\Models\Product::query()->count() }}</h1>
                        <small>Ümumi</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <span class="label label-info float-right"><i class="fa fa-list-alt"></i></span>
                        <h5>Qalereya</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ \App\Models\Portfolio::query()->count() }}</h1>
                        <small>Ümumi</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <span class="label label-primary float-right"><i class="fa fa-list-alt" ></i></span>
                        <h5>Xəbərlər</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ \App\Models\Blog::query()->count() }}</h1>
                        <small>Ümumi</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <span class="label label-danger float-right"><i class="fa fa-list-alt"></i></span>
                        <h5>Xidmətlər</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ \App\Models\Service::query()->count() }}</h1>
                        <small>Ümumi</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


