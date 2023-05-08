<div class="s-sliderCards__content__slider js-swiperProductSlider__categories">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Braço e</br>Antebraço",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
        <div class="swiper-slide">
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Cabeça e</br>Pescoço",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
        <div class="swiper-slide">
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Joelho</br>e Coxa",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
        <div class="swiper-slide">
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Punho</br>e Mão",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
        <div class="swiper-slide">
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Tornozelo</br>e Pé",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
        <div class="swiper-slide">
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Troncos</br>e Ombros",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
    </div>

    <!-- arrow controls -->
    <?php $cArrowButton = array("modifiers" => "--right");
    include('components/c-arrowButton/index.php'); ?>
    <?php $cArrowButton = array("modifiers" => "--left");
    include('components/c-arrowButton/index.php'); ?>
</div>