<?php

namespace Emeraldclaws\Fftools\Classes\Streams;

use Emeraldclaws\Fftools\Enums\Codecs\DataCodecsEnum;

/**
 * @property DataCodecsEnum $codecName
 */
class DataStream extends Stream
{
    public function __construct(array $ffprobeStreamData)
    {
        parent::__construct($ffprobeStreamData);
    }

    public function getCodecNameEnum(): DataCodecsEnum
    {
        return $this->codecName;
    }
}