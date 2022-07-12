<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductStorage;

class ProductController extends Controller
{
    public function returnAllProducts() {
        return ProductStorage::all();
    }

    public function addNewProduct(Request $request) {
        $product = new ProductStorage;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;
        $product->save();
        return $product;
    }

    public function deleteSelectedItem($id) {
        return ProductStorage::where('id', $id)->delete();
    }

    public function getSelectedItem($id) {
        return ProductStorage::where('id', $id)->first();
    }

    public function updateSelectedItem(Request $request) {
        $product = ProductStorage::where('id', $request->id)->first();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;
        $product->save();
        return $product;
    }
}
