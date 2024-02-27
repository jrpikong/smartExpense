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
            ->name('filament-shield')
            ->hasConfigFile()
            ->hasTranslations()
            ->hasViews();
    }

    public function packageRegistered(): void
    {
        parent::packageRegistered();
        $this->app->scoped('smart-expense', function (): SmartExpense {
            return new SmartExpense();
        });
    }
}
