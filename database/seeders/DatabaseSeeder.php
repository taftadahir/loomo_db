<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Bill;
use App\Models\Cart;
use App\Models\Color;
use App\Models\Coupon;
use App\Models\Detail;
use App\Models\Discount;
use App\Models\Follow;
use App\Models\Item;
use App\Models\Newsletter;
use App\Models\NewsletterTopic;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Phone;
use App\Models\Price;
use App\Models\Product;
use App\Models\RoleUser;
use App\Models\Seen;
use App\Models\Shipping;
use App\Models\Star;
use App\Models\Store;
use App\Models\Supplier;
use App\Models\User;
use App\Models\Wishlist;
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
        $this->call(StatusSeeder::class);
        User::factory(10)->create();
        
        $this->call(ConditionSeeder::class);
        Store::factory(100)->create();
        Product::factory(500)->create();
        
        Phone::factory(20)->create();

        $this->call(RoleSeeder::class);

        RoleUser::factory(10)->create();
        
        $this->call(PermissionSeeder::class);
        
        $this->call(PermissionRoleSeeder::class);

        $this->call(CurrencySeeder::class);
        Price::factory(600)->create();
        
        $this->call(CountrySeeder::class);
        
        $this->call(CitySeeder::class);
        
        $this->call(CategorySeeder::class);
        
        $this->call(SizeSeeder::class);

        Color::factory(30)->create();
        
        $this->call(BrandSeeder::class);
        
        Supplier::factory(5)->create();
        
        $this->call(ShippingModeSeeder::class);
        Address::factory(20)->create();
        Shipping::factory(10)->create();
        Order::factory(50)->create();

        $this->call(PaymentMethodSeeder::class);
        Payment::factory(10)->create();
        Bill::factory(80)->create();

        $this->call(ModeleSeeder::class);
        
        Seen::factory(50000)->create();
        
        Star::factory(3000)->create();

        Notification::factory(50)->create();
        
        Coupon::factory(50)->create();
        
        Follow::factory(500)->create();

        NewsletterTopic::factory(10)->create();
        Newsletter::factory(50)->create();

        Discount::factory(100)->create();

        Cart::factory(20)->create();

        $this->call(LanguageSeeder::class);
        Detail::factory(5000)->create();

        Wishlist::factory(10)->create();
        Item::factory(3000)->create();

        OrderItem::factory(200)->create();


        // Translation::factory(500)->create();
        // $this->call(SettingSeeder::class);
    }
}
