<?php

namespace App\Model\Subscriber;


class UserSecurityModel extends \App\Model\Model
{
    protected $table='user_security';
    protected $primaryKey='security_cate_id';
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