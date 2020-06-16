<?php
get_header();
//
?>
    <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <div class="demo-blog__posts mdl-grid">
          <div class="mdl-card coffee-pic mdl-cell mdl-cell--8-col">
            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php print get_header_image()?>);">
              <h3><?php print bloginfo('name')?></h3>
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo" style="background-image: url(<?php print get_theme_file_uri('/assets/images/avatar.png')?>);"></div>
              <div>
                <strong><?php print bloginfo('description')?></strong>
              </div>
            </div>
          </div>
          <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop">
            <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent">
              <i class="material-icons mdl-color-text--white" role="presentation">add</i>
              <span class="visuallyhidden">add</span>
            </button>
            <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
              <?php
              if( has_custom_logo()){
               $logoImg = wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full');
               echo "<img src='$logoImg[0]'>";
              }
              else{
                ?>
                <img src="<?php print get_theme_file_uri('/assets/images/logo.png') ?>">
                <?php
              }
              ?>
              full stack developer
            </div>
            <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
              <div>
                <strong>Acerca del autor</strong>
              </div>
              <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="menubtn">
                <li class="mdl-menu__item"><a target="_blank" href="https://www.linkedin.com/in/juan-jose-cruz-ortiz">About</a></li>
                <li class="mdl-menu__item"><a target="_blank" href="https://wa.me/5215546423435?text=Me%20encantó%20tu%20trabajo%20¿Cuando%20empezamos%20a%20trabajar?">Message</a></li>
                <li class="mdl-menu__item"><a target="_blank" href="https://github.com/jeanbelmont/material-wp-theme">Github</a></li>
              </ul>
              <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">more_vert</i>
                <span class="visuallyhidden">show menu</span>
              </button>
            </div>
          </div>
          <!-------------- loop -------------------->
          <?php
        while (have_posts()) {
          the_post(); ?>
        <div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col">
                <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php print get_the_post_thumbnail_url(get_the_ID(),'full')?>);">
                  <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                </div>
                <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
                  <?php print the_excerpt();?>
                </div>
                <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                  <div class="minilogo"  style="background-image: url(<?php print get_theme_file_uri('/assets/images/avatar.png')?>);"></div>
                  <div>                
                    <span>Creado: <?php print get_the_date( 'F j, Y' )?></span> 
                    <span>Modificado: <?php print get_the_modified_date( 'F j, Y' )?></span>
                  </div>
                  <div class="mdl-layout-spacer"></div>
                    <a href="<?php print get_post_meta(get_the_ID(), 'url_fuente', true);?>" target="_blank" rel="noopener noreferrer" class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect">publicación original</a>
                </div>
              </div>
    <?php
}
?>
<!--Nav-->
<nav class="demo-nav mdl-cell mdl-cell--12-col">
  <div class="section-spacer"></div>
  <a href="#" class="demo-nav__button" title="show more">
    More
    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
      <i class="material-icons" role="presentation">arrow_forward</i>
    </button>
  </a>
</nav>
</div> <!-- demo-blog__posts mdl-grid -->
<?php
//
get_footer();