<?php declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use function App\ping;

class Ping extends Command
{
    protected static $defaultName = 'ping';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(ping());
    }
}
