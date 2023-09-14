<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAIC Opening</title>
  <link href="{{ asset('sitecss/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="popoverContainer" class="popover-container" style="background-image: url('{{asset('siteimg/bg6.jpg')}}');">
        <div class="popover-card">
            <img src="{{asset('siteimg/icons/taic-logo.jpg')}}" alt="Waiting">
            <p style="color: rgb(15, 46, 7);">Registration  will commence on
                 <span style="color:rgb(16, 66, 68);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                    September 16<sup>th</sup>, 2023</span></p>
            <a href="{{route('landing')}}" id="closePopoverBtn">Go back</a>
        </div>
    </div>

    <script src="{{ asset('sitejs/main.js') }}"></script>
</body>
</html>