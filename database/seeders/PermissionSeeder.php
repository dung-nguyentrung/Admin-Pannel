<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'id'    => '1',
                'title' => 'permission_access'
            ],
            [
                'id'    => '2',
                'title' => 'permission_create'
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit'
            ],
            [
                'id'    => '4',
                'title' => 'permission_delete'
            ],
            [
                'id'    => '5',
                'title' => 'permission_show'
            ],
            [
                'id'    => '6',
                'title' => 'role_access'
            ],
            [
                'id'    => '7',
                'title' => 'role_create'
            ],
            [
                'id'    => '8',
                'title' => 'role_edit'
            ],
            [
                'id'    => '9',
                'title' => 'role_delete'
            ],
            [
                'id'    => '10',
                'title' => 'role_show'
            ],
        ];

        Permission::insert($permission);
    }
}
