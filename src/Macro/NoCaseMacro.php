<?php

declare(strict_types=1);

namespace BaseCodeOy\StringPowerPack\Macro;

use Illuminate\Support\Str;

final class NoCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return Str::of($string)->title()->lower()->toString();
    }

    public function names(): array
    {
        return [
            'noCase',
        ];
    }
}
