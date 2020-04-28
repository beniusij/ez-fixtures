<?php


namespace beniusij\EzFixturesBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FixturesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName("ez-fixtures:install")
            ->setDescription("Populates the database with fixtures define in the the project");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello Fixtures!");

        // TODO: add all logic here
    }
}