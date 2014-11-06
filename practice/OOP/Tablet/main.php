<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../bootstrap.php';
use Tablet\Tablet;
use Tablet\App;

$tablet = new Tablet();
echo $tablet->getBateria();
