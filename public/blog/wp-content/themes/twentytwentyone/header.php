<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script>
     
</script>
	<meta name="fo-verify" content="06dd4312-4cf0-4154-9cbf-1ab0afd533b7">
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php // get_template_part( 'template-parts/header/site-header' ); ?>

	<svg style="display:none;">
		<style>
		/* Header */
nav.navbar {
  background: #fff;
  padding: 15px 0;
}

a.navbar-brand img {
  max-width: 200px;
}

li.nav-item {
  margin: auto;
}

.nav-link {
  color: #333 !important;
  font-size: 0.9rem;
  margin: auto 8px;
}

.dropdown-menu {
  background-color: #fff;
  min-width: 13rem;
}

.dropdown-toggle::before {
  font-family: "Font Awesome 5 Free";
  justify-content: center;
  align-items: center;
  position: absolute;
  transition: 1s;
  font-size: 0.5rem;
  font-weight: 600;
  content: "\f078";
  display: flex;
  right: 0px;
  bottom: 0;
  top: 0;
}

.dropdown-menu .nav-link {
  color: #333;
  font-size: 0.8rem;
  font-weight: 500;
}

.dropdown-toggle:hover::before {
  transform: rotate(-180deg);
  transition: 1s;
}

.dropDownBtn:hover + .dropDownMenu {
  position: absolute;
  transition: 1s;
  z-index: 999;
  opacity: 1;
}

.dropdown-toggle::after {
  display: none;
}

.StartAfundly {
  border: 1px solid #30515b;
  border-radius: 6px;
  color: #30515b !important;
  font-weight: 500;
  padding: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

a.nav-link.seeAll {
  text-align: center;
  color: #30515b !important;
  font-weight: 600;
  margin-bottom: 0;
  font-size: 1rem;
}

.footerStartAfundly,
.moboileVeiw ul {
  display: none;
}


.searchBar {
  position: absolute;
  right: 0;
  left: 0;
  width: 0;
  margin: auto;
  top: 0;
  opacity: 0;
  transition: 1s;
}

.searchIcon i{
  opacity: 0;
  transition: 1s;
}

.searchBarActive{
  width: 80%;
  opacity: 1;
  transition: 1s;
}

.searchIconShow i{
  opacity: 1;
  transition: 1s;
}

.searchBar input {
  height: 100%;
  padding: 31px 10px;
  border: none;
  color: #30515b;
  font-size: 1.3rem;
}

.searchBar input:focus {
  box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 0%);
}

.searchBar .input-group-text{
  color: #fff;
  background-color: #30515b;
  border: 1px solid #30515b;
}

.close {
  position: absolute;
  top: 10px;
  right: 10px;
  background: #30515b;
  height: 25px;
  width: 25px;
  color: #fff;
  border-radius: 50px !important;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 0.8rem;
}

.input-group>.form-control:focus, .input-group>.form-select:focus{
  z-index: 0 !important;
}

.startedBtn {
  background: #30515b;
  text-decoration: none;
  border-radius: 5px;
  text-align: center;
  margin: 10px auto;
  font-weight: 600;
  transition: 1s;
  padding: 10px;
  color: #fff;
  display: block;
}

.startedBtn:hover {
  background: #018547;
  transition: 1s;
  color: #fff;
}
ul,
li {
  padding-left: 0;
  list-style: none;
}

a:active,
a:focus,
a:visited,
.has-background-white .site a:focus:not(.wp-block-button__link):not(.wp-block-file__button),
.site a:focus:not(.wp-block-button__link):not(.wp-block-file__button) img{
    background:transparent !important;
    border:none !important;
    outline:none !important;
    text-decoration:none !important;
}

input:focus{
	outline:none !important;
}
.site .button:not(:hover):not(:active):not(.has-background), button:not(:hover):not(:active):not(.has-background), input[type=submit]:not(:hover):not(:active):not(.has-background), input[type=reset]:not(:hover):not(:active):not(.has-background), .wp-block-search .wp-block-search__button:not(:hover):not(:active):not(.has-background), .wp-block-button .wp-block-button__link:not(:hover):not(:active):not(.has-background), .wp-block-file a.wp-block-file__button:not(:hover):not(:active):not(.has-background) {
    background-color: #F8F9FA;
}
.site .button:not(:hover):not(:active):not(.has-text-color), button:not(:hover):not(:active):not(.has-text-color), input[type=submit]:not(:hover):not(:active):not(.has-text-color), input[type=reset]:not(:hover):not(:active):not(.has-text-color), .wp-block-search .wp-block-search__button:not(:hover):not(:active):not(.has-text-color), .wp-block-button .wp-block-button__link:not(:hover):not(:active):not(.has-text-color), .wp-block-file a.wp-block-file__button:not(:hover):not(:active):not(.has-text-color) {
    color: #000000;
}
@media screen and (max-width: 991px) {
    .moboileVeiw ul {
        display: flex;
        width: 100%;
    }
    li.nav-item.footerStartAfundly {
        display: block;
        width: 100%;
    }
    li.nav-item.footerStartAfundly .StartAfundly {
        display: block;
        width: 100%;
        background: #30515b;
        color: #fff !important;
    }
    .nav-link {
        margin: auto;
    }
    .moboileVeiw ul li {
        margin: auto 20px;
        text-align: center;
    }
    .socialMediaIcons,
    .navbar-brand,
    .searchLi {
        display: none;
    }
    .moboileVeiw .navbar-brand {
        display: block;
    }
    .homeSection01 .row {
        padding-top: 60px;
    }
    .homeSection02 a.fundraisersCards img {
        border-radius: 15px 15px 0px 0px;
    }
    .successStoriesCard img,
    .successStoriesCard h6 {
        margin-bottom: 10px;
    }
    .shareArticle {
        text-align: center;
    }
    .shareArticle h5 {
        margin-bottom: 12px !important;
        display: block;
    }
    .date {
        text-align: center;
    }
    .selectCountry {
        display: block;
    }

    .nonProfitImg01{
        margin-bottom: 40px;
    }
    
    .donationHeading .input-group{
        height: 70px;
    }

    .donationHeading input,
    .donationHeading .input-group-text{
        font-size: 30px;
    }
    .moboileVeiw {
        display: block;
        margin: auto;
    }
    .searchBarActive{
        width: 100%;
    }
    .searchBar input{
        font-size: 0.9rem;
    }
}

