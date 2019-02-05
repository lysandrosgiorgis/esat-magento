<?php

class Esat_Esatisfaction_Model_Options
{
    /**
     * Provide available options as a value/label array.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value'=>1, 'label'=>'On'],
            ['value'=> 0, 'label'=>'Off'],
        ];
    }
}
