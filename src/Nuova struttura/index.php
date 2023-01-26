<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "WeFit";
//$templateParams["nome"] = "lista-articoli.php";
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/register.js");

require 'template/register-form.php';
?>