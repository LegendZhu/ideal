<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require ROOTPATH . '/vendor/autoload.php';

class Index extends API_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    protected $_allow_get = array('index', 'project_add', 'module_add', 'module_get', 'run_test', 'api_add', 'api_update', 'api_choose', 'api_delete');

    protected $_conf = array();

    protected $_module_test_base_info = array(
        //        'app_id' => 100010000,
      'testing_mode' => 1,
      'super_key' => 'fC0ydNqtdpqwcN0KwFCaZRNMYOBMFVKH',
    );

    protected $_validate_rules = array(
      'required' => array('true', 'false'),
      'value_equal', 'value_min', 'value_max',
      'type' => array('is_string', 'is_array', 'is_numeric', 'is_int', 'is_integer', 'is_bool', 'is_float'),
      'length_equal', 'length_min', 'length_max'
    );

    public function project_add() {
        $info = $this->input->post();
        if ($info && !empty($info)) {
            $data['project_name'] = $this->input->post('project_name');
            $project_info = $this->get_project_by_name($data['project_name']);
            if (count($project_info) > 0 || !empty($project_info)) {
                $this->to_api_message(1, 'project name is duplicate');
            }
            //            if (empty($data['project_name'])) {
            //                $this->to_api_message(0, 'empty');
            //            }
            $data['create_time'] = time();
            $this->db->insert('project', $data);
            $id = $this->db->insert_id();
            $error = $this->db->_error_message();
            if ($id && empty($error)) {
                $this->to_api_message(0);
            } else {
                $this->to_api_message(1, 'error:' . $error);
            }

        } else {
            $data['projects'] = $this->get_project();
            $this->load->view('header');
            $this->load->view('project_add', $data);
            $this->load->view('footer');
        }
    }

    public function module_add() {
        $info = $this->input->post();
        if ($info && !empty($info)) {
            $data['project_id'] = $this->input->post('project_id');
            $data['module_name'] = $this->input->post('module_name');
            if (empty($data['module_name'])) {
                $this->to_api_message(1, 'module name is required');
            }
            $module_info = $this->get_module_by_name($data['module_name']);
            if (count($module_info) > 0 || !empty($module_info)) {
                $this->to_api_message(1, 'module name is duplicate');
            }
            $data['base_url'] = $this->input->post('base_url');
            if (empty($data['project_id']) || empty($data['module_name']) || empty($data['base_url'])) {
                $this->to_api_message(1, 'empty');
            }
            $data['create_time'] = time();
            $this->db->insert('module', $data);
            $id = $this->db->insert_id();
            $error = $this->db->_error_message();
            if ($id && empty($error)) {
                $this->to_api_message(0);
            } else {
                $this->to_api_message(1, 'error:' . $error);
            }

        } else {
            $this->to_api_message(1, 'error: 数据为空');
        }
    }

    public function module_get() {
        $data['project_id'] = $this->input->post('project_id');
        if (!empty($data['project_id'])) {
            $rst = $this->_get_result('module', $data);
            $this->to_api_message(0, 'ok', $rst);
        }
    }

    public function api_get() {
        $data['module_id'] = $this->input->post('module_id');
        if (!empty($data['module_id'])) {
            $api_list = $this->get_api_by_module_id($data['module_id']);
            $this->to_api_message(0, 'ok', $api_list);
        }
    }

    public function test_insert() {
        $data['module_id'] = $this->input->post('module_id');
        $data['api_uri'] = $this->input->post('uri');
        $data['method'] = $this->input->post('method');
        $data['header_data'] = $this->input->post('header_data');
        $data['query_data'] = $this->input->post('query_data');

        $validate_field = $this->input->post('validate_field');
        $validate_rule = $this->input->post('validate_rule');

        $data['result_data']['field'] = $validate_field;
        $data['result_data']['rule'] = $validate_rule;
        $data['result_data'] = json_encode($data['result_data']);

        $data['create_time'] = time();

        $this->db->insert('api', $data);
        $id = $this->db->insert_id();
        $error = $this->db->_error_message();

        $data = array();
        if ($id && empty($error)) {
            $data['message'] = 'success';
        } else {
            $data['message'] = 'error:' . $error;
        }
        $data['module_id'] = $this->input->post('module_id');
        $this->load->view('header');
        $this->load->view('api_add', $data);
        $this->load->view('footer');
    }

    public function run_test() {
        $info = $this->input->post();
        if ($info && !empty($info)) {
            $data['project_id'] = $this->input->post('project_id');
            $data['module_id'] = $this->input->post('module_id');
            $data['api_id'] = $this->input->post('api_id');

            $format_type = $this->input->post('format_type');

            if (empty($data['api_id'])) {

            }

            $module_info = $this->get_module_by_id($data['module_id']);

            $base_url = $module_info['0']['base_url'];
            $base_param = trim($module_info['0']['base_param']);
            !empty($base_param) && parse_str($base_param, $this->_module_test_base_info);

            $client = new GuzzleHttp\Client();

            $api_list = $this->get_api_by_module_id($data['module_id']);
            $test_info = array();
            foreach ($api_list as $api) {
                if ($api['method'] == 2) {
                    $method = 'post';
                } elseif ($api['method'] == 1) {
                    $method = 'get';
                }

                if ($this->is_json($api['query_data'])) {
                    $query = $api['query_data'];
                } else {
                    parse_str($api['query_data'], $query);
                    if (is_array($query) && is_array($this->_module_test_base_info)) {
                        $query = array_merge($query, $this->_module_test_base_info);
                    }
                }

                $request = $client->createRequest($method, $base_url . '/' . $api['api_uri'], [
                  'body' => $query,
                    //                  'timeout' => 1,
                ]);

                $this->benchmark->mark('request_start');
                $response = $client->send($request);
                $this->benchmark->mark('request_end');

                $info = array();
                $info['http_status_code'] = $response->getStatusCode();
                $info['base_url'] = $base_url;
                $info['api_uri'] = $api['api_uri'];
                if ($response->getStatusCode() == 200) {
                    //                    $info['original_response'] = base64_encode($response->getBody()->getContents());
                    $info['original_response'] = urlencode($response->getBody()->getContents());
                    $response_arr = json_decode($response->getBody(), TRUE);
                    $info['api_error_code'] = isset($response_arr['error_code']) ? $response_arr['error_code'] : '';
                    $info['api_message'] = isset($response_arr['error_msg']) ? $response_arr['error_msg'] : '';

                    if (isset($response_arr['error_code'])) {
                        if ($response_arr['error_code'] !== NULL && $response_arr['error_code'] == 0) {
                            $info = array('api_status' => 'TRUE') + $info;
                        } else {
                            $info = array('api_status' => 'FALSE') + $info;
                        }
                    } else {
                        $info = array('api_status' => 'TRUE') + $info;
                    }

                    $this->benchmark->mark('validate_start');
                    $info['validate_result'] = $validate_result = $this->validate_response($response_arr, $api['result_data']);
                    $this->benchmark->mark('validate_end');

                    if (isset($validate_result['no_pass']) && is_array($validate_result['no_pass']) && !empty($validate_result['no_pass'])) {
                        $info = array('api_status' => 'FALSE') + $info;
                    }

                    $info['validate_result']['no_pass'] = isset($info['validate_result']['no_pass']) ? $info['validate_result']['no_pass'] : '';
                    $info['validate_result']['pass'] = isset($info['validate_result']['pass']) ? $info['validate_result']['pass'] : '';

                } else {
                    //                    $info = array('success' => 'FALSE') + $info;
                }

                $info['request_time'] = $this->benchmark->elapsed_time('request_start', 'request_end');
                $info['validate_time'] = $this->benchmark->elapsed_time('validate_start', 'validate_end');

                $test_info[] = $info;
            }
            if (isset($format_type) && $format_type == 'html') {
                //                $this->load->view('test_result', $data);
                foreach($test_info as $i){
                    $data['result_list'] = $test_info;
                    if(0 == strcasecmp($i['api_status'], 'FALSE')){
                        $view = $this->load->view('test_result', $data, TRUE);
                        log_message('notice', 'send mail to ' . $module_info['0']['user_email']);
                        $this->send_mail($module_info['0'], $view);
                    }
                }
            } else {
                $this->to_api_message(0, 'ok', $test_info);
            }
        } else {
            $data['projects'] = $this->get_project();
            $this->load->view('header');
            $this->load->view('run_test', $data);
            $this->load->view('footer');
        }
    }

    /**
     * @param $response_arr
     * @param $rule
     *
     * @return array
     */
    protected function validate_response($response_arr, $rule) {
        if (is_array($response_arr) && !empty($rule)) {
            $rule = $this->rule_convert($rule);
            $pass = array();
            $no_pass = array();
            foreach ($rule as $r) {
                $result = $this->_judge($r['0'], $r['1'], $response_arr);
                if (isset($result['pass']) && is_array($result['pass'])) {
                    $pass = array_merge($pass, $result['pass']);
                }
                if (isset($result['no_pass']) && is_array($result['no_pass'])) {
                    $no_pass = array_merge($no_pass, $result['no_pass']);
                }
            }
            return array(
              'pass' => $pass,
              'no_pass' => $no_pass
            );
        }
    }

    /**
     * @param $field
     * @param $rule
     * @param $data
     *
     * @return array
     *
     * rule:
     * required
     * value_equal value_min value_max
     * type
     * length_equal length_min length_max
     */
    private function _judge($field, $rule, $data) {
        $result = array();
        $result_status = TRUE;
        foreach ($rule as $key => $value) {
            if (array_key_exists($key, $this->_validate_rules) || in_array($key, $this->_validate_rules)) {
                $validate_info = array();
                switch ($key) {
                    case 'required':
                        $value = (strcasecmp($value, 'true') == 0 || $value === 1 || $value === '1') ? true : false;
                        if (isset($data[$field]) == $value) {
                            $validate_info = array('rule' => $key, 'value' => $value);
                        } else {
                            $result_status = FALSE;
                            $validate_info = array('rule' => $key, 'value' => $value);
                        }
                        break;
                    case 'value_equal':
                        if (isset($data[$field]) && $data[$field] == $value) {
                            $validate_info = array('rule' => $key, 'value' => $value);
                        } else {
                            $result_status = FALSE;
                            $validate_info = array('rule' => $key, 'value' => $value);
                        }
                        break;
                    case 'value_min':
                        if (isset($data[$field]) && $data[$field] > $value) {
                            $validate_info = array('rule' => $key, 'value' => $value);
                        } else {
                            $result_status = FALSE;
                            $validate_info = array('rule' => $key, 'value' => $value);
                        }
                        break;
                    case 'value_max':
                        if (isset($data[$field]) && $data[$field] < $value) {
                            $validate_info = array('rule' => $key, 'value' => $value);
                        } else {
                            $result_status = FALSE;
                            $validate_info = array('rule' => $key, 'value' => $value);
                        }
                        break;
                    case 'type':
                        if (isset($data[$field]) && in_array($value, $this->_validate_rules['type']) && $value($data[$field])) {
                            $validate_info = array('rule' => $key, 'value' => $value);
                        } else {
                            $result_status = FALSE;
                            $validate_info = array('rule' => $key, 'value' => $value);
                        }
                        break;
                    case 'length_equal':
                        break;
                    case 'length_min':
                        break;
                    case 'length_max':
                        break;
                }
            } else {
                $result_status = FALSE;
                $validate_info = array('error_rule' => 'not found', 'rule' => $key, 'value' => $value);
            }

            if ($result_status === FALSE) {
                $result['no_pass'][$field][] = $validate_info;
            } else {
                $result['pass'][$field][] = $validate_info;
            }
        }
        return $result;
    }

    /**
     * @param $rule
     *
     * @return array
     */
    private function rule_convert($rule) {
        $func = function ($value) {
            if (is_array(json_decode($value, TRUE))) {
                $value = json_decode($value, TRUE);
            }
            return $value;
        };
        $new = array();
        if (!empty($rule) && $rule = json_decode($rule, TRUE)) {
            if (isset($rule['field']) && isset($rule['rule'])) {
                $count = count($rule['field']);
                for ($i = 0; $i < $count; $i++) {
                    $new[] = array_map($func, array_column($rule, $i));
                }
            }
        }
        return $new;
    }

    /**
     * --------------------------------------------------------------------
     * API 操作
     * --------------------------------------------------------------------
     */

    public function api_choose() {
        $data['projects'] = $this->get_project();
        $this->load->view('header');
        $this->load->view('api_choose', $data);
        $this->load->view('footer');
    }

    /**
     * 调整至新增页面
     */
    public function api_add() {
        $data['module_id'] = $this->input->get('module_id');
        $this->load->view('header');
        $this->load->view('api_add', $data);
        $this->load->view('footer');
    }

    /**
     * 删除指定api
     */
    public function api_delete() {
        $data['api_id'] = $this->input->get('api_id');
        $rst = $this->delete_api_by_api_id($data['api_id']);
        if ($rst > 0) {
            $data['message'] = '删除成功';
        } else {
            $data['message'] = '删除失败';
        }
        $data['projects'] = $this->get_project();
        $this->load->view('header');
        $this->load->view('api_choose', $data);
        $this->load->view('footer');
    }


    public function api_update() {
        $api_id = $this->input->get('api_id');
        if (empty($api_id)) {
            $api_id = $this->input->post('api_id');
            if (!empty($api_id)) {
                $data['api_uri'] = $this->input->post('uri');
                $data['method'] = $this->input->post('method');
                $data['header_data'] = $this->input->post('header_data');
                $data['query_data'] = $this->input->post('query_data');

                $validate_field = $this->input->post('validate_field');
                $validate_rule = $this->input->post('validate_rule');

                $data['result_data']['field'] = $validate_field;
                $data['result_data']['rule'] = $validate_rule;
                $data['result_data'] = json_encode($data['result_data']);

                $rst = $this->update_api_by_api_id($api_id, $data);
                unset($data);

                if ($rst > 0) {
                    $data['message'] = '更新成功';
                } else {
                    $data['message'] = '更新失败';
                }
            } else {
                $data['message'] = '请求数据异常';
            }
        }

        $data['action'] = 'update';
        $info = $this->get_api_by_api_id($api_id);
        if (!empty($info) && isset($info['0'])) {
            $data['info'] = $info['0'];
            $data['module_id'] = $info['0']['module_id'];
            $data['api_id'] = $info['0']['id'];
            $data['result_data'] = json_decode($info['0']['result_data'], TRUE);
        }
        $this->load->view('header');
        $this->load->view('api_add', $data);
        $this->load->view('footer');
    }


    /**
     * --------------------------------------------------------------------
     * 查询相关
     * --------------------------------------------------------------------
     */

    protected function get_project() {
        return $this->_get_result('project');
    }

    protected function get_api_by_module_id($module_id) {
        return $this->_get_result('api', array('module_id' => $module_id));
    }

    protected function get_api_by_api_id($api_id) {
        return $this->_get_result('api', array('id' => $api_id));
    }

    protected function get_project_by_name($project_name) {
        return $this->_get_result('project', array('project_name' => $project_name));
    }

    protected function get_module_by_name($module_name) {
        return $this->_get_result('module', array('module_name' => $module_name));
    }

    protected function get_module_by_id($module_id) {
        return $this->_get_result('module', array('id' => $module_id));
    }

    private function _get_result($table, $data = array()) {
        $query = $this->db->get_where($table, $data);
        $error = $this->db->_error_message();
        if ($error) {
            log_message('error', $error);
            return -1;
        }
        $res = $query->result_array();
        return $res;
    }


    /**
     * --------------------------------------------------------------------
     * 更新相关
     * --------------------------------------------------------------------
     */

    protected function update_api_by_api_id($api_id, $data) {
        return $this->_update_info('api', $data, array('id' => $api_id));
    }

    private function _update_info($table, $data = array(), $where = array()) {
        $this->db->update($table, $data, $where);
        $error = $this->db->_error_message();
        if ($error)
            return -1;
        return $this->db->affected_rows();
    }


    /**
     * --------------------------------------------------------------------
     * 删除相关
     * --------------------------------------------------------------------
     */

    /**
     * @param $api_id
     *
     * @return int
     */
    protected function delete_api_by_api_id($api_id) {
        return $this->_delete_record('api', array('id' => $api_id));
    }

    /**
     * @param $table
     * @param array $where
     *
     * @return int
     */
    private function _delete_record($table, $where = array()) {
        $this->db->delete($table, $where);
        $error = $this->db->_error_message();
        if ($error)
            return -1;
        return $this->db->affected_rows();
    }

    /**
     * --------------------------------------------------------------------
     * 其他
     * --------------------------------------------------------------------
     */

    /**
     * @param $string
     *
     * @return bool
     */
    private function is_json($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    /**
     * @param $module_info
     * @param $str
     */
    private function send_mail($module_info, $str) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->CharSet = 'UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码
        $mail->SMTPAuth = true; //开启认证
        $mail->Port = 465;
        $mail->Host = "smtp.exmail.qq.com";
        $mail->Username = "notify@apusapps.com";
        $mail->Password = "launcher123";
        $mail->SMTPSecure = 'ssl';
        $mail->AddReplyTo("zhuchuanqi@apusapps.com"); //回复地址
        $mail->From = "notify@apusapps.com";
        $mail->FromName = "Apus Notify";

        $user_mail = $module_info['user_email'];
        $this->load->helper('email');
        if (false === strpos($user_mail, '|') && valid_email($user_mail)) {
            $mail->AddAddress($user_mail);
        } else {
            $mails = explode('|', $user_mail);
            foreach ($mails as $m) {
                if (!valid_email($m)) {
                    log_message('error', 'mail error:' . $m, ' info:' . json_encode($mails));
                    continue;
                }
                $mail->AddAddress($m);
            }
        }

        $mail->Subject = $module_info['module_name'] . '出现问题请检查';
        $mail->Body = $str;
        //        $mail->WordWrap   = 80; // 设置每行字符串的长度
        $mail->IsHTML(true);
        $rst = $mail->Send();
        if ($rst) {
            return $rst;
        } else {
            //            log_message('error', 'send mail error:' . $mail->ErrorInfo . ', extra:' . json_encode($mail));
            log_message('error', 'send mail error:' . $mail->ErrorInfo);
        }
    }
}