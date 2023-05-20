<section class="s-about">
    <div class="s-about__history">
        <div class="u-container">
            <div class="s-about__history__col u-fw45">
                <div class="c-defaultContentStyle">
                    <h3>História</h3>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dignissimos et impedit incidunt ipsam nesciunt qui quisquam ullam? Consectetur fugiat fugit perspiciatis quibusdam repellendus! Amet consequuntur cupiditate dignissimos eligendi enim inventore laborum odit optio placeat quas, quo sint suscipit vitae!</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquam aliquid autem commodi cupiditate dicta earum fuga nemo sapiente! Commodi culpa impedit necessitatibus nemo nihil nulla optio rem, repellendus sequi similique. Adipisci autem est minima minus voluptate. Accusantium, ad animi commodi delectus distinctio dolore eaque enim fugiat id ipsum minus nemo neque non odit reiciendis ull.</p>
                </div>
            </div>
            <div class="s-about__history__col u-fw55">
                <?php $cPhoto = array(
                    "modifiers" => "",
                    "figcaption" => "",
                    "image" => "https://picsum.photos/680/500",
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
    <div class="s-about__quality">
        <div class="u-container">
            <div class="c-defaultContentStyle">
                <h3>Qualidade</h3>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dignissimos et impedit incidunt ipsam nesciunt qui quisquam ullam? Consectetur fugiat fugit perspiciatis quibusdam repellendus! Amet consequuntur cupiditate dignissimos eligendi enim inventore laborum odit optio placeat quas, quo sint suscipit vitae!</p>
                <br>
            </div>
            <div class="c-responsiveGrid --fitContent"
                 data-init-cols="4"
                 data-init-padd="15"
                 data-init-jc="u-jcc"
                 data-break-vw="1180, 780"
                 data-break-cols="2, 1"
                 data-break-padds="10, 10"
                 data-break-jc="u-jcc, u-jcc">
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
        </div>
    </div>
    <div class="s-about__mvv">
        <div class="u-container">
            <div class="c-defaultContentStyle">
                <h3>Missão, visão e valores</h3>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dignissimos et impedit incidunt ipsam nesciunt qui quisquam ullam? Consectetur fugiat fugit perspiciatis quibusdam repellendus! Amet consequuntur cupiditate dignissimos eligendi enim inventore laborum odit optio placeat quas, quo sint suscipit vitae!</p>
                <br>
            </div>
            <ul class="c-responsiveGrid --fitContent"
                data-init-cols="3"
                data-init-padd="15"
                data-init-jc="u-jcc"
                data-break-vw="980, 780"
                data-break-cols="2, 1"
                data-break-padds="10, 10"
                data-break-jc="u-jcc, u-jcc">
                <li>
                    <?php $cCardIcon = array(
                        'modifiers' => '--center',
                        'content' => array(
                            'icon' => 'media/icons/icon_mvv_values.svg',
                            'title' => 'Valores',
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
                </li>
                <li>
                    <?php $cCardIcon = array(
                        'modifiers' => '--center',
                        'content' => array(
                            'icon' => 'media/icons/icon_mvv_mission.svg',
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
                        'modifiers' => '--center',
                        'content' => array(
                            'icon' => 'media/icons/icon_mvv_vi.svg',
                            'title' => 'Visão',
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