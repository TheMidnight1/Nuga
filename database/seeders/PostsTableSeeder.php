<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class PostsTableSeeder extends Seeder
{
    public function run(): void
    {
        // Fetch categories by slug
        $categories = [
            'small-sized-product' => Category::where('slug', 'small-sized-product')->first(),
            'medium-sized-products' => Category::where('slug', 'medium-sized-products')->first(),
            'large-sized-products' => Category::where('slug', 'large-sized-products')->first(),
            'hemp-bag' => Category::where('slug', 'hemp-bag')->first(),
        ];

        // Check if categories exist
        foreach ($categories as $slug => $category) {
            if (!$category) {
                $this->command->warn("Category with slug '{$slug}' not found. Seeder will skip related posts.");
            }
        }

        // Generate posts
        $posts = [
            // Small Sized Product
            [
                'title' => 'Small Product 1',
                'content' => 'Description of Small Product 1',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['small-sized-product']?->id,
            ],
            [
                'title' => 'Small Product 2',
                'content' => 'Description of Small Product 2',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['small-sized-product']?->id,
            ],
            [
                'title' => 'Small Product 3',
                'content' => 'Description of Small Product 3',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['small-sized-product']?->id,
            ],
            [
                'title' => 'Small Product 4',
                'content' => 'Description of Small Product 4',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['small-sized-product']?->id,
            ],
            // Add 2 more posts for small-sized-product...

            // Medium Sized Products
            [
                'title' => 'Medium Product 1',
                'content' => 'Description of Medium Product 1',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['medium-sized-products']?->id,
            ],
            [
                'title' => 'Medium Product 2',
                'content' => 'Description of Medium Product 2',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['medium-sized-products']?->id,
            ],
            [
                'title' => 'Medium Product 3',
                'content' => 'Description of Medium Product 2',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['medium-sized-products']?->id,
            ],
            [
                'title' => 'Medium Product 4',
                'content' => 'Description of Medium Product 2',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['medium-sized-products']?->id,
            ],
            // Add 2 more posts for medium-sized-products...

            // Large Sized Products
            [
                'title' => 'Large Product 1',
                'content' => 'Description of Large Product 1',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['large-sized-products']?->id,
            ],
            [
                'title' => 'Large Product 2',
                'content' => 'Description of Large Product 2',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['large-sized-products']?->id,
            ],
            [
                'title' => 'Large Product 3',
                'content' => 'Description of Large Product 3',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['large-sized-products']?->id,
            ],
            [
                'title' => 'Large Product 4',
                'content' => 'Description of Large Product 4',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['large-sized-products']?->id,
            ],
            // Add 2 more posts for large-sized-products...

            // Hemp Bag
            [
                'title' => 'Hemp Bag 1',
                'content' => 'Description of Hemp Bag 1',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['hemp-bag']?->id,
            ],
            [
                'title' => 'Hemp Bag 2',
                'content' => 'Description of Hemp Bag 2',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['hemp-bag']?->id,
            ],
            [
                'title' => 'Hemp Bag 3',
                'content' => 'Description of Hemp Bag 2',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['hemp-bag']?->id,
            ],
            [
                'title' => 'Hemp Bag 4',
                'content' => 'Description of Hemp Bag 2',
                'image' => null,
                'is_published' => true,
                'is_gallery' => false,
                'category_id' => $categories['hemp-bag']?->id,
            ],
            // Add 2 more posts for hemp-bag...
        ];

        // Insert posts into the database
        foreach ($posts as $post) {
            if ($post['category_id']) {
                Post::create($post);
            } else {
                $this->command->warn("Post '{$post['title']}' skipped because its category does not exist.");
            }
        }
    }
}
