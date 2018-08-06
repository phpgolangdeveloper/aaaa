<?php

namespace App\Model\Product;


class ProductAttributeModel extends \App\Model\Model
{
    /*protected  $table = 'default_table';
    private static $prefix;
    public function __construct($prefix)
    {
        self::$prefix = $prefix;
        $this->table = self::$prefix;
        parent::__construct();
    }*/
    protected $table='product_attribute';
    protected $primaryKey='attribute_id';
    protected $dateFormat = 'U';
    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'created_at';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'updated_at';

}