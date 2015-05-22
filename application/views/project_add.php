<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../resource/css/main.css">
    <title>Welcome to ideal</title>
</head>
<body>

<div id="container">
    <h1>添加项目&模块</h1>

    <div id="body">
        <p>
            项目：
            <input type="text" name="project_name" id="project">
            <button id="submit_project">新增</button>
        </p>
    </div>
    </br>
    <div id="body">
        <p>
            选择项目：
            <select name="project_select" id="project_select">
                <option></option>
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
        模块名：<input type="text" name="module_name" id="module"></br></br>
        通用 ：<textarea name="base_param" placeholder="每次请求都会使用的参数，test1=xxx&test2=yyy"></textarea></br></br>
        基础url：<input type="text" name="base_url" id="url">
        <button id="submit_module">新增模块</button>
        </p>
        <p>
            选择模块添加测试接口：
            <select name="module_select" id="module_select">
                <option></option>
                <?php
                if (isset($modules) && is_array($modules)) {
                    foreach ($modules as $module) {
                        echo "<option value={$module['id']}>{$module['module_name']}</option>";
                    }
                }
                ?>
            </select>
            <button id="add_api">新增API</button>
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
