<?php

namespace SpeckCatalogTest\Mapper;

use PHPUnit\Extensions\Database\TestCase;
use Mockery;

class AbstractServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testFindCallsFindOnMapper()
    {
        $mockedMapper = $this->getMock('\SpeckCatalog\Mapper\AbstractMapper');
        $mockedMapper->expects($this->once())
            ->method('find');

        $service = $this->getService();
        $service->setEntityMapper($mockedMapper);
        $service->find(array());
    }

    public function testPopulateReturnsInstanceOfModelParam()
    {
        $service = $this->getService();
        $return = $service->populate(new \SpeckCatalog\Model\Product());
        $this->assertTrue($return instanceOf \SpeckCatalog\Model\Product);
    }

    public function testGetEntityCallsGetEntityPrototypeOnMapper()
    {
        $mockedMapper = $this->getMock('\SpeckCatalog\Mapper\AbstractMapper');
        $mockedMapper->expects($this->once())
            ->method('getEntityPrototype');

        $service = $this->getService();
        $service->setEntityMapper($mockedMapper);
        $service->getEntity();
    }

    public function testUpdateCallsUpdateOnMapper()
    {
        $mockedMapper = $this->getMock('\SpeckCatalog\Mapper\AbstractMapper');
        $mockedMapper->expects($this->once())
            ->method('update');

        $service = $this->getService();
        $service->setEntityMapper($mockedMapper);
        $service->update(array());
    }

    public function testInsertCallsInsertOnMapper()
    {
        $mockedMapper = $this->getMock('\SpeckCatalog\Mapper\AbstractMapper');
        $mockedMapper->expects($this->once())
            ->method('insert');

        $service = $this->getService();
        $service->setEntityMapper($mockedMapper);
        $service->insert(array());
    }

    public function testUsePaginatorCallsUsePaginatorOnMapper()
    {
        $mockedMapper = $this->getMock('\SpeckCatalog\Mapper\AbstractMapper');
        $mockedMapper->expects($this->once())
            ->method('usePaginator');

        $service = $this->getService();
        $service->setEntityMapper($mockedMapper);
        $service->usePaginator(array());
    }

    public function getService()
    {
        return new \SpeckCatalogTest\Service\Asset\ChildAbstractService();
    }
}
