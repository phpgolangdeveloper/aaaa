<?php

namespace App\Model\Shopping\About;


class AboutModel extends \App\Model\Model
{
    protected $table='shopping_about';
    protected $primaryKey='about_id';
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