<?php

declare(strict_types=1);

namespace App\Command;

use App\Command\BaseCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;

class ProducerCommand extends BaseCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function configure()
    {
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
    }

    public function handle()
    {
        $this->line('Hello Hyperf!', 'info');
    }
}
