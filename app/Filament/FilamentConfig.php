<?php

declare(strict_types=1);

namespace App\Filament;

use Filament\Forms\Components;
use Filament\Support\Facades\FilamentColor;

final class FilamentConfig
{
    public function configureFields(): self
    {
        Components\TextInput::configureUsing(function (Components\TextInput $component): void {
            $component->autocomplete(false);
        });

        Components\Select::configureUsing(function (Components\Select $component): void {
            $component->native(false);
        });

        return $this;
    }

    public function configureColors(): self
    {
        FilamentColor::register([]);

        return $this;
    }
}
