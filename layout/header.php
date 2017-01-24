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

if (!empty($PAGE->theme->settings->logo)) {
    $logourl = $PAGE->theme->setting_file_url('logo', 'logo');
} else {
    $logourl = $OUTPUT->pix_url('/logo', 'theme');
}
if (!empty($PAGE->theme->settings->bannerheading)) {
    $bannerheading = theme_eduhub_get_setting('bannerheading',true);
} else {
    $bannerheading = '';
}
if (!empty($PAGE->theme->settings->bannercontent)) {
    $bannercontent = theme_eduhub_get_setting('bannercontent',true);
} else {
    $bannercontent = '';
}
if (!empty($PAGE->theme->settings->marketing1icon)) {
    $marketing1icon = $PAGE->theme->setting_file_url('marketing1icon', 'marketing1icon');
} else {
    $marketing1icon = $OUTPUT->pix_url('icon1', 'theme');
}

if (!empty($PAGE->theme->settings->marketing1heading)) {
    $marketing1heading = theme_eduhub_get_setting('marketing1heading',true);
} else {
    $marketing1heading = '';
}
if (!empty($PAGE->theme->settings->marketing1subheading)) {
    $marketing1subheading = theme_eduhub_get_setting('marketing1subheading',true);
} else {
    $marketing1subheading = '';
}
if (!empty($PAGE->theme->settings->marketing1content)) {
    $marketing1content = theme_eduhub_get_setting('marketing1content',true);
} else {
    $marketing1content = '';
}
if (!empty($PAGE->theme->settings->marketing1url)) {
    $marketing1url = $PAGE->theme->settings->marketing1url;
} else {
    $marketing1url = '';
}
if (!empty($PAGE->theme->settings->marketing2icon)) {
    $marketing2icon = $PAGE->theme->setting_file_url('marketing2icon', 'marketing2icon');
} else {
    $marketing2icon = $OUTPUT->pix_url('icon2', 'theme');
}
if (!empty($PAGE->theme->settings->marketing2heading)) {
    $marketing2heading = theme_eduhub_get_setting('marketing2heading',true);
} else {
    $marketing2heading = '';
}
if (!empty($PAGE->theme->settings->marketing2subheading)) {
    $marketing2subheading = theme_eduhub_get_setting('marketing2subheading',true);
} else {
    $marketing2subheading = '';
}
if (!empty($PAGE->theme->settings->marketing2content)) {
    $marketing2content = theme_eduhub_get_setting('marketing2content',true);
} else {
    $marketing2content = '';
}
if (!empty($PAGE->theme->settings->marketing2url)) {
    $marketing2url = $PAGE->theme->settings->marketing2url;
} else {
    $marketing2url = '';
}
if (!empty($PAGE->theme->settings->marketing3icon)) {
    $marketing3icon = $PAGE->theme->setting_file_url('marketing3icon', 'marketing3icon');
} else {
    $marketing3icon = $OUTPUT->pix_url('icon3', 'theme');
}
if (!empty($PAGE->theme->settings->marketing3heading)) {
    $marketing3heading = theme_eduhub_get_setting('marketing3heading',true);
} else {
    $marketing3heading = '';
}
if (!empty($PAGE->theme->settings->marketing3subheading)) {
    $marketing3subheading = theme_eduhub_get_setting('marketing3subheading',true);
} else {
    $marketing3subheading = '';
}
if (!empty($PAGE->theme->settings->marketing3content)) {
    $marketing3content = theme_eduhub_get_setting('marketing3content',true);
} else {
    $marketing3content = '';
}
if (!empty($PAGE->theme->settings->marketing3url)) {
    $marketing3url = $PAGE->theme->settings->marketing3url;
} else {
    $marketing3url = '';
}
if (!empty($PAGE->theme->settings->marketing4icon)) {
    $marketing4icon = $PAGE->theme->setting_file_url('marketing4icon', 'marketing4icon');
} else {
    $marketing4icon = $OUTPUT->pix_url('icon4', 'theme');
}
if (!empty($PAGE->theme->settings->marketing4heading)) {
    $marketing4heading = theme_eduhub_get_setting('marketing4heading',true);
} else {
    $marketing4heading = '';
}
if (!empty($PAGE->theme->settings->marketing4subheading)) {
    $marketing4subheading = theme_eduhub_get_setting('marketing4subheading',true);
} else {
    $marketing4subheading = '';
}
if (!empty($PAGE->theme->settings->marketing4content)) {
    $marketing4content = theme_eduhub_get_setting('marketing4content',true);
} else {
    $marketing4content = '';
}
if (!empty($PAGE->theme->settings->marketing4url)) {
    $marketing4url = $PAGE->theme->settings->marketing4url;
} else {
    $marketing4url = '';
}
/*---------Main-Box------------*/
if (!empty($PAGE->theme->settings->mainbox1icon)) {
    $mainbox1icon = $PAGE->theme->setting_file_url('mainbox1icon', 'mainbox1icon');
} else {
    $mainbox1icon = $OUTPUT->pix_url('icon5', 'theme');
}
if (!empty($PAGE->theme->settings->mainbox1heading)) {
    $mainbox1heading = theme_eduhub_get_setting('mainbox1heading',true);
} else {
    $mainbox1heading = '';
}

