@extends('layouts.app')

@section('title', "Web IT blogging Website")

@section('meta_description', "Web IT blogging Website")

@section('meta_keyword', "Web IT blogging Website")

@section('content')
<div class="bg-danger py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">

                <div class="owl-carousel category-carousel owl-theme">
                    @foreach ($all_categories as $all_cate_item)
                    <div class="item">
                        <a href="{{ url('tutorial/'.$all_cate_item->slug) }}" class="text-decoration-none">
                            <div class="card">
                                <img src="{{ asset('uploads/category/'.$all_cate_item->image) }}" alt="Image">
                                <div class="card-body text-center">
                                    <h5 class="text-dark">{{ $all_cate_item->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>

@endsection