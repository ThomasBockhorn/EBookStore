<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class BookTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_to_see_if_book_table_has_data(): void
    {
        $this->assertDatabaseCount('books', 10);
    }

    public function test_to_see_if_the_book_model_exists(): void
    {
        $book = Book::find(1);

        $this->assertModelExists($book);
    }
}