if (!empty($PAGE->theme->settings->mainbox1content)) {
    $mainbox1content = theme_eduhub_get_setting('mainbox1content',true);
} else {
    $mainbox1content = '';
}
if (!empty($PAGE->theme->settings->mainbox1url)) {
    $mainbox1url = $PAGE->theme->settings->mainbox1url;
} else {
    $mainbox1url = '';
}
if (!empty($PAGE->theme->settings->mainbox2icon)) {
    $mainbox2icon = $PAGE->theme->setting_file_url('mainbox2icon', 'mainbox2icon');
} else {
    $mainbox2icon = $OUTPUT->pix_url('icon6', 'theme');
}
if (!empty($PAGE->theme->settings->mainbox2heading)) {
    $mainbox2heading = theme_eduhub_get_setting('mainbox2heading',true);
} else {
    $mainbox2heading = '';
}
if (!empty($PAGE->theme->settings->mainbox2content)) {
    $mainbox2content = theme_eduhub_get_setting('mainbox2content',true);
} else {
    $mainbox2content = '';
}
if (!empty($PAGE->theme->settings->mainbox2url)) {
    $mainbox2url = $PAGE->theme->settings->mainbox2url;
} else {
    $mainbox2url = '';
}
if (!empty($PAGE->theme->settings->mainbox3icon)) {
    $mainbox3icon = $PAGE->theme->setting_file_url('mainbox3icon', 'mainbox3icon');
} else {
    $mainbox3icon = $OUTPUT->pix_url('icon7', 'theme');
}
if (!empty($PAGE->theme->settings->mainbox3heading)) {
    $mainbox3heading = theme_eduhub_get_setting('mainbox3heading',true);
} else {
    $mainbox3heading = '';
}
if (!empty($PAGE->theme->settings->mainbox3content)) {
    $mainbox3content = theme_eduhub_get_setting('mainbox3content',true);
} else {
    $mainbox3content = '';
}
if (!empty($PAGE->theme->settings->mainbox3url)) {
    $mainbox3url = $PAGE->theme->settings->mainbox3url;
} else {
    $mainbox3url = '';
}
if (!empty($PAGE->theme->settings->mainbox4icon)) {
    $mainbox4icon = $PAGE->theme->setting_file_url('mainbox4icon', 'mainbox4icon');
} else {
    $mainbox4icon = $OUTPUT->pix_url('icon8', 'theme');
}
if (!empty($PAGE->theme->settings->mainbox4heading)) {
    $mainbox4heading = theme_eduhub_get_setting('mainbox4heading',true);
} else {
    $mainbox4heading = '';
}
if (!empty($PAGE->theme->settings->mainbox4content)) {
    $mainbox4content = theme_eduhub_get_setting('mainbox4content',true);
} else {
    $mainbox4content = '';
}
if (!empty($PAGE->theme->settings->mainbox4url)) {
    $mainbox4url = $PAGE->theme->settings->mainbox4url;
} else {
    $mainbox4url = '';
}
if (!empty($PAGE->theme->settings->mainheading)) {
    $mainheading = theme_eduhub_get_setting('mainheading',true);
} else {
    $mainheading = '';
}
if (!empty($PAGE->theme->settings->maincontent)) {
    $maincontent = theme_eduhub_get_setting('maincontent',true);
} else {
    $maincontent = '';
}
/* Footer
-----------------*/
if (!empty($PAGE->theme->settings->copyright)) {
    $hascopyright = theme_eduhub_get_setting('copyright',true);
} else {
    $hascopyright = '';
}
if (!empty($PAGE->theme->settings->getintouch)) {
    $getintouch = theme_eduhub_get_setting('getintouch',true);
} else {
    $getintouch = '';
}
if (!empty($PAGE->theme->settings->getintouchcontent)) {
    $getintouchcontent = theme_eduhub_get_setting('getintouchcontent',true);
} else {
    $getintouchcontent = '';
}
if (!empty($PAGE->theme->settings->address)) {
    $address = theme_eduhub_get_setting('address',true);
} else {
    $address = '';
}
if (!empty($PAGE->theme->settings->mobile)) {
    $mobile = theme_eduhub_get_setting('mobile',true);
} else {
    $mobile = '';
}
if (!empty($PAGE->theme->settings->mail)) {
    $mail = theme_eduhub_get_setting('mail',true);
} else {
    $mail = '';
}
if (!empty($PAGE->theme->settings->phone)) {
    $phone = theme_eduhub_get_setting('phone',true);
} else {
    $phone = '';
}
if (!empty($PAGE->theme->settings->siteheading)) {
    $siteheading = theme_eduhub_get_setting('siteheading',true);
} else {
    $siteheading = '';
}
if (!empty($PAGE->theme->settings->sitecontent)) {
    $sitecontent = theme_eduhub_get_setting('sitecontent',true);
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
if (!empty($PAGE->theme->settings->backtotop)) {
       $PAGE->requires->js('/theme/eduhub/yui/bttotop.js');
}
$displaymarketingbox = (empty($PAGE->theme->settings->displaymarketingbox)
||$PAGE->theme->settings->displaymarketingbox < 1) ? 0 : 1;
$displaymainbox = (empty($PAGE->theme->settings->displaymainbox) ||$PAGE->theme->settings->displaymainbox < 1) ? 0 : 1;

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
    
</head>