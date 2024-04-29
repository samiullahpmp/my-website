<?php



ob_start();

include  'template/home.html.php';

$heading = ob_get_clean();

include 'jokes.php';
include 'template/layout.html.php';