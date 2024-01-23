@extends('main')
@foreach($appsource as $appsources)
@section('title', $appsources->meta_title)
@section('meta_description' , $appsources->meta_description)
@section('meta_keywords', $appsources->meta_keyword)
@endforeach
@section('contents')

<!-- Slide 1   -->
<section class="slide  kenBurns" name="solution" id="solutions">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="col-12">
                    @foreach($appsource as $appsources)
                    <h3 class="apps-heading margn-heading">
                        {{$appsources->title}}
                    </h3>
                    @endforeach
                </div>
                <div class="apps-div">
                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                        @foreach($ourapp as $ourapps)
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-2 ae-3 logo-mrgn-mob zoom-hovr">
                            <a href="{{ $ourapps->slug }}"  target="_blank">
                                <img src="{{ asset('/storage/'.$ourapps->app_logos)}}" alt="..." class="apps-logos" />
                                <p class="our-apps-logo-heading">{{$ourapps->app_title}}</p>
                            </a>
                        </li>
                        @endforeach
                     
                        <!-- <li class="col-4-12 col-tablet-1-2 col-phablet-1-2 ae-4 logo-mrgn-mob">
                            <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-for-operations/dsss.ds365-zatca-e-invoicing-f-o-app?exp=ubp8" target="_blank">


                                <img src="{{ asset('assets')}}/images/apps/ZATCA.png" alt="..." class="apps-logos" />
                                <p class="paragraph-section-home">DS364 ZATCA E-INVOICING F&O APP</p>


                            </a>
                        </li>
                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-2 ae-4 logo-mrgn-mob">
                            <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-for-operations/dsss.ds365-payroll-fo?exp=ubp8" target="_blank">


                                <img src="{{ asset('assets')}}/images/apps/payroll.png" alt="..." class="apps-logos" />
                                <p class="paragraph-section-home">DS365 PAYROLL F&O APP</p>


                            </a>
                        </li> -->
                    </ul>

                    <!-- <ul class="grid grid-85 ulist-pad equal ae-2 fromCenter"
                        data-equal-collapse-width="767">
                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-2 ae-4 logo-mrgn-mob">
                            <a href="" target="_blank">
                                <img src="{{ asset('assets')}}/images/apps/h2h.png" alt="..." class="apps-logos" />
                                <p class="paragraph-section-home">DS365 H2H BANK INTEGRATION APP</p>
                            </a>
                        </li>
                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-2 ae-3 logo-mrgn-mob">
                            <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-excise-duty-app%7CPAPPID.42686037-9102-4d37-b7fd-6d57b6ea2cf4?exp=ubp8&tab=Overview" target="_blank">


                                <img src="{{ asset('assets')}}/images/apps/excise-duty.png" alt="..."
                                    class="apps-logos" />
                                <p class="paragraph-section-home">DS365 EXCISE DUTY APP</p>


                            </a>

                        </li>
                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-2 ae-4 logo-mrgn-mob">
                            <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-lawyer-management%7CPAPPID.dc4cf926-3f14-4ec4-b250-1330446d815d?exp=ubp8&tab=Overview" target="_blank">


                                <img src="{{ asset('assets')}}/images/apps/Lawyer-Management.png" alt="..."
                                    class="apps-logos" />
                                <p class="paragraph-section-home">DS365 LAWYER MANAGEMENT APP</p>


                            </a>
                        </li>
                    </ul> -->

                </div>
                
            </div>
        </div>
    </div>


    <div class="background" style="background-color:white;"></div>

</section>
<!-- <section class="slide  kenBurns" name="solution" id="solutions">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="col-12">
                @foreach($appsource as $appsources)
                    <h3 class="apps-heading">
                       {{$appsources->title}}
                    </h3>
                    @endforeach
                </div>
                <div class="apps-div">
                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-2 ae-4 logo-mrgn-mob">
                            <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-post-dated-cheque-app%7CPAPPID.7c9fe0fd-e57a-4722-bb15-71e252315afb?exp=ubp8&tab=Overview" target="_blank">


                                <img src="{{ asset('assets')}}/images/apps/PDC.png" alt="..." class="apps-logos-2" />
                                <p class="paragraph-section-home">DS365 POST DATED CHEQUE APP</p>


                            </a>
                        </li>
                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-2 ae-4 logo-mrgn-mob">
                            <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-e-services%7CPAPPID.cfee88aa-dee4-4f41-b4b1-869c39a80e1f?exp=ubp8&tab=Overview" target="_blank">


                                <img src="{{ asset('assets')}}/images/apps/E-service.png" alt="..."
                                    class="apps-logos-2" />
                                <p class="paragraph-section-home">DS365 E-SERVICE APP</p>


                            </a>
                        </li>
                    </ul>
                    <ul class="grid grid-85 equal ae-2 fromCenter list-mrgn-logo" data-equal-collapse-width="767">
                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-2 ae-4 logo-mrgn-mob">
                            <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-purchase-requisition-app%7CPAPPID.52f69529-78d0-4709-b5ca-70c51fc0d67a?exp=ubp8&tab=Overview" target="_blank">


                                <img src="{{ asset('assets')}}/images/apps/pr.png" alt="..." class="apps-logos-2" />
                                <p class="paragraph-section-home">DS365 PURCHASE REQUISITION APP</p>


                            </a>
                        </li>
                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-2 ae-4 logo-mrgn-mob">
                            
                                                        <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-zatca-e-invoice-app%7CPAPPID.4bb2308f-3c17-4c2a-9889-c4790d882eeb?exp=ubp8&tab=Overview" target="_blank">


                                <img src="{{ asset('assets')}}/images/apps/ZATCA.png" alt="..." class="apps-logos-2" />
                                <p class="paragraph-section-home">DS365 ZATCA E-INVOICING APP</p>


                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="background" style="background-color:white;"></div>

</section> -->

@endsection