<?php

namespace App\Encore\Admin\Grid\Filter;

class NotIn extends In
{
    /**
     * {@inheritdoc}
     */
    protected $query = 'whereNotIn';
}
