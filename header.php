<!DOCTYPE html>

<html lang="ja"><!--Optimize for Japanese--->
<head>

<meta charset="<?php bloginfo('charset');?>"
name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"
>


<title>
<?php if ( is_single()  ){	wp_title('::', true, 'right');}bloginfo('name'); ?>
</title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
<link href="http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="" />
<!--[if lte IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> <!--[if lte IE 9]> <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script> <![endif]-->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />

<?php

if ( is_singular() ) {
	wp_enqueue_script( "comment-reply" );
}
?>

<!--JQuery-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.2.1.min.js">
</script>

<!---ScrollMe--->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollme.js">
</script>
<!---
	<div class="scrollme">
    <div
        class="animateme"
        data-when="enter"
        data-from="0.5"
        data-to="0"
        data-opacity="0"
        data-translatex="-200"
        data-rotatez="90"
    >
        Yup, that's all.
    </div>
</div>

	reference: http://scrollme.nckprsn.com　


settings of start and end points of scrolling
enter:when the container itself enters viewport
exit:when the bottom of the container enters viewport
view:while the container is in viewport
span:From entering viewport to getting out of it (including the bottom part of the container)

from & to
Position of start and end points of an animation
Should be 0～1

easeout:(default)
easein:starts slowly
easeinout:starts slowly, ends slowly
linear:constant speed


----->


<script>
function init() {
// Settings about how many pixels it is for showing contents after scrolling
var px_change  = 60;
// Event handler
window.addEventListener('scroll', function(e){
// Add a class after event
if ( $(window).scrollTop() > px_change ) {
$("header").addClass("smaller");
// Keep removing class unless any event get triggered
} else if ( $("header").hasClass("smaller") ) {
$("header").removeClass("smaller");
}
});
}
window.onload = init();
</script>

<!---Load ScrollMe--->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollme.js">
</script>

<!--Menu----->
<script>
$(function(){


 $("#menuButton").click(function()
{
	$("header").toggleClass("active");
	$("nav").toggleClass("active");
	$(this).toggleClass("active");
$("#siteTitle").toggleClass("active");

//Toggle menu button
        return false;

    });
});
</script>

<!--Favicon-->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon/favicon_32.ico"/>
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon/favicon_256.ico"/>

</head>

<body <?php body_class(); ?>>
	<!--Container of header-->
	<header id="top-head">
	<a id="menuButton" href="#">
    <span></span>
    <span></span>
    <span></span>
	</a>

<!-- Check the last part of CSS, there is the code

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(function(){
  $("#toggle").click(function(){
    $("#menu").slideToggle();
    return false;
  });
  $(window).resize(function(){
    var win = $(window).width();
    var p = 480;
    if(win > p){
      $("#menu").show();
    } else {
      $("#menu").hide();
    }
  });
});
</script>
<nav id="menu-box">
<div id="toggle"><a href="#">MENU</a></div>
	<ul id="menu" class="">
		<li><a href="#">Navi1</a></li>
		<li><a href="#">Navi2</a></li>
		<li><a href="#">Navi3</a></li>
		<li><a href="#">Navi4</a></li>
		<li><a href="#">Navi5</a></li>
		<li><a href="#">Navi6</a></li>
		<li><a href="#">Navi7</a></li>
		<li><a href="#">Navi8</a></li>
	</ul>
</nav>
----->

		<!--Title-->
		<div id="siteTitle">
		<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name') ?>
	<!--		<img src="<?php echo get_template_directory_uri();
  ?>/images/logo41.png" alt=""  width="200" height="200"/>
  --->
			</a>
			<div id="subtitle">
			</div>
		</div>

		<nav id="navigation">
			<ul id="navItemWrapper">
				<li id="nav_BLOG" class="navItems">
					<a href="<?php echo get_category_link( 9 );?>" title="gallery">PHYSICS</a>
				</li>
				<li id="nav_archive" class="navItems">
					<a href="<?php echo get_category_link( 20 );?>" title="gallery">ASTRONOMY</a>
				</li>
				<li id="nav_about" class="navItems">
					<a href="<?php echo get_category_link( 2 );?>" title="gallery"> PSYCHOLOGY</a>
				</li>
				<li id="nav_contact" class="navItems">
					<a href="<?php echo get_category_link( 8 );?>" title="gallery">BIOLOGY</a>
				</li>
				<li id="nav_contact" class="navItems">
					<a href="<?php echo get_category_link( 15 );?>>" title="gallery">TECHNOLOGY</a>
				</li>
					<li id="nav_contact" class="navItems">
					<a href="<?php echo get_category_link( 13 );?>" title="gallery">ANIMAL</a>
				</li>
			</ul>
		</nav>
