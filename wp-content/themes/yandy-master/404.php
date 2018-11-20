<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package yandy-master
 */

get_header();
?>

<section class="blog-banner container">

  <div class="img-fluid">
    <img src="<?php echo get_template_directory_uri();?>/img/404.jpg" alt="404">
  </div>
</section>

<div class="about-blog-body simple-blog-body">
  <div class="about-blog-body-top"></div>

  <section class="blog-header">

    <div class="container">
      <div  class="snow-box head-snow-box blog-text">

        <div class="snow-box__head">
          <h1 class="top-h1-2 subtitle-h1"><span><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'yandy-master' ); ?></span></h1>
        </div>

      </div>

    </div>
  </section>
</div>

<?php
get_footer();
