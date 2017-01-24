<?php
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
?>
<?php require_once(dirname(__FILE__).'/header.php'); ?>

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

 <?php require_once(dirname(__FILE__).'/footer.php'); ?>      