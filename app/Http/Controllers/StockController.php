<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::with('product')->get();
        return view('stocks.index', compact('stocks'));
    }

    public function create()
    {
        $products = Product::all();
        return view('stocks.create', compact('products'));
    }

    public function store(Request $request)
    {
        Stock::create($request->all());
        return redirect()->route('stocks.index');
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        $products = Product::all();
        return view('stocks.edit', compact('stock', 'products'));
    }

    public function update(Request $request, $id)
    {
        $stock = Stock::findOrFail($id);
        $stock->update($request->all());
        return redirect()->route('stocks.index');
    }

    public function destroy($id)
    {
        Stock::destroy($id);
        return redirect()->route('stocks.index');
    }
}
