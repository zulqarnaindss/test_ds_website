@extends('newhomemain')
@foreach($pricing as $pricingplan)
@section('title', $pricingplan->seo_title)
@section('meta_description', $pricingplan->meta_description)
@section('meta_keywords', $pricingplan->meta_keyword)
@endforeach
@section('contents')
<section class="slide  kenBurns">
    <div class="content">
        <div class="containers heght-np">
            <div class="wrapss">
                <ul class="grid grid-85 equal ae-2 fromCenter mrg-t-new-np-list-1" data-equal-collapse-width="767">
                    <li class="col-6-12 col-tablet-1-1 col-phablet-1-1 ae-3">
                        <h2 class="h-new-np-st">Dynamics 365 pricing</h2>
                        <p class="p-new-np-st">To learn more about Dynamics 365 pricing and licensing, you can contact
                            us for a free consultation. We are a certified Microsoft partner with extensive experience
                            in implementing and supporting the Dynamics 365 solutions. We can help you find the best fit
                            for your budget and business goals.</p>
                    </li>
                    <li class="col-6-12 col-tablet-1-1 col-phablet-1-1 ae-3">
                        <div class="di-img-main-centr-np"><img class=""
                                src="https://dynamicsstream.com/storage/new-home-images/pricing/pricing-bg.webp"
                                alt="" />
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="background" style="background-color:rgba(235, 235, 235, 1);">
        &nbsp; </div>
