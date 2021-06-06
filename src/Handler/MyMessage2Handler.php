<?php


namespace App\Handler;


use App\Message\MyMessage2;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class MyMessage2Handler implements MessageHandlerInterface
{
    
    public function __invoke(MyMessage2 $myMessage)
    {
        throw new \InvalidArgumentException('some error');    
    }

}
