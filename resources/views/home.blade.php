@extends('layouts.app')

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/banner.png') }}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                <h1 class="display-1 text-white mb-3">Our Services</h1>
                <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">We are a creative company that focuses on establishing long-term relationships with customers.</p>
            </div>
        </div>
    </div>
</section>


<section class="wrapper bg-light">
    <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-6 align-items-center">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="img-mask mask-1"><img src="{{ asset('img/photos/about29.jpg') }}" srcset="{{ asset('img/photos/about29@2x.jpg 2x') }}" alt="" /></div>
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 mb-5">FASHION MAGAZINE AND EDITORIAL PHOTOGRAPHY</h2>
                <p class="mb-6">Fashion is about telling stories, images replace words and this is how you sell your product. Magazine sales through photography have become a global culture and social phenomenon with advertising and events being the number one selling point. We have an exceptional team at Impact Digital Photography with experience at shooting high end fashion magazines and productions. No matter how big or small we can help you create something very extraordinary, from photographers, stylists, makeup artists, production assistants, set designs and so much more.</p>
                <p class="mb-6">If you or your organisation have a story to tell, an idea to share or word to spread, Impact Digital Photography can help you bring your ideas to life.</p>
            </div>
        </div>
    </div>
</section>


<section class="wrapper bg-soft-primary">
    <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">
        <div class="row text-center">
            <div class="col-lg-9 mx-auto">
                <h2 class="fs-15 text-uppercase text-muted mb-3 mt-12">Our Process</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Find out everything you need to know about creating a business process model</h3>
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9">
                    <div class="col-md-4">
                        <img src="./assets/img/icons/lineal/light-bulb.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <h4 class="mb-1">1. Concept</h4>
                        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/img/icons/lineal/settings-3.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <h4 class="mb-1">2. Prepare</h4>
                        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/img/icons/lineal/design.svg" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
                        <h4 class="mb-1">3. Retouch</h4>
                        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection