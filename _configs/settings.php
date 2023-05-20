<?php
    $siteConfig = [
        'company' => 'Mova',
        'title' => 'Mova → Movimente-se',
        'title_spacer' => ' → ',
        'keywords' => 'front end, boilerplate, css, html, js, scss, smacss, bem, gulp, node',
        'description' => 'Boilerplate Front-end',
        'base_folder' => 'boilerplate',
        'body_class' => '',
        'active_page' => 'pages/error.php',
        'author' => '@gnlaureano',
        'creator' => '@gnlaureano',
        'language' => 'pt-br',
        'publisher' => '@gnlaureano',
        'url' => 'https://www.urldosite.dominio/',
        'theme_color' => '#112c69',
        'mask_icon_color' => '#112c69',
        'tile_color' => '#112c69',
        'min_viewport_width' => '400',
        'scale_min' => '1',
        'scale_max' => '1.5',
        'scalable' => 'yes',
    ];

    $pageRender = [
        'local' => explode('/', $_SERVER['REQUEST_URI']),
        'public_html' => explode($siteConfig['base_folder'], $_SERVER['REQUEST_URI'])
    ];

    switch ($pageRender['local'][1]) {
        case '' :
        case 'home' :
            $siteConfig['active_page'] = 'pages/home.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Página Inicial';
            $siteConfig['body_class'] = 'p-home';
            break;

        // inner
        case 'products' :
            $siteConfig['active_page'] = 'pages/products.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Produtos';
            $siteConfig['body_class'] = 'p-inner p-products';
            break;
        case 'product-up' :
            $siteConfig['active_page'] = 'pages/product-up.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Produto Mova Up';
            $siteConfig['body_class'] = 'p-inner p-product p-product-up';
            break;
        case 'product-orto' :
            $siteConfig['active_page'] = 'pages/product-orto.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Produto Mova Ortopédicos';
            $siteConfig['body_class'] = 'p-inner p-product p-product-orto';
            break;
        case 'about' :
            $siteConfig['active_page'] = 'pages/about.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;
        case 'contact' :
            $siteConfig['active_page'] = 'pages/contact.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;
        case 'carrers' :
            $siteConfig['active_page'] = 'pages/carrers.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;
        case 'terms-cookies' :
            $siteConfig['active_page'] = 'pages/terms-cookies.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
        case 'terms-use' :
            $siteConfig['active_page'] = 'pages/terms-use.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;
        case 'terms-privacy' :
            $siteConfig['active_page'] = 'pages/terms-privacy.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;

        case 'ronak' :
            $siteConfig['active_page'] = 'pages/components.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Components';
            $siteConfig['body_class'] = 'p-inner p-ronak';
            break;

        // 404
        default :
            header("HTTP/1.0 404 Not Found");
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Erro';
            $siteConfig['body_class'] = 'p-inner p-error';
            break;
    }
?>