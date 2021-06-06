<?php


namespace App\Message;

final class MyMessage2
{
    private $id;
    
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    
    public function getId(): int
    {
        return $this->id;
    }
}
