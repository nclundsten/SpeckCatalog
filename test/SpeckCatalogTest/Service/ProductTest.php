<?php

namespace SpeckCatalogTest\Mapper;

use PHPUnit\Extensions\Database\TestCase;
use Mockery;

class ProductServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testUpdateWithoutOriginalValuesGeneratesAndUsesThemWhenCallingUpdateOnMapper()
    {
        $mapper = $this->getMock('\SpeckCatalog\Mapper\Product');
        $mapper->expects($this->once())
            ->method('update')
            ->with(
                array('product_id' => 1),
                array('product_id' => 1)
            );
        $product = array('product_id' => 1);
        $service = $this->getService();
        $service->setEntityMapper($mapper);
        $service->update($product);
    }

    public function getService()
    {
        return new \SpeckCatalog\Service\Product();
    }
}
