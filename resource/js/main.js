$("#submit_project").click(function () {
  var project = $("#project").val();
  console.log(project);
  if (confirm('确定新增？')) {
    $.post('../index/project_add', {'project_name': project}, function (data) {
      console.log(data);
      var data = $.parseJSON(data);
      if (data.status != 0) {
        alert(data.message);
        return false;
      }
      alert('success');
    });
  }
});

$("#submit_module").click(function () {
  var project_id = $("#project_select").val();
  var module_name = $("#module").val();
  var base_url = $("#url").val();
  if (module_name.length == 0 || base_url.length == 0) {
    alert('模块名和地址不能空');
  } else {
    console.log(project_id, module_name, base_url);
    if (confirm('确定新增？')) {
      $.post('../index/module_add', {'module_name': module_name, 'project_id': project_id, 'base_url': base_url}, function (data) {
        console.log(data);
        var data = $.parseJSON(data);
        if (data.status != 0) {
          alert(data.message);
          return false;
        }
        alert('success');
      });
    }
  }
});


$("#new_data").click(function () {
  var html_block = '<hr style="border:1px;height:1px"><div id="validate">' +
    '验证字段:<input type="text" name="validate_field[]" ><br>' +
    '验证规则:<input type="text" name="validate_rule[]"></br>' +
    '</div>';
  if (confirm('确定新增？')) {
    $("#content").append(html_block);
    return false;
  }
});

//$("#project_select").change(function () {
//  var project_id = $("#project_select").val();
//  if (project_id) {
//    $.post('<?=BASE_URL?>/module_get', {'project_id': project_id}, function (data) {
//      var result = $.parseJSON(data);
//      if (result.status == 0) {
//        var module_list = result.data;
//        $("#module_select").empty();
//        if (module_list.length > 0) {
//          $("#module_select").append("<option selected value=''></option>");
//          for (var i = 0; i < module_list.length; i++) {
//            $("#module_select").append("<option value=" + module_list[i].id + ">" + module_list[i].module_name + "</option>");
//          }
//        }
//      } else {
//        alert(result.message);
//      }
//    });
//  }
//});


$("#project_select").change(function () {
  var project_id = $("#project_select").val();
  if (project_id) {
    $.post('../index/module_get', {'project_id': project_id}, function (data) {
      var result = $.parseJSON(data);
      if (result.status == 0) {
        var module_list = result.data;
        $("#module_select").empty();
        $("#module_select").append("<option></option>");
        if (module_list.length > 0) {
          for (var i = 0; i < module_list.length; i++) {
            $("#module_select").append("<option value=" + module_list[i].id + ">" + module_list[i].module_name + "</option>");
          }
        }
      }
    });
  }
});

$("#module_select").change(function () {
  var module_id = $("#module_select").val();
  if (module_id) {
    $.post('../index/api_get', {'module_id': module_id}, function (data) {
      var result = $.parseJSON(data);
      if (result.status == 0) {
        var api_list = result.data;
        $("#api_list").empty();
        if (api_list.length > 0) {
          for (var i = 0; i < api_list.length; i++) {
            $("#api_list").append("<option value=" + api_list[i].id + ">" + api_list[i].api_uri + "</option>");
          }
        }
      } else {
        alert(result.message);
      }
    });
  }
});


$("#add_api").click(function () {
  var module_id = $("#module_select").val();
  if (module_id.length <= 0) {
    alert('未选择模块');
  } else {
    location.href = './api_add?module_id=' + module_id;
  }
});


$("#run_test").click(function () {
  var module_id = $("#module_select").val();
  if (module_id.length <= 0) {
    alert('未选择模块');
  } else {
    $.post('../index/run_test', {'module_id': module_id}, function (data) {
      var result = $.parseJSON(data);
      if (result.status == 0) {
        var result_list = result.data;
        $("#result_list").empty();
        if (result_list.length > 0) {
          var html = "<table class='gridtable'><tr><th>API URI</th><th>API Status</th><th>API Code</th><th>API Message</th><th>Http Status Code</th><th>Request time</th><th> </th><th>return message</th></tr>";
          for (var i = 0; i < result_list.length; i++) {
            var validate_result = result_list[i].validate_result;

            var pass = '</br>';
            for (var o in validate_result['pass']) {
              pass += o
              pass += ":</br>"
              for (var j = 0; j < validate_result['pass'][o].length; j++) {
                pass += validate_result['pass'][o][j]['rule']
                pass += "-" + validate_result['pass'][o][j]['value']
                pass += "</br>"
              }
            }

            var no_pass = '</br>';
            if(validate_result.hasOwnProperty('no_pass')){
            for (var o in validate_result['no_pass']) {
              no_pass += o
              no_pass += ":</br>"
              for (var j = 0; j < validate_result['no_pass'][o].length; j++) {
                no_pass += validate_result['no_pass'][o][j]['rule']
                no_pass += "-" + validate_result['no_pass'][o][j]['value']
                no_pass += "</br>"
              }
            }
            }

            html += "<tr><td>"
              + result_list[i].api_uri + "</td><td>"
              + result_list[i].api_status + "</td><td>"
              + result_list[i].api_error_code + "</td><td>"
              + result_list[i].api_message + "</td><td>"
              + result_list[i].http_status_code + "</td><td>"
              + result_list[i].request_time + "</td><td>"
              + "<div>pass:" + pass + "</div><hr>"
              + "<div style='color: red'>no_pass:" + no_pass + "</div></td>"
              + "<td><span onclick=" + "show(\'" + result_list[i].original_response + "\')" + ";>查看</span></td><tr>"
          }
          html += "</table>";
          $("#result_list").append(html);
        }
      } else {
        alert(result.message);
      }
    });
  }
});

function trim(str){
  return str.replace(/(^\s*)|(\s*$)/g, "");
};

function show(info){
  console.log(info);
  var i = $.base64.decode(info);
  alert(i);
}