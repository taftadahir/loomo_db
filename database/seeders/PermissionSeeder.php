<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables = ['address', 'bill', 'brand', 'cart', 'category', 'city', 'color', 'condition', 'country', 'coupon', 'currency', 'detail', 'discount', 'follow', 'item', 'language', 'modele', 'newsletter', 'newsletter_topic', 'notification', 'order', 'order_item', 'payment', 'payment_method', 'permission', 'permission_role', 'phone', 'price', 'product', 'role', 'role_user', "seen", 'shipping', 'shipping_mode', 'size', 'star', 'status', 'store', 'supplier', 'translation', 'user', 'wishlist'];

        foreach($tables as $value){
            Permission::create([
                'label' => 'User can create ' . $value,
                'code' => 'create_' . $value,
                'description' => null
            ]);
            Permission::create([
                'label' => 'User can edit '  . $value,
                'code' => 'edit_' . $value,
                'description' => null
            ]);
            Permission::create([
                'label' => 'User can edit own ' . $value,
                'code' => 'edit_own_' . $value,
                'description' => null
            ]);
            Permission::create([
                'label' => 'User can delete ' . $value,
                'code' => 'delete_' . $value,
                'description' => null
            ]);
            Permission::create([
                'label' => 'User can delete own ' . $value,
                'code' => 'delete_own_' . $value,
                'description' => null
            ]);
            Permission::create([
                'label' => 'User can delete permanentaly ' . $value,
                'code' => 'destroy_' . $value,
                'description' => null
            ]);
            Permission::create([
                'label' => 'User can delete permanentaly own ' . $value,
                'code' => 'destroy_own_' . $value,
                'description' => null
            ]);
            Permission::create([
                'label' => 'User can read ' . $value,
                'code' => 'read_' . $value,
                'description' => null
            ]);
            Permission::create([
                'label' => 'User can read advanced detail ' . $value,
                'code' => 'read_advanced_' . $value,
                'description' => null
            ]);
            Permission::create([
                'label' => 'User can read ' . $value,
                'code' => 'read_own_' . $value,
                'description' => null
            ]);
            Permission::create([
                'label' => 'User can read advanced detail ' . $value,
                'code' => 'read_advanced_own_' . $value,
                'description' => null
            ]);
        }

        // Settings permission

        // User other role(active, desactive, banned them)
        Permission::create([
            'label' => 'User can activate another user',
            'code' => 'activate_user',
            'description' => null
        ]);
        Permission::create([
            'label' => 'User can desactivate another user',
            'code' => 'desactivate_user',
            'description' => null
        ]);
        Permission::create([
            'label' => 'User can banish another user',
            'code' => 'banish_user',
            'description' => null
        ]);

        // Permission link to upgrade role
        Permission::create([
            'label' => 'User can change another user role to admin role',
            'code' => 'to_admin_role',
            'description' => null
        ]);
        Permission::create([
            'label' => 'User can change another user role to seller role',
            'code' => 'to_seller_role',
            'description' => null
        ]);
    }
}
