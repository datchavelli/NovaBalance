<?php

declare(strict_types=1);

namespace Framework;

class Dotenv
{
    public function load(string $path): void
    {
        if (!file_exists($path)) {
            throw new \RuntimeException("Environment file not found: $path");
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            // Ignore comments
            if (str_starts_with(trim($line), '#')) {
                continue;
            }

            list($name, $value) = explode("=", $line, 2);

            // Remove quotes if present
            $value = trim($value, "\"'");

            $_ENV[$name] = $value;
        }
    }
}
