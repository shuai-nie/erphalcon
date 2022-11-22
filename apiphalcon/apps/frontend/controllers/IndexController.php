<?php

namespace Apiphalcon\Frontend\Controllers;

//use QL\QueryList;
use Phalcon\Mvc\View;
use Phalcon\Loader;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $loader = new Loader();
        $loader->registerNamespaces(
            [
                'QL/QueryList'    => 'vendor/QL/QueryList',
            ]
        );
        $loader->register();
        $QueryList = new \QL\QueryList();
        $data = $QueryList->get('http://cms.querylist.cc/bizhi/453.html')->find('img')->attr('src');
//        var_dump($data->all());

    }

}

