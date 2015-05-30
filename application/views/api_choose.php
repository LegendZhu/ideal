<div id="container">
    <h1>修改API</h1>

    <div id="body">
        <span style="color: red"><?php echo !empty($message) ? $message : '' ?></span>
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
            选择模块：
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
            <button id="add_api">新增</button>
        </p>

        <p>
        <div id="">
            <select id="api_list">
            </select>
        </div>
        </p>

        <p>
            <button id="delete_api">删除</button>
            <button id="update_api">编辑</button>
        </p>
        </br>
    </div>
    </br>
</div>