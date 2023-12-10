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
use App\Models\Trainingman;
use App\Models\Handbook;
use App\Models\Book;
use App\Models\Bookchapter;
use App\Models\Press;
use App\Models\Other;
use App\Models\Announcement;
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
        $data['announcementCount'] = Announcement::count();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        return view('frontend.index',$data);
    }

    public function announcement(){
        $data['general'] = General::orderBy('id','desc')->first();
      //  $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['announcement'] = Announcement::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.announcement',$data);
    }

    public function single_announcement($id){
        $data['general'] = General::orderBy('id','desc')->first();
      //  $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['announcement'] = Announcement::where('id',$id)->first();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.single_announcement',$data);
    }


    public function about()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['announcementCount'] = Announcement::count();
        $data['about'] = About::orderBy('id','desc')->first();
        return view('frontend.about',$data);
    }

    public function team()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['announcementCount'] = Announcement::count();
        $data['team'] = Team::orderBy('id','desc')->get();
        return view('frontend.team',$data);
    }

    public function team_member()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['team'] = Team::where('type','Team Member')->orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.team_member',$data);
    }

    public function executive_member()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['team'] = Team::where('type','Executive Member')->orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.executive_member',$data);
    }

    public function partner()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['funding'] = Partner::where('type','Funding Organizations')->orderBy('id','desc')->get();
        $data['affiliate'] = Partner::where('type','Affiliate Organizations')->orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.partner',$data);
    }

    public function projects()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['activity'] = Activity::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.project',$data);
    }

    public function event()
    {
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['event'] = Event::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.event',$data);
    }

    /*event*/
    public function workshop()
    {
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['event'] = Event::where('type', 'Workshop')->orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.workshop',$data);
    }

    public function seminar()
    {
        $data['general'] = General::orderBy('id','desc')->first();
        $data['announcementCount'] = Announcement::count();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['event'] = Event::where('type', 'Seminar')->orderBy('id','desc')->get();
        return view('frontend.seminar',$data);
    }

    public function trainings()
    {
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['event'] = Event::where('type', 'Training')->orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.trainings',$data);
    }

    public function conference()
    {
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['event'] = Event::where('type', 'Conference')->orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.conference',$data);
    }

    public function others()
    {
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['event'] = Event::where('type', 'Others')->orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.others',$data);
    }
    /*event*/

    public function policy()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['policy'] = Policy::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.policy',$data);
    }

    public function training()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['training'] = Training::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.training',$data);
    }

    public function publication()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['publication'] = Publication::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.publication',$data);
    }

    public function report()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['report'] = Report::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.report',$data);
    }

    public function article()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['article'] = Article::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.article',$data);
    }

    public function trainingman()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['trainingman'] = Trainingman::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.trainingman',$data);
    }

    public function handbook()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['handbook'] = Handbook::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.handbook',$data);
    }

    public function book()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['book'] = Book::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.book',$data);
    }

    public function bookchapter()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['bookchapter'] = Bookchapter::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.bookchapter',$data);
    }

    public function press()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['press'] = Press::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.press',$data);
    }

    public function other()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['other'] = Other::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        return view('frontend.other',$data);
    }

    public function projects_id($id)
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['project'] = Activity::find($id);
        $data['announcementCount'] = Announcement::count();
        return view('frontend.activity_details',$data);
    }


    public function event_id($id)
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['announcementCount'] = Announcement::count();
        $data['event'] = Event::find($id);
        return view('frontend.event_details',$data);
    }

    public function faq()
    {
        # code...
        $data['general'] = General::orderBy('id','desc')->first();
        $data['wedo'] = Wedo::orderBy('id','desc')->get();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['announcementCount'] = Announcement::count();
        $data['faq'] = FAQ::orderBy('id','desc')->get();
        return view('frontend.faq',$data);
    }

    

}
