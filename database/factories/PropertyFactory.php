<?php

namespace Database\Factories;

use App\Domain\Property\Models\Property;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->word,
            'description' => $this->faker->text,
            'size' => $this->faker->numberBetween(10,100) . ' sq ft',
            'address' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'state' =>  $this->faker->randomElement(
                [
                    'Ad Dawhah',
                    'Al Ghuwayriyah',
                    'Al Jumayliyah',
                    'Al Khawr',
                    'Al Wakrah',
                    'Ar Rayyan',
                    'Jarayan al Batinah',
                    'Madinat ash Shamal',
                    'Umm Salal'
                ]
            ),
            'user_id' => User::whereHas('roles', function ($query) {
                $query->where('name', 'admin');
            })->get()->random()->id,

        ];
    }

 // list array of states in Qatar
    protected $states = [
        'Ad Dawhah',
        'Al Ghuwayriyah',
        'Al Jumayliyah',
        'Al Khawr',
        'Al Wakrah',
        'Ar Rayyan',
        'Jarayan al Batinah',
        'Madinat ash Shamal',
        'Umm Salal'
    ];

    // create a function that will return a random state from the array
    public function states()
    {
        return $this->states[array_rand($this->states)];
    }



}
