<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\BusinessCentralGuidedTourFormData;
use App\Mail\BusinessCentralLandingPageContactForm;
use App\Mail\BusinessCentralUSALandingPageContactForm;
use App\Mail\CareerForm;
use App\Mail\FinanceAndOperationsLandingPageContactFormMailData;
use App\Mail\PartnerLandingPageContactForm;
use App\Mail\PricingPlanContactUsInformation;
use App\Mail\Subscribe;
use App\Mail\VisitorContact;
use App\Models\addcareer;
use App\Models\appsource;
use App\Models\bcguided;
use App\Models\BcLandingContact;
use App\Models\Bcontact;
use App\Models\BcUSALandingContact;
use App\Models\careermain;
use App\Models\featuredjob;
use App\Models\financelandingcontact;
use App\Models\Footercontact;
use App\Models\Footerindustry;
use App\Models\Footersectionone;
use App\Models\Footerservice;
use  App\Models\Footersolution;
use App\Models\Getquote;
use App\Models\Industriespage;
use App\Models\Mainblog;
use App\Models\Mainhome;
use App\Models\Servicespage;
use App\Models\Navbar;
use App\Models\Whychoose;
use App\Models\Navlogo;
use App\Models\news;
use App\Models\ourapp;
use App\Models\Solutioninsdustry;
use App\Models\Solutionpage;
use App\Models\Topheader;
use App\Page;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Redirect;

class HomeController extends Controller
{
    public function servicesDetail(Request $request)
    {
        $type = 'services';
        $parent_page = '';
        $page_slug = $request->slug;
        $page = Page::where('slug', '=', $page_slug)->where('type', '=', 'service')->first();

        if ($page) {
            return view('page', compact('page', 'type', 'parent_page'));
        } else {
            abort(404);
        }
    }

    public function industriesDetail(Request $request)
    {
        $type = 'industry';
        $parent_page = '';
        // $page_slug = $request->slug;
        $page_slug = $request->slug;
        $page = Page::where('slug', '=', $page_slug)->where('type', '=', 'industry')->first();

        if ($page) {
            return view('page', compact('page', 'type', 'parent_page'));
        } else {
            abort(404);
        }
    }

    public function page(Request $request)
    {
        $bacontact = Bcontact::all();
        $navbars = Navbar::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        $blog = Post::where('slug', '=', $request->slug)->first();
        $type = 'solution';
        $parent_page = '';
        if ($request->child) {
            $is_parent = 1;
            $page_slug = $request->child;
            $parent_slug = $request->slug;
            // $parent_slug = Str::slug($request->slug);

            $parent_page = Page::where('slug', '=', $parent_slug)->first();

            $page = Page::where('slug', '=', $page_slug)->first();
        } else {
            $is_parent = 0;
            // dd($is_parent);
            $page_slug = $request->slug;
            // $page_slug = Str::slug($request->slug);
            // dd($page_slug);
            $page = Page::where('slug', '=', $page_slug)->first();
            // dd($page);
        }

        if ($page) {
            return view('page', compact('page','blogsndss','blog','navbars', 'parent_page', 'type', 'solutionindustrys', 'footersectionone', 'footersolution'));
        } else {
            abort(404);
        }
    }

