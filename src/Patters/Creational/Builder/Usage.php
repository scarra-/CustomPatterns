<?php

namespace Patters\Creational\Builder;

class Usage
{

    public function generateReport()
    {
        $reportBuilder = new ReportBuilder();

        $reportBuilder->createRawReport();
        $reportBuilder->addPriceData('Complex costs data');
        $reportBuilder->addNotes('1 petabyte of notes');
        $reportBuilder->addMaterialType('Paper');
        $reportBuilder->addWatermark('Tope secret');
        $reportBuilder->addColor('Color data, gradients etc');
        return $reportBuilder->getReport();
    }
}
