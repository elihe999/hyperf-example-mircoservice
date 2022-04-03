<?php
/**
 * Class BaseCommand
 * User: wali- <wali-e@qq.com>
 * Date: 2022/1/7
 * Time: 10:20
 */

namespace App\Command;

use Hyperf\Command\Command;
use Hyperf\Logger\LoggerFactory;
use Psr\Log\LoggerInterface;

abstract class BaseCommand extends Command
{

    protected LoggerInterface $logger;
    protected string $loggerGroup = 'default';

    public function __construct(LoggerFactory $logger, string $name = null)
    {
        parent::__construct($name);
        $path = explode('\\', static::class);
        $this->logger = $logger->get(end($path), $this->loggerGroup);
    }


    public function getCommandFull(): string
    {
        return "php " . BASE_PATH . "/bin/hyperf.php " . $this->getCommand();
    }

    public function getCommand(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    abstract public function handle();
}