<?php

namespace NerdsAndCompany\Schematic\DataTypes;

use Craft;
use NerdsAndCompany\Schematic\Schematic;

/**
 * Schematic ElementIndexs DataType.
 *
 * Sync Craft Setups.
 *
 * @author    Nerds & Company
 * @copyright Copyright (c) 2015-2019, Nerds & Company
 * @license   MIT
 *
 * @see      http://www.nerds.company
 */
class ElementIndexDataType extends Base
{
    /**
     * {@inheritdoc}
     */
    public function getMapperHandle(): string
    {
        return 'elementIndexMapper';
    }

    /**
     * {@inheritdoc}
     */
    public function getRecords(): array
    {
        return Craft::$app->elements->getAllElementTypes();
    }
}
