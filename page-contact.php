<?php get_header(); ?>
    <main id="main"  class="c-fadein">
        <h2 class="c-section__title" data-en="Contact">お問い合わせ</h2>
        <p class="p-contact-txt">内容確認でき次第、返信させていただきます。</p>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
