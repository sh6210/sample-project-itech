<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = ['CEO', 'COO', 'GENERAL MANAGER', 'MANAGER', 'SUPERVISOR-1', 'SUPERVISOR-2', 'STAFF'];

        foreach ($title as $each) {
            $custom[] = [
                "title" => $each,
                "created_at" => now(),
            ];
        }

        DB::table('roles')->insert($custom);
    }
}
