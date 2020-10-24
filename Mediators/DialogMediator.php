<?php

namespace Mediators;

use Interfaces\Mediator;
use Component\Component;
use Component\Components\Button;
use Component\Components\Textbox;
use Component\Components\Checkbox;

class DialogMediator implements Mediator{
    private string $title = "";
    public function __construct(){
        
    }

    public function notify(Component $sender , string $event){
        if($sender instanceof Checkbox && $event == "check"){
            if($sender->checked){
                $this->title = "Log in";
            }else{
                $this->title = "Register";
            }
        }
        if($sender instanceof Button && $event == "click"){
            echo $this->title . "\n";
        }
        if($sender instanceof Textbox){
            echo "Typing...\n";
        }
    }
}