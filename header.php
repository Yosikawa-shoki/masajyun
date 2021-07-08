<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="google-site-verification" content="xNXduwAKG7hvLg8PH1j6ON9R7SYF7lDNcTObA4c7mUg" />
    <meta name="author" content="" />
    <meta name="robots" content="index follow">
    <meta name="description" content="車の配送を受け賜ります。東海三県はお任せください。">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/style.css?<?php echo date('YmdHis'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/resuponsibu.css?<?php echo date('YmdHis'); ?>">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper  js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- ↓jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ↓scripts.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
    <title><?php
            global $page, $paged;
            if (is_front_page()) : //トップページ
                bloginfo('name');
            elseif (is_home()) : //ブログページ（ブログサイトの場合はトップページ）
                wp_title('|', true, 'right');
                bloginfo('name');
            elseif (is_single()) : //記事ページ
                wp_title('');
            elseif (is_page()) : //固定ページ
                wp_title('|', true, 'right');
                bloginfo('name');
            elseif (is_author()) : //著者ページ
                wp_title('|', true, 'right');
                bloginfo('name');
            elseif (is_archive()) : //アーカイブページ（カテゴリーページなど）
                wp_title('|', true, 'right');
                bloginfo('name');
            elseif (is_search()) : //検索結果ページ
                wp_title('');
            elseif (is_404()) : //404ページ
                echo '404|';
                bloginfo('name');
            endif;
            if ($paged >= 2 || $page >= 2) : //２ページ目以降の場合
                echo '-' . sprintf(
                    '%sページ',
                    max($paged, $page)
                );
            endif;
            ?></title>
    <?php wp_head(); ?>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">政純商事</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>