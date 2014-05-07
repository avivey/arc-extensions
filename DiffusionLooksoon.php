<?php

class DiffusionLookSoon extends ArcanistBaseWorkflow {
  public function getWorkflowName() {
    return 'diffusion-looksoon';
  }

  public function run() {
    $console = PhutilConsole::getConsole();
    $callsign = $this->getRepositoryCallsign();
    $arguments = array(
      'callsigns' => array($callsign)
      );
    $response = $this->getConduit()->callMethodSynchronous(
      'diffusion.looksoon',
      $arguments);
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
          hints at diffusion to update this repo.
EOTEXT
      );
  }
  public function getCommandSynopses() {
    return phutil_console_format(<<<EOTEXT
      **diffusion-looksoon**
EOTEXT
      );
  }
}