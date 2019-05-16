<div class="grid-item">
  <article class="post-box animate-up">
    <div class="post-media">
      <div class="post-image">
        <a href="single.html">
          <?php if ( has_post_thumbnail() ) the_post_thumbnail( 'thumbnail' ); ?>
        </a>
      </div>
    </div>

    <div class="post-data">
      <time class="post-datetime" datetime="2015-03-13T07:44:01+00:00">
        <span class="day">03</span>
        <span class="month">MAY</span>
      </time>

      <div class="post-tag">
        <a href="index.php">#like4like</a>
        <a href="index.php">#follow4follow</a>
      </div>

      <h3 class="post-title">
        <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a>
      </h3>

      <div class="post-info">
        <a href="index.php"><i class="rsicon rsicon-user"></i>by admin</a>
        <a href="index.php"><i class="rsicon rsicon-comments"></i>56</a>
      </div>
    </div>
  </article>
</div>
