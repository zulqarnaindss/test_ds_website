<?php

namespace App\Http\Controllers;

use App\Models\Aboutu;
use App\Models\Backgetquote;
use App\Models\Bcontact;
use App\Models\Callback;
use App\Models\featuredjob;
use App\Models\Footercontact;
use App\Models\Footerindustry;
use App\Models\Footersectionone;
use App\Models\Footerservice;
use App\Models\Footersolution;
use App\Models\Industriespage;
use App\Models\Mainblog;
use App\Models\Mainhome;
use App\Models\Navbar;
use App\Models\Navlogo;
use App\Models\Solutioninsdustry;
use App\Models\Topheader;
use App\Models\Whychoose;
use App\Post;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $mainhome = Mainhome::all();
        $backgetquote = Backgetquote::all();
        $solutionindustrys = Solutioninsdustry::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $babout = Aboutu::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        $blog = Post::where('slug', '=', $request->slug)->first();
        return view('Pages.index', compact('blog', 'blogsndss', 'mainhome', 'backgetquote', 'solutionindustrys', 'footersectionone', 'footersolution', 'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs', 'navbars', 'babout'));
    }
    public function bcNewLanding()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.New_Landing_Pages.BC_landing_page', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function financeNewLanding()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.New_Landing_Pages.Finance_landing_page', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function SCNewLanding()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.New_Landing_Pages.SC_landing_page', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function HRNewLanding()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.New_Landing_Pages.HR_landing_page', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function SalesNewLanding()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.New_Landing_Pages.Sales_landing_page', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function MarketingNewLanding()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.New_Landing_Pages.Marketing_landing_page', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function NewImplServices()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.New_Services_Pages.implementation', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function RequestDemoPage()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.request_demo_form_page', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    
    public function NewUpgrServices()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.New_Services_Pages.Upgrades', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function NewSupportService()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.New_Services_Pages.Support', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function NewRemServices()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.New_Services_Pages.Remote_Resources', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function NewCustServices()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.New_Services_Pages.Customization', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function bcGuided()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.Guided_Tour_Pages.bc_tour', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }

    public function financeGuided()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.Guided_Tour_Pages.finance_tour', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function supplyGuided()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.Guided_Tour_Pages.supply_tour', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }
    public function hrguided()
    {
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.Guided_Tour_Pages.hr_tour', compact('bacontact','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }

    public function contact()
    {
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.Contact',compact('blogsndss'));
    }
    public function workwithus()
    {
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.work_with_us',compact('blogsndss'));
    }
    public function copilot()
    {
        
        return view('Pages.copilot');
    }
    public function terms()
    {
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.terms_and_conditions',compact('blogsndss'));
    }
    public function cookies()
    {
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.cookie',compact('blogsndss'));
    }

    public function about()
    {
        $babout = Aboutu::all();
        $bacontact = Bcontact::all();
        $navbars = Navbar::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.About', compact('babout','blogsndss', 'navbars', 'bacontact', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }

    public function power()
    {
        $bacontact = Bcontact::all();
        $navbars = Navbar::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();

        return view('Pages.solutions.powerp', compact('navbars', 'bacontact', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }

    public function onlinePricing()
    {
        $pricing = callback::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $solutionindustrys = Solutioninsdustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.D365_Pricing.D365_Pricing_Plan', compact('pricing', 'blogsndss','solutionindustrys', 'navbars', 'footersectionone', 'footersolution', 'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs'));
    }

    public function onlinecontactone()
    {
        $pricing = callback::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $solutionindustrys = Solutioninsdustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.D365_Pricing.Contact_1', compact('pricing','blogsndss', 'solutionindustrys', 'navbars', 'footersectionone', 'footersolution', 'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs'));
    }

    public function onlinecontacttwo()
    {
        $pricing = callback::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $solutionindustrys = Solutioninsdustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.D365_Pricing.Contact_2', compact('pricing','blogsndss', 'solutionindustrys', 'navbars', 'footersectionone', 'footersolution', 'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs'));
    }

    public function onlinecontactthree()
    {
        $pricing = callback::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $solutionindustrys = Solutioninsdustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.D365_Pricing.Contact_3', compact('pricing','blogsndss', 'solutionindustrys', 'navbars', 'footersectionone', 'footersolution', 'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs'));
    }
    public function blog()
    {
        $blogs = Post::take(6)->orderByDesc('created_at')->paginate(6);
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        $mainblog = Mainblog::all();
        $navbars = Navbar::all();
        $bacontact = Bcontact::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        return view('Pages.Resources.Blogs', compact('blogs','blogsndss', 'navbars', 'mainblog', 'bacontact', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }

    public function blog_detl()
    {
        $bacontact = Bcontact::all();

        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $mainblog = Mainblog::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        $blog = Post::where('slug', '=', $request->slug)->first();

        return view('blog_detail', compact('mainblog','blogsndss','blog', 'bacontact', 'solutionindustrys', 'footersectionone', 'footersolution'));
    }

    public function privacypolicy()
    {
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $solutionindustrys = Solutioninsdustry::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $policy = Whychoose::all();
        $solutionindustrys = Solutioninsdustry::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        // $blog = Post::where('slug', '=', $request->slug)->first();
        return view('Pages.privacy', compact('policy','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution', 'topheader', 'navs', 'navbars'));
    }

    // public function blogs(Request $request)
    // {
    //     $bacontact = Bcontact::all();
    //     $footersectionone = Footersectionone::all();
    //     $footersolution = Footersolution::all();
    //     $solutionindustrys = Solutioninsdustry::all();
    //     $navs = Navlogo::all();
    //     $navbars = Navbar::all();

    //     $mainblog = Mainblog::all();
    //     $blogss = Post::take(4)->orderByDesc('created_at')->get();

    //     if (request('search')) {
    //         $blogs = Post::where('title', 'like', '%'.request('search').'%')->paginate();
    //     } else {
    //         $blogs = Post::take(5)->orderByDesc('created_at')->paginate(5);
    //     }

    //     return view('Pages.Resources.Blogs', compact('bacontact', 'solutionindustrys', 'footersectionone', 'footersolution', 'navs', 'navbars', 'blogs', 'mainblog', 'blogss'));
    // }

    public function careerJobs()
    {
        $solutionindustrys = Solutioninsdustry::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $blogs = Industriespage::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('careers.career_jobs', compact('navbars', 'blogs','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution', 'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs'));
    }

    public function careerFormfinance()
    {
        $solutionindustrys = Solutioninsdustry::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('careers.career_form_finance', compact('navbars','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution', 'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs'));
    }

    public function careerFormbusiness()
    {
        $solutionindustrys = Solutioninsdustry::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('careers.career_form_business', compact('navbars','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution', 'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs'));
    }

    public function careerFormc()
    {
        $solutionindustrys = Solutioninsdustry::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('careers.career_form_c', compact('navbars','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution', 'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs'));
    }

    public function careerForm(Request $request)
    {
        $solutionindustrys = Solutioninsdustry::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        $blog = Whychoose::where('slug', '=', $request->slug)->first();
        $featuredjob = featuredjob::all();
        //   dd($blogs);
        if ($blog) {
            return view('careers.career_form', compact('featuredjob','blogsndss', 'navbars', 'blog', 'solutionindustrys', 'footersectionone', 'footersolution', 'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs'));
        } else {
            abort(404);
        }
    }

   
     public function thank(Request $request)
    {
        $backgetquote = Backgetquote::all();
        $solutionindustrys = Solutioninsdustry::all();
        $footersectionone = Footersectionone::all();
        $footersolution = Footersolution::all();
        $footerservice = Footerservice::all();
        $footerindustry = Footerindustry::all();
        $footercontact = Footercontact::all();
        $topheader = Topheader::all();
        $navs = Navlogo::all();
        $navbars = Navbar::all();
        $blogsndss = Post::take(3)->orderByDesc('created_at')->get();
        return view('Pages.thank', compact( 'backgetquote','blogsndss', 'solutionindustrys', 'footersectionone', 'footersolution', 'footerservice', 'footerindustry', 'footercontact', 'topheader', 'navs', 'navbars'));
    }
}
