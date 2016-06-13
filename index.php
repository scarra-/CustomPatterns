<?php

use Patters\Behavioral\Mediator\Storages\MariaDatabase;
use Patters\Behavioral\Mediator\Storages\RedisCache;
use Patters\Behavioral\Mediator\StorageMediator;

require_once('./vendor/autoload.php');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$svc = new Patters\Creational\Builder\Usage();
var_dump($svc->generateReport());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// The main difference between FactoryMethod is that FactoryMethod can have only 1 method to create 1 specific objects.
// AbstractFactory can have multiple methods to create different objects.

$svc = new Patters\Creational\AbstractFactory\Usage();
var_dump($svc->generateDocument(new Patters\Creational\AbstractFactory\EnglishDocumentFactory()));

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$svc = new Patters\Creational\Pool\Usage();
var_dump($svc->getWorker()->work());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$svc = new Patters\Creational\Prototype\Usage();
var_dump($svc->createTenSecureReportPrototypes());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$svc = new Patters\Creational\Singleton\Usage();
$svc->testSingleton();

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$svc = new Patters\Behavioral\ChainOfResponsibilities\Usage();
var_dump($svc->runChain());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$svc = new Patters\Behavioral\Command\Usage();
var_dump($svc->runCommand());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$svc = new Patters\Behavioral\Iterator\Usage();
var_dump($svc->testIterator());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$mediatorHolder = new StorageMediator(new RedisCache, new MariaDatabase);
$svc = new Patters\Behavioral\Mediator\Usage($mediatorHolder);
var_dump($svc->testMediator());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$svc = new Patters\Behavioral\Memento\Usage();
var_dump($svc->testMemento());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$svc = new Patters\Behavioral\Observer\Usage();
var_dump($svc->testObserver());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$svc = new Patters\Behavioral\Bridge\Usage();
var_dump($svc->testBridge());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
