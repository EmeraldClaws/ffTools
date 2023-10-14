<?php

namespace Emeraldclaws\Fftools\Interfaces;

interface StreamCodecInterface
{
    public function getLongName(): string;

    public function getValue(): string;
}