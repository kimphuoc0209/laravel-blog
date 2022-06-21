@extends('layouts.master')
@section('title','Blog Dashboard')
@section('content')

<div class="container-fluid px-4">

    <div class="row mt-3">
        <div class="col-md-12">
            @if(session('message'))
            <h4 class="alert alert-warning">{{ session('message') }}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Website Setting</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/settings') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Website Name</label>
                            <input type="text" name="website_name" required @if($setting)
                                value="{{ $setting->website_name }}" @endif class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Website Logo</label>
                            <input type="file" name="website_logo" required class="form-control" />
                            @if ($setting)
                            <img src="{{ asset('uploads/settings/'.$setting->logo) }}" width="70px" height="70px"
                                alt="logo" />
                            @endif
                        </div>
                        <div class="mb-3">
                            <label>Website Favicon</label>
                            <input type="file" name="website_favicon" class="form-control" />
                            @if ($setting)
                            <img src="{{ asset('uploads/settings/'.$setting->favicon) }}" width="70px" height="70px"
                                alt="favicon" />
                            @endif
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" required rows="3">@if($setting)
                            {{ $setting->description }} @endif</textarea>
                        </div>

                        <h4>SEO - Meta Tags</h4>
                        <div class="mb-3">
                            <label>Meta title</label>
                            <input type="text" name="meta_title" @if($setting) value="{{ $setting->meta_title }}" @endif
                                class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Meta keywords</label>
                            <textarea type="text" name="meta_keywords" class="form-control" rows="3">@if($setting)
                            {{ $setting->meta_keywords }} @endif</textarea>
                        </div>
                        <div class="mb-3">
                            <label>Meta Description</label>
                            <textarea type="text" name="meta_description" class="form-control" rows="3">@if($setting)
                            {{ $setting->meta_description }} @endif</textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection