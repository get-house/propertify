<?php

namespace App\Domain\Property\Actions;

use App\Domain\Property\Data\PropertyData;
use App\Domain\Property\Models\Property;

class CreateNewProperty
{
    public function __invoke(PropertyData $propertyData): Property
    {
        $property = Property::create([
            'name' => $propertyData->name,
            'price' => $propertyData->price,
            'description' => $propertyData->description,
            'address' => $propertyData->address,
            'city' => $propertyData->city,
            'state' => $propertyData->state,
            'size' => $propertyData->size,
            'landlord_id' => $propertyData->landlord->id,
        ]);

        return $property;
    }
}
