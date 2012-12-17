<?php

namespace SpeckCatalog\Model;

class Option extends AbstractModel
{
    protected $optionId;
    protected $name;
    protected $instruction;
    protected $required;
    protected $optionTypeId;
    protected $builder = 0;

    /**
     * @return optionId
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * @param $optionId
     * @return self
     */
    public function setOptionId($optionId)
    {
        $this->optionId = (int) $optionId;
        return $this;
    }

    /**
     * @return name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return instruction
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * @param $instruction
     * @return self
     */
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;
        return $this;
    }

    /**
     * @return required
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param $required
     * @return self
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * @return optionTypeId
     */
    public function getOptionTypeId()
    {
        return $this->optionTypeId;
    }

    /**
     * @param $optionTypeId
     * @return self
     */
    public function setOptionTypeId($optionTypeId)
    {
        $this->optionTypeId = $optionTypeId;
        return $this;
    }

    /**
     * @return builder
     */
    public function getBuilder()
    {
        return $this->builder;
    }

    /**
     * @param $builder
     * @return self
     */
    public function setBuilder($builder)
    {
        $this->builder = $builder;
        return $this;
    }
}
