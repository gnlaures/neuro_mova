<?php
if(isset($cPhoto["figcaption"]) && $cPhoto["figcaption"] !== '') {
    $cPhoto_middleStructure = '<figure><div class="u-aspectRatio '. $cPhoto["image_ratio"] .'"><img src="'. $cPhoto["image"] .'" alt="'. $cPhoto["image_alt"] .'"></div><figcaption>'. $cPhoto["figcaption"] .'</figcaption></figure>';
} else {
    $cPhoto_middleStructure = '<figure><div class="u-aspectRatio '. $cPhoto["image_ratio"] .'"><img src="'. $cPhoto["image"] .'" alt="'. $cPhoto["image_alt"] .'"></div></figure>';
}
?>

<?php if ($cPhoto["a_href"] === "") { ?>
    <div class="c-photo <?php echo $cPhoto["modifiers"] ?>">
        <?php echo $cPhoto_middleStructure ?>
    </div>
<?php } else { ?>
    <a href="<?php echo $cPhoto["a_href"] ?>" target="<?php echo $cPhoto["a_target"] ?>" class="c-photo <?php echo $cPhoto["modifiers"] ?>" title="<?php echo $cPhoto["figcaption"] ?>" <?php if ($cPhoto["fancybox"]) { ?>data-fancybox="<?php echo $cPhoto["fancybox__name"] ?>"<?php } ?>>
        <?php echo $cPhoto_middleStructure ?>
    </a>
<?php } ?>
