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

    public function __construct()
    {
        $this->children = array();
    }

    public function addSideMenu($_order, $_title, $_link, $fontAwesome = 'fa')
    {
        $this->order = $_order;
        $this->title = $_title;
        $this->link = $_link;
        $this->fontAwesome = $fontAwesome;
    }

}
