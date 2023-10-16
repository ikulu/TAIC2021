<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CustomClasses\Hotel;
use App\CustomClasses\Speaker;
use App\CustomClasses\Tour;

class HomeController extends Controller
{
  public function index()
  {
    $title = 'Tanzania Annual ICT Conference';
    $theme = 'Unleashing emerging technologies in the
     digital transformation for job creation and
       socio-economic development';

    $fromdate = '2023-10-16';
    $todate = '2023-10-20';
    $conferenceVenue = 'Julius Nyerere International Convention Centre';
    $fromdate = date_create($fromdate);
    $todate = date_create($todate);
    $presentedFromdate = date_format($fromdate, "d");
    $presentedTodate = date_format($todate, "d");
    $presentedMonthDate = date_format($fromdate, "F");
    $eventYear = date_format($fromdate, "Y");
    $aboutConference = 'The Tanzania Annual ICT Conference (TAIC) is the biggest ICT sector event in Tanzania organised annually by the ICT Commission (ICTC). As for the last six conferences, TAIC brings together stakeholders including academia, researchers, development partners, business industry, investors and youth in digital innovation spaces and practitioners in the ICT Industry. The conference aims to call the attention of all stakeholders through discussion and knowledge sharing on matters related to policy, research, innovation and business aspects of the digital economy and ICT sector contribution to Tanzania’s economic growth and global digital presence.
    The 07th Tanzania Annual ICT Conference 2023 (TAIC 2023) will be held at the Julius Nyerere International Conference Centre (JNICC). TAIC 2023 will have pre-conference events of Women and Youth in ICT open to the public and will be held on 16th and 17th October 2023 respectively. The main TAIC 2023 will be held from 18th to 20th October 2023. 
    ';
    $aboutTitle = 'About Conference';
    $speakers = array(
      new Speaker('Harish R. Bhatt',
      'CEO-SOFTNET','https://softnet.co.tz/','speaker1.jpg'),
      new Speaker('Harish R. Bhatt',
      'CEO-SOFTNET','https://softnet.co.tz/','speaker1.jpg')
    );
    return view('site.index', compact([
      'title',
      'theme',
      'presentedFromdate',
      'presentedTodate',
      'presentedMonthDate',
      'eventYear',
      'conferenceVenue',
      'aboutConference',
      'aboutTitle',
      'speakers',
    ]));
  }
  public function adminHome()
  {
    return view('admin.admindashboard');
  }

