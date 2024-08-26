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

    public function test_to_verify_enum_new_release(): void
    {
        $status = StatusEnum::NEWRELEASE->value;

        $this->assertEquals($status, "new_release");
    }

    public function test_to_verify_enum_clearance(): void
    {
        $status = StatusEnum::CLEARANCE->value;

        $this->assertEquals($status, "clearance");
    }

    public function test_to_vverify_enum_bestseller(): void
    {
        $status = StatusEnum::BESTSELLER->value;

        $this->assertEquals($status, "bestseller");
    }
}
