<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scenario extends Model
{
    protected $table = 'scenarios';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'scenario_desc', 
        'process_id', 
        'process_name', 
        'expected_result', 
        'step_desc', 
        'pages', 
        'test_data', 
        'status' 
    ];

}
