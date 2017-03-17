<?php namespace Arteriaweb\Catalog\Models;

use Model;

/**
 * Categrie Model
 */
class Categorie extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_catalog_categories';

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
    public $hasOne = [
        // 'product' => 'Arteriaweb\Catalog\Models\Product',
    ];
    public $hasMany = [];
    public $belongsTo = [
        // 'product' => 'Arteriaweb\Catalog\Models\Product',
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
