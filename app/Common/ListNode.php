<?php
namespace App\Common;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListNode
 *
 * @author leemaousheng
 */
class ListNode
{
    /* Data to hold */

    public $data;

    /* Link to next node */
    public $next;

    /* Node constructor */

    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }

}
