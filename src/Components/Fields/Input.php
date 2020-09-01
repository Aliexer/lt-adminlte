<?php

namespace LaravelTemplate\LtAdminlte\Components\Fields;

use Illuminate\View\Component;
use Illuminate\Support\Str;


class Input extends Component
{
    public $type;
    public $name;
    public $placeholder;
    public $label;
    public $value;
    public $class;
    public $formGroupClass;
    public $readonly;
    public $required;
    public $checked;
    public $icon;

    public function __construct(
        $type = 'text',
        $name = null,
        $placeholder = null,
        $label = null,
        $value = null,
        $class = null,
        $formGroupClass = null,
        $readonly = null,
        $required = false,
        $icon = null
    ) {
        $this->type = $type;
        $this->name = $name ?? str_replace('-', '_', Str::kebab($label));
        $this->placeholder = $placeholder;
        $this->label = $label;
        $this->value = old($this->name, ($value ?? ''));
        $this->class = $class;
        $this->formGroupClass = $formGroupClass;
        $this->readonly = $readonly;
        $this->required = $required;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('lt-adminlte::components.fields.input');
    }
}
