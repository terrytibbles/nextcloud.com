<!-- This is the blog list. -->
<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/blogroll.css" rel="stylesheet">
<!--<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer", "modules/submenu"])
	});
</script>-->
</head>

<div class="background blogroll-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('<span class="avoidwrap">Nextcloud News</span>');?><a href="/blogfeed" class="rss-button"><img style="vertical-align: top;" width=35 class="img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/rss.png"></img></a></h1>
				<h2><?php echo $l->t('What is going on in and around Nextcloud?');?></h2>
			</div>
		</div>
	</div>
</div>
<section class="section--blogroll">
<div class="container">
<div class="row">
    <div class="text-center">
        <?php get_search_form(); ?>
    </div>
</div>
    <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
            <?php _e('Sorry, no results were found.', 'roots'); ?>
        </div>
    <?php endif; ?>
<div class="row">
    <?php $i = 1; ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php if ($i % 3 == 0) { ?> <!-- for every three posts we have to put in a row... -->
            <div class="row">
                <div class="col-md-4">
                    <?php get_template_part('templates/content', get_post_format()); ?>
                </div>
            </div>
        <?php } else { ?> <!-- no row needed... -->
            <div class="col-md-4">
                <?php get_template_part('templates/content', get_post_format()); ?>
            </div>
        <?php }  ?>
        <?php $i++; ?>
    <?php endwhile; ?>
</div>
    <?php if ($wp_query->max_num_pages > 1) : ?>
    <nav class="post-nav">
        <ul class="pager">
        <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
        <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
        </ul>
    </nav>
    <?php endif; ?>
</div>
</section>
