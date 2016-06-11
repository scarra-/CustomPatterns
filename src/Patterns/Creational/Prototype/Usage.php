<?php

namespace Patters\Creational\Prototype;

class Usage
{
    public function createTenSecureReportPrototypes()
    {
        $reports = [];

        $secureReportPrototype  = new SecureReportPrototype();

        for ($i = 0; $i < 2; $i++) {
            $reports[] = clone $secureReportPrototype;
        }

        return $reports;
    }
}
