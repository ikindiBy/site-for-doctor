<?php

$recepient = "ikindi@mail.ru";
$sitename = "name of site";

$name = trim($_POST["name"]);
$mail = trim($_POST["mail"]);
$message = "from name $name and mail: $mail";

mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From $sitename");