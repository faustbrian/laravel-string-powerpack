<?php

declare(strict_types=1);

namespace BombenProdukt\StringPowerPack\Macro;

use Illuminate\Support\Str;

final class UpperCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return Str::of($string)->upper()->toString();
    }

    public function names(): array
    {
        return [
            'upperCase',
        ];
    }
}
