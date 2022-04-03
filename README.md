# hyperf-example-mircoservice

Try to use Hyperf create a microservice

## requirements

redis

## tutorial

1 安装
通常来说该组件会默认存在，但如果您希望用于非 Hyperf 项目，也可通过下面的命令依赖 hyperf/command 组件：

composer require hyperf/command

composer require hyperf/devtool

### command

```shell
php bin/hyperf.php gen:command ProducerCommand
```

[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\Config\Listener\RegisterPropertyHandlerListener listener.
[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\RpcClient\Listener\AddConsumerDefinitionListener listener.
[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\JsonRpc\Listener\RegisterProtocolListener listener.
[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\ExceptionHandler\Listener\ExceptionHandlerListener listener.
[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\DbConnection\Listener\RegisterConnectionResolverListener listener.

### applicationcontext

容器实例助手函数功能

```php
use Hyperf\Utils\ApplicationContext;
```

### GuzzleHttp

composer require hyperf/guzzle

[guzzle](https://hyperf.wiki/2.0/#/zh-cn/guzzle)


### jsonrpc

[jsonrpc](https://hyperf.wiki/2.0/#/zh-cn/json-rpc?id=json-rpc-%e6%9c%8d%e5%8a%a1)

