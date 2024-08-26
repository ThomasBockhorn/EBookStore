<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Book;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BookTest extends DuskTestCase
{

    private $salesBook;

    public function __(Book $salesBook)
    {
        $this->salesBook = $salesBook;
        $this->salesBook->title = 'test title';
        $this->salesBook->author = 'test author';
        $this->salesBook->description = 'test description';
        $this->salesBook->price = 12.56;
        $this->salesBook->cover_image = 'http://test.com';
        $this->salesBook->published_at = '2000-04-25';
        $this->salesBook->status = 'sale';
        $this->salesBook->save();
    }

    public function test_to_see_if_a_user_adds_a_book_it_will_show_up_in_sale_view(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('test title');
        });
    }


}
