<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
    $title = 'Tanzania Annual ICT Conference';
    $theme = 'Unleashing emerging technologies in the
     digital transformation for job creation and
       socio-economic development';

    $fromdate = '2023-10-16';
    $todate = '2023-10-20';
    $conferenceVenue = 'Julius Nyerere International Convention Centre';
    $fromdate = date_create($fromdate);
    $todate = date_create($todate);
    $presentedFromdate = date_format($fromdate,"d");
    $presentedTodate = date_format($todate,"d");
    $presentedMonthDate = date_format($fromdate,"F");
    $eventYear = date_format($fromdate,"Y"); 
    $aboutConference = 'The Tanzania Annual ICT Conference (TAIC) is the biggest ICT sector event in Tanzania organised annually by the ICT Commission (ICTC). As for the last six conferences, TAIC brings together stakeholders including academia, researchers, development partners, business industry, investors and youth in digital innovation spaces and practitioners in the ICT Industry. The conference aims to call the attention of all stakeholders through discussion and knowledge sharing on matters related to policy, research, innovation and business aspects of the digital economy and ICT sector contribution to Tanzania’s economic growth and global digital presence.
    The 07th Tanzania Annual ICT Conference 2023 (TAIC 2023) will be held at the Julius Nyerere International Conference Centre (JNICC). TAIC 2023 will have pre-conference events of Women and Youth in ICT open to the public and will be held on 16th and 17th October 2023 respectively. The main TAIC 2023 will be held from 18th to 20th October 2023. 
    ';
      $aboutTitle = 'About Conference';
        return view('site.index',compact([
            'title',
            'theme',
            'presentedFromdate',
            'presentedTodate',
            'presentedMonthDate',
            'eventYear',
            'conferenceVenue',
            'aboutConference',
            'aboutTitle',
        ]));
    }
}
