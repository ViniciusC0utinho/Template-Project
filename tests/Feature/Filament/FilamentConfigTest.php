<?php

declare(strict_types=1);

use App\Filament\FilamentConfig;

beforeAll(function (): void {
    (new FilamentConfig)->configureFields();
});

test('it returns autocomplete off', function (): void {
    $textInput = Filament\Forms\Components\TextInput::make('test');

    expect($textInput->getAutocomplete())->toBe('off');
});

test('it returns a select is not native', function (): void {
    $select = Filament\Forms\Components\Select::make('test');

    expect($select->isNative())->toBe(false);
});