    public function blogsDetail(Request $request)
    {
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $solutionindustrys = Solutioninsdustry::all();
        $navs = Navlogo::all();
        $mainblog = Mainblog::all();
        $navbars = Navbar::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        $blog = Post::where('slug', '=', $request->slug)->first();
        //   dd($blogs);
        if ($blog) {
            return view('blog_detail', compact('blog','blogsndss','footersectionone','footersolution',
            'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs', 'navbars','mainblog','solutionindustrys'));
        } else {
            abort(404);
        }
    }
    public function carer(Request $request)
    {
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $solutionindustrys = Solutioninsdustry::all();
        $navs = Navlogo::all();
        $mainblog = Mainblog::all();
        $navbars = Navbar::all();
        $blog = Whychoose::where('slug', '=', $request->slug)->first();
        //   dd($blogs);
        if ($blog) {
            return view('careers.career_detail', compact('blog','footersectionone','footersolution',
            'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs', 'navbars','mainblog','solutionindustrys'));
        } else {
            abort(404);
        }
    }
    public function vertical(Request $request)
    {
        $bacontact = Bcontact::all();
        $navbars = Navbar::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $appsource=appsource::all();
        $ourapp=ourapp::all();
            return view('Pages.solutions.vertical_solutions', compact('ourapp','appsource', 'navbars', 'bacontact', 'solutionindustrys', 'footersectionone', 'footersolution'));
        
    }
       public function careermain(Request $request)
    {
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $solutionindustrys = Solutioninsdustry::all();
        $navs = Navlogo::all();
        $mainblog = Mainblog::all();
        $navbars = Navbar::all();
        $careermain=careermain::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        // $careermain = careermain::where('slug', '=', $request->slug)->first();
        //   dd($blogs);
        if ($careermain) {
            return view('careers.careers', compact('careermain','blogsndss','footersectionone','footersolution',
            'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs', 'navbars','mainblog','solutionindustrys'));
        } else {
            abort(404);
        }
    }
    public function featuredjobs(Request $request)
    {
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $solutionindustrys = Solutioninsdustry::all();
        $navs = Navlogo::all();
        $mainblog = Mainblog::all();
        $navbars = Navbar::all();
        $featuredjob=featuredjob::all();
        $blogs=Whychoose::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        $featuredjob =featuredjob::where('slug', '=', $request->slug)->first();
        //   dd($blogs);
        if ($featuredjob) {
            return view('careers.career_jobs', compact('blogs','blogsndss','featuredjob','footersectionone','footersolution',
            'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs', 'navbars','mainblog','solutionindustrys'));
        } else {
            abort(404);
        }
    }


    public function contactForm(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'industries' => $request->industries,
            'solutions' => $request->solutions,
            'message' => $request->message,
        ];
        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->company = $request->company;
        $data->industries = $request->industries;
        $data->solutions = $request->solutions;
        $data->message = $request->message;
        $data->save();
        Mail::to('info@dynamicsstream.com')->send(new VisitorContact($data));

        return redirect()->back()->with('success', 'Form Submit Successfully!');
    }
    public function bcguidedcontactForm(Request $request)
    {
        // $data = $request->all();
 
        $request->validate([
            'industries' => 'required',
            'solutions' => 'required',
            'peoples' => 'required',
        ]);
    //    $data = [
    //         'industries' => $request->industries,
    //         'peoples' => $request->peoples,
    //     ]; 

        
        // bcguidedform::create($data);
        $data = new bcguided();
        $data->industries = $request->industries;
        $arrayTostring = implode(',', $request->input('solutions'));
        $data['solutions'] = $arrayTostring;
        $data->peoples = $request->peoples;
        $data->save();
    
        Mail::to('info@dynamicsstream.com')->send(new BusinessCentralGuidedTourFormData($data));

        return redirect()->back()->with('success', 'Form Submit Successfully!');
    }

    

     public function careerFormData(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'resume'=>'required',
         ]);
        Solutionpage::create($request->all());
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'resume' => $request->file('resume'),
            ];

            Mail::send('email.career', $data, function($message) use ($data) {
                $message->to('careers@dynamicsstream.com')
                    ->subject('Contact Form Submission')
                    ->attach($data['resume']->getRealPath(), [            'as' => $data['resume']->getClientOriginalName(),
                        'mime' => $data['resume']->getClientMimeType(),
                    ]);
            });
            
            return redirect()->back()->with('success', 'Form Submit Successfully!');

    }
    public function contactFormpricing(Request $request)
    {
        $data = new Servicespage();
        $data->name = $request->name;
        $data->company = $request->company;
        $data->email = $request->email;
        $data->mobile_number = $request->mobile_number;
        $data->country = $request->country;
        $data->industry = $request->industry;
        $data->plan = $request->plan;
        $data->save();
        Mail::to('info@dynamicsstream.com')->send(new PricingPlanContactUsInformation($data));
        return redirect('/form-submitted');
    }
   
     public function contactFormPopup(Request $request)
    {
        $data = new BcLandingContact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->company = $request->company;
        $data->solutions = $request->solutions;
        $data->services = $request->services;
        $data->message = $request->message;
        $data->save();
        Mail::to('info@dynamicsstream.com')->send(new BusinessCentralLandingPageContactForm($data));
        return view('Pages.thank');
    }
}