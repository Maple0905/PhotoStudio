@extends('layouts.app')

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/banner.png') }}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                <h1 class="display-1 text-white mb-3">DUPE</h1>
                <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">We are happy to provide fashion photography series for established agencies, labels and organisations, as well as young talents and startups</p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container pt-md-10 pb-md-10">
        <div class="row gx-md-8 gx-xl-12 gy-6 align-item-center">
        {{-- <div class="row gx-md-8 gx-xl-12 gy-6 align-items-center"> --}}
            <div class="col-sm-6">
                <img src="{{ asset('img/home1.png') }}" srcset="{{ asset('img/home1.png 2x') }}" style="width: 100%;" alt="" />
            </div>
            <div class="col-sm-6">
                <div class="border-dark">
                    <h2>FASHION MAGAZINE AND EDITORIAL PHOTOGRAPHY</h2>
                </div>
                <p class="mt-6">Fashion is about telling stories, images replace words and this is how you sell your product. Magazine sales through photography have become a global culture and social phenomenon with advertising and events being the number one selling point. We have an exceptional team at Impact Digital Photography with experience at shooting high end fashion magazines and productions. No matter how big or small we can help you create something very extraordinary, from photographers, stylists, makeup artists, production assistants, set designs and so much more.</p>
                <p class="mt-6">If you or your organisation have a story to tell, an idea to share or word to spread, Impact Digital Photography can help you bring your ideas to life.</p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-soft-primary">
    <div class="container pt-md-10 pb-md-10">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto align-item-center">
                <div class="border-dark" style="width: 50%;">
                    <h1>OUR SERVICES</h1>
                    <p>When booking Impact Digital Photography, you can be sure that you are receiving a professional team. We only use the best equipment and the highest trained staff. We believe our services speaks for itself, and our first 100 customers of 2018 all said they would recommend us to friends and family or use us again.</p>
                </div>
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9">
                    <div class="col-md-4">
                        <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <h4 class="mb-1">1. Concept</h4>
                        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <h4 class="mb-1">2. Prepare</h4>
                        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('img/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
                        <h4 class="mb-1">3. Retouch</h4>
                        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper">
    <div class="container pt-md-10 pb-md-10">
        <div class="col-lg-9 mx-auto align-item-center">
        {{-- <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center"> --}}
            <div class="col-sm-6">
                <figure><img src="{{ asset('img/home2.png') }}" srcset="{{ asset('img/home2.png 2x') }}" alt=""></figure>
            </div>
            <div class="col-sm-6">
                <h2 class="display-4 mb-3">What We Do?</h2>
                <p class="lead fs-lg mb-8 pe-xxl-2">The full service we are offering is <span class="underline">specifically</span> designed to meet your business needs and projects.</p>
                <div class="row gx-xl-10 gy-6" data-cues="slideInUp" data-group="services">
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-5"> <i class="uil uil-phone-volume"></i> </div>
                            </div>
                            <div>
                                <h4 class="mb-1">24/7 Support</h4>
                                <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-5"> <i class="uil uil-shield-exclamation"></i> </div>
                            </div>
                            <div>
                                <h4 class="mb-1">Secure Payments</h4>
                                <p class="mb-0">Vivamus sagittis lacus augue laoreet vel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-5"> <i class="uil uil-laptop-cloud"></i> </div>
                            </div>
                            <div>
                                <h4 class="mb-1">Daily Updates</h4>
                                <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-5"> <i class="uil uil-chart-line"></i> </div>
                            </div>
                            <div>
                                <h4 class="mb-1">Market Research</h4>
                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
