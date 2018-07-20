<?php

namespace AkKeRise\Test;

use AkKeRise\Base\Mapvin;
use PHPUnit_Framework_TestCase;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MapvinTest
 *
 * @author akker
 */
class MapvinTest extends PHPUnit_Framework_TestCase {

    public function mapvin() {
        $mapvin = new Mapvin();
        $this->assertTrue($mapvin->mapsvinmart()); 
    }

}
