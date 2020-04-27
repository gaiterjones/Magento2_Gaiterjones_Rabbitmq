<?php declare(strict_types=1);

namespace Gaiterjones\RabbitMQ\Model\MessageQueues\Product;
use Magento\Framework\MessageQueue\PublisherInterface;

class Publisher
{
     const TOPIC_NAME = 'gaiterjones.magento.product.save';

     /**
      * @var \Magento\Framework\MessageQueue\PublisherInterface
      */
     private $publisher;

     /**
     * Publisher constructor.
     * @param Publisher $publisher
     */
     public function __construct
     (
         PublisherInterface $publisher
     )
     {
         $this->publisher = $publisher;
     }

     /**
     * @param data
     */
     public function execute(string $_data)
     {
         $this->publisher->publish(self::TOPIC_NAME, $_data);
     }
}
