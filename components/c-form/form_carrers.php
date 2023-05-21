<form action="#" class="c-form" id="form_carrers">
    <fieldset>
        <div class="c-form__hero">
            <div class="c-form__group u-fw100">
                <div class="c-field u-fw40 --default">
                    <div class="c-field__head">
                        <label for="form__carrers__name">Nome</label>
                    </div>
                    <div class="c-field__content">
                        <input type="text" placeholder="Nome Completo" id="form__carrers__name">
                    </div>
                </div>
                <div class="c-field u-fw30 --default">
                    <div class="c-field__head">
                        <label for="form__carrers__email">E-mail</label>
                    </div>
                    <div class="c-field__content">
                        <input type="email" placeholder="E-mail" id="form__carrers__email">
                    </div>
                </div>
                <div class="c-field u-fw30 --default">
                    <div class="c-field__head">
                        <label for="form__carrers__phone">Telefone</label>
                    </div>
                    <div class="c-field__content">
                        <input type="tel" placeholder="Telefone" id="form__carrers__phone">
                    </div>
                </div>
                <div class="c-field u-fw100 --default">
                    <div class="c-field__head">
                        <label for="form__carrers__msg">Mensagem</label>
                    </div>
                    <div class="c-field__content">
                        <textarea type="text" placeholder="Mensagem" id="form__carrers__msg"></textarea>
                    </div>
                </div>
                <div class="c-field u-fw100 --default --jobs u-dnone">
                    <div class="c-field__head">
                        <label for="form__carrers__phone">Vagas Selecionadas</label>
                    </div>
                    <div class="c-field__content">
                        <ul class="c-cardOpenJob__selectedJobList"><!-- js -->
                        </ul>
                    </div>
                </div>
                <div class="c-field u-fw50 --file">
                    <div class="c-field__head">
                        <label for="form__carrers__phone">Anexar Currículo</label>
                    </div>
                    <div class="c-field__content">
                        <input type="file" class="c-field__content__fileInput js-field__attach" placeholder="">
                        <input type="text" class="c-field__content__fileName js-field__text" placeholder="Placeholder">
                    </div>
                </div>
                <div class="c-field u-fw100 --default --check">
                    <div class="c-field__content">
                        <div class="c-field__content__check">
                            <input type="checkbox" id="form__carrers__check1">
                            <label for="form__carrers__check1">Afirmo que li as políticas de <a href="#">privacidade</a>, <a href="#">cookies</a> e <a href="#">termos de uso</a></label>
                        </div>
                    </div>
                </div>
                <div class="c-field u-fw100 --default">
                    <div class="c-field__content">
                        <?php $cBtn = array(
                            "modifiers" => "--primary --l js-send__cFormContact",
                            "caption" => "Enviar",
                            "icon" => "",
                            "tag" => "button",
                            "href" => "",
                            "a_title" => "");
                        include('components/c-btn/index.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

    <div class="c-form__feedback">
        <?php $feedbackForm = array(
            'caption_ok' => 'Currículo enviado sucesso.',
            'caption_fail' => 'Currículo não enviado, tente novamente.',
            'caption_trying' => 'Enviando...');
        include('components/c-formFeedback/index.php'); ?>
    </div>
</form>