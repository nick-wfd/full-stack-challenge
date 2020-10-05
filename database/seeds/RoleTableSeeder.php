<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
	    $role_employee->name = 'admin';
	    $role_employee->description = 'All permissions';
	    $role_employee->save();

	    $role_manager = new Role();
	    $role_manager->name = 'supervisor';
	    $role_manager->description = 'This is a regular user and has the ability to add / bulk upload / view the referrals.';
	    $role_manager->save();

	    $role_manager = new Role();
	    $role_manager->name = 'executive';
	    $role_manager->description = 'This is a regular user and has the ability to view the referrals,'
	    								.' and add comments on the referrals.';
	    $role_manager->save();
    }
}
