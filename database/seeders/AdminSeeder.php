<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Admin::truncate();  
        $admin = Admin::create([
            'email' => "e-ticket@gmail.com",
            'password' => Hash::make('1234')      
        ]);
    }
}      