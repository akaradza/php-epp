<?php

/**
 * @author Admir Karadza <ak@anexia.at>
 * @date September 2015
 * @package Net_EPP
 */
class Net_EPP_DTO_ContactPostalInfoAddr
{

    /**
     * Mandatory.
     *
     * @var String
     */
    public $street;

    /**
     * Mandatory.
     *
     * @var String
     */
    public $city;

    /**
     * Mandatory.
     * Zip / postal code
     *
     *
     * @var String
     */
    public $pc;

    /**
     * Mandatory.
     * Country code, e.g.
     * "AT"
     *
     * @var String
     */
    public $cc;

    public function __construct($street, $city, $pc, $cc)
    {
        $this->street = $street;
        $this->city = $city;
        $this->pc = $pc;
        $this->cc = $cc;
    }
}
?>