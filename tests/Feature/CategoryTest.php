<?php

    namespace Tests\Feature;

    use App\Models\Category;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Tests\TestCase;

    class CategoryTest extends TestCase
    {
        use RefreshDatabase;

        public function test_add_one_category()
        {
            $category = Category::create([
                'name' => 'Category 1',
                'description' => 'Description 1',
            ]);

            $this->assertDatabaseHas('categories', [
                'id' => $category->id,
                'name' => $category->name,
                'slug' => $category->slug,
            ]);
        }

    }
