<?php
/**
 * Created by PhpStorm.
 * User: bwalleshauser
 * Date: 4/8/2015
 * Time: 5:45 PM
 */

class Mainstreethost_GatorTraxBoatBuilder_Model_Json_Rule
    extends Mainstreethost_GatorTraxBoatBuilder_Model_Json_Abstract
    implements Mainstreethost_GatorTraxBoatBuilder_Model_Json_IAutojson
{
    private $id;
    private $optionId;
    private $optionValueId;
    private $targetOptionId;
    private $targetOptionValueId;
    private $operator;

    public function __construct()
    {

    }

    public function Hydrate($rule)
    {
        $this->id                   = (int)$rule->getRuleId();
        $this->optionId             = (int)$rule->getOptionId();
        $this->optionValueId        = (int)$rule->getOptionValueId();
        $this->targetOptionId       = (int)$rule->getTargetOptionId();
        $this->targetOptionValueId  = (int)$rule->getTargetOptionValueId();








        return $this;
    }



    public function get($member)
    {
        return $this->$member;
    }
}