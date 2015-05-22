<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../resource/css/main.css">
    <title>Welcome to ideal</title>
</head>
<body>

<div id="container">
    <h1>新增API</h1>

    <div id="body">
        <p>
            <span> <?php !empty($message) ? $message : '' ?></span>

        <form name="" method="post" action="test_insert">
            <input type="hidden" name="module_id" value="<?= $module_id ?>"/>

            <div>
                <label>地址:</label>
                <input type="text" name="uri" id="api_uri"> (uri:v1/friend/add)
            </div>
            <div>
                <label>方式:</label>
                <input type="radio" name="method" value="1"> get
                <input type="radio" name="method" value="2"> post
            </div>
            <div>
                <label>HEADER:</label>
                </br>
                <textarea name="header_data" rows="10" style="width: 400px"
                          placeholder="<?php if (!empty($header_data)) {
                              echo $header_data;
                          } else {
                              echo <<<EOFSTR
array
(
    'cookie' => 50001,
    'htt' => 50002'
)
EOFSTR;
                          }?>"></textarea>
                <br>
            </div>
            <div>
                <label>数据:</label>
                </br>
                <!--                <span>新增</span>-->
                <!--                <br>-->
                <!--                <select name="">-->
                <!--                    <option value="0">固定</option>-->
                <!--                    <option value="1">自动</option>-->
                <!--                </select>-->
                <textarea name="query_data" rows="10" style="width: 400px" placeholder="<?php if (!empty($query_data)) {
                    echo $query_data;
                } else {
                    echo <<<EOFSTR
请直接输入: uid=50001&fid=50002
或者
array
(
    'uid' => 50001,
    'fid' => 50002'
)
EOFSTR;
                }?>"></textarea>
                <br>
            </div>
            <div>
                预期返回:（默认error_code=0）
                <button id="new_data"> +</button>
                </br>
                <hr>
                <div id="content">
                    <div id="validate">
                        验证字段:
                        <input type="text" name="validate_field[]">
                        <br>
                        验证规则:
                        <input type="text" name="validate_rule[]">
                        json示例:{"required":"false","type":"is_string","value_equal":0}
                        </br>
                    </div>
                </div>
            </div>
            <br>
            <input type="submit" id="submit_api" value="确定添加">
        </form>
        </p>
    </div>
</div>

<p class="footer">
    Page rendered in <strong>{elapsed_time}</strong> seconds
</p>
<?php echo $base = dirname($_SERVER['SCRIPT_NAME']); ?>

<script src="../resource/js/jquery-2.1.4.min.js"></script>
<script src="../resource/js/main.js"></script>
</body>
</html>
