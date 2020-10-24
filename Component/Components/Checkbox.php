<?php

namespace Component\Components;

use Component\Component;

class Checkbox extends Component{
    public bool $checked = false;
    public function check(){
        $this->checked = !$this->checked;
        $this->dialog->notify($this , "check");
    }
}