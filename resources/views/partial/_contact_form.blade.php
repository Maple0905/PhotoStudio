@if(Route::current()->getName() != 'terms_and_conditions')
    <section class="wrapper">
        <div class="container pt-md-10 pb-md-10">
            <div class="row col-lg-10 mx-auto align-items-center">
                <div class="col-lg-6">
                    <div class="border-dark">
                        <h1>CONTACT US</h1>
                        <p>6-10 Douston Street <br>London <br>E8 4DG</p>
                        @yield('contact_info')
                        <p><a href="/terms-and-conditions" class="text-red">Terms &amp; Conditions</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="border-dark">
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
                            <input type="submit" value="Send" class="form-control btn btn-dark mb-0" style="width: 25%;" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
