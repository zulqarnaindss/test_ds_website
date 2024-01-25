<div class="cookie-consent-modal">
	<div class="contentss">
		<!-- <h5 class="cookie-h-popup">We Use Cookies</h5> -->
		<p>This website uses cookies to improve user experience. By using our website you consent to all cookies
			<!-- in accordance with our Cookie Policy. -->
			<!-- <a href="/cookie-policy" class="read-priv-btn">Read More</a> -->
		</p>
		<div class="btns-123">
			<a href="/cookie-policy" class=""><button class="btnhh bg-colr-can cancel">Learn more</button> </a>
			<button class="btnhh accept pdng-acp" id="acceptCookie">Ok, got it</button>


		</div>
	</div>
</div>

<!--Section Starts-->
<section class="blog-sec py-5">
	<div class="container px-md-5">
		<div class="row mt-4">
			@foreach($blogsndss as $blogss)
			<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
				<div class="blog-card">
					<div>
						<img src="{{asset( '/storage/' .$blogss->images)}}" class="img-fluid w-100 mb-4" alt="{{$blogss->alt_image }}" />
						<h6 class="mb-4">{{$blogss->title}} </h6>
						<p class="mb-5">{{$blogss->excerpt }}</p>
					</div>
					<div>
						<a href="{{ route('blogs_detail', ['slug' =>$blogss->slug]) }}" class="text-dark text-decoration-none">Read the blog <i class="bi-arrow-right ms-2"></i></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!--section Ends-->
<!--section Starts-->
<section class="service-sec-new py-5">
	<div class="container px-md-5">
		<div class="owl-carousel" id="service_carousel">
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Professional Services</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">eCommerce</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Transport</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Entertainment</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Education</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Project Management</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Hospitality</a></div>
			<div class="item text-center"><a href="https://dynamicsstream.com/microsoft-dynamics-365-wholesale-and-distribution" class="service-link3">Trading & Distribution</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Construction</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Real Estate</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Legals</a></div>
			<div class="item text-center"><a href="https://dynamicsstream.com/microsoft-dynamics-365-for-retail" class="service-link3">Retail</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Food delivery Apps</a></div>
			<div class="item text-center"><a href="https://dynamicsstream.com/microsoft-dynamics-365-for-financial-services" class="service-link3">Financial</a></div>
			<div class="item text-center"><a href="https://dynamicsstream.com/microsoft-dynamics-365-for-public-sector" class="service-link3">Public Administration</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">capital investments</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Oil & Gas</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Logistics</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Media</a></div>
			<div class="item text-center"><a href="https://dynamicsstream.com/microsoft-dynamics-365-for-manufacturing" class="service-link3">manufacturing</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Healthcare</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Non-profit Org</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">Governments</a></div>
			<div class="item text-center"><a href="javascript:void(0);" class="service-link3">HR</a></div>
		</div>
	</div>
