<?php

namespace MQM\UserBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class UserAdminCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('mqm_user:create')
            ->setDescription('Create a new user')
            ->addArgument('username', InputArgument::REQUIRED, 'What username do you want to add?')
            ->addArgument('password', InputArgument::REQUIRED, 'what password do you want to set?')
            ->addArgument('email', InputArgument::REQUIRED, 'what email do you want to set?')
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('username');
        $password= $input->getArgument('password');
        $email = $input->getArgument('email');
        
        $userUpgrade= $this->getContainer()->get('mqm_user.admin_helper');
        $userUpgrade->restoreUser($name, $password, $email);
    }
}