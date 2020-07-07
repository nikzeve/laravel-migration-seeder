<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
    }
}
