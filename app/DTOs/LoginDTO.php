<?php

namespace App\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\Email;

class LoginDTO extends Data
{
    Public function __construct(
        #[Email]
        public readonly string $email,
        public readonly string $password,
    ){}
}