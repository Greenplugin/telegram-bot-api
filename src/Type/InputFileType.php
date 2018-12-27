<?php

declare(strict_types=1);

namespace Greenplugin\TelegramBot\Type;

/**
 * Class InputFileType.
 *
 * @see https://core.telegram.org/bots/api#inputfile
 */
class InputFileType
{
    /*
     * This object represents the contents of a file to be uploaded. Must be posted using multipart/form-data
     * in the usual way that files are uploaded via the browser.
     */

    public $path;
    public $filename;
    public $contentType;

    public function __construct(\SplFileInfo $file)
    {
        $this->path = $file->getRealPath();
        $this->filename = $file->getFilename();
        $this->contentType = mime_content_type($this->path);
    }
}