<?php

namespace App\Model\V0\Site;

use App\Model\V0\LanguageModel;

class SiteModel extends \App\Model\Model
{
    protected $table='site';
    protected $primaryKey='site_id';
    protected $dateFormat = 'U';
//    public $timestamps = false;
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


    public function language()
    {
        return $this->hasMany(SiteLangModel::class, 'site_id', 'siteId');
    }


}
