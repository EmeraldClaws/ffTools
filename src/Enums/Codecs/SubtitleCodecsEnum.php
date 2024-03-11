<?php

namespace Emeraldclaws\Fftools\Enums\Codecs;

use Emeraldclaws\Fftools\Interfaces\StreamCodecInterface;

enum SubtitleCodecsEnum: string implements StreamCodecInterface
{
    case ASS = 'ass';
    case MOVTEXT = 'mov_text';
    case SUBRIP = 'subrip';

    public function getLongName(): string
    {
        return match ($this) {
            self::ASS => 'ASS (Advanced SSA) subtitle',
            self::MOVTEXT => 'MOV text',
            self::SUBRIP => 'SubRip subtitle',
        };
    }

    public function getValue(): string
    {
        return $this->value;
    }
}