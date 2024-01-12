<?php
// Template Name: shop-games
get_header(); ?>
 
        <div class="primaryAndSecondaryContainer">
          <div class="primaryAndSecondaryContent">
            <div class="primaryContentContainer">
              <section class="primaryContent" role="main">
<div class="pageTitleContainer blockWrap_bada3b3fbe314c799294eadc510f1394 fsMed txa1 bmg0 lstsy1 bw0 plxBg sy0 innerBanner" style="background-image:url('<?php echo get_field('inner_banners'); ?>')">
  <div class="blockContent pageTitleContent block_bada3b3fbe314c799294eadc510f1394  layoutA">
    <h1 class="pageTitle"><?php echo get_field('page_title'); ?></h1>
  </div>
</div>
<div class="blockContainer blockWrap_fc132ce63a634db6918bf8043425882f fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0">
  <div class="blockContent block_fc132ce63a634db6918bf8043425882f  layoutA">
    <div class="blockText">
  <h2 class="contentTitle"><?php echo get_field('section_1_heading'); ?></h2>
  <div class="blockInnerContent" ><p><?php echo get_field('contact_form_heading'); ?></p></div>
</div><!-- /blockText-->
  </div><!-- /blockContent -->
</div><!-- /blockContainer -->
<div class="blockContainer blockWrap_a034a8ba226049999fe93b61ad311b3e fsMed txa0 bmg0 lstsy1 bw0 sy0">
  <div class="blockContent block_a034a8ba226049999fe93b61ad311b3e  ">
    <div class="blockInnerContent">
<div class="container" style="width:80%;">

<?php echo do_shortcode('[contact-form-7 id="a877e3f" title="Contact form1"]'); ?>

</div>
<!-- <script src="https://forms.marketing360.com/load.js?id=632399fea24d0c08f73314de"></script> -->
  </div><!-- /blockContent -->
</div><!-- /blockContainer -->
              </section><!-- /primaryContent -->
            </div><!-- /primaryContentContainer -->
          </div><!-- /primaryAndSecondaryContent -->
        </div><!-- /primaryAndSecondaryContainer -->

        <?php get_footer(); ?>