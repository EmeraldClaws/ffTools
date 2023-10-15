<?php

namespace Emeraldclaws\Fftools\Helpers;

class Shell
{
    public static function shellExec(string $command): bool|string|null
    {
        return shell_exec($command);
    }

    public static function exec(string $command): bool|string
    {
        return exec($command);
    }
}