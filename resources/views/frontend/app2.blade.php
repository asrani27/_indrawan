<!DOCTYPE html>
<!--
Template Name: Surogou
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>PUPR</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="/surogou-main/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 

    <div class="fl_left">
      <ul class="nospace">
        <li><a href="/"><i class="fas fa-home fa-lg"></i></a></li>
        {{-- <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li> --}}
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="fas fa-envelope rgtspace-5"></i> pupr@banjarmasinkota.go.id</li>
      </ul>
    </div>

  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 

    <div id="logo" class="one_half first">
      <h1 class="logoname"><a href="/surogou-main/index.html"><span>Sip</span>JAKI</a></h1>
    </div>
    <div class="one_half">
      <ul class="nospace clear">
        <li class="one_half first">
          <div class="block clear"><i class="fas fa-phone"></i> <span><strong class="block">Call Us:</strong> +00 (123) 456 7890</span> </div>
        </li>
        <li class="one_half">
          <div class="block clear"><i class="far fa-clock"></i> <span><strong class="block"> Mon. - Sat.:</strong> 08.00am - 18.00pm</span> </div>
        </li>
      </ul>
    </div>

  </header>
  <nav id="mainav" class="hoc clear"> 

    @include('frontend.menu')

  </nav>
</div>
<div class="wrapper bgded overlay" style="background-image:url('/logo/kota-banjarmasin.jpg');background-size:cover;">
  <div id="breadcrumb" class="hoc clear"> 

@yield('heading')
    
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->

    <div class="content"> 
    
        @yield('contents')
    
    </div>

    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


@include('frontend.footer')

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="/surogou-main/layout/scripts/jquery.min.js"></script>
<script src="/surogou-main/layout/scripts/jquery.backtotop.js"></script>
<script src="/surogou-main/layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>