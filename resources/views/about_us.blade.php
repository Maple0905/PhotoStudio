@extends('layouts.app')

@section('content')

<section class="wrapper bg-white">
    <div class="container py-15 py-md-17">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
            <div class="col-lg-6">
                <div class="gx-md-5 gy-5">
                    <figure class="rounded mx-md-5"><img src="{{ asset('img/about1.png') }}" srcset="{{ asset('img/about1.png 2x') }}" alt=""></figure>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="border-dark">
                    <h1 class="display-3 ls-sm mb-5">HERE TO MAKE AN IMPACT</h1>
                    <p class="mb-6">Based in the vibrant city of London, Impact digital has earned itself the reputation of one of the leading photographic studios for providing an amazing photographic and digital experience.Working in conjunction with a renowned team of industry specialists (including photographers, make-up artists and hair stylists, retouchers) Our team are able to provide you with your own production team, studio set up and high definition products to suit your personal and business needs.</p>
                </div>
                <div class="gx-md-5 gy-5">
                    <figure class="rounded mx-md-5"><img src="{{ asset('img/about2.png') }}" srcset="{{ asset('img/about2.png 2x') }}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
