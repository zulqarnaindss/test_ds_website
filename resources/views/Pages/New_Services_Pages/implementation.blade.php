@extends('NewImplMain')
@section('title', 'Implementation Services')
@section('meta_description' , '')
@section('meta_keywords', '')
@section('contents')
<!--Header Starts-->
<header class="header-bg-Impl-sec">
    <div>
        <div class="container-xl">
            <div class="px-xl-5">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 order-lg-2 ms-auto text-center mb-4">
                        <img src="{{asset('assets')}}/images/new-services-pages/Implementation/implementation-img.webp" class="img-fluid rounded-4 mrgtop-hdr-img" width="600" alt="Header Image" />
                    </div>
                    <div class="col-xl-6 col-lg-8 order-lg-1 mb-4">
                        <div class="content-box mb-4 text-lg-start text-center">
                            <h1 class="cstm-n-bc-lnding-h">Implementation Partners of Microsoft Dynamics 365 ERP | CRM Suite</h1>
                            <p>Your Microsoft Dynamics 365 Business Central & ERP CRM implementation partners with more than 10+ Years of experience in Startup’s | SME’s & enterprises, is a cloud-based enterprise resource planning (ERP) solution that helps small & medium-sized businesses manage their finances, operations, sales, and customer service. It integrates with other Microsoft products such as Office 365, Power BI, and Teams, and offers a range of features such as accounting, inventory management, project management, and reporting. Business Central can be customized and extended with apps from Microsoft AppSource or developed by partners.</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center contact-cfinance-div">
                                <div class="text-start mb-2">
                                    <a href="#popup1" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                                    <a href="tel:+971526510534" class="btn m-mrgn-top-f btn-theme ms-sm-3 vert-align-sub">+971 52 651 0534</a>
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
    </div>

