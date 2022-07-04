<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Request\FooRequest;
use ClickHouseDB;

class IndexController extends AbstractController
{

    public function index(FooRequest $require)
    {
        $user = $this->request->input('user', 'Hyperf');

        // require
        // $validate = $require->validated();
        // $method = $this->request->getMethod();

        $config = [
            'host' => '192.168.99.71',
            'port' => '8123',
            'username' => 'default',
            'password' => 'Secxun@2021'
        ];
        $db = new ClickHouseDB\Client($config);
        $db->database('default');
        $db->setConnectTimeOut(5); // 5 seconds
	      // print_r($db->showTables());
        return $db->ping(true); // if can`t connect throw exception 
    }
}
