@extends('layouts.app')

@section('content')

<section class="wrapper">
    <div class="container pt-12 pt-lg-8 pb-14 pb-md-17">
        <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mb-10">
                <div class="border-dark">
                    <h1>OUR PRODUCTS</h1>
                </div>
            </div>
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex">
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="{{ asset('img/product1.png') }}" srcset="{{ asset('img/product1.png 2x') }}" alt="" /></figure>
                    <h3>E-folios / Websites</h3>
                    <p class="mb-2">Our electronic portfolio (also known as eFolio, e-portfolio, E-Folio, or online portfolio) is a collection of your images to create an online vision look book of you or your product. You will be provided with a assessable link www.yourname.co.uk or www.yourbusinessname.co.uk. Our websites are easy to locate online, attach your social media links to and share with the public.</p>
                    <a href="/prices" class="more hover">Click here for Prices</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="{{ asset('img/product2.png') }}" srcset="{{ asset('img/product2.png 2x') }}" alt="" /></figure>
                    <h3>Business Cards</h3>
                    <p class="mb-2">Our business cards include a person’s name, e-mail address, phone number, website, and company name. You can use them at networking and corporate events to provide other individuals with an easy source for retrieving contact information. We offer incredible and slick designs for personal or business use.</p>
                    <a href="/prices" class="more hover">Click here for Prices</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="{{ asset('img/product3.png') }}" srcset="{{ asset('img/product3.png 2x') }}" alt="" /></figure>
                    <h3>Prints / Photo-books</h3>
                    <p class="mb-2">We offer Photographic printing is the process of producing a final image on paper for viewing. you can choose a variety of paper, size and texture. For our photo-books you choose from many of our amazing designs. Our team will be happy to advise you the best for any personal or business use.</p>
                    <a href="/prices" class="more hover">Click here for Prices</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