</header>
<!--Header Ends-->
<section class="">
    <div class="container-lg top-Imp-cSales-3-sec-div mt-impl-div">
        <div class="px-xl-5">
            <h3 class="mt-impl-div font-s-h3 mb-3">Problem Envisioning by Dynamics Stream UK consultants</h3>
            <p class="p-m-s">No matter what platform you are using at the moment but you’re missing the Real Seamless Solution by Microsoft Dynamics 365 Business Central & ERP CRM implementation partners with more than 10+ Years of experience in Startup’s | SME’s & enterprises</p>
            <div class="row">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card-impl mt-4">
                        <div class="align-items-start mb-2">
                            <h5 class="h-bg-color-Impl">Diagnosis</h5>
                            <p class="ml-Impl-h4-p">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card-impl mt-4">
                        <div class="align-items-start mb-2">
                            <h5 class="h-bg-color-Impl">Reduce the cost of Ownership</h5>
                            <p class="ml-Impl-h4-p">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row margn-top-sec-impl">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card-impl mt-4">
                        <div class="align-items-start mb-2">
                            <h5 class="h-bg-color-Impl">Reduce the cost of Ownership</h5>
                            <p class="ml-Impl-h4-p">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card-impl mt-4">
                        <div class="align-items-start mb-2">
                            <h5 class="h-bg-color-Impl">Reduce the cost of Ownership</h5>
                            <p class="ml-Impl-h4-p">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-color-third-impl">
    <div class="container-lg top-Imp-cSales-3-sec-div">
        <div class="px-xl-5">
            <h3 class="font-s-h3 mb-4-mrgn-bottom-impl mb-3">Solution Envisioning by Dynamics Stream UK consultants</h3>
            <p class="p-m-s">Our Consultants throughly study and understand everything about your business and suggest the best product out of Dynamics 365 Family, that could be Microsoft Dynamics 365 Business Central, Microsoft Dynamics 365 Finance, Microsoft Dynamics 365 Supply Chain, Microsoft Dynamics 365 HR, Microsoft Dynamics 365 Sales or Microsoft Dynamics 365 Marketing depends on your business scale and operations complexity.</p>
            <div class="row">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card-impl mt-4">
                        <div class="align-items-start mb-2">
                            <h5 class="h-bg-color-Impl-green"> Microsoft Dynamics 365 Business Central</h5>
                            <p class="ml-Impl-h4-p">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card-impl mt-4">
                        <div class="align-items-start mb-2">
                            <h5 class="h-bg-color-Impl-green">Microsoft Dynamics 365 Finance</h5>
                            <p class="ml-Impl-h4-p">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margn-top-sec-impl">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card-impl mt-4">
                        <div class="align-items-start mb-2">
                            <h5 class="h-bg-color-Impl-green">Microsoft Dynamics 365 Supply Chain</h5>
                            <p class="ml-Impl-h4-p">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card-impl mt-4">
                        <div class="align-items-start mb-2">
                            <h5 class="h-bg-color-Impl-green">Microsoft Dynamics 365 HR</h5>
                            <p class="ml-Impl-h4-p">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margn-top-sec-impl">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card-impl mt-4">
                        <div class="align-items-start mb-2">
                            <h5 class="h-bg-color-Impl-green">Microsoft Dynamics 365 Sales</h5>
                            <p class="ml-Impl-h4-p">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card-impl mt-4">
                        <div class="align-items-start mb-2">
                            <h5 class="h-bg-color-Impl-green">Microsoft Dynamics 365 Marketing</h5>
                            <p class="ml-Impl-h4-p">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="hovr-bg-color-change-div">
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="hovr-content-main-div">
                <h3 class="font-s-h3 mb-4-mrgn-bottom"> Microsoft Dynamics 365 Implementation Sure Step Methology</h3>
                <p class="mt-3">Analyses is a 1st step towards a Successful Implementation. In the analysis phase, most business processes are identified & documented at a high level.</p>
            </div>
            <div class="tab-content well">
                <div class="tab-pane active" id="tab-1" style="background:#008EF4;">
                    <div class="hovr-content-main-div">
                        <h3 class="font-s-h3 mb-4-mrgn-bottom">Microsoft Dynamics 365 Implementation Sure Step Methology</h3>
                        <p>Analyses is a 1st step towards a Successful Implementation. In the analysis phase, most business processes are identified & documented at a high level.</p>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2" style="background:#5D00F4;">
                    <div class="hovr-content-main-div">
                        <h3 class="font-s-h3 mb-4-mrgn-bottom"> Microsoft Dynamics 365 Implementation Sure Step Methology</h3>
                        <p>Design is the 2nd step towards a Successful Implementation. Most Business Processes are designed and idenfied</p>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3" style="background:#11B89A;">
                    <div class="hovr-content-main-div">
                        <h3 class="font-s-h3 mb-4-mrgn-bottom"> Microsoft Dynamics 365 Implementation Sure Step Methology</h3>
                        <p> The development covers creating new features, adaptation of existing components, & data migration.</p>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4" style="background:#477C03;">
                    <div class="hovr-content-main-div">
                        <h3 class="font-s-h3 mb-4-mrgn-bottom"> Microsoft Dynamics 365 Implementation Sure Step Methology</h3>
                        <p>The goal of the deployment phase is to set up the operational dynamics environment at the customer.</p>
                    </div>
                </div>
                <div class="tab-pane" id="tab-5" style="background:#D98F01;">
                    <div class="hovr-content-main-div">
                        <h3 class="font-s-h3 mb-4-mrgn-bottom"> Microsoft Dynamics 365 Implementation Sure Step Methology</h3>
                        <p>The purpose of the Operations phase is to support the customer technically and functionally during the initial Go-Live period for the new system.</p>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills">
                <li class="active"><a data-location="#tab-1" href="#tab-1" data-toggle="tab" class="tab-btn-st-impl"><i class="fa-solid fa-magnifying-glass-chart icon-1-btn"></i> Analysis</a></li>
                <li><a data-location="#tab-2" href="#tab-2" data-toggle="tab" class="tab-btn-st-impl"><i class="fa-solid fa-pen-ruler icon-2-btn"></i>Design</a></li>
                <li><a data-location="#tab-3" href="#tab-3" data-toggle="tab" class="tab-btn-st-impl"><i class="fa-solid fa-window-restore icon-3-btn"></i>Development</a></li>
                <li><a data-location="#tab-4" href="#tab-4" data-toggle="tab" class="tab-btn-st-impl"><i class="fa-solid fa-person-walking-luggage icon-4-btn"></i>Deployment</a></li>
                <li><a data-location="#tab-5" href="#tab-5" data-toggle="tab" class="tab-btn-st-impl"><i class="fa-brands fa-ubuntu icon-5-btn"></i>Operational</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Tab panes -->


