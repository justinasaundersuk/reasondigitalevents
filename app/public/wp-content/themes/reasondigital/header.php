
<?php
  $my_theme = wp_get_theme('reason-digital');

  // do_action('wp_enqueue_scripts');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reason Digital Technical Test (Wordpress) - Justin Saunders - <?php echo($my_theme) ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
  </head>

  <body>

    <a class="skip-to-main-content" href="#content" alt="Skip to main content">Skip to main content</a>
    <header>
      <nav class="nav" role="navigation" aria-labelledby="primary-navigation">
        <div class="nav-header">
          <div class="search">
            <a href="#" class="search" title="Search" alt="Search"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
          </div>
          <div class="donate"><a href="#" class="underscore" title="Learn" alt="Learn">Learn</a><a href="#" class="highlight" title="Donate" alt="Donate">Donate</a></div>
        </div>
        <div class="nav-main">
          <a href="<?php echo get_page_link(get_page_by_path('home')); ?>" title="Good Things Foundation" alt="Return to Good Things Foundation's homepage">
            <div class="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/fingerprint-inverse.svg" width="50" height="60" alt="Good Things Foundation thumb print site logo" />
              <div class="brand" alt="Good Things Foundation" title="Good Things Foundation">Good Things <span>Foundation</span></div>
            </div>
          </a>
          <ul class="nav" id="primary-navigation">
            <li><a href="<?php echo get_page_link(get_page_by_path('events')); ?>" title="Home" alt="Home">Home</a></li>
            <li><a href="<?php echo get_page_link(get_page_by_path('events')); ?>" title="What we do" alt="What we do">What we do</a></li>
            <li><a href="<?php echo get_page_link(get_page_by_path('events')); ?>" title="The digital divide" alt="The digital divide">The digital divide</a></li>
            <li><a href="<?php echo get_page_link(get_page_by_path('events')); ?>" title="Get involved" alt="Get involved">Get involved</a></li>
            <li><a href="<?php echo get_page_link(get_page_by_path('events')); ?>" title="Our network" alt="Our network">Our network</a></li>
            <li><a href="<?php echo get_page_link(get_page_by_path('events')); ?>" title="Insights" alt="Insights">Insights</a></li>
          </ul>
        </div>
      </nav>
    </header>