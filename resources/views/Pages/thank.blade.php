@extends('NewThankMain')
@section('title', 'Thank You')
@section('meta_description' , '')
@section('meta_keywords', '')
@section('contents')
<header class="header-bg-Thnk-sec">
    <div>
        <div class="container-xl">
            <div class="px-xl-5">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 order-lg-2 ms-auto Thnk-div-1-sect-r align-items-stretch text-center mb-4">
                        <img src="{{asset('assets')}}/images/thank-you/thanku.webp" class="img-fluid rounded-4 " width="600" alt="Header Image" />
                    </div>
                    <div class="col-xl-6 col-lg-6 order-lg-1 align-items-stretch mb-4">
                        <div class="content-box mb-4 text-lg-start text-center">
                            <h1 class="cstm-n-bc-lnding-h">Thanks for Registering for the Webinar!</h1>
                            <p>You are all set. You’ll receive an email with details on attending the webinar. We look forward to seeing you there!</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center contact-cfinance-div">
                                <div class="text-start mb-2">
                                    <a href="/request-demo" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center mb-4">
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="34" viewBox="0 0 46 44" fill="none">
                                    <path d="M44.2935 22.5C44.2935 20.94 44.1497 19.44 43.8827 18H22.5986V26.52H34.7609C34.2268 29.26 32.6243 31.58 30.2206 33.14V38.68H37.555C41.8282 34.84 44.2935 29.2 44.2935 22.5Z" fill="#4285F4" />
                                    <path d="M22.5984 43.9999C28.7001 43.9999 33.8157 42.0399 37.5548 38.6799L30.2204 33.1399C28.2071 34.4599 25.639 35.2599 22.5984 35.2599C16.7227 35.2599 11.7305 31.3999 9.94309 26.2H2.42383V31.8799C6.14237 39.0599 13.7643 43.9999 22.5984 43.9999Z" fill="#34A853" />
                                    <path d="M9.9435 26.1799C9.49152 24.8599 9.22444 23.4599 9.22444 21.9999C9.22444 20.5399 9.49152 19.1399 9.9435 17.8199V12.1399H2.42424C0.88341 15.0999 0 18.4399 0 21.9999C0 25.5599 0.88341 28.8999 2.42424 31.8599L8.2794 27.4199L9.9435 26.1799Z" fill="#FBBC05" />
                                    <path d="M22.5984 8.75999C25.9266 8.75999 28.885 9.87998 31.2476 12.04L37.7191 5.73999C33.7952 2.18 28.7001 0 22.5984 0C13.7643 0 6.14237 4.93999 2.42383 12.14L9.94309 17.82C11.7305 12.62 16.7227 8.75999 22.5984 8.75999Z" fill="#EA4335" />
                                </svg>
                                <h6 class="mb-0 ms-2 text-warning google-rated-point fw-semibold">4.2</h6>
                                <div class="ms-2 stars-inner-st">
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                </div>
                                <h6 class="mb-0 ms-2 text-info rated-care-txt">Top-rated care</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Second Section -->
<section class="bg-color-2-sect-Thnk Thnk-div-2-sect">
    <div class="container-lg">
        <div class="px-xl-5">
            <h3 class="font-s-h3-new mb-3">Our Industries Look great on any device</h3>
            <p class="p-m-s">We have many types of industries in the Dynamics Stream, each with its own characteristics, challenges, and opportunities</p>
            <div class="mtop-3rem-new">
                <div class="row">
                    <div class="col-lg-6 col-md-6 align-items-stretch">
                        <div class="Thank-2-sect-card">
                            <img src="{{asset('assets')}}/images/thank-you/manufacturing-laptop.webp" class="img-fluid rounded-4" alt="Desktop" />
                            <h6>Desktop</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center align-items-stretch">
                        <div class="Thank-2-sect-card m-mrgn-top">
                            <img src="{{asset('assets')}}/images/thank-you/tab.webp" class="img-fluid tab-industry-img rounded-4" alt="Tab Industry" />
                            <h6>Tablet</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center align-items-stretch">
                        <div class="Thank-2-sect-card m-mrgn-top">
                            <img src="{{asset('assets')}}/images/thank-you/manufacturing-mob.webp" class="img-fluid rounded-4 m-h-img" alt="mobile industry" />
                            <h6>Mobile</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Second Section End -->
<!-- Third Section -->
<section class="Thrd-sect-Thnk">
    <div class="container-lg">
        <div class="px-xl-5">
            <h3 class="font-s-h3-new mb-3">Take a Peek at Our Stunning Dynamics 365 Products</h3>
            <p class="p-m-s">Explore a comprehensive suite of innovative Dynamics 365 solutions tailored to meet the diverse needs of businesses across industries. From <span style="font-weight: 500;">Dynamics 365 HR and payroll implementation</span> to <span style="font-weight: 500;">Dynamics 365 finance and operation implementation</span>, our range of products encompasses cutting-edge tools designed to streamline processes, enhance efficiency, and drive growth. Whether you're seeking <span style="font-weight: 500;">Dynamics 365 supply chain implementation services</span> or <span style="font-weight: 500;">Dynamics 365 business central implementation</span> partners, our expert consultants are here to guide you every step of the way.</p>

            <div class="splide-sld-wdth">
                <div class="slider-title">
                    <div class="slider-btns">
                        <div class="splide_prev">
                            <</div>
                                <div class="splide_next">></div>
                        </div>
                    </div>
                    <div class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <a href=""><img src="{{asset('assets')}}/images/thank-you/thanks-bc.webp" class="img-fluid" alt="" /></a>
                                </li>
                                <li class="splide__slide">
                                    <a href=""><img src="{{asset('assets')}}/images/thank-you/thanks-finance.webp" class="img-fluid" alt="" /></a>
                                    
                                </li>
                                <li class="splide__slide">
                                    <a href=""><img src="{{asset('assets')}}/images/thank-you/thanks-supply-chain.webp" class="img-fluid" alt="" /></a>
                                </li>
                                <li class="splide__slide">
                                    <a href=""><img src="{{asset('assets')}}/images/thank-you/thanks-Sales.webp" class="img-fluid" alt="" /></a>
                                </li>
                                <li class="splide__slide">
                                    <a href=""><img src="{{asset('assets')}}/images/thank-you/thanks-hr.webp" class="img-fluid" alt="" /></a>
                                </li>
                            </ul>
                        </div>
                        <div class="my-slider-progress">
                            <div class="my-slider-progress-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Third Section -->
@endsection