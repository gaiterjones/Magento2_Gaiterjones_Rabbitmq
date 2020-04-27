<?php declare(strict_types=1);


namespace Gaiterjones\RabbitMQ\Helper;

use Magento\Framework\App\Helper\AbstractHelper;


class Data extends AbstractHelper
{

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }
}

