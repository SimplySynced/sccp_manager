<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
function removeSimpleXmlNode($node)
    {
        $dom = dom_import_simplexml($node);
        $dom->parentNode->removeChild($dom);
    }

function replaceSimpleXmlNode($xml, SimpleXMLElement $element) {
        $dom     = dom_import_simplexml($xml);
        $import  = $dom->ownerDocument->importNode(
            dom_import_simplexml($element),TRUE
        );
        $dom->parentNode->replaceChild($import, $dom);
    }    
  
 */
function after($this, $inthat) {
    if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat, $this) + strlen($this));
}

function after_last($this, $inthat) {
    if (!is_bool(strrevpos($inthat, $this)))
        return substr($inthat, strrevpos($inthat, $this) + strlen($this));
}

function before($this, $inthat) {
    return substr($inthat, 0, strpos($inthat, $this));
}

function before_last($this, $inthat) {
    return substr($inthat, 0, strrevpos($inthat, $this));
}

function between($this, $that, $inthat) {
    return before($that, after($this, $inthat));
}

function between_last($this, $that, $inthat) {
    return after_last($this, before_last($that, $inthat));
}

function strrevpos($instr, $needle) {
    $rev_pos = strpos(strrev($instr), strrev($needle));
    if ($rev_pos === false)
        return false;
    else
        return strlen($instr) - $rev_pos - strlen($needle);
}


?>