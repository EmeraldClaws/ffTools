<?php

namespace Emeraldclaws\Fftools\Enums\Codecs;

use Emeraldclaws\Fftools\Interfaces\StreamCodecInterface;

enum VideoCodecsEnum: string implements StreamCodecInterface
{
    case H264 = 'h264';
    case H265 = 'hevc';
    case MJPEG = 'mjpeg';

    public function getLongName(): string
    {
        return match ($this) {
            self::H264 => "H.264 / AVC / MPEG-4 AVC / MPEG-4 part 10",
            self::H265 => "H.265 / HEVC (High Efficiency Video Coding)",
            self::MJPEG => "Motion JPEG",
        };
    }

    public function getValue(): string
    {
        return $this->value;
    }
}