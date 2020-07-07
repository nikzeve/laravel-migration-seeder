<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $dati_prodotti = config('products');

        foreach ($dati_prodotti as $dati_prodotto) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->id = $dati_prodotto['codice'];
            $nuovo_prodotto->type = $dati_prodotto['tipo'];
            $nuovo_prodotto->name_of_product = $dati_prodotto['nome'];
            $nuovo_prodotto->quantity = $dati_prodotto['quantità'];
            $nuovo_prodotto->save();
        }

        for ($i=0; $i < 10; $i++) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->id = $faker->randomNumber($nbDigits = NULL, $strict = false);
            $nuovo_prodotto->type = $faker->word;
            $nuovo_prodotto->name_of_product = $faker->word;
            $nuovo_prodotto->quantity = $faker->randomNumber($nbDigits = NULL, $strict = false);
            $nuovo_prodotto->save();
        }
    }
}
