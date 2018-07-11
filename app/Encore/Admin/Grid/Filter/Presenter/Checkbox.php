<?php

namespace App\Encore\Admin\Grid\Filter\Presenter;

use App\Encore\Admin\Facades\Admin;

class Checkbox extends Radio
{
    protected function prepare()
    {
        $script = "$('.{$this->filter->getId()}').iCheck({checkboxClass:'icheckbox_minimal-blue'});";

        Admin::script($script);
    }
}
