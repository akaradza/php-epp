<?php

/**
 * @author Admir Karadza <ak@anexia.at>
 * @date September 2015
 * @package Net_EPP
 */
class Net_EPP_DTO_ContactAuthInfo
{

    /**
     * Mandatory.
     * Password / AuthInfo code.
     *
     * @var String
     */
    public $pw;

    public function __construct($pw)
    {
        $this->pw = $pw;
    }
}
?>