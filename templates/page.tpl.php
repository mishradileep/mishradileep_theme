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

<div class="container-fluid header">
  <div class="container">
    <h1>
      <a href="/">
        <span class="logo mishra">mishra</span>
        <span class="logo dileep">Dileep</span>
      </a>
      <span class="tag"><?php print $site_slogan; ?></span>
    </h1>
  </div>
</div>
<div class="container site-content">
  <div class="row">
    <div class="col-md-8 dileep">
      <?php print $messages; ?>
      <?php print render($page['content']); ?>
    </div>
    <div class="col-md-4">
      <div class="left">
        <!--
        <div class="search-box">
          <form class="search">
            <input type="text" placeholder="search mishraDileep" class="keyword">
            <button type="submit" class="btn btn-success btn-search">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
        -->
        <div class="about-author">

          <h2>About Author</h2>
          <div class="row">
            <div class="col-md-4">
              <img src="<?php print path_to_theme(); ?>/assets/images/dileep-mishra.png">
            </div>
            <div class="col-md-8">
              <h2 class="dileep-mishra">Dileep Mishra</h2>
              <h3>Drupal Architect & Engineering Manager</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>I am a web developer. I spend most of my time practicing Drupal, CSS, HTML, and JavaScript. I build websites - mostly on Drupal, and web applications using open source technologies.</p>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">&copy; 2018 / www.mishraDileep.me</div>
      <div class="col-md-6">
        <div class="sns">
          <a href="https://www.drupal.org/u/mishradileep" target="_blank"><i class="fa fa-drupal" aria-hidden="true"></i></a>
          <a href="https://github.com/mishradileep" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/mishradileep/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="https://twitter.com/mishradileepjpr" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
