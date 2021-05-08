<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
            'default_locale' => 'ar',
            'default_timezone' => 'Africa/Cairo',
            'default_currency' => 'USD',
            'supported_currencies' => ['USD','LE','SAR'],
            'store_email' => 'admin@ecommerce.test',
            'search_engine' => 'mysql',
            'local_shipping_cost' => 0,
            'outer_shipping_cost' => 0,
            'free_shipping_cost' => 0,
            'reviews_enabled' => true,
            'auto_approve_reviews' => true,
            
            'translatable' => [
                'store_name' => 'Ayman Store',
                'free_shipping_label' => 'Free Shipping',
                'local_label' => 'Local Shipping',
                'outer_label' => 'Outer Shipping',
            ],

        ]);
    }
}
