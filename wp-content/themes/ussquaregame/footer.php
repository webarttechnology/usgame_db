<div class="footerContainer">
  <footer class="footerContent">
  	<div class="footerInner">
<div class="blockContainer blockWrap_ab47e0ce60cf4b18b64898a982e9ad5d ">
  <div class="blockContent block_ab47e0ce60cf4b18b64898a982e9ad5d  ">
    <div class="blockInnerContent">
      <a href="<?php echo get_field('logo_link',55) ?>"><img src="<?php echo get_field('footer_logo',55) ?>" alt="footer logo" width="180px"></a>
    </div> 
  </div><!-- /blockContent -->
</div><!-- /blockContainer -->
<div class="blockContainer blockWrap_fa227e3543be48758bbceba452d1da9b ">
  <div class="blockContent block_fa227e3543be48758bbceba452d1da9b ">
    <div class="blockText">
  <div class="blockInnerContent" ><p><?php echo get_field('footer_copyright',55) ?></p></div> 
</div><!-- /blockText-->
  </div><!-- /blockContent -->
</div><!-- /blockContainer -->
<div class="blockContainer blockWrap_d3a1277f16464e0f9c9157616344e55b ">
  <div class="blockContent block_d3a1277f16464e0f9c9157616344e55b ">
    <div class="blockText">  
  <div class="blockInnerContent" ><p><?php echo get_field('policy_text_area',55) ?></p></div>
</div><!-- /blockText-->
  </div><!-- /blockContent -->
</div><!-- /blockContainer -->
<div class="blockContainer socialIconsContainer blockWrap_c5b76773e89b444899c16c5c1c3e1d70 ">
  <div class="blockContent block_c5b76773e89b444899c16c5c1c3e1d70 txa1">
        <ul class="iconGroup socialIcons footerSocialIcons">

        <?php 
        
        $social_fields = CFS()->get( 'social_icons_loop',55 );
foreach ( $social_fields as $field ) {
   
  ?>
      <li><a target="_blank" rel="noopener noreferrer" href="<?php  echo $field['social_icons_link']; ?>" class="zocial <?php  echo $field['social_icons']; ?>" aria-label="<?php  echo $field['social_icons']; ?>"></a></li>
    </ul>
    <?php } ?>
      </div><!-- /blockContent -->
</div><!-- /blockContainer -->
      <div class="scCredit"><a href="  <?php echo get_field('design_and_developed_link',55) ?>" target="_blank" rel="nofollow"><?php echo get_field('design_and_developed_text',55) ?></a></div>  
    </div>
  </footer>
</div><!--  /footerContainer -->
      </div> <!-- /pageContainer -->
    </div><!-- /siteInnerWrapper -->
  </div><!-- siteOuterWrapper -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

  <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>window.jQuery || document.write('<script src="https://usquaregames.com/jquery-1.12.4.min.js">\x3C/script>')</script>
