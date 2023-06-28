<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TradeRequest;
use App\Http\Resources\TradeResource;
use App\Models\Trade;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TradeResource::collection(Trade::all());
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
    public function store(TradeRequest $request)
    {
        $data = $request->validated();
        $trade = Trade::create($data);

        return new TradeResource($trade);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trade $trade)
    {
        return new TradeResource($trade);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trade $trade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TradeRequest $request, Trade $trade)
    {
        $data = $request->validated();
        $trade->update($data);

        return new TradeResource($trade);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trade $trade)
    {
        $trade->delete();

        return response('', 204);
    }
}
