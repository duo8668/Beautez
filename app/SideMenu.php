<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of SideMenu
 *
 * @author leemaousheng
 */
class SideMenu
{

    //put your code here
    public $order;
    public $fontAwesome;
    public $title;
    public $link;
    public $children;
    public $rootDomain;

    public function __construct()
    {
        $this->children = array();
        $this->rootDomain = \Illuminate\Support\Facades\Request::root();
    }

    public function addSideMenu($_order, $_title, $_link, $fontAwesome = 'fa')
    {
        $this->order = $_order;
        $this->title = $_title;
        $this->link = str_replace($this->rootDomain, '', $_link);
        $this->fontAwesome = $fontAwesome;
    }

}
