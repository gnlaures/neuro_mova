<div class="s-sliderCards__content__slider js-swiperAboutSlider__quality">
    <div class="swiper-wrapper">
        <div>
            <?php $cCardIcon = array(
                'modifiers' => '--center',
                'content' => array(
                    'icon' => 'media/icons/icon_mvv_values.svg',
                    'title' => 'Flexível',
                    'text' => 'Os suportes ortopédicos Mova são confeccionados com materiais leves, flexíveis e com alto poder de resiliência. Desenhados para acompanhar a movimentação do seu corpo, garantindo conforto e alívio no tratamento de lesões.',
                ),
                'readmore' => array(
                    'show' => 'true',
                    'caption' => 'Saiba mais',
                    'modifiers' => '',
                ),
                'link' => array(
                    'href' => '#',
                    'target' => '_self',
                ),
            );
            include('components/c-cardIcon/index.php'); ?>
        </div>
        <div>
            <?php $cCardIcon = array(
                'modifiers' => '--center',
                'content' => array(
                    'icon' => 'media/icons/icon_mvv_values.svg',
                    'title' => 'Proteção',
                    'text' => 'Desenhados especialmente para a proteção ou imobilização dos membros inferiores e superiores, os suportes ortopédicos Mova foram cuidadosamente desenvolvidos com materiais de alta tecnologia para auxiliar na prevenção e tratamento de lesões.',
                ),
                'readmore' => array(
                    'show' => 'true',
                    'caption' => 'Saiba mais',
                    'modifiers' => '',
                ),
                'link' => array(
                    'href' => '#',
                    'target' => '_self',
                ),
            );
            include('components/c-cardIcon/index.php'); ?>
        </div>
        <div>
            <?php $cCardIcon = array(
                'modifiers' => '--center',
                'content' => array(
                    'icon' => 'media/icons/icon_mvv_values.svg',
                    'title' => 'Anatômico',
                    'text' => 'Os suportes ortopédicos Mova adaptam-se ao seu corpo sem interferir no movimento das articulações, proporcionando assim um ajuste perfeito.',
                ),
                'readmore' => array(
                    'show' => 'true',
                    'caption' => 'Saiba mais',
                    'modifiers' => '',
                ),
                'link' => array(
                    'href' => '#',
                    'target' => '_self',
                ),
            );
            include('components/c-cardIcon/index.php'); ?>
        </div>
        <div>
            <?php $cCardIcon = array(
                'modifiers' => '--center',
                'content' => array(
                    'icon' => 'media/icons/icon_mvv_values.svg',
                    'title' => 'Compressão',
                    'text' => 'Após estudarmos minuciosamente a anatomia dos suportes ortopédicos Mova, conseguimos chegar em um nível de compressão único e exato para promover mais movimento, reduzindo o risco e o agravamento de lesões.',
                ),
                'readmore' => array(
                    'show' => 'true',
                    'caption' => 'Saiba mais',
                    'modifiers' => '',
                ),
                'link' => array(
                    'href' => '#',
                    'target' => '_self',
                ),
            );
            include('components/c-cardIcon/index.php'); ?>
        </div>
    </div>

    <!-- arrow controls -->
    <?php $cArrowButton = array("modifiers" => "--right");
    include('components/c-arrowButton/index.php'); ?>
    <?php $cArrowButton = array("modifiers" => "--left");
    include('components/c-arrowButton/index.php'); ?>
</div>