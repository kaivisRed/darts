<?php
namespace App\Controllers;
/**
 * 测试 Library 中写的路由解析类
 *
 * Class RouteTestController
 * @package App\Controllers
 */
class RouteTestController
{
    /**
     * index
     */
    public function index()
    {
        echo "RouteTestController---index";
    }

    /**
     * get 请求
     */
    public function get()
    {
        echo "RouteTestController---get";
    }

    /**
     * post 请求
     */
    public function post()
    {
        echo "RouteTestController---post";
    }
}