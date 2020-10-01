<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User ;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // Create Admin User
        DB::table('users')->insert(
            array(
                'nom' => 'Super',
                'prenom' => 'Admin',
                'email' => 'admin@quiz.com',
                'password' => '$2y$10$7/Bqh2o8Ev6Qfqn5yfa1rO/pf4iyOudu.Kcb5gaBFH9OPYa3JZjci', // 123456789
                'role' => '1',
                'photo' => 'avatar.jpg'
            )
        );
    }
}
