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
                    <h1 class="mb-0">MEET OUR CREATIVES</h1>
                </div>
            </div>
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex">
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="{{ asset('img/creatives1.png') }}" srcset="{{ asset('img/creatives1.png 2x') }}" alt="" /></figure>
                    <h3 class="mb-0">Connor Tate</h3>
                    <h3>Photographer / Retoucher</h3>
                    <p class="mb-2">Connor is the head photographer and retoucher for digital impact. Connor is self taught and started his career in fashion photography. Jumping all leaps an bounds our Conner dominates any studio space with is his forward thinking and creative Imagination. Portfolio of work on demand.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="{{ asset('img/creatives2.png') }}" srcset="{{ asset('img/creatives2.png 2x') }}" alt="" /></figure>
                    <h3 class="mb-0">Daniella Montelle</h3>
                    <h3>Make up artist / Hair Stylist</h3>
                    <p class="mb-2">Daniella is our head MUA / Hair stylist studied at the London Make Up academy, Daniella is fully trained for fashion photography, editorial, bridal and fantasy. She uses her time management well and pays close attention to detail. Portfolio of work on demand.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="{{ asset('img/creatives3.png') }}" srcset="{{ asset('img/creatives3.png 2x') }}" alt="" /></figure>
                    <h3 class="mb-0">Kelly Watts</h3>
                    <h3>Stylist/Creative Director</h3>
                    <p class="mb-2">Kelly is our main freelancer for styling and creative directing. Kelly started her career in modelling, using her skills fell into styling for many big brands and continues to maximise her creative flair. if your looking for inspiring mood boards look no further. Portfolio of work on demand</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
