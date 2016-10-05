<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 5:46 PM
 */

namespace innoppl\designPatterns\di;

/**
 * Class userModel
 * @package innoppl\designPatterns\di
 * user model which saves the user in database and sends an email to the user
 */
class userModel
{
    /**
     * @param $data
     * Function to save data and to send email
     */
    public function save($data)
    {
        $user = "root";
        $pass = "123450";
        $port = "8880";
        $db = new Mysqli($user, $pass, $port);
        $result  = $db->save($data);
        if($result) {
            $smtp = 'smtp.google.com';
            $smtpUser = 'someuser@gmail.com';
            $smtpPass = 'something';
            $mail = new PHPMailer($smtp, $smtpUser, $smtpPass);
            $mail->send();
        }

        /**
         * we can say that the above code is bad for the follwing reasons
         *
         * 1) It's tightly coupled, any change to the mysqli or PHPMailer() classes will affect this class
         *
         * 2) When writing unit tests this tight dependencies can't be mocked with dummy objects.
         */
    }
}