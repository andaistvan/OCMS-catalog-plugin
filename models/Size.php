<?php namespace Arteriaweb\Catalog\Models;

use Model;

/**
 * Size Model
 */
class Size extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_catalog_sizes';

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    // public $hasMany = [
    //     'items' => 'Arteriaweb\Catalog\Models\Item',
    // ];
    // public $belongsTo = [
    //     'item' => 'Arteriaweb\Catalog\Models\Item',
    // ];
    // public $belongsToMany = [
    //     'items' => 'Arteriaweb\Catalog\Models\Item',
    // ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
