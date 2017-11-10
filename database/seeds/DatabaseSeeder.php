<?php

use App\Models\User;
use App\Models\Role;
use App\Helpers\Helper;
use App\Meta\Constants;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::defaultRoles();
        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }

        foreach(Constants::DEFAULT_ROLES as $role) {
            $role = Role::firstOrCreate(['name' => trim($role)]);

            switch ($role->name) {
                case 'client':
                    $role->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->get());
                    break;

                case 'admin':
                    $role->syncPermissions(Permission::all());
                    break;

                case 'super_admin':
                    $role->syncPermissions(Permission::all());
                    break;

                default:
                    break;
            }

            $user = factory(User::class)->create();
            $user->assignRole($role->name);
        }

        // Display the results
        $this->command->line(PHP_EOL."<info>[✔]</info> Done. You can log in with any of the following credentials:".PHP_EOL);
        $headers = ['Id', 'Name', 'Email', 'Roles', 'Password'];
        $data = [];

        foreach (User::all() as $user) {
            array_push($data, [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'roles' => implode(', ', $user->getRoleNames()->toArray()),
                'password' => Constants::DEFAULT_USER_PASSWORD
            ]);
        }

        $this->command->table($headers, $data);
    }
}
