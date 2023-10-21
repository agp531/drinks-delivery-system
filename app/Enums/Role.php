<?php

namespace App\Enums;

enum Role: int
{
    case Admin = 1;
    case Maintainer = 2;
    case User = 3;

    public function name(): string
    {
        return match ($this) {
            self::Admin => __('Admin'),
            self::Maintainer => __('Maintainer'),
            self::User => __('User'),
        };
    }
}
