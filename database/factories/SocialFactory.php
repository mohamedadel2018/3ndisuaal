<?php

namespace Database\Factories;

use App\Models\Social;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Social::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'icon' => '<i class="fab fa-500px"></i>',
            'link_ar' => 'ar-link',
            'link_en' => 'en-link' ,
            'link_id' => 'id-link',
        ];
    }
}
