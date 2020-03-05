<?php


namespace App\Entity;


class Master {
    /**
     * @var TransformInterface
     */
    private $transformation;

    /**
     * Master constructor.
     * @param TransformInterface $transformation
     */
    public function __construct(TransformInterface $transformation) {
        $this->transformation = $transformation;
    }

    public function mightyMorphingTransformer(string $string) {
        return $this->transformation->transform($string);
    }

}