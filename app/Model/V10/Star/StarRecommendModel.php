<?php

namespace App\Model\V10\Star;

class StarRecommendModel extends \App\Model\Model
{
    // 数据库'dadtabase_center'中的site表
    protected $connection = 'mysql_star';
    protected $table='star_recommend';
    protected $primaryKey='star_id';
    public $timestamps = false;
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
