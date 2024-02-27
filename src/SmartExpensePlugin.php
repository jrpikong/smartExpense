<?php

namespace Jrpikong\SmartExpense;

use Filament\Contracts\Plugin;
use Filament\Panel;

class SmartExpensePlugin implements Plugin
{
    public function getId(): string
    {
        return 'smart-expense';
    }

    public function register(Panel $panel): void
    {
        //        $panel->res
        // TODO: Implement register() method.
    }

    public static function make(): static
    {
        return new self();
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
