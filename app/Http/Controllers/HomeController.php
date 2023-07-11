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
    $location = 'Julius Nyerere International Convention Centre';
    $fromdate = date_create($fromdate);
    $todate = date_create($todate);
    $presentedFromdate = date_format($fromdate,"d");
    $presentedTodate = date_format($todate,"d");
    $presentedMonthDate = date_format($fromdate,"F");
    $eventYear = date_format($fromdate,"Y"); 
        return view('site.index',compact([
            'title',
            'theme',
            'presentedFromdate',
            'presentedTodate',
            'presentedMonthDate',
            'eventYear',
            'location',
        ]));
    }
}
