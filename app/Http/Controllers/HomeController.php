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
    $aboutConference = 'The Tanzania Annual ICT Conference (TAIC) is one of the largest international gathering of
      ICT industry players in Tanzania that offers a unique platform for capacity building, policy
      dialogues, business investors networking, professional discussion, experience and knowledge
      sharing on the global ICT issues, business opportunities, knowledge and skills needs to cope
      with the dynamic digital ecosystem. The Conference also serves as a platform for participants to
      discuss enabling environment for ICT growth towards socio-economic development in Tanzania.
      The 5 th TAIC 2019 succeeds two TAICs and two Annual ICT Professionals Conferences
      (AIPC) that the Information and Communication Technologies (ICT) Commission has been
      organizing since 2017 bringing together more than 800 ICT stakeholders from both Government
      and Private Sector, Small Medium Enterprises, Academia, researchers, startups, ICT
      Entrepreneurs and the business industry. organized by the Tanzania ICT Commission.
      The conference discussions focus on a wide range of topics emphasizing on the role of ICT in
      social-economic development and the role of ICT as an important tool for attainment of
      Tanzania Development Vision and Sustainable Development Goals. The conference will be
      featured with exhibitions from various ICT stakeholders showcasing their products, services
      and innovations.';
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
