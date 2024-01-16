<?php

namespace Shanto75\Laranotify;

class Laranotify
{
    public function notify($message)
    {
        session()->flash('message', $message);
    }
    
}