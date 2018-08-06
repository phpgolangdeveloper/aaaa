<?php

namespace App\Model\V10\Cases;

class CasesCateModel extends \App\Model\Model
{
    // 数据库'dadtabase_center'中的site表
    protected $connection = 'mysql_star';
    protected $table='cases_category';
    protected $primaryKey='cases_cate_id';
    protected $dateFormat = 'U';
    //public $timestamps = false;
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
