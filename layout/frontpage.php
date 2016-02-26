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
$regionmain = 'span12 pull-right';
$sidepre = 'span4 desktop-first-column';
$sidepost = 'span3 pull-right';
// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmainbox = 'span9 pull-right';
    $regionmain = 'span12';
    $sidepre = 'span4 pull-right';
    $sidepost = 'span3 desktop-first-column';
}
if (!empty($PAGE->theme->settings->copyright)) {
    $hascopyright = $PAGE->theme->settings->copyright;
} else {
    $hascopyright = '';
}
if (!empty($PAGE->theme->settings->logo)) {
    $logourl = $PAGE->theme->setting_file_url('logo', 'logo');
} else {
    $logourl = $OUTPUT->pix_url('/logo', 'theme');
}
if (!empty($PAGE->theme->settings->bannerheading)) {
    $bannerheading = $PAGE->theme->settings->bannerheading;
} else {
    $bannerheading = '';
}
if (!empty($PAGE->theme->settings->bannercontent)) {
    $bannercontent = $PAGE->theme->settings->bannercontent;
} else {
    $bannercontent = '';
}
if (!empty($PAGE->theme->settings->marketing1icon)) {
    $marketing1icon = $PAGE->theme->setting_file_url('marketing1icon', 'marketing1icon');
} else {
    $marketing1icon = $OUTPUT->pix_url('icon1', 'theme');
}

if (!empty($PAGE->theme->settings->marketing1heading)) {
    $marketing1heading = $PAGE->theme->settings->marketing1heading;
} else {
    $marketing1heading = '';
}
if (!empty($PAGE->theme->settings->marketing1subheading)) {
    $marketing1subheading = $PAGE->theme->settings->marketing1subheading;
} else {
    $marketing1subheading = '';
}
if (!empty($PAGE->theme->settings->marketing1content)) {
    $marketing1content = $PAGE->theme->settings->marketing1content;
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
    $marketing2heading = $PAGE->theme->settings->marketing2heading;
} else {
    $marketing2heading = '';
}
if (!empty($PAGE->theme->settings->marketing2subheading)) {
    $marketing2subheading = $PAGE->theme->settings->marketing2subheading;
} else {
    $marketing2subheading = '';
}
if (!empty($PAGE->theme->settings->marketing2content)) {
    $marketing2content = $PAGE->theme->settings->marketing2content;
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
    $marketing3heading = $PAGE->theme->settings->marketing3heading;
} else {
    $marketing3heading = '';
}
if (!empty($PAGE->theme->settings->marketing3subheading)) {
    $marketing3subheading = $PAGE->theme->settings->marketing3subheading;
} else {
    $marketing3subheading = '';
}
if (!empty($PAGE->theme->settings->marketing3content)) {
    $marketing3content = $PAGE->theme->settings->marketing3content;
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
    $marketing4heading = $PAGE->theme->settings->marketing4heading;
} else {
    $marketing4heading = '';
}
if (!empty($PAGE->theme->settings->marketing4subheading)) {
    $marketing4subheading = $PAGE->theme->settings->marketing4subheading;
} else {
    $marketing4subheading = '';
}
if (!empty($PAGE->theme->settings->marketing4content)) {
    $marketing4content = $PAGE->theme->settings->marketing4content;
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
    $mainbox1heading = $PAGE->theme->settings->mainbox1heading;
} else {
    $mainbox1heading = '';
}

