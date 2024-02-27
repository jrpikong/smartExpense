<?php

declare(strict_types=1);

namespace Jrpikong\SmartExpense\Filament\Clusters;

use Filament\Clusters\Cluster;

class ExpenseSystemSetup extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-s-cog';

    public static function getNavigationLabel(): string
    {
        return __('System Setup');
    }

    protected static ?string $navigationGroup = 'Expense';

    protected static ?int $navigationSort = 10;
}
