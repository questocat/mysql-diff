<?php

namespace Emanci\MysqlDiff\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @link https://symfony.com/doc/current/console.html
 */
class DiffShowCommand extends BaseCommand
{
    /**
     * Configures the current command.
     */
    protected function configure()
    {
        $this->setName('diff:show')
             ->setDescription('Show the difference information.')
             ->setHelp('This command help you to view the difference information.');
    }

    /**
     * Executes the current command.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
