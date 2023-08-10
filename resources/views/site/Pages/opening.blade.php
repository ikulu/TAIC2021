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
    <div id="popoverContainer" class="popover-container">
        <div class="popover-card">
            <img src="{{asset('siteimg/icons/waiting.png')}}" alt="Waiting">
            <p style="color: black;">Registration  will be Open <span style="color:rgb(22, 74, 3);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">August 17, 2023</span></p>
            <button id="closePopoverBtn">Close</button>
        </div>
    </div>

    <script src="{{ asset('sitejs/main.js') }}"></script>
</body>
</html>