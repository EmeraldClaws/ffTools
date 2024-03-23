<?php

namespace Emeraldclaws\Fftools\Enums\Codecs;

use Emeraldclaws\Fftools\Interfaces\StreamCodecInterface;

enum SubtitleCodecsEnum: string implements StreamCodecInterface
{
    case ASS = 'ass';
    case DVD_SUBTITLE = 'dvd_subtitle';
    case HDMV_PGS_SUBTITLE = 'hdmv_pgs_subtitle';
    case MOVTEXT = 'mov_text';
    case SUBRIP = 'subrip';

    public function getLongName(): string
    {
        return match ($this) {
            self::ASS => 'ASS (Advanced SSA) subtitle',
            self::DVD_SUBTITLE => 'DVD subtitles',
            self::HDMV_PGS_SUBTITLE => 'HDMV Presentation Graphic Stream subtitles',
            self::MOVTEXT => 'MOV text',
            self::SUBRIP => 'SubRip subtitle',
        };
    }

    public function getValue(): string
    {
        return $this->value;
    }
}