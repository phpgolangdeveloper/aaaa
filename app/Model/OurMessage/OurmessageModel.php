<?php

namespace App\Model\OurMessage;


class OurmessageModel extends \App\Model\Model
{
    // 数据库'dadtabase_center'中的表
    //protected $connection = 'mysql_center';
    protected $table='our_message';
    protected $primaryKey='our_message_id';
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