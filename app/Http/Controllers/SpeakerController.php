<?php

namespace App\Http\Controllers;

use App\Models\Speakers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Str;

class SpeakerController extends Controller
{
    protected $destinationPath;

    public function __construct()
    {
        $this->destinationPath = 'uploads/speakersProfiles';
    }
    public function index(){
        $speakers = Speakers::all();
        return view('admin.speakerssection',compact(['speakers']));
    }
    public function add_speaker(Request $request){
        $validator = FacadesValidator::make($request->all(),[
            'titleLabel' => ['required'],
            'fullname' => ['required','min:3', 'max:255'],
            'profile' => [''],
            'occupation' => ['required', 'max:255'],
            'twitter' => [''],
            'showStatus' => [''],
        ]);
        $fileName = $request->file('profile');
        $profileName = str_replace(' ','_',$request['fullname']).'_'.Str::random(12) . '.' . $fileName->getClientOriginalExtension();
        $fileName->move($this->destinationPath, $profileName);
        $data = $validator->validated();
        $submission = [
            "profile" => $profileName,
        ];
        $data = array_merge($data,$submission);
        Speakers::create($data);
        return redirect()->route('speakers.index');
    //    dd($data);
    }
    public function update_showStatus($id){
        $speaker = Speakers::findOrFail($id)->first();
        $speaker->showStatus = 1;
        $speaker->save();
        return redirect()->route('speakers.index');
    }
}
