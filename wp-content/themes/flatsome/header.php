<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
    <style type="text/css">
        header .is-small .icon-search {
            border: 1px solid #28104E;
            padding: 9px 10px;
            border-radius: 10px;
            color: #28104E;
        }
        .searchform .button.icon {
           background: #28104E;
        }
        .category_menu  {
            background:#F8F7FD;
        }
        .category_menu .menu {
            display: flex;
            align-items: center;
            margin: 0;
        }
        .category_menu .col{
            padding: 30px;
        }
        .category_menu ul li {
            border-top: 0 !important;
            padding-right: 34px;
        }
        .category_menu ul li a{
            color: #28104E;
            font-size: 17px;
        }
        .blog_header h1 {
            font-size: 63px;
            color: #28104E;
            padding-top: 30px;
            font-weight: 500;
        }
        .blog_header a.button {
            border-radius: 10px;
            color: #28104E;
            padding: 9px 27px;
            font-weight: 500;
            border: #28104E solid 1.7px;
        }
        .blog_header a.button:hover {
            background: #28104E;
        }
        .single_post_sec {
            background: white;
            padding: 0px 25px 35px 0px;
        }
        .single_post_sec h2{
            font-size: 48px;
            color: #28104E;
        }
        .single_post_sec img {
            object-fit: cover;
            max-height: 500px;
            height: 500px;
        }
        .date_cate {
            color: #C3C2CC;
        }
        .date_cate a{
            color: #C3C2CC;
        }

        .latest_post_display {
            background:#F8F7FD;
        }
        .latest_post_display .col{
            border-left: 1px solid #28104E;
            border-top: 1px solid #28104E;
            padding: 0;
            padding-right: 25px;
        }
        .latest_post_display .post_content {
            padding: 18px;
        }

    </style>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'flatsome_after_body_open' ); ?>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

<div id="wrapper">

	<?php do_action( 'flatsome_before_header' ); ?>

	<header id="header" class="header transparent <?php flatsome_header_classes(); ?>">
		<div class="header-wrapper">
			<?php get_template_part( 'template-parts/header/header', 'wrapper' ); ?>
		</div>
	</header>

	<?php do_action( 'flatsome_after_header' ); ?>

	<main id="main" class="<?php flatsome_main_classes(); ?>">
