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
        // \DB::table('users')->insert(
        //     [
        //         'name' => 'Administrator',
        //         'email' => 'admin@mail.com',
        //         'email_verified_at' => now(),
        //         'password'  => '$2b$10$QwVD29./AE1w0ADBYB9yMu6Tf0hOG/WGdQ7hQdndNbnHvfxGCzgCG',
        //         'remember_token'  => 'asdfasdfadsf',
        //     ]
        // );
        factory(\App\User::class, 40)->create();
    }
}
