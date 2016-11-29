<?php
$installer = $this;
$installer->startSetup();
$installer->run("ALTER TABLE {$this->getTable('catalog_product_entity_tier_price')}  ADD percentage  DECIMAL(12,4) NOT NULL AFTER qty ; ");
$installer->endSetup();