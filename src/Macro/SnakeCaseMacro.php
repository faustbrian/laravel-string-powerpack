<?php

declare(strict_types=1);

namespace BombenProdukt\StringPowerPack\Macro;

use Illuminate\Support\Str;

final class SnakeCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return Str::of($string)->snake()->toString();
    }

    public function names(): array
    {
        return [
            'snakeCase',
        ];
    }
}
