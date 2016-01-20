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
 * The secure layout.
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
<form role="form" class="form-inline" id="demo-1" method="get" action="<?php echo $CFG->wwwroot;?>/course/search.php" id="searchbox_demo">
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

    <header id="page-header" class="clearfix">
        <div class="container-fluid">
        <?php echo $html->heading; ?>
        </div>
    </header>

    <div id="page-content" class="row-fluid">
        <div class="container-fluid">
        <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
                <section id="region-main" class="<?php echo $regionmain; ?>">
                    <?php echo $OUTPUT->main_content(); ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
    </div>
    </div>

    <?php echo $OUTPUT->standard_end_of_body_html();
// -----code for back to top----------------------
if (!empty($PAGE->theme->settings->backtotop)) {
?>
<div id="back-to-top" style="display: none;"> 
    <a class="arrow" href="#" title="<?php echo get_string('backtotop', 'theme_eduhub')?>">&nbsp;</a> 
</div>
<?php }?>

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
