<?php

namespace Emeraldclaws\Fftools\Enums\Codecs;

use Emeraldclaws\Fftools\Interfaces\StreamCodecInterface;

enum AudioCodecsEnum: string implements StreamCodecInterface
{
    case AAC = 'aac';
    case AC3 = 'ac3';
    case DTS = 'dts';
    case EAC3 = 'eac3';
    case MP3 = 'mp3';
    case OPUS = 'opus';
    case PCM_S16LE = 'pcm_s16le';

    public function getLongName(): string
    {
        return match($this){
            self::AAC => "AAC (Advanced Audio Coding)",
            self::AC3 => "ATSC A/52A (AC-3)",
            self::DTS => "DCA (DTS Coherent Acoustics)",
            self::EAC3 => "ATSC A/52B (AC-3, E-AC-3)",
            self::MP3 => "MP3 (MPEG audio layer 3)",
            self::OPUS => "Opus (Opus Interactive Audio Codec)",
            self::PCM_S16LE => 'PCM signed 16-bit little-endian',
        };
    }

    public function getValue(): string
    {
        return $this->value;
    }
}