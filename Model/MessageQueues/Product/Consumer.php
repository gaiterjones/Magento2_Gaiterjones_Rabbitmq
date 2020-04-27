<?php declare(strict_types=1);

namespace Gaiterjones\RabbitMQ\Model\MessageQueues\Product;

/**
 * Class Consumer
 * @package Gaiterjones\RabbitMQ\MessageQueues\Product
 */
class Consumer
{
     /**
     * Consumer constructor.
     */
     public function __construct()
     {

     }

     public function processMessage(string $_data)
     {

         // do something with message queue data
         echo $_data."\n";
     }

}
