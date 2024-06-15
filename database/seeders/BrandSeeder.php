<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Brand::factory()->create(["brand_name" => "Jackpot BOB", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/jackpotbob-casino.png", "brand_country" => "FR", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Cresus Casino", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Cresus-Casino.png", "brand_country" => "FR", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Casombie", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Casombie-Casino.png", "brand_country" => "FR", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Winoui Casino", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Winoui-Casino.png", "brand_country" => "FR", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Wild Sultan", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Wild-Sultan-Casino.png", "brand_country" => "FR", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Vegas​Plus", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/vegasplus-casino.png", "brand_country" => "FR", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Ma​Chance", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/MaChance-Casino.png", "brand_country" => "FR", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Ruby Vegas", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/ruby-vegas-casino.png", "brand_country" => "FR", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Madnix", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Madnix.png", "brand_country" => "FR", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Azur Casino", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Azur-Casino.png", "brand_country" => "CA", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Betzino", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/betzino-casino.png", "brand_country" => "CA", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Casin​ozer", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Casinozer-Casino.png", "brand_country" => "CA", "rating" => 4]);
        Brand::factory()->create(["brand_name" => "Neon​54", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/neon54-casino.png", "brand_country" => "CA", "rating" => 4]);
        Brand::factory()->create(["brand_country" => "BE", "brand_name" => "Legend Play", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,quality=80,fit=contain,width=150,height=150/img/logo300/LegendPlay-Casino.png", "rating" => 3]);
        Brand::factory()->create(["brand_country" => "BE", "brand_name" => "Slot Paradise", "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,quality=80,fit=contain,width=150,height=150/img/logo300/slotparadise-casino.png", "rating" => 3]);


    }
}
