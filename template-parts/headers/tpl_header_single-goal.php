<div class="page-header tg-header">
  <div class="row">
    <div class="small-12 large-10 columns">

        <span>
          <a href="<?php echo esc_url( get_permalink( $post->post_parent ) ); ?>"><?php echo get_the_title( $post->post_parent ); ?></a>
        </span>
        <h1 class="page-title margin-bottom-1-5"><?php the_title(); ?></h1>

        <ul class="inline-list tg-nav">
          <li class="reversed-text">Navigate to:</li>
          <li class="reversed-text"><a href="#targets">Targets and Goals</a></li>
          <li class="reversed-text"><a href="#evidence">Evidence</a></li>
          <li class="reversed-text"><a href="#faq">FAQs</a></li>
        </ul>

    </div>
  </div>
</div>