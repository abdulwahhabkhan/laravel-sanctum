<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->text(30),
            'description'=> $this->faker->paragraph(),
            'start_date' => $this->faker->dateTimeBetween('-15 days', '+0 days'),
            'end_date'  => $this->faker->dateTimeBetween('+1 month', '+6 months'),
            'owner'=> function(){ return DB::table('users')->inRandomOrder()->first()->id; },
            'progress'=> $this->faker->numberBetween(0, 100),
            'status'=> $this->faker->boolean,
            'created_by'=> function(){ return DB::table('users')->inRandomOrder()->first()->id; }
        ];
    }
}
