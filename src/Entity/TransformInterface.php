<?php
declare(strict_types=1);

namespace App\Entity;


interface TransformInterface {
    public function transform(string $string);
}