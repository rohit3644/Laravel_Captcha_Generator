<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="{{asset('js/html2canvas.js')}}"></script>
    <script src="{{asset('js/captcha.js')}}"></script>
    <script src="{{asset('js/html2image.js')}}"></script>

</head>

<body>
    <div class="container">
        <div class="captcha">
            <s id="captchValue">{{$captcha}}</s>

        </div>
        <form action="/validate" method="post" class="captchaForm">
            <label for="input"> <strong>Enter Captcha:</strong> </label>
            <input type="text" name="captcha" class="captchaInput" class="form-control" required />
            <input type="hidden" id="hiddenCaptcha" name="captchaToken" value="{{$captcha}}">
            @csrf
            <button type="submit" class="btn btn-primary">Validate</button>
            <i class="fa fa-refresh" id="refresh" style="font-size:30px;color:blue;margin-left:10px;cursor:pointer;display: flex;
    align-items: center;"></i>
        </form>
        @if($msg ?? false)
        @if($res === 1)
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 50%; text-align:center; margin:auto">
            <strong>{{$msg}}!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if($res === 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 50%; text-align:center; margin:auto">
            <strong>{{$msg}}!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @endif
    </div>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>