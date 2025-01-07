<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Small Sized Product', 'slug' => 'small-sized-product', 'description' => null],
            ['name' => 'Medium Sized Products', 'slug' => 'medium-sized-products', 'description' => null],
            ['name' => 'Large Sized Products', 'slug' => 'large-sized-products', 'description' => null],
            [
                'name' => 'Hemp Product Catalogue',
                'slug' => 'hemp-product-catalogue',
                'description' => 'The products in this section can be made with Allo (sisno fibers), Banana Fibers, and other fabric options.'
            ],
            ['name' => 'Hemp Bag', 'slug' => 'hemp-bag', 'description' => null],
            ['name' => 'Pashmina Products', 'slug' => 'pashmina-products', 'description' => null],
            ['name' => 'Woolen Products', 'slug' => 'woolen-products', 'description' => null],
            ['name' => 'Woolen Shawl', 'slug' => 'woolen-shawl', 'description' => null],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
