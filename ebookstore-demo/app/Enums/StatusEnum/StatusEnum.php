<?php

namespace App\Enums\StatusEnum;

enum StatusEnum: String{
    case SALE = 'sale';
    case NEWRELEASE = 'new_release';
    case CLEARANCE = 'clearance';
    case BESTSELLER = 'bestseller';
}
