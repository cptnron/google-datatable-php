<?php
  namespace Drubin\GoogleVisualization\Util;

  class Comparator {
    public function __call($method, $args)
    {
      $closure = $this->$method;
      return call_user_func_array($closure, $args);
    }
  }
?>
