
<?php
// Template Name: blog
get_header(); ?>
        <div class="primaryAndSecondaryContainer">
          <div class="primaryAndSecondaryContent">
            <div class="primaryContentContainer">
              <section class="primaryContent" role="main">
<div class="pageTitleContainer blockWrap_e551e9827c7b41e88778c47ece67b2b4 fsMed txa1 bmg0 lstsy1 bw0 plxBg sy0 innerBanner" style="background-image:url('<?php echo get_field('inner_banner'); ?>')">
  <div class="blockContent pageTitleContent block_e551e9827c7b41e88778c47ece67b2b4  layoutA">
    <h1 class="pageTitle"><?php echo get_field('page_title'); ?></h1> 
  </div>
</div>
<div class="itemsCollectionContainer blockWrap_b7357fe971eb4539959d9f80fc60627a fsMed txa0 bmg0 lstsy1 bw0 sy0" itemscope itemtype="http://schema.org/Blog">
  <div class="blockContent block_b7357fe971eb4539959d9f80fc60627a  layoutA" data-block-id="b7357fe971eb4539959d9f80fc60627a">
    <div class="itemsCollectionContent items_b7357fe971eb4539959d9f80fc60627a gridView oneColCenter oneColWdth2 cols1 itmBw0 itmSy1 txa0" data-columns="1" data-items-list-style-id="b7357fe971eb4539959d9f80fc60627a">
<div class="item itemPreview" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
  <div class="itemContent">
      <h2 data-prop="true" class="contentTitle" itemprop="name">
      <?php echo get_field('section_1_title'); ?>
      </h2>
<div class="itemInnerContent truncateContent" itemprop="description"><?php echo get_field('section_1_content'); ?></div> 
  </div>
</div>
    </div>
  </div>
</div>
              </section><!-- /primaryContent -->
            </div><!-- /primaryContentContainer -->
          </div><!-- /primaryAndSecondaryContent -->
        </div><!-- /primaryAndSecondaryContainer -->

        <?php get_footer(); ?>