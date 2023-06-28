<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StockRequest;
use App\Http\Resources\StockResource;
use App\Models\Stock;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return StockResource::collection(Stock::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StockRequest $request)
    {
        $data = $request->validated();
        $stock = Stock::create($data);

        return new StockResource($stock);
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stock)
    {
        return new StockResource($stock);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StockRequest $request, Stock $stock)
    {
        $data = $request->validated();
        $stock->update($data);

        return new StockResource($stock);
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    public function destroy(Stock $stock)
    {
        $stock->delete();

        return response('', 204);
    }
}
