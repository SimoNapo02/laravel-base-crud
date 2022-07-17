<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_source = config('comics');
        foreach($data_source as $data){
            $comic = new Comic();
            $comic->title = $data['title'];
            $comic->description = $data['description'];
            $comic->thumb = $data['thumb'];
            $comic->price = $data['price'];
            $comic->series = $data['series'];
            $comic->sale_date = $data['sale_date'];
            $comic->type = $data['type'];
            $comic->artists = implode(", ",  $data['artists']);
            $comic->writers =  implode (', ', $data['writers']);
            $comic->save();

        }
        
    }
}