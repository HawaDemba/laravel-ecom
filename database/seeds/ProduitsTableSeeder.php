<?php

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit= new \App\Produit();
        $produit->nom = "T_schirt Goonies";
        $produit->prix_ht = 25;
        $produit->description = "T_schirt du film les Goonies";
        $produit->photo_principale = "image1.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T_schirt Star Treck";
        $produit->prix_ht = 20;
        $produit->description = "T_schirt du film les Star Trek";
        $produit->photo_principale = "image2.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T_schirt M. Happy";
        $produit->prix_ht = 35;
        $produit->description = "T-schirt qui rend heureux ";
        $produit->photo_principale = "image3.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T_schirt les meillleurs";
        $produit->prix_ht = 25;
        $produit->description = "T-schirt pour les femmes";
        $produit->photo_principale = "image4.jpg";
        $produit->category_id = 2;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T_schirt cool";
        $produit->prix_ht = 30;
        $produit->description = "T-schirt pour les amoureux";
        $produit->photo_principale = "image5.jpg";
        $produit->category_id = 2;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T_schirt woman";
        $produit->prix_ht = 25;
        $produit->description = "T-schirt pour les belles femmes";
        $produit->photo_principale = "image6.jpg";
        $produit->category_id = 2;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-schirt man";
        $produit->prix_ht = 15;
        $produit->description = "T-schirt pour homme";
        $produit->photo_principale = "image7.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T_schirt des animateurs";
        $produit->prix_ht = 35;
        $produit->description = "T-schirt pour les animateurs";
        $produit->photo_principale = "image8.jpg";
        $produit->category_id = 3;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T_schirt handball";
        $produit->prix_ht = 25;
        $produit->description = "T-schirt pour les handballeuses";
        $produit->photo_principale = "image9.jpg";
        $produit->category_id = 5;
        $produit->save();
    }
}
