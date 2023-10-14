<?php

namespace Emeraldclaws\Fftools\Data\Ffprobe;

use Emeraldclaws\Fftools\Classes\Streams\Stream;
use Emeraldclaws\Fftools\Enums\Codecs\CodecTypeEnum;

class FfprobeData
{
    /** @var Stream[] $streams */
    protected array $streams = [];

    public function __construct(array $inputStreams)
    {
        foreach ($inputStreams as $inputStream) {
            $codecType = CodecTypeEnum::from($inputStream['codec_type']);

            $this->streams[] = $codecType->makeStream($inputStream);
        }
    }

    public function getAllStreams(): array
    {
        return $this->streams;
    }

    /**
     * @param CodecTypeEnum $codecType
     * @return Stream[]
     */
    public function getStreamsByType(CodecTypeEnum $codecType): array
    {
        return array_filter($this->streams, fn(Stream $stream) => $stream->getCodecType() == $codecType);
    }

    /**
     * @return int
     */
    public function getStreamCount(): int
    {
        return sizeof($this->streams);
    }
}