<?php

namespace App\Enums;

enum MimeType: string
{
    case PDF = 'application/pdf';
    case TEXT = 'text/plain';
    case PNG = 'image/png';
    case JPEG = 'image/jpeg';
    case ZIP = 'application/zip';

    public function icon(): string
    {
        return 'heroicon-s-' . match ($this) {
            self::PDF => 'document',
            self::TEXT => 'document',
            self::PNG => 'photo',
            self::JPEG => 'photo',
            default => 'document'
        };
    }
}
