<?php
/**
 * Created by PhpStorm.
 * User: michell
 * Date: 10/03/19
 * Time: 20:07
 */

/**
 * @var $this MagedIn_Affiliates_Model_Resource_Setup
 * @var $conn Magento_Db_Adapter_Pdo_Mysql
 */
 $this->startSetup();

/** @var string $tableName */
$tableName = $this->getTable('magedin_affiliates/entity');

$conn->dropTable($tableName);

/** @var Varien_Db_Ddl_Table $table */
$table = $conn->newTable($tableName);

$table->addColumn('id', $table::TYPE_INTEGER,10, [
    'identity' => true,
    'unsigned' => true,
    'primary'  => true,
    'nullable' => false,
])->addColumn('name', $table::TYPE_VARCHAR, 255, [
    'nullable' => false,
])->addColumn('description', 255, $table::TYPE_TEXT, null, [
    'nullable' => true,
])->addColumn('comment', 255, $table::TYPE_TEXT, null, [
    'nullable' => true,
])->addColumn('sales_commission_type', 255,$table::TYPE_INTEGER, 2, [
    'nullable' => false,
])->addColumn('sales_commission_percent', 255,$table::TYPE_DECIMAL, '12,4', [
    'nullable' => true,
    'default'   => '0.0000',
])->addColumn('sales_commission_fixed', 255,$table::TYPE_DECIMAL, '12,4', [
    'nullable' => true,
    'default'   => '0.0000',
])->addColumn('created_at', 255,$table::TYPE_DATETIME, null, [
    'nullable' => true,
    'unsigned' => true,
])->addColumn('updated_at', 255,$table::TYPE_DATETIME, null, [
    'nullable' => true,
    'unsigned' => true,
 ]);

$conn->createTable($table);

$fields = ['name', 'sales_commission_type'];
$indexName = $this->getIdxName($tableName, $fields, Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX);
$conn->addIndex($tableName, $indexName, $fields, Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX );

$this->endSetup();