@extends('for_pricing_main')
@foreach($pricing as $pricingplan)
@section('title', $pricingplan->meta_title_for_contact_two)
@section('meta_description', $pricingplan->meta_description_for_contact_two)
@section('meta_keywords', $pricingplan->meta_keyword_for_contact_two)
@endforeach
@section('contents')
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                @foreach($pricing as $pricingplan)
                <h2 class="heading-online-contact-form">{{$pricingplan->contact_top_heading}}</h2>
                @endforeach
                <div class="modal-1">
                    <h2 class="modal__title">TELL US MORE ABOUT YOUR PROJECT</h2>
                    <div class="modal__content">
                        <div class="con">
                            <div class="formbold-main-wrapper">
                                <div class="formbold-form-wrapper">
                                   <form id="contactForm" action="{{ route('submit-pricing') }}" method="POST">
                                        @csrf
                                        <div class="formbold-mb-5"><label class="formbold-form-label" for="name">Your
                                                Name:</label> <input id="name" name="name" type="text"
                                                class="formbold-form-input" placeholder="Full Name" required /></div>
                                        <div class="formbold-mb-5"><label class="formbold-form-label"
                                                for="name">Company:</label>
                                            <input id="cname" name="company" type="text" class="formbold-form-input"
                                                placeholder="Company Name" required />
                                        </div>
                                        <div class="formbold-mb-5"><label class="formbold-form-label"
                                                for="email">Email:</label>
                                            <input id="email" name="email" type="email" onkeyup="validateEmail()" class="formbold-form-input"
                                                placeholder="Email Address" required />
                                                <span id="error-message" class="error-message"></span>
                                        </div>
                                        <div class="formbold-mb-5"><label class="formbold-form-label" for="phone">Mobile
                                                Number:</label>
                                            <input id="phone" name="mobile_number" type="number"
                                                class="formbold-form-input"  minlength="5"
                                                    maxlength="25" placeholder="phone number" required  />
                                                    <span id="valid-msg" class="hide"
                                                    style="color: green;white-space:nowrap">Valid</span>
                                                <span id="error-msg" class="hide"
                                                    style="color: red;white-space:nowrap">Invalid
                                                    number</span>
                                        </div>
                                        <div class="formbold-mb-5"><label class="formbold-form-label"
                                                for="country">Country of Business:</label>
                                            <input id="country" name="country" type="text" class="formbold-form-input"
                                                placeholder="Country of Business" required />
                                        </div>
                                        <div class="formbold-mb-5"><label class="formbold-form-label"
                                                for="phone">Industries</label><select id="solution"
                                                class="formbold-form-input" name="industry" required="">
                                                <option disabled="disabled" selected="selected" value="">Choose a
                                                    Industry</option>
                                                <option class="optons" value="Microsoft Dynamics 365 Manufacturing">
                                                    Manufacturing</option>
                                                <option value="Microsoft Dynamics 365 Retail">Retail
                                                </option>
                                                <option value="Microsoft Dynamics 365 Services Industries">Services
                                                    Industries</option>
                                                <option value="Microsoft Dynamics 365 Public Sector">Public Sector
                                                </option>
                                                <option value="Microsoft Dynamics 365 Wholesale and Distribution ">
                                                    Wholesale and
                                                    Distribution</option>
                                            </select></div>
                                        <div class="formbold-mb-5"><label class="formbold-form-label">Plan</label>
                                            <input type="text" name="plan" class="formbold-form-input" placeholder=""
                                                value="Essential Plan" readonly style="cursor:not-allowed">
                                        </div>
                                        <div><input value="Submit" type="submit" class="formbold-btn" /></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @foreach($pricing as $pricingplan)
    <div class="background" style="background-image:url({{ asset('/storage/'.$pricingplan->contact_banner)}})">
    </div>
    @endforeach
</section>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62971968b0d10b6f3e751345/1g4f3mh4j';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

@endsection