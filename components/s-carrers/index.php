<section class="s-carrers">
    <div class="u-container">
        <div class="s-carrers__infos">
            <div class="c-defaultContentStyle">
                <h2>Trabalhe com a Mova</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dignissimos et impedit incidunt ipsam nesciunt qui quisquam ullam? Consectetur fugiat fugit perspiciatis quibusdam repellendus! Amet consequuntur cupiditate dignissimos eligendi enim inventore laborum odit optio placeat quas, quo sint suscipit vitae!</p>
            </div>
        </div>
        <div class="s-carrers__openJobs">
            <h2>Vagas</h2>
            <div class="c-cardOpenJob">
                <div class="c-cardOpenJob__head">
                    <div class="c-cardOpenJob__check">
                        <input type="checkbox">
                    </div>
                    <div class="c-cardOpenJob__title">
                        <div class="c-defaultContentStyle">
                            <h3>Banco de Talentos</h3>
                        </div>
                    </div>
                    <div class="c-cardOpenJob__more">
                        <?php $cBtn = array(
                            "modifiers" => "--primary --s js-c-cardOpenJob__showInfos",
                            "caption" => "Mais Informações",
                            "icon" => "media/icons/icon_attach.svg",
                            "tag" => "div",
                            "href" => "",
                            "a_title" => "");
                        include('components/c-btn/index.php'); ?>
                    </div>
                </div>
                <div class="c-cardOpenJob__infos">
                    <div class="c-defaultContentStyle">
                        <h3>Sobre a vaga</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dignissimos et impedit incidunt ipsam nesciunt qui quisquam ullam? Consectetur fugiat fugit perspiciatis quibusdam repellendus! Amet consequuntur cupiditate dignissimos eligendi enim inventore laborum odit optio placeat quas, quo sint suscipit vitae!</p>
                    </div>
                    <?php $cBtn = array(
                        "modifiers" => "--primary --l js-c-cardOpenJob__addToApplyList",
                        "caption" => "Candidatar",
                        "icon" => "media/icons/icon_attach.svg",
                        "tag" => "div",
                        "href" => "",
                        "a_title" => "");
                    include('components/c-btn/index.php'); ?>
                </div>
            </div>
        </div>
        <div class="s-carrers__form">
            <h2>Inscreva-se</h2>
            <?php include('components/c-form/form_carrers.php'); ?>
        </div>
    </div>
</section>