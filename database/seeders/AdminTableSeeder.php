<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
            [
                'id'=>1,
                'name'=>'Admin',
                'type'=>'admin',
                'mobile'=>'7678532363',
                'email'=>'deepakchoudhary3012@gmail.com',
                'password'=>Hash::make('s170022200245'),
                'image'=>'',
                'status'=>1
            ],
        ];
        Admin::insert($adminRecords);
    }
}
