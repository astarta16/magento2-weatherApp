<?php
declare(strict_types=1);

namespace Nini\WeatherReport\Api\Data;

interface ReportSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Report list.
     * @return \Nini\WeatherReport\Api\Data\ReportInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param \Nini\WeatherReport\Api\Data\ReportInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