</section>
<!--Section Starts-->
<!--Section Starts-->
<section class="foot-sec">
	<div class="container-lg">
		<div class="row">
			<div class="col-xl-3 col-md-6 mb-3">
				<h6>Products</h6>
				<ul class="footer-nav">
					<li><a href="/microsoft-dynamics-365-business-central">Business Central- Microsoft Dynamics 365</a></li>
					<li><a href="/microsoft-dynamics-365-finance">Finance- Microsoft Dynamics 365</a></li>
					<li><a href="https://dynamicsstream.com/microsoft-dynamics-365-supply-chain-management">Supply Chain- Microsoft Dynamics 365</a></li>
					<li><a href="https://dynamicsstream.com/microsoft-dynamics-365-human-resources">Human resources- Microsoft Dynamics 365</a></li>
					<li><a href="https://dynamicsstream.com/microsoft-dynamics-365-crm">Microsoft Sales</a></li>
					<li><a href="https://dynamicsstream.com/microsoft-dynamics-365-crm">Microsoft Customer Service</a></li>
					<li><a href="https://dynamicsstream.com/microsoft-dynamics-365-crm">Microsoft Marketing</a></li>
					<li><a href="https://dynamicsstream.com/microsoft-dynamics-365-commerce">Microsoft Retail & eCommerce</a></li>
					<li><a href="https://dynamicsstream.com/microsoft-dynamics-365-project-operations">Microsoft Project Operations</a></li>
					<li><a href="https://dynamicsstream.com/cloud-solutions-microsoft-azure">Microsoft Azure</a></li>
					<li><a href="https://dynamicsstream.com/microsoft-power-platform-power-automate">Power Platforms</a></li>
					<li><a href="https://dynamicsstream.com/modern-workplace-office-365">Microsoft 365</a></li>
				</ul>
			</div>
			<div class="col-xl-3 col-md-6 mb-3">
				<h6>Our In-house Vertical Solutions</h6>
				<ul class="footer-nav">
					<li><a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-purchase-requisition-app%7CPAPPID.52f69529-78d0-4709-b5ca-70c51fc0d67a?exp=ubp8&tab=Overview">DS365 Purchase Requisition App</a></li>
					<li><a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-zatca-e-invoice-app%7CPAPPID.4bb2308f-3c17-4c2a-9889-c4790d882eeb?exp=ubp8&tab=Overview">DS365 ZATCA E-Invoicing App</a></li>
					<li><a href="https://appsource.microsoft.com/en-us/product/dynamics-365-for-operations/dsss.ds365-vendor-reconciliation-app?exp=ubp8&tab=Overview">DS365 Vendor Reconciliation App</a></li>
					<li><a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-excise-duty-app%7CPAPPID.42686037-9102-4d37-b7fd-6d57b6ea2cf4?exp=ubp8&tab=Overview">DS365 Excise Duty App</a></li>
					<li><a href="https://appsource.microsoft.com/en-us/product/dynamics-365-for-operations/dsss.ds365-zatca-e-invoicing-f-o-app?exp=ubp8">DS365 Zatca E-Invoicing For F&O</a></li>
					<li><a href="https://appsource.microsoft.com/en-us/product/dynamics-365-for-operations/dsss.ds365-payroll-fo?exp=ubp8">DS365 Payroll F&O</a></li>
					<li><a href="#">DS365 Payroll for Business Central</a></li>
				</ul>
			</div>
			<div class="col-xl-3 col-md-6 mb-3">
				<h6>What we’re best at</h6>
				<ul class="footer-nav">
					<li><a href="microsoft-dynamics-365-implementation-services">Implementation Of Microsoft Business Apps</a></li>
					<li><a href="/microsoft-dynamics-upgraded-services">Upgrades Of Microsoft Business Apps</a></li>
					<li><a href="/microsoft-dynamics-customization-service">Customization Of Microsoft Business Apps</a></li>
					<li><a href="/microsoft-dynamics-support-services">Support & Service Level Agreements</a></li>
					<li><a href="https://dynamicsstream.com/#Resource-augmentation">Resource Augmentations Of Microsoft-Dynamics Business Applications</a></li>
				</ul>
			</div>
			<div class="col-xl-3 col-md-6 mb-3">
				<h6>Company</h6>
				<ul class="footer-nav">
					<li><a href="/about-us">Our Story</a></li>
					<li><a href="/dynamics-365-business-central-pricing-plan">Products Pricing</a></li>
					<li><a href="/blogs">Blogs & White-papers</a></li>
					<li><a href="/work-with-us">Work With Us</a></li>
					<li><a href="/contact-us">Connect</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--Footer Ends-->

