<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class API_Loader extends CI_Loader {

	protected $_ci_service_paths;
 
            public function __construct()
            {
                parent::__construct();
                $this->_ci_service_paths = array(APPPATH.'/service');
            }

	public function database($params = '', $return = FALSE, $active_record = NULL)
	{
		// Grab the super object
		$CI =& get_instance();

		// Do we even need to load the database class?
		if (class_exists('CI_DB') AND $return == FALSE AND $active_record == NULL AND isset($CI->db) AND is_object($CI->db))
		{
			return FALSE;
		}

                        require_once(BASEPATH.'database/DB.php');
                        $DB =& DB($params, $active_record);
                      
                        $app_db_file = APPPATH.'database/drivers/'.$DB->dbdriver.'/'.$DB->dbdriver.'_driver.php'; 
                        if (file_exists($app_db_file)) {
                    			require_once($app_db_file);

                    			// Instantiate the DB adapter
                    			$driver = 'API_'.$DB->dbdriver.'_driver';
                    			$DB = new $driver(get_object_vars($DB));
                        }

		if ($return === TRUE)
		{
			return $DB;
		}

		// Initialize the db variable.  Needed to prevent
		// reference errors with some configurations
		$CI->db = '';

		// Load the DB class
		$CI->db =& $DB;
	}

	/**
	 * @method:加载service
	 *
	 * @param
	 * @return
	 * @author KuaiYigang@e-future.com.cn
	 * @date 2013-11-15 星期五
	 */
	public function service($service_name = '', $params = NULL, $object_name = NULL)
            {
            	require_once 'API_Service.php';
                if(is_array($service_name)) {
                    foreach($service_name as $class) {
                        $this->service($class, $params);
                    }
                    return;
                }
                if($service_name == '' or isset($this->_base_classes[$service_name])) {
                    return FALSE;
                }
         
                if(! is_null($params) && ! is_array($params)) {
                    $params = NULL;
                }
         
                $this->_ci_load_user_class($service_name, $params, $object_name, $this->_ci_service_paths);
            }
 
 	/**
	 * @method:加载service
	 *
	 * @param
	 * @return
	 * @author KuaiYigang@e-future.com.cn
	 * @date 2013-11-15 星期五
	 */
    public function _ci_load_user_class($class = '', $params = NULL, $object_name = NULL, $class_path = array(APPPATH))
    {
        $class = str_replace('.php', '', trim($class, '/'));
        $subdir = '';
        if (($last_slash = strrpos($class, '/')) !== FALSE) {
            $subdir = substr($class, 0, $last_slash + 1);
            $class = substr($class, $last_slash + 1);
        }
        foreach (array(ucfirst($class), strtolower($class)) as $class) {
            $is_duplicate = FALSE;
            foreach ($class_path as $path) {
                $filepath = $path.'/'.$subdir.$class.'.php';
                if ( ! file_exists($filepath)) {
                    continue;
                }
                if (in_array($filepath, $this->_ci_loaded_files)) {
                    if ( ! is_null($object_name)) {
                        $CI =& get_instance();
                        if ( ! isset($CI->$object_name)) {
                            return $this->_ci_init_class($class, '', $params, $object_name);
                        }
                    }
                    $is_duplicate = TRUE;
                    log_message('debug', $class." class already loaded. Second attempt ignored.");
                    return;
                }
                include_once($filepath);
                $this->_ci_loaded_files[] = $filepath;
                return $this->_ci_init_class($class, '', $params, $object_name);
            }
 
        }
        if ($is_duplicate == FALSE) {
            log_message('error', "Unable to load the requested class: ".$class);
            show_error("Unable to load the requested class: ".$class);
        }
    }
}

/* End of file Loader.php */
/* Location: ./system/core/API_Loader.php */
