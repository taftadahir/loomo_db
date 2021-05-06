<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'label' => 'active',
            'type' => 'user'
        ]);
        Status::create([
            'label' => 'blocked',
            'type' => 'user'
        ]);
        Status::create([
            'label' => 'banned',
            'type' => 'user'
        ]);
        Status::create([
            'label' => 'publish',
            'type' => 'product'
        ]);
        Status::create([
            'label' => 'out of stock',
            'type' => 'product'
        ]);
        Status::create([
            'label' => 'draft',
            'type' => 'product'
        ]);
        Status::create([
            'label' => 'featured',
            'type' => 'product'
        ]);
        Status::create([
            'label' => 'available',
            'type' => 'product'
        ]);
        Status::create([
            'label' => 'new',
            'type' => 'order'
        ]);
        Status::create([
            'label' => 'processing',
            'type' => 'order'
        ]);
        Status::create([
            'label' => 'shipping',
            'type' => 'order'
        ]);
        Status::create([
            'label' => 'delivered',
            'type' => 'order'
        ]);
        Status::create([
            'label' => 'canceled',
            'type' => 'order'
        ]);
        Status::create([
            'label' => 'active',
            'type' => 'coupon'
        ]);
        Status::create([
            'label' => 'inactive',
            'type' => 'coupon'
        ]);
        Status::create([
            'label' => 'scheduled',
            'type' => 'coupon'
        ]);
    }
}
