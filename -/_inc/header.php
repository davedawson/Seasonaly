<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>What's in Season</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="For us who can't spell and don't know much about seasonal fruits or veggies.">

    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7750432/683202/css/fonts.css" />
    <link href="/stylesheets/fonts.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="/js/packery.js"></script>
    <script src="/js/mustache.js"></script>
    <script src="/js/jquery-mustache.js"></script>
    <script src="/js/handlebars.js"></script>
    <!-- Unicode CSS Loader: place this in the head of your page -->
    <script>
    /* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
    window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!!t.document.createElementNS&&!!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect&&!!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),A=function(A){var o=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];o.rel="stylesheet",o.href=e[A&&n?0:A?1:2],r.parentNode.insertBefore(o,r)},o=new t.Image;o.onerror=function(){A(!1)},o.onload=function(){A(1===o.width&&1===o.height)},o.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
    grunticon( [ "/stylesheets/icons.data.svg.css", "/stylesheets/icons.data.png.css", "/stylesheets/icons.fallback.css" ] );</script>
    <noscript><link href="stylesheets/icons.fallback.css" rel="stylesheet"></noscript>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-43068144-1', 'whatsinseasontoday.com');
      ga('send', 'pageview');

    </script>

    <!--[if lt IE 9]>
      <script src="js/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->
  </head>

  <?php if($_SERVER['REQUEST_URI'] == '/app/') { ?>
      <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
      <section class="header clearfix">
        <div class="season">
          <p>Summer</p>
        </div>

        <h1 class="logo"><a href="/" class="icon-icon">What's in Season Today</a></h1>

        <div class="location">
          <p>NYC</p>
        </div>
      </section>

  <?php } else { ?>
    <body class="desktop">
  <?php } ?>
