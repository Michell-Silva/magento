<?php
/**
 * Created by PhpStorm.
 * User: michell
 * Date: 17/03/19
 * Time: 12:47
 */

class MagedIn_Affiliates_Trait_currency 
{
    /**
     * @param $price
     * @param array $options
     * @param bool $includeContainer
     * @return string
     * @throws Mage_Core_Model_Store_Exception
     */
    protected function currency($price, $options = [], $includeContainer = true)
    {
        return Mage::app()->getStore()->getCurrentCurrency()->format($price,$options,$includeContainer);
    }

    /**
     * @param $price
     * @param array $options
     * @param bool $includeContainer
     * @return string
     * @throws Mage_Core_Model_Store_Exception
     */
    protected function baseCurrency($price, $options = [], $includeContainer = true)
    {
        return Mage::app()->getStore()->getBaseCurrency()->format($price,$options,$includeContainer);
    }
}