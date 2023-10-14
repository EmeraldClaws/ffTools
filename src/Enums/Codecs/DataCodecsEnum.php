<?php

namespace Emeraldclaws\Fftools\Enums\Codecs;

use Emeraldclaws\Fftools\Interfaces\StreamCodecInterface;

enum DataCodecsEnum: string implements StreamCodecInterface
{
    case BINDATA = 'bin_data';

    public function getLongName(): string
    {
        return match ($this) {
            self::BINDATA => 'binary data',
        };
    }

    public function getValue(): string
    {
        return $this->value;
    }
}