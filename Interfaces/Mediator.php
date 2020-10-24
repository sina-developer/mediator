<?php

namespace Interfaces;

use Component\Component;

interface Mediator{
    public function notify(Component $sender , string $event);
}