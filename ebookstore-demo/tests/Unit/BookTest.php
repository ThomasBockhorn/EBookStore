<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Models\Book;

class BookTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_to_see_if_book_table_has_data()
    {
        $this->assertDatabaseCount('books', 10);
    }

    public function test_to_see_if_the_book_model_exists()
    {
        $book = Book::find(1);

        $this->assertModelExists($book);
    }
}