<!-- <section class="sales-Blue-sec  ">
    <div class="top-left-sales-Blue">
        <div class="container-lg">
            <div class="px-xl-5">
                <div class="content-box">
                    <h2 class="my-4">Empowering sellers through Automation and Intelligence</h2>
                    <p class="mb-4">Microsoft Dynamics 365 Sales enables sellers to close more deals and meet customer needs with the help of next-generation AI and real-time insights. Sellers have everything they need in their app of choice to engage with customers, including historical data and access to subject matter experts. Using data, sellers can achieve more consistent sales interactions from creating a lead to closing a sale, predict how much revenue they will generate in a given timeframe, automate repeatable processes and define sales best practices, and promote products and services with targeted marketing campaigns.</p>
                    <p class="sec-para-blue-sect">With Microsoft Sales Copilot, which is included with Dynamics 365 Sales Enterprise and Premium licenses, we have established a vision of CRM platform by fusing collaboration experiences with CRM platform data and generative AI capabilities to help sellers reduce mundane tasks and personalize customer relationships even further. Powered by Azure OpenAI Service, Microsoft Sales Copilot features built-in responsible AI and enterprise-grade Azure security.</p>
                </div>
                <div class="last-blue-sect-mrg-cont">
                    <div class="d-flex align-items-start mb-2">
                        <i class="flex-shrink-0 bi-check2 last-blue-sect-tick"></i>
                        <h5 class="flex-grow-1 mb-0 ms-3 text-white">10th consecutive year recognized of Success</h5>
                    </div>
                    <div class="d-flex align-items-start mb-2">
                        <i class="flex-shrink-0 bi-check2 last-blue-sect-tick"></i>
                        <h5 class="flex-grow-1 mb-0 ms-3 text-white">Furthest in Completeness of Vision</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> -->
