<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = [
            [
                'user_id' => '1',
                'role_id' => '1'
            ]
        ];

        DB::table('role_user')->insert($userRole);
    }
}
