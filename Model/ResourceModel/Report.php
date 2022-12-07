<?php
declare(strict_types=1);

namespace Nini\WeatherReport\Model\ResourceModel;

class Report extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('nini_weatherreport_report', 'report_id');
    }
}

