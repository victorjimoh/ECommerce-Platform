<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=4, $asText=true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'short_description' => $this->faker->text(100),
            'description' => $this->faker->text(400),
            'slug' => $slug,
            'price' => $this->faker->numberBetween(9.99,30.00),
            'sale_price'=> $this->faker->numberBetween(10,150),
            'SKU' => 'DIGI'.$this->faker->unique()->numberBetween(100, 500),
            'stock_status' => 'in_stock',
            'quantity' => $this->faker->numberBetween(1,10),
            'category_id' => $this->faker->numberBetween(1,6),
            'image' => $this->faker->numberBetween(3,12). '.jpg',

        ];
    }
}
