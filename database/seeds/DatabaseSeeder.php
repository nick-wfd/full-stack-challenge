<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

		// Create 'admin', 'supervisor' and 'executive' roles
		$this->call(RoleTableSeeder::class);
		// Create admin user
		$this->call(UserTableSeeder::class);
    }
}
