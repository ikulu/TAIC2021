<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Header;
use App\Models\Frontpage;
use App\Models\About;
use App\Models\Analytics;
use App\Models\Sponsors;
use App\Models\Partners;
use App\Models\Exhibitors;
use App\Models\Gallery;
use App\Models\Mails;
use App\Models\Message;
use App\Models\VenueGallery;
use App\Models\Speakers;
use App\Models\Venue;
use App\Models\Contacts;
use App\Models\Schedule;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function header(){
        return view('admin.header');
    }
    public function addheader(Request $request){
        $request->validate([
            'appname' => 'required',
        ]);
        $apID = DB::select("SELECT MAX(id) AS id FROM headers");
        $addHeader = Header::create(['appname' => $request->appname]);
        return redirect('/header')->with('success', "Application Name Added successfully!");
    }
    public function editheader(Request $request){
        $request->validate([
            'appname' => 'required',
        ]);
        $apID = DB::select("SELECT MAX(id) AS id FROM headers");
        foreach($apID AS $id){
            $apID = $id->id;
        }
        $updateHeader = Header::find($apID);
        $updateHeader->update(['appname' => $request->appname]);
        return redirect('/header')->with('success', "Application Name Updated successfully!");
    }

    public function frontpage(){
        return view('admin.frontpage');
    }
    public function addfrontpage(Request $request){
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'timmer' => 'required',
            'dates1' => 'required',
            'dates2' => 'required'
        ]);
        $addfrontpage = Frontpage::create(['title' => $request->title,'fromdate' => $request->dates1,'todate' => $request->dates2,'timmer' => $request->timmer,'location' => $request->location]);
        return redirect('/frontpage')->with('success', "Application Frontpage Added successfully!");
    }
    public function editfrontpage(Request $request){
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'timmer' => 'required',
            'dates1' => 'required',
            'dates2' => 'required'
        ]);
        $apID = DB::select("SELECT MAX(id) AS id FROM frontpages");
        foreach($apID AS $id){
            $apID = $id->id;
        }
        $updatefrontpage = Frontpage::find($apID);
        $updatefrontpage->update(['title' => $request->title,'fromdate' => $request->dates1,'todate' => $request->dates2,'timmer' => $request->timmer,'location' => $request->location]);
        return redirect('/frontpage')->with('success', "Application Front Page Updated successfully!");
    }

    public function aboutsection(){
        return view('admin.aboutsection');
    }
    public function addaboutsection(Request $request){
        $request->validate([
            'title' => 'required',
            'about' => 'required',
            'where' => 'required',
            'when' => 'required'
        ]);
        $addaboutsection = About::create(['title' => $request->title,'about' => $request->about,'where' => $request->where,'when' => $request->when]);
        return redirect('/aboutsection')->with('success', "Application About Added successfully!");
    }
    public function editaboutsection(Request $request){
        $request->validate([
            'title' => 'required',
            'about' => 'required',
            'where' => 'required',
            'when' => 'required'
        ]);
        $apID = DB::select("SELECT MAX(id) AS id FROM abouts");
        foreach($apID AS $id){
            $apID = $id->id;
        }
        $updateaboutsection = About::find($apID);
        $updateaboutsection->update(['title' => $request->title,'about' => $request->about,'where' => $request->where,'when' => $request->when]);
        return redirect('/aboutsection')->with('success', "Data Updated successfully!");
    }

    public function speakerssection(){
        return view('admin.speakerssection');
    }
    public function editspeakerssection(Request $request){
        $request->validate([
            'fullnameM' => 'required',
            'occupationM' => 'required'
        ]);
        $updateaboutsection = Speakers::find($request->id);
        $updateaboutsection->update(['fullname' => $request->fullnameM,'occupation' => $request->occupationM]);
        return redirect('/speakerssection')->with('success', "Data Updated successfully!");
    }
    public function addspeakerssection(Request $request){
        // $test = $request->file('profile')->guessExtension();
        // $test = $request->file('profile')->getMimeType();
        // $test = $request->file('profile')->getClientOriginalName();
        // dd($test);
        $request->validate([
            'fullname' => 'required',
            'occupation' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'in' => 'required',
            'profile' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newIMGname = time().'_'.$request->name . '.' . $request->profile->extension();
        $request->profile->move(public_path('profiles'),$newIMGname);
        
        $speaker = Speakers::create(['title' => $request->title,'fullname' => $request->fullname,'profile' => $newIMGname,'occupation' => $request->occupation,'facebook' => $request->facebook,'tweeter' => $request->twitter,'instagram' => $request->instagram,'ini' => $request->in]);
        return redirect('/speakerssection')->with('success', "Speaker added successfully!");
    }
    public function deletespeakerssection($id){
        $deletespeaker = Speakers::find($id);
        $deletespeaker->delete();
        return redirect('/speakerssection')->with('success', "Speaker deleted Successfully!");
    }

    public function analyticssection(){
        return view('admin.analyticssection');
    }
    public function addanalyticssection(Request $request){
        $request->validate([
            'picture' => 'required|mimes:jpg,png,jpeg|max:5048',
            'analyticsname' => 'required'
        ]);

        $newIMGname = time().'_'.$request->name . '.' . $request->picture->extension();
        $request->picture->move(public_path('analytics'),$newIMGname);

        $analytics = Analytics::create(['analyticsname' => $request->analyticsname,'picture' => $newIMGname]);
        return redirect('/analyticssection')->with('success', "Analytic added successfully!");
    }
    public function deleteanalyticssection($id){
        $deleteanalytics = Analytics::find($id);
        $deleteanalytics->delete();
        return redirect('/analyticssection')->with('success', "Analytic deleted Successfully!");
    }

    public function sponsorssection(){
        return view('admin.sponsorssection');
    }
    public function addsponsorssection(Request $request){
        $request->validate([
            'picture' => 'required|mimes:jpg,png,jpeg|max:5048',
            'sponsorsname' => 'required'
        ]);

        $newIMGname = time().'_'.$request->name . '.' . $request->picture->extension();
        $request->picture->move(public_path('sponsors'),$newIMGname);

        $sponsors = Sponsors::create(['sponsorsname' => $request->sponsorsname,'picture' => $newIMGname]);
        return redirect('/sponsorssection')->with('success', "Sponsor added successfully!");
    }
    public function deletesponsorssection($id){
        $deletesponsors = Sponsors::find($id);
        $deletesponsors->delete();
        return redirect('/sponsorssection')->with('success', "Sponsor deleted Successfully!");
    }

    public function partnerssection(){
        return view('admin.partnerssection');
    }
    public function addpartnerssection(Request $request){
        $request->validate([
            'picture' => 'required|mimes:jpg,png,jpeg|max:5048',
            'partnersname' => 'required'
        ]);

        $newIMGname = time().'_'.$request->name . '.' . $request->picture->extension();
        $request->picture->move(public_path('partners'),$newIMGname);

        $partners = Partners::create(['partnersname' => $request->partnersname,'picture' => $newIMGname]);
        return redirect('/partnerssection')->with('success', "Partner added successfully!");
    }
    public function deletepartnerssection($id){
        $deletepartners = Partners::find($id);
        $deletepartners->delete();
        return redirect('/partnerssection')->with('success', "Partner deleted Successfully!");
    }

    public function venuegallerysection(){
        return view('admin.venuegallerysection');
    }
    public function addvenuegallerysection(Request $request){
        $request->validate([
            'picture' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newIMGname = time().'_'.$request->name . '.' . $request->picture->extension();
        $request->picture->move(public_path('venuegallery'),$newIMGname);

        $gallery = VenueGallery::create(['picture' => $newIMGname]);
        return redirect('/venuegallerysection')->with('success', "Venue Gallery added successfully!");
    }
    public function deletevenuegallerysection($id){
        $deletegallery = VenueGallery::find($id);
        $deletegallery->delete();
        return redirect('/venuegallerysection')->with('success', "Venue Gallery deleted Successfully!");
    }

    public function gallerysection(){
        return view('admin.gallerysection');
    }
    public function addgallerysection(Request $request){
        $request->validate([
            'picture' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newIMGname = time().'_'.$request->name . '.' . $request->picture->extension();
        $request->picture->move(public_path('gallery'),$newIMGname);

        $gallery = Gallery::create(['picture' => $newIMGname]);
        return redirect('/gallerysection')->with('success', "Gallery added successfully!");
    }
    public function deletegallerysection($id){
        $deletegallery = Gallery::find($id);
        $deletegallery->delete();
        return redirect('/gallerysection')->with('success', "Gallery deleted Successfully!");
    }

    public function exhibitorssection(){
        return view('admin.exhibitorssection');
    }
    public function addexhibitorssection(Request $request){
        $request->validate([
            'picture' => 'required|mimes:jpg,png,jpeg|max:5048',
            'exhibitorsname' => 'required'
        ]);

        $newIMGname = time().'_'.$request->name . '.' . $request->picture->extension();
        $request->picture->move(public_path('exhibitors'),$newIMGname);

        $exhibitors = Exhibitors::create(['exhibitorsname' => $request->exhibitorsname,'picture' => $newIMGname]);
        return redirect('/exhibitorssection')->with('success', "Exhibitor added successfully!");
    }
    public function deleteexhibitorssection($id){
        $deleteexhibitors = Exhibitors::find($id);
        $deleteexhibitors->delete();
        return redirect('/exhibitorssection')->with('success', "Exhibitor deleted Successfully!");
    }

    public function eventvenuesection(){
        return view('admin.eventvenuesection');
    }
    public function addeventvenuesection(Request $request){
        $request->validate([
            'location' => 'required',
            'about' => 'required'
        ]);
        $eventvenuesection = Venue::create(['location' => $request->location,'about' => $request->about]);
        return redirect('/eventvenuesection')->with('success', "Event and Venue added successfully!");
    }
    public function editeventvenue(Request $request){
        $request->validate([
            'location' => 'required',
            'about' => 'required'
        ]);
        $apID = '';
        $apID = DB::select("SELECT MAX(id) AS id FROM venues");
        foreach($apID AS $id){
            $apID = $id->id;
        }
        $updateeventvenue = Venue::find($apID);
        $updateeventvenue->update(['location' => $request->location,'about' => $request->about]);
        return redirect('/eventvenuesection')->with('success', "Event and Venue Updated successfully!");
    }

    public function contactssection(){
        return view('admin.contactssection');
    }
    public function addcontactssection(Request $request){
        $request->validate([
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $contactssection = Contacts::create(['address' => $request->address,'email' => $request->email,'phone' => $request->phone]);
        return redirect('/contactssection')->with('success', "Address, Email and Venue added successfully!");
    }
    public function editcontactssection(Request $request){
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        $apID = '';
        $apID = DB::select("SELECT MAX(id) AS id FROM contacts");
        foreach($apID AS $id){
            $apID = $id->id;
        }
        $updatecontacts = Contacts::find($apID);
        $updatecontacts->update(['address' => $request->address,'email' => $request->email,'phone' => $request->phone]);
        return redirect('/contactssection')->with('success', "Address, Email and Phone Updated successfully!");
    }

    public function schedule(){
        return view('admin.schedule');
    }
    public function addschedule(Request $request){
        $request->validate([
            'day' => 'required',
            'action' => 'required',
            'fromtotime1' => 'required',
            'fromtotime2' => 'required',
            'venue' => 'required'
        ]);
        $apID = DB::select("SELECT MAX(id) AS id FROM schedules");
        $addschedule = Schedule::create(['day' => $request->day,'action' => $request->action,'timefrom' => $request->fromtotime1,'timeto' => $request->fromtotime2,'venue' => $request->venue,]);
        return redirect('/schedule')->with('success', "Schedule Added successfully!");
    }
    public function deleteschedule($id){
        $apID = DB::select("SELECT id FROM schedules WHERE id = '$id'");
        foreach($apID AS $id){
            $apID = $id->id;
        }
        $deleteschedule = Schedule::find($apID);
        $deleteschedule->delete();
        
        return redirect('/schedule')->with('success', "Schedule deleted Successfully!");
    }

    public function mail(){
        return view('admin.mail');
    }
    public function addmail(Request $request){
        $request->validate([
            'email' => 'required'
        ]);
        $addmail = Mails::create(['email' => $request->email]);
        return redirect('/')->with('success', "Email Added successfully!");
    }

    public function messages(){
        return view('admin.messages');
    }
    public function addmessage(Request $request){
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $addmessage = Message::create(['name' => $request->name,'email' => $request->email,'subject' => $request->subject,'message' => $request->message]);
        return redirect('/')->with('success', "Massage Added successfully!");
    }
}