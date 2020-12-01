<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
      App\User:: create([
          'name' => 'Raul Jimenez',
          'email'=> 'al2233918234@gmail.com',
          'password'=> bcrypt('0987654321'),
      
          ]);
    }
}
