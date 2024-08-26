<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Book;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BookTest extends DuskTestCase
{

    private $book;

    public function __(Book $book)
    {
        $this->book = $book;
        $this->book->title = 'test title';
        $this->book->author = 'test author';
        $this->book->description = 'test description';
        $this->book->price = 12.56;
        $this->book->cover_image = 'http://test.com';
        $this->book->published_at = '2000-04-25';
        $this->book->status = 'sale';
        $this->book->save();
    }

    public function test_to_see_if_a_user_adds_a_book_it_will_show_up_in_sale_view(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('test title');
        });
    }


}