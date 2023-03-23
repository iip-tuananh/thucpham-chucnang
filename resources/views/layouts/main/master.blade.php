<!doctype html>
<html lang="vi-VN">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N4CX6XK');
    </script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" media="print" onload="this.onload=null;this.media='all';" id="ao_optimized_gfonts"
        href="https://fonts.googleapis.com/css?family=Roboto%3Awght%40100%2C300%2C400%2C500%2C700%2C900%26display%3Dswap%7CMontserrat%3Awght%40300%2C400%2C500%2C700%2C900%26display%3Dswap%7CZen+Kaku+Gothic+New%3Awght%40300%2C400%2C500%2C700%2C900%26display%3Dswap&#038;subset=latin%2Clatin-ext&amp;display=swap" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta charset="UTF-8" />
    <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon" />
    {{-- <link rel="apple-touch-icon" href="{{ url('' . $setting->favicon) }}"> --}}
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
    {{-- <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://vlive-international.vn/vi/#organization","name":"V Live International","url":"https://vlive-international.vn/vi/","sameAs":["https://instagram.com/vlivevietnam","https://www.linkedin.com/company/vlive-international-vn/","https://youtube.com/c/vliveinternational","https://www.facebook.com/vlivevietnam","https://twitter.com/vlivevietnam"],"logo":{"@type":"ImageObject","inLanguage":"vi-VN","@id":"https://vlive-international.vn/vi/#/schema/logo/image/","url":"https://vlive-international.vn/wp-content/uploads/2022/07/V-Live-was-formed-with-its-main-products-are-nutritional-powder-for-cells.jpg","contentUrl":"https://vlive-international.vn/wp-content/uploads/2022/07/V-Live-was-formed-with-its-main-products-are-nutritional-powder-for-cells.jpg","width":600,"height":337,"caption":"V Live International"},"image":{"@id":"https://vlive-international.vn/vi/#/schema/logo/image/"}},{"@type":"WebSite","@id":"https://vlive-international.vn/vi/#website","url":"https://vlive-international.vn/vi/","name":"V Live International","description":"Thực phẩm chức năng cho tế bào","publisher":{"@id":"https://vlive-international.vn/vi/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://vlive-international.vn/vi/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"vi-VN"},{"@type":"WebPage","@id":"https://vlive-international.vn/vi/#webpage","url":"https://vlive-international.vn/vi/","name":"V Live International – Thực phẩm chức năng cho tế bào khỏe mạnh","isPartOf":{"@id":"https://vlive-international.vn/vi/#website"},"about":{"@id":"https://vlive-international.vn/vi/#organization"},"datePublished":"2022-06-24T01:46:08+00:00","dateModified":"2022-09-15T04:31:01+00:00","description":"V Live với nguyên liệu an toàn thuần thiên nhiên được chiết suất từ công nghệ Đức tiên tiến, cung cấp cho cơ thể 160 dưỡng chất cần thiết","breadcrumb":{"@id":"https://vlive-international.vn/vi/#breadcrumb"},"inLanguage":"vi-VN","potentialAction":[{"@type":"ReadAction","target":["https://vlive-international.vn/vi/"]}]},{"@type":"BreadcrumbList","@id":"https://vlive-international.vn/vi/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]}]}</script> --}}
    <!-- / Yoast SEO plugin. -->
    {{-- <link href='https://fonts.gstatic.com' crossorigin='anonymous' rel='preconnect' /> --}}
    <link rel='stylesheet' id='wp-block-library-css' href='{{ asset('frontend/css/style.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wc-blocks-vendors-style-css'
        href='{{ asset('frontend/css/autoptimize_single_e372df47bd19e1563b557d7bdb817188.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='{{ asset('frontend/css/autoptimize_single_5bdd1e3d788393b1f2cf734e75f6e122.css') }}' type='text/css'
        media='all' />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    @yield('css')
    <link rel='stylesheet' id='classic-theme-styles-css' href='{{ asset('frontend/css/classic-themes.min.css') }}'
        type='text/css' media='all' />
        @yield('css')
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
     <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
   />
    <link rel='stylesheet' id='affwp-forms-css' href='{{ asset('frontend/css/forms.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='{{ asset('frontend/css/autoptimize_single_e6fae855021a88a0067fcc58121c594f.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='kk-star-ratings-css' href='{{ asset('frontend/css/kk-star-ratings.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='{{ asset('frontend/css/autoptimize_single_1ddf23fcfd1b2941c456ce01da8180a6.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='{{ asset('frontend/css/autoptimize_single_456663a286a204386735fd775542a59e.css') }}' type='text/css'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='{{ asset('frontend/css/autoptimize_single_979b8b56e801469d95453055366ef54c.css') }}' type='text/css'
        media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wpml-legacy-horizontal-list-0-css'
        href='{{ asset('frontend/css/autoptimize_single_53796b73587b4a58b8904d127eaa51f9.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fonts-css'
        href='{{ asset('frontend/css/autoptimize_single_0d51c31f03af10486e8e87117c7f4509.css') }}' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='animate-css'
        href='{{ asset('frontend/css/autoptimize_single_8f4b1ea80afb2e02a79948368e3a1c4e.css') }}' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='bootstrap-css-css' href='{{ asset('frontend/css/bootstrap.min.css') }}'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='owl.carousel-css'
        href='{{ asset('frontend/css/autoptimize_single_52ef507c1dc1e27d74e6db60465598b3.css') }}' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='magnific-popup.css-css'
        href='{{ asset('frontend/css/autoptimize_single_ad910fc01ceb1e494a5cbebf142128be.css') }}' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='fancybox.css-css' href='{{ asset('frontend/css/jquery.fancybox.min.css') }}'
    
        type='text/css' media='screen' />
    <link rel='stylesheet' id='jquery.mmenu.css-css'
        href='{{ asset('frontend/css/autoptimize_single_6b26198f5cb44ee009c62cc12a5ccf6d.css') }}' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='quick-alo-phone-css'
        href='{{ asset('frontend/css/autoptimize_single_19a8fc5a82b0dcccadc9c5ec257d19c1.css') }}' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='bootstrap-spinner-css'
        href='{{ asset('frontend/css/autoptimize_single_a83c6fccf0057bc16ee73858e58297cc.css') }}' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='menu-css-css'
        href='{{ asset('frontend/css/autoptimize_single_b04d3c566834bdc15eca3733675611f5.css') }}' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='style_mmenu.css-css'
        href='{{ asset('frontend/css/autoptimize_single_8ac124d197bf4c87e9359107a176beda.css') }}' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='style_custom.css-css'
        href='{{ asset('frontend/css/autoptimize_single_f02f9a96af4d75b068b945b6db2e134e.css') }}' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='style.css-css'
        href='{{ asset('frontend/css/autoptimize_single_6627b29bd32b3e8ea833de8847088bbd.css') }}' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='k2_kinhdo-theme-css' href='{{ asset('frontend/css/theme.min.css') }}'
        type='text/css' media='all' />
    <script type='text/javascript' src='{{ asset('frontend/js/jquery.min.js') }}' id='jquery-core-js'></script>
    <script type='text/javascript' src='{{ asset('frontend/js/jquery-migrate.min.js') }}' id='jquery-migrate-js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>

    {{-- <script type='text/javascript' id='jquery-cookie-js-extra'>
        /* <![CDATA[ */
        var affwp_scripts = {
            "ajaxurl": "https:\/\/vlive-international.vn\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script> --}}
    <script type='text/javascript' src='{{ asset('frontend/js/jquery.cookie.min.js') }}' id='jquery-cookie-js'></script>
    {{-- <script type='text/javascript' id='affwp-tracking-js-extra'>
        /* <![CDATA[ */
        var affwp_debug_vars = {
            "integrations": {
                "woocommerce": "WooCommerce"
            },
            "version": "2.5.2",
            "currency": "VND"
        };
        /* ]]> */
    </script> --}}
    <script type='text/javascript' src='{{ asset('frontend/js/tracking.min.js') }}' id='affwp-tracking-js'></script>
    {{-- <link rel="https://api.w.org/" href="https://vlive-international.vn/wp-json/" />
    <link rel="alternate" type="application/json" href="https://vlive-international.vn/wp-json/wp/v2/pages/458" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://vlive-international.vn/xmlrpc.php?rsd" />
    <link rel="alternate" type="application/json+oembed"
        href="https://vlive-international.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fvlive-international.vn%2Fvi%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://vlive-international.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fvlive-international.vn%2Fvi%2F&#038;format=xml" />
    <meta name="generator" content="WPML ver:4.3.10 stt:1,57;" /> --}}
    <script type="text/javascript">
        var AFFWP = AFFWP || {};
        AFFWP.referral_var = 'vlive';
        AFFWP.expiration = 7;
        AFFWP.debug = 0;


        AFFWP.referral_credit_last = 0;
    </script>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style type="text/css" id="wp-custom-css">
        .aligncenter {
            display: block;
        }

        .single-product .content_detail a {
            color: #307f2e;
        }
    </style>
    <meta name="google-site-verification" content="4-ACqp_093aD-Y6SahpR9d8Inn_Y3sLMxRZqDtFq_XI" />
</head>

<body
    class="home page-template page-template-page-templates page-template-home page-template-page-templateshome-php page page-id-458 theme-v4 woocommerce-no-js">

    <div id="page" class="site">
       
        <script type="text/javascript" src="{{ asset('frontend/js/element.js') }}"></script>
        @include('layouts.header.index')
        @yield('content')
        <!-- #content -->
        @include('layouts.footer.index')
    </div>
    <!-- #right -->
    <div id="arcontactus"></div>
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <script type='text/javascript' src='{{ asset('frontend/js/regenerator-runtime.min.js') }}' id='regenerator-runtime-js'>
    </script>
    <script type='text/javascript' src='{{ asset('frontend/js/wp-polyfill.min.js') }}' id='wp-polyfill-js'></script>
    {{-- <script type='text/javascript' id='contact-form-7-js-extra'>
         /* <![CDATA[ */
         var wpcf7 = {"api":{"root":"https:\/\/vlive-international.vn\/wp-json\/","namespace":"contact-form-7\/v1"}};
         /* ]]> */
      </script> --}}
    <script type='text/javascript' src='{{ asset('frontend/js/index.js') }}' id='contact-form-7-js'></script>

    <script type='text/javascript' src='{{ asset('frontend/js/kk-star-ratings.min.js') }}' id='kk-star-ratings-js'>
    </script>
    <script type='text/javascript' src='{{ asset('frontend/js/jquery.blockUI.min.js') }}' id='jquery-blockui-js'></script>
    <script type='text/javascript' src='{{ asset('frontend/js/js.cookie.min.js') }}' id='js-cookie-js'></script>
    <!-- <script type='text/javascript' id='woocommerce-js-extra'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/vi\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script> -->
    <script type='text/javascript' src='{{ asset('frontend/js/woocommerce.min.js') }}' id='woocommerce-js'></script>
    <!-- <script type='text/javascript' id='wc-cart-fragments-js-extra'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/vi\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_be48d7dc0766f52a0c2ef2f0d9704147",
            "fragment_name": "wc_fragments_be48d7dc0766f52a0c2ef2f0d9704147",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script> -->
    <script type='text/javascript' src='{{ asset('frontend/js/cart-fragments.min.js') }}' id='wc-cart-fragments-js'>
    </script>
    <script type='text/javascript' src='{{ asset('frontend/js/owl.carousel.min.js') }}' id='owl.carousel-js'></script>
    <script type='text/javascript' src='{{ asset('frontend/js/jquery.magnific-popup.js') }}' id='magnific-js-js'></script>
    <script type='text/javascript' src='{{ asset('frontend/js/jquery.fancybox.min.js') }}' id='fancybox-js-js'></script>
    <script type='text/javascript' src='{{ asset('frontend/js/jquery.mmenu.min.all.js') }}' id='jquery.mmenu-js-js'>
    </script>
    <script type='text/javascript' src='{{ asset('frontend/js/bootstrap.min.js') }}' id='bootstrap-js'></script>
    <script type='text/javascript' src='{{ asset('frontend/js/isotope.pkgd.min.js') }}' id='isotope-js'></script>
    <script type='text/javascript' src='{{ asset('frontend/js/wow.js') }}' id='wow-js'></script>
    @yield('js')
    <script type="text/javascript" 
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
 </script>

 <script>
    var flags = document.getElementsByClassName('flag_link');
    Array.prototype.forEach.call(flags, function(e){
    e.addEventListener('click', function(){
    var lang = e.getAttribute('data-lang'); 
    var languageSelect = document.querySelector("select.goog-te-combo");
    // console.log(document.querySelector("select.goog-te-combo"));
    languageSelect.value = lang; 
    console.log(languageSelect.value);
    languageSelect.dispatchEvent(new Event("change"));
    }); 
    });
 </script>
 <script src="{{asset('frontend/js/notify.min.js')}}"></script>
    <script type='text/javascript' src='{{ asset('frontend/js/main.js') }}' id='k2_kinhdo-main-js'></script>
    <script type="text/javascript">
        var arCuMessages = [
            "Xin ch\u00e0o!",
            "T\u00f4i c\u00f3 th\u1ec3 gi\u00fap g\u00ec cho b\u1ea1n?"
        ];
        var arCuLoop = false;
        var arCuCloseLastMessage = false;
        var arCuPromptClosed = false;
        var _arCuTimeOut = null;
        var arCuDelayFirst = 2000;
        var arCuTypingTime = 2000;
        var arCuMessageTime = 4000;
        var arCuClosedCookie = 0;
        var arcItems = [];
        window.addEventListener("load", function() {
            arCuClosedCookie = arCuGetCookie("arcu-closed");
            jQuery("#arcontactus").on("arcontactus.init", function() {
                if (arCuClosedCookie) {
                    return false;
                }
                arCuShowMessages();
            });
            jQuery("#arcontactus").on("arcontactus.openMenu", function() {
                clearTimeout(_arCuTimeOut);
                arCuPromptClosed = true;
                jQuery("#contact").contactUs("hidePrompt");
                arCuCreateCookie("arcu-closed", 1, 30);
            });
            jQuery("#arcontactus").on("arcontactus.hidePrompt", function() {
                clearTimeout(_arCuTimeOut);
                arCuPromptClosed = true;
                arCuCreateCookie("arcu-closed", 1, 30);
            });

            var arcItem = {};
            arcItem.id = "msg-item-9";
            arcItem.class = "msg-item-telegram-plane";
            arcItem.title = "Zalo Chat";
            arcItem.icon =
                '<svg xmlns="http://www.w3.org/2000/svg" height="200" viewBox="0 0 448 512"><path fill="currentColor" d="m290.68711,440.16509c-31.43262,0 -62.86524,-5.54002 -90.60054,-16.62119c-12.9409,-3.69334 -22.18676,-9.23449 -33.27759,-9.23449c-11.09537,0 -22.18676,7.38953 -31.43205,12.92954c-18.49115,9.2345 -38.8284,12.92614 -61.01516,11.08117c-12.94261,-1.84667 -14.79156,-9.2362 -5.54684,-16.62118c3.69789,-3.69619 11.09253,-7.38953 12.94261,-11.08174c7.39578,-3.69618 11.09367,-11.08287 14.79099,-16.62289c9.24586,-14.77735 12.94148,-25.85795 1.85008,-38.78636c-31.43205,-35.09018 -49.9215,-79.41542 -49.9215,-129.28295c0,-84.95772 59.16508,-158.83482 142.36644,-193.925l-88.74932,0c-53.61711,0 -99.84072,46.17192 -99.84072,101.5806l0,249.33312c0,55.40641 46.22361,101.57947 99.84072,101.57947l245.90959,0c51.78123,0 96.64952,-43.06422 99.66804,-95.91675c-42.503,31.32469 -97.89976,51.58867 -156.98475,51.58867zm88.74649,-160.67922c24.03627,-1.84781 38.82726,-14.77451 40.67791,-42.47914c-3.69789,-27.70349 -16.64163,-40.63247 -40.67791,-44.32581c-25.88465,3.69277 -38.82613,16.62232 -40.67564,44.32581c1.85008,27.70462 14.79099,40.63133 40.67564,42.47914zm0,-64.64204c11.09309,0 16.64163,7.38725 16.64163,22.1629s-5.54854,22.16234 -16.64163,22.16234c-11.09367,0 -16.63936,-7.38669 -18.48888,-22.16234c1.84952,-14.77564 7.39521,-22.1629 18.48888,-22.1629zm-123.87757,64.64204c9.24586,0 16.64107,-3.69334 22.18733,-9.23393c1.85008,5.54059 5.54797,9.23393 11.0931,9.23393c7.39578,0 11.09367,-5.54115 11.09367,-14.77451l0,-55.40812c0,-11.08117 -3.69845,-14.77565 -11.09367,-14.77565c-5.5457,0 -9.24302,3.69448 -11.0931,9.23506c-3.69789,-7.38839 -11.09367,-11.08117 -22.18733,-11.08117c-22.18676,3.69278 -35.12766,18.46899 -36.97775,44.32581c1.85065,27.70406 14.79155,40.63076 36.97775,42.47857zm3.69846,-64.64204c11.09253,0 16.64107,7.38725 18.48888,22.1629c-1.84781,14.77565 -7.39635,22.16234 -18.48888,22.16234c-11.09367,0 -16.64163,-7.38669 -18.49001,-22.16234c1.84838,-14.77564 7.39635,-22.1629 18.49001,-22.1629zm61.01459,64.64204c7.39521,0 11.09367,-3.69334 11.09367,-12.92898l0,-96.03831c0,-7.38839 -3.69902,-12.92898 -11.09367,-12.92898c-7.39635,0 -11.09309,5.54059 -11.09309,12.92898l0,96.03831c0,9.23564 3.69732,12.92898 11.09309,12.92898zm-190.43785,-101.58003c1.84781,5.54059 3.69562,9.2345 11.09083,9.2345l40.67791,0l-49.9215,72.02873c-1.84781,1.84667 -1.84781,5.54229 -1.84781,9.23506c0,5.54002 3.69562,9.23336 12.9409,11.08117l61.01516,0c7.39521,-1.84781 11.09253,-5.54115 11.09253,-11.08117c0,-7.38839 -3.69732,-9.23506 -11.09253,-11.08116l-44.37296,-0.00001l48.07142,-68.33595c3.69789,-3.69448 3.69789,-7.38726 3.69789,-11.08117c0,-7.38725 -3.69789,-11.08174 -12.94318,-11.08174l-57.31784,0c-7.39521,0 -9.24301,3.69448 -11.09082,11.08174z"></path></svg>';
            arcItem.href = "https://zalo.me/986.929.777";
            arcItem.color = "#0180C7";
            arcItems.push(arcItem);

            var arcItem = {};
            arcItem.id = "msg-item-7";
            arcItem.class = "msg-item-envelope";
            arcItem.title = "Gửi Email";
            arcItem.icon =
                '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>';
            arcItem.href =
                "https://mail.google.com/mail/u/0/#inbox?compose=DmwnWrRqhkcvrPDhJPxLjztrtRmSRxVGnQwgcNkbSqDQPXvHGgmZLWNGGSDzdQCrFzxrFPJpkcdb";
            arcItem.color = "#FF643A";
            arcItems.push(arcItem);
            var arcItem = {};
            arcItem.id = "msg-item-8";
            arcItem.class = "msg-item-phone";
            arcItem.title = "Call 0839 69 88 69";
            arcItem.icon =
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
            arcItem.href = "tel:986.929.777";
            arcItem.color = "#d00";
            arcItems.push(arcItem);
            jQuery("#arcontactus").contactUs({
                items: arcItems
            });
        });

        function arCuGetCookie(t) {
            return document.cookie.length > 0 &&
                ((c_start = document.cookie.indexOf(t + "=")), -1 != c_start) ?
                ((c_start = c_start + t.length + 1),
                    (c_end = document.cookie.indexOf(";", c_start)),
                    -1 == c_end && (c_end = document.cookie.length),
                    unescape(document.cookie.substring(c_start, c_end))) :
                0;
        }

        function arCuCreateCookie(t, e, s) {
            var n;
            if (s) {
                var i = new Date();
                i.setTime(i.getTime() + 24 * s * 60 * 60 * 1e3),
                    (n = "; expires=" + i.toGMTString());
            } else n = "";
            document.cookie = t + "=" + e + n + "; path=/";
        }

        function arCuShowMessage(t) {
            if (arCuPromptClosed) return !1;
            void 0 !== arCuMessages[t] ?
                (jQuery("#arcontactus").contactUs("showPromptTyping"),
                    (_arCuTimeOut = setTimeout(function() {
                        if (arCuPromptClosed) return !1;
                        jQuery("#arcontactus").contactUs("showPrompt", {
                                content: arCuMessages[t]
                            }),
                            t++,
                            (_arCuTimeOut = setTimeout(function() {
                                if (arCuPromptClosed) return !1;
                                arCuShowMessage(t);
                            }, arCuMessageTime));
                    }, arCuTypingTime))) :
                (arCuCloseLastMessage && jQuery("#arcontactus").contactUs("hidePrompt"),
                    arCuLoop && arCuShowMessage(0));
        }

        function arCuShowMessages() {
            setTimeout(function() {
                clearTimeout(_arCuTimeOut), arCuShowMessage(0);
            }, arCuDelayFirst);
        }!(function(t) {
            function e(s, n) {
                (this._initialized = !1),
                (this.settings = null),
                (this.options = t.extend({}, e.Defaults, n)),
                (this.$element = t(s)),
                this.init(),
                    (this.x = 0),
                    (this.y = 0),
                    this._interval,
                    (this._menuOpened = !1),
                    (this._callbackOpened = !1),
                    (this.countdown = null);
            }
            (e.Defaults = {
                align: "right",
                countdown: 0,
                drag: !1,
                buttonText: "Liên hệ",
                buttonSize: "large",
                menuSize: "normal",
                items: [],
                iconsAnimationSpeed: 1200,
                theme: "#900",
                buttonIcon: '<svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="#FFFFFF"/></g></g><defs><path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"/></defs></svg>',
                closeIcon: '<svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-4087 108)"><g id="Vector"><use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use></g></g><defs><path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path></defs></svg>'
            }),
            (e.prototype.init = function() {
                this.destroy(),
                    (this.settings = t.extend({}, this.options)),
                    this.$element
                    .addClass("arcontactus-widget")
                    .addClass("arcontactus-message"),
                    "left" === this.settings.align ?
                    this.$element.addClass("left") :
                    this.$element.addClass("right"),
                    this.settings.items.length ?
                    (this._initCallbackBlock(),
                        this._initMessengersBlock(),
                        this._initMessageButton(),
                        this._initPrompt(),
                        this._initEvents(),
                        this.startAnimation(),
                        this.$element.addClass("active")) :
                    console.info("jquery.contactus:no items"),
                    (this._initialized = !0),
                    this.$element.trigger("arcontactus.init");
            }),
            (e.prototype.destroy = function() {
                if (!this._initialized) return !1;
                this.$element.html(""),
                    (this._initialized = !1),
                    this.$element.trigger("arcontactus.destroy");
            }),
            (e.prototype._initCallbackBlock = function() {}),
            (e.prototype._initMessengersBlock = function() {
                var e = t("<div>", {
                    class: "messangers-block"
                });
                ("normal" !== this.settings.menuSize &&
                    "large" !== this.settings.menuSize) ||
                e.addClass("lg"),
                    "small" === this.settings.menuSize && e.addClass("sm"),
                    this._appendMessengerIcons(e),
                    this.$element.append(e);
            }),
            (e.prototype._appendMessengerIcons = function(e) {
                t.each(this.settings.items, function(s) {
                    if ("callback" == this.href)
                        var n = t("<div>", {
                            class: "messanger call-back " + (this.class ? this.class : "")
                        });
                    else if (
                        ((n = t("<a>", {
                                class: "messanger " + (this.class ? this.class : ""),
                                id: this.id ? this.id : null,
                                href: this.href,
                                target: this.target ? this.target : "_blank"
                            })),
                            this.onClick)
                    ) {
                        var i = this;
                        n.on("click", function(t) {
                            i.onClick(t);
                        });
                    }
                    var a = t("<span>", {
                        style: this.color ? "background-color:" + this.color : null
                    });
                    a.append(this.icon),
                        n.append(a),
                        n.append("<p>" + this.title + "</p>"),
                        e.append(n);
                });
            }),
            (e.prototype._initMessageButton = function() {
                var e = this,
                    s = t("<div>", {
                        class: "arcontactus-message-button",
                        style: this._backgroundStyle()
                    });
                "large" === this.settings.buttonSize && this.$element.addClass("lg"),
                    "medium" === this.settings.buttonSize && this.$element.addClass("md"),
                    "small" === this.settings.buttonSize && this.$element.addClass("sm");
                var n = t("<div>", {
                    class: "static"
                });
                n.append(this.settings.buttonIcon),
                    !1 !== this.settings.buttonText ?
                    n.append("<p>" + this.settings.buttonText + "</p>") :
                    s.addClass("no-text");
                var i = t("<div>", {
                    class: "callback-state",
                    style: e._colorStyle()
                });
                i.append(this.settings.callbackStateIcon);
                var a = t("<div>", {
                        class: "icons hide"
                    }),
                    o = t("<div>", {
                        class: "icons-line"
                    });
                t.each(this.settings.items, function(s) {
                        var n = t("<span>", {
                            style: e._colorStyle()
                        });
                        n.append(this.icon), o.append(n);
                    }),
                    a.append(o);
                var r = t("<div>", {
                    class: "arcontactus-close"
                });
                r.append(this.settings.closeIcon);
                var c = t("<div>", {
                        class: "pulsation",
                        style: e._backgroundStyle()
                    }),
                    l = t("<div>", {
                        class: "pulsation",
                        style: e._backgroundStyle()
                    });
                s.append(n).append(i).append(a).append(r).append(c).append(l),
                    this.$element.append(s);
            }),
            (e.prototype._initPrompt = function() {
                var e = t("<div>", {
                        class: "arcontactus-prompt"
                    }),
                    s = t("<div>", {
                        class: "arcontactus-prompt-close",
                        style: this._colorStyle()
                    });
                s.append(this.settings.closeIcon);
                var n = t("<div>", {
                    class: "arcontactus-prompt-inner"
                });
                e.append(s).append(n), this.$element.append(e);
            }),
            (e.prototype._initEvents = function() {
                var e = this.$element,
                    s = this;
                e
                    .find(".arcontactus-message-button")
                    .on("mousedown", function(t) {
                        (s.x = t.pageX), (s.y = t.pageY);
                    })
                    .on("mouseup", function(t) {
                        t.pageX === s.x &&
                            t.pageY === s.y &&
                            (s.toggleMenu(), t.preventDefault());
                    }),
                    this.settings.drag &&
                    (e.draggable(),
                        e.get(0).addEventListener(
                            "touchmove",
                            function(t) {
                                var s = t.targetTouches[0];
                                (e.get(0).style.left = s.pageX - 25 + "px"),
                                (e.get(0).style.top = s.pageY - 25 + "px"),
                                t.preventDefault();
                            },
                            !1
                        )),
                    t(document).on("click", function(t) {
                        s.closeMenu();
                    }),
                    e.on("click", function(t) {
                        t.stopPropagation();
                    }),
                    e.find(".call-back").on("click", function() {
                        s.openCallbackPopup();
                    }),
                    e.find(".callback-countdown-block-close").on("click", function() {
                        null != s.countdown &&
                            (clearInterval(s.countdown), (s.countdown = null)),
                            s.closeCallbackPopup();
                    }),
                    e.find(".arcontactus-prompt-close").on("click", function() {
                        s.hidePrompt();
                    });
            }),
            (e.prototype.show = function() {
                this.$element.addClass("active"),
                    this.$element.trigger("arcontactus.show");
            }),
            (e.prototype.hide = function() {
                this.$element.removeClass("active"),
                    this.$element.trigger("arcontactus.hide");
            }),
            (e.prototype.openMenu = function() {
                var t = this.$element;
                t.find(".messangers-block").hasClass("show-messageners-block") ||
                    (this.stopAnimation(),
                        t
                        .find(".messangers-block, .arcontactus-close")
                        .addClass("show-messageners-block"),
                        t.find(".icons, .static").addClass("hide"),
                        t.find(".pulsation").addClass("stop"),
                        (this._menuOpened = !0),
                        this.$element.trigger("arcontactus.openMenu"));
            }),
            (e.prototype.closeMenu = function() {
                var t = this.$element;
                t.find(".messangers-block").hasClass("show-messageners-block") &&
                    (t
                        .find(".messangers-block, .arcontactus-close")
                        .removeClass("show-messageners-block"),
                        t.find(".icons, .static").removeClass("hide"),
                        t.find(".pulsation").removeClass("stop"),
                        this.startAnimation(),
                        (this._menuOpened = !1),
                        this.$element.trigger("arcontactus.closeMenu"));
            }),
            (e.prototype.toggleMenu = function() {
                var t = this.$element;
                if (
                    (this.hidePrompt(),
                        t.find(".callback-countdown-block").hasClass("display-flex"))
                )
                    return !1;
                t.find(".messangers-block").hasClass("show-messageners-block") ?
                    this.closeMenu() :
                    this.openMenu(),
                    this.$element.trigger("arcontactus.toggleMenu");
            }),
            (e.prototype.openCallbackPopup = function() {
                var t = this.$element;
                t.addClass("opened"),
                    this.closeMenu(),
                    this.stopAnimation(),
                    t.find(".icons, .static").addClass("hide"),
                    t.find(".pulsation").addClass("stop"),
                    t.find(".callback-countdown-block").addClass("display-flex"),
                    (this._callbackOpened = !0),
                    this.$element.trigger("arcontactus.openCallbackPopup");
            }),
            (e.prototype.closeCallbackPopup = function() {
                var t = this.$element;
                t.removeClass("opened"),
                    t.find(".messangers-block").removeClass("show-messageners-block"),
                    t.find(".arcontactus-close").removeClass("show-messageners-block"),
                    t.find(".icons, .static").removeClass("hide"),
                    this.startAnimation(),
                    (this._callbackOpened = !1),
                    this.$element.trigger("arcontactus.closeCallbackPopup");
            }),
            (e.prototype.startAnimation = function() {
                var t = this.$element,
                    e = t.find(".icons-line"),
                    s = t.find(".static"),
                    n = t.find(".icons-line>span:first-child").width() + 40;
                if ("large" === this.settings.buttonSize)
                    var i = 2,
                        a = 0;
                "medium" === this.settings.buttonSize && ((i = 4), (a = -2)),
                    "small" === this.settings.buttonSize && ((i = 4), (a = -2));
                var o = t.find(".icons-line>span").length,
                    r = 0;
                if ((this.stopAnimation(), 0 === this.settings.iconsAnimationSpeed))
                    return !1;
                this._interval = setInterval(function() {
                    0 === r && (e.parent().removeClass("hide"), s.addClass("hide"));
                    var t = "translate(" + -(n * r + i) + "px, " + a + "px)";
                    e.css({
                            "-webkit-transform": t,
                            "-ms-transform": t,
                            transform: t
                        }),
                        ++r > o &&
                        (r > o + 1 && (r = 0),
                            e.parent().addClass("hide"),
                            s.removeClass("hide"),
                            (t = "translate(" + -i + "px, " + a + "px)"),
                            e.css({
                                "-webkit-transform": t,
                                "-ms-transform": t,
                                transform: t
                            }));
                }, this.settings.iconsAnimationSpeed);
            }),
            (e.prototype.stopAnimation = function() {
                clearInterval(this._interval);
                var t = this.$element,
                    e = t.find(".icons-line"),
                    s = t.find(".static");
                e.parent().addClass("hide"), s.removeClass("hide");
                var n = "translate(-2px, 0px)";
                e.css({
                    "-webkit-transform": n,
                    "-ms-transform": n,
                    transform: n
                });
            }),
            (e.prototype.showPrompt = function(t) {
                var e = this.$element.find(".arcontactus-prompt");
                t && t.content && e.find(".arcontactus-prompt-inner").html(t.content),
                    e.addClass("active"),
                    this.$element.trigger("arcontactus.showPrompt");
            }),
            (e.prototype.hidePrompt = function() {
                this.$element.find(".arcontactus-prompt").removeClass("active"),
                    this.$element.trigger("arcontactus.hidePrompt");
            }),
            (e.prototype.showPromptTyping = function() {
                this.$element
                    .find(".arcontactus-prompt")
                    .find(".arcontactus-prompt-inner")
                    .html(""),
                    this._insertPromptTyping(),
                    this.showPrompt({}),
                    this.$element.trigger("arcontactus.showPromptTyping");
            }),
            (e.prototype._insertPromptTyping = function() {
                var e = this.$element.find(".arcontactus-prompt-inner"),
                    s = t("<div>", {
                        class: "arcontactus-prompt-typing"
                    }),
                    n = t("<div>");
                s.append(n), s.append(n.clone()), s.append(n.clone()), e.append(s);
            }),
            (e.prototype.hidePromptTyping = function() {
                this.$element.find(".arcontactus-prompt").removeClass("active"),
                    this.$element.trigger("arcontactus.hidePromptTyping");
            }),
            (e.prototype._backgroundStyle = function() {
                return "background-color: " + this.settings.theme;
            }),
            (e.prototype._colorStyle = function() {
                return "color: " + this.settings.theme;
            }),
            (t.fn.contactUs = function(s) {
                var n = Array.prototype.slice.call(arguments, 1);
                return this.each(function() {
                    var i = t(this),
                        a = i.data("ar.contactus");
                    a ||
                        ((a = new e(this, "object" == typeof s && s)),
                            i.data("ar.contactus", a)),
                        "string" == typeof s && "_" !== s.charAt(0) && a[s].apply(a, n);
                });
            }),
            (t.fn.contactUs.Constructor = e);
        })(jQuery);
    </script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
     <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiperbanner", {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
          },
          on: {
            autoplayTimeLeft(s, time, progress) {
              progressCircle.style.setProperty("--progress", 1 - progress);
              progressContent.textContent = `${Math.ceil(time / 1000)}s`;
            }
          }
        });
      </script>
    <div id="google_translate_element" style="display: none"></div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'vi',
                    includedLanguages:'de,vi', 
                },
                'google_translate_element'
            );
        }
    </script>
    {{-- <script type="text/javascript">
        function googleTranslateElementInit() {
        new google.translate.TranslateElement({
        pageLanguage: 'vi',
        includedLanguages:'de,vi', 
        }, 'translate_select');
        }
     </script> --}}
      @if (session()->has('dathangthanhcong'))
      <script>
         $.notify("Đặt hàng thành công", "success"
         );
      </script>
      @endif


    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <style type="text/css">
        /*google translate Dropdown */
        #translate_select select {
            background: #f6edfd;
            color: #383ffa;
            border: none;
            border-radius: 3px;
            padding: 6px 8px
        }

        /*google translate link | logo */
        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }

        /* google translate banner-frame */

        .goog-te-banner-frame {
            display: none !important;
        }

        #goog-gt-tt,
        .goog-te-balloon-frame {
            display: none !important;
        }

        .goog-text-highlight {
            background: none !important;
            box-shadow: none !important;
        }

        body {
            top: 0 !important;
        }
    </style>
</body>

</html>
