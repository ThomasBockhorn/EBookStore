<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class IndexTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testIndex(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee("Patterson's Page Turners");
        });
    }

    public function testShopMenu(): void
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/')
                ->assertSee('Shop');
        });
    }
}
