<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestPushCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('test:push')
            ->setDescription('Sends a test push message.')
            ->addArgument(
                'message',
                InputArgument::REQUIRED,
                'The message to send.'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $pusher = $this->getContainer()->get('gos_web_socket.amqp.pusher');
        //push(data, route_name, route_arguments, $context)
        $pusher->push($input->getArgument('message'), 'acme_topic');
    }

}
