<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class IndexTest extends DuskTestCase
{
    public function testIndex(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee("Patterson's Page Turners");
        });
    }

    public function testShopMenu(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Shop');
        });
    }

    public function testAboutMenu(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('About');
        });
    }

    public function testShopLink(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Shop')
                ->waitForLocation('/shop')
                ->assertPathIs('/shop');
        });

    }

    public function testAboutLink(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('About')
                ->pause(1000)
                ->assertVisible('#about');
        });
    }
}
