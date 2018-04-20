<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>

<!-- Preloader-->
<div class="loader-container">
<div class="loader">
<div id="mask">
            <svg class="preloader-icon" width="34" height="38" viewbox="0 0 34 38">
              <path class="preloader-path" stroke-dashoffset="0" d="M29.437 8.114L19.35 2.132c-1.473-.86-3.207-.86-4.68 0L4.153 8.114C2.68 8.974 1.5 10.56 1.5 12.28v11.964c0 1.718 1.22 3.306 2.69 4.165l10.404 5.98c1.47.86 3.362.86 4.834 0l9.97-5.98c1.472-.86 2.102-2.45 2.102-4.168V12.28c0-1.72-.59-3.306-2.063-4.166z"></path>
            </svg>
      </div>
</div>
</div>
<!-- End Preloader-->
<header>
    <nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="80">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('mishraDileep'); ?>" rel="home" id="logo">
                  mishra<span class="color">Dileep</span></a>
                  <span class="navbar-brand"><?php print $site_slogan; ?></span>
            </div>
        </div>
    </nav>
</header>

<section id="about" class="about">
    <div class="container">
        <div class="row display-f bg-color">
          <div class="col-md-3 col-left blog-intro">
            <div class="header-photo">
                <img class="img-circle" src="/<?php print path_to_theme(); ?>/image/1.png" alt="Photo">
            </div>
            <div class="col-md-12 intro">
              <h3 class="hello-t">Hello, I am</h3>
              <h1 class="name-t">Dileep <br/><span>Mishra</span></h1>
              <h2 class="expart-n">Drupal Architect &amp; Senior Dev Lead</h2>
              <div class="">I am a web developer. I spend most of my time practicing Drupal, CSS, HTML, and JavaScript. I build websites - mostly on <b>Drupal</b>, and web applications using open source technologies.</div>
            </div>
            <div class="wel-social">
                <a href="https://www.drupal.org/u/mishradileep" target="_blank"><i class="fa fa-drupal" aria-hidden="true"></i></a>
                <a href="https://github.com/mishradileep" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/mishradileep/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="https://twitter.com/mishradileepjpr" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>


        <div class="col-md-9 col-right sec-pad">



              <div class="row align-items-end">
                <?php print $messages; ?>
                <?php print render($page['content']); ?>
              </div>
              <!--
              <div class="col-md-6">
                <div class="blog-item">
                    <a class="blog-thumb img-fill-container" href="#"><img src="image/blog/welcome.jpg" alt="Blog"></a>
                    <div class="text">
                        <h5 class="blog-date">13 December 2016</h5>
                        <a href="#"><h4 class="title">Lorem ipsum dolor sit amet. Too much lorem ipsum this time</h4></a>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat cupidatat.</p>
                    </div>
                </div>
              </div>
            -->







        </div>


        </div>
    </div>
</section>

<!--=============Start footer-area ===========-->
<footer class="footer-area">
    <div class="container">
        <div class="row display-f bg-color">
            <div class="col-md-3 col-sm-4 col-left">
                <div class="sec-title">
                    <h6>&copy; 2018 / www.mishraDileep.com</h6>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-right f-right">
                <div class="footer-links">
                    <a href="#">Terms of Us</a>
                    <a href="#">Privacy Policy</a>
                </div>
                <div class="footer-social">
                  <a href="https://www.drupal.org/u/mishradileep" target="_blank"><i class="fa fa-drupal" aria-hidden="true"></i></a>
                  <a href="https://github.com/mishradileep" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                  <a href="https://www.linkedin.com/in/mishradileep/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  <a href="https://twitter.com/mishradileepjpr" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=============End footer-area ===========-->
