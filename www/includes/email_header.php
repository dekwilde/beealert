<?php

header("Content-Type: text/html; charset=utf-8",true);
$host = "http://www.semabelhasemalimento.com.br/beealert";
$top = "/img/emkt_header.jpg";
$linktop = $host.$top;
$botton = "/img/emkt_header.jpg";
$linkbotton = $host.$botton;

$subject = "Bee Alert"; // error caracter latino

$headers = "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: Bee Alert <no-reply@semabelhasemalimento.com.br>\r\n";
$headers .= "Reply-To: no-reply@semabelhasemalimento.com.br\r\n";
$headers .= "Return-path: no-reply@semabelhasemalimento.com.br";

?>
