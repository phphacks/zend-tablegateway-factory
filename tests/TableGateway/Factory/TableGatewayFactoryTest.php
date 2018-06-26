<?php

namespace Tests\TableGateway\Factory;

use PHPUnit\Framework\TestCase;
use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\Factory\TableGatewayFactory;
use Zend\Db\TableGateway\TableGateway;

/**
 * TableGatewayFactoryTest
 *
 * @package Tests\TableGateway\Factory
 */
class TableGatewayFactoryTest extends TestCase
{
    /**
     * @var TableGatewayFactory
     */
    public $tableGatewayFactory;

    /**
     * setUp
     *
     * Build test dependencies.
     */
    public function setUp(): void
    {
        $this->tableGatewayFactory = new TableGatewayFactory(
            $this->getMockBuilder(Adapter::class)
                 ->disableOriginalConstructor()
                 ->getMock()
        );
    }

    /**
     * testTableGatewayCreation
     *
     * Check if the tableGateway will be created.
     */
    public function testTableGatewayCreation(): void
    {
        $tableGateway = $this->tableGatewayFactory->create('MyTable');
        $this->assertInstanceOf(TableGateway::class, $tableGateway);
    }
}