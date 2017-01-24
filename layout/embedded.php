<?php require_once(dirname(__FILE__).'/header.php'); ?>

<body <?php echo $OUTPUT->body_attributes(); ?>>
<?php echo $OUTPUT->standard_top_of_body_html() ?>
<div id="page">
    <div id="page-content" class="clearfix">
        <?php echo $OUTPUT->main_content(); ?>
    </div>
 <?php require_once(dirname(__FILE__).'/footer.php'); ?>