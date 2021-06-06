<?php


namespace App\Handler;


use App\Message\MyMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class MyMessageHandler implements MessageHandlerInterface
{
    
    public function __invoke(MyMessage $myMessage)
    {
        throw new \InvalidArgumentException('some error happened');    
    }

}
