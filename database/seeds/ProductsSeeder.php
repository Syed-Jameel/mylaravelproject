<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                "name"=> "Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops",
                "price"=> '₹2500',
                "category"=> "men's clothing",
                "gallery"=> "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
                "description"=> "Your perfect pack for everyday use and walks in the forest. Stash your laptop (up to 15 inches) in the padded sleeve, your everyday",
            ],
            [
                "name"=> "Mens Cotton Jackets",
                "price"=> '₹5000',
                "category"=> "men's clothing",
                "gallery"=> "https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg",
                "description"=> "great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, cycling, traveling or other outdoors.",
            ],
            [
                "name"=> "White Gold Plated Princess",
                "price"=> '₹20,000',
                "category"=> "jewelery",
                "gallery"=> "https://fakestoreapi.com/img/71YAIFU48IL._AC_UL640_QL65_ML3_.jpg",
                "description"=> "Classic Created Wedding Engagement Solitaire Diamond Promise Ring for Her. Gifts to spoil your love more for Engagement, Wedding, Anniversary, Valentine's Day.",
            ],
            [
                "name"=> "Opna Women's Short Sleeve Moisture",
                "price"=> '₹4000',
                "category"=> "women's clothing",
                "gallery"=> "https://fakestoreapi.com/img/51eg55uWmdL._AC_UX679_.jpg",
                "description"=> "100% Polyester, Machine wash, 100% cationic polyester interlock, Machine Wash & Pre Shrunk for a Great Fit, Lightweight",
            ],
            [
                "name"=> "Acer SB220Q bi 21.5 inches Full HD",
                "price"=> '₹44,000',
                "category"=> "electronics",
                "gallery"=> "https://fakestoreapi.com/img/81QpkIctqPL._AC_SX679_.jpg",
                "description"=> "21. 5 inches Full HD (1920 x 1080) widescreen IPS display And Radeon free Sync technology. No compatibility for VESA Mount Refresh Rate: 75Hz",
            ],
            [
                "name"=> "Pierced Owl Rose Gold Plated Stainless Steel Double",
                "price"=> '₹11,000',
                "category"=> "jewelery",
                "gallery"=> "https://fakestoreapi.com/img/51UDEzMJVpL._AC_UL640_QL65_ML3_.jpg",
                "description"=> "Rose Gold Plated Double Flared Tunnel Plug Earrings. Made of 316L Stainless Steel",
            ],
            
        ]);
    }
}
