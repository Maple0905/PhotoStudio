@extends('layouts.app')

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/banner.png') }}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
        <div class="row col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
            <h1 class="display-1 text-white mb-3">DUPE</h1>
            <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">We are happy to provide fashion photography series for established agencies, labels and organisations, as well as young talents and startups</p>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container pt-md-10 pb-md-10">
        <div class="row col-lg-10 mx-auto align-items-center">
            <div class="col-sm-6">
                <img src="{{ asset('img/home1.png') }}" srcset="{{ asset('img/home1.png 2x') }}" style="width: 100%;" alt="" />
            </div>
            <div class="col-sm-6">
                <div class="border-dark">
                    <h1 class="mt-3">FASHION MAGAZINE AND EDITORIAL PHOTOGRAPHY</h1>
                </div>
                <p class="mt-3">Fashion is about telling stories, images replace words and this is how you sell your product. Magazine sales through photography have become a global culture and social phenomenon with advertising and events being the number one selling point. We have an exceptional team at Impact Digital Photography with experience at shooting high end fashion magazines and productions. No matter how big or small we can help you create something very extraordinary, from photographers, stylists, makeup artists, production assistants, set designs and so much more.</p>
                <p class="mb-0">If you or your organisation have a story to tell, an idea to share or word to spread, Impact Digital Photography can help you bring your ideas to life.</p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-dark">
    <div class="container pt-md-10 pb-md-10">
        <div class="row col-lg-10 mx-auto text-center align-items-center">
            <div class="col-md-6 offset-md-3 border-light">
                <h1 class="text-white">OUR SERVICES</h1>
                <p class="text-white mb-0">When booking Impact Digital Photography, you can be sure that you are receiving a professional team. We only use the best equipment and the highest trained staff. We believe our services speaks for itself, and our first 100 customers of 2018 all said they would recommend us to friends and family or use us again.</p>
            </div>
            <div class="row mt-9">
                <div class="col-md-4">
                    <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                    <h4 class="text-white mb-1">1. Concept</h4>
                    <p class="text-white mb-0">Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                    <h4 class="text-white mb-1">2. Prepare</h4>
                    <p class="text-white mb-0">Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
                    <h4 class="text-white mb-1">3. Retouch</h4>
                    <p class="text-white mb-0">Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container pt-md-10 pb-md-10">
        <div class="row col-lg-10 mx-auto align-items-center">
            <div class="col-sm-6">
                <figure><img src="{{ asset('img/home2.png') }}" srcset="{{ asset('img/home2.png 2x') }}" alt=""></figure>
            </div>
            <div class="col-sm-6">
                <div class="row gx-xl-10 gy-6" data-cues="slideInUp" data-group="services">
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <h1 class="counter mb-0">12</h1>
                        <h4 class="mb-0">YEARS OF FASHION PHOTOGRAPHY EXPERIENCE</h4>
                        <p class="mb-0">Impact Digital Photography have spent years cultivating our expertise in the fashion industry</p>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <h1 class="counter mb-0">100%</h1>
                        <h4 class="mb-0">FEEDBACK</h4>
                        <p class="mb-0">Every six months we survey our clients and regularly receive 100% positive feedback</p>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <h1 class="counter mb-0">3,510</h1>
                        <h5 class="mb-0">HAPPY CLIENTS</h5>
                        <p class="mb-0">Customers are satisfied by our experience and professionalism</p>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <h1 class="counter mb-0">11</h1>
                        <h5 class="mb-0">SETS AND PRODUCTION LOCATIONS</h5>
                        <p class="mb-0">We use all that London has to offer to provide you with the best locations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
