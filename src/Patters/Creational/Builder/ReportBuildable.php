<?php

namespace Patters\Creational\Builder;

interface ReportBuildable
{
    public function addPriceData($data);

    public function addNotes($data);

    public function addMaterialType($data);

    public function addWatermark($data);

    public function addColor($data);

    public function createRawReport();

    public function getReport();
}
