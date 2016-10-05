<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 5:52 PM
 */

$user = "root";
$pass = "123450";
$port = "8880";
$db = new Mysqli($user, $pass, $port);

$smtp = 'smtp.google.com';
$smtpUser = 'someuser@gmail.com';
$smtpPass = 'something';
$mail = new PHPMailer($smtp, $smtpUser, $smtpPass);

$data = array("user" => "vignesh", "password" => "aeiou");
$model = new \innoppl\designPatterns\di\userModel();

$model->save($data, $db, $mail);