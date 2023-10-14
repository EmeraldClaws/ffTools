<?php

namespace Emeraldclaws\Fftools\Classes\Streams;

use Emeraldclaws\Fftools\Enums\Codecs\VideoCodecsEnum;

/**
 * @property VideoCodecsEnum $codecName
 */
class VideoStream extends Stream
{
    public int $width;
    public int $height;

    public function __construct(array $ffprobeStreamData)
    {
        parent::__construct($ffprobeStreamData);

        $this->width = $ffprobeStreamData['width'];
        $this->height = $ffprobeStreamData['height'];
    }

    public function getCodecNameEnum(): VideoCodecsEnum
    {
        return $this->codecName;
    }
}