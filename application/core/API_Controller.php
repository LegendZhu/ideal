<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * API Controller Class
 *
 * This class object is the super class for e-future projects
 *
 * @author    renwenxin@e-future.com.cn
 */
class API_Controller extends CI_Controller {

    public $load;
    public $to_api_message;
    public $dsr_line;
    public $skey;
    private $_enabled_user_login = TRUE;
    private $_enabled_emloyee_login = TRUE;
    private $_request_id;

    public function __construct() {
        parent::__construct();
        $method = $this->router->fetch_method();

        $post = $this->input->post();
        $get = $this->input->get();

        if (empty($post) && empty($get)) {
            if (!isset($this->_allow_get) || !in_array($method, $this->_allow_get)) {
                return $this->to_api_message(0, $this->dsr_line(array('method', 'not', 'allow')));
            }
        }

        $_POST = empty($post) ? $get : $post;
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

    public function showHTML($template, $data = null) {
        $base = dirname($_SERVER['SCRIPT_NAME']);
        $this->load->view('header', array('base' => $base));
        $this->load->view($template, $data);
        $this->load->view('footer');
    }

    protected function validate($rules) {
        foreach ($rules as $rule) {
            $this->form_validation->set_rules($rule[0], $this->dsr_line($rule[1]), $rule[2]);
        }
        if ($this->form_validation->run() === FALSE) {
            $errors = strip_tags(validation_errors());
            if (!$errors) {
                return $this->to_api_message(0, $this->dsr_line(array('parameter', 'not', 'exist')));
            }
            return $this->to_api_message(0, $errors);
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

    /**
     * @method Generate i18n string in formate do-sth-result
     * @author renwenxin@e-future.com.cn
     */
    public function dsr_line($do = '', $sth = '', $result = '', $structure = 'do_sth_result') {
        return sprintf($this->line($structure), $this->array_to_str($do), $this->array_to_str($sth), $this->array_to_str($result)
        );
    }

    /**
     * @method Get i18n string by name
     * @author renwenxin@e-future.com.cn
     */
    public function line($name) {
        $this->lang->load('common');
        $re = $this->lang->line($name);
        if (!$re)
            $re = $name;
        return $re;
    }


    public function get_extra_info($conf = array('request_id', 'ip', 'action', 'uri', 'agent')) {
        $extra_info = array();
        foreach ($conf as $c) {
            switch ($c) {
                case 'ip':
                    $this->load->helper('ip');
                    $ret = getip();
                    break;
                case 'request_id':
                    $ret = $this->_request_id;
                    break;
                case 'action':
                    $ret = $this->router->fetch_method();
                    break;
                case 'uri':
                    $ret = $this->uri->uri_string();
                    break;
                case 'agent':
                    $this->load->helper('agent');
                    $ret = get_user_agent();
                    break;
            }
            $extra_info[$c] = $ret;
        }
        return $extra_info;
    }

    private function array_to_str($arr) {
        $str = '';
        if (!is_array($arr)) {
            return $this->line($arr);
        }
        foreach ($arr as $v) {
            $str .= $this->line($v);
        }
        return $str;
    }


    protected function array_to_string($arr) {
        return array_to_string($arr);
    }
}

// END API_Controller class

/* End of file API_Controller.php */
/* Location: ./application/core/API_Controller.php */

