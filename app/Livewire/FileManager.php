<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Storage;

class FileManager extends Component
{
    public string $location = '/';

    #[Computed]
    public function listContents()
    {
        return Storage::listContents($this->location);
    }

    #[Computed]
    public function breadcumb(): array
    {
        return Str::of($this->location)
            ->explode('/')
            ->filter()
            ->reduce(function ($carry, $item) {
                $carry[$item] = $carry
                    ? last($carry) . '/' . $item
                    : $item;

                return $carry;
            }) ?? [];
    }

    public function render()
    {
        return view('livewire.file-manager')
            ->layout('layouts.app');
    }
}
