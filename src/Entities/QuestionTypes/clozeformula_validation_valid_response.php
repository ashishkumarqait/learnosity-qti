<?php

namespace Learnosity\Entities\QuestionTypes;

use Learnosity\Entities\BaseQuestionTypeAttribute;

/**
* This class is auto-generated based on Schemas API and you should not modify its content
* Metadata: {"responses":"v2.72.0","feedback":"v2.71.0","features":"v2.72.0"}
*/
class clozeformula_validation_valid_response extends BaseQuestionTypeAttribute {
    protected $score;
    protected $value;
    
    public function __construct(
            )
    {
            }

    /**
    * Get Score \
    * Score for this valid response. \
    * @return number $score \
    */
    public function get_score() {
        return $this->score;
    }

    /**
    * Set Score \
    * Score for this valid response. \
    * @param number $score \
    */
    public function set_score ($score) {
        $this->score = $score;
    }

    /**
    * Get Equation Values \
    * A collection of arrays containing objects with the valid response. \
    * @return array $value \
    */
    public function get_value() {
        return $this->value;
    }

    /**
    * Set Equation Values \
    * A collection of arrays containing objects with the valid response. \
    * @param array $value \
    */
    public function set_value (array $value) {
        $this->value = $value;
    }

    
}
