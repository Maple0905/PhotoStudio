<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Photo Studio</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/purple.css') }}">
    <link rel="preload" href="{{ asset('css/fonts/thicccboi.css') }}" as="style" onload="this.rel='stylesheet'">
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            @include('layouts.header')
        </header>
        @yield('content')
        <section class="wrapper">
            <div class="container py-md-16">
                <div class="row col-md-10 col-lg-10 col-xl-10 col-xxl-10  align-items-center mx-auto">
                    <div class="col-lg-6">
                        <div style="border-top-width: 5px !important;
                            border-right-width: 5px !important;
                            border-bottom-width: 5px !important;
                            border-left-width: 5px !important;
                            padding-top: 25px !important;
                            padding-right: 20px !important;
                            padding-bottom: 25px !important;
                            padding-left: 20px !important;
                            border-left-color: #000000 !important;
                            border-left-style: solid !important;
                            border-right-color: #000000 !important;
                            border-right-style: solid !important;
                            border-top-color: #000000 !important;
                            border-top-style: solid !important;
                            border-bottom-color: #000000 !important;
                            border-bottom-style: solid !important;">
                            <h1>CONTACT US</h1>
                            <p>
                                6-10 Douston Street <br>
                                London <br>
                                E8 4DG
                            </p>
                            <p>
                                <a href="/terms-and-conditions/">Terms &amp; Conditions</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div style="border-top-width: 5px !important;
                            border-right-width: 5px !important;
                            border-bottom-width: 5px !important;
                            border-left-width: 5px !important;
                            padding-top: 25px !important;
                            padding-right: 20px !important;
                            padding-bottom: 25px !important;
                            padding-left: 20px !important;
                            border-left-color: #000000 !important;
                            border-left-style: solid !important;
                            border-right-color: #000000 !important;
                            border-right-style: solid !important;
                            border-top-color: #000000 !important;
                            border-top-style: solid !important;
                            border-bottom-color: #000000 !important;
                            border-bottom-style: solid !important;">
                            <h1>EMAIL US</h1>
                            <form class="text-start mb-3">
                                <p>
                                    <label for="name">Your Name (required)</label>
                                    <input type="text" name="name" class="form-control" aria-required="true" aria-invalid="false" />
                                </p>
                                <p>
                                    <label for="email">Your Email (required)</label>
                                    <input type="text" name="email" class="form-control" aria-required="true" aria-invalid="false" />
                                </p>
                                <p>
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" aria-required="true" aria-invalid="false" />
                                </p>
                                <p>
                                    <label for="message">Your Message</label>
                                    <textarea name="your-message" rows="6" class="form-control" aria-required="true" aria-invalid="false"></textarea>
                                </p>
                                <input type="submit" value="Send" class="form-control btn btn-login mb-2" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <footer class="bg-dark text-inverse">
        @include('layouts.footer');
    </footer>
</body>
</html>