<script src="https://usquaregames.com/siteBundle.js"></script>
<style type="text/css">
/*!
  Zocial Butons
  http://zocial.smcllns.com
  by Sam Collins (@smcllns)
  License: http://opensource.org/licenses/mit-license.php
*/
/* Reference icons from font-files
** Base 64-encoded version recommended to resolve cross-site font-loading issues
*/
@font-face {
	font-family: "zocial";
	src: url("https://usquaregames.com/zocial.eot");
	src: url("https://usquaregames.com/zocial.eot?#iefix") format("embedded-opentype"),
		url(data:application/x-font-woff;charset=utf-8;base64,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),
		url("https://usquaregames.com/zocial.woff") format("woff"),
		url("https://usquaregames.com/zocial.ttf") format("truetype"),
		url("https://usquaregames.com/zocial.svg#zocial") format("svg");
	font-weight: normal;
	font-style: normal;
}
@media screen and (-webkit-min-device-pixel-ratio:0) {
	@font-face {
		font-family: "zocial";
		src: url("https://usquaregames.com/zocial.svg#zocial") format("svg");
	}
}
</style>
<!--[if lte IE 8 ]><script src="/scIE8pseudoElems.js"></script><![endif]-->
<script id="scFixedNavHelper">
(function(window, $, Modernizr, undefined) {
  var $body = $('body'),
      layout = $body.attr('data-sc-layout'),
      isBottomNav = layout === 'j' || layout === 'k',
      $fixedElem = $('.fixedNav'),
      $propElem = $fixedElem.next(),
      usingFixedNav = false,
      winWidth = $(window).width();
  if(isBottomNav){
    $propElem = $('.footerContainer').length ? $('.footerContainer') : $('.primaryAndSecondaryContainer');
  }
  function setMargin() {
    var height = $fixedElem.outerHeight();
    var cssProp = isBottomNav ? 'margin-bottom' : 'margin-top'
    $propElem.css(cssProp, height);
    usingFixedNav = true;
  }
  function fixedNavProp(){
    if(window.scSuppressFixedNavHelper || $('html').hasClass('tuckContent')){
      undoFixedNav();
    } else {
      setMargin();
    }
  }
  function undoFixedNav(){
    if(!isBottomNav){
      $propElem.css({marginTop: ''});
      usingFixedNav = false;
    } else {
      setMargin();
    }
  }
  function adaptFixedNav(e){
    if($(window).width() >= 768 || isBottomNav) { // large(ish) screen adaptations, or fixed-at-bottom
      fixedNavProp();
    } else if(usingFixedNav) { // small screen adapatations
      undoFixedNav();
    }
  }
  if($fixedElem.length){
    if ($('.navContainer').length) {
      $body.on('mobileNavDestroyed', fixedNavProp);
      $body.on('mobileNavBuilt', undoFixedNav);
    } else {
      $body.on('enteredLargeScreenMode', fixedNavProp);
      $body.on('enteredSmallScreenMode', undoFixedNav); 
    }
    $(document).ready(function(){
      // only need to trigger this on dom-ready if we're at tablet/desktop widths:
      // if mobile, dom-ready will trigger mobileNavBuilt and then undoFixedNav will run in response
      if(winWidth >= 768 || isBottomNav) { fixedNavProp(); }
    });
    // debounced resize adaptive handler and fontsLoaded handler
    $(window).on('resize', $.debounce(100, adaptFixedNav)).on('fontsLoaded', adaptFixedNav);
    // respond to css updates (design-tool-only) or other scripts that may have affected nav/header height
    $body.on('cssUpdated updateFixedNav', adaptFixedNav);
  }
})(this, jQuery, Modernizr);
</script>
<a id="navTrigger" href="#" style="display:block;" aria-label="Menu">
  <span class="navIcon">
      <svg xmlns="http://www.w3.org/2000/svg" class="navIcon-svg--dotsVert navIcon-svg--w3" viewBox="0 0 164 32">
  <path class="path1" d="M31.299 15.65c0 8.643-7.007 15.65-15.65 15.65s-15.65-7.007-15.65-15.65c0-8.643 7.007-15.65 15.65-15.65s15.65 7.007 15.65 15.65z"></path>
  <path class="path2" d="M97.674 15.65c0 8.643-7.007 15.65-15.65 15.65s-15.65-7.007-15.65-15.65c0-8.643 7.007-15.65 15.65-15.65s15.65 7.007 15.65 15.65z"></path>
  <path class="path3" d="M164.399 15.65c0 8.643-7.007 15.65-15.65 15.65s-15.65-7.007-15.65-15.65c0-8.643 7.007-15.65 15.65-15.65s15.65 7.007 15.65 15.65z"></path>
</svg>
  </span>
</a>
<script src="https://usquaregames.com/collections.js" data-collections="aHR0cHM6Ly9hcGkubXl3ZWJzaXRlczM2MC5jb20vZWQwNDM2ZjViMDc0NGJhYTkxMDgzMmI2YjZhYmQ1ZTkvYy97dHlwZX0="></script>

<?php wp_footer(); ?>

</body>

<!-- Mirrored from usquaregames.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 08:03:46 GMT -->
</html>