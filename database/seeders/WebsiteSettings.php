<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Contact;
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
        Contact::create([
            'id'=>1,
            'address' =>'WHo we are?',
            'hotline' =>'01310993182',
            'hotline2'     =>'01310993184',
            'hotline3'     =>'01310993185',
            'email'     =>'email@gmail.com',
            'facebook'     =>'https://www.facebook.com',
            'twitter'     =>'https://www.twitter.com',
            'linkedIn'     =>'https://www.linkedIn.com',
            'website'     =>'https://www.website.com',
            'skypee'     =>'https://www.skypee.com',
            'youtube'     =>'https://www.youtube.com/channel/UC1utH2aWKk6Rmcy_7ddBTDQ',
            'instagram'     =>'https://www.instagram.com',
            'whatsapp'     =>'01310993185',
            'map'    =>'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14599.595646957583!2d90.4219536!3d23.822193449999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1711400335414!5m2!1sen!2sbd',
            'description'    =>'description here',
        ]);

    }
}
