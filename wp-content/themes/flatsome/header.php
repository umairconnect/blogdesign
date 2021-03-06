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
            color: #C3C2CC !important;
        }
        .date_cate a{
            color: #C3C2CC !important;
        }
        .post_content p{
            color: #28104E;
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
        .latest_post_display .post_content  h2 {
            color: #28104E;
            font-size: 21px;
            font-weight: 500;
        }
        .post_content .description {
            font-size: 14px;
            color: #28104E;
        }
        .parameter_link img{
            width: 40px;
            height: 40px;
            float: right;
            margin-bottom: 16px;
        }
        .post_gredient {
            background: linear-gradient(to right, #FFA45E, #A13670, #9655CA 70%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .post_gredient h1{
            font-weight: 400;
            font-size: 45px;
        }
        .request_demo {
            background: #F3846D;
            color: white;
            padding: 13px 20px;
            font-size: 15px;
            border-radius: 10px;
        }
        .stream_sec {
            background-position: top;
            padding: 50px 50px;stream_sec
            background-size: cover;
        }
        .stream_sec h1{
            color: #28104E;
            font-weight: 500;
            font-size: 51px;
        }
        .stream_sec p{
            font-size: 23px;
            color: #28104E;
        }

        .single-post article .entry-header{
         padding-top: 9%;
        }
        .single-post .breadcrumb-container {
            margin-top: 6%;
            border-top: 1px solid #28104E;
            border-bottom: 1px solid #28104E;
            padding: 15px 0px;
            color: #28104E;
        }
        .single-post .entry-title {
            font-size: 54px;
            color: #28104E;
        }
        .single-post .entry-meta {
            color: #28104E;
            font-size: 16px;
            text-transform: capitalize;
        }
        .breadcrumb-container a {
            color: #28104E !important;
            font-size: 16px !important;
        }
        .breadcrumb-container.theme5 a::after {
            top: 5px !important;
            font-size: 18px;
            color: #28104E !important;
            content: ">" !important;
        }
        .margin-auto {
            margin: auto;
        }
        .background-white {
            background:white;
        }
        .entry-image img {
            max-height: 620px;
            object-fit: cover;
        }
        .entry-content {
            color: #28104E;
        }
        .subscribe_from {
            display: flex;
            align-items: center;
        }
        .subscribe_from input {
            background: transparent;
            color: white;
            border: 2px solid white;
            padding: 24px 20px;
        }
        .subscribe_from input::placeholder {
            color:white;
        }
        .subscribe_from button {
            font-weight: 300;
            text-transform: capitalize;
            padding-top: 7px;
            color: white;
            padding-left: 36px;
        }
        @media (max-width: 850px) {
            .category_menu {
                display: none;
            }
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
