<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // Daging
            ['name' => 'Daging Sapi Premium', 'category' => 'daging', 'price' => 120000],
            ['name' => 'Daging Ayam Fillet', 'category' => 'daging', 'price' => 40000],
            ['name' => 'Steak Sapi Sirloin', 'category' => 'daging', 'price' => 150000],
            ['name' => 'Burger Daging Spesial', 'category' => 'daging', 'price' => 85000],
            ['name' => 'Sate Kambing Empuk', 'category' => 'daging', 'price' => 95000],
            ['name' => 'Beef Rendang Klasik', 'category' => 'daging', 'price' => 125000],
            ['name' => 'Chicken Cordon Bleu', 'category' => 'daging', 'price' => 70000],
            ['name' => 'Smoked Beef Brisket', 'category' => 'daging', 'price' => 140000],
            ['name' => 'Lamb Chop Rosemary', 'category' => 'daging', 'price' => 160000],
            ['name' => 'Ayam Bakar Madu', 'category' => 'daging', 'price' => 55000],
            ['name' => 'Daging Sapi Teriyaki', 'category' => 'daging', 'price' => 110000],
            ['name' => 'Meat Lover Pizza', 'category' => 'daging', 'price' => 90000],
            ['name' => 'Grilled Chicken Salad', 'category' => 'daging', 'price' => 60000],
            ['name' => 'Kebab Daging Sapi', 'category' => 'daging', 'price' => 75000],
            ['name' => 'Ayam Geprek Mozarella', 'category' => 'daging', 'price' => 45000],
            ['name' => 'Chicken Wings BBQ', 'category' => 'daging', 'price' => 50000],
            ['name' => 'Sup Daging Sapi', 'category' => 'daging', 'price' => 85000],
            ['name' => 'Ayam Popcorn Crispy', 'category' => 'daging', 'price' => 40000],
            ['name' => 'Ayam Panggang Lemon', 'category' => 'daging', 'price' => 58000],
            ['name' => 'Tongseng Kambing', 'category' => 'daging', 'price' => 100000],
            ['name' => 'Dendeng Balado', 'category' => 'daging', 'price' => 105000],
        
            // Seafood
            ['name' => 'Ikan Salmon Norwegia', 'category' => 'seafood', 'price' => 95000],
            ['name' => 'Udang Vannamei Besar', 'category' => 'seafood', 'price' => 75000],
            ['name' => 'Grilled Tuna Steak', 'category' => 'seafood', 'price' => 110000],
            ['name' => 'Shrimp Tempura', 'category' => 'seafood', 'price' => 85000],
            ['name' => 'Lobster Thermidor', 'category' => 'seafood', 'price' => 250000],
            ['name' => 'Fish and Chips', 'category' => 'seafood', 'price' => 70000],
            ['name' => 'Seafood Paella', 'category' => 'seafood', 'price' => 150000],
            ['name' => 'Kerang Saus Padang', 'category' => 'seafood', 'price' => 65000],
            ['name' => 'Sashimi Salmon Fresh', 'category' => 'seafood', 'price' => 120000],
            ['name' => 'Kepiting Saus Tiram', 'category' => 'seafood', 'price' => 190000],
            ['name' => 'Grilled Prawn Skewers', 'category' => 'seafood', 'price' => 100000],
            ['name' => 'Sup Ikan Asam Pedas', 'category' => 'seafood', 'price' => 80000],
            ['name' => 'Squid Ring Crispy', 'category' => 'seafood', 'price' => 65000],
            ['name' => 'Udang Bakar Sambal Matah', 'category' => 'seafood', 'price' => 90000],
            ['name' => 'Grilled Mackerel', 'category' => 'seafood', 'price' => 85000],
            ['name' => 'Seafood Platter', 'category' => 'seafood', 'price' => 220000],
            ['name' => 'Pepes Ikan Mas', 'category' => 'seafood', 'price' => 60000],
            ['name' => 'Ikan Bakar Rica-Rica', 'category' => 'seafood', 'price' => 95000],
            ['name' => 'Cumi Saus Padang', 'category' => 'seafood', 'price' => 80000],
            ['name' => 'Tuna Sandwich', 'category' => 'seafood', 'price' => 70000],
            ['name' => 'Sup Seafood Thai', 'category' => 'seafood', 'price' => 95000],
        
            // Sayur
            ['name' => 'Sayur Bayam Organik', 'category' => 'sayur', 'price' => 15000],
            ['name' => 'Broccoli Hijau Segar', 'category' => 'sayur', 'price' => 20000],
            ['name' => 'Salad Garden Fresh', 'category' => 'sayur', 'price' => 30000],
            ['name' => 'Sup Brokoli Keju', 'category' => 'sayur', 'price' => 35000],
            ['name' => 'Smoothie Bayam Pisang', 'category' => 'sayur', 'price' => 25000],
            ['name' => 'Stir Fry Sayuran', 'category' => 'sayur', 'price' => 28000],
            ['name' => 'Pecel Sayur Tradisional', 'category' => 'sayur', 'price' => 20000],
            ['name' => 'Capcay Goreng', 'category' => 'sayur', 'price' => 32000],
            ['name' => 'Sayur Asem Segar', 'category' => 'sayur', 'price' => 18000],
            ['name' => 'Lalapan Sayur Fresh', 'category' => 'sayur', 'price' => 15000],
            ['name' => 'Tumis Kangkung Belacan', 'category' => 'sayur', 'price' => 22000],
            ['name' => 'Sayur Lodeh Klasik', 'category' => 'sayur', 'price' => 20000],
            ['name' => 'Creamy Spinach', 'category' => 'sayur', 'price' => 30000],
            ['name' => 'Vegetarian Fried Rice', 'category' => 'sayur', 'price' => 40000],
            ['name' => 'Sayur Sop Ayam', 'category' => 'sayur', 'price' => 28000],
            ['name' => 'Orek Tempe Sayur', 'category' => 'sayur', 'price' => 22000],
            ['name' => 'Zucchini Grilled', 'category' => 'sayur', 'price' => 33000],
            ['name' => 'Jamur Crispy', 'category' => 'sayur', 'price' => 27000],
            ['name' => 'Bakwan Sayur Renyah', 'category' => 'sayur', 'price' => 20000],
            ['name' => 'Smoothie Kale Apel', 'category' => 'sayur', 'price' => 27000],
            ['name' => 'Sup Krim Jagung', 'category' => 'sayur', 'price' => 32000],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}