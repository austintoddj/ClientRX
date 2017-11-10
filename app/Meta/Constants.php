<?php

namespace App\Meta;

class Constants
{
    /**
     * @constant(DEFAULT_ROLES)
     */
    const DEFAULT_ROLES = [
        'client',
        'admin',
        'super_admin',
    ];

    /**
     * @constant(DEFAULT_PERMISSIONS)
     */
    const DEFAULT_PERMISSIONS = [
        'view_users',
        'add_users',
        'edit_users',
        'delete_users',

        'view_roles',
        'add_roles',
        'edit_roles',
        'delete_roles',
    ];

    /**
     * @constant(DEFAULT_USER_PASSWORD)
     */
    const DEFAULT_USER_PASSWORD = 'password';
}
