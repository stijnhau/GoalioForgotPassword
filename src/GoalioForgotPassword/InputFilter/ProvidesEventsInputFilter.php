<?php
namespace GoalioForgotPassword\InputFilter;

use Zend\EventManager\EventManagerAwareTrait;
use Zend\InputFilter\InputFilter;

class ProvidesEventsInputFilter extends InputFilter
{
    use EventManagerAwareTrait;
}
