Gos Websocket Demo
==================

- Start websocket bundle `php app/console gos:websocket:server`
- Go to 127.0.0.1/app_dev.php/app/example
- Look at the console browser
- Play with the code :)

Feel free to add workaround !

ampq install
------------

wget http://archive.ubuntu.com/ubuntu/pool/universe/libr/librabbitmq/librabbitmq4_0.7.1-1_amd64.deb
sudo dpkg -i librabbitmq4_0.7.1-1_amd64.deb

wget http://archive.ubuntu.com/ubuntu/pool/universe/libr/librabbitmq/librabbitmq-dev_0.7.1-1_amd64.deb
sudo dpkg -i librabbitmq-dev_0.7.1-1_amd64.deb

see http://stackoverflow.com/questions/34872937/install-amqp-pecl-info-amqp-returned-1-instead-of-one-of-0

Setup RabbitMQ exchange-queue binding
-------------------------------------

http --auth guest:guest POST http://localhost:15672/api/bindings/%2F/e/gos_websocket_exchange/q/gos_websocket arguments:='{"data":"data"}'
