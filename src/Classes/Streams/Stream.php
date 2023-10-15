<?php

namespace Emeraldclaws\Fftools\Classes\Streams;

use Emeraldclaws\Fftools\Enums\Codecs\CodecTypeEnum;
use Emeraldclaws\Fftools\Interfaces\StreamCodecInterface;

abstract class Stream
{
    protected int $index;
    protected CodecTypeEnum $codecType;
    protected StreamCodecInterface $codecName;
    protected ?array $tags = [];

    public function __construct(array $ffprobeStreamData)
    {
        $this->index = $ffprobeStreamData['index'];
        $this->codecType = CodecTypeEnum::from($ffprobeStreamData['codec_type']);
        $this->codecName = $this->codecType->getCodecEnum($ffprobeStreamData['codec_name']);

        if (isset($ffprobeStreamData['tags']))
            $this->tags = $ffprobeStreamData['tags'];
    }

    public function getCodecNameEnum(): StreamCodecInterface
    {
        return $this->codecName;
    }

    public function getCodecName(): string
    {
        return $this->getCodecNameEnum()->getValue();
    }

    /**
     * @return CodecTypeEnum
     */
    public function getCodecType(): CodecTypeEnum
    {
        return $this->codecType;
    }

    /**
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    public function getTag(string $tag): string|null
    {
        if (!is_null($this->tags) && isset($this->tags[$tag]))
            return $this->tags[$tag];

        return null;
    }
}