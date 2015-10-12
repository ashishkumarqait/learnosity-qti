<?php

require 'vendor/autoload.php';

use Learnosity\AppContainer;

// Generate entities
$generator = AppContainer::getApplicationContainer()->get('learnosity_entity_generator');
$generator->generateQuestionsClasses();
$generator->generateItemClasses();
$generator->generateActivityClasses();

// Generate documentation
$generator = AppContainer::getApplicationContainer()->get('learnosity_documentation_generator');
$generator->generateDocumentation();