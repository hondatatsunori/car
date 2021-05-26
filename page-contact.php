<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
  <?php //投稿のスラッグを所得
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
  ?>
<form class="form">
  <?php echo do_shortcode('[contact-form-7 id="38" title="お問い合わせフォーム"]'); ?>
</form>
<?php get_footer(); ?>
