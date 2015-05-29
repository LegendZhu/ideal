<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../resource/css/main.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/chosen.min.css">
    <title>Welcome to ideal</title>
</head>
<body>

<div id="container">
    <h1>运行测试</h1>

    <div id="body">
        <p>
            选择项目：
            <select name="project_select" id="project_select">
                <option selected value=""></option>
                <?php
                if (isset($projects) && is_array($projects)) {
                    foreach ($projects as $project) {
                        echo "<option value={$project['id']}>{$project['project_name']}</option>";
                    }
                }
                ?>
            </select>
        </p>

        <p>
            选择模块运行测试：
            <select name="module_select" id="module_select">
                <option selected value=""></option>
                <?php
                if (isset($modules) && is_array($modules)) {
                    foreach ($modules as $module) {
                        echo "<option value={$module['id']}>{$module['module_name']}</option>";
                    }
                }
                ?>
            </select>
        </p>

        <p>
        <div id="">
            <select id="api_list" data-placeholder='Choose some api...' class='chosen-select' multiple style='width:350px;height: auto;' tabindex="4" >
            </select>
        </div>
        </p>

        <p>
        <div id="result_list">
        </div>
        </p>

        <p>
            <button id="run_test">运行测试</button>
        </p>
        </br>
    </div>
    </br>
</div>

<p class="footer">
    Page rendered in <strong>{elapsed_time}</strong> seconds
</p>
<?php echo $base = dirname($_SERVER['SCRIPT_NAME']); ?>

<script src="../resource/js/jquery-2.1.4.min.js"></script>
<script src="../resource/js/chosen.jquery.min.js"></script>
<script src="../resource/js/jquery.base64.js"></script>
<script src="../resource/js/main.js"></script>
</body>
</html>
