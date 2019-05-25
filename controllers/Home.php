<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends SplintAppController {

  public function initialize() {
    if ($this->params == null || !isset($this->params["secret_key"])) {
      show_error("PayStack App requires Secret Key.");
      return;
    }
    $params = array(
      "secret_key" => $this->params["secret_key"]
    );
    $this->load->splint("francis94c/ci-paystack", "+PayStack", $params, "paystack");
  }

  /**
   * [index description]
   * @return [type] [description]
   */
  public function index() {
    $this->view("header");
  }
}
?>
