<?php

namespace App\Enums\StatusEnum;

enum StatusEnum: String{
    case SALE = 'Sale';
    case NEWRELEASE = 'New Release';
    case CLEARANCE = 'Clearance';
    case BESTSELLER = 'Best Seller';
}
