<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sad</title>
</head>
<body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="container">
    <div class="row">
        <img src="{{ $message->embed(base_path() .'/public/assets/logo/logo-s.png') }}" />
    </div>
        Xin chào, <b>{{$nguoinhan}}</b>
    <div class="col-md-8">{{$content}}</div>
</div>
<footer>
    <div class="container">
        <div class="row">
        <div class="col-md-8"><p>Cảm ơn quý khách đã góp ý - <b>BQT Vifland</b></p></div>
        </div>
    </div>
</footer>
{{-- end thư hồi âm  --}}

</body>
</html>