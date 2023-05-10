<?php
//    $cBreadcrumb = array(
//        array("caption" => "Home", "link" => "#"),
//        array("caption" => "Institucional", "link" => "#"),
//        array("caption" => "História", "link" => "#")
//    );
//?>

<div class="c-breadcrumb">
    <ul>
        <?php foreach ($cBreadcrumb as $item) {echo '<li><a href="' . $item["link"] . '" title="' . $item["caption"] . '">' . $item["caption"] . '</a>'. file_get_contents('media/icons/icon_caretDouble.svg') .'</li>';} ?>
    </ul>
</div>