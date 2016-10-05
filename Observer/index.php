<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 4:23 PM
 */
$observer = new \innoppl\designPatterns\observer\observable();
$mail = new \innoppl\designPatterns\observer\Mailer();
$msg = new \innoppl\designPatterns\observer\smsMessenger();
$push = new \innoppl\designPatterns\observer\pushNotifier();
//attaching mail observer
$observer->attachObserver('new-message',$mail);

//attaching sms observer
$observer->attachObserver('new-message',$msg);

//attaching push notification observer
$observer->attachObserver('new-message',$push);

//sending new message

$message = new \innoppl\designPatterns\observer\message();
$message->send('Hi there, I\'m using whatsapp');

//sending message and adding observer can happen at various places they don't have to happen at the same time. The point is those notifiers will be called once you send a message.