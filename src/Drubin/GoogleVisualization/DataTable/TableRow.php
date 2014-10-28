<?php
  namespace Drubin\GoogleVisualization\DataTable;

  use Drubin\GoogleVisualization\DataTable\TableCell;

  class TableRow
  {
    protected $cells = array();
    protected $customProperties;

    public function addCell(TableCell $cell)
    {
      $this->cells[] = $cell;
    }

    public function getCells()
    {
      return $this->cells;
    }

    public function setCell($index, $cell)
    {
      $this->cells[$index] = $cell;
    }

    public function getCell($index)
    {
      return $this->cells[$index];
    }
  }
?>
