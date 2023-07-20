<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\BannerAndTitle;
use App\Models\Blog;
use App\Models\Enrollment;
use App\Models\Gallery;
use App\Models\PaymentNumber;
use App\Models\Research;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class WebsiteController extends Controller
{
    public function tech_web_home()
    {
        return view('frontend.home.home',[
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
            'galleries'=>Gallery::where('status',1)->where('add_home',1)->take(6)->get(),
            'banners'=>Banner::get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),
            'testimonial_title'=>BannerAndTitle::where('page','testimonial')->latest()->first(),
            'testimonials'=>Testimonial::where('status',1)->where('add_home',1)->get(),
            'blogs'=>Blog::where('status',1)->where('add_home',1)->get(),
            'footer_blogs'=>Blog::where('status',1)->where('add_home',1)->take(2)->get(),
            'about'=>DB::table('abouts')->latest()->first(),
            'titles'=>BannerAndTitle::get(),
        ]);
    }
    public function tech_web_services_details($id)
    {
        return view('frontend.services.service_details',[
            'service'=>Service::find($id),
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
        ]);
    }

    public function tech_web_all_services()
    {

        return view('frontend.services.all_services',[
            'services'=>Service::where('status',1)->paginate(8),
            'banner'=>BannerAndTitle::where('page','courses')->latest()->first(),

        ]);
    }
//
    public function tech_web_about_page()
    {
        return view('frontend.about.about_page',[
            'about'=>DB::table('abouts')->latest()->first(),
            'testimonials'=>Testimonial::where('status',1)->where('add_home',1)->get(),
            'teams'=>Team::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','instructor')->latest()->first(),

        ]);
    }

    public function tech_web_consultancy_page()
    {
        return view('frontend.consultancy.consultancy_page',[
            'consultancy'=>DB::table('consultancies')->latest()->first(),
        ]);
    }
    public function tech_web_team_page()
    {
        return view('frontend.team.team_page',[
            'teams'=>Team::where('status',1)->paginate(8),
            'banner'=>BannerAndTitle::where('page','instructor')->latest()->first(),
        ]);
    }

    public function tech_web_blogs_page()
    {
        return view('frontend.blogs.blogs_page',[
            'blogs'=>Blog::where('status',1)->paginate(6),
            'banner'=>BannerAndTitle::where('page','blogs')->latest()->first(),
        ]);
    }
    public function tech_web_blogs_details($id)
    {
        return view('frontend.blogs.blogs_details',[
            'blog'=>Blog::find($id),

        ]);
    }

    public function tech_web_research_page()
    {
        return view('frontend.research.research_page',[
            'researches'=>Research::where('status',1)->paginate(6),
            'banner'=>BannerAndTitle::where('page','research')->latest()->first(),
        ]);
    }
    public function tech_web_research_details($id)
    {
        return view('frontend.research.research_details',[
            'research'=>Research::find($id),

        ]);
    }
//
    public function tech_web_contacts()
    {
        return view('frontend.contact.contact',[
            'banner'=>BannerAndTitle::where('page','contacts')->latest()->first(),
        ]);

    }

    public function tech_web_enrollment($id)
    {
        return view('frontend.enrollment.enrollment',[
            'service'=>Service::find($id),
            'numbers'=>PaymentNumber::latest()->first(),
        ]);
    }

    public function tech_web_enrollment_page()
    {
        return view('frontend.enrollment.enrollment_page',[
            'enrollments'=>Enrollment::where('user_id',Auth::user()->id)->with('service','user')->get(),
            'banner'=>BannerAndTitle::where('page','enrollment')->latest()->first(),
        ]);

    }

    public function tech_web_enroll(Request $request)
    {
        Enrollment::save_enrollment($request);
        Alert::toast('Enrollment Request Sent','success');
        return back();
    }

    public function tech_web_gallery()
    {
        return view('frontend.gallery.gallery_page',[
            'galleries'=>Gallery::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),

        ]);
    }

    public function tech_web_manage_enrollment()
    {
        return view('admin.enrollment.manage_enrollment',[
            'enrollments'=>Enrollment::with('service')->get(),

        ]);
    }

    public function tech_web_update_enrollment($id)
    {
        $enrollment = Enrollment::find($id);
        if ($enrollment->status == 0){
            $enrollment->status = 1;
        }
        $enrollment->save();
        return back();
    }


}
