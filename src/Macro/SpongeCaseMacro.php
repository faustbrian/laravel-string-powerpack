<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Stringy\Macro;

final class SpongeCaseMacro implements MacroInterface
{
    #[\Override()]
    public function run(string $string): string
    {
        $result = '';

        for ($i = 0; $i < \mb_strlen($string); ++$i) {
            $result .= \mt_rand(0, 1) !== 0 ? \mb_strtoupper($string[$i]) : \mb_strtolower($string[$i]);
        }

        return $result;
    }

    #[\Override()]
    public function names(): array
    {
        return [
            'spongeCase',
            'spongeBobCase',
        ];
    }
}
