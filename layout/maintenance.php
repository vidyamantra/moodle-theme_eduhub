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
 * The maintenance layout.
 *
 * @package   theme_eduhub
 * @copyright 2016 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_eduhub_get_html_for_settings($OUTPUT, $PAGE);
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
  src: url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/fontawesome-webfont.eot?#iefix&v=3.2.1') format('embedded-opentype'), url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/fontawesome-webfont.woff?v=3.2.1') format('woff'), url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/fontawesome-webfont.ttf?v=3.2.1') format('truetype'), url('<?php echo $CFG->wwwroot;?>/theme/eduhub/font/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1') format('svg');
  font-weight: normal;
  font-style: normal;
}
    </style>
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page">

    <header id="page-header" class="clearfix">
        <div class="container-fluid">
        <?php echo $html->heading; ?>
        </div>
    </header>

    <div id="page-content" class="row-fluid">
        <div class="container-fluid">
        <section id="region-main" class="span12">
            <?php echo $OUTPUT->main_content(); ?>
        </section>
    </div>
    </div>

    <footer id="page-footer">
        <div class="container-fluid">
        <?php
        echo $OUTPUT->standard_footer_html();
        ?>
            <div>developed by <a href="http://www.themecaters.com/" style="color: #3e65a0;">themecaters.com</a></div>
        </div>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html();
// -----code for back to top----------------------
if (!empty($PAGE->theme->settings->backtotop)) {
?>
<div id="back-to-top" style="display: none;"> 
    <a class="arrow" href="#" title="<?php echo get_string('backtotop', 'theme_eduhub')?>">&nbsp;</a> 
</div>
<?php }?>
</div>

</body>
</html>
