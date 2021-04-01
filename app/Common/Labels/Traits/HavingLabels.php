<?php

namespace App\Common\Labels\Traits;

trait HavingLabels
{
    /**
     * Return a single label.
     *
     * @param      $val
     * @param null $default
     *
     * @return mixed
     */
    public static function Label($val, $default = null)
    {
        return static::Labels()[$val] ?? $default;
    }
}
