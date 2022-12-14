<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;
use App\Http\Requests\Sale\StoreRequest;
use App\Http\Requests\Sale\UpdateRequest;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::get();
        return view('admin.sale.index', compact('sales'));
    }

  
    public function create()
    {   
        $clients = Client::get();
        return view('admin.sale.create', compact('providers'));
    }

 
    public function store(StoreRequest $request)
    {   
        $sale = Sale::create($request->all());

    public function show(Sale $sale)
    {
        return view('admin.sale.show', compact('sale'));
    }

  
    public function edit(Sale $sale)
    {
        $clients = Client::get();
        return view('admin.sale.show', compact('sale'));
    }


    public function update(UpdateRequest $request, Sale $sale)
    {
        // $sale->update($request->all());
        // return redirect()->route('sales.index');
    }

    public function destroy(Sale $sale)
    {
        // $sale->delete();
        // return redirect()->route('sales.index');
    }
