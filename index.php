<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<?php get_header(); ?>

<div class="content">
    <div class="container">

        <!-- START: PAGE CONTENT -->
        <div class="blog">
            <div class="blog-grid">
                <div class="grid-sizer">

                    <!--    envoie vers single-content.php     -->
                    <!-- ~~~~~~~~~~~~~~~ POSTS ~~~~~~~~~~~~~~~ -->
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                      <!-- envoie vers content.php -->
                    <?php get_template_part( 'content' ); ?>

                  <?php endwhile; endif; ?>
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                </div>
            </div> <!-- .blog-grid -->

            <div class="pagination">
                <a class="next page-numbers" href="index.php"><i class="rsicon rsicon-chevron_left"></i></a>
                <span class="page-numbers current">1</span>
                <a class="page-numbers" href="index.php">2</a>
                <a class="page-numbers" href="index.php">3</a>
                <span>...</span>
                <a class="page-numbers" href="index.php">36</a>
                <a class="next page-numbers" href="index.php"><i class="rsicon rsicon-chevron_right"></i></a>
            </div>
            <!-- .pagination -->
        </div>
        <!-- .blog -->
        <!-- END: PAGE CONTENT -->
    </div>
    <!-- .container -->
</div>
<!-- .content -->

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<?php get_footer(); ?>



