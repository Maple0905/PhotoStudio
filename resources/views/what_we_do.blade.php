@extends('layouts.app')

@section('header')
    @include('layouts.header_common')
@endsection

@section('content')

<section class="wrapper">
    <div class="container pt-md-10 pb-md-10">
        <div class="row col-lg-10 mx-auto text-center align-items-center">
            <div class="col-md-6 offset-md-3 mb-10">
                <div class="border-dark">
                    <h1 class="mb-0">WHAT WE DO</h1>
                </div>
            </div>
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex">
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="{{ asset('img/product1.png') }}" srcset="{{ asset('img/product1.png 2x') }}" alt="" /></figure>
                    <h3>Studio Collaboration.</h3>
                    <p class="mb-2">We directly collaborate with amazing photographic studios within the UK, providing our own team of creatives.</p>
                    <a href="/creatives" class="btn btn-dark custom-button">Read More</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="{{ asset('img/product2.png') }}" srcset="{{ asset('img/product2.png 2x') }}" alt="" /></figure>
                    <h3>Our Products.</h3>
                    <p class="mb-2">We provide a range of products to suit our customers business and personal needs.</p>
                    <a href="/creatives" class="btn btn-dark custom-button">Read More</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="{{ asset('img/product3.png') }}" srcset="{{ asset('img/product3.png 2x') }}" alt="" /></figure>
                    <h3>Creative Team.</h3>
                    <p class="mb-2">We work with an incredible creative team that has a great passion for fashion.</p>
                    <a href="/pricreativesces" class="btn btn-dark custom-button">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
