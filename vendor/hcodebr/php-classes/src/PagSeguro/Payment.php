<?php

  namespace Hcode\PagSeguro;

  class Payment{

    private $mode = "default";
    private $currency = "BRL";
    private $extraAmoutn = 0;
    private $reference = "";
    private $itens = [];
    private $sender;
    private $shipping;
    private $method;
    private $creditCart;
    private $bank;

  }
