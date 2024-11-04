<?php

declare(strict_types=1);

namespace BaseCodeOy\StringPowerPack\Macro;

final class AcronymMacro implements MacroInterface
{
    public function run(string $string): string
    {
        \preg_match_all('/\b\w/u', $string, $matches);

        return \implode('', $matches[0]);
    }

    public function names(): array
    {
        return [
            'acronym',
        ];
    }
}
