<?php

namespace Emeraldclaws\Fftools\Enums\Codecs;

use Emeraldclaws\Fftools\Interfaces\StreamCodecInterface;

enum VideoCodecsEnum: string implements StreamCodecInterface
{
    case AV1 = 'av1';
    case FRAPS = 'fraps';
    case H264 = 'h264';
    case H265 = 'hevc';
    case MJPEG = 'mjpeg';
    case MPEG1VIDEO = 'mpeg1video';
    case MPEG4 = 'mpeg4';
    case VP9 = 'vp9';


    public function getLongName(): string
    {
        return match ($this) {
            self::AV1 => "Alliance for Open Media AV1",
            self::FRAPS => "Fraps",
            self::H264 => "H.264 / AVC / MPEG-4 AVC / MPEG-4 part 10",
            self::H265 => "H.265 / HEVC (High Efficiency Video Coding)",
            self::MJPEG => "Motion JPEG",
            self::MPEG1VIDEO => "MPEG-1 video",
            self::MPEG4 => "MPEG-4 part 2",
            self::VP9 => "Google VP9",
        };
    }

    public function getValue(): string
    {
        return $this->value;
    }
}