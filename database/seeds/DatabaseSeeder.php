<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		$this->call('RolesTableSeeder');
		$this->command->info('Roles table seeded!');
		$this->call('UsersTableSeeder');
		$this->command->info('Users table seeded!');

    }
}
