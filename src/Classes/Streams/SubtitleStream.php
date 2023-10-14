<?php

namespace Emeraldclaws\Fftools\Classes\Streams;

use Emeraldclaws\Fftools\Enums\Codecs\SubtitleCodecsEnum;

/**
 * @property SubtitleCodecsEnum $codecName
 */
class SubtitleStream extends Stream
{
    public function __construct(array $ffprobeStreamData)
    {
        parent::__construct($ffprobeStreamData);
    }

    public function getCodecNameEnum(): SubtitleCodecsEnum
    {
        return $this->codecName;
    }
}