<div id="container">
    <h1>添加项目&模块</h1>

    <div id="body">
        <p>
            <label>项目:</label>
            <input type="text" name="project_name" id="project">
            <button id="submit_project">新增</button>
        </p>
    </div>
    </br>
    <div id="body">
        <p>
            <label>选择项目:</label>
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
            <label>模块名称:</label>
            <input type="text" name="module_name" id="module"></br></br>

            <label>基础URL:</label>
            <input type="text" name="base_url" id="url"></br></br>

            <label>跟踪邮箱:</label>
            <input type="text" name="mails" id="mails" placeholder="通知邮箱，多个邮箱使用|分隔" style="width: 200px;"></br></br>

            <label>通用参数:</label>
            <textarea name="base_param" placeholder="每次请求都会使用的参数，test1=xxx&test2=yyy"></textarea></br></br>
            <button id="submit_module">新增模块</button>
        </p>
        <hr>
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
    <br>
</div>