<?php

namespace App\Models;

use App\Meta\Constants;

class Role extends \Spatie\Permission\Models\Role
{
    public static function defaultRoles()
    {
        /*
         * Return the default roles.
         *
         * @var array
         */
        return Constants::DEFAULT_ROLES;
    }
}
