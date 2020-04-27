<?php declare(strict_types=1);

namespace Gaiterjones\RabbitMQ\Observer\Product;
use Gaiterjones\RabbitMQ\Model\MessageQueues\Product\Publisher as Publisher;

class SaveAfter implements \Magento\Framework\Event\ObserverInterface
{
    /**
    * @var Publisher
    */
    private $_publisher;

    public function __construct(
        Publisher $publisher
    )
    {
        $this->_publisher = $publisher;
    }

    /**
     * Execute observer
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(
        \Magento\Framework\Event\Observer $observer
    ) {
        $_product = $observer->getProduct();
        
        $_sku=$_product->getSku();
        $_data=array(
            'sku' => $_sku,
            'comment' => 'saved'
        );

        $this->_publisher->execute(
            json_encode($_data)
        );
    }
}