if (!empty($PAGE->theme->settings->mainbox1content)) {
    $mainbox1content = $PAGE->theme->settings->mainbox1content;
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
    $mainbox2heading = $PAGE->theme->settings->mainbox2heading;
} else {
    $mainbox2heading = '';
}
if (!empty($PAGE->theme->settings->mainbox2content)) {
    $mainbox2content = $PAGE->theme->settings->mainbox2content;
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
    $mainbox3heading = $PAGE->theme->settings->mainbox3heading;
} else {
    $mainbox3heading = '';
}
if (!empty($PAGE->theme->settings->mainbox3content)) {
    $mainbox3content = $PAGE->theme->settings->mainbox3content;
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
    $mainbox4heading = $PAGE->theme->settings->mainbox4heading;
} else {
    $mainbox4heading = '';
}
if (!empty($PAGE->theme->settings->mainbox4content)) {
    $mainbox4content = $PAGE->theme->settings->mainbox4content;
} else {
    $mainbox4content = '';
}
if (!empty($PAGE->theme->settings->mainbox4url)) {
    $mainbox4url = $PAGE->theme->settings->mainbox4url;
} else {
    $mainbox4url = '';
}
if (!empty($PAGE->theme->settings->mainheading)) {
    $mainheading = $PAGE->theme->settings->mainheading;
} else {
    $mainheading = '';
}
if (!empty($PAGE->theme->settings->maincontent)) {
    $maincontent = $PAGE->theme->settings->maincontent;
} else {
    $maincontent = '';
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

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <div class="pull-left">
            <a class="logo" href="<?php echo $CFG->wwwroot;?>"><img src="<?php echo $logourl?>" alt="logo"/>             </a>
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
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </nav>
</header>

<div id="page">
 <div id="page-header">
  <div class="container-fluid">
   <?php if ($bannerheading) { ?>
     <h1 class="new"><?php echo $bannerheading?></h1>
       <?php 
        } else {
        ?>
        <?php 
        }
        ?>
        <?php if ($bannercontent) { ?>
        <p><?php echo $bannercontent?></p>
        <?php 
        } else {
        ?>
        <?php 
        }
        ?>
  </div>
</div>
    
<?php  if ($displaymarketingbox) { ?>
<div class="marketingbox row-fluid">    
<div class="container-fluid">
  <div class="span3">
   <img src="<?php echo $marketing1icon ?>" />        
   <?php if ($marketing1heading) { ?>
   <h1><?php echo $marketing1heading?></h1>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>
   <?php if ($marketing1subheading) { ?>
   <h4><?php echo $marketing1subheading?></h4>
   <?php
   } else {
   ?>
      <?php 
   }
   ?>       
   <?php if ($marketing1content) { ?>
   <p><?php echo $marketing1content?></p>
   <?php
   } else {
   ?>
   <?php 
   }
   ?>
   <?php if ($marketing1url) { ?>
   <a href="<?php echo $marketing1url?>"><button>More</button></a>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>
  </div>
        
  <div class="span3">
   <img src="<?php echo $marketing2icon ?>" />
   <?php if ($marketing2heading) { ?>
   <h1><?php echo $marketing2heading?></h1>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>
   <?php if ($marketing2subheading) { ?>
   <h4><?php echo $marketing2subheading?></h4>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>
        
   <?php if ($marketing2content) { ?>
   <p><?php echo $marketing2content?></p>
   <?php
   } else {
   ?>
   <?php 
   }
   ?>
   <?php if ($marketing2url) { ?>
   <a href="<?php echo $marketing2url?>"><button>More</button></a>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>
   </div>
  <div class="span3">
   <img src="<?php echo $marketing3icon ?>" />
   <?php if ($marketing3heading) { ?>
   <h1><?php echo $marketing3heading?></h1>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>
   <?php if ($marketing3subheading) { ?>
   <h4><?php echo $marketing3subheading?></h4>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>
   <?php if ($marketing3content) { ?>
   <p><?php echo $marketing3content?></p>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>
   <?php if ($marketing3url) { ?>
   <a href="<?php echo $marketing3url?>"><button>More</button></a>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>
  </div>
        
  <div class="span3">
   <img src="<?php echo $marketing4icon ?>" />
   <?php if ($marketing4heading) { ?>
   <h1><?php echo $marketing4heading?></h1>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>
   <?php if ($marketing4subheading) { ?>
   <h4><?php echo $marketing4subheading?></h4>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>       
   <?php if ($marketing4content) { ?>
   <p><?php echo $marketing4content?></p>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>        
   <?php if ($marketing4url) { ?>
   <a href="<?php echo $marketing4url?>"><button>More</button></a>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>        
  </div>
<div class="clearfix"></div>
</div>    
</div>
<?php 
} else {
?>				
<?php 
}
?>  
<?php  if ($displaymainbox) { ?>
<div class="mainbox">
 <div class="container-fluid">
  <?php if ($mainheading) { ?>
   <h1><?php echo $mainheading?></h1>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>
   <?php if ($maincontent) { ?>
   <p><?php echo $maincontent?></p>
   <?php 
   } else {
   ?>
   <?php 
   }
   ?>      
<div class="row-fluid">
   <div class="span3">
    <img src="<?php echo $mainbox1icon ?>" />
    <?php if ($mainbox1heading) { ?>
    <h1><?php echo $mainbox1heading?></h1>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>       
    <?php if ($mainbox1content) { ?>
    <p><?php echo $mainbox1content?></p>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>       
    <?php if ($mainbox1url) { ?>
    <a href="<?php echo $mainbox1url?>"><button>More</button></a>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>      
   </div>
       
   <div class="span3">
    <img src="<?php echo $mainbox2icon ?>" />
    <?php if ($mainbox2heading) { ?>
    <h1><?php echo $mainbox2heading?></h1>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>
    <?php if ($mainbox2content) { ?>
    <p><?php echo $mainbox2content?></p>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>
    <?php if ($mainbox2url) { ?>
    <a href="<?php echo $mainbox2url?>"><button>More</button></a>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>
   </div>
       
   <div class="span3">
    <img src="<?php echo $mainbox3icon ?>" />
    <?php if ($mainbox3heading) { ?>
    <h1><?php echo $mainbox3heading?></h1>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>
    <?php if ($mainbox3content) { ?>
    <p><?php echo $mainbox3content?></p>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>
    <?php if ($mainbox3url) { ?>
    <a href="<?php echo $mainbox3url?>"><button>More</button></a>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>
   </div>
       
       
   <div class="span3">
    <img src="<?php echo $mainbox4icon ?>" />
    <?php if ($mainbox4heading) { ?>
    <h1><?php echo $mainbox4heading?></h1>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>
    <?php if ($mainbox4content) { ?>
    <p><?php echo $mainbox4content?></p>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>
    <?php if ($mainbox4url) { ?>
    <a href="<?php echo $mainbox4url?>">
    <button>More</button>
    </a>
    <?php 
    } else {
    ?>
    <?php 
    }
    ?>
   </div>
        
        
<div class="clearfix"></div>
    </div>
    </div>
    </div>
<?php 
} else {
?>				
<?php 
}
?>
    
    <div class="container-fluid">
    <div id="page-content" class="row-fluid">
        <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
                <section id="region-main" class="<?php echo $regionmain; ?>">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
                
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
               <p><i class="fa fa-map-marker"></i> <?php echo $address?></p>
               <?php 
               }
               ?>
             </li>
                 
            <li>
               <?php if ($mobile) { ?>
               <p><i class="fa fa-mobile-phone"></i> <?php echo $mobile?></p>
               <?php 
               } 
               ?>
            </li>
                 
            <li>
               <?php if ($mail) { ?>
               <p><i class="fa fa-envelope"></i> <?php echo $mail?></p>
               <?php 
               } 
               ?>
            </li>
                 
             <li>
               <?php if ($phone) { ?>
               <p><i class="fa fa-phone"></i> <?php echo $phone?></p>
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
    
//$( "div#frontpage-course-list > h2" ).addClass( "all" );
$("div.frontpage-course-list-all").prev().addClass( "all" );    
var elements = document.getElementsByClassName('all');
for(var i=0; i<elements.length; i++){
    if(elements[i].innerHTML == 'Available courses'){
    elements[i].innerHTML = "All Courses";
        break;
    }   
 }     
  $( "div.frontpage-course-list-all" ).addClass( "clearfix" );
$( ".block > .content" ).addClass( "clearfix" );        
    </script>
    <script>
			new UISearch( document.getElementById( 'sb-search' ) );
		</script>
    <script>
 (function($){
$(function(){
        var frontpageCourseListAll = $('.frontpage-course-list-all');
        var totalPageWidth = $(frontpageCourseListAll).width();
        var contentBoxWidth = frontpageCourseListAll.find('.coursebox:first').outerWidth(true);
        var allBoxes = frontpageCourseListAll.find('.coursebox');
        var totalBoxes = allBoxes.length;
        var boxesPerRow = Math.floor(totalPageWidth / contentBoxWidth);
        var temp2, temp3, shadowPAGE=$('<div class="shadow-frontpage-course-list-all"></div>');
        for (temp2=0; temp2<boxesPerRow; temp2++) {
                shadowPAGE.append('<div class="content-column content-column-'+ temp2 +'"></div>');
        }
        for (temp2=0, temp3=0; temp2<totalBoxes; temp2++, temp3=(temp3<(boxesPerRow-1)?temp3+1:0)) {
                shadowPAGE.find('.content-column-'+temp3).append($(allBoxes[temp2]).clone());
        }
        shadowPAGE.append('<div class="clear"></div>');
        frontpageCourseListAll.html(shadowPAGE);
});

}(jQuery));
    </script>

</body>
</html>