<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../resource/css/main.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/chosen.min.css">
    <title>Welcome to ideal</title>
</head>
<body>

<div id="result_list">
    <table class="gridtable">
        <tbody>
        <tr>
            <th>API URI</th>
            <th>API Status</th>
            <th>API Code</th>
            <th>API Message</th>
            <th>Http Status Code</th>
            <th>Request time</th>
            <th></th>
            <th>return message</th>
        </tr>
        <?php
            if($result_list && is_array($result_list)){
                foreach($result_list as $key => $result){
        ?>
        <tr>
            <td><?php echo $result['api_uri']; ?></td>
            <td><?php echo $result['api_status']; ?></td>
            <td><?php echo $result['api_error_code']; ?></td>
            <td><?php echo $result['api_message']; ?></td>
            <td><?php echo $result['http_status_code']; ?></td>
            <td><?php echo $result['request_time']; ?></td>
            <td>
                <div>
                    pass:<br>
                    <?php
                        if(isset($result['validate_result']['pass']) && is_array($result['validate_result']['pass'])){
                            $pass = $result['validate_result']['pass'];
                            foreach($pass as $filed => $filed_value){
                                echo $filed . ':</br>';
                                foreach($filed_value as $v){
                                    echo $v['rule'] . ' - ' . $v['value'] . '</br>';
                                }
                            }
                        }
                    ?>
                </div>
                <hr>
                <div style="color: red">
                    no_pass:<br>
                    <?php
                    if(isset($result['validate_result']['no_pass']) && is_array($result['validate_result']['no_pass'])){
                        $pass = $result['validate_result']['no_pass'];
                        foreach($pass as $filed => $filed_value){
                            echo $filed . ':</br>';
                            foreach($filed_value as $v){
                                echo $v['rule'] . ' - ' . $v['value'] . '</br>';
                            }
                        }
                    }
                    ?>
                </div>
            </td>
            <td><span
                  onclick="show('<?= $result['original_response'] ?>');">查看</span>
            </td>
        </tr>
        <?php
            }
            }
        ?>
        </tbody>
    </table>
</div>

<script src="../resource/js/jquery-2.1.4.min.js"></script>
<script src="../resource/js/chosen.jquery.min.js"></script>
<script src="../resource/js/jquery.base64.js"></script>
<script src="../resource/js/main.js"></script>
</body>
</html>