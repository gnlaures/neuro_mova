<header class="l-headerInner">
    <div class="l-headerInner__hero">
        <div class="l-headerInner__effect"></div>
        <div class="l-headerInner__content">
            <div class="u-container">
                <div class="c-defaultContentStyle">
                    <h1><?php echo $lHeaderInner["title"] ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="l-headerInner__breadcrumb">
        <div class="u-container">
            <?php
            $cBreadcrumb = array(
                array("caption" => "Home", "link" => "home"),
                array("caption" => "Produtos", "link" => "products"),
            );
            include('components/c-breadcrumb/index.php'); ?>
        </div>
    </div>
</header>