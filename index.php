    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php wp_title(); ?></title>
            <link rel="profile" href="http://gmpg.org/xfn/11" />
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
            <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

            <?php wp_head(); ?>

            <!-- <link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>" /> -->
            <!-- <link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" /> -->

        </head>


        <body>
            <nav class="navbar gradient-bg main-custom-nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Brand</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                    </div>
                </div>
            </nav>




            <div class="jumbotron gradient-bg margin-neg-20">
                <div class="container text-center">
                    <h1> Welcome to Iwalk Portal</h1>
                </div>
            </div>
            <div class="container">
                <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>


                <?php the_title(); ?>
                <?php the_content(); ?>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
            <?php wp_footer(); ?>
        </body>

    </html>