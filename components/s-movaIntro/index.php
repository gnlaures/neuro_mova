<section class="s-movaIntro" id="mova">
    <div class="u-container">
        <div class="s-movaIntro__resume" data-aos="fade-up">
            <div class="c-defaultContentStyle">
                <h2>Mova</h2>
                <br>
                <p>A Mova oferece duas linhas de produtos: a Mova ortopédicos e a MovaUp.</p>
                <br>
                <p>Todos os produtos da Mova são fabricados com o mais alto padrão de qualidade, seguindo as normas técnicas do mercado e sempre pensando no conforto e bem-estar de seus clientes. A empresa está sempre em busca de inovação e aprimoramento para oferecer o que há de melhor em produtos para cuidados com a saúde e atividades físicas.</p>
            </div>
            <?php $cPhoto = array(
                "modifiers" => "",
                "figcaption" => "",
                "image" => "media/img/sMovaIntro__resume.png",
                "image_alt" => "Foto de produtos da MOVA, e atrás a palavra 'Movimente-se'.",
                "image_ratio" => "--ratio-disabled",
                "a_href" => "",
                "a_target" => "",
                "fancybox" => false,
                "fancybox__name" => "",
            );
            include('components/c-photo/index.php'); ?>
        </div>
        <div class="s-movaIntro__products" data-aos="fade-up">
            <div class="u-container">
                <div class="c-responsiveGrid u-calcPositionNegative15 --col2"
                     data-init-cols="2"
                     data-init-padd="15"
                     data-init-jc="u-jcfs"
                     data-break-vw="680"
                     data-break-cols="1"
                     data-break-padds="0"
                     data-break-jc="u-jcfs">
                    <div>
                        <?php
                        $cCardProductLine = array(
                            "modifiers" => "--secondary",
                            "picture" => "media/img/cCardProductLine__movaOrto.png",
                            "picture_alt" => "Lorem Ipsum",
                            "tagline" => "media/img/tagline__movaOrto.png",
                            "title" => "Mova Ortopédicos",
                            "text" => "A linha Mova ortopédicos é especializada em produtos para cuidados com a saúde, como joelheiras, tornozeleiras, cotoveleiras, munhequeiras, palmilhas e muito mais.",
                            "href" => "products",
                            "button_caption" => "Conheça os Produtos",
                        );
                        include('components/c-cardProductLine/index.php');
                        ?>
                    </div>
                    <div>
                        <?php
                        $cCardProductLine = array(
                            "modifiers" => "--third",
                            "picture" => "media/img/cCardProductLine__movaUp.png",
                            "picture_alt" => "Lorem Ipsum",
                            "tagline" => "media/img/tagline__movaUp.png",
                            "title" => "Mova Up",
                            "text" => "A linha Mova ortopédicos é especializada em produtos para cuidados com a saúde, como joelheiras, tornozeleiras, cotoveleiras, munhequeiras, palmilhas e muito mais.",
                            "href" => "products",
                            "button_caption" => "Conheça os Produtos",
                        );
                        include('components/c-cardProductLine/index.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>