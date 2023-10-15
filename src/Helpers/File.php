<?php

namespace Emeraldclaws\Fftools\Helpers;

use Emeraldclaws\Fftools\Data\Ffprobe\FfprobeData;

class File
{

    public static function probe(string $path)
    {
        $ffprobeOutputRaw = Shell::shellExec("ffprobe -v quiet -print_format json -show_format -show_streams \"$path\" 2>&1");
        $ffprobeOutput = json_decode($ffprobeOutputRaw, true);

        return new FfprobeData($ffprobeOutput['streams']);
    }
}