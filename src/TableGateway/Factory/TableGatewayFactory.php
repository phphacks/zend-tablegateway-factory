<?php

namespace Zend\Db\TableGateway\Factory;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\TableIdentifier;
use Zend\Db\TableGateway\TableGateway;

/**
 * TableGatewayFactory
 *
 * Creates a TableGateway
 *
 * @package Zend\Db\TableGateway\Factory
 */
class TableGatewayFactory
{
    /**
     * @var Adapter
     */
    private $adapter;

    /**
     * TableGatewayFactory constructor.
     *
     * @param Adapter $adapter
     */
    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @param string $table
     * @param string $schema
     * @return TableGateway
     */
    public function create($table, $schema = null): TableGateway
    {
        $table = new TableIdentifier($table, $schema);
        $tableGateway = new TableGateway($table, $this->adapter);
        return $tableGateway;
    }
}