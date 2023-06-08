<?php

namespace App\Http\Controllers;
use App\Models\Tiki;

use Faker\Factory as Faker;

use Illuminate\Http\Request;

class TikiController extends Controller
{
    public function seedTikiData()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Tiki::create([
                'name' => $faker->word,
                'price' => $faker->randomFloat(2, 10, 1000),
                'image' => $faker->imageUrl(),
                'description' => $faker->paragraph,
                'rate' => $faker->numberBetween(1, 5),
            ]);
        }

        return "Dữ liệu ảo đã được chèn vào bảng Tiki.";
    }
}