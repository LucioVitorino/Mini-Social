<?php

namespace App\DTOs;

use Spatie\LaravelData\Data;
use SPatie\Laravelata\Atribuites\Validation\In;

class ReactionDTO extends Data
{
    public function __construct(
        public readonly string $type = 'like',
    ){}

    public static function rules(): array
    {
        return ['type' => ['required', 'string', 'in:like,love,haha,wow, sad'],];
    }
}