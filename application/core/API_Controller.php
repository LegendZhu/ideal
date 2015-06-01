<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * API Controller Class
 */
class API_Controller extends CI_Controller {

    public $load;
    public $to_api_message;

    public function __construct() {
        parent::__construct();

        $post = $this->input->post();
        $method = $this->router->fetch_method();

        $post = $this->input->post();
        $get = $this->input->get();

        if (empty($post) && empty($get)) {
            if (!isset($this->_allow_get) || !in_array($method, $this->_allow_get)) {
                return $this->to_api_message(0, $this->dsr_line(array('method', 'not', 'allow')));
            }
        }

        $get = $this->input->get();
        if (empty($post)) {
            $_POST = $get;
        } else {
            if (!empty($get)) {
                $_POST = array_merge($post, $get);
            }
        }

        $_POST = empty($post) ? $get : $post;

        $this->data_trim($_POST);

        if (isset($this->_rules) && !empty($this->_rules[$method])) {
            $this->load->library('form_validation');
            $this->validate($this->_rules[$method]);
        }

        if (isset($this->_models) && !empty($this->_models[$method])) {
            $this->load_models($this->_models[$method]);
        }

        $this->set_time_zone();
    }

    protected function load_models($models) {
        foreach ($models as $model) {
            $this->load->model($model);
        }
    }

    protected function validate($rules) {
        foreach ($rules as $rule) {
            $this->form_validation->set_rules($rule[0], $this->dsr_line($rule[1]), $rule[2]);
        }
        if ($this->form_validation->run() === FALSE) {
            $errors = strip_tags(validation_errors());
            if (!$errors) {
                return $this->to_api_message(0, 'parameter not exist');
            }
            return $this->to_api_message(0, $errors);
        }
    }

    /**
     * @param $data
     */
    public function data_trim(&$data) {
        if (!empty($data) and is_array($data)) {
            foreach ($data as $key => &$value) {
                if (is_array($value)) {
                    $this->data_trim($value);
                } else {
                    $value = trim($value);
                }
            }
        }
    }

    protected function to_api_message($status = 0, $message = NULL, $data = NULL, $total = NULL) {
        $ret_arr = array('status' => $status);

        $plt = array('message', 'data', 'total');

        foreach ($plt as $v) {
            if (isset($$v)) {
                $ret_arr[$v] = $$v;
            }
        }

        echo json_encode($ret_arr);
        exit();
    }

    protected function set_time_zone($timezone = "Asia/Shanghai") {
        if (function_exists('date_default_timezone_set')) {
            date_default_timezone_set($timezone);
        }
    }

}
/* End of file API_Controller.php */
/* Location: ./application/core/API_Controller.php */