<div class="container-lg mt-5">
    <div class="px-xl-5">
        <div class="row industry-bg-sec ">
            <div class="col-xl-12 col-lg-21 mb-3">
                <div class="content-box">
                    <h3 class="my-4 text-center">Our Industries Experience</h3>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-loaded owl-drag mrtop-new-crslidr" id="service_carouselss">
            <div class="owl-stage-outer pb-4">
                <div class="owl-stage d-flex align-items-stretch" style="transform: translate3d(-417px, 0px, 0px); transition: all 0.25s ease 0s; width: 5012px;">
                    <div class="owl-item active" style="width: 208.8px;">
                        <div class="item text-center  ind-slider-itm-boxs">
                            <h6 class="mb-4">Manufacturing</h6>
                            <p class="txt-color-st">Optimizes production planning, streamline production orders, bills of materials & supply planning.</p>
                            <div class="mt-4">
                                <a href="https://dynamicsstream.com/microsoft-dynamics-365-for-manufacturing" class="industry-link-learn">
                                    Learn More
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="owl-item " style="width: 208.8px;">
                        <div class="item text-center ind-slider-itm-boxs">

                            <h6 class="mb-4">Retail</h6>
                            <p class="txt-color-st">empowers organizations to streamline eCommerce across branding, stock, and distribution Platform.</p>
                            <div class="mt-4">
                                <a href="https://dynamicsstream.com/microsoft-dynamics-365-for-retail" class="industry-link-learn">
                                    Learn More
                                </a>
                            </div>




                        </div>
                    </div>
                    <div class="owl-item " style="width: 208.8px;">

                        <div class="item text-center ind-slider-itm-boxs">

                            <h6 class="mb-4">Public Sector</h6>
                            <p class="txt-color-st">Most public data consists of accounting, financing, regulatory requirements, and employee management.</p>
                            <div class="mt-4">
                                <a href="https://dynamicsstream.com/microsoft-dynamics-365-for-public-sector" class="industry-link-learn">
                                    Learn More
                                </a>
                            </div>



                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">

                        <div class="item text-center ind-slider-itm-boxs">

                            <h6 class="mb-4">Financial Service</h6>
                            <p class="txt-color-st">Deliver more to your clientele, collaborate to be consistent with ever-changing rules, & create every possibility.</p>
                            <div class="mt-4">
                                <a href="https://dynamicsstream.com/microsoft-dynamics-365-for-financial-services" class="industry-link-learn">
                                    Learn More
                                </a>
                            </div>



                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center ind-slider-itm-boxs">
                            <h6 class="mb-4">Distribution</h6>
                            <p class="txt-color-st">The industry of bulk purchasing and distributing to stores, commercial, corporate, academic..</p>
                            <div class="mt-4">
                                <a href="https://dynamicsstream.com/microsoft-dynamics-365-wholesale-and-distribution" class="industry-link-learn">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Transport</h6>
                                <p class="txt-color-st">A solution that helps transportation and logistics organizations manage their fleet, routes, and deliveries.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">legals</h6>
                                <p class="txt-color-st">Dynamics 365 Legals can helps legal professionals manage their contracts, matters, and engagements.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">

                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Media</h6>
                                <p class="txt-color-st">It helps media and entertainment organizations create and deliver engaging experiences..</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Professional Services</h6>
                                <p class="txt-color-st">Dynamics 365 Professional service is a cloud-based platform for business management.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Entertainment</h6>
                                <p class="txt-color-st">It helps media and entertainment organizations create and deliver engaging experiences for their fans.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Food & Delivery Apps</h6>
                                <p class="txt-color-st">A solution that helps food and delivery businesses manage their orders, inventory, delivery, and customer service.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Healthcare & pharma</h6>
                                <p class="txt-color-st">It helps pharmaceutical organizations improve patient outcomes, optimize operations, and accelerate innovation.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">D365 ecommerce</h6>
                                <p class="txt-color-st">It enables businesses to create and manage online stores, back-office operations, & physical retail channels.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Education</h6>
                                <p class="txt-color-st">It helps educational institutions manage their data, processes, & engagement across different levels & domains.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Capital Investment</h6>
                                <p class="txt-color-st">A solution that helps organizations plan, manage, and optimize their capital investments.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Non Profit Organization</h6>
                                <p class="txt-color-st">Provide the capabilities for constituent management, fundraising, awards, volunteer management, & impact tracking.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Project Management</h6>
                                <p class="txt-color-st">Provide capabilities for project planning, like work schedules, budgets, forecasts, invoices, and reports.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Construction</h6>
                                <p class="txt-color-st">It helps construction companies manage their projects, finances, resources, customers, and suppliers more efficiently.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Oil & Gas</h6>
                                <p class="txt-color-st">These solutions help oil and gas companies improve their operations, customer engagement, innovation, and compliance.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Governments</h6>
                                <p class="txt-color-st">Provide capabilities for government operations and infrastructure, like public finance, health and social services.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Hospitality</h6>
                                <p class="txt-color-st">Help businesses to manage their operations, customer engagement, marketing, inventory, and finance from a single platform.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Real estate</h6>
                                <p class="txt-color-st">It refers to the use of D365 solutions by the real estate industry, like property management, leasing, sales, and development.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">Logistics</h6>
                                <p class="txt-color-st">It refers to the use of D365 Supply Chain Management to manage the transportation of goods & materials.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 208.8px;">
                        <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                            <div>
                                <h6 class="mb-4">HR</h6>
                                <p class="txt-color-st">It helps businesses to improve their productivity, add value, increase staff motivation, and aid employee retention.</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="industry-link-learn">
                                    Coming up
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection