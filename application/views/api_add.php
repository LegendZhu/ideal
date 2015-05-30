<div id="container">
    <?php
    if (isset($action) && $action == 'update') {
    ?>
        <h1>更新API</h1>
    <?php
    } else {
    ?>
        <h1>新增API</h1>
    <?php
    }
    ?>

    <div id="body">
        <span style="color: red"><?php echo !empty($message) ? $message : '' ?></span>
        <p>
        <?php
        if (isset($action) && $action == 'update') {
        ?>
        <form name="" method="post" action="api_update">
        <?php
        } else {
        ?>
        <form name="" method="post" action="test_insert">
        <?php
        }
        ?>
            <input type="hidden" name="module_id" value="<?php if (isset($module_id)) echo $module_id; ?>"/>
            <input type="hidden" name="api_id" value="<?php if (isset($api_id)) echo $api_id; ?>"/>

            <div>
                <label>地址:</label>
                <input type="text" name="uri" id="api_uri" value="<?php if (isset($info['api_uri'])) echo $info['api_uri']; ?>"> (uri:v1/friend/add)
            </div>
            <br>

            <div>
                <label>方式:</label>
                <input type="radio" name="method" value="1" <?php if (isset($info['method']) && $info['method'] == 1) echo "selected='selected'"; ?>> get
                <input type="radio" name="method" value="2" <?php if (isset($info['method']) && $info['method'] == 2) echo 'selected="selected"'; ?>> post
            </div>
            <br>

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
                          }?>"><?php if (isset($info['header_data'])) echo $info['header_data']; ?></textarea>
                <br>
            </div>
            <br>

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
                }?>"><?php if (isset($info['query_data'])) echo $info['query_data']; ?></textarea>
                <br>
            </div>
            <br>

            <div>
                <label>预期返回:</label>
                <button id="new_data"> + </button>
                </br>
                <hr>
                <div id="content">
                    <?php
                    if (isset($result_data) && is_array($result_data)) {
                        $fields = $result_data['field'];
                        $rules = $result_data['rule'];
                        for ($i = 0; $i < count($fields); $i++) {
                            ?>
                            <div id="validate">
                                <label>验证字段:</label><input type="text" name="validate_field[]" value=<?= $fields[$i] ?> ><br><br>
                                <label>验证规则:</label><input type="text" name="validate_rule[]" value=<?= $rules[$i] ?> >&nbsp;&nbsp;</br>
                                <hr style="border:1px dotted rgba(7, 6, 7, 0.27)"/>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div id="validate">
                            <label>验证字段:</label><input type="text" name="validate_field[]"><br><br>
                            <label>验证规则:</label><input type="text" name="validate_rule[]">&nbsp;&nbsp;
                            json示例:{"required":"false","type":"is_string","value_equal":0}
                            </br>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <br>
            <?php
            if (isset($action) && $action == 'update') {
            ?>
                <input type="submit" value="更新">
            <?php
            } else {
            ?>
                <input type="submit" value="确定添加">
            <?php
            }
            ?>

        </form>
        </p>
    </div>
    <br>
</div>