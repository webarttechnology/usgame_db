
<?php
// Template Name: contact-us
get_header(); ?>

        <div class="primaryAndSecondaryContainer">
          <div class="primaryAndSecondaryContent">
            <div class="primaryContentContainer">
              <section class="primaryContent" role="main">
<div class="pageTitleContainer blockWrap_fac14fa597fb4d39a91d3afc7cfe9375 fsMed txa1 bmg0 lstsy1 bw0 plxBg sy0 innerBanner" style="background-image:url('<?php echo get_field('inner_banner'); ?>')">
  <div class="blockContent pageTitleContent block_fac14fa597fb4d39a91d3afc7cfe9375  layoutA">
    <h1 class="pageTitle"><?php echo get_field('page_title'); ?></h1> 
  </div>
</div>
<div class="blockContainer blockWrap_e13994dd2a5948908289e43913215fba fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0">
  <div class="blockContent block_e13994dd2a5948908289e43913215fba  layoutA">
    <div class="blockText">
  <h2 class="contentTitle"><?php echo get_field('section_1_heading'); ?></h2> 
</div><!-- /blockText-->
  </div><!-- /blockContent -->
</div><!-- /blockContainer -->
<div class="blockContainer blockWrap_fcea5f2ff4664108b5cd63f7851e9edf fsMed txa0 bmg0 lstsy1 bw0 sy0">
  <div class="blockContent block_fcea5f2ff4664108b5cd63f7851e9edf  ">
    <div class="blockInnerContent">
      <!-- <div class="maxWidth--content"><script src="https://forms.marketing360.com/load.js?id=632399fda24d0c08f73314c8"></script></div>
    </div> -->
    <div class="container" style="width:80%;">

<?php echo do_shortcode('[contact-form-7 id="b30e257" title="Contact Form 2"]'); ?>

</div>
  </div><!-- /blockContent -->
</div><!-- /blockContainer -->
              </section><!-- /primaryContent -->
            </div><!-- /primaryContentContainer -->
          </div><!-- /primaryAndSecondaryContent -->
        </div><!-- /primaryAndSecondaryContainer -->

        <?php get_footer(); ?>