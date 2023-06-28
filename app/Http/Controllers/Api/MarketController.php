<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MarketRequest;
use App\Http\Resources\MarketResource;
use App\Models\Market;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MarketResource::collection(Market::all());
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
    public function store(MarketRequest $request)
    {
        $data = $request->validated();
        $market = Market::create($data);

        return new MarketResource($market);
    }

    /**
     * Display the specified resource.
     */
    public function show(Market $market)
    {
        return new MarketResource($market);
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
    public function update(MarketRequest $request, Market $market)
    {
        $data = $request->validated();
        $market->update($data);

        return new MarketResource($market);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Market $market)
    {
        $market->delete();

        return response('', 204);
    }
}
