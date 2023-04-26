<?php

declare(strict_types=1);

namespace BombenProdukt\StringPowerPack\Macro;

use Illuminate\Support\Str;

final class UpperCaseFirstMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return Str::of($string)->ucfirst()->toString();
    }

    public function names(): array
    {
        return [
            'upperCaseFirst',
        ];
    }
}
