<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CapitaliseRepository")
 */
class Capitalise implements TransformInterface {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int {
        return $this->id;
    }

    public function transform(string $string) {
        $transformed = "";
        foreach(str_split($string) as $index => $char) {
            $transformed .= ($index % 2) ? strtolower($char) : strtoupper($char);
        }
        return $transformed;
    }
}
