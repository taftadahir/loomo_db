<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = Permission::all();

        // Admin
        foreach($permissions as $permission){
            PermissionRole::create([
                'role_id' => Role::where('code', 'admin')->first()->id,
                'permission_id' => $permission->id
            ]);
        }

        // 'brand', 'category', 'city', 'condition',  'country', 'currency', 'language', 'modele', 'payment_method', 'permission', 'permission_role', 'role', 'role_user', 'seen', 'star', 'status', 'user', 'wishlist'

        // create, edit_own, read_own, read_own_advanced, delete_own, destroy_own
        $tables_seller = ['address', 'bill', 'cart', 'color', 'coupon', 'detail', 'discount', 'follow', 'item', 'newsletter', 'newsletter_topic', 'notification', 'order', 'order_item', 'payment', 'phone', 'price', 'product', 'shipping', 'shipping_mode', 'size', 'store', 'supplier', 'translation'];
        foreach($tables_seller as $value){
            PermissionRole::create([
                'role_id' => Role::where('code', 'seller')->first()->id,
                'permission_id' => Permission::where('code', 'create_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'seller')->first()->id,
                'permission_id' => Permission::where('code', 'edit_own_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'seller')->first()->id,
                'permission_id' => Permission::where('code', 'delete_own_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'seller')->first()->id,
                'permission_id' => Permission::where('code', 'destroy_own_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'seller')->first()->id,
                'permission_id' => Permission::where('code', 'read_own_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'seller')->first()->id,
                'permission_id' => Permission::where('code', 'read_advanced_own_' . $value)->first()->id
            ]);
        }

        // read, read_own, read_advanced, read_own_advanced
        $tables_seller = ['brand', 'category', 'city', 'condition',  'country', 'currency', 'language', 'modele', 'payment_method', 'role', 'seen', 'star', 'status', 'wishlist'];
        foreach($tables_seller as $value){
            PermissionRole::create([
                'role_id' => Role::where('code', 'seller')->first()->id,
                'permission_id' => Permission::where('code', 'read_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'seller')->first()->id,
                'permission_id' => Permission::where('code', 'read_own_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'seller')->first()->id,
                'permission_id' => Permission::where('code', 'read_advanced_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'seller')->first()->id,
                'permission_id' => Permission::where('code', 'read_advanced_own_' . $value)->first()->id
            ]);
        }

        // 'brand', 'category', 'city', 'condition',  'country', 'currency', 'language', 'modele', 'payment_method', 'permission', 'permission_role', 'role', 'role_user', 'seen', 'star', 'status', 'user', 'wishlist', 'bill', 'color', 'coupon', 'detail', 'discount', 'notification', 'price', 'product', 'shipping_mode', 'size', 'store', 'supplier', 'translation'

        // create, edit_own, delete_own, destroy_own, read_own, read_own_advanced
        $tables_customer = ['address', 'cart', 'follow', 'item', 'newsletter', 'newsletter_topic', 'order', 'order_item', 'payment', 'phone', 'shipping'];
        foreach($tables_customer as $value){
            PermissionRole::create([
                'role_id' => Role::where('code', 'customer')->first()->id,
                'permission_id' => Permission::where('code', 'create_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'customer')->first()->id,
                'permission_id' => Permission::where('code', 'edit_own_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'customer')->first()->id,
                'permission_id' => Permission::where('code', 'delete_own_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'customer')->first()->id,
                'permission_id' => Permission::where('code', 'destroy_own_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'customer')->first()->id,
                'permission_id' => Permission::where('code', 'read_own_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'customer')->first()->id,
                'permission_id' => Permission::where('code', 'read_advanced_own_' . $value)->first()->id
            ]);
        }


        // 'permission', 'permission_role', 'role_user', 'seen', 'star', 'bill', 'user', 'status', 'role', 'coupon', 'notification', 'supplier', 'translation', 'currency'

        // read, read_own, read_advanced, read_advanced_own
        $tables_customer = ['brand', 'category', 'city', 'condition',  'country', 'language', 'modele', 'payment_method', 'wishlist', 'color', 'detail', 'discount', 'price', 'product', 'shipping_mode', 'size', 'store'];
        foreach($tables_customer as $value){
            PermissionRole::create([
                'role_id' => Role::where('code', 'customer')->first()->id,
                'permission_id' => Permission::where('code', 'read_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'customer')->first()->id,
                'permission_id' => Permission::where('code', 'read_own_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'customer')->first()->id,
                'permission_id' => Permission::where('code', 'read_advanced_' . $value)->first()->id
            ]);
            PermissionRole::create([
                'role_id' => Role::where('code', 'customer')->first()->id,
                'permission_id' => Permission::where('code', 'read_advanced_own_' . $value)->first()->id
            ]);
        }

        // 'permission', 'permission_role', 'role_user', 'seen', 'star', 'bill', 'user', 'status', 'role', 'coupon', 'notification', 'supplier', 'translation', 'currency'

        PermissionRole::create([
            'role_id' => Role::where('code', 'customer')->first()->id,
            'permission_id' => Permission::where('code', 'read_own_bill')->first()->id
        ]);
        PermissionRole::create([
            'role_id' => Role::where('code', 'customer')->first()->id,
            'permission_id' => Permission::where('code', 'read_advanced_own_bill')->first()->id
        ]);
        PermissionRole::create([
            'role_id' => Role::where('code', 'customer')->first()->id,
            'permission_id' => Permission::where('code', 'read_own_user')->first()->id
        ]);
        PermissionRole::create([
            'role_id' => Role::where('code', 'customer')->first()->id,
            'permission_id' => Permission::where('code', 'read_advanced_own_user')->first()->id
        ]);


        // Settings plus permission
        
        // Other permissions
    }
}
