<?php
namespace App\Event;

class FieldValid
{
    // 建议这里定义成 public 属性，以便监听器对该属性的直接使用，或者你提供该属性的 Getter
    public $field;
    
    public function __construct($field)
    {
        $this->field = $field;    
    }
}

