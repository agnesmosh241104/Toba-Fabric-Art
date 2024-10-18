<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wishlists;
use App\Models\User;
use App\Models\products;

class WishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // Ganti dengan nilai yang sesuai
            $user_ids = [1, 2, 3]; // Contoh user_ids yang diinputkan
            $code_products = [2, 4, 6]; // Contoh code_products yang diinputkan
    
            // Loop melalui user_ids dan code_products
            for ($i = 0; $i < 3; $i++) {
                $user_id = $user_ids[$i];
                $code_product = $code_products[$i];

            // Periksa apakah pengguna dan produk tersedia
            $user = User::find($user_id);
            $product = products::where('code_product', $code_product)->first();

            if ($user && $product) {
                // Tambahkan produk ke wishlist pengguna
                Wishlists::create([
                    'user_id'            => $user->user_id,
                    'product_name'       => $product->product_name,
                    'product_price'      => $product->product_price,
                    'product_description' => $product->product_description,
                    'stock'              => $product->stock,
                    'image_product'      => $product->image_product,
                ]);

                $this->command->info("Wishlist berhasil ditambahkan untuk user_id: $user_id dan code_product: $code_product");
            }    
        }
    }
}
