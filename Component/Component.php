<?php 

namespace Component;

use Interfaces\Mediator;

class Component {
    protected Mediator $dialog;

    function __construct(Mediator $dialog){
        $this->dialog = $dialog;
    }

    function click(){
        $this->dialog->notify($this , "click");
    }

    function keypress(){
        $this->dialog->notify($this , "keypress");
    }
}