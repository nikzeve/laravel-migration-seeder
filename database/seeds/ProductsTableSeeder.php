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
        $dati_prodotti = [
            [
                'codice' => '1',
                'tipo' => 'Alimentare',
                'nome' => 'Gnocchi',
                'quantità' => '3'
            ],
            [
                'codice' => '2',
                'tipo' => 'Cellulare',
                'nome' => 'Iphone Xs',
                'quantità' => '7'
            ],
            [
                'codice' => '3',
                'tipo' => 'Abbigliamento',
                'nome' => 'Adidas backbag',
                'quantità' => '2'
            ]
        ];

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
