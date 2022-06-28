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
            'dates' => 'required'
        ]);
        $addfrontpage = Frontpage::create(['title' => $request->title,'fromdate' => $request->dates,'todate' => $request->dates,'timmer' => $request->timmer,'location' => $request->location]);
        return redirect('/frontpage')->with('success', "Application Frontpage Added successfully!");
    }
    public function editfrontpage(Request $request){
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'timmer' => 'required',
            'dates' => 'required'
        ]);
        $apID = DB::select("SELECT MAX(id) AS id FROM frontpages");
        foreach($apID AS $id){
            $apID = $id->id;
        }
        $updatefrontpage = Frontpage::find($apID);
        $updatefrontpage->update(['title' => $request->title,'fromdate' => $request->dates,'todate' => $request->dates,'timmer' => $request->timmer,'location' => $request->location]);
        return redirect('/frontpage')->with('success', "Application Name Updated successfully!");
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
            'picture' => 'required',
            'analyticsname' => 'required'
        ]);
        $analytics = Analytics::create(['analyticsname' => $request->analyticsname,'picture' => $request->picture]);
        return redirect('/analyticssection')->with('success', "Speaker added successfully!");
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
            'picture' => 'required',
            'sponsorsname' => 'required'
        ]);
        $sponsors = Sponsors::create(['sponsorsname' => $request->sponsorsname,'picture' => $request->picture]);
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
            'picture' => 'required',
            'partnersname' => 'required'
        ]);
        $partners = Partners::create(['partnersname' => $request->partnersname,'picture' => $request->picture]);
        return redirect('/partnerssection')->with('success', "Partner added successfully!");
    }
    public function deletepartnerssection($id){
        $deletepartners = Partners::find($id);
        $deletepartners->delete();
        return redirect('/partnerssection')->with('success', "Partner deleted Successfully!");
    }

    public function exhibitorssection(){
        return view('admin.exhibitorssection');
    }
    public function addexhibitorssection(Request $request){
        $request->validate([
            'picture' => 'required',
            'exhibitorsname' => 'required'
        ]);
        $exhibitors = Exhibitors::create(['exhibitorsname' => $request->exhibitorsname,'picture' => $request->picture]);
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
            'fromtotime' => 'required',
            'venue' => 'required'
        ]);
        $apID = DB::select("SELECT MAX(id) AS id FROM schedules");
        $addschedule = Schedule::create(['day' => $request->day,'action' => $request->action,'timefrom' => $request->fromtotime,'timeto' => $request->fromtotime,'venue' => $request->venue,]);
        return redirect('/schedule')->with('success', "Schedule Added successfully!");
    }
    public function deleteschedule($id){
        if($id == "1"){
            $apID = DB::select("SELECT id FROM schedules WHERE day = 'Wednesday'");
            foreach($apID AS $id){
                $apID = $id->id;
            }
            $deleteschedule = Schedule::find($apID);
            $deleteschedule->delete();
        }
        if($id == "2"){
            $apID = DB::select("SELECT id FROM schedules WHERE day = 'Thursday'");
            foreach($apID AS $id){
                $apID = $id->id;
            }
            $deleteschedule = Schedule::find($apID);
            // return $apID;
            $deleteschedule->delete();
        }
        if($id == "3"){
            $apID = DB::select("SELECT id FROM schedules WHERE day = 'Friday'");
            foreach($apID AS $id){
                $apID = $id->id;
            }
            $deleteschedule = Schedule::find($apID);
            $deleteschedule->delete();
        }
        
        return redirect('/schedule')->with('success', "Schedule deleted Successfully!");
    }
}