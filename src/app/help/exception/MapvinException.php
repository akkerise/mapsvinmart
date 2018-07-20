<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AkKeRise\Help\Exception;

/**
 * Description of MapvinException
 *
 * @author akkerise
 */
class MapvinException extends \Exception {

    public function __construct(string $message = "", int $code = 0, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function test() {
        echo "<pre>";
        print_r('mapvin exception');
        die();
    }

}
