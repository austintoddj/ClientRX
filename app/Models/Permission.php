<?php

namespace App\Models;

use App\Meta\Constants;

class Permission extends \Spatie\Permission\Models\Permission
{
    public static function defaultPermissions()
    {
        /**
         * Return the default permissions.
         *
         * @var array
         */
        return Constants::DEFAULT_PERMISSIONS;
    }
}
