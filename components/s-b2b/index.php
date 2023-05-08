<section class="s-b2b">
    <div class="s-b2b__effect --before"></div>
    <div class="s-b2b__effect --after"></div>

    <div class="u-container">
        <div class="s-b2b__map">
            <img src="media/img/tagline__todoPais.png" alt="Lojista, baixe o catálogo completo e aumente seus lucros!">
        </div>
        <div class="s-b2b__content">
            <div class="c-defaultContentStyle">
                <h2>Lojista, baixe o catálogo completo e aumente seus lucros!</h2>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed accumsan sapien, vel pharetra telled scelerisque ullamcorper orci in dapasellus dictua sit amet dui pretium.</p>
            </div>
            <div class="c-responsiveGrid"
                 data-init-cols="2"
                 data-init-padd="10"
                 data-init-jc="u-jcfs"
                 data-break-vw="780"
                 data-break-cols="2"
                 data-break-padds="30"
                 data-break-jc="u-jcfs">
                <div>
                    <?php
                    $cCardShopkeeper = array(
                        "modifiers" => "",
                        "icon" => "media/icons/icon_product_demo_1.svg",
                        "title" => "Quero me cadastrar<br>como revendedor",
                        "href" => "products",
                    );
                    include('components/c-cardShopkeeper/index.php'); ?>
                </div>
                <div>
                    <?php
                    $cCardShopkeeper = array(
                        "modifiers" => "",
                        "icon" => "media/icons/icon_product_demo_1.svg",
                        "title" => "Download<br>do Catálago",
                        "href" => "products",
                    );
                    include('components/c-cardShopkeeper/index.php'); ?>
                </div>
            </div>
        </div>
    </div>
</section>