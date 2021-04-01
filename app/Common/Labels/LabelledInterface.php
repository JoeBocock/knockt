<?php

namespace App\Common\Labels;

/**
 * Interface used to represent Labelled content.
 */
interface LabelledInterface
{
    /**
     * Return the whole set of labels.
     *
     * @return array
     */
    public static function Labels();

    /**
     * Return a sinlge label.
     *
     * @param      $val
     * @param null $default
     *
     * @return mixed
     */
    public static function Label($val, $default = null);
}
