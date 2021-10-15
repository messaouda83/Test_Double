<?php
namespace Test\Double;
use App\DateNaissanceInterface;

class StubDateNaissance implements DateNaissanceInterface
{
public function getJour()
{
   return "02" ;
}
public function getMois()
{
    return "Avril";
}
public function getAnnee()
{
  return "1983";
}

}