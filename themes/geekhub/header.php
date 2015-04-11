		   <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="keywords" content="new project">
        <meta name="description" content="description  project">
        <meta name="author" content="moc">
        <title><?php bloginfo('name'); wp_title(); ?></title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css" /> 
        <?php wp_head() ?> 		
    </head>

    <body>
        <div class="wrapper">
            <header class="header">
                <p class="logo"><a href="<?php echo home_url() ?>"><img src="<?php $options = get_option( 'theme_settings' ); ?><?php echo $options['custom_logo'] ?>" />sloskow</a></p>
                <nav class="main-nav">
<?php wp_nav_menu(array('theme_location' => 'menu', 'container' => false)); ?>
                </nav>
                <div class="title-wrap">
                    <h1>Blog</h1>
                </div>
            </header>