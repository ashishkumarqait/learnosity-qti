<?php

namespace LearnosityQti\Entities\QuestionTypes;

use LearnosityQti\Entities\BaseQuestionTypeAttribute;

/**
* This class is auto-generated based on Schemas API and you should not modify its content
* Metadata: {"responses":"v2.108.0","feedback":"v2.71.0","features":"v2.107.0"}
*/
class formulainput_ui_style extends BaseQuestionTypeAttribute {
    protected $type;
    protected $min_width;
    
    public function __construct(
            )
    {
            }

    /**
    * Get Type \
    * Keyboard style. See the <a href="//docs.learnosity.com/authoring/authorguide/formula/gettingstarted/keyboard_types" targ
	et="_blank">knowledgebase article on formula keyboard types</a> for more information. \
    * @return string $type \
    */
    public function get_type() {
        return $this->type;
    }

    /**
    * Set Type \
    * Keyboard style. See the <a href="//docs.learnosity.com/authoring/authorguide/formula/gettingstarted/keyboard_types" targ
	et="_blank">knowledgebase article on formula keyboard types</a> for more information. \
    * @param string $type \
    */
    public function set_type ($type) {
        $this->type = $type;
    }

    /**
    * Get Input minimum width \
    * Controls the minimum width of the input area, e.g. 550px \
    * @return string $min_width \
    */
    public function get_min_width() {
        return $this->min_width;
    }

    /**
    * Set Input minimum width \
    * Controls the minimum width of the input area, e.g. 550px \
    * @param string $min_width \
    */
    public function set_min_width ($min_width) {
        $this->min_width = $min_width;
    }

    
}

