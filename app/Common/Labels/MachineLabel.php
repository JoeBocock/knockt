<?php

namespace App\Common\Labels;

use App\Common\Labels\Concerns\HavingLabels;

final class MachineLabel implements LabelledInterface
{
    use HavingLabels;

    /**
     * @var int
     */
    public const INACTIVE = 0;

    /**
     * @var int
     */
    public const ACTIVE = 1;

    /**
     * Return the whole set of labels.
     *
     * @return array
     */
    public static function labels()
    {
        return [
            static::INACTIVE => 'Inactive',
            static::ACTIVE => 'Active',
        ];
    }
}
