<?php

namespace App\Encore\Admin\Form\Field;

class Icon extends Text
{
    protected $default = 'fa-pencil';

    protected static $css = [
        '/resources/assets/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css',
    ];

    protected static $js = [
        '/resources/assets/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.min.js',
    ];

    public function render()
    {
        $this->script = <<<EOT

$('{$this->getElementClassSelector()}').iconpicker({placement:'bottomLeft'});

EOT;

        $this->prepend('<i class="fa fa-pencil fa-fw"></i>')
            ->defaultAttribute('style', 'width: 140px');

        return parent::render();
    }
}
