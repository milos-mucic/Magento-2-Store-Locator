<?php

namespace Younify\StoreLocator\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        /**
         * Create table 'younify_store_locator'
         */
        $table = $setup->getConnection()
            ->newTable($setup->getTable('younify_store_locator'))
            ->addColumn(
                'store_id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Table ID'
            )
            ->addColumn(
                'status',
                Table::TYPE_TEXT,
                255,
                [],
                'store Status'
            )
            ->addColumn(
                'store_name',
                Table::TYPE_TEXT,
                255,
                ['nullable => false'],
                'store Name'
            )
            ->addColumn(
                'url_key',
                Table::TYPE_TEXT,
                255,
                [],
                'store URL Key'
            )
            ->addColumn(
                'address',
                Table::TYPE_TEXT,
                255,
                [],
                'Address'
            )
            ->addColumn(
                'phone',
                Table::TYPE_TEXT,
                255,
                [],
                'Phone Number'
            )
            ->addColumn(
                'email_address',
                Table::TYPE_TEXT,
                255,
                [],
                'Email Address'
            )
            ->addColumn(
                'store_description',
                Table::TYPE_TEXT,
                '64k',
                [],
                'store Description'
            )
            ->addColumn(
                'featured_image',
                Table::TYPE_TEXT,
                255,
                [],
                'store Featured Image'
            )
            ->addColumn(
                'working_hours',
                Table::TYPE_TEXT,
                '2M',
                [],
                'Working Hours'
            )
            ->addColumn(
                'city',
                Table::TYPE_TEXT,
                255,
                [],
                'City'
            )
            ->addColumn(
                'latitude',
                Table::TYPE_TEXT,
                255,
                [],
                'Latitude'
            )
            ->addColumn(
                'longitude',
                Table::TYPE_TEXT,
                255,
                [],
                'Longitude'
            )
            ->addColumn(
                'created_at',
                Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                'Created At'
            )->addColumn(
                'updated_at',
                Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
                'Updated At')
            ->setComment("Sample table for module.");
        $setup->getConnection()->createTable($table);
    }
}