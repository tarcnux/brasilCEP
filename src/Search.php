<?php

namespace Tarcnux\BrasilCep;

class Search{
  // https://viacep.com.br/ws/88354250/json/
  // https://brasilapi.com.br/api/cep/v1/70175900
  // private $url = "https://viacep.com.br/ws/"; //ViaCEP
  private $url = "https://brasilapi.com.br/api/cep/v1/";

  public function getAdreesFromZipCode(string $zipCode): array
  {
      $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
      // $get = \file_get_contents("{$this->url}{$zipCode}/json/"); //ViaCEP
      $get = \file_get_contents("{$this->url}{$zipCode}");
      return (array) \json_decode($get);
  }
}