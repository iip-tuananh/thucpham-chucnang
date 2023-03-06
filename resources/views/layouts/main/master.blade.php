<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ url('' . $setting->favicon) }}">
    <meta name="robots" content="noodp,index,follow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <link rel="canonical" href="{{ \Request::url() }}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ \Request::url() }}" />
    <meta property="og:site_name" content="JicaFood" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:secure_url" content="@yield('image')" />
    <meta property="og:image:width" content="548" />
    <meta property="og:image:height" content="343" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:image" content="@yield('image')" />
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" media="all" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d3f77edfc2.js" crossorigin="anonymous"></script>
    <script type="text/javascript" async="" src="{{ asset('frontend/js/analytics.js') }}"></script>
    {{-- <script>
        ! function(w, d, t) {
            w.TiktokAnalyticsObject = t;
            var ttq = w[t] = w[t] || [];
            ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias",
                "group", "enableCookie", "disableCookie"
            ], ttq.setAndDefer = function(t, e) {
                t[e] = function() {
                    t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                }
            };
            for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
            ttq.instance = function(t) {
                for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
                return e
            }, ttq.load = function(e, n) {
                var i = "https://analytics.tiktok.com/i18n/pixel/events.js";
                ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = i, ttq._t = ttq._t || {}, ttq._t[e] = +new Date,
                    ttq._o = ttq._o || {}, ttq._o[e] = n || {};
                var o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.src = i + "?sdkid=" + e + "&lib=" + t;
                var a = document.getElementsByTagName("script")[0];
                a.parentNode.insertBefore(o, a)
            };
            ttq.load('CDCDA03C77U1JEFR5HPG');
            ttq.page();
        }(window, document, 'ttq');
    </script> --}}
    <link rel='stylesheet' id='popup-maker-site-css' href='{{ asset('frontend/css/autoptimize_single_cb.css') }}'
        type='text/css' media='all' />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/fujkm.css') }}" media="all">
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/jquery-3.5.1.min.js') }}" id="jquery-js">
    </script>
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet"
        id="aHR0cHM6Ly9jcm0uYml6Zmx5LnZuL2JpemZseS1jbGllbnQvc3R5bGUuY3NzP3Zlcj0z" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/aml-widget.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <style type="text/css"
        data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset>div {
            overflow: hidden
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset>div {
            overflow: hidden
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_dialog {
            background: rgba(82, 82, 82, .7);
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_dialog_advanced {
            border-radius: 8px;
            padding: 10px
        }

        .fb_dialog_content {
            background: #fff;
            color: #373737
        }

        .fb_dialog_close_icon {
            background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
            cursor: pointer;
            display: block;
            height: 15px;
            position: absolute;
            right: 18px;
            top: 17px;
            width: 15px
        }

        .fb_dialog_mobile .fb_dialog_close_icon {
            left: 5px;
            right: auto;
            top: 5px
        }

        .fb_dialog_padding {
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: -1
        }

        .fb_dialog_close_icon:hover {
            background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
        }

        .fb_dialog_close_icon:active {
            background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
        }

        .fb_dialog_iframe {
            line-height: 0
        }

        .fb_dialog_content .dialog_title {
            background: #6d84b4;
            border: 1px solid #365899;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            margin: 0
        }

        .fb_dialog_content .dialog_title>span {
            background: url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
            float: left;
            padding: 5px 0 7px 26px
        }

        body.fb_hidden {
            height: 100%;
            left: 0;
            margin: 0;
            overflow: visible;
            position: absolute;
            top: -10000px;
            transform: none;
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading {
            background: url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
            min-height: 100%;
            min-width: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 10001
        }

        .fb_dialog.fb_dialog_mobile.loading.centered {
            background: none;
            height: auto;
            min-height: initial;
            min-width: initial;
            width: auto
        }

        .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
            background: none
        }

        .loading.centered #fb_dialog_loader_close {
            clear: both;
            color: #fff;
            display: block;
            font-size: 18px;
            padding-top: 20px
        }

        #fb-root #fb_dialog_ipad_overlay {
            background: rgba(0, 0, 0, .4);
            bottom: 0;
            left: 0;
            min-height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            z-index: 10000
        }

        #fb-root #fb_dialog_ipad_overlay.hidden {
            display: none
        }

        .fb_dialog.fb_dialog_mobile.loading iframe {
            visibility: hidden
        }

        .fb_dialog_mobile .fb_dialog_iframe {
            position: sticky;
            top: 0
        }

        .fb_dialog_content .dialog_header {
            background: linear-gradient(from(#738aba), to(#2c4987));
            border-bottom: 1px solid;
            border-color: #043b87;
            box-shadow: white 0 1px 1px -1px inset;
            color: #fff;
            font: bold 14px Helvetica, sans-serif;
            text-overflow: ellipsis;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
            vertical-align: middle;
            white-space: nowrap
        }

        .fb_dialog_content .dialog_header table {
            height: 43px;
            width: 100%
        }

        .fb_dialog_content .dialog_header td.header_left {
            font-size: 12px;
            padding-left: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .dialog_header td.header_right {
            font-size: 12px;
            padding-right: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .touchable_button {
            background: linear-gradient(from(#4267B2), to(#2a4887));
            background-clip: padding-box;
            border: 1px solid #29487d;
            border-radius: 3px;
            display: inline-block;
            line-height: 18px;
            margin-top: 3px;
            max-width: 85px;
            padding: 4px 12px;
            position: relative
        }

        .fb_dialog_content .dialog_header .touchable_button input {
            background: none;
            border: none;
            color: #fff;
            font: bold 12px Helvetica, sans-serif;
            margin: 2px -12px;
            padding: 2px 6px 3px 6px;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog_content .dialog_header .header_center {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            text-align: center;
            vertical-align: middle
        }

        .fb_dialog_content .dialog_content {
            background: url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
            border: 1px solid #4a4a4a;
            border-bottom: 0;
            border-top: 0;
            height: 150px
        }

        .fb_dialog_content .dialog_footer {
            background: #f5f6f7;
            border: 1px solid #4a4a4a;
            border-top-color: #ccc;
            height: 40px
        }

        #fb_dialog_loader_close {
            float: left
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
            visibility: hidden
        }

        #fb_dialog_loader_spinner {
            animation: rotateSpinner 1.2s linear infinite;
            background-color: transparent;
            background-image: url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            height: 24px;
            width: 24px
        }

        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .fb_iframe_widget {
            display: inline-block;
            position: relative
        }

        .fb_iframe_widget span {
            display: inline-block;
            position: relative;
            text-align: justify
        }

        .fb_iframe_widget iframe {
            position: absolute
        }

        .fb_iframe_widget_fluid_desktop,
        .fb_iframe_widget_fluid_desktop span,
        .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100%
        }

        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 220px;
            position: relative
        }

        .fb_iframe_widget_lift {
            z-index: 1
        }

        .fb_iframe_widget_fluid {
            display: inline
        }

        .fb_iframe_widget_fluid span {
            width: 100%
        }

        .fb_mpn_mobile_landing_page_slide_out {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_out;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_landing_page_slide_out_from_left {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_out_from_left;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_landing_page_slide_up {
            animation-duration: 500ms;
            animation-name: fb_mpn_landing_page_slide_up;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_in {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_in;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_out {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_out;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_mpn_fade_out;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_from_left {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_from_left;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_from_left {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_from_left;
            transition-timing-function: ease-in
        }

        .fb_invisible_flow {
            display: inherit;
            height: 0;
            overflow-x: hidden;
            width: 0
        }

        @keyframes fb_mpn_landing_page_slide_out {
            0% {
                margin: 0 12px;
                width: 100% - 24px
            }

            60% {
                border-radius: 18px
            }

            100% {
                border-radius: 50%;
                margin: 0 24px;
                width: 60px
            }
        }

        @keyframes fb_mpn_landing_page_slide_out_from_left {
            0% {
                left: 12px;
                width: 100% - 24px
            }

            60% {
                border-radius: 18px
            }

            100% {
                border-radius: 50%;
                left: 12px;
                width: 60px
            }
        }

        @keyframes fb_mpn_landing_page_slide_up {
            0% {
                bottom: 0;
                opacity: 0
            }

            100% {
                bottom: 24px;
                opacity: 1
            }
        }

        @keyframes fb_mpn_bounce_in {
            0% {
                opacity: .5;
                top: 100%
            }

            100% {
                opacity: 1;
                top: 0
            }
        }

        @keyframes fb_mpn_fade_out {
            0% {
                bottom: 30px;
                opacity: 1
            }

            100% {
                bottom: 0;
                opacity: 0
            }
        }

        @keyframes fb_mpn_bounce_out {
            0% {
                opacity: 1;
                top: 0
            }

            100% {
                opacity: .5;
                top: 100%
            }
        }

        @keyframes fb_bounce_in_v2 {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }

            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom right
            }

            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_in_from_left {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom left
            }

            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom left
            }

            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom left
            }
        }

        @keyframes fb_bounce_out_v2 {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }

            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_out_from_left {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom left
            }

            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom left
            }
        }

        @keyframes slideInFromBottom {
            0% {
                opacity: .1;
                transform: translateY(100%)
            }

            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes slideInFromBottomDelay {
            0% {
                opacity: 0;
                transform: translateY(100%)
            }

            97% {
                opacity: 0;
                transform: translateY(100%)
            }

            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }
    </style>
</head>

<body class="mm-wrapper">
    <noscript>
        <iframe height="0" width="0" style="display:none;visibility:hidden"
            data-src="https://www.googletagmanager.com/ns.html?id=GTM-NKD4KDR" class="lazyload"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
        </iframe>
    </noscript>
    <div class="mm-page mm-slideout" id="mm-0">
        <div id="page-wrapper">
            @include('layouts.header.index')
            @yield('content')
            @include('layouts.footer.index')
            <a class="res_none btn-zalo btn-frame" target="_blank" href="https://zalo.me/{{$setting->phone1}}">
                <div class="animated infinite zoomIn kenit-alo-circle"></div>
                <div class="animated infinite pulse kenit-alo-circle-fill"></div>
                <i><img src="{{ url('frontend/images/zl.png') }}" alt="Zalo"></i>
            </a>
            <a class="res_none btn-phone btn-frame" href="tel:{{$setting->phone1}}">
                <div class="animated infinite zoomIn kenit-alo-circle"></div>
                <div class="animated infinite pulse kenit-alo-circle-fill"></div>
                <i><img src="{{ url('frontend/images/hl.png') }}" alt="Hotline"></i>
            </a>
        </div>
    </div>
    <style>
        .btn-tuvan {
            outline: 0 !important;
            bottom: 315px;
            width: 120px;
            height: 50px;
            position: fixed;
            border-radius: 25px;
            left: 10px;
            z-index: 10;
            background-color: #f2ce76;
            bottom: 10px;
            border: none;
        }

        .btn-zalo {
            bottom: 95px;
        }

        .btn-frame {
            display: block;
            width: 50px;
            height: 50px;
            position: fixed;
            right: 20px;
            z-index: 10;
            cursor: pointer;
            bottom: 15px;
        }

        .btn-frame .animated.infinite {
            animation-iteration-count: infinite;
        }

        .btn-frame .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        .btn-frame .zoomIn {
            animation-name: zoomIn;
        }

        .btn-frame .kenit-alo-circle {
            width: 60px;
            height: 60px;
            top: -5px;
            right: -5px;
            position: absolute;
            background-color: transparent;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid rgba(7, 41, 103, 0.8);
            opacity: .1;
            border-color: #FF8C00;
            opacity: .5;
        }

        .btn-frame .pulse {
            animation-name: pulse;
        }

        .btn-frame .kenit-alo-circle-fill {
            width: 70px;
            height: 70px;
            top: -10px;
            right: -10px;
            position: absolute;
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
            background-color: rgba(7, 41, 103, 0.35);
            opacity: .4;
        }

        .btn-frame i img {
            vertical-align: middle;
            width: 70%;
        }

        .btn-phone {
            bottom: 95px;
        }

        .btn-frame i {
            display: flex;
            display: -ms-flex;
            justify-content: center;
            align-items: center;
            -ms-flex-align: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #FF8C00;
            position: relative;
            z-index: 1;
        }
    </style>
    <script>
        (function() {
            var supportsPassive = eventListenerOptionsSupported();
            if (supportsPassive) {
                var addEvent = EventTarget.prototype.addEventListener;
                overwriteAddEvent(addEvent);
            }

            function overwriteAddEvent(superMethod) {
                var defaultOptions = {
                    passive: true,
                    capture: false
                };
                EventTarget.prototype.addEventListener = function(type, listener, options) {
                    var usesListenerOptions = typeof options === 'object';
                    var useCapture = usesListenerOptions ? options.capture : options;
                    options = usesListenerOptions ? options : {};
                    options.passive = options.passive !== undefined ? options.passive : defaultOptions.passive;
                    options.capture = useCapture !== undefined ? useCapture : defaultOptions.capture;
                    superMethod.call(this, type, listener, options);
                };
            }

            function eventListenerOptionsSupported() {
                var supported = false;
                try {
                    var opts = Object.defineProperty({}, 'passive', {
                        get: function() {
                            supported = true;
                        }
                    });
                    window.addEventListener("test", null, opts);
                } catch (e) {}
                return supported;
            }
        })();
    </script> <noscript>
        <style>
            .lazyload {
                display: none;
            }
        </style>
    </noscript>
    <script data-noptimize="1">
        window.lazySizesConfig = window.lazySizesConfig || {};
        window.lazySizesConfig.loadMode = 1;
    </script>
    <script async="" data-noptimize="1" src="{{ asset('frontend/js/lazysizes.min.js') }}"></script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/regenerator-runtime.min.js') }}"
        id="regenerator-runtime-js"></script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/wp-polyfill.min.js') }}" id="wp-polyfill-js">
    </script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/core.min.js') }}" id="jquery-ui-core-js">
    </script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/accordion.min.js') }}"
        id="jquery-ui-accordion-js"></script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/frontend.js') }}"
        id="wp-faq-schema-frontend-js"></script>
    <script type="text/javascript" id="toc-front-js-extra">
        var tocplus = {
            "smooth_scroll": "1",
            "visibility_show": "show",
            "visibility_hide": "hide",
            "width": "100%"
        };
    </script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/front.min.js') }}" id="toc-front-js"></script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/bootstrap.min.js') }}" id="bootstrap-js">
    </script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/mmenu.js') }}" id="mmenu-js"></script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/owl.carousel.min.js') }}" id="owlcarousel-js">
    </script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/wow.min.js') }}" id="wow-js"></script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/main.js') }}" id="main-js"></script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/pum-site-scripts.js') }}"
        id="popup-maker-site-js"></script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/smush-lazy-load.min.js') }}"
        id="smush-lazy-load-js"></script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/wp-embed.min.js') }}" id="wp-embed-js">
    </script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/snippet.min.js') }}" id="statify-js-js">
    </script>
    <div class="mm-wrapper__blocker mm-slideout"><a href="#mm-0"><span class="mm-sronly">Close menu</span></a>
    </div>
    <div
        style="position: absolute; bottom: 0px; left: 0px; width: 1px; height: 1px; overflow: hidden; visibility: hidden;">
        <iframe
            src="https://lg1.logging.admicro.vn/_tracking1.gif?dg=c5f4795c37a1471e7b4845701a990378&amp;fl=-1.-1.&amp;je=0&amp;sr=1366x768&amp;sc=24&amp;hn=nhapkhautrungquoc.vn&amp;cat=&amp;g=0&amp;i=s%3B1672383662495%3B0%3B0%3B1%3B0%3B0%3B1366x635%3B0%3B0%3B73cf6c39c0549a51ad127802b071cb9c%3Bc5f4795c37a1471e7b4845701a990378%3BGA1.2.358714700.1672383580%3B1012%3B0%3B0%3B25%3B61%3B3%3B359%3B395&amp;rdm=0.9212193799963562&amp;p=%2F&amp;r=https%3A%2F%2Fnhapkhautrungquoc.vn%2F&amp;dg=c5f4795c37a1471e7b4845701a990378&amp;ce=1&amp;lc=4&amp;cr=1670337047&amp;ui=4470337047712303873"
            name="admIframeTracking" id="admIframeTracking"
            style="width: 12px; height: 12px; visibility: hidden; position: absolute; left: 0px; bottom: 0px; border: none;"></iframe>
    </div><img referrerpolicy="no-referrer-when-downgrade"
        src="https://contineljs.com/ev_anlz?uid=4470337047712303873&amp;dg=c5f4795c37a1471e7b4845701a990378&amp;lc=4&amp;dmn=nhapkhautrungquoc.vn&amp;ce=1&amp;cr=1670337047&amp;p=%2F&amp;dmi=6098&amp;domainlog=contineljs.com&amp;elbl=crm.bizfly.tracking&amp;eact=bizflytracking&amp;eval=%7B%22_cookies%22%3A%5B%7B%22value%22%3A%224470337047712303873%22%2C%22domain%22%3A%22nhapkhautrungquoc.vn%22%2C%22partner%22%3A%22Admicro%22%7D%2C%7B%22value%22%3A%22b4e0e82e-e510-4f55-bada-61bc7ca19ca6%22%2C%22domain%22%3A%22webpush.bizfly.vn%22%2C%22partner%22%3A%22bizfly.vn%22%7D%5D%7D&amp;ecat=ca9075dd-8b3e-471d-885f-b48fb00f89c6&amp;ecatName"
        style="display: none;">
    <div>
    </div>
    <div id="fb-root"></div>
    @yield('css')
    @yield('js')
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}" />
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" defer="defer" src="{{ asset('frontend/js/swiper.js') }}"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0"
        nonce="aJbstcKj"></script>
    <script>
        $(".fa-angle-down").click(function() {
            $(".fa-angle-down").removeClass("active");
            $(this).toggleClass("active")
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        function windowShow()
        {
            $('.modal-contact').show();
            $('html body').css('overflow', 'hidden');
            setTimeout(windowHide, 20000);
        }
        function windowHide()
        {
            $('.modal-contact').hide();
        }
        setTimeout(windowShow, 2000);
        $(document).ready(function () {
            var modal = $('.modal-contact');
            $('.close-contact').click(function () {
            modal.hide();
            });
            $(window).on('click', function (e) {
            if ($(e.target).is('.modal-contact')) {
                modal.hide();
            }
            });
        });
    </script>
</body>

</html>