</section>
<!-- Second section -->
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <div class="tabl-para-np-di">
                    <p class="tabl-para-np">Microsoft Dynamics 365 is a cloud-based business platform that integrates
                        various applications for
                        managing different aspects of an organization, such as sales, marketing, finance, operations,
                        customer service, and more. Implementing Microsoft Dynamics 365 can bring many benefits to a
                        business, such as improved efficiency, productivity, collaboration, and customer satisfaction.
                        However, there are also some cost factors involved in the implementation process that need to be
                        considered and planned for.</p>
                     <p class="tabl-para-np mrt-top-pr-np"> Some of these cost factors are:</p>
                    <p class="tabl-para-np mrt-top-pr-np">- Licensing fees: Microsoft Dynamics 365 offers different plans and pricing
                        options depending on the
                        number of users, the type and number of applications, and the level of customization and support
                        required. Licensing fees are usually paid on a monthly or annual basis and can vary depending on
                        the
                        specific needs and preferences of each business.
                    </p>
                    <p class="tabl-para-np mrt-top-pr-np">
                        - Implementation services: Depending on the complexity and scope of the project, experienced
                        partners like us can help with the implementation of Microsoft Dynamics 365. These services can
                        include planning, design, configuration, customization, integration, testing, training, and
                        support.
                        The cost of these services can depend on the duration, quality, and expertise of the service
                        providers.</p>
                    <p class="tabl-para-np mrt-top-pr-np">- Annual maintenance cost: One of the factors to consider when choosing
                        Dynamics 365. This is the
                        amount of money that you have to pay every year to keep the system running and updated. The
                        annual
                        maintenance cost for Microsoft Dynamics 365 depends on several factors, such as the number of
                        users,
                        the type of applications, the level of support, and the customization needs.</p>
                </div>

                <ul class="grid grid-85 equal ae-2 fromCenter mrg-t-new-np-list" data-equal-collapse-width="767">
                    <li class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np bordr-ri-np text-left-np">

                        <h3 class="np-for-h3-colr for-mrg-2">Small and medium business</h3>


                    </li>
                    <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol bordr-ri-np">
                        <h3 class="np-for-h3 for-mrg-2">First Dynamics 365 app</h3>

                    </li>
                    <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol">
                        <h3 class="np-for-h3 for-mrg-2">Subsequent qualifying dynamics 365 app</h3>
                    </li>
                    <!-- Second Row -->
                    <li
                        class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc bordr-np-left-botm text-left-np">
                        <h3 class="np-for-h3-for-secd-r p-b-np for-mrg-2">Business Central Essentials </h3>
                    </li>
                    <li class="col-8-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc bordr-np-left-botm-rt">
                        <h3 class="np-for-h3-for-secd-r-des for-mrg-3">From $70</h3>
                        <p class="sp-new-np">per user/month</p>
                    </li>
                    <!-- third Row -->
                    <li
                        class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow bordr-np-left-botm text-left-np">
                        <h3 class="np-for-h3-for-secd-r p-b-np for-mrg-2">Business Central Premium</h3>
                    </li>
                    <li
                        class="col-8-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow bordr-np-left-botm-rt">
                        <h3 class="np-for-h3-for-secd-r-des for-mrg-3">From $100 </h3>
                        <p class="sp-new-np">per user/month</p>
                    </li>
                    <!-- forth Row -->
                    <li
                        class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc bordr-np-left-botm text-left-np">

                        <h3 class="np-for-h3-for-secd-r for-mrg-2">Customer Service Professional</h3>


                    </li>
                    <li
                        class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm">
                        <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $50</h3>
                        <p class="sp-new-np">per user/month</p>
                    </li>
                    <li
                        class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm-rt">
                        <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $20</h3>
                        <p class="sp-new-np">per user/month</p>
                    </li>
                    <!-- fifth Row -->
                    <li
                        class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow bordr-np-left-botm text-left-np">

                        <h3 class="np-for-h3-for-secd-r for-mrg-2">Sales Professional</h3>


                    </li>
                    <li
                        class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forfifithcol bordr-np-left-botm ">
                        <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $65</h3>
                        <p class="sp-new-np">per user/month</p>
                    </li>
                    <li
                        class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forfifithcol bordr-np-left-botm-rt">
                        <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $20</h3>
                        <p class="sp-new-np">per user/month</p>
                    </li>
                </ul>

                <!-- Second UL -->
                <div class="mgn-un-np">
                    <ul class="grid grid-85 equal ae-2 fromCenter mrg-t-new-np-list" data-equal-collapse-width="767">
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np bordr-ri-np text-left-np">

                            <h3 class="np-for-h3-colr for-mrg-2">Sales</h3>


                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol bordr-ri-np">
                            <h3 class="np-for-h3 for-mrg-2">First Dynamics 365 app</h3>

                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol">
                            <h3 class="np-for-h3 for-mrg-2">Subsequent qualifying Dynamics 365 app</h3>
                        </li>
                        <!-- second Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc bordr-np-left-botm text-left-np">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Sales Professional</h3>


                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $65</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $20</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <!-- third Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow bordr-np-left-botm text-left-np">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Sales Enterprise</h3>


                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forfifithcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $95</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forfifithcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $20</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <!-- forth Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc bordr-np-left-botm text-left-np">
                            <h3 class="np-for-h3-for-secd-r p-b-np for-mrg-2">Sales Premium </h3>
                        </li>
                        <li
                            class="col-8-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $135</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <!-- fifth Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow bordr-np-left-botm text-left-np">
                            <h3 class="np-for-h3-for-secd-r p-b-np for-mrg-2">Microsoft Relationship Sales</h3>
                        </li>
                        <li
                            class="col-8-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $162</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <!-- sixth Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc bordr-np-left-botm text-left-np">
                            <h3 class="np-for-h3-for-secd-r p-b-np for-mrg-2">Microsoft Viva Sales </h3>
                        </li>
                        <li
                            class="col-8-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $40</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>

                    </ul>
                </div>
                <!-- Second UL End -->
                <!-- third UL -->
                <div class="mgn-un-np">
                    <ul class="grid grid-85 equal ae-2 fromCenter mrg-t-new-np-list" data-equal-collapse-width="767">
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np text-left-np bordr-ri-np">

                            <h3 class="np-for-h3-colr for-mrg-2">Finance</h3>


                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol bordr-ri-np">
                            <h3 class="np-for-h3 for-mrg-2">First Dynamics 365 app</h3>

                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol">
                            <h3 class="np-for-h3 for-mrg-2">Subsequent qualifying Dynamics 365 app</h3>
                        </li>
                        <!-- second Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc bordr-np-left-botm text-left-np">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Finance</h3>


                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $180</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $30</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                    </ul>
                </div>
                <!-- Third UL End -->
                <!-- Forth UL -->
                <div class="mgn-un-np">
                    <ul class="grid grid-85 equal ae-2 fromCenter mrg-t-new-np-list" data-equal-collapse-width="767">
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np text-left-np bordr-ri-np">

                            <h3 class="np-for-h3-colr for-mrg-2">Marketing</h3>


                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol bordr-ri-np">
                            <h3 class="np-for-h3 for-mrg-2">First Dynamics 365 app</h3>

                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol">
                            <h3 class="np-for-h3 for-mrg-2">Subsequent qualifying Dynamics 365 app</h3>
                        </li>
                        <!-- second Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc text-left-np bordr-np-left-botm">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Marketing</h3>


                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3">From $1,500</h3>
                            <p class="sp-new-np">per tenant/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3">From $750</h3>
                            <p class="sp-new-np">per tenant/month</p>
                        </li>
                    </ul>
                </div>
                <!-- Forth UL End -->
                <!-- fifth UL -->
                <div class="mgn-un-np">
                    <ul class="grid grid-85 equal ae-2 fromCenter mrg-t-new-np-list" data-equal-collapse-width="767">
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np text-left-np bordr-ri-np">

                            <h3 class="np-for-h3-colr for-mrg-2">Supply Chain</h3>


                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol bordr-ri-np">
                            <h3 class="np-for-h3 for-mrg-2">First Dynamics 365 app</h3>

                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol">
                            <h3 class="np-for-h3 for-mrg-2">Subsequent qualifying Dynamics 365 app</h3>
                        </li>
                        <!-- second Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc bordr-np-left-botm text-left-np">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Supply Chain Management</h3>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $180</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $30</h3>
                            <p class="sp-new-np">per user/month</p>

                        </li>
                        <!-- third Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow bordr-np-left-botm text-left-np">
                            <h3 class="np-for-h3-for-secd-r p-b-np for-mrg-2">Guides</h3>
                        </li>
                        <li
                            class="col-8-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $65</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <!-- forth Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc text-left-np bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r p-b-np for-mrg-2">Intelligent Order Management </h3>
                        </li>
                        <li
                            class="col-8-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3">From $300</h3>
                            <p class="sp-new-np">per 1,000 orders lines/month</p>
                        </li>

                    </ul>
                </div>
                <!-- fifth UL End -->
                <!-- six UL -->
                <div class="mgn-un-np">
                    <ul class="grid grid-85 equal ae-2 fromCenter mrg-t-new-np-list" data-equal-collapse-width="767">
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np text-left-np bordr-ri-np">

                            <h3 class="np-for-h3-colr for-mrg-2">Service</h3>


                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol bordr-ri-np">
                            <h3 class="np-for-h3 for-mrg-2">First Dynamics 365 app</h3>

                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol">
                            <h3 class="np-for-h3 for-mrg-2">Subsequent qualifying Dynamics 365 app</h3>
                        </li>
                        <!-- second Row  Grey-->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc text-left-np bordr-np-left-botm">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Customer Service Professional</h3>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $50</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $20</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <!-- third Row White -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow text-left-np bordr-np-left-botm">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Customer Service Enterprise</h3>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forfifithcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $95</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forfifithcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $20</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <!-- forth Row  Grey-->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc text-left-np bordr-np-left-botm">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Field Service</h3>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $95</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $20</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <!-- fifth Row White -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow text-left-np bordr-np-left-botm">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Remote Assist</h3>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forfifithcol bordr-np-left-botm ">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $65</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forfifithcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $20</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                    </ul>
                </div>
                <!-- Six UL End -->
                <!-- seven UL -->
                <div class="mgn-un-np">
                    <ul class="grid grid-85 equal ae-2 fromCenter mrg-t-new-np-list" data-equal-collapse-width="767">
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np text-left-np bordr-ri-np">

                            <h3 class="np-for-h3-colr for-mrg-2">Project Management</h3>


                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol bordr-ri-np">
                            <h3 class="np-for-h3 for-mrg-2">First Dynamics 365 app</h3>

                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol">
                            <h3 class="np-for-h3 for-mrg-2">Subsequent qualifying Dynamics 365 app</h3>
                        </li>
                        <!-- second Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc text-left-np bordr-np-left-botm">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Project Operations</h3>


                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $120</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $30</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                    </ul>
                </div>
                <!-- seven UL End -->
                <!-- eight UL -->
                <div class="mgn-un-np">
                    <ul class="grid grid-85 equal ae-2 fromCenter mrg-t-new-np-list" data-equal-collapse-width="767">
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np text-left-np bordr-ri-np">

                            <h3 class="np-for-h3-colr for-mrg-2">Human Resources</h3>


                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol bordr-ri-np">
                            <h3 class="np-for-h3 for-mrg-2">First Dynamics 365 app</h3>

                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol">
                            <h3 class="np-for-h3 for-mrg-2">Subsequent qualifying Dynamics 365 app</h3>
                        </li>
                        <!-- second Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc text-left-np bordr-np-left-botm">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Human Resources</h3>


                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $120</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $30</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                    </ul>
                </div>
                <!-- eight UL End -->
                <!-- nine UL -->
                <div class="mgn-un-np">
                    <ul class="grid grid-85 equal ae-2 fromCenter mrg-t-new-np-list" data-equal-collapse-width="767">
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np text-left-np bordr-ri-np">

                            <h3 class="np-for-h3-colr for-mrg-2">Customer Data Platform</h3>


                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol bordr-ri-np">
                            <h3 class="np-for-h3 for-mrg-2">First Dynamics 365 app</h3>

                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol">
                            <h3 class="np-for-h3 for-mrg-2">Subsequent qualifying Dynamics 365 app</h3>
                        </li>
                        <!-- second Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc text-left-np bordr-np-left-botm">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Customer Insights</h3>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3">From $1500</h3>
                            <p class="sp-new-np">per tenant/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3">From $1,000</h3>
                            <p class="sp-new-np">per tenant/month</p>
                        </li>
                        <!-- third Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow text-left-np bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r p-b-np for-mrg-2">Customer Voice</h3>
                        </li>
                        <li
                            class="col-8-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3">From $200></h3>
                            <p class="sp-new-np">2,000 survey responses per tenant/month*</p>
                        </li>
                    </ul>
                </div>
                <!-- Nine UL En -->

                <!-- ten UL -->
                <div class="mgn-un-np">
                    <ul class="grid grid-85 equal ae-2 fromCenter mrg-t-new-np-list" data-equal-collapse-width="767">
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np text-left-np bordr-ri-np">

                            <h3 class="np-for-h3-colr for-mrg-2">Commerce</h3>


                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol bordr-ri-np">
                            <h3 class="np-for-h3 for-mrg-2">First Dynamics 365 app</h3>

                        </li>
                        <li class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forseccol">
                            <h3 class="np-for-h3 for-mrg-2">Subsequent qualifying Dynamics 365 app</h3>
                        </li>
                        <!-- second Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forbc text-left-np bordr-np-left-botm">

                            <h3 class="np-for-h3-for-secd-r for-mrg-2">Commerce</h3>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $180</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-2 ae-3 bordr-for-np-forforthcol bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3"> $30</h3>
                            <p class="sp-new-np">per user/month</p>
                        </li>
                        <!-- third Row -->
                        <li
                            class="col-4-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow text-left-np bordr-np-left-botm">
                            <h3 class="np-for-h3-for-secd-r p-b-np for-mrg-2">Fraud Protection</h3>
                        </li>
                        <li
                            class="col-8-12 col-tablet-1-1 col-phablet-1-1 ae-3 bordr-for-np-forthrdrow bordr-np-left-botm-rt">
                            <h3 class="np-for-h3-for-secd-r-des for-mrg-3">$1,000</h3>
                            <p class="sp-new-np">per tenant/month</p>
                        </li>
                    </ul>
                </div>
                <!-- Ten UL End -->
            </div>
        </div>
    </div>
    <div class="background" style="background-color:white;">
        &nbsp; </div>
