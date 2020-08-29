<?php

namespace App\Common\Labels\Concerns;

trait HavingLabels
{
    /**
     * Return a sinlge label.
     *
     * @param      $val
     * @param null $default
     * @return mixed
     */
    public static function Label($val, $default = null)
    {
        return static::Labels()[$val] ?? $default;
    }
}
