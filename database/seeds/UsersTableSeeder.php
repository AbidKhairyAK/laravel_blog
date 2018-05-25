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
      // reset the users table
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
  		DB::table('users')->truncate();

  		// generate 3 user/author
  		DB::table('users')->insert([
  			[
  				'name' => 'John Doe',
  				'email' => 'johndoe@test.com',
          'slug' => 'john-doe',
  				'password' => bcrypt('secret')
  			],
  			[
  				'name' => 'Jane Doe',
  				'email' => 'janedoe@test.com',
          'slug' => 'jane-doe',
  				'password' => bcrypt('secret')
  			],
  			[
  				'name' => 'Edo Masaru',
  				'email' => 'edo@test.com',
          'slug' => 'edo-masaru',
  				'password' => bcrypt('secret')
  			],
  		]);
    }
}
