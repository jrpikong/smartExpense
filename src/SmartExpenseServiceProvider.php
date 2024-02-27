<?php

declare(strict_types=1);

namespace Jrpikong\SmartExpense;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SmartExpenseServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('smartExpense')
            ->hasConfigFile()
            ->hasTranslations()
            ->hasMigrations($this->getMigrations())
            ->hasViews();
    }

    public function packageRegistered(): void
    {
        parent::packageRegistered();
        $this->app->scoped('smartExpense', function (): SmartExpense {
            return new SmartExpense();
        });

    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_expense_budget_types_table',
        ];
    }
}
