<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\Mission;
use App\Models\Vision;
use App\Models\Whatwedo;
use App\Models\Event;
use App\Models\Activity;
use App\Models\About;
use App\Models\Team;
use App\Models\Policy;
use App\Models\Training;
use App\Models\Publication;
use App\Models\Report;
use App\Models\Article;
use App\Models\Social;
use App\Models\Partner;
use App\Models\Faq;
use App\Models\Wedo;
class FrontendController extends Controller
{
    //
    public function index()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['mission'] = Mission::orderBy('id','desc')->first();
        $data['vision'] = Vision::orderBy('id','desc')->first();
        $data['whatwedo'] = Whatwedo::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['activity'] = Activity::orderBy('id','desc')->take(8)->get();
        $data['event'] = Event::orderBy('id','desc')->skip(1)->take(6)->get();
        $data['eventfirst'] = Event::orderBy('id','desc')->first();
        return view('frontend.index',$data);
    }

    public function about()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['about'] = About::orderBy('id','desc')->first();
        return view('frontend.about',$data);
    }

    public function team()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['team'] = Team::orderBy('id','desc')->get();
        return view('frontend.team',$data);
    }

    public function partner()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['funding'] = Partner::where('type','Funding Organizations')->orderBy('id','desc')->get();
        $data['affiliate'] = Partner::where('type','Affiliate Organizations')->orderBy('id','desc')->get();
        return view('frontend.partner',$data);
    }

    public function projects()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['activity'] = Activity::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        return view('frontend.project',$data);
    }

    public function event()
    {
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['event'] = Event::orderBy('id','desc')->get();
        return view('frontend.event',$data);
    }

    public function policy()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['policy'] = Policy::orderBy('id','desc')->get();
        return view('frontend.policy',$data);
    }

    public function training()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['training'] = Training::orderBy('id','desc')->get();
        return view('frontend.training',$data);
    }

    public function publication()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['publication'] = Publication::orderBy('id','desc')->get();
        return view('frontend.publication',$data);
    }

    public function report()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['report'] = Report::orderBy('id','desc')->get();
        return view('frontend.report',$data);
    }

    public function article()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['article'] = Article::orderBy('id','desc')->get();
        return view('frontend.article',$data);
    }


    public function projects_id($id)
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['project'] = Activity::find($id);
        return view('frontend.activity_details',$data);
    }


    public function event_id($id)
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['event'] = Event::find($id);
        return view('frontend.event_details',$data);
    }

    public function faq()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['faq'] = FAQ::orderBy('id','desc')->get();
        return view('frontend.faq',$data);
    }

}
