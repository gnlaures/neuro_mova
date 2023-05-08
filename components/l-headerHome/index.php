<header class="l-headerHome">
    <div class="l-headerHome__effect"></div>

    <div class="l-headerHome__hero">
        <div class="l-headerHome__controls">
            <ul class="l-headerHome__controls__arrows">
                <li>
                    <?php $cArrowButton = array("modifiers" => "--right");
                    include('components/c-arrowButton/index.php'); ?>
                </li>
                <li>
                    <?php $cArrowButton = array("modifiers" => "--left");
                    include('components/c-arrowButton/index.php'); ?>
                </li>
            </ul>
            <div class="l-headerHome__controls__dots">
                <?php include('components/c-sliderPagesControl/index.php'); ?>
                <?php include('components/c-sliderDotsControl/index.php'); ?>
            </div>
        </div>

        <div class="l-headerHome__slider">
            <div class="l-headerHome__slider__wrapper swiper-wrapper">
                <!-- swiper-slide - item -->
                <div class="l-headerHome__slider__item swiper-slide">
                    <div class="l-headerHome__slider__item__bg">
                        <div class="l-headerHome__slider__item__bg__gradientMask"></div>
                        <img src="media/img/lHeaderHome_1.jpg" class="l-headerHome__slider__item__bg__img">
                    </div>
                    <div class="l-headerHome__slider__item__content">
                        <div class="u-container">
                            <div class="l-headerHome__slider__item__content__hero">
                                <h1>Lorem ipsum sit dollor amet coctur adiscipling.</h1>
                                <?php $cBtn = array(
                                    "modifiers" => "--white --l",
                                    "caption" => "Saiba Mais",
                                    "icon" => "",
                                    "tag" => "a",
                                    "href" => "products",
                                    "a_title" => "Saiba Mais sobre lorem ipsum sit dollor");
                                include('components/c-btn/index.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide - item -->
                <div class="l-headerHome__slider__item swiper-slide">
                    <div class="l-headerHome__slider__item__bg">
                        <div class="l-headerHome__slider__item__bg__gradientMask"></div>
                        <img src="media/img/lHeaderHome_1.jpg" class="l-headerHome__slider__item__bg__img">
                    </div>
                    <div class="l-headerHome__slider__item__content">
                        <div class="u-container">
                            <div class="l-headerHome__slider__item__content__hero">
                                <h1>Lorem ipsum sit dollor amet coctur adiscipling.</h1>
                                <?php $cBtn = array(
                                    "modifiers" => "--white --l",
                                    "caption" => "Saiba Mais",
                                    "icon" => "",
                                    "tag" => "a",
                                    "href" => "products",
                                    "a_title" => "Saiba Mais sobre lorem ipsum sit dollor");
                                include('components/c-btn/index.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide - item -->
                <div class="l-headerHome__slider__item swiper-slide">
                    <div class="l-headerHome__slider__item__bg">
                        <div class="l-headerHome__slider__item__bg__gradientMask"></div>
                        <img src="media/img/lHeaderHome_1.jpg" class="l-headerHome__slider__item__bg__img">
                    </div>
                    <div class="l-headerHome__slider__item__content">
                        <div class="u-container">
                            <div class="l-headerHome__slider__item__content__hero">
                                <h1>Lorem ipsum sit dollor amet coctur adiscipling.</h1>
                                <?php $cBtn = array(
                                    "modifiers" => "--white --l",
                                    "caption" => "Saiba Mais",
                                    "icon" => "",
                                    "tag" => "a",
                                    "href" => "products",
                                    "a_title" => "Saiba Mais sobre lorem ipsum sit dollor");
                                include('components/c-btn/index.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide - item -->
                <div class="l-headerHome__slider__item swiper-slide">
                    <div class="l-headerHome__slider__item__bg">
                        <div class="l-headerHome__slider__item__bg__gradientMask"></div>
                        <img src="media/img/lHeaderHome_1.jpg" class="l-headerHome__slider__item__bg__img">
                    </div>
                    <div class="l-headerHome__slider__item__content">
                        <div class="u-container">
                            <div class="l-headerHome__slider__item__content__hero">
                                <h1>Lorem ipsum sit dollor amet coctur adiscipling.</h1>
                                <?php $cBtn = array(
                                    "modifiers" => "--white --l",
                                    "caption" => "Saiba Mais",
                                    "icon" => "",
                                    "tag" => "a",
                                    "href" => "products",
                                    "a_title" => "Saiba Mais sobre lorem ipsum sit dollor");
                                include('components/c-btn/index.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide - item -->
                <div class="l-headerHome__slider__item swiper-slide">
                    <div class="l-headerHome__slider__item__bg">
                        <div class="l-headerHome__slider__item__bg__gradientMask"></div>
                        <img src="media/img/lHeaderHome_1.jpg" class="l-headerHome__slider__item__bg__img">
                    </div>
                    <div class="l-headerHome__slider__item__content">
                        <div class="u-container">
                            <div class="l-headerHome__slider__item__content__hero">
                                <h1>Lorem ipsum sit dollor amet coctur adiscipling.</h1>
                                <?php $cBtn = array(
                                    "modifiers" => "--white --l",
                                    "caption" => "Saiba Mais",
                                    "icon" => "",
                                    "tag" => "a",
                                    "href" => "products",
                                    "a_title" => "Saiba Mais sobre lorem ipsum sit dollor");
                                include('components/c-btn/index.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="l-headerHome__scroll">
            <div class="u-container">
                <?php
                $cScrollLink = array(
                    "modifiers" => "--movaOrto",
                    "caption" => "scroll down",
                    "title" => "Saiba mais sobre os produtos Mova",
                    "href" => "#mova",
                );
                include('components/c-scrollLink/index.php'); ?>
            </div>
        </div>
    </div>
</header>

