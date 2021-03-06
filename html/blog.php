<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', false);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <!-- Header_CBPro -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="pragma" CONTENT="NO-CACHE"/>
    <title>Tammy Andresen</title>
    <link rel="shortcut icon" href="/images/cbpro/favicon.ico">

    <link href="/css/smoothness/jquery-ui-1.8.8.custom.css" rel="stylesheet" type="text/css">
    <link href="/css/blueprint/screen.css" rel="stylesheet" type="text/css">
    <link href="/css/site.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="/javascript/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="/javascript/jquery-ui-1.8.7.custom.min.js"></script>
    <script type="text/javascript" src="/javascript/ui.selectmenu.js"></script>
    <script type="text/javascript" src="/javascript/ui.placeholder.js"></script>
    <script type="text/javascript" src="/javascript/ui.rotator.js"></script>
    <script type="text/javascript" src="/javascript/underscore-min.js"></script>
    <script type="text/javascript" src="/javascript/site.js"></script>

<style>

p {
  margin:20px 100px;
  font-size:20px;
}

</style>

  </head>

<body>
  <div id="container_cbpro">

        <div style="position:absolute;top:10px;left:20px;">
                <div style="float:left;">
                <a href="https://twitter.com/TammyAndresen"><img alt="" src="http://cdn.mysitemyway.com/icons-watermarks/flat-circle-white-on-blue/social-media/social-media_twitter/social-media_twitter_flat-circle-white-on-blue_256x256.png" style="height:32px;width:32px;"></a>
                </div>
                <div style="float:left;margin-left:10px;">
                <a href="https://www.facebook.com/authortammyandresen?ref=hl">
                <img alt="" src="http://cdn.mysitemyway.com/icons-watermarks/flat-circle-white-on-blue/social-media/social-media_facebook-square/social-media_facebook-square_flat-circle-white-on-blue_256x256.png" style="height:32px;width:32px;">
</a>
                </div>
                <div style="float:left;margin-left:10px;">
                <a href="https://plus.google.com/+TammyAndresen/posts">
                <img alt="" src="http://cdn.mysitemyway.com/icons-watermarks/flat-circle-white-on-blue/social-media/social-media_googleplus-square/social-media_googleplus-square_flat-circle-white-on-blue_256x256.png" style="height:32px;width:32px;">
</a>
                </div>

                <div style="float:left;margin-left:10px;">
                <a href="https://www.pinterest.com/tammy_andresen/">
                <img alt="" src="http://cdn.mysitemyway.com/icons-watermarks/flat-circle-white-on-blue/social-media/social-media_instagram/social-media_instagram_flat-circle-white-on-blue_256x256.png" style="height:32px;width:32px;">
</a>
                </div>


  </div>

    <div id="cobrand">
    <img src="/images/mountain.jpg" style="width:960px;">

    <div class="headline">
      Tammy Andresen
      <div style="clear:both;height:0px;"></div>
      <div class="tagline">Together, we can climb to amazing heights.  Join me on the journey.</div>
    </div>

</div>

  <!-- Menus_CBPro_Hybrid -->
  <div id="nav_bar" style="background-color:#426b9c">
    <ul id="nav" style="margin:0px;background-color:#426b9c">

      <li class="menu">
      <a href="/">Home</a>
      </li>

      <li class="menu">
      <a href="/about">About</a>
      </li>

      <li class="menu">
      <a href="/books">Books</a>
      </li>

      <li class="current menu">
      <a href="/blog" style="color:#fff;background:#34547a;">Blog</a>
      </li>

      <li class="menu">
      <a href="/contact">Contact</a>
      </li>

    </ul>
    <div class="clear"></div>
  </div>

  <div id="content">


<div class="book-cover" style="margin-top:40px;">
<img src="/images/lilyinbloomfinalebook.jpg" style="width:310px;">
</div>

<div style="height:40px;"></div>

<div style="float:right;width:460px;margin-right:60px;">

<?php
$posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
foreach ($posts as $post) : setup_postdata( $post ); ?>


<div style="margin:0px 20px;font-size:20px;font-style:italic;"><?php the_date(); echo "<br />"; ?></div>
<div style="margin:0px 20px;font-size:20px;font-weight:bold;"><?php the_title(); ?></div>
<div style="margin:0px -80px;font-size:16px;"><?php the_excerpt(); ?></div>
<?php endforeach; ?>


</div>

<div style="clear:both;"></div>


    <!--div class="headshot">
      <img src="/images/headshot_sm.jpg" style="z-index:1000000;">
    </div-->



  <div style="border: 1px solid #ccc;margin:60px;">
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//tammyandresen.us11.list-manage.com/subscribe/post?u=040d57c566141501e3433ab7f&amp;id=19adf630a1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
  <h2>Subscribe to our mailing list</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
  <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
  <label for="mce-FNAME">First Name </label>
  <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
  <label for="mce-LNAME">Last Name </label>
  <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_040d57c566141501e3433ab7f_19adf630a1" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->



  </div>

  </div>



  </div>


<div class="footer">
  <div style="clear:both;height:100px;"></div>
  <div style="width:960px;background:#fff;">

    <hr style="width:90%;margin:0 auto;height:1px;color:#ccc" />

    <div style="background:#fff;text-align:center;padding-top:20px;font-size:14px;">
     &copy;&nbsp;2015&nbsp;Tammy Andresen<br/>
  <div style="margin-top:4px;">
        <a class="footer-links" href="/about">About</a>
          &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a class="footer-links" href="/books">Books</a>
          &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a class="footer-links" href="/blog">Blog</a>
          &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a class="footer-links" href="/contact">Contact</a>
  </div>
    </div>

    <div style="clear:both;"></div>

  </div>
</div>


</body>
</html>
