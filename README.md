# Gaiterjones RabbitMQ

    `gaiterjones/module-rabbitmq`


## Main Functionalities
Rabbit MQ Messaging example  

Example of how to use RabbitMQ Message Queuing in Magento 2.3.x. After a product is saved module queues product data using an event observer (catalog_product_save_after) and message publisher.
Consumer displays the data when consumer queue is started.

Requires a RabbitMQ server.

edit env.php

    'queue' =>
      array (
        'amqp' =>
        array (
          'host' => 'magento2_rabbitmq_1',
          'port' => 5672,
          'user' => 'guest',
          'password' => 'guest',
          'virtualhost' => '/'
         ),
      ),


After installing module run setup:upgrade to create the queue.

Confirm queue exists with

    bin/magento queue:consumers:list

Start the consumer with

    bin/magento queue:consumers:start gaiterjones_product_save

Save a product and the product data (sku) will be queued by the publisher, and read by the consumer.
