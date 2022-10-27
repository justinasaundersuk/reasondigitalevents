
<?php
/**
 * Template Name: Events
 */

  // should use:
  // wp_enqueue_style( 'absolute-styles', 'style.css', false );

  // wp_register_style(
  //   'absolute-styles',
  //   get_template_directory_uri() . '/style.css'
  // );

?>

<?php get_header(); ?>

<body>

  <main role="main" id="content">
    <section class="hero-container">
        <div class="hero">
            <h1 title="Get online week 2021">Reason to go Events</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </section>
    <section class="events">

<?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'Event',
        'post_status' => 'publish',
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
            $post_query->the_post();

            $event_name = get_field('event_name');
            $event_location = get_field('event_location');
            $event_date = get_field('event_date');
    ?>

        <article id="post-<?php the_ID(); ?>" class="event" role="article">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/events-reason-digital.jpg" title="Reason Digital events" alt="The Reason Digital team on an event day" />
            </figure>
            <div class="event-details">
                <div class="description">
                    <h3 title="<?php echo $event_name; ?>" alt="<?php echo $event_name; ?>"><?php echo $event_name; ?></h3>
                    <h4 title="When and where" alt="When and where"><strong>When and where:</strong> <?php echo $event_location; ?> - <?php echo $event_date; ?></h4>
                </div>
                <div class="details">
                    <p>Published <time datetime="<?php echo the_time('Y-m-j'); ?>"><?php echo the_time(get_option('date_format')); ?></time> by <?php the_author_posts_link(); ?>.
                    Filed under <a href="#" rel="category"><?php the_category(', '); ?></a>.<?php edit_post_link('Admin Edit', ' ', '.'); ?></p>
                </div>
            </div>
        </article>

<?php
            }
        }

    wp_reset_query();
?>
    </section>

    <?php get_footer(); ?>

  </main>
</body>
</html>

