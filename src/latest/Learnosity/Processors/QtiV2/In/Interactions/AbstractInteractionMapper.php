<?php

namespace Learnosity\Processors\QtiV2\In\Interactions;

use Learnosity\Processors\QtiV2\In\ResponseProcessingTemplate;
use Learnosity\Utils\QtiMarshallerUtil;
use qtism\data\content\interactions\Interaction;
use qtism\data\content\interactions\Prompt;
use qtism\data\state\ResponseDeclaration;

abstract class AbstractInteractionMapper
{
    protected $interaction;
    protected $responseDeclaration;
    protected $responseProcessingTemplate;

    public function __construct(Interaction $interaction, ResponseDeclaration $responseDeclaration = null, ResponseProcessingTemplate $responseProcessingTemplate = null)
    {
        $this->interaction = $interaction;
        $this->responseDeclaration = $responseDeclaration;
        $this->responseProcessingTemplate = empty($responseProcessingTemplate) ? ResponseProcessingTemplate::none() : $responseProcessingTemplate;
    }

    abstract public function getQuestionType();

    public function getPrompt()
    {
        if ($this->interaction->getPrompt() instanceof Prompt) {
            $promptContent = $this->interaction->getPrompt()->getContent();
            return QtiMarshallerUtil::marshallCollection($promptContent);
        }
        return '';
    }
}