<!--Footer Starts-->
<footer>
	<div class="container-lg">
		<div class="row">
			<div class="col-xl-12">
				<h5 class="text-center mb-5 fw-bold">Our Partnerships & Strategic Alliances</h5>
				<div class="d-flex flex-wrap justify-content-between align-items-center">
					<img src="{{asset('newassets')}}/images/brand/microsoft-logo.png" class="img-fluid me-4" alt="Microsoft Logo" width="160" />
					<img src="{{asset('newassets')}}/images/brand/shopify-logo.png" class="img-fluid me-4" alt="Shopify Logo" width="160" />
					<img src="{{asset('newassets')}}/images/brand/micro-gold-logo.png" class="img-fluid me-4" alt="Microsoft Gold Logo" width="160" />
					<img src="{{asset('newassets')}}/images/brand/iso-img.png" class="img-fluid me-4" alt="Microsoft Gold Logo" width="160" />
					<img src="{{asset('newassets')}}/images/brand/hubspot-logo.png" class="img-fluid" alt="Hubspot Logo" width="160" />
				</div>
			</div>
		</div>
	</div>
	<div class="foot-card-sec">
		<div class="container-fluid">
			<div class="row ">
				<div class="col-xl-3 col-md-6 d-flex align-items-stretch mb-4">
					<div class="footer-card">
						<h5 class="mb-4 fw-bold">Dubai - United Arab Emirates</h5>
						<h5 class=" fw-bold lh-base">Head Office</h5>
						<h5 class="mb-5 fw-bold lh-base">1803 The Metropolis Tower <br />Business Bay | Downtown <br /> <br /></h5>
						<h5 class="fw-bold">For Sales, Support & Enquiries</h5>
						<h5 class="fw-bold"><a href="tel:+971044373103" class="anch-color-and-deco">+971 (04) 437 3103</a> </h5>
						<h5 class="fw-bold"><a href="tel:+971527684867" class="anch-color-and-deco">+ 971 52 768 4867</a> </h5>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 d-flex align-items-stretch mb-4">
					<div class="footer-card">
						<h5 class="mb-4 fw-bold">United states of America</h5>
						<h5 class="fw-bold lh-base">Branch Office</h5>
						<h5 class="mb-5 fw-bold lh-base">2000 Cropsey Ave <br />Brooklyn - New York <br />Post Code 11214</h5>
						<h5 class="fw-bold">For Sales, Support & Enquiries</h5>
						<h5 class="fw-bold"><a href="tel:+14158004787" class="anch-color-and-deco">+1 (415) 800 4787</a> </h5>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 d-flex align-items-stretch mb-4">
					<div class="footer-card">
						<h5 class="mb-4 fw-bold">Pakistan</h5>
						<h5 class="mb-4 fw-bold"></h5>
						<h5 class="fw-bold lh-base">Branch Office</h5>
						<h5 class="mb-5 fw-bold lh-base">Johar Town <br />Lahore <br /> <br /></h5>
						<h5 class="fw-bold">For Sales, Support & Enquiries</h5>
						<h5 class="fw-bold"><a class="anch-color-and-deco" href="mailto:info@dynamicsstream.com">info@dynamicsstream.com</a> </h5>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 d-flex align-items-stretch mb-4">
					<div class="footer-card">
						<h5 class="mb-4 fw-bold">United Kingdom</h5>
						<h5 class="mb-4 fw-bold"></h5>
						<h5 class="fw-bold lh-base">Branch Office</h5>
						<h5 class="mb-5 fw-bold lh-base">Stembridge Road <br />London <br />PO Box SE20 UE</h5>
						<h5 class="fw-bold">For Sales, Support & Enquiries</h5>
						<h5 class="fw-bold"><a href="tel:+14158004787" class="anch-color-and-deco">+1 (415) 800 4787</a> </h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-lg">
		<div class="row align-items-center">
			<div class="col-xl-12">
				<h5 class="text-center fw-bold mb-4">Connect With Our Social Media </h5>
				<div class="text-center mb-4">
					<a href="https://www.linkedin.com/company/dynamicsstream.com" target="_blank" class="btn">
						<svg xmlns="http://www.w3.org/2000/svg" width="47" height="40" viewBox="0 0 87 80" fill="none">
							<path d="M76.125 14.4118V65.5882C76.125 66.7583 75.6195 67.8805 74.7198 68.7078C73.82 69.5352 72.5997 70 71.3272 70H15.6728C14.4003 70 13.18 69.5352 12.2802 68.7078C11.3805 67.8805 10.875 66.7583 10.875 65.5882V14.4118C10.875 13.2417 11.3805 12.1195 12.2802 11.2922C13.18 10.4648 14.4003 10 15.6728 10H71.3272C72.5997 10 73.82 10.4648 74.7198 11.2922C75.6195 12.1195 76.125 13.2417 76.125 14.4118ZM30.0662 32.9412H20.4706V61.1765H30.0662V32.9412ZM30.9298 23.2353C30.9348 22.5679 30.7969 21.9061 30.5238 21.2877C30.2507 20.6693 29.8478 20.1064 29.3381 19.6312C28.8284 19.1559 28.222 18.7777 27.5533 18.518C26.8847 18.2583 26.1669 18.1223 25.4411 18.1176H25.2684C23.7923 18.1176 22.3767 18.6568 21.333 19.6166C20.2893 20.5763 19.7029 21.878 19.7029 23.2353C19.7029 24.5926 20.2893 25.8943 21.333 26.854C22.3767 27.8138 23.7923 28.3529 25.2684 28.3529C25.9943 28.3694 26.7165 28.2541 27.394 28.0138C28.0714 27.7734 28.6907 27.4127 29.2164 26.9522C29.7422 26.4916 30.1641 25.9404 30.4581 25.3299C30.7521 24.7194 30.9124 24.0616 30.9298 23.3941V23.2353ZM66.5294 44.0235C66.5294 35.5353 60.6569 32.2353 54.8228 32.2353C52.9126 32.1473 51.0107 32.5215 49.3068 33.3203C47.6029 34.1192 46.1566 35.3149 45.1121 36.7882H44.8434V32.9412H35.8235V61.1765H45.4191V46.1588C45.2804 44.6208 45.8073 43.0945 46.8853 41.9116C47.9633 40.7287 49.5054 39.9847 51.1765 39.8412H51.5411C54.5925 39.8412 56.8571 41.6059 56.8571 46.0529V61.1765H66.4526L66.5294 44.0235Z" fill="black" />
						</svg>
					</a>
					<a href="https://www.youtube.com/@dynamicsstream" target="_blank" class="btn">
						<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 110 100" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M90.7134 22.562C94.6554 23.5247 97.7737 26.3596 98.8327 29.9432C100.774 36.4687 100.833 50.001 100.833 50.001C100.833 50.001 100.833 63.5868 98.8916 70.0587C97.8325 73.6424 94.7142 76.4772 90.7722 77.44C83.653 79.2051 54.9998 79.2051 54.9998 79.2051C54.9998 79.2051 26.3466 79.2051 19.2275 77.44C15.2855 76.4772 12.1671 73.6424 11.1081 70.0587C9.1665 63.5333 9.1665 50.001 9.1665 50.001C9.1665 50.001 9.1665 36.4687 11.0493 29.9967C12.1083 26.413 15.2266 23.5782 19.1686 22.6155C26.2878 20.8503 54.941 20.7969 54.941 20.7969C54.941 20.7969 83.5942 20.7969 90.7134 22.562ZM69.5912 50.001L45.8214 62.517V37.4849L69.5912 50.001Z" fill="black" />
						</svg>
					</a>
					<a href="https://www.instagram.com/dynamics365specialists/" target="_blank" class="btn">
						<svg xmlns="http://www.w3.org/2000/svg" width="49" height="46" viewBox="0 0 89 86" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M44.5 10.75C35.4353 10.75 34.3006 10.7866 30.7406 10.9435C27.1873 11.1005 24.7598 11.6466 22.6371 12.4442C20.4121 13.2526 18.3941 14.5211 16.7253 16.1637C15.0281 17.7743 13.7146 19.723 12.8761 21.8741C12.0551 23.9252 11.4877 26.273 11.3252 29.7066C11.1651 33.1444 11.125 34.2388 11.125 43C11.125 51.7612 11.1628 52.8556 11.3252 56.2956C11.4877 59.7292 12.0528 62.0748 12.8783 64.1259C13.7149 66.2759 15.0276 68.226 16.7275 69.8385C18.3944 71.4784 20.4111 72.7476 22.6371 73.558C24.7598 74.3535 27.1873 74.8996 30.7406 75.0565C34.3006 75.2135 35.4353 75.25 44.5 75.25C53.5646 75.25 54.6994 75.2135 58.2594 75.0565C61.8127 74.8996 64.2402 74.3535 66.3628 73.5558C68.5878 72.7474 70.6059 71.4789 72.2747 69.8363C73.9719 68.2257 75.2854 66.277 76.1239 64.1259C76.9472 62.0748 77.5123 59.7292 77.6747 56.2956C77.8372 52.8556 77.875 51.7591 77.875 43C77.875 34.2409 77.8372 33.1444 77.6747 29.7044C77.5123 26.2709 76.9472 23.9252 76.1217 21.8741C75.2838 19.7221 73.9702 17.7726 72.2724 16.1616C70.6056 14.5216 68.589 13.2523 66.3628 12.4421C64.2402 11.6487 61.8105 11.1005 58.2572 10.9435C54.6994 10.7887 53.5669 10.75 44.5 10.75ZM44.5 16.5615C53.4111 16.5615 54.468 16.5937 57.9879 16.7485C61.2409 16.8925 63.0075 17.415 64.1846 17.8601C65.7421 18.4427 66.8546 19.1436 68.0227 20.2702C69.1908 21.399 69.9139 22.474 70.5169 23.979C70.9753 25.1163 71.5182 26.8234 71.6672 29.9667C71.8274 33.368 71.8608 34.3893 71.8608 43C71.8608 51.6108 71.8274 52.632 71.6672 56.0333C71.5182 59.1766 70.9775 60.8837 70.5169 62.0211C69.9828 63.4219 69.1305 64.6892 68.0227 65.7298C66.946 66.8005 65.6344 67.6241 64.1846 68.14C63.0075 68.5829 61.2409 69.1075 57.9879 69.2515C54.468 69.4063 53.4133 69.4386 44.5 69.4386C35.5866 69.4386 34.532 69.4063 31.012 69.2515C27.7591 69.1075 25.9924 68.585 24.8154 68.14C23.3657 67.6238 22.0542 66.8002 20.9773 65.7298C19.8696 64.6891 19.0174 63.4218 18.4831 62.0211C18.0247 60.8837 17.4818 59.1766 17.3327 56.0333C17.1725 52.632 17.1392 51.6108 17.1392 43C17.1392 34.3893 17.1725 33.368 17.3327 29.9667C17.4818 26.8234 18.0225 25.1163 18.4831 23.979C19.086 22.474 19.8114 21.399 20.9773 20.2702C22.0541 19.1996 23.3656 18.376 24.8154 17.8601C25.9924 17.4172 27.7591 16.8925 31.012 16.7485C34.532 16.5937 35.5889 16.5615 44.5 16.5615Z" fill="black" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M44.5 53.7617C43.0375 53.7617 41.5894 53.4834 40.2383 52.9426C38.8873 52.4018 37.6596 51.6092 36.6255 50.61C35.5914 49.6107 34.7712 48.4245 34.2115 47.1189C33.6519 45.8134 33.3638 44.4141 33.3638 43.001C33.3638 41.5878 33.6519 40.1885 34.2115 38.883C34.7712 37.5774 35.5914 36.3912 36.6255 35.392C37.6596 34.3927 38.8873 33.6001 40.2383 33.0593C41.5894 32.5185 43.0375 32.2402 44.5 32.2402C47.4534 32.2402 50.286 33.3739 52.3744 35.392C54.4628 37.41 55.6361 40.147 55.6361 43.001C55.6361 45.8549 54.4628 48.5919 52.3744 50.61C50.286 52.628 47.4534 53.7617 44.5 53.7617ZM44.5 26.4245C39.9502 26.4245 35.5869 28.1709 32.3697 31.2796C29.1526 34.3883 27.3452 38.6046 27.3452 43.001C27.3452 47.3973 29.1526 51.6136 32.3697 54.7223C35.5869 57.831 39.9502 59.5775 44.5 59.5775C49.0497 59.5775 53.4131 57.831 56.6302 54.7223C59.8473 51.6136 61.6547 47.3973 61.6547 43.001C61.6547 38.6046 59.8473 34.3883 56.6302 31.2796C53.4131 28.1709 49.0497 26.4245 44.5 26.4245ZM66.6454 26.1235C66.6454 27.1627 66.2182 28.1593 65.4577 28.8942C64.6972 29.629 63.6658 30.0418 62.5903 30.0418C61.5148 30.0418 60.4834 29.629 59.723 28.8942C58.9625 28.1593 58.5353 27.1627 58.5353 26.1235C58.5353 25.0842 58.9625 24.0876 59.723 23.3527C60.4834 22.6179 61.5148 22.2051 62.5903 22.2051C63.6658 22.2051 64.6972 22.6179 65.4577 23.3527C66.2182 24.0876 66.6454 25.0842 66.6454 26.1235Z" fill="black" />
						</svg>
					</a>
					<a href="https://www.facebook.com/dynamicsstream" target="_blank" class="btn">
						<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 77 76" fill="none">
							<path d="M77 38.2305C77 17.1152 59.7648 0 38.5 0C17.2352 0 0 17.1152 0 38.2305C0 57.3167 14.0756 73.1323 32.4837 76V49.2835H22.7099V38.228H32.4837V29.8072C32.4837 20.2261 38.2305 14.9315 47.0265 14.9315C51.2358 14.9315 55.6453 15.6788 55.6453 15.6788V25.0876H50.7866C46.0049 25.0876 44.5163 28.0364 44.5163 31.0612V38.2305H55.1936L53.4868 49.2809H44.5163V76C62.9244 73.1323 77 57.3167 77 38.2305Z" fill="black" />
						</svg>
					</a>
				</div>
				<p class="mb-2 small text-center">©2015 All Rights Reserved. Dynamics Stream Software Solutions® is a registered trademark. <a href="/privacy-policy" class="text-dark">Privacy</a> | <a href="/terms-and-conditions" class="text-dark">Terms & Conditions</a> | <a href="/cookie-policy" class="text-dark">Cookie Policy</a></p>
				<p class="mb-0 fw-bold small text-center">Web Design & Developed - <a href="https://www.thefuturedynamics.com/" target="_blank" class="text-dark text-decoration-none fw-bold">www.thefuturedynamics.com</a></p>
			</div>
		</div>
	</div>
</footer>