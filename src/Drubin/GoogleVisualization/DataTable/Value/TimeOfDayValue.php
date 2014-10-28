<?php
  namespace Drubin\GoogleVisualization\DataTable\Value;

  class TimeOfDayValue extends DateTimeValue
  {
    public function getType()
    {
      return ValueType::TIMEOFDAY;
    }

    public function getHours()
    {
      return (int) $this->dateTime->format("G");
    }
  }
?>
