<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from preview.colorlib.com/theme/modist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Dec 2021 11:55:19 GMT -->

<head>
  <title>Modist - Ecommerce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/bootstrapp.css')}}" />
  <script>(function (w, d) {
      !function (e, t, r, a, s) {
        e[r] = e[r] || {}, e[r].executed = [], e.zaraz = { deferred: [] }; var n = t.getElementsByTagName("title")[0]; e[r].c = t.cookie, n && (e[r].t = t.getElementsByTagName("title")[0].text), e[r].w = e.screen.width, e[r].h = e.screen.height, e[r].j = e.innerHeight, e[r].e = e.innerWidth, e[r].l = e.location.href, e[r].r = t.referrer, e[r].k = e.screen.colorDepth, e[r].n = t.characterSet, e[r].o = (new Date).getTimezoneOffset(),//
          e[s] = e[s] || [], e.zaraz._preTrack = [], e.zaraz.track = (t, r) => e.zaraz._preTrack.push([t, r]), e[s].push({ "zaraz.start": (new Date).getTime() }); var i = t.getElementsByTagName(a)[0], o = t.createElement(a); o.defer = !0, o.src = "../../cdn-cgi/zaraz/sd41d.js?" + new URLSearchParams(e[r]).toString(), i.parentNode.insertBefore(o, i)
      }(w, d, "zarazData", "script", "dataLayer");
    })(window, document);</script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Modist</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{route('ecommerce')}}" class="nav-link">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Shop</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="{{route('products.index')}}">Shop</a>
              <a class="dropdown-item" href="{{route('cart.index')}}">Panier</a>
              <a class="dropdown-item" href="{{route('checkout.index')}}">Paiemnt</a>
            </div>
          </li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          <li class="nav-item cta cta-colored"><a href="{{route('cart.index')}}" class="nav-link"><span
                class="icon-shopping_cart"></span>[{{Cart::count()}}]&nbsp;&nbsp;{{getPrice(Cart::total())}} </a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <footer class="ftco-footer bg-light ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Modist</h2>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Menu</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Shop</a></li>
              <li><a href="#" class="py-2 d-block">About</a></li>
              <li><a href="#" class="py-2 d-block">Journal</a></li>
              <li><a href="#" class="py-2 d-block">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Help</h2>
            <div class="d-flex">
              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
              </ul>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San
                    Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__"
                        data-cfemail="5d34333b321d2432282f3932303c3433733e3230">[email&#160;protected]</span></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            Copyright &copy;
            <script data-cfasync="false"
              src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with
            <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/"
              target="_blank">Colorlib</a>

          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script
    src="{{asset('js/jquery-migrate-3.0.1.min.js%2bpopper.min.js%2bbootstrap.min.js%2bjquery.easing.1.3.js.pagespeed.jc.5hHtSZdmwp.js')}}"></script>
  <script>eval(mod_pagespeed_biXpWqTu0z);</script>
  <script>eval(mod_pagespeed_73bmy1BcRI);</script>
  <script>eval(mod_pagespeed_cz$y0DHlGo);</script>
  <script>eval(mod_pagespeed_xEwDGLI4eC);</script>
  <script
    src="{{asset('js/jquery.waypoints.min.js%2bjquery.stellar.min.js%2bowl.carousel.min.js%2bjquery.magnific-popup.min.js.pagespeed.jc.sKk0xIJllE.js')}}"></script>
  <script>eval(mod_pagespeed_uP8m907atr);</script>
  <script>eval(mod_pagespeed_RVDwHwfXuE);</script>
  <script>eval(mod_pagespeed_7ee5vP483y);</script>
  <script>eval(mod_pagespeed_JCzfSFPg2h);</script>
  <script
    src="{{asset('js/aos.js%2bjquery.animateNumber.min.js%2bbootstrap-datepicker.js%2bscrollax.min.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.lYVC4LS8ef.js')}}"></script>
  <script>eval(mod_pagespeed_yW2lR$Kjbw);</script>
  <script>eval(mod_pagespeed_4WzhZ69ygE);</script>
  <script>eval(mod_pagespeed_IvuvUn0V7O);</script>
  <script>eval(mod_pagespeed_tv_DyLK0Ud);</script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script>eval(mod_pagespeed_FgsA2Kca7t);</script>
  <script>eval(mod_pagespeed_nbXqxUO_Ul);</script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
    integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
    data-cf-beacon='{"rayId":"6c635096cf0c14e5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
    crossorigin="anonymous"></script>
</body>

</html>
