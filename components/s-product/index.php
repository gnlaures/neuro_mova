<section class="s-product">
    <div class="u-container">
        <div class="s-product__content">
            <div class="c-toggleItem is-active">
                <div class="c-toggleItem__content">
                    <?php $cPhoto = array(
                        "modifiers" => "",
                        "figcaption" => "",
                        "image" => "https://picsum.photos/1920/1080",
                        "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                        "image_ratio" => "--ratio-16-9",
                        "a_href" => "https://picsum.photos/536/354",
                        "a_target" => "_self",
                        "fancybox" => true,
                        "fancybox__name" => "nome-da-galeria",
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
        <div class="s-product__aside">
            <?php $cPhoto = array(
                "modifiers" => "",
                "figcaption" => "",
                "image" => "https://picsum.photos/350/760",
                "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                "image_ratio" => "--ratio-disabled",
                "a_href" => "https://picsum.photos/536/354",
                "a_target" => "_self",
                "fancybox" => true,
                "fancybox__name" => "nome-da-galeria",
            );
            include('components/c-photo/index.php'); ?>
            <ul class="c-tagsIconGrid">
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
                        "icon" => "media/icons/icon_product_demo_1.svg",
                        "title" => "Estabilidade",
                    );
                    include('components/c-iconBlock/index.php');
                    ?>
                </li>
            </ul>
            <div class="c-toggleItem is-active">
                <div class="c-toggleItem__head">
                    <h3>Categorias</h3>
                    <i>
                        <?php include('media/icons/icon_plus.svg');?>
                    </i>
                </div>
                <div class="c-toggleItem__content">
                    <ul class="c-productsFilter">
                        <li>
                            <a href="#">
                                <?php $cIconBlock = array("modifiers" => "--light", "icon" => "media/icons/icon_product_demo_1.svg", "title" => "Estabilidade");
                                include('components/c-iconBlock/index.php'); ?>
                                <span>Troncos e Ombros</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php $cIconBlock = array("modifiers" => "--light", "icon" => "media/icons/icon_product_demo_1.svg", "title" => "Estabilidade");
                                include('components/c-iconBlock/index.php'); ?>
                                <span>Cabeça e pescoço</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php $cIconBlock = array("modifiers" => "--light", "icon" => "media/icons/icon_product_demo_1.svg", "title" => "Estabilidade");
                                include('components/c-iconBlock/index.php'); ?>
                                <span>Joelho e coxa</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php $cIconBlock = array("modifiers" => "--light", "icon" => "media/icons/icon_product_demo_1.svg", "title" => "Estabilidade");
                                include('components/c-iconBlock/index.php'); ?>
                                <span>punho e mão</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php $cIconBlock = array("modifiers" => "--light", "icon" => "media/icons/icon_product_demo_1.svg", "title" => "Estabilidade");
                                include('components/c-iconBlock/index.php'); ?>
                                <span>Tornozelo e pé</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="is-active">
                                <?php $cIconBlock = array("modifiers" => "--light", "icon" => "media/icons/icon_product_demo_1.svg", "title" => "Estabilidade");
                                include('components/c-iconBlock/index.php'); ?>
                                <span>braço e antebraço</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="c-toggleItem">
                <div class="c-toggleItem__head">
                    <h3>Linha</h3>
                    <i>
                        <?php include('media/icons/icon_plus.svg');?>
                    </i>
                </div>
                <div class="c-toggleItem__content">
                    <ul class="c-productsFilter">
                        <li>
                            <a href="#">
                                <?php $cIconBlock = array("modifiers" => "--light", "icon" => "media/icons/icon_product_demo_1.svg", "title" => "Estabilidade");
                                include('components/c-iconBlock/index.php'); ?>
                                <span>Ortopédicos</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php $cIconBlock = array("modifiers" => "--light", "icon" => "media/icons/icon_product_demo_1.svg", "title" => "Estabilidade");
                                include('components/c-iconBlock/index.php'); ?>
                                <span>Ortopédicos Premium</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php $cIconBlock = array("modifiers" => "--light", "icon" => "media/icons/icon_product_demo_1.svg", "title" => "Estabilidade");
                                include('components/c-iconBlock/index.php'); ?>
                                <span>Fitness</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>