</section>
<!-- Second section End -->
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss wrapss-forpricing">
                <h2 class="heading-online-bc ">A customized Pricing plan from Dynamics Stream for all your business
                    needs</h2>
                <div class="online-pricg-m">
                    <ul class="grid grid-85 equal ae-2 fromCenter u-l-m" data-equal-collapse-width="767">
                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <div class="box-for-pricing online-box-new">
                                <div> <img src="https://dynamicsstream.com/storage/new-home-images/pricing/basic.webp"
                                        class="image-pri-h" alt="">
                                    <div class="for-border-prici">
                                        <h2 class="price-h">USD $99.00</h2>
                                         <p class="sb-price">user/month</p>
                                        <p class="annual-h">(Annual subscription&ndash;auto renews )<br />Price does not
                                            include tax.</p>
                                        <div class="btn-marg-pricng"><a class="btn-buy" href="/basic-plan">Buy Now</a>
                                        </div>
                                        <p class="list-p-online list-p-mar"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Free MailBox - 50 GB</p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> No Minimum Users </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> 40 Hours Onboarding & training </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Managing Receivables </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Managing Payables </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Invoicing Prepayments </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Reconciling Bank Accounts </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Managing Intercompany Transactions </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Accounting for Costs </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Managing Inventory Costs </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Understanding the General Ledger COA </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Consolidating Financial Data from Multiple Companies </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Work with Dimensions </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Create G/L Budgets </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Post Transactions Directly to General Ledger </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Reverse Journal Postings and Undo Receipts/Shipments </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Allocate Costs and Income </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Use Item Charges to Account for Additional Trade Costs </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Record and Reimburse Employees' Expenses </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Defer Revenues & Expenses </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Work with Recurring Revenue </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Update Currency Exchange Rates </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Import Payroll Transactions </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Work with VAT on Sales & Purchases </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Report VAT to Tax Authorities </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Convert Service Contracts that Include VAT Amounts </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Analyzing Cash Flows in Your Company </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Walkthrough: Making Cash Flow Forecasts by Using Financial
                                            Reports </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Analyzing Financial Statements in Excel </p>
                                        <p class="list-p-online"><img class="done-image"
                                                src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                alt="" /> Accountant Experiences in Business Central </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-8-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                            <ul class="grid grid-85 equal ae-2 fromCenter u-l-m" data-equal-collapse-width="767">
                                <li class="col-12-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                    <div class="box-for-pricing-for online-box-new"> <img
                                            src="https://dynamicsstream.com/storage/new-home-images/pricing/essential.webp"
                                            class="image-pri-h-2" alt="">
                                        <ul class="grid grid-85 equal ae-2 fromCenter u-l-m for-border-prici"
                                            data-equal-collapse-width="767">
                                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                <h2 class="price-h-2-sec">USD $149.00 </h2>
                                                 <p class="sb-price">user/month</p>
                                                <p class="annual-h">(Annual subscription&ndash;auto renews )<br />Price
                                                    does not include tax.</p>
                                                <div class="btn-marg-pricng"><a class="btn-buy"
                                                        href="/essential-plan">Buy Now</a> </div>
                                            </li>
                                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                <p class="list-p-online list-para-mar">Everything in Basic Plan, plus:
                                                </p>
                                                <p class="list-p-online "><img class="done-image"
                                                        src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                        alt="" /> No Minimum Users </p>
                                                <p class="list-p-online"><img class="done-image"
                                                        src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                        alt="" /> 60 Hours Onboarding & training</p>
                                                <p class="list-p-online"><img class="done-image"
                                                        src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                        alt="" /> Sales </p>
                                                <p class="list-p-online"><img class="done-image"
                                                        src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                        alt="" /> Purchasing</p>
                                                <p class="list-p-online"><img class="done-image"
                                                        src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                        alt="" /> Inventory</p>
                                                <p class="list-p-online"><img class="done-image"
                                                        src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                        alt="" /> Fixed Assets Overview </p>
                                                <p class="list-p-online"><img class="done-image"
                                                        src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                        alt="" /> Warehouse Management</p>
                                                <p class="list-p-online"><img class="done-image"
                                                        src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                        alt="" /> Relationship Management </p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-12-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                    <div class="box-for-pricing-for online-box-new mrg-pr"> <img
                                            src="https://dynamicsstream.com/storage/new-home-images/pricing/premium.webp"
                                            class="image-pri-h-3" alt="">
                                        <div class="for-border-prici">
                                            <h2 class="price-h-3-s">USD $199.00
                                            </h2>
                                             <p class="sb-price">user/month</p>
                                            <p class="annual-h-3-s">(Annual subscription&ndash;auto renews )<br />Price
                                                does not include tax. </p>
                                            <div class="btn-marg-pricng-3-s"><a class="btn-buy" href="/premium-plan">Buy
                                                    Now</a> </div>
                                            <ul class="grid grid-85 equal ae-2 fromCenter u-l-m mrg-prici"
                                                data-equal-collapse-width="767">
                                                <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                    <p class="list-p-online list-para-mar">Everything in Essential Plan,
                                                        plus:</p>
                                                    <p class="list-p-online"><img class="done-image"
                                                            src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                            alt="" /> Minimum 5 users </p>
                                                    <p class="list-p-online"><img class="done-image"
                                                            src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                            alt="" /> 100 Hours Onboarding & training</p>
                                                    <p class="list-p-online"><img class="done-image"
                                                            src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                            alt="" /> Assembly Management</p>
                                                    <p class="list-p-online"><img class="done-image"
                                                            src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                            alt="" /> Service Management</p>
                                                    <p class="list-p-online"><img class="done-image"
                                                            src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                            alt="" /> General Business Planning</p>
                                                    <p class="list-p-online"><img class="done-image"
                                                            src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                            alt="" /> Project Management</p>
                                                    <p class="list-p-online"><img class="done-image"
                                                            src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                            alt="" /> Production Planning</p>
                                                    <p class="list-p-online"><img class="done-image"
                                                            src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp"
                                                            alt="" /> Manufacturing </p>
                                                </li>
                                                <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                    <h4 class="last-box-h-onl">Apps &amp; Services included</h4>
                                                    <ul class="grid grid-85 equal ae-2 fromCenter u-l-m"
                                                        data-equal-collapse-width="767">
                                                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                            <div class="lst-box-im"><img class="apps-logo-onl"
                                                                    src="https://dynamicsstream.com/storage/pricing/Microsoft_Office_Word.webp"
                                                                    alt="" />
                                                                <p>Word</p>
                                                            </div>
                                                        </li>
                                                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                            <div class="lst-box-im"><img class="apps-logo-onl"
                                                                    src="https://dynamicsstream.com/storage/pricing/Microsoft_Office_Excel.webp"
                                                                    alt="" />
                                                                <p>Excel</p>
                                                            </div>
                                                        </li>
                                                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                            <div class="lst-box-im"><img class="shrponit-logo-onl"
                                                                    src="https://dynamicsstream.com/storage/pricing/Microsoft-PowerPoint.webp"
                                                                    alt="" />
                                                                <p>PowerPoint</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="grid grid-85 equal ae-2 fromCenter u-l-m"
                                                        data-equal-collapse-width="767">
                                                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                            <div class="lst-box-im"><img class="onedriv-logo-onl"
                                                                    src="https://dynamicsstream.com/storage/pricing/Microsoft_Office_OneDrive.webp"
                                                                    alt="" />
                                                                <p>OneDrive</p>
                                                            </div>
                                                        </li>
                                                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                            <div class="lst-box-im"><img class="apps-logo-onl"
                                                                    src="https://dynamicsstream.com/storage/pricing/Microsoft_Office_Outlook.webp"
                                                                    alt="" />
                                                                <p>Outlook</p>
                                                            </div>
                                                        </li>
                                                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                            <div class="lst-box-im"><img class="exchange-logo-onl"
                                                                    src="https://dynamicsstream.com/storage/pricing/Microsoft_Exchange.webp"
                                                                    alt="" />
                                                                <p>Exchange</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="grid grid-85 equal ae-2 fromCenter u-l-m"
                                                        data-equal-collapse-width="767">
                                                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                            <div class="lst-box-im"><img class="shrapot-logo-onl"
                                                                    src="https://dynamicsstream.com/storage/pricing/SharePoint.webp"
                                                                    alt="" />
                                                                <p>SharePoint</p>
                                                            </div>
                                                        </li>
                                                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                            <div class="lst-box-im"><img class="apps-logo-onl"
                                                                    src="https://dynamicsstream.com/storage/pricing/Microsoft_Office_Publisher.webp"
                                                                    alt="" />
                                                                <p>Publisher</p>
                                                            </div>
                                                        </li>
                                                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                            <div class="lst-box-im"><img class="shrponit-logo-onl"
                                                                    src="https://dynamicsstream.com/storage/pricing/Microsoft-Access-Logo.webp"
                                                                    alt="" />
                                                                <p>Access</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="term-sec-liv mobile-blocks displ-pri"> <img
                        src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt=""
                        class="term-icon-cl-live">
                    <p class="term-pop-para-live ">Prices shown are for informational purposes only and may not be
                        reflective of actual list price due to currency, country, and regional variant factors. Your
                        actual price will be reflected at checkout.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-color:#F0F0F0">
    </div>
</section>
<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/62971968b0d10b6f3e751345/1g4f3mh4j';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
</script>
@endsection