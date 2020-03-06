<?php


namespace App\Entity;


class Logger {
    public function log($message) {
        file_put_contents(__DIR__.'/../../logs/info.log', $message, FILE_APPEND);
    }
}