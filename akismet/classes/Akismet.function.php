<?php 

class MySpamProtection {

    // variables
    var $sMyAkismetKey;
    var $sWebsiteUrl;
    var $sAuthName;
    var $sAuthEml;
    var $sAuthUrl;
    var $oAkismet;

    // constructor
    public function MySpamProtection() {
        // set necessary values for variables
        $this->sMyAkismetKey = '02b578427e68';
        $this->sWebsiteUrl = 'dcbwebsite.in';
        $this->sAuthName = 'Rohan';
        $this->sAuthEml = '';
        $this->sAuthUrl = '';

        // Akismet initialization
        $this->oAkismet = new Akismet($this->sWebsiteUrl ,$this->sMyAkismetKey);
        $this->oAkismet->setCommentAuthor($this->sAuthName);
        $this->oAkismet->setCommentAuthorEmail($this->sAuthEml);
        $this->oAkismet->setCommentAuthorURL($this->sAuthUrl);
    }

    public function isSpam($s) {
        if (! $this->oAkismet) return false;

        $this->oAkismet->setCommentContent($s);
        return $this->oAkismet->isCommentSpam();
    }
}

?>