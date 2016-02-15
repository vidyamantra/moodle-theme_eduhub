<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's eduhub theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_eduhub
 * @copyright 2016 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_eduhub_get_html_for_settings($OUTPUT, $PAGE);
// Set default (LTR) layout mark-up for a three column page.
$regionmainbox = 'span9';
$regionmain = 'span8 pull-right';
$sidepre = 'span4 desktop-first-column';
$sidepost = 'span3 pull-right';
// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmainbox = 'span9 pull-right';
    $regionmain = 'span8';
    $sidepre = 'span4 pull-right';
    $sidepost = 'span3 desktop-first-column';
}
/* Footer
-----------------*/
if (!empty($PAGE->theme->settings->getintouch)) {
    $getintouch = $PAGE->theme->settings->getintouch;
} else {
    $getintouch = '';
}
if (!empty($PAGE->theme->settings->getintouchcontent)) {
    $getintouchcontent = $PAGE->theme->settings->getintouchcontent;
} else {
    $getintouchcontent = '';
}
if (!empty($PAGE->theme->settings->address)) {
    $address = $PAGE->theme->settings->address;
} else {
    $address = '';
}
if (!empty($PAGE->theme->settings->mobile)) {
    $mobile = $PAGE->theme->settings->mobile;
} else {
    $mobile = '';
}
if (!empty($PAGE->theme->settings->mail)) {
    $mail = $PAGE->theme->settings->mail;
} else {
    $mail = '';
}
if (!empty($PAGE->theme->settings->phone)) {
    $phone = $PAGE->theme->settings->phone;
} else {
    $phone = '';
}
if (!empty($PAGE->theme->settings->siteheading)) {
    $siteheading = $PAGE->theme->settings->siteheading;
} else {
    $siteheading = '';
}
if (!empty($PAGE->theme->settings->sitecontent)) {
    $sitecontent = $PAGE->theme->settings->sitecontent;
} else {
    $sitecontent = '';
}
$hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;

// If any of the above social networks are true, sets this to true.
$hassocialnetworks = ($hasfacebook) ? true : false;

$hastwitter    = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;

// If any of the above social networks are true, sets this to true.
$hassocialnetworks = ($hastwitter) ? true : false;

$haspintirest    = (empty($PAGE->theme->settings->pintirest)) ? false : $PAGE->theme->settings->pintirest;

// If any of the above social networks are true, sets this to true.
$hassocialnetworks = ($haspintirest) ? true : false;

$hasgoogleplus    = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;

// If any of the above social networks are true, sets this to true.
$hassocialnetworks = ($hasgoogleplus) ? true : false;

$haslinkdin    = (empty($PAGE->theme->settings->linkdin)) ? false : $PAGE->theme->settings->linkdin;

// If any of the above social networks are true, sets this to true.
$hassocialnetworks = ($haslinkdin) ? true : false;

if (!empty($PAGE->theme->settings->copyright)) {
    $hascopyright = $PAGE->theme->settings->copyright;
} else {
    $hascopyright = '';
}
// Logo.
if (!empty($PAGE->theme->settings->logo)) {
    $logourl = $PAGE->theme->setting_file_url('logo', 'logo');
} else {
    $logourl = $OUTPUT->pix_url('/logo', 'theme');
}
if (!empty($PAGE->theme->settings->backtotop)) {
       $PAGE->requires->js('/theme/eduhub/yui/bttotop.js');
}
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    @font-face {
	font-family:'MalayalamSangamMN-Regular';
	src: url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/MalayalamSangamMN_gdi.eot');
	src: url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/MalayalamSangamMN_gdi.eot?#iefix') format('embedded-opentype'),
		url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/MalayalamSangamMN_gdi.woff') format('woff'),
		url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/MalayalamSangamMN_gdi.ttf') format('truetype'),
		url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/MalayalamSangamMN_gdi.svg#MalayalamSangamMN-Regular') format('svg');
	font-weight: 400;
	font-style: normal;
	font-stretch: normal;
	unicode-range: U+0020-201D;
}
        
        @font-face {
	font-family:'MyriadPro-Regular';
	src: url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/MyriadPro-Regular_gdi.eot');
	src: url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/MyriadPro-Regular_gdi.eot?#iefix') format('embedded-opentype'),
		url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/MyriadPro-Regular_gdi.woff') format('woff'),
		url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/MyriadPro-Regular_gdi.ttf') format('truetype'),
		url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/MyriadPro-Regular_gdi.svg#MyriadPro-Regular') format('svg');
	font-weight: 400;
	font-style: normal;
	font-stretch: normal;
	unicode-range: U+0020-25CA;
}
   @font-face {
  font-family: 'FontAwesome';
  src: url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/fontawesome-webfont.eot?v=3.2.1');
  src: url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/fontawesome-webfont.eot?#iefix&v=3.2.1') format('embedded-opentype'), 
      url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/fontawesome-webfont.woff?v=3.2.1') 
      format('woff'), 
      url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/fontawesome-webfont.ttf?v=3.2.1') format('truetype'), 
      url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1') 
      format('svg');
  font-weight: normal;
  font-style: normal;
}
    </style>
    <script src="<?php echo $CFG->wwwroot;?>/theme/eduhub/javascript/modernizr.custom.js"></script>
    <script src="<?php echo $CFG->wwwroot;?>/theme/eduhub/javascript/uisearch.js"></script>
    <script src="<?php echo $CFG->wwwroot;?>/theme/eduhub/javascript/classie.js"></script>
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <div class="pull-left">
            <a class="logo" href="<?php echo $CFG->wwwroot;?>"><img src="<?php echo $logourl?>" alt="logo"/> </a>
            </div>
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
            <?php echo $OUTPUT->navbar_button(); ?>
            <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                
                    <li class="search">
                    <div class="column">
					<div id="sb-search" class="sb-search">
