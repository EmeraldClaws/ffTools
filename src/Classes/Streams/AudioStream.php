<?php

namespace Emeraldclaws\Fftools\Classes\Streams;

use Emeraldclaws\Fftools\Enums\Codecs\AudioCodecsEnum;

/**
 * @property AudioCodecsEnum $codecName
 */
class AudioStream extends Stream
{
    public int $channels;
    public int $sampleRate;

    public function __construct(array $ffprobeStreamData)
    {
        parent::__construct($ffprobeStreamData);

        $this->sampleRate = $ffprobeStreamData['sample_rate'];
        $this->channels = $ffprobeStreamData['channels'];
    }

    public function getCodecNameEnum(): AudioCodecsEnum
    {
        return $this->codecName;
    }
}