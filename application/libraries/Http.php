<?php

/* 	SVN FILE: $Id: rayhttp.php 113 2008-06-15 04:30:19Z rayhan $	 */

/**

 * HTTP Client Class.

 *

 * A basic HTTP Client desinged for php developer. 

 * - CURL

 * - Native php method

 *

 * 	PHP Version 5

 *

 *

 * 	@copyright		Copyright 2006-2008, Md. Rayhan Chowdhury

 * 	@package		raynux

 * 	@subpackage		raynux.lab.http

 * 	@since			version 1.0

 * 	@version		$Revision: 113 $

 * 	@modifiedby		$LastChangedBy: rayhan $

 * 	@lastModified	$Date: 2008-06-15 10:30:19 +0600 (Sun, 15 Jun 2008) $

 * 	@author			$Author: rayhan $

 * 	@url			$HeadURL: http://localhost/svn/raynux/trunk/labs/rayhttp.php $

 * 	@website		www.raynux.com

 *  @license 		GPL

 */

/**

 * HTTP Client Class.

 *

 * A basic HTTP Client desinged for php developer. 

 * - CURL

 * - Native php method

 *

 *

 * @todo add utf-8 conversion.

 * @todo add plugins functionality

 *

 *

 * @package raynux

 * @subpackage raynux.lab.http

 * @version 1.0

 * @since version 1.0

 * @author Md. Rayhan Chowdhury

 */
class Http {

    /**

     * Hold runtime instance of self

     *

     * @var array of self instances

     * @access private

     * @static 

     */
    static private $__instances;
    /**

     * Curl Instance

     *

     * @var object Curl instance

     * @access protected

     */
    protected $_curlInstance = null;
    /**

     * Default configuration for the crawler.

     *

     * @var array

     * @access private

     */
    private $__defaultConfigs = array(
        'client' => 'curl',
        'encodeUrl' => true,
        'curlOptions' => array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_ENCODING => "",
            CURLOPT_USERAGENT => "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.0.5) Gecko/2008120121 Firefox/3.0.5",
            CURLOPT_COOKIESESSION => 1,
            CURLOPT_AUTOREFERER => 1,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_AUTOREFERER => 120,
            CURLOPT_TIMEOUT => 120,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_COOKIEFILE => CURL_COOKIE_FILE_PATH,
            CURLOPT_COOKIEJAR => CURL_COOKIE_FILE_PATH
        ),
    );
    /**

     * Hold runtime configuration.

     *

     *

     * @var array

     * @access protected

     */
    protected $_configs = array();

    /**

     * Class Constructor

     *

     * @param array $configs

     * @access public

     * @return unknown

     */
    function __construct($configs = array()) {

        if (!empty($configs)) {

            $this->setOptions($configs);
        } else {

            $this->setOptions($this->__defaultConfigs);
        }
    }

    /**

     * Configure the class.

     *

     * @param array $configs, configuration data.

     * @return unknown

     * @access public

     */
    public function &setOptions($configs) {

        $this->_configs = array_merge($this->__defaultConfigs, $configs);



        return $this;
    }

    /**

     * Get Curl Instance.

     *

     * @return object curl instance

     * @access protected

     */
    protected function &_getCurlInstance() {

        if ($this->_curlInstance == null) {

            $this->_curlInstance = curl_init();

            $this->setCurlOptions($this->_configs['curlOptions']);
        }

        return $this->_curlInstance;
    }

    /**

     * Set Curl Options from array

     *

     * @param array $options

     * @return object | this 

     * @access public

     */
    public function &setCurlOptions($options = array()) {

      $c = $this->_getCurlInstance();
      if (function_exists('curl_setopt_array')) {
        @curl_setopt_array($c, $options);
      } else {
        foreach ($options as $key => $value) {
          curl_setopt($c, $key, $value);
        }
      }
      return $this;
    }

    /**

     * Execute curl library function.

     *

     * @param string $url

     * @param string $method, http method, 'get' or 'post'

     * @param string|array $postFields, form data

     * @return string | curl response object

     * @access public

     */
    public function curlExecute($url, $method = 'get', $postFields = null) {

        $c = $this->_getCurlInstance();

        if ($method === 'get') {

            $this->setCurlOptions(array(CURLOPT_URL => $url, CURLOPT_POST => false, CURLOPT_HTTPGET => 1));
        } elseif ($method === 'post') {

            $this->setCurlOptions(array(CURLOPT_URL => $url, CURLOPT_POST => true, CURLOPT_HTTPGET => 0, CURLOPT_POSTFIELDS => $postFields));
        } else {

            $this->setCurlOptions(array(CURLOPT_URL => $url));
        }
        //var_dump(curl_exec($c));
        return curl_exec($c);
    }

    /**

     * Encode url with urlencode function for unencoded character.

     *

     * @param string $url urls to be encoded.

     * @param string $callback function name as callback function, 'urlencode' or 'raw_urlencode'

     * @return string encoded url.

     * @access public

     */
    public function encodeUrl($url, $callback = 'urlencode') {

        if ($pathOfset = strpos($url, '/', (strpos($url, '://') + 3))) {



            extract(parse_url($url));



            $path = implode('/', array_map($callback, explode('/', $path)));

            $url = substr($url, 0, $pathOfset) . $path;



            if (!empty($query)) {

                parse_str($query, $query);

                $query = http_build_query(array_map($callback, $query));

                $query = preg_replace('@(\=($|(&)))@is', '\3', $query);   // remove tailing = sign from empty variable.

                $url = $url . "?" . $query;
            }
        }



        return $url;
    }

    /**

     * Get Self Instance.

     *

     * @param string $name, name of the instance, default value is 'default'

     * @param array $configs, configuration array for the instance

     * @return object, self instance

     * @access public

     * @static 

     */
    static public function &getInstance($name = 'default', $configs = array()) {

        if (is_null(self::$__instances[$name])) {

            self::$__instances[$name] = new self($configs);
        }

        return self::$__instances[$name];
    }

    /**

     * Get url contents using GET MEthod.

     *

     * @param string $url

     * @param string|array $getData, get data in serialized string or array format.

     * @return string

     * @access public

     */
    public function get($url, $getData = null) {

        if (!is_null($getData)) {

            if (is_array($getData)) {

                $getData = http_build_query($getData);
            }

            if (strpos($url, '?') === false) {

                $url .= '?';
            }

            $url .= $getData;
        }



        if ($this->_configs['encodeUrl']) {

            $url = $this->encodeUrl($url);
        }



        if ($this->_configs['client'] === 'php') {

            return file_get_contents($url);
        }

        return $this->curlExecute($url);
    }

    /**

     * Get URL contents using POST method.

     *

     * @param string $url

     * @param string|array $postData, form data in serialized string or array format.

     * @return string

     * @access public

     */
    public function post($url, $postData = null, $file = false) {

        if (is_array($postData) && !$file) {
            $postData = http_build_query($postData);
        }



        if ($this->_configs['encodeUrl']) {

            $url = $this->encodeUrl($url);
        }



        return $this->curlExecute($url, 'post', $postData);
    }

}

?>
