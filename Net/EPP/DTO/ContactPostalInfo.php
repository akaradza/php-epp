<?php

/**
 * @author Admir Karadza <ak@anexia.at>
 * @date September 2015
 * @package Net_EPP
 */
class Net_EPP_DTO_ContactPostalInfo
{

    /**
     * Mandatory.
     *
     * @var String
     */
    public $name;

    /**
     * Optional.
     *
     * @var String
     */
    public $org;

    /**
     * Mandatory.
     *
     * @var Net_EPP_DTO_ContactPostalInfoAddr
     */
    public $addr;

    public function __construct($name, $org = null, Net_EPP_DTO_ContactPostalInfoAddr $addr)
    {
        $this->name = $name;
        
        if (! is_null($org)) {
            $this->org = $org;
        }
        
        $this->addr = $addr;
    }
}
?>