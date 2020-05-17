<?php

final class DaGdIPController extends DaGdController {
  public function getHelp() {
    return array(
      'title' => 'ip',
      'summary' => 'Returns your current IP address.',
      'path' => 'ip',
      'examples' => array(
        array(
          'arguments' => null,
          'summary' => null),
      ));
  }

  public function render() {
    return tag('pre', $this->getRequest()->getClientIP());
  }
}
