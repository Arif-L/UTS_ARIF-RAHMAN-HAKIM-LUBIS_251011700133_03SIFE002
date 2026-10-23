<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DigitalArtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $digital_arts = [
            [
                'title' => 'Flower Man',
                'artist' => 'Paulina Kopijkowska',
                'resolution' => '7000 x 5000 px',
                'price' => '$4.99',
                'image' => 'FlowerMan.jpg',
                'software_used' => 'Cinema 4D'
            ],
            [
                'title' => 'Flower and Heart',
                'artist' => 'ivetavaicule',
                'resolution' => 'Vektor (EPS)',
                'price' => '$14.97',
                'image' => 'Flower and Heart.jpg',
                'software_used' => 'Adobe Illustrator'
            ],
            [
                'title' => 'Dandelion',
                'artist' => 'Pobytov',
                'resolution' => '4658 x 3443 px',
                'price' => '$14.97',
                'image' => 'dandelion.jpg',
                'software_used' => 'Adobe Illustrator'
            ],
            [
                'title' => 'Hydrangea',
                'artist' => 'andersboman',
                'resolution' => '7360 x 4912 px',
                'price' => '$14.97',
                'image' => 'Hydrangea.jpg',
                'software_used' => 'Adobe Photoshop, Adobe Lightroom'
            ],
            [
                'title' => 'Tainted Flower',
                'artist' => 'DenKuvaiev',
                'resolution' => '4816 x 3192 px',
                'price' => '$4.99',
                'image' => 'tainted Flower.jpg',
                'software_used' => 'Corel Painter'
            ],
            [
                'title' => 'Tulip',
                'artist' => 'Ekely',
                'resolution' => '4200 x 2800 px',
                'price' => '$14.87',
                'image' => 'tulip.jpg',
                'software_used' => 'Adobe Photoshop, Corel Painter'
            ],
            [
                'title' => 'Abstract Flower',
                'artist' => 'Udomdech Jaroenthanaporn',
                'resolution' => 'Vektor (EPS)',
                'price' => '$4.99',
                'image' => 'AbstracFlower.jpg',
                'software_used' => 'Adobe Illustrator'
            ],
            [
                'title' => 'Yellow Flower',
                'artist' => 'Mitza',
                'resolution' => '5726 x 5293 px',
                'price' => '$14.97',
                'image' => 'yellow flower.jpg',
                'software_used' => 'Corel Painter, Adobe Photoshop'
            ],
            [
                'title' => 'Geometry Flower',
                'artist' => 'Galina Kamenskaya',
                'resolution' => 'Vektor (EPS)',
                'price' => '$4.99',
                'image' => 'GeometryFlower.jpg',
                'software_used' => 'Adobe Illustrator'
            ],
            [
                'title' => 'Cat and Flower',
                'artist' => 'liuka',
                'resolution' => '4000 x 4000 px',
                'price' => '$14.97',
                'image' => 'catandflower.jpg',
                'software_used' => 'Corel Painter'
            ]
        ];
        foreach ($digital_arts as $digital_art) {
            \App\Models\digital_art::create($digital_art);
        }
    }
}