<?php namespace HardikSatasiya\BranchManagement\Models;

use Model;

/**
 * Model
 */
class Parentinfo extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    public $belongsTo = [
        "user" => ["Backend\Models\User"]
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'hardiksatasiya_branchmanagement_parentinfo';
}