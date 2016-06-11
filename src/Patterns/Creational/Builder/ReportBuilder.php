<?php

namespace Patters\Creational\Builder;

use Patters\Creational\Builder\ReportParts\Color;
use Patters\Creational\Builder\ReportParts\MaterialType;
use Patters\Creational\Builder\ReportParts\Notes;
use Patters\Creational\Builder\ReportParts\PriceData;
use Patters\Creational\Builder\ReportParts\Watermark;

class ReportBuilder implements ReportBuildable
{

    protected $report;


    public function addPriceData($data)
    {
        $this->report->priceData = new PriceData($data);
    }

    public function addNotes($data)
    {
        $this->report->notes = new Notes($data);
    }

    public function addMaterialType($data)
    {
        $this->report->materialType = new MaterialType($data);
    }

    public function addWatermark($data)
    {
        $this->report->watermark = new Watermark($data);
    }

    public function addColor($data)
    {
        $this->report->color = new Color($data);
    }

    public function createRawReport()
    {
        $this->report = new Report();
    }

    public function getReport()
    {
        return $this->report;
    }
}
