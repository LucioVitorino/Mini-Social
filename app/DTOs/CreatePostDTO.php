<?php

namespace App\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\{Min, Max};

class CreatePostDTO extends Data
{
    public function __construct(
        #[Max(1000)]
        public readonly string $content,
        public readonly ? string $image_url = null,
    ){}
}