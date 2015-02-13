<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 *
 * @generated
 * @phutil-library-version 2
 */
phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' => array(
    'AbstractFileParser' => 'lint/parser/AbstractFileParser.php',
    'AbstractMetaLinter' => 'lint/linter/AbstractMetaLinter.php',
    'ArcanistAndroidLinter' => 'lint/linter/ArcanistAndroidLinter.php',
    'ArcanistCheckstyleLinter' => 'lint/linter/JavaCheckstyleLinter.php',
    'ArcanistESLintLinter' => 'lint/linter/ESLintLinter.php',
    'ArcanistFindBugsLinter' => 'lint/linter/FindBugsLinter.php',
    'ArcanistGradleFindBugsLinter' => 'lint/linter/GradleFindBugsLinter.php',
    'ArcanistOCLintLinter' => 'lint/linter/OCLintLinter.php',
    'ArcanistSassLinter' => 'lint/linter/SassLinter.php',
    'ArcanistSingleRunLinter' => 'lint/linter/ArcanistSingleRunLinter.php',
    'CheckstyleMavenLintProvider' => 'lint/provider/maven/CheckstyleMavenLintProvider.php',
    'CheckstyleParser' => 'lint/parser/CheckstyleParser.php',
    'ConfigPathLinter' => 'lint/linter/ConfigPathLinter.php',
    'CpdMavenLintProvider' => 'lint/provider/maven/CpdMavenLintProvider.php',
    'CpdParser' => 'lint/parser/CpdParser.php',
    'FindbugsMavenLintProvider' => 'lint/provider/maven/FindbugsMavenLintProvider.php',
    'FindbugsParser' => 'lint/parser/FindbugsParser.php',
    'GradleCheckstyleLinter' => 'lint/linter/GradleCheckstyleLinter.php',
    'GradleLintProvider' => 'lint/provider/gradle/GradleLintProvider.php',
    'GradleLinter' => 'lint/linter/GradleLinter.php',
    'GradlePmdLinter' => 'lint/linter/GradlePmdLinter.php',
    'LintProvider' => 'lint/provider/LintProvider.php',
    'MavenLintProvider' => 'lint/provider/maven/MavenLintProvider.php',
    'MavenLinter' => 'lint/linter/MavenLinter.php',
    'MavenUnitTestEngine' => 'unit/engine/MavenUnitTestEngine.php',
    'PmdLinter' => 'lint/linter/PmdLinter.php',
    'PmdMavenLintProvider' => 'lint/provider/maven/PmdMavenLintProvider.php',
    'PmdParser' => 'lint/parser/PmdParser.php',
  ),
  'function' => array(),
  'xmap' => array(
    'AbstractMetaLinter' => 'ArcanistSingleRunLinter',
    'ArcanistAndroidLinter' => 'ArcanistLinter',
    'ArcanistCheckstyleLinter' => 'ArcanistSingleRunLinter',
    'ArcanistESLintLinter' => 'ConfigPathLinter',
    'ArcanistFindBugsLinter' => 'ArcanistSingleRunLinter',
    'ArcanistGradleFindBugsLinter' => 'ArcanistFindBugsLinter',
    'ArcanistOCLintLinter' => 'ArcanistLinter',
    'ArcanistSassLinter' => 'ConfigPathLinter',
    'ArcanistSingleRunLinter' => 'ArcanistLinter',
    'CheckstyleMavenLintProvider' => 'MavenLintProvider',
    'CheckstyleParser' => 'AbstractFileParser',
    'ConfigPathLinter' => 'ArcanistExternalLinter',
    'CpdMavenLintProvider' => 'MavenLintProvider',
    'CpdParser' => 'AbstractFileParser',
    'FindbugsMavenLintProvider' => 'MavenLintProvider',
    'FindbugsParser' => 'AbstractFileParser',
    'GradleCheckstyleLinter' => 'ArcanistCheckstyleLinter',
    'GradleLintProvider' => 'LintProvider',
    'GradleLinter' => 'AbstractMetaLinter',
    'GradlePmdLinter' => 'PmdLinter',
    'MavenLintProvider' => 'LintProvider',
    'MavenLinter' => 'AbstractMetaLinter',
    'MavenUnitTestEngine' => 'ArcanistUnitTestEngine',
    'PmdLinter' => 'ArcanistSingleRunLinter',
    'PmdMavenLintProvider' => 'MavenLintProvider',
    'PmdParser' => 'AbstractFileParser',
  ),
));
