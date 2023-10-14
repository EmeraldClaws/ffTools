<?php

namespace Emeraldclaws\Fftools\Enums\Codecs;

use Emeraldclaws\Fftools\Classes\Streams\AudioStream;
use Emeraldclaws\Fftools\Classes\Streams\DataStream;
use Emeraldclaws\Fftools\Classes\Streams\Stream;
use Emeraldclaws\Fftools\Classes\Streams\SubtitleStream;
use Emeraldclaws\Fftools\Classes\Streams\VideoStream;
use Emeraldclaws\Fftools\Interfaces\StreamCodecInterface;

enum CodecTypeEnum: string
{
    case VIDEO = 'video';
    case AUDIO = 'audio';
    case SUBTITLE = 'subtitle';
    case DATA = 'data';

    public function makeStream(array $stream): Stream
    {
        return match ($this) {
            self::VIDEO => new VideoStream($stream),
            self::AUDIO => new AudioStream($stream),
            self::SUBTITLE => new SubtitleStream($stream),
            self::DATA => new DataStream($stream),
        };
    }

    public function getCodecEnum(string $codecName): StreamCodecInterface
    {
        return match ($this) {
            self::VIDEO => VideoCodecsEnum::from($codecName),
            self::AUDIO => AudioCodecsEnum::from($codecName),
            self::SUBTITLE => SubtitleCodecsEnum::from($codecName),
            self::DATA => DataCodecsEnum::from($codecName),

        };
    }
}