<?php class ThemeOptions_ExtraConfig_Model_Border
{
    public function toOptionArray()
    {
        return array(
            
            array('value'=>'1', 'label'=>Mage::helper('ExtraConfig')->__('On Hover')),
            array('value'=>'2', 'label'=>Mage::helper('ExtraConfig')->__('Default')), 
            array('value'=>'3', 'label'=>Mage::helper('ExtraConfig')->__('Both : Default & On Hover')),
            array('value'=>'4', 'label'=>Mage::helper('ExtraConfig')->__('Off'))
        );
    }

}?>