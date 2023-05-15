<?php
// $feedbackForm = array(
//                        'caption_ok' => 'Mensagem enviada com sucesso.',
//                        'caption_fail' => 'Mensagem não enviada, tente novamente.',
//                        'caption_trying' => 'Enviando...',
//                    );
?>

<div class="c-formFeedback">
    <div class="c-formFeedback__status --ok"><span><?php echo $feedbackForm["caption_ok"] ?></span></div>
    <div class="c-formFeedback__status --fail"><span><?php echo $feedbackForm["caption_fail"] ?></span></div>
    <div class="c-formFeedback__status --trying"><span><?php echo $feedbackForm["caption_trying"] ?></span></div>
</div>
