<?php

namespace Jrpikong\SmartExpense;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class SmartExpense implements Plugin
{
    public function getId(): string
    {
        return 'smartexpense';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('smartexpense', __DIR__ . '/../resources/dist/smartexpense.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('smartexpense');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
