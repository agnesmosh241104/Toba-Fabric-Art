<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=> 'tobafabric112233',
            'full_name' => 'Toba Fabric Art Seller',
            'birth_date' => '14 March 2003',
            'address'=> 'Sitoluama, Laguboti',
            'email' => 'tobafabric10@gmail.com',
            'password' => bcrypt('majuterus'),
            'status' => 'penjual'
         ]);

        User::create([
            'username'=> 'EllaLumba14',
            'full_name' => 'Immanuella Lumbantobing',
            'birth_date' => '14 March 2023',
            'address'=> 'Tarutung, Hutabarat',
            'email' => 'majuterusppw@gmail.com',
            'password' => bcrypt('elaelaela'),
            'status' => 'pembeli'
         ]);

         User::create([
            'username'=> 'Cesesitorus001',
            'full_name' => 'Chesya Sitorus',
            'birth_date' => '11 November 2003',
            'address'=> 'Balige, Toba',
            'email' => 'chesya23@gmail.com',
            'password' => bcrypt('iamces'),
            'status' => 'pembeli'
         ]);

         User::create([
            'username'=> 'geresmorang500',
            'full_name' => 'Grace Situmorang',
            'birth_date' => '10 Oktober 2002',
            'address'=> 'Siantar, Simalungun',
            'email' => 'geressukappw@gmail.com',
            'password' => bcrypt('iamwin'),
            'status' => 'pembeli'
         ]);

         User::create([
            'username'=> 'beccabaik17',
            'full_name' => 'Rebecca Sihombing',
            'birth_date' => '17 July 2003',
            'address'=> 'Tarutung, Taput',
            'email' => 'stressppw17@gmail.com',
            'password' => bcrypt('atleastlife'),
            'status' => 'pembeli'
         ]);

    }
}
