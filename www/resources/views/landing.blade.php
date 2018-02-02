<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>UnicornGO</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Load Open Sans font from Google Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Stylesheet assets -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <!-- /Stylesheet assets -->

    <!-- Template stylesheet -->
    <link href="{{ asset('css/style.css?v=9') }}" rel="stylesheet">
    <!-- /Template stylesheet -->

    <!-- Color scheme stylesheet -->
    <link href="{{ asset('css/colors-colorful-2.css') }}" rel="stylesheet">
    <!-- /Color scheme stylesheet -->
</head>

<body>
<!-- Content -->
<div class="content">
    <!-- Heading -->
    <h1><img src="{{ asset('img/logo_white.png?v=7') }}" alt="UnicornGO"></h1>
    <h2>@lang('strings.h2')</h2>
    <!-- /Heading -->

    <!-- Description -->
    <p>@lang('strings.description')</p>
    <!-- /Description -->
    <br><br>
    <p>
        <small>@lang('strings.from')</small> 26.01.2018 <small>to</small> 2.02.2018 &mdash; 0.0001 Eth @lang('strings.per') Candy<br>
        <small>@lang('strings.from')</small> 02.02.2018  <small>to</small> 12.02.2018 &mdash; 0.0005 Eth @lang('strings.per') Candy<br>
        <small>@lang('strings.from')</small> 12.02.2018 <small>to</small> 22.02.2018 &mdash; 0.001 Eth @lang('strings.per') Candy<br>
        <small>@lang('strings.from')</small> 22.02.2018 <small>to</small> 28.02.2018 &mdash; 0.0015 Eth @lang('strings.per') Candy
    </p>
    <br><br>
    <p><a href="{{ route('register') }}" style="color: #fff; font-size: 24px;">@lang('strings.buy')</a></p>

    <!-- Subscription form -->
    <form class="subscribe-form" id="subscribe-form">
        <input type="text" placeholder="@lang('strings.email')" id="subscribe-email" class="subscribe-email"><input type="submit" value="@lang('strings.subscribe')" id="subscribe-submit" class="subscribe-submit">
    </form>
    <!-- /Subscription form -->

    <!-- Social -->
    <div class="social">
        <a href="https://www.facebook.com/unicorngo2018" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/UnicornGo_2018" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/go_unicorn_go/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://t.me/unicorn_go" target="_blank"><i class="fa fa-telegram"></i></a>
    </div>
    <!-- /Social -->
</div>
<!-- /Content -->

<!-- Countdown -->
<div class="countdown" id="countdown">
    <div>
        <div class="countdown-number days"></div>
        <div class="countdown-text">@lang('strings.days')</div>
    </div><div>
        <div class="countdown-number hours"></div>
        <div class="countdown-text">@lang('strings.hours')</div>
    </div><div>
        <div class="countdown-number minutes"></div>
        <div class="countdown-text">@lang('strings.minutes')</div>
    </div><div>
        <div class="countdown-number seconds"></div>
        <div class="countdown-text">@lang('strings.seconds')</div>
    </div>
</div>
<!-- /Countdown -->

<ul class="lang">

    @if (app()->getLocale() == 'en')
        <li><a  href="{{ route('setlocale','ru') }}">Рус</a></li>
        <li class="active"><a  href="{{ route('setlocale','en') }}">EN</a></li>
    @else
        <li class="active"><a href="{{ route('setlocale','ru') }}">Рус</a></li>
        <li ><a  href="{{ route('setlocale','en') }}">EN</a></li>
    @endif

    <li><a  href="{{ route('login') }}">Login</a></li>
</ul>

<script src="{{ asset('js/modernizr.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="{{ asset('js/jquery.countdown.js') }}"></script>
<script src="{{ asset('js/jquery.placeholder.js') }}"></script>
<script src="{{ asset('js/config.js?v=8') }}"></script>
<script src="{{ asset('js/js.js') }}"></script>
<!-- /Scripts -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47504860 = new Ya.Metrika2({
                    id:47504860,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47504860" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
