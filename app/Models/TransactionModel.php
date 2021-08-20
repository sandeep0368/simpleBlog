<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transactions';
    protected $allowedFields = ['user_id', 'amount', 'start_date', 'end_date'];
}
