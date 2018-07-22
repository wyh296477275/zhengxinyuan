<?php
namespace app\index\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{
    //首页
    public function index()
    {
        return $this -> fetch();
    }
    //产品中心
    public function product()
    {
        return $this -> fetch('product');
    }
    //产品中心
    public function product2()
    {
        return $this -> fetch('product2');
    }
    //产品中心
    public function product3()
    {
        return $this -> fetch('product3');
    }
    //产品中心
    public function product4()
    {
        return $this -> fetch('product4');
    }
    //产品中心
    public function product5()
    {
        return $this -> fetch('product5');
    }
    //产品中心
    public function product6()
    {
        return $this -> fetch('product6');
    }
    //简介
    public function about()
    {
        return $this -> fetch('about');
    }

    //应用
    public function application()
    {
        return $this -> fetch('yingyong');
    }

    //新闻动态
    public function news()
    {
        return $this -> fetch('news');

    }

    //新闻动态
    public function contact()
    {
        return $this -> fetch('contact');
    }
}
