<?php
include('components/l-nav/index.php');

$lHeaderInner = array("title" => "Sobre");
include('components/l-headerInner/index.php');

include('components/c-socialFixed/index.php');

?>

<section class="s-about">
    <div class="s-about__history">
        <div class="u-container">
            <div class="s-about__history__col u-fw35">
                <div class="c-defaultContentStyle">
                    <h3>História</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dignissimos et impedit incidunt ipsam nesciunt qui quisquam ullam? Consectetur fugiat fugit perspiciatis quibusdam repellendus! Amet consequuntur cupiditate dignissimos eligendi enim inventore laborum odit optio placeat quas, quo sint suscipit vitae!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquam aliquid autem commodi cupiditate dicta earum fuga nemo sapiente! Commodi culpa impedit necessitatibus nemo nihil nulla optio rem, repellendus sequi similique. Adipisci autem est minima minus voluptate. Accusantium, ad animi commodi delectus distinctio dolore eaque enim fugiat id ipsum minus nemo neque non odit reiciendis ullam veritatis voluptate. Adipisci architecto blanditiis consequuntur culpa eius facilis fugiat molestias nam porro provident quod, suscipit tempore velit? Amet nulla possimus reiciendis reprehenderit?</p>
                </div>
                <?php
                $cSocialList = array(
                    "modifiers" => "",
                    "social_items" => array(
                        array("theme" => "--instagram", "caption" => "@gnlaureano", "title" => "Instagram", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
                        array("theme" => "--facebook", "caption" => "@gnlaureano", "title" => "Facebook", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.facebook.com"),
                        array("theme" => "--wpp", "caption" => "@gnlaureano", "title" => "Whatsapp", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com")
                    )
                );
                include('components/c-socialList/index.php'); ?>
            </div>
            <div class="s-about__history__col u-fw65">
                <?php $cPhoto = array(
                    "modifiers" => "",
                    "figcaption" => "",
                    "image" => "https://picsum.photos/680/354",
                    "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                    "image_ratio" => "--ratio-disabled",
                    "a_href" => "https://picsum.photos/536/536",
                    "a_target" => "_self",
                    "fancybox" => true,
                    "fancybox__name" => "nome-da-galeria",
                );
                include('components/c-photo/index.php'); ?>
            </div>
        </div>
    </div>
    <div class="s-about__mediaGallery">
        <div class="c-responsiveGrid"
             data-init-cols="4"
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
                    "image_ratio" => "--ratio-disabled",
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
                    "image_ratio" => "--ratio-disabled",
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
    <div class="s-about__mvv">
        <div class="u-container">
            <ul class="c-responsiveGrid"
                data-init-cols="3"
                data-init-padd="15"
                data-init-jc="u-jcc"
                data-break-vw="980, 780"
                data-break-cols="2, 1"
                data-break-padds="10, 10"
                data-break-jc="u-jcc, u-jcc">
                <li>
                    <?php $cCardIcon = array(
                        'modifiers' => '',
                        'content' => array(
                            'icon' => 'media/icons/icon_caretDouble.svg',
                            'title' => 'Missão',
                            'text' => 'Lorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshudsorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshuds hudshu',
                        ),
                        'readmore' => array(
                            'show' => 'false',
                            'caption' => '',
                            'modifiers' => '',
                        ),
                        'link' => array(
                            'href' => '',
                            'target' => '_self',
                        ),
                    );
                    include('components/c-cardIcon/index.php'); ?>
                </li>
                <li>
                    <?php $cCardIcon = array(
                        'modifiers' => '',
                        'content' => array(
                            'icon' => 'media/icons/icon_caretDouble.svg',
                            'title' => 'Missão',
                            'text' => 'Lorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshudsorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshuds hudshu',
                        ),
                        'readmore' => array(
                            'show' => 'false',
                            'caption' => '',
                            'modifiers' => '',
                        ),
                        'link' => array(
                            'href' => '',
                            'target' => '_self',
                        ),
                    );
                    include('components/c-cardIcon/index.php'); ?>
                </li>
                <li>
                    <?php $cCardIcon = array(
                        'modifiers' => '',
                        'content' => array(
                            'icon' => 'media/icons/icon_caretDouble.svg',
                            'title' => 'Missão',
                            'text' => 'Lorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshudsorem ipsum sit dollor amet consectus ahsuashs dsksaid a asd dshuds hudshu',
                        ),
                        'readmore' => array(
                            'show' => 'false',
                            'caption' => '',
                            'modifiers' => '',
                        ),
                        'link' => array(
                            'href' => '',
                            'target' => '_self',
                        ),
                    );
                    include('components/c-cardIcon/index.php'); ?>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php
$sSliderCards = array("modifiers" => "--diagTop", "title" => "Lançamentos", "slider" => "slider_lancamentos.php");
include('components/s-sliderCards/index.php');

include('components/s-instagram/index.php');
include('components/l-footer/index.php');
?>


