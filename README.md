# ffTools

ffTools is a collection of small scripts designed to simplify the process of transocding and remuxing videos.

## Requirements

- `php8.1`
- `ffmpeg`
- `nano`

PHP must have `exec()` and `shell_exec()` enabled for use on the command line.

## Installation

```
git clone https://github.com/EmeraldClaws/ffTools.git
cd ffTools/commands
composer install
```

## Running

### ffEditSubs
This script extracts the first subtitle track, edits, then remuxes the track into the original file.
```
$ ffEditSubs exampleFile.mkv
Remux? (y/[n]): y
```

### ffExtractSubs
This script will extract the first subtitle track from a container.
```
$ ffExtractSubs exampleFile.mp4
```
This will create `exampleFile.srt` in the same directory as `exampleFile.mp4`

### ffSelection
This script allows stream-by-stream selection from multiple files and produces a single file output.
```
$ ffSelection input.mp4 directors_commentary.mp3 subtitle.srt
```


Options are presented to the user allowing selection of the avalible streams.

## Development

This repository is not under active development, though changes may be made. If you've spotted a bug, please add it to the bug tracker or send a pull request! 

If you have a cool idea for another ffTool, send a pull request and we can go from there!

## License

This work is licenced under GPLv3

