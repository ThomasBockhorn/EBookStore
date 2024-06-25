<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{

    public function test_to_see_if_book_table_has_data()
    {
        $this->assertDatabaseCount('books', 10);
    }

}
