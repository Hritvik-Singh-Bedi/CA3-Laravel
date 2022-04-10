<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
        'name'=>'LG mobile',
        "price"=>"10000",
        "Description"=>"a smartphone with 4GB RAM and 64GB storage",
        "category"=>'mobile',
        "gallery"=>"https://www.lg.com/us/images/cell-phones/md07518564/gallery/desktop-01.jpg"
        ],
        [
            'name'=>'Oppo Mobile',
            "price"=>"15000",
            "Description"=>"a smartphone with 6GB RAM and 128GB storage",
            "category"=>'mobile',
            "gallery"=>"https://m.media-amazon.com/images/I/71KCwNV6MuL._SL1500_.jpg"
            ],   
        [
            'name'=>'Acer Monitor',
            "price"=>"18000",
            "Description"=>"Predator Monitor with refresh rate 144Hz",
            "category"=>'Computer',
            "gallery"=>"https://static.acer.com/up/Resource/Acer/Monitors/EH3/Photogallery/20190111/Acer-monitor-EH3%20series-EH273-photogallery-02.png"
        ],
        [
            'name'=>'Samsung Fridge',
            "price"=>"22000",
            "Description"=>"Latest In-built Cooling Tech",
            "category"=>'Appliances',
            "gallery"=>"https://www.sathya.in/media/49755/catalog/samsung-fridge-rr20a181bu8.jpg"
        ],
        [
            'name'=>'Sony Bravia',
            "price"=>"122000",
            "Description"=>"Dolby Audio wiht 240Hz display",
            "category"=>'TV',
            "gallery"=>"https://5.imimg.com/data5/NZ/DD/YQ/SELLER-65613283/sony-bravia-non-smart-led-tv-500x500.jpg"
        ],
    
    ]);
    }
}
