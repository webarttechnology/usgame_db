<?php
// Template Name: our-story
get_header(); ?>
  
        <div class="primaryAndSecondaryContainer">
          <div class="primaryAndSecondaryContent">
            <div class="primaryContentContainer">
              <section class="primaryContent" role="main">
<div class="pageTitleContainer blockWrap_a29afdf316c74d719a4315f5786cba44 fsMed txa1 bmg0 lstsy1 bw0 plxBg sy0 innerBanner" style="background-image:url('<?php echo get_field('inner_banners'); ?>')">
  <div class="blockContent pageTitleContent block_a29afdf316c74d719a4315f5786cba44  layoutA">
    <h1 class="pageTitle"><?php echo get_field('page_title'); ?></h1> 
  </div>
</div>
<div class="blockContainer blockWrap_aa5da84df73f47deb094e820c08d1683 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0">
  <div class="blockContent block_aa5da84df73f47deb094e820c08d1683  layoutA">
    <div class="blockText">
  <h2 class="contentTitle"><span class="maxWidth--contentTitle"><?php echo get_field('section_1_title'); ?></span></h2>   
  <div class="blockInnerContent" ><div class="maxWidth--content"><p><?php echo get_field('section_1_content'); ?></p></div></div>
</div><!-- /blockText-->
  </div><!-- /blockContent -->
</div><!-- /blockContainer -->
              </section><!-- /primaryContent -->
            </div><!-- /primaryContentContainer -->
          </div><!-- /primaryAndSecondaryContent -->
        </div><!-- /primaryAndSecondaryContainer -->
      
        <?php get_footer(); ?>