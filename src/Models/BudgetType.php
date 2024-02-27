<?php
declare(strict_types=1);

namespace Jrpikong\SmartExpense\Models;

use Illuminate\Database\Eloquent\Model;

class BudgetType extends Model
{
    protected $table = 'ex_budget_types';

    protected $guarded = ['id'];
}
