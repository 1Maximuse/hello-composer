<?php

namespace maximuse\HelloWorld\Listeners;

use maximuse\HelloWorld\Events\ShowHelloWasCalled;

class UpdatePostTitle
{
    public function handle(ShowHelloWasCalled $event)
    {
        config(['helloworld.name1' => "Nama baru dari Listener"]);
    }
}