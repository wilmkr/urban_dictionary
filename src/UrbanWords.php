<?php
namespace Wilson;

class UrbanWords
{
  protected $data = [
    "slang" => "Tight",
    "description" => "When someone performs an awesome task",
    "sample-sentence" => "Andrei: Prosper, have you finished the curriculum? \nProsper: Yes. \nAndrei: Tight, tight, tight!!!"
  ];

  public function getData() {
    return $this->data;
  }
}