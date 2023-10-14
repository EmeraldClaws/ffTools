<?php

namespace Emeraldclaws\Fftools\Enums\Codecs;

use Emeraldclaws\Fftools\Interfaces\StreamCodecInterface;

enum AudioCodecsEnum: string implements StreamCodecInterface
{
    case AAC = 'aac';
    case AC3 = 'ac3';

    public function getLongName(): string
    {
        return match($this){
            self::AAC => "AAC (Advanced Audio Coding)",
            self::AC3 => "ATSC A/52A (AC-3)",
        };
    }

    public function getValue(): string
    {
        return $this->value;
    }
}