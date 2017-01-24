<?php
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
?>
<?php require_once(dirname(__FILE__).'/header.php'); ?>

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
                        
            <div class="nav-collapse collapse">
                
                
                <?php echo $OUTPUT->custom_menu(); ?>
            </div>
            
            <div class="clearfix"></div>
        </div>
        
    </nav>
    <div class="top-header">
            <div class="container-fluid">
            <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                
                    <li class="search">
                     <div class="column">
					  <div id="sb-search" class="sb-search">
                        <form role="form" class="form-inline" id="demo-1" method="get" 
                        action="<?php echo $CFG->wwwroot;?>/course/search.php" id="searchbox_demo">
				         <input class="sb-search-input" placeholder="Search Courses..." 
                           type="text" value="" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"></span>
						</form>
					  </div>
				     </div>
                    </li>
                </ul>
            <?php echo $OUTPUT->user_menu(); ?>
            <?php echo $OUTPUT->navbar_plugin_output(); ?>
        </div>
    </div>  
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

    <?php require_once(dirname(__FILE__).'/footer.php'); ?>