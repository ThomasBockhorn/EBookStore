<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Enums\StatusEnum\StatusEnum;

class EnumTest extends TestCase
{

    public function test_to_verify_enum_sale(): void
    {
        $status = StatusEnum::SALE->value;

        $this->assertEquals($status, "sale");
    }
}