  public function exhibiting()
  {
    $PageTitle = "Exhibitions";

    return view('site.Pages.exhibitors', compact(['PageTitle']));
  }
  public function opening()
  {
    $PageTitle = "Registration Open";

    return view('site.Pages.opening', compact(['PageTitle']));
  }
  public function localsponsorship()
  {
    $PageTitle = "Local Sponsors";
    $sponsporImg = ['img1.png','img2.png','img3.png','img4.png','img5.png','img6.png'];

    return view('site.Pages.localSponsors', compact(['PageTitle','sponsporImg']));
  }
  public function foreignsponsorship()
  {
    $PageTitle = "International Sponsors";
    $sponsporImg = ['img1.png','img2.png','img3.png','img4.png','img5.png','img6.png'];

    return view('site.Pages.foreignSponsors', compact(['PageTitle','sponsporImg']));
  }
  public function hospitality()
  {
    $PageTitle = "Hospitality";

    $hotels = array(
      new Hotel(
        'DAR ES SALAAM SERENA HOTEL',
        'daressalaam@serenahotels.com',
        5,
        181,
        751,
        'https://www.serenahotels.com/dar-es-salaam',
        600,
        'Town Hotel',
        "(+255) 222 212 500",
        '(+255) 677 023 236',
        '6.jpg'
      ),
      new Hotel(
        'HYATT REGENCY (THE KILIMANJARO HOTEL)',
        'brenda.mihanjo@hyatt.com',
        5,
        301,
        801,
        'http://hyattregencydaressalaam.com',
        750,
        'Town Hotel',
        "(+255) 764 701 234",
        '(+255) 744 774 488',
        '7.jpg'
      ),
      new Hotel(
        'PROTEA COURT YARD HOTEL',
        'info@phcourtyard.com',
        3,
        145,
        290,
        'https://proteahotelbymarriottdaressalaamcourtyard.com-tanzania.com/en/',
        2.5,
        'Town Hotel',
        "(+255) 754 565 226",
        '(+255) 222 130 130',
        '17.jpg'
      ),
      new Hotel(
        'ELEMENT BY WESTIN HOTEL',
        'zena.sapi@marriott.com',
        '',
        165,
        205,
        'https://www.marriott.com/en-us/hotels/darel-element-dar-es-salaam/overview/?scid=45f93f1b-bd77-45c9-8dab-83b6a417f6fe&y_source=1_MjM5MTc2NzEtNDgzLWxvY2F0aW9uLndlYnNpdGU%3D',
        '',
        'Town Hotel',
        "(+255) 677 023 236",
        '(+255) 779 000 020',
        '1.jpg'
      ),
      new Hotel(
        'GOLDEN TULIP CITY CENTER HOTEL',
        'inquiries@goldentulidarcitycentre.com',
        4,
        96,
        "",
        'https://dar-city-center.goldentulip.com/en-us/',
        1.1,
        'Town Hotel',
        "(+255) 222 129 351",
        '(+255) 774 723 737',
        '9.jpg'
      ),
      new Hotel(
        'JOHARI ROTANA HOTEL',
        'N/A',
        '',
        155 ,
        735,
        'https://www.rotana.com/rotanahotelandresorts/tanzania/daressalaam/joharirotana',
        1.1 ,
        'Town Hotel',
        "(+255) 677 023 236",
        '(+255) 659 070 800',
        '10.jpg'
      ),
      new Hotel(
        'FOUR POINTS BY SHERATON NEW AFRICA HOTEL',
        'N/A',
        '',
        155 ,
        225,
        'https://www.marriott.com/hotels/travel/darfp-four-points-dar-es-salaam-new-africa',
        0.7,
        'Town Hotel',
        "(+255) 222 117 050",
        '(+255) 677 023 236',
        '10.jpg'
      ),
      new Hotel(
        'SEA CLIF HOTEL',
        'N/A',
        '',
        185 ,
        360,
        'https://www.rotana.com/rotanahotelandresorts/tanzania/daressalaam/joharirotana',
        1.1 ,
        'Town Hotel',
        "(+255) 764 700 600",
        '(+255) 764 700 600',
        '10.jpg'
      ),
    );
    return view('site.Pages.hospitality', compact(['PageTitle', 'hotels']));
  }
  public function tours()
  {
    $PageTitle = "Tours";

    $tours = array(
      new Tour(
        'Serengeti National Park',
        'serengeti.jpg',
        'Visit Now'
      ),
      new Tour(
        'Ngorongoro Crater',
        'ngorongoro.jpg',
        'Visit Now'
      ),
      new Tour(
        'Mikumi National Park',
        'mikumi.jpg',
        'Visit Now'
      ),
      
      new Tour(
        'Udzungwa National Park',
        'udzungwa.jpg',
        'Visit Now'
      ),
      
      new Tour(
        'Mafia National Park',
        'mafia.jpg',
        'Visit Now'
      ),
      new Tour(
        'Saanane Island National Park',
        'saanane.jpg',
        'Visit Now'
      ),
      new Tour(
        'Rubondo Island National Park',
        'rubondo.jpg',
        'Visit Now'
      ),
      new Tour(
        'Mahale Mountains National Park',
        'mahale.jpg',
        'Visit Now'
      ),
      new Tour(
        'Katavi National Park',
        'katavi.jpg',
        'Visit Now'
      ),
      new Tour(
        'Gombe National Park',
        'gombe.jpg',
        'Visit Now'
      ),
      new Tour(
        'Ruaha National Park',
        'ruaha.jpg',
        'Visit Now'
      ),
      new Tour(
        'Saadani National Park',
        'saadani.jpg',
        'Visit Now'
      ),
    );
    return view('site.Pages.tours', compact(['PageTitle','tours']));
  }
  public function appPrivacyPolicy(){
    $updateDate = '19 September 2023';
    return view('site.Pages.taic_app_policy',compact(['updateDate']));
  }
  public function timetable(){
    $PageTitle = 'Womens In ICT';
    return view('site.Pages.timetable',compact(['PageTitle']));
  }
  
}
