@extends('main')
@section('title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keyword)
@section('canonical', '',)
@section('contents')
<section>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            {!! $page->main_body !!}
              <section class="slide kenBurns" id="contact-us">
      <div class="content">
        <!-- <div class="containers">
            <div class="wraps">
                <div class="modal-newhome">
                    <div class="modal__content">
                        <div class="formbold-main-wrapper-newhome">
                            <div class="formbold-form-wrapper-newhome">
                                @if(\Session::has('success'))
                                <div class="alert alert-success ">{{ \Session::get('success') }}</div>
                                {{ \Session::forget('success') }}
                                @endif
                                <h2 class="modal__title-newhome">Tell Us More About Your Project</h2>
                                <form id="contactForm" action="/contact-form" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                            <div class="formbold-mb-5-up-newhome"><label class="formbold-form-label-up-newhome" for="name"></label>
                                                <input id="name" name="name" type="text" placeholder="Name" class="formbold-form-input-up-newhome" required />
                                            </div>
                                        </li>
                                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                            <div class="formbold-mb-5-up-newhome"><label class="formbold-form-label-up-newhome" for="company name"></label>
                                                <input id="cname" name="company" type="text" class="formbold-form-input-up-newhome" placeholder="Company" />
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                            <div class="formbold-mb-5-up-newhome"><label class="formbold-form-label-up-newhome" for="email"></label>
                                                <input id="email" onkeyup="validateEmail()" id="email" name="email" type="email" class="formbold-form-input-up-newhome" placeholder="Email" required="" />
                                                <span id="error-message" class="error-message"></span>
                                            </div>
                                        </li>
                                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                            <div class="formbold-mb-5-up-newhome"><label class="formbold-form-label-up-newhome" for="phone"></label>
                                                <input name="phone" type="tel" class="formbold-form-input-up-newhome for-inp-width-only phonez" minlength="11" placeholder="Phone" maxlength="17" required />
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                            <div class="formbold-mb-5 formbold-mb-5-newde"> <label for="solutions"></label>
                                                <select id="solution" class="formbold-form-input-newhome" name="solutions">
                                                    <option disabled="disabled" selected="selected" value="">Choose
                                                        a
                                                        Solution</option>
                                                    <option class="optons" value="Dynamics 365 Business Central">
                                                        Dynamics 365 Business Central
                                                    </option>
                                                    <option value="Dynamics 365 Finance and Supply Chain">Dynamics 365
                                                        Finance and Supply Chain
                                                    </option>
                                                    <option value="Dynamics AX">Dynamics AX</option>
                                                    <option value="Dynamics Navision">Dynamics Navision</option>
                                                    <option value="Dynamics 365 Sales ">Dynamics 365 Sales </option>
                                                    <option value="Dynamics 365 Service">Dynamics 365 Service</option>
                                                    <option value="Dynamics 365 Marketing">Dynamics 365 Marketing
                                                    </option>
                                                    <option value="Dynamics 365 Retail and Commerce">Dynamics 365 Retail
                                                        and Commerce</option>
                                                    <option value="Dynamics 365 HR">Dynamics 365 HR</option>
                                                    <option value="Dynamics 365 Project Management">Dynamics 365 Project
                                                        Management</option>
                                                    <option value="Microsoft Office 365">Microsoft Office 365</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                            <div class="formbold-mb-5-newde-2"> <label for="services"></label>
                                                <select id="service" class="formbold-form-input-newhome" name="services">
                                                    <option disabled="disabled" selected="selected" value="">Choose
                                                        a
                                                        Service</option>
                                                    <option value="Implementation Services">Implementation</option>
                                                    <option value="Support Service">Support Service</option>
                                                    <option value="Upgrade Service">Upgrade Service</option>
                                                    <option value="Training Service">Training Service</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="formbold-mb-5"><label class="formbold-form-label-newhome" for="comment"></label> <textarea id="message" placeholder="Comment" class="formbold-form-input-newhome-for-textarea" cols="20" name="message" rows="3"></textarea></div>
                                    <div class="btn-align-new"><input value="Submit" type="submit" class="formbold-btn-newhome" /></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="for-new-l-logo-s-new-ho-lo">
                    <ul class="grid grid-85 equal ae-2 fromCenter displ-f-for-logos mrg-in-one" data-equal-collapse-width="767">
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <img src="{{ asset('assets') }}/images/business-central/upd/iso-landing.webp" alt="" class="bottom-logos-new-ho" srcset="">
                        </li>
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <img src="{{ asset('assets') }}/images/business-central/new/gold.webp" alt="" class="bottom-logos-new-ho" srcset="">
                        </li>
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <img src="{{ asset('assets') }}/images/business-central/new/ERP-partner.webp" class="bottom-logos-new-ho " alt="" srcset="">
                        </li>
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <img src="{{ asset('assets') }}/images/business-central/new/solution-partner.webp" class="bottom-logos-new-ho for-mrgn" alt="" srcset="">
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
    <div class="background" style="background-color:white"></div>
</section>
        </div>
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
@stop