@media screen and (max-width: 1199px) and (min-width: 992px) {
    .homeSection02 .findFundraising .fundraisersCards .card,
    .newFundraisers a.fundraisersCards img {
        min-height: 350px;
        max-height: 350px;
    }
    .findFundraising a.fundraisersCards img {
        max-height: 200px;
        min-height: 200px;
    }
    .findFundraising .fundraisersCards .card {
        height: 100%;
    }
}

@media screen and (max-width: 1366px) and (min-width: 1200px) {
    .Over10000PeopleCards h6 {
        font-size: 0.7rem;
    }
}

@media screen and (max-width: 1199px) and (min-width: 1000px) {
    .Over10000PeopleCards h6 {
        font-size: 0.5rem;
    }
}
/* End */
		</style>
	</svg>
	<header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <div class="moboileVeiw">
          <ul>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)" onclick="searchBarActive()"><i class="fas fa-search"></i></a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand m-auto" href="https://fundraisingcup.org/"><img class="w-100" src="https://fundraisingcup.org/blog/wp-content/uploads/2022/03/mainLogo.png" alt="mainLogo.png"></a>
            </li>
            <li class="nav-item">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                  <i class="fas fa-bars"></i>
                </span>
              </button>
            </li>
          </ul>
          <div class="searchBar" id="searchBar">
            <div class="col-lg-12">
              <div class="input-group mb-3">
                <span class="input-group-text" class="searchIcon" id="search">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control" placeholder="Find fundraisers by name or location" aria-label="Find fundraisers by name or location" aria-describedby="search">
                <div class="close" id="close">
                  <i class="fas fa-times"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <li class="nav-item footerStartAfundly">
          <a class="nav-link StartAfundly" href="javascript:void(0)">Start Fundraising</a>
        </li>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav m-auto">
            <a class="navbar-brand m-auto" href="https://fundraisingcup.org/"><img class="w-100" src="https://fundraisingcup.org/blog/wp-content/uploads/2022/03/mainLogo.png" alt="mainLogo.png"></a>
            <li class="nav-item searchLi">
              <a class="nav-link" href="javascript:void(0)"  onclick="searchBarActive()"><i class="fas fa-search"></i> Search</a>
            </li>
          </ul>

          <li class="nav-item m-auto">
            <a class="startedBtn mt-0 mb-0 text-light" href="https://fundraisingcup.org/public/discover">Give now</a>
          </li>

          <ul class="navbar-nav m-auto">
            <li class="nav-item dropdown">
              <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">Discover</a>
              <ul class="dropdown-menu shadow">
                <li><a class="nav-link" href="https://fundraisingcup.org/discover">Fundraisers</a></li>
                <li><a class="nav-link" href="https://fundraisingcup.org/success-stories">Success Stories</a></li>
                <li><a class="nav-link" href="https://fundraisingcup.org/coronavirus-fundraising">Coronavirus fundraising</a></li>
                <li><a class="nav-link" href="https://fundraisingcup.org/pricing">Pricing</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">Fundraise for</a>
              <ul class="dropdown-menu shadow">
                <li><a class="nav-link" href="https://fundraisingcup.org/fund/1">Medical</a></li>
                <li><a class="nav-link" href="https://fundraisingcup.org/fund/2">Memorial</a></li>
                <li><a class="nav-link" href="https://fundraisingcup.org/fund/3">Emergency</a></li>
                <li><a class="nav-link" href="https://fundraisingcup.org/fund/4">Nonprofit</a></li>
                <li><a class="nav-link" href="https://fundraisingcup.org/fund/5">Education</a></li>
                <hr class="m-0">
                <li><a class="nav-link seeAll pb-0" href="https://fundraisingcup.org/discover">See all</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://fundraisingcup.org/how-it-works">How it works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://fundraisingcup.org/sign-in">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link StartAfundly" href="https://fundraisingcup.org/becomemember">Start Fundraising</a>
            </li>
          </ul>
          <div class="searchBar" id="searchBar">
            <div class="col-lg-12">
              <div class="input-group mb-3">
                <span class="input-group-text" class="searchIcon" id="search">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control" placeholder="Find fundraisers by name or location" aria-label="Find fundraisers by name or location" aria-describedby="search">
                <div class="close" id="close">
                  <i class="fas fa-times"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <script>
    function searchBarActive() {
      var element = document.getElementById("searchBar");
      element.classList.add("searchBarActive");
    }
    document.querySelector('#close').addEventListener('click', () => {
      var element = document.getElementById("searchBar");
      element.classList.remove("searchBarActive");
    })
  </script>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
