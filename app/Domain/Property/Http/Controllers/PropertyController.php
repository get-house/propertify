<?php

namespace App\Domain\Property\Http\Controllers;

use App\Domain\Property\Data\PropertyData;
use App\Domain\Property\Models\Property;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = Property::with('landlord')->cursorPaginate();

        return inertia('Property/Index', [
            'properties' => PropertyData::collection($property),
            'can' => [
                'create' => auth()->user()?->can('create property'),
                'update' => auth()->user()?->can('update property'),
                'delete' => auth()->user()?->can('delete property'),
                'view' => auth()->user()?->can('view property'),
                'viewAll' => auth()->user()?->can('view properties'),
                'viewAny' => auth()->user()?->can('view any property'),
                'restore' => auth()->user()?->can('restore property'),
                'forceDelete' => auth()->user()?->can('force delete property'),
            ],

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Property/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyData $propertyData, Property $property)
    {
        $landlord = auth()->user()->profile;
        $property->create([
            'name' => $propertyData->name,
            'price' => $propertyData->price,
            'description' => $propertyData->description,
            'landlord_id' => $landlord->id,
        ]);

        //return flash success message
        return redirect()->route('properties.index')->with([
            'success' => 'Property created successfully',
            'toast' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //
    }
}
