<?php

use Illuminate\Database\Seeder;

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
            'name' => 'ZN Admin',
            'username' => 'admin',
            'email' => 'admin@blog.com',     
            'password' => bcrypt (value, 'rootadmin'),
            'slug' => 'admin',
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'ZN Author',
            'username' => 'author',
            'email' => 'author@blog.com',     
            'password' => bcrypt (value, 'rootadmin'),
            'slug' => 'author',
        ]);    
    }
}
