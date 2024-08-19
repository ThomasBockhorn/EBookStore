<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_to_see_if_categories_table_has_data()
    {
        $this->assertDatabaseCount('categories', 10);
    }

    public function test_to_see_if_the_category_model_exists()
    {
        $book = Category::find(1);

        $this->assertModelExists($book);
    }
}
