<!doctype html>
<html lang="<?php language_attributes( 'en' )?>">

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( "charset" );?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php wp_title();?></title>

  <!-- fabicon -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <!-- All CSS -->

  <?php wp_head(); ?>
</head>
<body>
<?php

  $site_logo = get_field('site_logo', "options");

  
?>

  


<header class="main-head">
    <div class="container-fluid cntnr-fld">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php echo $site_logo['url']; ?>" alt="<?php echo $site_logo['alt'];?>"></a>
        <button class="navbar-toggler navbar-toggler-main" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <span class="stick"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <button class="navbar-toggler navbar-toggler-main" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <span class="stick"></span>
          </button>
          <ul class="navbar-nav nvlft">
            <li class="menu-item-has-children">
              <a href="auctions.html">Auctions</a>
              <ul class="sub-menu">
                <li><a href="#url">level 3</a></li>
                <li><a href="#url">level 3</a></li>
                <li><a href="#url">level 3</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children">
              <a href="#url">For Sale</a>
              <ul class="sub-menu">
                <li><a href="#url">level 3</a></li>
                <li><a href="#url">level 3</a></li>
                <li><a href="#url">level 3</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children">
              <a href="#url">For Trade</a>
              <ul class="sub-menu">
                <li><a href="#url">level 3</a></li>
                <li><a href="#url">level 3</a></li>
                <li><a href="#url">level 3</a></li>
              </ul>
            </li>
            <li><a href="parts.html">Parts</a></li>
            <li><a href="#url">Results</a></li>
          </ul>

        </div>
        <div class="hdr-rit">
          <ul class="hdr-uls">
            <li class="hdr-li">
              <div class="hdr-li-frm">
                <form>
                  <input type="text" placeholder="Search">
                  <input type="submit" value="">
                </form>
              </div>
              <a href="#url" class="search-btn">
                <img src="images/srch.png" alt="" class="search-icon">
              </a>

            </li>
            <li class="hdr-li">
              <a class="login-btn" href="#url">Login/sign up<span><img src="images/arw.svg" alt=""></span></a>
            </li>
            <li class="hdr-li">
              <a class="cmn-btn" href="#url">Submit <span><img src="images/arw.svg" alt=""></span></a>
            </li>
          </ul>
        </div>

      </nav>

    </div>


    <button class="navbar-toggler" id="navoverlay" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation"></button>
    <div class="search-wpr">
      <div class="search-wpr-in">
        <form>
          <input type="text" placeholder="Search...">
          <input type="submit" value="">
        </form>
        <a href="#url" class="search-btn-cls">
          <img src="images/close.svg" alt="" class="search-close-icon">
        </a>
      </div>
    </div>
  </header>