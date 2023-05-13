

<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="c-cardOpenJob">
    <div class="c-cardOpenJob__check">
        // check
    </div>
    <div class="c-cardOpenJob__title">
        // title
    </div>
    <div class="c-cardOpenJob__more">
        // readmore
    </div>
    <div class="c-cardOpenJob__infos">
        // defaultStyle
        // button
    </div>
</div>

<div class="c-formCarrer">
    // include form
</div>




<br>
<br>
<br>
<br>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-toggleItem</h4>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="1"
         data-init-padd="8"
         data-init-jc="u-jcfs"
         data-break-vw="780"
         data-break-cols="2"
         data-break-padds="30"
         data-break-jc="u-jcfs">
        <div>
            <?php include('components/c-toggleItem/index.php'); ?>
        </div>
    </div>
</div>

<br>
<br>
<br>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-cardShopkeeper</h4>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="4"
         data-init-padd="8"
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
                "title" => "Braço e Antebraço",
                "href" => "products",
            );
            include('components/c-cardShopkeeper/index.php'); ?>
        </div>
    </div>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-arrowButton</h4>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="4"
         data-init-padd="8"
         data-init-jc="u-jcfs"
         data-break-vw="780"
         data-break-cols="2"
         data-break-padds="30"
         data-break-jc="u-jcfs">
        <div>
            <?php $cArrowButton = array("modifiers" => "--right");
            include('components/c-arrowButton/index.php'); ?>
        </div>
        <div>
            <?php $cArrowButton = array("modifiers" => "--next");
            include('components/c-arrowButton/index.php'); ?>
        </div>
        <div>
            <?php $cArrowButton = array("modifiers" => "--left");
            include('components/c-arrowButton/index.php'); ?>
        </div>
        <div>
            <?php $cArrowButton = array("modifiers" => "--prev");
            include('components/c-arrowButton/index.php'); ?>
        </div>
    </div>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-socialFixed</h4>
        <br>
        <p>Fixo na lateral direita da página.</p>
    </div>
    <?php include('components/c-socialFixed/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-cardCategorie</h4>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="6"
         data-init-padd="8"
         data-init-jc="u-jcfs"
         data-break-vw="780"
         data-break-cols="2"
         data-break-padds="30"
         data-break-jc="u-jcfs">
        <div>
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Braço e Antebraço",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
        <div>
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Braço e Antebraço",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
        <div>
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Braço e Antebraço",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
        <div>
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Braço e Antebraço",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
        <div>
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Braço e Antebraço",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
        <div>
            <?php
            $cCardCategorie = array(
                "modifiers" => "",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Braço e Antebraço",
                "href" => "products",
            );
            include('components/c-cardCategorie/index.php'); ?>
        </div>
    </div>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-cardProductLine</h4>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="2"
         data-init-padd="15"
         data-init-jc="u-jcfs"
         data-break-vw="780"
         data-break-cols="2"
         data-break-padds="30"
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

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-skewBlock</h4><br>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="3"
         data-init-padd="30"
         data-init-jc="u-jcfs"
         data-break-vw="780"
         data-break-cols="2"
         data-break-padds="30"
         data-break-jc="u-jcfs"
         style="background: #ccc">
        <div>
            <?php $cSkewBlock = array('modifiers' => '--third');
            include('components/c-skewBlock/index.php'); ?>
        </div>
        <div>
            <?php $cSkewBlock = array('modifiers' => '--secondary');
            include('components/c-skewBlock/index.php'); ?>
        </div>
        <div>
            <?php $cSkewBlock = array('modifiers' => '--primary');
            include('components/c-skewBlock/index.php'); ?>
        </div>
    </div>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-iconBlock</h4>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="6"
         data-init-padd="30"
         data-init-jc="u-jcfs"
         data-break-vw="780"
         data-break-cols="2"
         data-break-padds="30"
         data-break-jc="u-jcfs">
        <div>
            <?php
            $cIconBlock = array(
                "modifiers" => "--secondary",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Estabilidade",
            );
            include('components/c-iconBlock/index.php');
            ?>
        </div>
        <div>
            <?php
            $cIconBlock = array(
                "modifiers" => "--secondary --l",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Estabilidade",
            );
            include('components/c-iconBlock/index.php');
            ?>
        </div>
        <div>
            <?php
            $cIconBlock = array(
                "modifiers" => "--primary",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Estabilidade",
            );
            include('components/c-iconBlock/index.php');
            ?>
        </div>
        <div>
            <?php
            $cIconBlock = array(
                "modifiers" => "--primary --l",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Estabilidade",
            );
            include('components/c-iconBlock/index.php');
            ?>
        </div>
        <div>
            <?php
            $cIconBlock = array(
                "modifiers" => "--third",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Estabilidade",
            );
            include('components/c-iconBlock/index.php');
            ?>
        </div>
        <div>
            <?php
            $cIconBlock = array(
                "modifiers" => "--third --l",
                "icon" => "media/icons/icon_product_demo_1.svg",
                "title" => "Estabilidade",
            );
            include('components/c-iconBlock/index.php');
            ?>
        </div>
    </div>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-cardProduct</h4><br>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="4"
         data-init-padd="15"
         data-init-jc="u-jcfs"
         data-break-vw="780"
         data-break-cols="2"
         data-break-padds="30"
         data-break-jc="u-jcfs"
         style="background: #ccc">
        <div>
            <?php
            $cCardProduct = array(
                "modifiers" => "--third",
                "picture" => "media/img/product_demo_movaUp.png",
                "picture_alt" => "Faixa Abdominal Elástica Bege",
                "title" => "<strong>Faixa Abdominal</strong> Elástica Bege",
                "href" => "product",
                "tags" => array(
                    array("modifiers" => "--third__light", "icon" => "media/icons/icon_product_demo_1.svg", "caption" => "Estabilização"),
                    array("modifiers" => "--third__dark", "icon" => "media/icons/icon_product_demo_1.svg", "caption" => "Estabilização")
                )
            );
            include('components/c-cardProduct/index.php');
            ?>
        </div>
        <div>
            <?php
            $cCardProduct = array(
                "modifiers" => "--secondary",
                "picture" => "media/img/product_demo_movaOrto.png",
                "picture_alt" => "Faixa Abdominal Elástica Bege",
                "title" => "<strong>Faixa Abdominal</strong> Elástica Bege",
                "href" => "product",
                "tags" => array(
                    array("modifiers" => "--secondary__light", "icon" => "media/icons/icon_product_demo_1.svg", "caption" => "Estabilização"),
                    array("modifiers" => "--secondary__dark", "icon" => "media/icons/icon_product_demo_1.svg", "caption" => "Estabilização")
                )
            );
            include('components/c-cardProduct/index.php');
            ?>
        </div>
        <div>
            <?php
            $cCardProduct = array(
                "modifiers" => "--movaUp",
                "picture" => "media/img/product_demo_movaUp.png",
                "picture_alt" => "Faixa Abdominal Elástica Bege",
                "title" => "<strong>Faixa Abdominal</strong> Elástica Bege",
                "href" => "product",
                "tags" => array(
                    array("modifiers" => "--third__light", "icon" => "media/icons/icon_product_demo_1.svg", "caption" => "Estabilização"),
                    array("modifiers" => "--third__dark", "icon" => "media/icons/icon_product_demo_1.svg", "caption" => "Estabilização")
                )
            );
            include('components/c-cardProduct/index.php');
            ?>
        </div>
        <div>
            <?php
            $cCardProduct = array(
                "modifiers" => "--movaOrto",
                "picture" => "media/img/product_demo_movaOrto.png",
                "picture_alt" => "Faixa Abdominal Elástica Bege",
                "title" => "<strong>Faixa Abdominal</strong> Elástica Bege",
                "href" => "product",
                "tags" => array(
                    array("modifiers" => "--secondary__light", "icon" => "media/icons/icon_product_demo_1.svg", "caption" => "Estabilização"),
                    array("modifiers" => "--secondary__dark", "icon" => "media/icons/icon_product_demo_1.svg", "caption" => "Estabilização")
                )
            );
            include('components/c-cardProduct/index.php');
            ?>
        </div>
    </div>
</div>

<div class="u-container --componentView" style="background: teal">
    <div class="c-defaultContentStyle">
        <h4>c-scrollLink</h4><br>
    </div>
    <?php
    $cScrollLink = array(
        "modifiers" => "--movaOrto",
        "caption" => "scroll down",
        "title" => "Saiba mais sobre os produtos Mova",
        "href" => "#",
    );
    include('components/c-scrollLink/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-hamburguer</h4><br>
    </div>
    <?php $cHamburguer = array('modifiers' => '');
    include('components/c-hamburguer/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-pagination</h4><br>
    </div>
    <?php $cPagination = array('modifiers' => '');
    include('components/c-pagination/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-formFeedback</h4><br>
    </div>
    <?php $cFormFeedback = array('modifiers' => '');
    include('components/c-formFeedback/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-form - em produção</h4><br>
    </div>
    <?php $cForm = array('modifiers' => '');
    include('components/c-form/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-error</h4><br>
    </div>
    <?php $cError = array('modifiers' => '');
    include('components/c-error/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-devSignature</h4><br>
    </div>
    <?php $cDevSignature = array('modifiers' => '');
    include('components/c-devSignature/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-defaultContentStyle</h4>
        <br>
        <p>Utilize como modelo, veja mais em: <strong>components/c-defaultContentStyle/index.php</strong></p>
    </div>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-countdown</h4><br>
    </div>
    <?php $cCountdown = array(
        "modifiers" => "u-jcfs",
        "date" => "Mar 7, 2024 16:26:20",
        "componentFeedback" => "components/c-countdown/feedback.php",
        "caption_days" => "Dias",
        "caption_hours" => "Horas",
        "caption_minutes" => "Minutos",
        "caption_seconds" => "Segundos",
    );
    include('components/c-countdown/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-copyright</h4><br>
    </div>
    <?php include('components/c-copyright/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-cardMap</h4><br>
    </div>
    <?php $cCardMap = array('modifiers' => '');
    include('components/c-cardMap/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-cardIcon</h4><br>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="3"
         data-init-padd="10"
         data-init-jc="u-jcfs"
         data-break-vw="780"
         data-break-cols="2"
         data-break-padds="8"
         data-break-jc="u-jcfs">
        <div>
            <?php $cCardIcon = array(
                'modifiers' => '',
                'content' => array(
                    'icon' => 'media/icons/icon_caretDouble.svg',
                    'title' => 'Lorem Ipsum',
                    'text' => 'Lorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshudsorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshuds hudshu',
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
                'modifiers' => '--right',
                'content' => array(
                    'icon' => 'media/icons/icon_caretDouble.svg',
                    'title' => 'Lorem Ipsum',
                    'text' => 'Lorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshudsorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshuds hudshu',
                ),
                'readmore' => array(
                    'show' => 'true',
                    'caption' => 'Saiba mais',
                    'modifiers' => '--center',
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
                    'icon' => 'media/icons/icon_caretDouble.svg',
                    'title' => 'Lorem Ipsum',
                    'text' => 'Lorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshudsorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshuds hudshu',
                ),
                'readmore' => array(
                    'show' => 'true',
                    'caption' => 'Saiba mais',
                    'modifiers' => '--center',
                ),
                'link' => array(
                    'href' => '#',
                    'target' => '_self',
                ),
            );
            include('components/c-cardIcon/index.php'); ?>
        </div>
    </div>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-cardCompany</h4><br>
    </div>
    <?php $cCardCompany = array('modifiers' => '');
    include('components/c-cardCompany/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-cardBlogPost</h4><br>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="3"
         data-init-padd="10"
         data-init-jc="u-jcfs"
         data-break-vw="780"
         data-break-cols="2"
         data-break-padds="8"
         data-break-jc="u-jcfs">
        <div>
            <?php
            $cCardBlogPost = array(
                "modifiers" => "",
                "link" => "#post",
                "title" => "Lorem ipsum dolor sit amet, consectetur.",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid cumque dolores ipsam nemo nobis quia quis ratione saepe, similique. Architecto assumenda aut iusto nam nihil quae quis ullam voluptatibus.",
                "categories" => array(
                    array("caption" => "Artigos", "link" => "#"),
                    array("caption" => "Dicas", "link" => "#")
                ),
                "date" => "09/03/2023",
                "image" => "https://picsum.photos/600/400",
                "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                "author" => "Laures Ronak",
                "author_pic" => "https://picsum.photos/80/80",
            );
            include('components/c-cardBlogPost/index.php');
            ?>
        </div>
        <div>
            <?php
            $cCardBlogPost = array(
                "modifiers" => "",
                "link" => "#post",
                "title" => "Lorem ipsum dolor sit amet, consectetur.",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid cumque dolores ipsam nemo nobis quia quis ratione saepe, similique. Architecto assumenda aut iusto nam nihil quae quis ullam voluptatibus.",
                "categories" => array(
                    array("caption" => "Artigos", "link" => "#"),
                    array("caption" => "Dicas", "link" => "#")
                ),
                "date" => "09/03/2023",
                "image" => "https://picsum.photos/600/400",
                "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                "author" => "Laures Ronak",
                "author_pic" => "https://picsum.photos/80/80",
            );
            include('components/c-cardBlogPost/index.php');
            ?>
        </div>
        <div>
            <?php
            $cCardBlogPost = array(
                "modifiers" => "",
                "link" => "#post",
                "title" => "Lorem ipsum dolor sit amet, consectetur.",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid cumque dolores ipsam nemo nobis quia quis ratione saepe, similique. Architecto assumenda aut iusto nam nihil quae quis ullam voluptatibus.",
                "categories" => array(
                    array("caption" => "Artigos", "link" => "#"),
                    array("caption" => "Dicas", "link" => "#")
                ),
                "date" => "09/03/2023",
                "image" => "https://picsum.photos/600/400",
                "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                "author" => "Laures Ronak",
                "author_pic" => "https://picsum.photos/80/80",
            );
            include('components/c-cardBlogPost/index.php');
            ?>
        </div>
    </div>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-readMore</h4><br>
    </div>
    <?php $cReadmore = array(
        "modifiers" => "",
        "href" => "#",
        "title" => "Continuar Lendo Lorem ipsum sit dollor amet consecutr aldiasdha asisslc",
        "svg_icon_path" => "media/icons/icon_caretDouble.svg",
        "caption" => "Continuar Lendo",
    );
    include('components/c-readMore/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-btn</h4><br>
    </div>
    <ul class="c-responsiveGrid"
        data-init-cols="5"
        data-init-padd="0"
        data-init-jc="u-jcc"
        data-break-vw="1024, 800, 780"
        data-break-cols="4, 3, 2"
        data-break-padds="10, 8, 5"
        data-break-jc="u-jcfs, u-jcfe, u-jcc">
        <li>
            <?php $cBtn = array(
                "modifiers" => "--primary --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--primary --gradient --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--primary --m",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--primary --s",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--primary --stroke --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
    </ul>
    <ul class="c-responsiveGrid"
        data-init-cols="5"
        data-init-padd="0"
        data-init-jc="u-jcc"
        data-break-vw="1024, 800, 780"
        data-break-cols="4, 3, 2"
        data-break-padds="10, 8, 5"
        data-break-jc="u-jcfs, u-jcfe, u-jcc">
        <li>
            <?php $cBtn = array(
                "modifiers" => "--secondary --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--secondary --gradient --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--secondary --m",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--secondary --s",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--secondary --stroke --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
    </ul>
    <ul class="c-responsiveGrid"
        data-init-cols="5"
        data-init-padd="0"
        data-init-jc="u-jcc"
        data-break-vw="1024, 800, 780"
        data-break-cols="4, 3, 2"
        data-break-padds="10, 8, 5"
        data-break-jc="u-jcfs, u-jcfe, u-jcc">
        <li>
            <?php $cBtn = array(
                "modifiers" => "--third --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--third --gradient --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--third --m",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--third --s",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--third --stroke --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
    </ul>
    <ul class="c-responsiveGrid"
        data-init-cols="5"
        data-init-padd="0"
        data-init-jc="u-jcc"
        data-break-vw="1024, 800, 780"
        data-break-cols="4, 3, 2"
        data-break-padds="10, 8, 5"
        data-break-jc="u-jcfs, u-jcfe, u-jcc">
        <li>
            <?php $cBtn = array(
                "modifiers" => "--white --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--white --gradient --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--white --m",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--white --s",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--white --stroke --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
    </ul>
    <ul class="c-responsiveGrid"
        data-init-cols="5"
        data-init-padd="0"
        data-init-jc="u-jcc"
        data-break-vw="1024, 800, 780"
        data-break-cols="4, 3, 2"
        data-break-padds="10, 8, 5"
        data-break-jc="u-jcfs, u-jcfe, u-jcc">
        <li>
            <?php $cBtn = array(
                "modifiers" => "--disabled --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--disabled --gradient --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--disabled --m",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--disabled --s",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
        <li>
            <?php $cBtn = array(
                "modifiers" => "--disabled --stroke --l",
                "caption" => "Call To Action",
                "icon" => "media/icons/icon_attach.svg",
                "tag" => "a",
                "href" => "products",
                "a_title" => "Button");
            include('components/c-btn/index.php'); ?>
        </li>
    </ul>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-breadcrumb</h4><br>
    </div>
    <?php $cBreadcrumb = array(
        array("caption" => "Home", "link" => "#"),
        array("caption" => "Institucional", "link" => "#"),
        array("caption" => "História", "link" => "#")
    );
    include('components/c-breadcrumb/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-brand</h4><br>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="4"
         data-init-padd="5"
         data-init-jc="u-jcfs"
         data-break-vw="500"
         data-break-cols="4"
         data-break-padds="8"
         data-break-jc="u-jcfs">
        <div>
            <?php $cBrand = array(
                "modifiers" => "",
                "style" => "light",
                "href" => "#",
            );
            include('components/c-brand/index.php'); ?>
        </div>
        <div>
            <?php $cBrand = array(
                "modifiers" => "",
                "style" => "",
                "href" => "#",
            );
            include('components/c-brand/index.php'); ?>
        </div>
    </div>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-author</h4><br>
    </div>
    <?php $cAuthor = array(
        "modifiers" => "",
        "img" => "https://picsum.photos/100/100",
        "name" => "John Doe",
        "href" => "#",
    );
    include('components/c-author/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-socialList</h4><br>
    </div>
    <?php
    $cSocialList = array(
        "modifiers" => "--withCaptions",
        "social_items" => array(
            array("theme" => "--instagram", "caption" => "@gnlaureano", "title" => "Instagram", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--facebook", "caption" => "@gnlaureano", "title" => "Facebook", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.facebook.com"),
            array("theme" => "--twitter", "caption" => "@gnlaureano", "title" => "Twitter", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--linkedin", "caption" => "@gnlaureano", "title" => "Linkedin", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--youtube", "caption" => "@gnlaureano", "title" => "Youtube", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--primary", "caption" => "@gnlaureano", "title" => "Primary Theme", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--secondary", "caption" => "@gnlaureano", "title" => "Secondary Theme", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--white", "caption" => "@gnlaureano", "title" => "White Theme", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--wpp", "caption" => "@gnlaureano", "title" => "Whatsapp", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com")
        )
    );
    include('components/c-socialList/index.php'); ?>
    <br>
    <?php
    $cSocialList = array(
        "modifiers" => "--withCaptions",
        "social_items" => array(
            array("theme" => "--instagram", "caption" => "@gnlaureano", "title" => "Instagram", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--facebook", "caption" => "@gnlaureano", "title" => "Facebook", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.facebook.com"),
            array("theme" => "--twitter", "caption" => "@gnlaureano", "title" => "Twitter", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--linkedin", "caption" => "@gnlaureano", "title" => "Linkedin", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--youtube", "caption" => "@gnlaureano", "title" => "Youtube", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--primary", "caption" => "@gnlaureano", "title" => "Primary Theme", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--secondary", "caption" => "@gnlaureano", "title" => "Secondary Theme", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--white", "caption" => "@gnlaureano", "title" => "White Theme", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--wpp", "caption" => "@gnlaureano", "title" => "Whatsapp", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com")
        )
    );
    include('components/c-socialList/index.php'); ?>
</div>

<div class="u-container --componentView">
    <div class="c-defaultContentStyle">
        <h4>c-photo + c-responsiveGrid</h4><br>
    </div>
    <div class="c-responsiveGrid"
         data-init-cols="3"
         data-init-padd="5"
         data-init-jc="u-jcc"
         data-break-vw="1024, 780"
         data-break-cols="4, 3"
         data-break-padds="10, 8"
         data-break-jc="u-jcfs, u-jcfe">
        <div>
            <?php $cPhoto = array(
                "modifiers" => "",
                "figcaption" => "",
                "image" => "https://picsum.photos/680/354",
                "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                "image_ratio" => "--ratio-16-9",
                "a_href" => "https://picsum.photos/536/354",
                "a_target" => "_self",
                "fancybox" => true,
                "fancybox__name" => "nome-da-galeria",
            );
            include('components/c-photo/index.php'); ?>
        </div>
        <div>
            <?php $cPhoto = array(
                "modifiers" => "",
                "figcaption" => "",
                "image" => "https://picsum.photos/536/260",
                "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                "image_ratio" => "--ratio-16-9",
                "a_href" => "https://picsum.photos/536/354",
                "a_target" => "_self",
                "fancybox" => true,
                "fancybox__name" => "nome-da-galeria",
            );
            include('components/c-photo/index.php'); ?>
        </div>
        <div>
            <?php $cPhoto = array(
                "modifiers" => "",
                "figcaption" => "",
                "image" => "https://picsum.photos/400/354",
                "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                "image_ratio" => "--ratio-16-9",
                "a_href" => "https://picsum.photos/536/354",
                "a_target" => "_self",
                "fancybox" => true,
                "fancybox__name" => "nome-da-galeria",
            );
            include('components/c-photo/index.php'); ?>
        </div>
        <div>
            <?php $cPhoto = array(
                "modifiers" => "",
                "figcaption" => "Lorem ipsum sit dollor ame consectur.",
                "image" => "https://picsum.photos/700/354",
                "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                "image_ratio" => "--ratio-16-9",
                "a_href" => "https://picsum.photos/536/354",
                "a_target" => "_self",
                "fancybox" => true,
                "fancybox__name" => "nome-da-galeria",
            );
            include('components/c-photo/index.php'); ?>
        </div>
        <div>
            <?php $cPhoto = array(
                "modifiers" => "",
                "figcaption" => "Lorem ipsum sit dollor ame consectur.",
                "image" => "https://picsum.photos/200/354",
                "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                "image_ratio" => "--ratio-16-9",
                "a_href" => "https://picsum.photos/536/354",
                "a_target" => "_self",
                "fancybox" => true,
                "fancybox__name" => "nome-da-galeria",
            );
            include('components/c-photo/index.php'); ?>
        </div>
        <div>
            <?php $cPhoto = array(
                "modifiers" => "",
                "figcaption" => "Lorem ipsum sit dollor ame consectur.",
                "image" => "https://picsum.photos/260/354",
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
</div>