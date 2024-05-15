<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wine;
use Illuminate\Support\Str;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_str = file_get_contents('https://api.sampleapis.com/wines/reds');
        // trasformo la striga in un array di oggetti PHP
        $data = json_decode($data_str);

        foreach($data as $wine){
            $new_wine = new Wine();
            $new_wine->winery = $wine->winery;
            $new_wine->wine = $wine->wine;
            $new_wine->average = $wine->rating->average;
            $new_wine->reviews = $wine->rating->reviews;
            $new_wine->slug = $this->generateSlug($wine->wine);
            $new_wine->location = $wine->location;
            $new_wine->image = $wine->image;
            /* dump($new_wine); */
            $new_wine->save();
        }


    }

    private function generateSlug($string){
        /*
            1. ricevo la stringa da "sluggare"
            2. genero lo slug
            3. faccio una query per vedere se lo slug è già presente nel db
            4. SE non è presente restituisco lo slug
            5. SE è presnte ne genero un'altro con un valore incrementale e ad ogni generazione verifico che non sia presente
            6. una volta trovato uno slug non presente lo restituisco
        */

        // 2.
        $slug = Str::slug($string, '-');
        $original_slug = $slug;

        // 3.
        $exixts = Wine::where('slug', $slug)->first();
        $c = 1;

        while($exixts){
            $slug = $original_slug . '-' . $c;
            $exixts = Wine::where('slug', $slug)->first();
            $c++;
        }

        // 5.
        return $slug;
    }
}
