<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>@yield("title")</title>
</head>
<body>
    <div class="wrapper">
        <div class="wrapper__opacity">
        </div>
        <div class="form__wrapper">
            <div class="form__content__left">
                <img src="{{ asset("img/logoSp.png") }}" alt="">
                <div class="form__content__left__title">
                    <h2>@yield("methode")</h2>
                </div>
            </div>
            <div class="form__content__right">
                @yield("form")
            </div>
        </div>
    </div>
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
</body>
</html>