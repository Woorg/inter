<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class CaseExtra extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $caseExtra = new FieldsBuilder('case_extra');

        $caseExtra
            ->setLocation('post_type', '==', 'case');

        $caseExtra
           ->addImage('case_thumb', [
                'label' => 'Thumb',
                'wrapper' => [
                    'width' => '',
                ],
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
            ]);

        return $caseExtra->build();
    }
}
