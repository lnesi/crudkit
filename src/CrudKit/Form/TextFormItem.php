<?php

namespace CrudKit\Form;

class TextFormItem extends HorizontalItem{

    public function renderInternal()
    {
    	$directives = $this->getAngularDirectives ();
        $value = isset($this->config['value']) ? $this->config['value'] : "";
       
        $disabled=$this->config['disabled']?'disabled':'';

        return <<<COMP
        <input type="text" class="form-control" {$disabled}  id="{$this->id}" placeholder="" $directives />
COMP;
    }
}