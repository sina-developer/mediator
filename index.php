<?php

require("./autoload.php");


use Component\Components\Button;
use Component\Components\Textbox;
use Component\Components\Checkbox;
use Mediators\DialogMediator;

$mediator = new DialogMediator();

$button = new Button($mediator);
$textbox = new Textbox($mediator);
$checkbox = new Checkbox($mediator);

$checkbox->check();
$button->click();
$textbox->keypress();