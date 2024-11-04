<?php

declare(strict_types=1);

namespace BaseCodeOy\StringPowerPack\Macro;

use Illuminate\Support\Str;

final class HeadlineCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return Str::of($string)->headline()->toString();
    }

    public function names(): array
    {
        return [
            'headlineCase',
        ];
    }
}
