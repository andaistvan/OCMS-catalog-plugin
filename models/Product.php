<?php namespace Arteriaweb\Catalog\Models;

use Model;

/**
 * Product Model
 */
class Product extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_catalog_products';


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

    public $hasMany = [
        'items' => [Item::class],
    ];

    public $attachOne = [
        'featimage' => 'System\Models\File',
    ];

    public $attachMany = [
        'imagegallery' => 'System\Models\File',
    ];

    public $hasOne = [
        // 'categorie' => ['Arteriaweb\Catalog\Models\Categorie', 'key' => 'product_id'],
        // 'categorie' => ['Arteriaweb\Catalog\Models\Categorie'],
        // 'categorie' => [Categorie::class],
    ];
    public $belongsTo = [
        // 'categories' => [Categorie::class],
        'categorie' => ['Arteriaweb\Catalog\Models\Categorie'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
}
