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
    public function save($data, Mysqli $db, PHPMailer $mail)
    {
        $result  = $db->save($data);
        if($result) {
            $mail->send();
        }

        //Now the above code doesn't needs to be changed for any changes on mysqli or PHPmailer, to make it better we can write an interface like adapter pattern to minimize the effect of those classes inside the save function

        //when unit testing we can  send mock objects as parameters inside save function to test it.
    }
}