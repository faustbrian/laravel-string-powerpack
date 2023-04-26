<?php

declare(strict_types=1);

namespace BombenProdukt\StringPowerPack\Macro;

interface MacroInterface
{
    public function run(string $string): string;

    /**
     * @return string[]
     */
    public function names(): array;
}