<form role="form" class="form-inline" id="demo-1" method="get" 
      action="<?php echo $CFG->wwwroot;?>/course/search.php" id="searchbox_demo">
				<input class="sb-search-input" placeholder="Search Courses..." type="text" value="" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"></span>
						</form>
					</div>
				</div>
                    </li>
                </ul>
        <?php echo $OUTPUT->user_menu(); ?>
            
            <div class="nav-collapse collapse">
                
                
                <?php echo $OUTPUT->custom_menu(); ?>
            </div>
            
            <div class="clearfix"></div>
        </div>
        
    </nav>
</header>

<div id="page">
    <div class="container-fluid">
    <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>
        </div>
    
    <div id="page-content" class="row-fluid">
        <div class="container-fluid">
        <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
                <section id="region-main" class="<?php echo $regionmain; ?>">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
    </div>
    </div>

   <div class="top-footer row-fluid">
     <div class="container-fluid">
        <div class="span6">
          <h3><?php echo $getintouch?></h3>
           <p><?php echo $getintouchcontent?></p>
           <ul>
             <li>
               <?php if ($address) { ?>
               <p><i class="icon-map-marker"></i> <?php echo $address?></p>
               <?php 
               }
               ?>
             </li>
                 
            <li>
               <?php if ($mobile) { ?>
               <p><i class="icon-mobile-phone"></i> <?php echo $mobile?></p>
               <?php 
               } 
               ?>
            </li>
                 
            <li>
               <?php if ($mail) { ?>
               <p><i class="icon-envelope"></i> <?php echo $mail?></p>
               <?php 
               } 
               ?>
            </li>
                 
             <li>
               <?php if ($phone) { ?>
               <p><i class="icon-phone-sign"></i> <?php echo $phone?></p>
               <?php 
               }
               ?>
            </li>
        </ul>
        </div>
        <div class="span4">
          <h3 class="blue"><?php echo $siteheading ?></h3>
          <p><?php echo $sitecontent ?></p>
        <ul class="social">
           <?php if ($hasfacebook) { ?>
           <li>
            <a href="<?php echo $hasfacebook; ?>" target="_blank" />
            <i class="facebook">
             <img src="<?php echo $CFG->wwwroot;?>/theme/eduhub/pix/social/facebook.png" alt=""/>
            </i>
            </a>
           </li>
            <?php 
            }
            ?>
          <?php if ($hastwitter) { ?>
           <li>
            <a href="<?php echo $hastwitter; ?>" target="_blank" />
             <i class="twitter">
              <img src="<?php echo $CFG->wwwroot;?>/theme/eduhub/pix/social/twitter.png" alt=""/>
            </i>
            </a>
           </li>
            <?php 
            }
            ?>
         <?php if ($haspintirest) { ?>
           <li>
            <a href="<?php echo $haspintirest; ?>" target="_blank" />
            <i class="pintirest">
             <img src="<?php echo $CFG->wwwroot;?>/theme/eduhub/pix/social/pintirest.png" 
                         alt=""/>                       
            </i>
            </a>
          </li>
            <?php 
            }
            ?>
        <?php if ($hasgoogleplus) { ?>
           <li>
            <a href="<?php echo $hasgoogleplus; ?>" target="_blank" />
            <i class="googleplus">
             <img src="<?php echo $CFG->wwwroot;?>/theme/eduhub/pix/social/googleplus.png" 
                         alt=""/>                       
            </i>
            </a>
           </li>
            <?php 
            }
            ?>
         <?php if ($haslinkdin) { ?>
           <li>
            <a href="<?php echo $haslinkdin; ?>" target="_blank" />
            <i class="linkdin">
             <img src="<?php echo $CFG->wwwroot;?>/theme/eduhub/pix/social/linkdin.png" alt=""/>
            </i>
            </a>
           </li>
            <?php 
            }
            ?>
        </ul>
        </div>
        <div class="clearfix"></div>

    <div class="ftr-copyright">
        <?php if ($hascopyright) {
        echo '<p class="copy">Copyright &copy; '.date("Y").' '.$hascopyright.'</p>';
        } ?>
     </div>
        </div>
    </div>
    
    
        <footer id="page-footer">
         <div class="container-fluid">
        <div class="clearfix"></div>
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
        <?php
        echo $html->footnote;
        echo $OUTPUT->login_info();

        echo $OUTPUT->standard_footer_html();
        ?>
             <div>developed by <a href="http://www.themecaters.com/" style="color: #3e65a0;">themecaters.com</a></div>
      </div>
    </footer>

        <?php echo $OUTPUT->standard_end_of_body_html();
// Code for back to top.
if (!empty($PAGE->theme->settings->backtotop)) {
?>
<div id="back-to-top" style="display: none;"> 
    <a class="arrow" href="#" title="<?php echo get_string('backtotop', 'theme_eduhub')?>"><i class="icon-circle-arrow-up"></i></a> 
</div>
<?php 
}
?>

</div>
<script type="text/javascript">
    $(function(){     
$('h3.blue').each(function(){
    var text = $(this).text().split(' ');
    if(text.length < 2)
        return;
    text[0] = '<span class="coursenam-blue">'+text[0]+'</span>';
    $(this).html( text.join(' ') );
});        
   });
</script>
<script>
	new UISearch( document.getElementById( 'sb-search' ) );
    $( ".block > .content" ).addClass( "clearfix" ); 
</script>
</body>
</html>
