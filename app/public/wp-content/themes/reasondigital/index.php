<?php
/**
 * Template Name: Home
 */

    // should use:
    // wp_enqueue_style( 'absolute-styles', 'style.css', false );

    // wp_register_style(
    //   'absolute-styles',
    //   get_template_directory_uri() . '/style.css'
    // );
?>

<?php get_header(); ?>

    <main role="main" id="content">
      <section class="hero-container">
        <div class="hero">
          <h1 title="Get online week 2021" alt="Get online week 2021">Get online week 2021</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#" title="Get involved now!" alt="Get involved now!">Get involved now!</a>
        </div>
        <div class="hero-sideimage"><figure><img src="<?php echo get_template_directory_uri(); ?>/images/pexels-christina-morillo.jpg" title="Our CTO Christina Morillo" alt="Picture of our CTO Christina Morillo"></figure></div>
        <div class="hero-content">
          <h2 title="We are a social change charity, helping people to improve their lives through digital." alt="We are a social change charity, helping people to improve their lives through digital.">We are a social change charity, helping people to improve their lives through digital.</h2>
          <p>We tackle the most pressing issues of our time, working with partners in thousands of communities across the UK and further afield.</p>
          <a href="#aboutus" title="Learn more about us" alt="Learn more about us">Learn more about us</a>
          <img src="<?php echo get_template_directory_uri(); ?>/images/fingerprint.svg" alt="" title="" aria-hidden="true" />
        </div>
      </section>

      <section class="help">
          <h3 title="How can we help you?" alt="How we can help you?">How can we help you?</h3>
          <p>Let us know who you are and what you're looking for, and we'll help you get to the right place.</p>
          <div class="help-cta">
            <form method="post">
            I am 
            <select title="an individual" alt="an individual">
              <option title="an individual" value="anindividual">an individual</option>
            </select> 
            and I 
            <select title="want to learn" alt="want to learn">
              <option title="want to learn" value="wanttolearn">want to learn</option>
            </select> 
            <button title="Start now">Start now</button>
          </form>
          </div>
      </section>

      <section class="whatdowedo">
        <h3 title="What do we do?" alt="What do we do?">What do we do?</h3>
        <p>You might not have heard of us but we're the people behind the following impactful programmes.</p>
        <div class="cards">
          <div class="card">
            <h4 title="Get online week" alt="Get online week">Get online week</h4>
            <p>Lorem ipsum dolor sit amet</p>
            <a href="#readmore" title="Read more" alt="Read more">Read more</a>
          </div>
          <div class="card">
            <h4 title="Get online week">Get online week</h4>
            <p>Lorem ipsum dolor sit amet</p>
            <a href="#readmore" title="Read more" alt="Read more">Read more</a>
          </div>
          <div class="card">
            <h4 title="Get online week">Get online week</h4>
            <p>Lorem ipsum dolor sit amet</p>
            <a href="#readmore" title="Read more" alt="Read more">Read more</a>
          </div>
          <div class="card">
            <h4 title="Get online week">Get online week</h4>
            <p>Lorem ipsum dolor sit amet</p>
            <a href="#readmore" title="Read more" alt="Read more">Read more</a>
          </div>
        </div>
        <div class="cta"><a href="#moreaboutwhatwedo" title="More about what we do" alt="More about what we do">More about what we do</a></div>
      </section>
    </main>

<?php get_footer(); ?>