<?php

namespace App\Command;

use Hyperf\Command\Annotation\Command;

/**
 * @Command
 */
class ApiProducerCommand extends ProducerCommand
{
    /**
     * 执行的命令行
     *
     * @var string
     */
    protected $name = 'producer:api';


    /**
     * @return string
     */
    public function getPushCommand(): string
    {
        return make(ApiProducerCommand::class)->getCommandFull();
    }

    public function handle()
    {
        var_dump($this->getPushCommand());
        $this->line('Hello Hyperf!', 'info');
    }
}
