@extends('newhomemain')
@section('title', 'Microsoft Dynamics 365 Finance &amp; Operations Guided Tour')
@section('meta_description' , 'Dynamics 365 Finance is a cloud-based modern ERP solution originally developed for large and diverse organizations.')
@section('meta_keywords', 'Dynamics Finance')
@section('contents')
<section>
    <div class="container px-xl-5">

        <div class="tab-nbcgt tab-nbcgt-new-m">
            <h3 class="mt-5 mb-5 ml-nbcgt ">Manage Financial Risk Guided Tour</h3>
            <div class="tab__list-nbcgt">
                <div class="tab__item-nbcgt">
                    <img class="mb-2" src="{{asset('newassets')}}/images/finance-guided-tour/welcome-icon.webp" alt="" />
                    <p class="mobile-none">Welcome</p>
                </div>
                <div class="tab__item-nbcgt">
                    <img class="mb-2" src="{{asset('newassets')}}/images/finance-guided-tour/optimize-financial-operations-icon.webp" alt="" />
                    <p class="mobile-none">Optimize Financial Operations</p>
                </div>
                <div class="tab__item-nbcgt">
                    <img class="mb-2" src="{{asset('newassets')}}/images/finance-guided-tour/adapt-quickly-icon.webp" alt="" />
                    <p class="mobile-none">Adapt Quickly and reduce costs</p>
                </div>
                <div class="tab__item-nbcgt">
                    <img class="mb-2" src="{{asset('newassets')}}/images/finance-guided-tour/protect-revenue-icon.webp" alt="" />
                    <p class="mobile-none">Protect your revenue</p>
                </div>
                <div class="tab__item-nbcgt">
                    <img class="mb-2" src="{{asset('newassets')}}/images/finance-guided-tour/summary.webp" alt="" />
                    <p class="mobile-none">Summary</p>
                </div>
            </div>
            <div class="tab__content-nbcgt">
                <div class="tab__content-item-nbcgt">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                            <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-welcome.webp" alt="" /></div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                            <h5 class="mb-3">Welcome</h5>
                            <p class="">Dynamics 365 applications enable organizations to manage financial risk and reduce fraud, helping them to move away from transactional financial management to adopt predictive and proactive operations that help them drive performance, protect revenue, and take better care of their people.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab__content-item-nbcgt tab-nbcgt">
                    <div class="tab__list-nbcgt inner-tabs-bg-colr-6">
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 1</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 2</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 3</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 4</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 5</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 6</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 7</div>
                    </div>
                    <div class="tab__content-nbcgt">
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-optimize.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Optimize Financial Operations</h5>
                                    <p class="">Organizations can optimize financial operations with AI-powered insights and embedded analytics, and by automating tedious and time-consuming tasks.
                                        Sara, the Chief Financial Officer at Contoso Coffee, reviews the cash flow forecast in Dynamics 365 Finance to analyze the organization’s upcoming cash requirements for coffee bean shipments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-optimize.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Optimize Financial Operations</h5>
                                    <p class="">Sara checks Contoso Coffee’s cash position and notes that the bank balance dipped in May, but it has recently grown at a strong rate over the past few months, including last month.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-optimize.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Optimize Financial Operations</h5>
                                    <p class="">Sarah then checks the cash forecast and sees that Contoso Coffee’s cash outflows will grow in the coming months, and then reduce significantly in the spring.
                                        This cash forecast can integrate data from multiple data sources to ensure the most accurate predictions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-optimize.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Optimize Financial Operations</h5>
                                    <p class="">Sara can also return to the Summary tab to get an overview of Contoso’s bank account information, balance chart, and related information.
                                        She can see that Contoso’s bank balance has been impacted by overdue invoices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-optimize.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Optimize Financial Operations</h5>
                                    <p class="">Sara reaches out to Ken, Controller at Contoso, and recommends setting up automatic vendor payment proposals to help make the process of paying invoices more efficient.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-optimize.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Optimize Financial Operations</h5>
                                    <p class="">
                                        Ken uses the Process automations page to create a new process automation for vendor payment proposals.
                                        Ken can create automation schedules that define what and when vendor’s will be paid, making Contoso more consistent in payments, and eliminating time spent on manual and repetitive tasks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-optimize.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Optimize Financial Operations</h5>
                                    <p class="">
                                        He confirms that the vendor payment proposal has been scheduled for Monday.
                                        Payment clerks can now review upcoming payment proposals, make any necessary adjustments, and move them through the payment process quickly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab__content-item-nbcgt tab-nbcgt">
                    <div class="tab__list-nbcgt inner-tabs-bg-colr-9">
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 1</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 2</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 3</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 4</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 5</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 6</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 7</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 8</div>
                    </div>
                    <div class="tab__content-nbcgt">
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-adapt-quickly.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Adapt Quickly & reduce costs</h5>
                                    <p class="">Dynamics 365 Business Central can be embedded in Outlook to simplify purchase invoice entry within an application you already use.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-adapt-quickly.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Adapt Quickly & reduce costs</h5>
                                    <p class="">Chief Financial Officer at Contoso Coffee, Sara, is navigating the opening of an international store in Toronto, Canada.
                                        Dynamics 365 Finance offers out-of-the-box localizations for 44 countries/regions and Microsoft partners offer over 40 more localization solutions for other countries/regions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-adapt-quickly.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Adapt Quickly & reduce costs</h5>
                                    <p class="">Sara reviews the company’s financial performance to ensure that the Contoso Coffee is performing well.
                                        Contoso Coffee’s revenue is well over expected while expenses are even with the budgeted amount – leaving Contoso in a strong financial position to expand to Canada.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-adapt-quickly.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Adapt Quickly & reduce costs</h5>
                                    <p class="">Dynamics 365 Finance uses powerful AI to predict when customers will pay their invoices. With this visibility, Sara can proactively reduce write-offs and improve Contoso’s margin.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-adapt-quickly.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Adapt Quickly & reduce costs</h5>
                                    <p class="">Rather than spending time to research which customers should be contacted about an open invoice or account balance, Sara can use Collections Automation to consistently apply collection activities with customized email reminders, or programmed processes for sending collection letters.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-adapt-quickly.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Adapt Quickly & reduce costs</h5>
                                    <p class="">Contoso Coffee’s Project Services team uses Dynamics 365 Project Operations to manage store developments and refurbishments.
                                        Contoso connects project sales, resource management, project management, and finance teams in one solution to win more deals, deliver successful business outcomes, and maximize profitability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-adapt-quickly.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Adapt Quickly & reduce costs</h5>
                                    <p class="">From the Resource Utilization page, Sara can gain visibility into resource availability and optimize resource capacity, enabling her to maximize profitability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-adapt-quickly.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Adapt Quickly & reduce costs</h5>
                                    <p class="">Dynamics 365 Human Resources gives Sara insight into who is available over the next month, helping her determine the optimal time to successfully open the new Toronto store.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab__content-item-nbcgt tab-nbcgt">
                    <div class="tab__list-nbcgt inner-tabs-bg-colr-9">
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 1</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 2</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 3</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 4</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 5</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 6</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 7</div>
                        <div class="tab__item-nbcgt tab__item-nbcgtnn">Step 8</div>
                    </div>
                    <div class="tab__content-nbcgt">

                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-protect.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Protect Your Revenue</h5>
                                    <p class="">
                                        Contoso Coffee’s Fraud Protection manager, Jon Vogt, leverages Dynamics 365 Fraud Protection (DFP) to protect revenue and curtail fraud by using AI models to convert assessments into decisions.
                                        DFP has three key capabilities: Purchase Protection, Loss Prevention, and Account Protection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-protect.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Protect Your Revenue</h5>
                                    <p class="">Purchase Protection uses adaptive AI technology to provide insights that Jon can use to create more stringent policies that make it more likely for fraudulent purchases to be rejected.
                                        The Scorecard provides filterable metrics, helping fraud prevention managers understand the impact fraud is having on their organization.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-protect.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Protect Your Revenue</h5>
                                    <p class="">To see how his new policies have affected Contoso’s purchases, he first checks the Virtual Fraud analyst. 
                                        Dynamics 365 Fraud Protection uses adaptive AI technology & a powerful fraud protection network to provide insights that Jon can use to help optimize controls and immunize Contoso against fraud attacks.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-protect.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Protect Your Revenue</h5>
                                    <p class="">The Loss prevention report provides insight into anomalous transactions across stores and for specific employees.
                                        By using this AI-powered report, Jon has significantly decreased the manual efforts that are usually required to determine business entities at risk.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-protect.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Protect Your Revenue</h5>
                                    <p class="">By filtering the date of the report, Jon sees that fraudulent activities have decreased from the previous month, which means his preventative measures have been effective.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-protect.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Protect Your Revenue</h5>
                                    <p class="">With this scorecard, Jon can drill into fraudulent activity for each top-risk staff member and store terminal to identify the major contributors to fraud-related loss.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-protect.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Protect Your Revenue</h5>
                                    <p class="">
                                        Customers can also leverage Account Protection to protect their online revenue and reputation by combating the creation of fake accounts, account takeover, and fraudulent account access.
                                        The Bot model score provides insights into how bots are engaging Contoso’s e-commerce platform by creating fraudulent accounts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgt">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/finance-protect.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Protect Your Revenue</h5>
                                    <p class="">Here, the Bot model score gives Jon insights into fraudulent account logins that may compromise or abuse customer accounts.
                                        Account protection capabilities can help fraud protection managers like Jon reduce wrongful rejections of legitimate account activity while controlling fraud.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab__content-item-nbcgt">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                            <div class=""><img class="" src="{{asset('newassets')}}/images/finance-guided-tour/Finance-summary.webp" alt="" /></div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                            <h5 class="mb-3">Summary</h5>
                            <p class="">Working together, Dynamics 365 Finance, Project Operations, and Fraud Protection help organizations optimize their financial operations, adapt quickly and reduce costs, and protect their revenue.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="try-for-free-bg-color mt-5">
            <h4 class="h-bg-try-finance">How can we help?</h4>
            <div class="inn-di-try">
                <p class="mt-3">Connect with the Dynamics 365 team for assistance linking people, data, and processes across your organization. Get answers to your questions from Dynamics 365 experts or help with:
                </p>
                <h5 class="mt-4 mb-2 wei-he-try">Contact us</h5>
                <p>Fill out the form and we’ll be in touch</p>
                <div class=" mt-4">
                    <form class="contact-form" id="contactForm" action="/contact-form" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="" class="mb-2">Full Name</label>
                                <input type="text" id="name" name="name" class="form-control form-free-try-finance" required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="mb-2">Company Name</label>
                                <input type="text" id="cname" name="company" class="form-control form-free-try-finance" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="mb-2">Phone Number*</label>
                                <input type="number" id="phone" name="phone" class="form-control form-free-try-finance" required="" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="mb-2">Email Address*</label>
                                <input type="email" id="emailst" onkeyup="validateEmailst()" name="email" class="form-control form-free-try-finance" required="" />
                                <span id="error-messagest" class="error-message"></span>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="" class="mb-2">Choose a Solution*</label>
                                <select id="solution" class="form-control form-free-try-finance" name="solutions" required="">
                                    <option disabled="disabled" selected="selected" value=""></option>
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
                            <div class="col-md-12 mt-3 mb-3">
                                <button type="submit" class="btn btn-sbmt-try-finance px-5">Submit</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection