<?php

namespace Database\Seeders;

use App\Models\About;
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
            'logo' =>'1709096538.png',
            'banner'     =>'1709096538.png',
            'icon'    =>'1709096538.png',
        ]);
        About::create([
            'id'=>1,
            'title' =>'WHo we are?',
            'image1' =>'IMG_20230509_125104~2.jpg',
            'image2'     =>'IMG_20230509_125104~2.jpg',
            'image3'    =>'IMG_20230509_125104~2.jpg',
            'description'    =>'description here',
        ]);

    }
}
