<?php
include('components/l-nav/index.php');

$lHeaderInner = array("title" => "Sobre");
include('components/l-headerInner/index.php');

include('components/c-socialFixed/index.php');

include('components/s-about/index.php');

$sSliderCards = array("modifiers" => "--diagTop", "title" => "Lançamentos", "slider" => "slider_lancamentos.php");
include('components/s-sliderCards/index.php');

include('components/s-instagram/index.php');
include('components/l-footer/index.php');
?>


