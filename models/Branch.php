<?php namespace HardikSatasiya\BranchManagement\Models;

use Model;

/**
 * Model
 */
class Branch extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
    ];

    public $belongsTo = [
        'company' => 'Backend\Models\User',
        'director' => 'Backend\Models\User'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hardiksatasiya_branchmanagement_branch';
}