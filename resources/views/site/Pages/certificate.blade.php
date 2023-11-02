<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>
    <style>
        .main{
            
        }
        .content{
            width: 88%;
            height: 820px;
            padding: 2.4rem;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 1.2rem;
            margin: 20px 40px;
            background-color: #f3f7f3;
        }
        .content-inner {
            margin:1.2rem 4.2rem;
        }
        .upper{
            margin: 1.4rem auto;
        }
        .row{
            display: flex;
            flex-flow: row nowrap;
            gap:.4rem;
            margin: 1.4rem auto;
        }
        .col {
            flex:flex-grow;
        }
        .col .middle{
            text-align: left;
            margin-top: 3rem;
        }
        .heading {
            font-family:Tahoma, sans-serif;
            font-weight: 600;
            font-size: 20px;
            margin: 1px 1px;
            color: #808285;
        }
        .logo img{
            width: 180px;
            height: 180px;
            border-radius: .4rem;
            padding:.3rem;
        }
        .ictc-logo img{
            width: 280px;
            height: 280px;
            border-radius: .4rem;
            padding:.3rem;
        }
        .block{
            margin-top: 2rem;
            background-color: #6b6565;
            padding:.05rem;
            width: .1rem;
            height: 120px;
        }
        .logo-row{
        }
        .ictc-logo{
            position:relative;
            left: 180%;
            bottom: 60px;
        } 
        .signature{
            position:relative;
            left: 200%;
        }
        .content-center {

        }
        .content-center h1 {
            color:#00A3DE;
            line-height: 20pt;
            font-size: 46pt;
            font-family:Tahoma, sans-serif; font-style: normal;
        }
        .normal{
            color: #6D6E71;
            font-family: Tahoma, sans-serif;
            font-size: 14pt;
            margin: 3px 1px;
        }
        .greener{
            color: #39B34E; 
            font-family:Tahoma, sans-serif;
            font-size: 16pt;
            margin: 3px 1px;
            font-weight: 600;
        }        
        .attendeeName{
            color: black;
            font-family: Tahoma, sans-serif;
            font-size: 30pt;
            font-weight: 600;
            margin: 1px 1px;
        }
        .name{
            color: #00A3DE;
            font-family: Tahoma, sans-serif;
            font-size: 16pt;
            margin: 3px 1px;
        }
        .lower-row {
            display:flex;
        } 
        .lower-row .signature{
            margin-top: 2.4rem;
        }
        .lower-row hr {
            padding: .05rem;
            background-color: #3c3d3d;
        }
        .taic-logo img{
            width: 460px;
            height: 200px;
            border-radius: .4rem;
            padding:.3rem;
        }
        
    </style>
</head>
<body>
    <div class="main">
        <div class="content">
            <div class="content-inner">
                <div class="upper">
                    <div class="row">
                        <div class="col">
                            <div class="logo">
                                <img src="{{asset('siteimg/nembo.png')}}" alt="TZ-logo" srcset="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="middle">
                                <p class="heading">UNITED</p>
                                <p class="heading">REPUBLIC OF</p>
                                <p class="heading">TANZANIA</p>
                            </div>
                        </div>
                        <div class="block"></div>
                        <div class="col">
                            <div class="middle">
                                <p class="heading">Ministry of Information,</p>
                                <p class="heading">Communication and Information</p>
                                <p class="heading">Technology</p>
                            </div>
                        </div>
                        <div class="col">                       
                            <div class="logo-row">
                                <div class="ictc-logo">
                                    <img src="{{asset('siteimg/logo.png')}}" alt="ICT-logo" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-center">
                    <h1>CERTIFICATE OF ATTENDANCE</h1>
                    <p class="normal">is awarded to </p>
                    <p class="attendeeName">Tumain Gamba</p>
                    <p class="normal">with 15 Professional Development Hours (PHD) for active participation to the</p>
                    <p class="greener">7th Tanzania Annual ICT Conference 2023 (TAIC-2023)</p>
                    <p class="normal">held at the</p>
                    <p class="greener">Julius Nyerere International Convention Centre,Dar es Salaam</p>
                    <p class="greener">16th -20th October 2023</p>
                </div>
                <div class="lower-row">
                    <div class="col">
                        <div class="taic-logo">
                            <img src="{{asset('siteimg/taic-bg.png')}}" alt="taic-logo">
                        </div>
                    </div>
                    <div class="col">
                        <div class="signature">
                            <div class="sign">
                                <img src="{{asset('siteimg/')}}" alt="signature">                            
                            </div>
                            <hr />
                            <p class="name">Dkt. Nkundwe Moses Mwasaga</p>
                            <p class="normal">Director General</p>
                            <p class="normal">ICT Commission</p>
    
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>