<?php

class PmdGradleLintProvider extends DefaultLintProvider implements GradleLintProvider {

  public function getName() {
    return 'pmd';
  }

  public function getTargets() {
    return array('pmd');
  }

  public function parseLinterOutput(array $paths) {
    $parser = new PmdParser();
    return $parser->parseAll(
      '/build\/reports\/pmd\/pmd.*\.xml$/i', $paths);
  }

  public function isLintDetectedMessage($error_message) {
    return strpos($error_message, 'PMD rule violations were found.') !== false;
  }
}
