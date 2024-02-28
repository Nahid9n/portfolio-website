<?php

namespace Database\Seeders;

use App\Models\WebsiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteSettings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebsiteSetting::create([
            'id'=>1,
            'website_name' =>'Company Name Here',
            'logo' =>'nahid.jpeg',
            'banner'     =>'nahid.jpeg',
            'icon'    =>'nahid.jpeg',
        ]);
    }
}
