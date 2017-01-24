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
            <a href="<?php echo $hasfacebook; ?>" target="_blank" >
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
            <a href="<?php echo $hastwitter; ?>" target="_blank" >
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
            <a href="<?php echo $haspintirest; ?>" target="_blank" >
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
            <a href="<?php echo $hasgoogleplus; ?>" target="_blank" >
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
            <a href="<?php echo $haslinkdin; ?>" target="_blank" >
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
    <a class="arrow" href="#" title="<?php echo get_string('backtotop', 'theme_eduhub')?>"><i class="fa fa-arrow-up"></i></a> 
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