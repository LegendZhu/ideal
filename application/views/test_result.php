<body >
<div id="result_list">
    <table style="font-family: verdana, arial, sans-serif;font-size: 11px;color: #333333;border-width: 1px;border-color: #666666;border-collapse: collapse;">
        <tbody>
        <tr>
            <th style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #dedede;">API URI</th>
            <th style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #dedede;">API Status</th>
            <th style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #dedede;">API Code</th>
            <th style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #dedede;">API Message</th>
            <th style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #dedede;">Http Status Code</th>
            <th style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #dedede;">Request time</th>
            <th style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #dedede;"></th>
            <th style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #dedede;">return message</th>
        </tr>
        <?php
            if($result_list && is_array($result_list)){
                foreach($result_list as $key => $result){
        ?>
        <tr>
            <td style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #ffffff;"><?php echo $result['api_uri']; ?></td>
            <td style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #ffffff;"><?php echo $result['api_status']; ?></td>
            <td style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #ffffff;"><?php echo $result['api_error_code']; ?></td>
            <td style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #ffffff;"><?php echo $result['api_message']; ?></td>
            <td style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #ffffff;"><?php echo $result['http_status_code']; ?></td>
            <td style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #ffffff;"><?php echo $result['request_time']; ?></td>
            <td style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #ffffff;">
                <div>
                    pass:
                    <?php
                        if(isset($result['validate_result']['pass']) && is_array($result['validate_result']['pass'])){
                            $pass = $result['validate_result']['pass'];
                            foreach($pass as $filed => $filed_value){
                                echo '<br>' .$filed . ':';
                                foreach($filed_value as $v){
                                    echo $v['rule'] . '-' . $v['value'] . ';';
                                }
                            }
                        }
                    ?>
                </div>
                <div style="color: red">
                    <?php
                    if(isset($result['validate_result']['no_pass']) && is_array($result['validate_result']['no_pass']) && !empty($result['validate_result']['no_pass'])){
                        echo '<hr>no_pass:';
                        $pass = $result['validate_result']['no_pass'];
                        foreach($pass as $filed => $filed_value){
                            echo '<br>' .$filed . ':';
                            foreach($filed_value as $v){
                                echo $v['rule'] . '-' . $v['value'] . ';';
                            }
                        }
                    }
                    ?>
                </div>
            </td>
            <td style="border-width: 1px;padding: 2px;border-style: solid;border-color: #666666;background-color: #ffffff;"><span title='<?php echo urldecode($result['original_response']); ?>'>查看</span>
            </td>
        </tr>
        <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>