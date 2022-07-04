<?php
namespace App\Listener;

use App\Event\FieldValid;
use Hyperf\Event\Contract\ListenerInterface;
use Hyperf\Event\Annotation\Listener;
use Hyperf\Validation\Contract\ValidatorFactoryInterface;
use Hyperf\Validation\Event\ValidatorFactoryResolved;

/**
 * @Listener
 */
class FieldValidListener implements ListenerInterface
{
    public function listen(): array
    {
        // 返回一个该监听器要监听的事件数组，可以同时监听多个事件
        return [
            // FieldValid::class,
            ValidatorFactoryResolved::class,
        ];
    }

    /**
     */
    public function process(object $event)
    {
        // 事件触发后该监听器要执行的代码写在这里，比如该示例下的发送用户注册成功短信等
        // 直接访问 $event 的 user 属性获得事件触发时传递的参数值
        // $event->user;

        /**  @var ValidatorFactoryInterface $validatorFactory */
        $validatorFactory = $event->validatorFactory;
        // 注册了 foo 验证器
        $validatorFactory->extend('fields', function ($attribute, $value, $parameters, $validator) {
          //var_dump($attribute);
          //var_dump($value);
          $data = json_decode($value, true);
          var_dump($data);
            if (!is_array($data)) {
                return false;
            }
            // 判断key是否存在
            $index = 0;
            foreach($data as $bind => $bind_value) {

                if (!array_key_exists('name', $bind)) {
                    //$fail('字段索引name不存在,' . $index);
                    return false;
                }
                if (!array_key_exists('condition', $bind)) {
                    // $fail('字段索引condition不存在,' . $index);
                    return false;
                }
                if (!array_key_exists('value', $bind)) {
                    // $fail('字段索引value不存在,' . $index);
                    return false;
                }
                $index++;
            }
            return true;
        }, 'Not a valid field json');
        // 当创建一个自定义验证规则时，你可能有时候需要为错误信息定义自定义占位符这里扩展了 :foo 占位符
        $validatorFactory->replacer('fields', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':fields', $attribute, $message);
        });
    }
}

