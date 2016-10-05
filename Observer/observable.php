<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 3:47 PM
 */

namespace innoppl\designPatterns\observer;


class observable
{
    // an array to store the observers to be called
    protected $observers = array();

    /**
     * @param $type type of observers that is gonna be added
     * @param $observer object instance that is going to be called when this observer needs to notified
     */
    public function attachObserver($type, $observer)
    {
        //adding observer to an array so we can have multiple observers for a single type
        $this->observers[$type][] = $observer;
    }

    /**
     * @param $type type of the observer that is to be notified
     * @param $data data that needs to be passed inside the observer
     */
    public function notify($type, $data)
    {
        //checking if that type of observer is available
        if(isset($this->observers[$type])) {

            //looping over the observers available if in case of multiple observers available
            foreach($this->observers[$type] as $observer) {

                //checking if there is a callback method available on the observer
                if(method_exists($observer, 'callback')) {

                    //applying the callback
                    $observer->callback($data);
                }
            }
        }
    }
}