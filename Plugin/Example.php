<?php

namespace Thienminh\Trainning\Plugin;

class Example{

//    public function beforeGetTotalNum(\Thienminh\Trainning\Block\Catalog\ProductList\Toolbar $subject, $title)
//    {
//        $title = $title . " to ";
//        echo __METHOD__ . "</br>";
//
//        return [$title];
//    }
    public function afterGetTotalNum(\Thienminh\Trainning\Block\Catalog\ProductList\Toolbar $subject, $result)
    {
        return '<h1 style="color:red">'. $result .'</h1>';
    }


    public function aroundGetTotalNum(\Thienminh\Trainning\Block\Catalog\ProductList\Toolbar $subject, callable $proceed)
    {

        echo __METHOD__ . " - Before proceed() </br>";
        $result = $proceed();
        echo "</br>";
        echo __METHOD__ . " - After proceed() </br>";


        return '<h1 style="color:blue">'. $result .'</h1>';
    }
}