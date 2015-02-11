<?php

/**
 * Created by PhpStorm.
 * User: ChanHenry
 * Date: 5/3/14
 * Time: 4:09 PM
 */
class Kingento_Core_Model_Directory_Currency extends Mage_Directory_Model_Currency
{
    /**
     * Format price to currency format
     *
     * @param   double $price
     * @param   bool $includeContainer
     * @return  string
     */
    public function format($price, $options = array(), $includeContainer = true, $addBrackets = false)
    {
		if(Mage::app()->getStore()->getCurrentCurrencyCode() == 'VND'){
			return $this->formatPrecision($price, 0, $options, $includeContainer, $addBrackets);
		}
		return $this->formatPrecision($price, 2, $options, $includeContainer, $addBrackets);
    }
}