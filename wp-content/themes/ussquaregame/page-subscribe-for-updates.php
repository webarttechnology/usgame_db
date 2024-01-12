
<?php
// Template Name: subscribe-for-update
get_header(); ?>

        <div class="primaryAndSecondaryContainer">
          <div class="primaryAndSecondaryContent">
            <div class="primaryContentContainer">
              <section class="primaryContent" role="main">
<div class="pageTitleContainer blockWrap_b60f8d6adb30463f86449529099e6ae5 fsMed txa1 bmg0 lstsy1 bw0 plxBg sy0 innerBanner" style="background-image:url('<?php echo get_field('inner_banner'); ?>')">
  <div class="blockContent pageTitleContent block_b60f8d6adb30463f86449529099e6ae5  layoutA">
    <h1 class="pageTitle"><?php echo get_field('page_title'); ?></h1>
  </div>
</div>
<div class="blockContainer blockWrap_dcf93890206e4a6780c6ecdad5f3460c fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0">
  <div class="blockContent block_dcf93890206e4a6780c6ecdad5f3460c  layoutA">
    <div class="blockText">
  <h2 class="contentTitle"><span class="maxWidth--contentTitle"><?php echo get_field('section_1_heading'); ?></span></h2>
</div><!-- /blockText-->
  </div><!-- /blockContent -->
</div><!-- /blockContainer -->
<div class="blockContainer blockWrap_c0fdda9ccf884d1bb9f44e80f683e0dc fsMed txa0 bmg0 lstsy1 bw0 sy0">
  <div class="blockContent block_c0fdda9ccf884d1bb9f44e80f683e0dc  ">
    <div class="blockInnerContent">
      <!-- <div class="maxWidth--content"><script src="https://forms.marketing360.com/load.js?id=632399fea24d0c08f73314de"></script></div> -->

      <div class="container" style="width:80%;">

<?php echo do_shortcode('[contact-form-7 id="a877e3f" title="Contact form1"]'); ?>

</div>

    </div>
  </div><!-- /blockContent -->
</div><!-- /blockContainer -->
              </section><!-- /primaryContent -->
            </div><!-- /primaryContentContainer -->
          </div><!-- /primaryAndSecondaryContent -->
        </div><!-- /primaryAndSecondaryContainer -->
        <?php get_footer(); ?>