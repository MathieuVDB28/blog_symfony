<?php

namespace App\Uploader;

use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Uploader implements UploaderInterface
{
    /**
     * @var SluggerInterface 
     */
    private $slugger;

    /**
     * @var string 
     */
    private $uploadsAbsoluteDir;

    /**
     * @var string 
     */
    private $uploadsRelativeDir;

    /**
     * Uploader constructor.
     * @param SluggerInterface $slugger
     * @param string $uploadsAbsoluteDir
     * @param string $uploadsRelativeDir
     */
    public function __construct(SluggerInterface $slugger, string $uploadsAbsoluteDir, string $uploadsRelativeDir)
    {
        $this->slugger = $slugger;
        $this->uploadsAbsoluteDir = $uploadsAbsoluteDir;
        $this->uploadsRelativeDir = $uploadsRelativeDir;
    }

    /**
     * @inheritDoc
     */
    public function upload(UploadedFile $file): string
    {
        $filename = sprintf(
            "%s_%s.%s",
            $this->slugger->slug($file->getClientOriginalName()),
            uniqid(),
            $file->getClientOriginalExtension()
        ); 

    $file->move($this->uploadsAbsoluteDir, $filename);

    return $this->uploadsRelativeDir . "/" . $filename;
    }
}