<?php
/**
 * Created by PhpStorm.
 * User: michell
 * Date: 17/03/19
 * Time: 16:42
 */
/** @var MagedIn_Installers_Model_Resource_Setup $this */

$this->startSetup();

$conn = $this->getConnection();

$tableName = $conn->getTableName('magedin_installers_main_table');

$table = $conn->newTable($tableName)
    ->addColumn(
        'id', Varien_Db_Ddl_Table::TYPE_INTEGER, 10, array(
            'identity' => true,
            'nullable' => false,
            'primary' => true,
    ),'Table Column ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
       'nullable' => false,
    ),'Table Column Name')
    ->addColumn('age', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false,
    ),'Table Column Age');

$conn->createTable($table);

$this->endSetup();