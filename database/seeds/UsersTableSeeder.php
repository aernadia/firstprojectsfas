<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'no_id' => '12345',
            'email' => 'admin@blog.com',
            'password' => bcrypt('123456789'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Ayu Ernadia',
            'no_id' => '2019489544',
            'email' => 'ayu@blog.com',
            'password' => bcrypt('123456789'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Adriana Nadia',
            'no_id' => '2019489545',
            'email' => 'adriana@blog.com',
            'password' => bcrypt('123456789'),
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'En. Ahmad',
            'no_id' => '54321',
            'email' => 'ahmad@blog.com',
            'password' => bcrypt('123456789'),
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'En. Zaki',
            'no_id' => '67890',
            'email' => 'zaki@blog.com',
            'password' => bcrypt('123456789'),
        ]);

        DB::table('users')->insert([
            'role_id' => '4',
            'name' => 'Pn. Mila',
            'no_id' => '13452',
            'email' => 'mila@blog.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
