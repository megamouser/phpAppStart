<?php
namespace Core\Engine\Components\Zadarma\Response;

class NumberLookup extends Response
{
    public $mcc;
    public $mnc;
    public $mccName;
    public $mncName;
    public $ported;
    public $roaming;
    public $errorDescription;
    public $status;
}