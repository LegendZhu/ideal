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