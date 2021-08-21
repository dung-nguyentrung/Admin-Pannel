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

        ];

        Permission::insert($permission);
    }
}
