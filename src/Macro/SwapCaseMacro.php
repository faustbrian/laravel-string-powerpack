<?php

declare(strict_types=1);

namespace BombenProdukt\StringPowerPack\Macro;

final class SwapCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return \implode('', \array_map(function (string $char): string {
            $charLower = \mb_strtolower($char);

            if ($char === $charLower) {
                return \mb_strtoupper($char);
            }

            return $charLower;
        }, \mb_str_split($string)));
    }

    public function names(): array
    {
        return [
            'swapCase',
        ];
    }
}
