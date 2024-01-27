@extends('newhomemain')
@section('title', 'Business Central Landing Page')
@section('meta_description' , 'Business Central Landing Page')
@section('meta_keywords', 'Business Central Landing Page')
@section('contents')
<!--Header Starts-->
<header>
    <div class="container-xl">
        <div class="px-xl-5">
            <div class="row">
                <div class="col-xl-5 col-lg-4 order-lg-2 ms-auto text-center mb-4 top-img-cbc-div">
                    <img src="{{asset('newassets')}}/images/new-landing-pages/bc/bc-landing.webp" class="img-fluid rounded-4" width="600" alt="Header Image" />
                    <div style="    width: 170px;
    height: 170px;
    top: 183px;
    z-index: -1;
    right: 65px;
    border-radius: 50%;
    position: absolute;
    transform: rotate(268deg);
    transform-origin: 0 0;
    /* background: linear-gradient(180deg, #EAFFED 0%, #B6F0BF 100%); */
    border: 2.92px #96D586 dotted;"></div>
                </div>
                <div class="col-xl-6 col-lg-8 order-lg-1 mb-4">
                    <div class="content-box mb-4 text-lg-start text-center">
                        <h1 class="cstm-n-bc-lnding-h">Dynamics 365 Business Central</h1>
                        <p>Microsoft Dynamics 365 Business Central is a cloud-based enterprise resource planning (ERP) solution that helps small & medium-sized businesses manage their finances, operations, sales, and customer service. It integrates with other Microsoft products such as Office 365, Power BI, and Teams, and offers a range of features such as accounting, inventory management, project management, and reporting. Business Central can be customized and extended with apps from Microsoft AppSource or developed by partners.
                        </p>

                        <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center contact-cbc-div">
                            <div class="text-start mb-2">
                                <a href="#popup1" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                            </div>
                            <div class="text-md-start ms-md-3 mb-2">
                                <p class="mb-0 fw-semibold">Call 24/7 <a class="ms-3 fw-semibold text-decoration-none text-dark" href="tel:+971526510534">+971 52 651 0534</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="popup1" class="overlay">
            <div class="popup">
                <div class="contact-card">
                    <div>
                        <h2>Start your ERP journey!</h2>
                        <a class="close" href="#">&times;</a>
                        <form class="contact-form" id="contactForm" action="/contact-form" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" required />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="text" id="cname" name="company" class="form-control" placeholder="Company Name" />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" id="phone" name="phone" class="form-control" placeholder="Phone Number +97152 768 4867*" required="" />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="email" id="emailst" onkeyup="validateEmailst()" name="email" class="form-control" placeholder="Email*" required="" />
                                    <span id="error-messagest" class="error-message"></span>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <select id="solution" class="form-control" name="solutions" required="">
                                        <option disabled="disabled" selected="selected" value="">Choose a Solution</option>
                                        <option value="Dynamics 365 Business Central">Dynamics 365 Business Central</option>
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
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-theme px-5">Submit</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header Ends-->
<section class="service-sec">
    <div class="container-lg">
        <div class="px-xl-5">
            <h2 class="sect-he-sec mb-5">WHY DYNAMICS STREAM!</h2>
            <div class="row">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="col-xl-12 col-md-12  align-items-stretch">
                        <div class="sect-sec-card">
                            <div class="sect-sec-cbc-div">
                                <h4 class="font-st-h4 mb-5">Your business on the go</h4>
                                <p>Work anywhere with full capabilities on desktop, tablet, or mobile across Windows, macOS, Android, and iOS devices.</p>
                                <div style="width: 100px;
    height: 100px;
    top: 261px;
    z-index: -1;
    left: 140px;
    border-radius: 50%;
    position: absolute;
    transform: rotate(269deg);
    transform-origin: 0 0;
    border: 2.92px #96D586 dotted;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12 align-items-stretch">
                        <div class="sect-sec-card">
                            <div class="sect-sec-cbc-div-2">
                                <h4 class="font-st-h4 mb-5">Available worldwide</h4>
                                <p>Use Business Central in 47 languages and in over 160 countries and regions to expand your business globally.</p>
                                <div style="    width: 100px;
    height: 100px;
    top: 500px;
    z-index: -1;
    left: 140px;
    border-radius: 50%;
    position: absolute;
    transform: rotate(269deg);
    transform-origin: 0 0;
    border: 2.92px #96D586 dotted;"></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12 align-items-stretch">
                        <div class="sect-sec-card">
                            <div class="sect-sec-cbc-div-3">
                                <h4 class="font-st-h4 mb-5">Work smarter with Copilot</h4>
                                <p>Work anywhere with full capabilities on desktop, tablet, or mobile across Windows, macOS, Android, and iOS devices.</p>
                                <div style="width: 100px;
    height: 100px;
    top: 719px;
    z-index: -1;
    left: 140px;
    border-radius: 50%;
    position: absolute;
    transform: rotate(269deg);
    transform-origin: 0 0;
    border: 2.92px #96D586 dotted;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6  sect-sec-img-r-wi-di">
                    <img src="{{asset('newassets')}}/images/new-landing-pages/bc/bc-landing-2.webp" class="img-fluid rounded-4 sect-sec-img-r-wi" width="600" alt="Why Dynamics Stream Image" />
                </div>


            </div>

        </div>
    </div>
</section>
@endsection