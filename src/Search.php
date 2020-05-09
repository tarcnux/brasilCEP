<?php

namespace Tarcnux\BrasilCep;

class Search{
  // https://viacep.com.br/ws/88354250/json/
  private $url = "https://viacep.com.br/ws/";

  public function getAdreesFromZipCode(string $zipCode): array
  {
      $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
      $get = \file_get_contents("{$this->url}{$zipCode}/json/");       
      return (array) \json_decode($get);
  }
}