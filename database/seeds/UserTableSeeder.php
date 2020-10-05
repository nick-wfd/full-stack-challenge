<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$admin_role = Role::where('name', 'admin')->first();

		$employee = new User();
		$employee->name = 'Admin';
		$employee->email = env('ADMIN_USER', 'admin@wfd.test');
		$employee->password = bcrypt(env('ADMIN_USER_PASSWORD', '123456+7'));
		$employee->save();
		$employee->roles()->attach($admin_role);
    }
}
