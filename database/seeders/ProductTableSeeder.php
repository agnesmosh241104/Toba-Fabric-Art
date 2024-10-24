<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'product_name'=> 'Ulos Sadum',
            'product_price'=> 1000000,
            'product_description'=>'Ulos Sadum adalah salah satu jenis kain tradisional khas dari suku Batak Toba yang berasal dari wilayah Tapanuli, Sumatra Utara, Indonesia. Ulos adalah istilah yang digunakan untuk merujuk pada kain tenun tradisional suku Batak. Sedangkan "Sadum" adalah kata dalam bahasa Batak Toba yang berarti "setengah mati" atau "nyaris mati." Nama ini merujuk pada proses pembuatan kain Ulos Sadum yang memerlukan kerja keras dan waktu yang lama.',
            'stock'=>100,
            'image_product'=>'ulossadum.jpg'
         ]);

         Products::create([
            'product_name'=> 'Ulos Sibolang',
            'product_price'=> 1250000,
            'product_description'=>'Kain ulos sibolang juga masih tergolong sebagai kain tenun yang derajatnya cukup tinggi, sekalipun cara pembuatannya lebih sederhana.
            Dalam sebuah upacara pernikahan, ulos sibolang biasanya diberikan orang tua pengantin perempuan kepada pengantin laki-laki
            Ulos ini bisa juga diberikan kepada seorang wanita yang ditinggal mati suaminya sebagai tanda menghormati jasanya selama menjadi istri almarhum.',
            'stock'=>120,
            'image_product'=>'sibolang.jpg'
         ]);

          Products::create([
            'product_name'=> 'Ulos Ragihotang',
            'product_price'=> 1850000,
            'product_description'=>'Kain ulos Ragihotang termasuk ulos yang memiliki derajat tinggi, namun cara pembuatannya tidak sesulit ulos ragidup. Ulos ini biasanya digunakan pada saat upacara pernikahan dan diberikan oleh orangtua mempelai perempuan kepada menantu lelakinya.',
            'stock'=>130,
            'image_product'=>'ragihotang.jpg'
         ]);

          Products::create([
            'product_name'=> 'Ulos RagiIdup',
            'product_price'=> 1500000,
            'product_description'=>'Kain ulos ragidup bisa ditemukan di setiap rumah tangga suku batak di daerah-daerah yang masih kental adat bataknya. Kain ulos jenis ini secara umum terdiri atas tiga bagian yakni dua sisi yang ditenun sekaligus, dan satu bagian tengah yang ditenun tersendiri dengan sangat rumit. 
            Kain ulos ragidup jika dilihat dengan cermat dan teliti maka akan benar-benar nampak hidup baik itu warna maupun coraknya. Kain ulos ini juga menjadi perlambang betapa perlunya untuk tetap hidup dan mencapai kebahagiaan hidup.',
            'stock'=>140,
            'image_product'=>'RagiIdup.jpeg'
         ]);

          Products::create([
            'product_name'=> 'Ulos Pinuncaan',
            'product_price'=> 1580000,
            'product_description'=>'Kain ulos pinuncaan merupakan salah satu varian ulos Batak yang ini terdiri dari lima bagian yang ditenun secara terpisah yang kemudian disatukan dengan rapi hingga menjadi bentuk satu ulos.',
            'stock'=>150,
            'image_product'=>'ulospinuncaan.jpg'
         ]);

          Products::create([
            'product_name'=> 'Ulos Mangiring',
            'product_price'=> 2000000,
            'product_description'=>'Ulos mangiring merupakan jenis ulos Batak yang biasa digunakan untuk aktivitas sehari-hari. Biasanya ulos ini diberikan oleh orang yang dituakan kepada cucu-cucunya. Beberapa ada juga yang menggunakan kain ulos ini sebagai tali-tali (tutup kepala kaum pria) dan saong (tutup kepala wanita).',
            'stock'=>160,
            'image_product'=>'mangiring.jpg'
         ]);
    }
}
