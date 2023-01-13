@extends('layouts.app')

@section('header')
    @include('layouts.header_common')
@endsection

@section('content')

<section class="wrapper bg-light">
    <div class="container pt-md-10 pb-md-10">
        <div class="row col-lg-10 mx-auto align-items-center">
            <div class="col-sm-6">
                <img src="{{ asset('img/about1.png') }}" srcset="{{ asset('img/about1.png 2x') }}" style="width: 100%;" alt="" />
            </div>
            <div class="col-sm-6">
                <div class="border-dark mb-5">
                    <h1 class="display-3 mb-0">HERE TO MAKE AN IMPACT</h1>
                    <p class="mb-0">Based in the vibrant city of London, Impact digital has earned itself the reputation of one of the leading photographic studios for providing an amazing photographic and digital experience.Working in conjunction with a renowned team of industry specialists (including photographers, make-up artists and hair stylists, retouchers) Our team are able to provide you with your own production team, studio set up and high definition products to suit your personal and business needs.</p>
                </div>
                <img src="{{ asset('img/about2.png') }}" srcset="{{ asset('img/about2.png 2x') }}" style="width: 100%;" alt="" />
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container pt-md-10 pb-md-5">
        <div class="row col-lg-8 mx-auto text-center align-items-center">
            <p>Many of our clients are repeat visitors to impact digital photographic studio. We take pride in every job we undertake and understand that your images and films need to engage That’s why we’ll never compromise on quality, either on the shoots themselves or during the editing process afterwards.</p>
            <p>The majority of our work takes place in our studio but of course, we often conduct on-location shoots too.</p>
            <p class="mb-0">So if you want a more accessible, professional and friendly approach, change your current photography supplier, or need commercial photography for the first time, we’d be happy to help.</p>
        </div>
    </div>
</section>

@endsection
