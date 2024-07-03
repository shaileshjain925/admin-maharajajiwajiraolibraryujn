<?php

namespace Tests\Support\Models;

use App\Models\FunctionModel;

class ExampleModel extends FunctionModel
{
    protected $table          = 'factories';
    protected $primaryKey     = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields  = [
        'name',
        'uid',
        'class',
        'icon',
        'summary',
    ];
    protected $useTimestamps      = true;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
