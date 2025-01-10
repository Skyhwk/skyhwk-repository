<?php

namespace Skyhwk\Repository;

use Illuminate\Support\Facades\File;

class Repository
{
    protected $basePath;
    protected $fileName;

    public function __construct()
    {
        $this->basePath = storage_path('repository');

        // Buat folder repository jika belum ada
        if (!File::exists($this->basePath)) {
            File::makeDirectory($this->basePath, 0755, true);
        }
    }

    /**
     * Set file name based on the key.
     *
     * @param string $key
     * @return $this
     */
    public function key(string $key): self
    {
        $this->fileName = $this->getPathFromKey($key);
        return $this;
    }

    /**
     * Save content to the file.
     *
     * @param string $content
     * @return string
     */
    public function save(string $content): string
    {
        if (!$this->fileName) {
            throw new \Exception("No key specified. Use Repository::key('your_key') first.");
        }

        File::put($this->fileName, $content);
        return $this->fileName;
    }

    /**
     * Get content from the file.
     *
     * @return string|null
     */
    public function get(): ?string
    {
        if (!$this->fileName) {
            throw new \Exception("No key specified. Use Repository::key('your_key') first.");
        }

        return File::exists($this->fileName) ? File::get($this->fileName) : null;
    }

    /**
     * Generate file path based on the key.
     *
     * @param string $key
     * @return string
     */
    protected function getPathFromKey(string $key): string
    {
        return $this->basePath . '/' . str_replace('.', '_', $key) . '.txt';
    }
}
