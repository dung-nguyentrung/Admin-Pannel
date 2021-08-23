<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionRole = [
                [
                'role_id'       => '1',
                'permission_id' => '1'
                ],
                [
                'role_id'       => '1',
                'permission_id' => '2'
                ],
                [
                'role_id'       => '1',
                'permission_id' => '3'
                ],
                [
                'role_id'       => '1',
                'permission_id' => '4'
                ],
                [
                'role_id'       => '1',
                'permission_id' => '5'
                ],
                [
                'role_id'       => '1',
                'permission_id' => '6'
                ],
                [
                'role_id'       => '1',
                'permission_id' => '7'
                ],
                [
                'role_id'       => '1',
                'permission_id' => '8'
                ],
                [
                'role_id'       => '1',
                'permission_id' => '9'
                ],
                [
                'role_id'       => '1',
                'permission_id' => '10'
                ],
        ];

        DB::table('permission_role')->insert($permissionRole);
    }
}
