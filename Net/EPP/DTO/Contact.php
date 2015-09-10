<?php

/**
 * @author Admir Karadza <ak@anexia.at>
 * @date September 2015
 * @package Net_EPP
 */
class Net_EPP_DTO_Contact
{

    /**
     * Mandatory.
     *
     * @var String
     */
    public $id;

    /**
     * Mandatory.
     *
     * @var Net_EPP_DTO_ContactPostalInfo
     */
    public $postalInfo;

    /**
     * Mandatory.
     * Attribute of $postalInfo.
     *
     * @var String
     */
    public $postalInfoTypeAttribute;

    /**
     * Optional.
     *
     * @var Strign
     */
    public $voice;

    /**
     * Attribute $voice.
     * Not sure if this is realy needed.
     *
     * @var String
     */
    public $voiceXAttribute;

    /**
     * Optional.
     *
     * @var String
     */
    public $fax;

    /**
     * Mandatory.
     *
     * @var String
     */
    public $email;
    
    /**
     * Optional.
     * 
     * @var unknown
     */
    public $authInfo;

    public function __construct($id = null, Net_EPP_DTO_ContactPostalInfo $postalInfo, $email, $voice = null, $fax = null)
    {
        if (! is_null($id)) {
            $this->id = $id;
        } else {
            $this->id = 'auto';
        }
        
        $this->postalInfo = $postalInfo;
        $this->postalInfoTypeAttribute = 'int';
        
        $this->email = $email;
        
        if (! is_null($voice)) {
            $this->voice = $voice;
            $this->voiceXAttribute = 'Klappe';
        }
        
        if (! is_null($fax)) {
            $this->fax = $fax;
        }
    }
}
?>