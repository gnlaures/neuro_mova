<form action="#" class="c-form" id="form_contact">
    <fieldset>
        <div class="c-form__hero">
            <div class="c-form__group u-fw100">
                <div class="c-field u-fw100 --default">
                    <div class="c-field__head">
                        <label for="form__boilerplate__name">Nome</label>
                    </div>
                    <div class="c-field__content">
                        <input type="text" placeholder="Placeholder" id="form__boilerplate__name">
                    </div>
                </div>
                <div class="c-field u-fw100 --default">
                    <div class="c-field__head">
                        <label for="form__boilerplate__email">E-mail</label>
                    </div>
                    <div class="c-field__content">
                        <input type="email" placeholder="Placeholder" id="form__boilerplate__email">
                    </div>
                </div>
                <div class="c-field u-fw100 --default">
                    <div class="c-field__head">
                        <label for="form__boilerplate__phone">Telefone</label>
                    </div>
                    <div class="c-field__content">
                        <input type="tel" placeholder="Placeholder" id="form__boilerplate__phone">
                    </div>
                </div>
                <div class="c-field u-fw100 --default">
                    <div class="c-field__head">
                        <label for="form__boilerplate__msg">Mensagem</label>
                    </div>
                    <div class="c-field__content">
                        <textarea type="text" placeholder="Placeholder" id="form__boilerplate__msg"></textarea>
                    </div>
                </div>
                <div class="c-field u-fw100 --default --check">
                    <div class="c-field__content">
                        <div class="c-field__content__check">
                            <input type="checkbox" id="form__boilerplate__check1">
                            <label for="form__boilerplate__check1">Afirmo que li as políticas de <a href="#">prvacidade</a>, <a href="#">cookies</a> e <a href="#">termos de uso</a></label>
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

    <div class="c-form__feedback u-dnone">
        <?php $feedbackForm = array(
            'caption_ok' => 'Mensagem enviada com sucesso.',
            'caption_fail' => 'Mensagem não enviada, tente novamente.',
            'caption_trying' => 'Enviando...');
        include('components/c-formFeedback/index.php'); ?>
    </div>
</form>