<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render() {
        return ['errors' => 'product doesnot belong to user'];
    }
}
