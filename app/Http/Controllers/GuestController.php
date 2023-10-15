<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    public function index(){
        $regions = Region::all();
        $PageTitle = "International Sponsors";
        return view('site.Pages.guestRegistration',
        compact(['regions','PageTitle']));
    }
   
    public function register(Request $request)  {
        $validator = Validator::make($request->all(),[
            'lastName' => ['required','min:3', 'max:255'],
            'firstName' => ['required','min:3', 'max:255'],
            'email' => ['required','email','max:255','unique:guests,email'],
            'phoneNumber' => ['required'],
            'gender' => ['required'],
            'institution' => [''],
            'regionID' => ['required']]);
            // Validation Failure
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }
            $latest = Guest::latest()->first();
            $tokenInit = 'TAIC-00';
            $guestToken = '';
            if( $latest != null ){
                $guestToken = $tokenInit.($latest->id + 1);
            }
            if( $latest == null ){
                $guestToken = $tokenInit.(1);
            }
            $data = $validator->validated();
            $arrayToken = ["guestToken"=>$guestToken];
            $data = array_merge($data,$arrayToken);
            dd($data);
            Guest::create($data);
            return redirect()->route('guestResponse');
    }
    public function guestResponse(){
        $newGuest = Guest::latest()->first();
        $PageTitle = "Welcome to TAIC-2023";
        return view('site.Pages.guestResponse',
        compact(['newGuest','PageTitle']));
    }
    public function guestData(){
        $registeredGuests = Guest::latest()->get();
        $PageTitle = "Participant list TAIC-2023";
        return view('site.Pages.guestTable',
        compact(['registeredGuests','PageTitle']));
    }
}
