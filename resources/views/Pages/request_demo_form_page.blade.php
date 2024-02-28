@extends('newhomemain')
@section('title','Request Demo Form')
@section('meta_description' ,'')
@section('meta_keywords', '')

@section('contents')
<!--Section Starts-->
<header class="header-sect-for-demo-form-page">
    <div class="container-xl">
        <div class="px-xl-5">
            <div class="bg-clr-for-main-di-RDP">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6 align-items-stretch">
                        <h1>Need to talk to<br>a Consultant</h1>
                        <p>Book a problem-solving call with An Expert</p>
                        <div class="tick-contnt">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-check flex-shrink-0 sz-i"></i>
                                <p class="flex-grow-1 mb-0 ms-3">A live one-on-one product demo of Dynamics Stream</p>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-check flex-shrink-0 sz-i"></i>
                                <p class="flex-grow-1 mb-0 ms-3">Free advice and insights for your unique use case</p>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-check flex-shrink-0 sz-i"></i>
                                <p class="flex-grow-1 mb-0 ms-3">Additional resources specific to your needs</p>
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
                                <h6 class="mb-0 ms-2 text-info rated-care-txt text-white">Top-rated care</h6>
                            </div>
                    </div>
                    <div class="col-xl-6 col-md-6 pdng-zero-nfB align-items-stretch">
                        <!--content title-->
                        <div class="container brdr-rds overflow-hidden">
                            <!--multisteps-form-->
                            <div class="multisteps-form">
                                <!--progress bar-->

                                <!-- <div class="multisteps-form__progress">
                                    <button disabled class="multisteps-form__progress-btn js-active" type="" title="Step 1">Step 1</button>
                                    <button disabled class="multisteps-form__progress-btn" type="" title="Step 2">Step 2</button>
                                </div> -->
                                <div class="btn-outline-theme-RDP">
                                    <form class="contact-form multisteps-form__form" id="contactForm" action="/contact-form" enctype="multipart/form-data" method="post" >
                                        @csrf
                                        <!--single form panel-->
                                        <!--single form panel-->
                                        <div class="multisteps-form__panel js-active pdn-for-form-demo rounded" data-animation="slideHorz">
                                            <div class="multisteps-form__content">
                                                <div class="row RDF-st">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="">Full Name</label>
                                                        <input type="text" id="name" name="name" class=" input-f-st-RDF" placeholder="Enter Your Full Name" required="">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="">Email</label>
                                                        <input type="email" id="email" name="email" class="input-f-st-RDF" placeholder="Enter Valid Email" required="">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="">Organization Name</label>
                                                        <input type="text" id="cname" name="company" class="input-f-st-RDF" placeholder="Enter Organization Name">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="">Phone Number</label>
                                                        <input type="tel" class="input-f-st-RDF" id="phone" name="phone" placeholder="Number Format +44 7376 588837">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="">Choose a Product</label>
                                                        <select id="solution" class="input-f-st-RDF" name="solutions" required="">
                                                            <option disabled="disabled" selected="selected" value="">Product Interested</option>
                                                            <option value="Dynamics 365 Business Central">Dynamics 365 Business Central</option>
                                                            <option value="Dynamics 365 Finance & Operations">Dynamics 365 Finance & Operations</option>
                                                            <option value="Dynamics 365 Finance and Supply Chain">Dynamics 365
                                                                Finance and Supply Chain
                                                            </option>
                                                            <option value="Dynamics AX">Dynamics AX</option>
                                                            <option value="Dynamics Navision">Dynamics Navision</option>
                                                            <option value="Dynamics 365 Sales ">Dynamics 365 Sales </option>
                                                            <option value="Dynamics 365 Service">Dynamics 365 Service</option>
                                                            <option value="Dynamics 365 Marketing">Dynamics 365 Marketing
                                                            </option>
                                                            <option value="Dynamics 365 Retail and Commerce">Dynamics 365 Retail and Commerce</option>
                                                            <option value="Dynamics 365 HR">Dynamics 365 HR</option>
                                                            <option value="Dynamics 365 Project Management">Dynamics 365 Project Management</option>
                                                            <option value="Microsoft Office 365">Microsoft Office 365</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="">Choose your Industry</label>
                                                        <select id="industries" class="input-f-st-RDF" name="industries" required="">
                                                            <option disabled="disabled" selected="selected" value="">Choose your Industry</option>
                                                            <option value="Manufacturing">Manufacturing</option>
                                                            <option value="Retail">Retail</option>
                                                            <option value="Public Sector">Public Sector</option>
                                                            <option value="Financial Service">Financial Service</option>
                                                            <option value="Trading &amp; Distribution">Trading &amp; Distribution </option>
                                                            <option value="Professional Services">Professional Services</option>
                                                            <option value="eCommerce">eCommerce</option>
                                                            <option value="Hospitality">Hospitality</option>
                                                            <option value="Transport">Transport</option>
                                                            <option value="Entertainment">Entertainment</option>
                                                            <option value="Eduction">Eduction</option>
                                                            <option value="Construction">Construction</option>
                                                            <option value="Real Estate">Real Estate</option>
                                                            <option value="Legals">Legals</option>
                                                            <option value="Food Delivery Apps">Food Delivery Apps</option>
                                                            <option value="Capital Investments">Capital Investments</option>
                                                            <option value="Oil &amp; Gas">Oil &amp; Gas</option>
                                                            <option value="Logistics">Logistics</option>
                                                            <option value="Media">Media</option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Non-Profit Org">Non-Profit Org</option>
                                                            <option value="Governments">Governments</option>
                                                            <option value="HR">HR</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="Form_RDB-Btn-di">
                                                    <button class="Form-RDB-btn-main" type="submit">Request a Demo</button>
                                                </div>
                                                
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <!--form panels-->

                            </div>
                        </div>




                        <!-- <div class="text-center">
                            <a class="btn-form-bg-main btn-outline-theme-RDP">

                            </a>
                        </div> -->

                    </div>
                </div>
            </div>

        </div>
    </div>
</header>

<!--Section Ends-->
@endsection