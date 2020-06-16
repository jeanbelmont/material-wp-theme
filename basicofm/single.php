<?php
get_header();
//
while (have_posts()) {
    the_post(); ?>
<div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <div class="demo-back">
          <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="<?php print site_url()?>" title="go back" role="button">
            <i class="material-icons" role="presentation">arrow_back</i>
          </a>
        </div>
        <div class="demo-blog__posts mdl-grid">
          <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php print get_the_post_thumbnail_url(get_the_ID(),'full')?>);">
              <h3><?php the_title();?></h3>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              <div class="minilogo" style="background-image: url(<?php print get_theme_file_uri('/assets/images/avatar.png')?>);"></div>
              <div>
                <strong>post by: <?php the_author();?></strong>
                <span><?php print get_the_date( 'F j, Y' );?></span>
              </div>
              <div class="section-spacer"></div>
              <div class="meta__favorites">
                425 <i class="material-icons" role="presentation">favorite</i>
                <span class="visuallyhidden">favorites</span>
              </div>
              <div>
                <i class="material-icons" role="presentation">bookmark</i>
                <span class="visuallyhidden">bookmark</span>
              </div>
              <div>
                <i class="material-icons" role="presentation">share</i>
                <span class="visuallyhidden">share</span>
              </div>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
              <p><?php the_content();?></p>
            </div>
            <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">
              <form>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <textarea rows=1 class="mdl-textfield__input" id="comment"></textarea>
                  <label for="comment" class="mdl-textfield__label">Join the discussion</label>
                </div>
                
                  <i class="material-icons" role="presentation">send</i><span class="visuallyhidden">add comment</span>
                
              </form>
              <div class="comment mdl-color-text--grey-700">
                <header class="comment__header">
                  <img src="<?php print get_theme_file_uri('assets/images/co1.jpg')?>" class="comment__avatar">
                  <div class="comment__author">
                    <strong>Janette Splayd</strong>
                    <span>2 days ago</span>
                  </div>
                </header>
                <div class="comment__text">
                  In in culpa nulla elit esse. Ex cillum enim aliquip sit sit ullamco ex eiusmod fugiat. Cupidatat ad minim officia mollit laborum magna dolor tempor cupidatat mollit. Est velit sit ad aliqua ullamco laborum excepteur dolore proident incididunt in labore elit.
                </div>
                <nav class="comment__actions">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>
                  </button>
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>
                  </button>
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>
                  </button>
                </nav>
                <div class="comment__answers">
                  <div class="comment">
                    <header class="comment__header">
                      <img src="<?php print get_theme_file_uri('/assets/images/co2.jpg')?>" class="comment__avatar">
                      <div class="comment__author">
                        <strong>John Dufry</strong>
                        <span>2 days ago</span>
                      </div>
                    </header>
                    <div class="comment__text">
                      Yep, agree!
                    </div>
                    <nav class="comment__actions">
                      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>
                      </button>
                      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>
                      </button>
                      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>
                      </button>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
            <a href="i#" class="demo-nav__button" onclick="preventDefault()">
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation" onclick="preventDefault()">
                <i class="material-icons">arrow_back</i>
              </button>
              Newer
            </a>
            <div class="section-spacer"></div>
            <a href="#" class="demo-nav__button" onclick="preventDefault()">
              Older
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation" onclick="preventDefault()">
                <i class="material-icons">arrow_forward</i>
              </button>
            </a>
          </nav> -->
          <nav class="demo-nav mdl-cell mdl-cell--12-col">
          <a href="#" class="demo-nav__button" title="show more">
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons" role="presentation">arrow_back</i>
            </button>
            Nuevos    
        </a>
        <div class="section-spacer"></div>
        <a href="#" class="demo-nav__button" title="show more">
            Anteriores
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons" role="presentation">arrow_forward</i>
            </button>
        </a>
        </nav>
    </div> <!-- demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded -->
<?php
} // end WHILE
//
get_footer();
?>
