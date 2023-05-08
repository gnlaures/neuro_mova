<div class="c-countdown <?php echo $cCountdown["modifiers"] ?>" data-start-date="<?php echo $cCountdown["date"] ?>">
    <div class="c-countdown__feedback u-dnone">
        <?php include($cCountdown["componentFeedback"])?>
    </div>
    <div class="c-countdown__num --day">
        <span class="c-countdown__num__main"></span>
        <span class="c-countdown__num__caption"><?php echo $cCountdown["caption_days"] ?></span>
    </div>
    <div class="c-countdown__num --hours">
        <span class="c-countdown__num__main"></span>
        <span class="c-countdown__num__caption"><?php echo $cCountdown["caption_hours"] ?></span>
    </div>
    <div class="c-countdown__num --minutes">
        <span class="c-countdown__num__main"></span>
        <span class="c-countdown__num__caption"><?php echo $cCountdown["caption_minutes"] ?></span>
    </div>
    <div class="c-countdown__num --seconds">
        <span class="c-countdown__num__main"></span>
        <span class="c-countdown__num__caption"><?php echo $cCountdown["caption_seconds"] ?></span>
    </div>
</div>