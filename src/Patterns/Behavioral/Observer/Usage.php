<?php

namespace Patters\Behavioral\Observer;

use Patters\Behavioral\Observer\DatabseObserver;
use Patters\Behavioral\Observer\EmailServiceObserver;

class Usage
{
    public function testObserver()
    {
        $documentManager = new DocumentManager(new Document());

        $documentManager->attachListener(new DatabseObserver());
        $documentManager->attachListener(new EmailServiceObserver());

        $documentManager->updateDocumentStatus('Signed off');
    }
}
