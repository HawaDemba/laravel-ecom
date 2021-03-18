<?php

namespace App\Http\Controllers\Shop;
use App\Produit;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        //SELECT * FROM produits;
        $produits = Produit::all();
        //dd($produits);
        $categories = Category::where('is_online',1)->get();
        return view('Shop.index' ,compact('produits', 'categories'));
    }
    public function produit(Request  $request) {
        //echo "page produit";
        // SELECT * FROM produits WHERE id= ?
        //dd($request->id);
        $produit= Produit::find($request->id);
        $categories = Category::where('is_online',1)->get();
        return view('shop.produit' ,compact('produit','categories'));
    
    }
    public function category(Request $request){
        //recuper toutes les categories is_online==1
        $categories = Category::where('is_online',1)->get();
        //dd($categories);
     //SELECT *FROM  produits WHERE category_id =  $request->id
        $produits = Produit::where('category_id',$request->id)->get();
        $produit = category::find($request->id);
        return view('shop.categorie' ,compact('produits','category'));
    }
    //public function tag(Request $request){
        //$tag = Tag::find($request->id);
        //$produits = $tag->produits;
        //return view('shop.categorie' ,compact('produits','tag'));
    //}

}
