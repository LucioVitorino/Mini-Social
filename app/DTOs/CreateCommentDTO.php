<?php

namespace App\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\{Min, Max};

class CreateCommentDTO extends Data
{
    public function __construct(
        #[Max(500)]
        public readonly string $body
    ){}
}