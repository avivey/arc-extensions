<?php

class WhichRepo extends ArcanistBaseWorkflow {
  public function getWorkflowName() {
    return 'which-repo';
  }

  public function run() {
    $console = PhutilConsole::getConsole();
    $callsign = $this->getRepositoryCallsign();
    $console->writeOut(
        "%s\n",
        phutil_console_format('**%s**', $callsign));
  }


  public function requiresConduit() {
    return true;
  }

  public function requiresRepositoryAPI() {
    return true;
  }

  public function requiresAuthentication() {
    return true;
  }


  public function getCommandHelp() {
    return phutil_console_format(<<<EOTEXT
          which repo
EOTEXT
      );
  }
  public function getCommandSynopses() {
    return phutil_console_format(<<<EOTEXT
      **which-repo**
EOTEXT
      );
  }
}