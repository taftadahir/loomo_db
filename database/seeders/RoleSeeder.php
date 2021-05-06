<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['label' => 'Administrator', 'code' => 'admin']);
        Role::create(['label' => 'Seller', 'code' => 'seller']);
        Role::create(['label' => 'Customer', 'code' => 'customer']);
    }
}
