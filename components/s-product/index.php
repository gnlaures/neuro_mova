<section class="s-product" id="product">
    <div class="u-container">
        <div class="s-product__content" data-aos="fade-up">
            <div class="c-toggleItem is-active">
                <div class="c-toggleItem__content">
                    <?php $cPhoto = array(
                        "modifiers" => "",
                        "figcaption" => "",
                        "image" => "media/img/product_detail_1.png",
                        "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                        "image_ratio" => "--ratio-disabled",
                        "a_href" => "media/img/product_detail_1.png",
                        "a_target" => "_self",
                        "fancybox" => true,
                        "fancybox__name" => "galeria-produto",
                    );
                    include('components/c-photo/index.php'); ?>
                </div>
            </div>
            <div class="c-toggleItem is-active">
                <div class="c-toggleItem__head">
                    <h2>Precauções</h2>
                    <i>
                        <?php include('media/icons/icon_plus.svg');?>
                    </i>
                </div>
                <div class="c-toggleItem__content">
                    <div class="c-defaultContentStyle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem hic quaerat quasi sit. Accusamus blanditiis consectetur error unde voluptatum?</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum explicabo nisi nobis officiis, repudiandae soluta suscipit tempora vel. Ad aut autem debitis dolore perferendis quaerat qui quia ullam veniam, voluptatibus. At, et quos!</p>
                    </div>
                </div>
            </div>
            <div class="c-toggleItem is-active">
                <div class="c-toggleItem__head">
                    <h2>Modo de Uso</h2>
                    <i>
                        <?php include('media/icons/icon_plus.svg');?>
                    </i>
                </div>
                <div class="c-toggleItem__content">
                    <div class="c-defaultContentStyle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem hic quaerat quasi sit. Accusamus blanditiis consectetur error unde voluptatum?</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum explicabo nisi nobis officiis, repudiandae soluta suscipit tempora vel. Ad aut autem debitis dolore perferendis quaerat qui quia ullam veniam, voluptatibus. At, et quos!</p>
                    </div>
                </div>
            </div>
            <div class="c-toggleItem is-active">
                <div class="c-toggleItem__head">
                    <h2>Tamanhos</h2>
                    <i>
                        <?php include('media/icons/icon_plus.svg');?>
                    </i>
                </div>
                <div class="c-toggleItem__content">
                    <div class="c-defaultContentStyle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem hic quaerat quasi sit. Accusamus blanditiis consectetur error unde voluptatum?</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum explicabo nisi nobis officiis, repudiandae soluta suscipit tempora vel. Ad aut autem debitis dolore perferendis quaerat qui quia ullam veniam, voluptatibus. At, et quos!</p>
                    </div>
                </div>
            </div>
            <div class="c-toggleItem is-active">
                <div class="c-toggleItem__head">
                    <h2>Composição</h2>
                    <i>
                        <?php include('media/icons/icon_plus.svg');?>
                    </i>
                </div>
                <div class="c-toggleItem__content">
                    <div class="c-defaultContentStyle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem hic quaerat quasi sit. Accusamus blanditiis consectetur error unde voluptatum?</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum explicabo nisi nobis officiis, repudiandae soluta suscipit tempora vel. Ad aut autem debitis dolore perferendis quaerat qui quia ullam veniam, voluptatibus. At, et quos!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="s-product__aside" data-aos="fade-up">
            <?php $cPhoto = array(
                "modifiers" => "",
                "figcaption" => "",
                "image" => "media/img/product_aside_up.png",
                "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                "image_ratio" => "--ratio-disabled",
                "a_href" => "https://picsum.photos/536/354",
                "a_target" => "_self",
                "fancybox" => false,
                "fancybox__name" => "",
            );
            include('components/c-photo/index.php'); ?>
            <div class="c-tagsIconGrid">
                <ul class="c-responsiveGrid"
                     data-init-cols="2"
                     data-init-padd="4"
                     data-init-jc="u-jcc"
                     data-break-vw="780"
                     data-break-cols="2"
                     data-break-padds="4"
                     data-break-jc="u-jcc">
                    <li>
                        <?php
                        $cIconBlock = array(
                            "modifiers" => "--secondary --l",
                            "icon" => "media/icons/icon_product_demo_1.svg",
                            "title" => "Estabilidade",
                        );
                        include('components/c-iconBlock/index.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cIconBlock = array(
                            "modifiers" => "--secondary --l",
                            "icon" => "media/icons/icon_product_demo_2.svg",
                            "title" => "Estabilidade",
                        );
                        include('components/c-iconBlock/index.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cIconBlock = array(
                            "modifiers" => "--secondary --l",
                            "icon" => "media/icons/icon_product_demo_3.svg",
                            "title" => "Estabilidade",
                        );
                        include('components/c-iconBlock/index.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cIconBlock = array(
                            "modifiers" => "--secondary --l",
                            "icon" => "media/icons/icon_product_demo_1.svg",
                            "title" => "Estabilidade",
                        );
                        include('components/c-iconBlock/index.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cIconBlock = array(
                            "modifiers" => "--secondary --l",
                            "icon" => "media/icons/icon_product_demo_2.svg",
                            "title" => "Estabilidade",
                        );
                        include('components/c-iconBlock/index.php');
                        ?>
                    </li>
                </ul>
            </div>
            <?php include('components/c-productsAside/index.php'); ?>
        </div>
    </div>
</section>