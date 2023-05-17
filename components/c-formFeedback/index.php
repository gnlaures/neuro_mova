<?php
// $feedbackForm = array(
//                        'caption_ok' => 'Mensagem enviada com sucesso.',
//                        'caption_fail' => 'Mensagem não enviada, tente novamente.',
//                        'caption_trying' => 'Enviando...',
//                    );
?>

<div class="c-formFeedback">
    <div class="c-formFeedback__status --ok"><p><?php echo $feedbackForm["caption_ok"] ?></p></div>
    <div class="c-formFeedback__status --fail"><p><?php echo $feedbackForm["caption_fail"] ?></p></div>
    <div class="c-formFeedback__status --trying"><p><?php echo $feedbackForm["caption_trying"] ?></p></div>
</div>
