<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 * Automated testing configuration
 */


$config['versions'] = array(
    'api', 'v2', 'v3'
);
$config['rosetests'] = array(
    'v3/home' => array(
        'data' => array(
            'longitude' => 0,
            'latitude' => 0,
            'city_id' => 52
        ),
        'ext' => array(
            array(
                'longitude' => '116.469254556',
                'latitude' => '37.9544819661',
                'city_id' => 52
            )
        )
    ),
    'v3/home/goods/more' => array(
        'data' => array(
            'page' => 1,
            'limit' => 20,
            'city_id' => 52
        )
    ),
    'v3/home/shake/more' => array(
        'data' => array(
            'page' => 1,
            'limit' => 20,
            'city_id' => 52
        )
    ),
    'v3/api/home/search' => array(
        'data' => array(
            'name' => '山',
            'store_id' => 2,
            'page' => 1,
            'limit' => 2
        )
    ),
    'v3/user/login' => array(
        'data' => array(
            'user_name' => '微店_587219',
            'password' => '111111',
            'uuid'=>'49e02435-d60d-200c-9fa6-2252419a6fb6cho',
            'version_name' => '2.12'
        )
    ),
    'v3/user/checkLogin' => array(
        'data' => array()
    ),
    'v3/user/update_mobile' => array(
        'data' => array(
            'user_id' => 1,
            'mobile'  => '13211111111',
        )
    ),
    'v3/user/user_exist' => array(
        'data' => array(
           'user_id' => 1,
           'user_type' => 0,
        )
    ),
    'v3/user/isregister' => array(
        'data' => array(
            'mobile' => '18301460615'
        )
    ),
    'v3/user/search' => array(
        'data' => array(
            'k' => '13718802044'
        )
    ),
    'v3/user/addusercoordinate' => array(
        'data' => array(
            'longitude' => '116.397308',
            'latitude' => '39.767102'
        )   
    ),
    'v3/user/getsalt' => array(
        'data' => array(
            'user_name' => '18301460615'
        )
    ),
    'v3/user/getuserinfo' => array(
        'data' => array(
            'mobile' => '18301460615',
            'ucode' => '',
            'cid' => ''
        )
    ),
    'v3/goods/list' => array(
        'data' => array(
            'store_id' => 1,
            'type' => 'store_tag',
            'tag_id' => 1,
            'page' => 1,
            'limit' => 100
        ),
        'ext' => array(
            array(
                'store_id' => 1,
                'type' => 'store_tag',
                'tag_id' => 1,
                'page' => 1,
                'limit' => 100
            ),
            array(
                'user_id' => 1,
                'type' => 'user_tag',
                'tag_id' => 1,
                'page' => 1,
                'limit' => 100
            ),
            array(
                'user_id' => 1,
                'type' => 'user_tag',
                'tag_id' => 1,
                'page' => 1,
                'limit' => 100
            ),
            array(
                'dm_id' => 285,
                'type' => 'dm',
                'page' => 1,
                'limit' => 100
            ),
            array(
                'type' => 'laud',
                'user_id' => 6
            )
        )
    ),
    'v3/search/goods' => array(
        'data' => array(
            'q' => 'HTC',
            'page' => '1',
            'limit' => '2'
        ),
        'ext' => array(
            array(
                'q' => 'HTC',
                'page' => '1',
                'limit' => '2'
            ),
            array(
                'q' => 'HTC',
                'page' => '1',
                'limit' => '2'
            ),
            array(
                'q' => 'HTC',
                'page' => '1',
                'limit' => '2'
            )
        )
    ),
    'v3/search/tag' => array(
        'data' => array(
            'q' => '水'
        )
    ),
    'v3/search/store' => array(
        'data' => array(
            'q' => '朝阳区',
            'page' => '1',
            'limit' => '2'
        )
    ),
    'v3/user/register' => array(
        'data' => array(
            'mobile' => '18611169301',
            'captcha' => 196119,
            'code' => 1071
        )
    ),
    'v3/user/profile' => array(
        'data' => array()
    ),
    'v3/user/password/update' => array(
        'data' => array(
            'type' => 'update',
            'old_password' => '111111',
            'new_password' => '123456',
            'confirm_password' => '123456'
        ),
        'ext' => array(
            array(
                'type' => 'reset',
                'new_password' => '111111',
            ),
            array(
                'type' => 'retrieve',
                'mobile' => '18611169301',
                'captcha' => '564232',
            ),
        ),
    ),
    'v3/store/toplist' => array(
        'data' => array(
            'type' => 1,
            'city' => 17,
            'page' => 1,
            'limit' => 10
        )
    ),
    'v3/store/home' => array(
        'data' => array(
            'store_id' => 129
        )
    ),
    'v3/user/update' => array(
        'data' => array(
            'user_name' => '晓风残月',
            'nick_name' => 'shishengwei',
            'true_name' => '史生伟',
            'gender' => 2,
            'email' => 'shishengwei@e-future.com.cn',
            'birthday' => '1989420'
        )
    ),
    'v3/dm/list' => array(
        'data' => array(
            'store_id' => 3,
            'type' => 'store',
            'page' => 1,
            'limit' => 3
        ),
        'ext' => array(
            array(
                'store_id' => 3,
                'tag_id' => 357,
                'type' => 'store_tag',
                'page' => 1,
                'limit' => 3
            ),
            array(
                'tag_id' => 348,
                'type' => 'tag',
                'page' => 1,
                'limit' => 3
            ),
            array(
                'user_id' => 4,
                'type' => 'user',
                'page' => 1,
                'limit' => 3
            ),
            array(
                'user_id' => 1,
                'tag_id' => 251,
                'type' => 'user_tag',
                'page' => 1,
                'limit' => 5
            ),
        )
    ),
    'v3/store/list' => array(
        'data' => array(
            'type' => 'tag',
            'tag_id' => 16,
            'page' => 1,
            'limit' => 3
        ),
        'ext' => array(
            array(
                'type' => 'location',
                'latlng' => array(100, 100),
                'limit' => 3,
                'page' => 1
            ),
            array(
                'type' => 'code',
                'code' => '123456',
                'page' => 1,
                'limit' => 3
            ),
            array(
                'type' => 'city',
                'cityid' => 17,
                'page' => 1,
                'limit' => 3
            )
        )
    ),
    'v3/summarize' => array(
        'data' => array(
            'type' => 'store_tag',
            'store_id' => 1,
            'tag_id' => 1
        ),
        'ext' => array(
            array(
                'type' => 'user',
                'user_id' => array(3, 4)
            ),
            array(
                'type' => 'user_tag',
                'tag_ids' => array(5, 6),
                'user_id' => 3
            ),
            array(
                'type' => 'tag_friend',
                'user_ids' => 3,
                'tag_id' => 1
            ),
            array(
                'type' => 'tag_search',
                'tag_id' => 1
            )
        )
    ),
    'v3/tag/add' => array(
        'data' => array(
            'name' => array('食全食美', '我的衣架')
        ),
        'ext' => array(
            array(
                'name' => array('我的厨房', '后花园')
            ),
            array(
                'name' => array('妹妹衣', '麦包包')
            )
        )
    ),
    'v3/tag/delete' => array(
        'data' => array(
            'tag_id' => 108
        )
    ),

    'v3/message/captcha' => array(
        'data' => array(
            'type' => 'register',
            'mobile' => 18611169301,
        ),
        'ext' => array(
            array(
                'type' => 'retrieve',
                'mobile' => 13581725228,
            ),
            array(
                'type' => 'contactlist',
                'mobile' => 13581725228
            )
        ),
    ),
    'v3/check/captcha' => array(
        'data' => array(
            'mobile' => 13146618995,
            'captcha' => 155673
        ),
    ),
    'v3/cart/update' => array(
        'data' => array(
            'type' => 'add_goods',
            'ids[0]' => array(1, 3),
            'ids[1]' => array(2, 4),
        ),
        'ext' => array(
            array(
                'type' => 'change_status',
                'ids[0]' => array(1, 3, 0),
                'ids[1]' => array(2, 4, 1),
            ),
            array(
                'type' => 'delete_goods',
                'ids[0]' => array(1, 3),
                'ids[1]' => array(2, 4),
            )
        )
    ),
    'v3/cart/store/list' => array(
        'data' => array(
            'page' => 1,
            'limit' => 10
        )
    ),
    'v3/cart/goods/list' => array(
        'data' => array(
            'type' => 'current',
            'store_id' => 116,
            'page' => 1,
            'limit' => 10
        )
    ),

    
    'v3/category/offcial/store/tag' => array(
        'data' => array(
            'store_id' => 1
        )
    ),

    'v3/tag/update' => array(
        'data' => array(
            'type' => 'add',
            'name' => '测试'
        ),
        'ext' => array(
            array(
                'type' => 'delete',
                'id' => 256
            )
        )
    ),
    
    'v3/mystore/laudgoods' => array(
        'data' => array(
            'user_id' => 6
        )
    ),
    'v3/mystore/subscribes' => array(
        'data' => array(
            'user_id' => 26
        ),
        'ext' => array(
            array(
                'user_id' => 6,
                'type' => 'store',
                'page' => 1,
                'limit' => 20
            ),
            array(
                'user_id' => 6,
                'type' => 'store_goods',
                'page' => 1,
                'limit' => 20
            ),
            array(
                'user_id' => 6,
                'type' => 'store_brand',
                'page' => 1,
                'limit' => 20
            ),
            array(
                'user_id' => 26,
                'type' => 'store_dm',
                'page' => 1,
                'limit' => 20
            )
        )
    ),
    'v3/mystore/subscribes/more' => array(
        'data' => array(
            'user_id' => 26,
            'type' => 1,
            'page' => 1,
            'limit' => 20
        ),
        'ext' => array(
            array(
                'user_id' => 26,
                'type' => '2',
                'page' => 1,
                'limit' => 20
            ),
            array(
                'user_id' => 26,
                'type' => '3',
                'page' => 1,
                'limit' => 20
            ),
            array(
                'user_id' => 26,
                'type' => '4',
                'page' => 1,
                'limit' => 20
            )
        )
    ),

    'v3/mystore/subscribes_other' => array(
        'data' => array(
            'user_id' => 1,
            'type' => 'goods',
            'tag_id' => 6666,
            'page' => 1,
            'limit' => 20
        ),
        'ext' => array(
            array(
                'user_id' => 1,
                'type' => 'dm',
                'tag_id' => 6666,
                'page' => 1,
                'limit' => 20
            )
        )
    ),
    'v3/user/location/list' => array(
        'data' => array(
            'type' => 'province',
        )
    ),
    'api/dynamic/generate' => array(
        'data' => array(
            'owner_type' => 'user',
            'owner_id' => 6,
            'act_type' => 'subscribe',
            'target_id[goods_id]' => 1,
            'target_id[store_id]' => 1,
            'target_type' => 'goods',
            'dynamic_body' => '测试，嘻嘻！'
        ),
        'ext' => array(
            array(
                'owner_type' => 'user',
                'owner_id' => 6,
                'act_type' => 'subscribe',
                'target_id[store_id]' => 1,
                'target_type' => 'store',
                'dynamic_body' => '测试，嘻嘻！'
            ),
            array(
                'owner_type' => 'user',
                'owner_id' => 6,
                'act_type' => 'subscribe',
                'target_id[tag_id]' => 135,
                'target_type' => 'tag',
                'dynamic_body' => '测试，嘻嘻！'
            ),
            array(
                'owner_type' => 'user',
                'owner_id' => 6,
                'act_type' => 'subscribe',
                'target_id[dm_id]' => 280,
                'target_type' => 'dm',
                'dynamic_body' => '测试，嘻嘻！'
            ),
            array(
                'owner_type' => 'store',
                'owner_id' => 1,
                'act_type' => 'changed',
                'target_id[goods_id]' => 280,
                'target_id[store_id]' => 1,
                'target_type' => 'goods',
                'dynamic_body' => '20'
            ),
            array(
                'owner_type' => 'user',
                'owner_id' => 1,
                'act_type' => 'add',
                'target_id[goods_id]' => 280,
                'target_id[store_id]' => 1,
                'target_id[tag_id]' => 135,
                'target_type' => 'goods',
                'dynamic_body' => '20'
            ),
            array(
                'owner_type' => 'store',
                'owner_id' => 20,
                'act_type' => 'release',
                'target_id[goods_id]' => 280,
                'target_id[store_id]' => 2,
                'target_type' => 'goods',
                'dynamic_body' => '发布商品测试！'
            ),
            array(
                'owner_type' => 'store',
                'owner_id' => 1,
                'act_type' => 'release',
                'target_id[dm_id]' => 280,
                'target_id[store_id]' => 2,
                'target_type' => 'dm',
                'dynamic_body' => '发布dm测试'
            ),
            array(
                'owner_type' => 'user',
                'owner_id' => 6,
                'act_type' => 'create',
                'target_id[tag_id]' => 280,
                'target_type' => 'tag',
                'dynamic_body' => '用户创建标签'
            )
        )
    ),
    'v3/dynamic/list' => array(
        'data' => array(
            'page' => 1,
            'limit' => 20
        )
    ),
    'v3/dynamic/comment' => array(
        'data' => array(
            'id' => 1,
            'comment' => '评论内容噢'
        )
    ),
    'v3/dynamic/checkLaud' => array(
        'data' => array(
            'id' => 1
        )
    ),
    'v3/dynamic/commentList' => array(
        'data' => array(
            'id' => 1,
            'page' => 1,
            'limit' => 20
        )
    ),
    'v3/dynamic/laud' => array(
        'data' => array(
            'id' => 1,
        )
    ),
    'v3/dynamic/laudUserList' => array(
        'data' => array(
            'id' => 1,
            'page' => 1,
            'limit' => 20
        )
    ),
    'v3/dynamic/info' => array(
        'data' => array(
            'dynamic_id' => 2872
        )
    ),
    'v3/dynamic/recommend' => array(
        'data' => array(
            'page' => 1,
            'limit' => 20
        )
    ),
    'v3/friend/addressbook/analyse' => array(
        'data' => array(
            'phone_list' => '张潇亮||13241386645,张三||13142254778',
        )
    ),
    'v3/friend/list' => array(
        'data' => array()
    ),
    'v3/friend/add' => array(
        'data' => array(
            'friend_id' => 1,
            'user_type' => 0,
        )
    ),
    'v3/friend/delete' => array(
        'data' => array(
            'user_id' => '1',
            'user_type' => '0',
        )
    ),
    'v3/friend/judge' => array(
        'data' => array(
            'user_id' => '1',
            'user_type' => '0',
        )
    ),
    'v3/friend/user/info' => array(
        'data' => array(
            'user_id' => '1',
            'user_type' => '0',
        )
    ),
    'v3/friend/sweep_code_add' => array(
        'data' => array(
            'key' => '100001',
        )
    ),
    'v3/friend/remark' => array(
        'data' => array(
            'user_id' => 1,
            'user_type' => 0,
            'friend_id' => 1,
            'friend_type' => 0,
            'remark' => 'abc'
        )
    ),
    'v3/friend/get_remark' => array(
        'data' => array(
            'user_id' => 1,
            'user_type' => 0,
            'friend_id' => 1,
            'friend_type' => 0,
        )
    ),
    'v3/user/settings/notification' => array(
        'data' => array(
            'code' => 53
        )
    ),
    'v3/subscribe' => array(
        'data' => array(
            'type' => 'store_goods',
            'id' => 64,
            'tag_name[0]' => '我的衣柜',
            'store_id' => 32
        ),
        'ext' => array(
            array(
                'type' => 'store',
                'id' => 32
            ),
            array(
                'type' => 'dm',
                'id' => 283,
                'tag_name' => array('礼物', '促销')
            ),
            array(
                'type' => 'store_tag',
                'id' => 24,
                'store_id' => 32
            ),
            array(
                'type' => 'user_tag',
                'id' => 251,
                'user_id' => 1
            ),
        )
    ),
    'v3/unbindgoods' => array(
        'data' => array(
            'bu_goods_id' => 64
        )
    ),
    'v3/unsubscribe' => array(
        'data' => array(
            'type' => 'store',
            'id' => 32
        ),
        'ext' => array(
            array(
                'type' => 'store_goods',
                'id' => 64,
                'tag_id' => 9,
                'store_id' => 32
            ),
            array(
                'type' => 'dm',
                'id' => 283,
                'tag_id' => 9
            ),
            array(
                'type' => 'store_tag',
                'id' => 24,
                'store_id' => 32
            ),
            array(
                'type' => 'user_tag',
                'id' => 251
            ),
        )
    ),
    
    'v3/user/platform/binding' => array(
        'data' => array(
            'origin' => 'sina',
            'uuid' => '2gl8ua65rou8409u5pre6qq4v2',
            'name' => '北京英雄',
            'register_user_agent' => 1,
        )
    ),
    'v3/user/platform/login' => array(
        'data' => array(
            'uuid' => '122fffddd444455',
            'origin' => 'taobao',
            'dev_uuid' =>'49e02435-d60d-200c-9fa6-2252419a6fb6cho',
            'version_name' => '2.12'
        )
    ),
    'v3/feedback' => array(
        'data' => array(
            'content' => 'Hi，微店V2.1成功上线！',
            'ctype' => 1,
            'obj_id' => 129
        )
    ),
    'v3/user/logout' => array(
        'data' => array()
    ),
    'v3/tag/recommend' => array(
        'data' => array(
            'goods_id' => 8,
            'store_id' => 116
        ),
        'ext' => array(
            array('dm_id' => 281)
        )
    ),
    'v3/version' => array(
        'data' => array(
            'agent_id' => 1,
            'version_code'=>5
        ),
        'ext' => array(
            array(
                'agent_id' => 2
            )
        )
    ),
    'v3/user/message' => array(
        'data' => array(
            'page' => 1,
            'limit' => 20
        )
    ),
    'v3/user/message/read' => array(
        'data' => array(
            'ids' => 8
        )
    ),
    'v3/user/message/send' => array(
        'data' => array(
            'type' => 'bu',
            'source_id' => 2,
            'action' => 'notice',
            'to' => 6,
            'title' => '',
            'message' => '您好，您申请甘家口百货商户的会员卡已成功，会员卡号码为XXX，系统已经为您生成了该商户的手机二维码会员卡，商户一扫您的二维码会员卡，您就可享受会员权益'
        ),
        'ext' => array(
            array(
                'type' => 'bu',
                'source_id' => 32,
                'action' => 'notice',
                'to' => 'fans',
                'title' => '',
                'message' => '超市发集团下所有商品打均5折，抢吧！',
                'image_id' => '92cd15ea0f31d98358f9f3cfc8e6d74f01'
            )
        ),
    ),
    'v3/employee/profile' => array(
        'data' => array()
    ),
    'v3/employee/login' => array(
        'data' => array(
            'username' => '18611169301',
            'password' => '111111',
            'uuid' => '49e02435-d60d-200c-9fa6-2252419a6fb6cho'
        )
    ),

    'v3/summarize/get' => array(
        'data' => array(
            'type' => 'user',
            'id' => 6
        ),
    ),
    'v3/summarize/set' => array(
        'data' => array(
            'type' => 'user',
            'id' => 6,
            'item' => 'goods',
            'op' => 'plus'
        ),
        'ext' => array(
            array(
                'type' => 'user',
                'id' => 6,
                'item' => 'tag',
                'op' => 'minus'
            )
        ),
    ),
    'v3/summarize/get' => array(
        'data' => array(
            'type' => 'user',
            'id' => 6
        ),
    ),
    'v3/employee/password/modify' => array(
        'data' => array(
            'old_password' => '666666',
            'new_password' => '111111',
            'confirm_password' => '111111',
        )
    ),
    'v3/employee/category/apply' => array(
        'data' => array(
            'type' => 'dismiss',
            'categories' => 'all',
        )
    ),
    'v3/employee/brand/apply' => array(
        'data' => array(
            'type' => 'dismiss',
            'brands' => 'all',
        )
    ),
    'v3/employee/dm/list' => array(
        'data' => array(
            'type' => 'employee',
            'page' => '1',
            'limit' => '5'
        ),
        'ext' => array(
            array(
                'type' => 'store_tag',
                'store_id' => '2',
                'tag_id' => '1113',
                'is_imported' => 0,
                'page' => '1',
                'limit' => '5'
            ),
            array(
                'type' => 'user',
                //   'employee_id' => '2',
                'user_id' => '2',
                'page' => '1',
                'limit' => '5'
            ),
            array(
                'type' => 'user_tag',
                //   'employee_id' => '2',
                'tag_id' => '2',
                'user_id' => '2',
                'page' => '1',
                'limit' => '5'
            ),
            array(
                'type' => 'search',
                'tag_id' => '2',
                'page' => '1',
                'limit' => '5'
            ),
            array(
                'type' => 'store_tag_fans',
                'tag_id' => '1113',
                'user_id' => '2',
                'page' => '1',
                'limit' => '5'
            ),
        )
    ),
    'v3/employee/category/apply/list' => array(
        'data' => array(
            'page' => '1',
            'limit' => '5'
        )
    ),
    'v3/employee/brand/apply/list' => array(
        'data' => array(
            'page' => '1',
            'limit' => '5'
        )
    ),
    'v3/employee/category/list' => array(
        'data' => array(
//'category_id'=> 219,
            'page' => '1',
            'limit' => '5'
        )
    ),
    'v3/employee/brand/list' => array(
        'data' => array(
            'page' => '1',
            'limit' => '5'
        )
    ),
    'v3/employee/dm/add' => array(
        'data' => array(
// 'employee_id' => '17',
            'title' => '清仓大甩',
            'info' => '超值',
            'start_date' => '20130311',
            'end_date' => '20130316',
            'tag_ids' => array('1099', '1114', '1115'),
            'goods_ids' => array('71', '73', '74'),
            'image' => '3f63f5ef38d57b2f86e2372b7b90d45e01'
        )
    ),
    'v3/employee/dm/update' => array(
        'data' => array(
// 'employee_id' => '17',
            'dm_id' => '472',
            'title' => '促销',
            'info' => '便宜又实惠1',
            'start_date' => '20130124',
            'end_date' => '20130208',
            'tag_ids' => array('16', '358'),
            'goods_ids' => array('26', '4')
        )
    ),
    'v3/employee/dm/delete' => array(
        'data' => array(
            'dm_id' => array('452', '461'),
        )
    ),
    'v3/employee/dm/tag/add' => array(
        'data' => array(
            'dm_id' => '472',
            'tag_ids' => array('1060', '1070')
        )
    ),
    'v3/employee/dm/tag/delete' => array(
        'data' => array(
            'dm_id' => '472',
            'tag_ids' => array('1060', '1070')
        )
    ),
    'v3/employee/subscribe/tag' => array(
        'data' => array(
            'user_id' => '6',
            'tag_id' => '7'
        )
    ),
    'v3/employee/brand/search' => array(
        'data' => array(
            'q' => '美',
            'page' => '1',
            'limit' => '5'
        )
    ),
    'v3/employee/user/list' => array(
        'data' => array(
            'type' => 'goods',
            'goods_id' => 84,
            'page' => '1',
            'limit' => '5'
        ), 'ext' => array(
            array(
                'type' => 'store_fans',
                'page' => '1',
                'limit' => '5'
            ),
            array(
                'type' => 'store_tag_fans',
                'tag_id' => 1014,
                'page' => '1',
                'limit' => '5'
            ),
            array(
                'type' => 'dm',
                'dm_id' => 1087,
                'page' => '1',
                'limit' => '5'
            ),
            array(
                'type' => 'laud',
                'goods_id' => 2302,
                'page' => '1',
                'limit' => '5'
            ),
        )
    ),
    'v3/employee/friend/add' => array(
        'data' => array(
            'friend_id' => 12,
        )
    ),
    'v3/employee/friends/user/info' => array(
        'data' => array(
            'user_id' => '1',
            'user_type' => '0',
        )
    ),
    'v3/employee/friends/remark' => array(
        'data' => array(
            'friend_id' => 1,
            'friend_type' => 0,
            'remark' => 'abc'
        )
    ),

    'v3/employee/summarize' => array(
        'data' => array(
            'type' => 'store_tag',
            'tag_id' => 1027
        ),
        'ext' => array(
            array(
                'type' => 'employee'
            ),
            array(
                'type' => 'user_tag',
                'tag_id' => 1010,
                'user_id' => 3
            ),
            array(
                'type' => 'store_fans',
                'tag_id' => 1027
            ),
            array(
                'type' => 'search_tag',
                'tag_id' => 1027
            ),
            array(
                'type' => 'store_tag_fans',
                'tag_id' => 1027
            ),
        )
    ),
   
    'v3/employee/goods_tag' => array(
        'data' => array(
            'type' => 'add',
            'tag_ids' => '1087,1088',
            'goods_id' => 61
        ),
        'ext' => array(
            array(
                'type' => 'del',
                'tag_ids' => '1087,1088',
                'goods_id' => 61
            )
        )
    ),
 
    'v3/employee/logout' => array(
        'data' => array()
    ),
    'v3/employee/version' => array(
        'data' => array(
            'agent_id' => 1
        ),
        'ext' => array(
            array(
                'agent_id' => 2
            )
        )
    ),
    'v3/employee/upload/image' => array(
        'data' => array(
            'post' => '',
        )
    ),
    'v3/employee/goods/info' => array(
        'data' => array(
            'goods_id' => 80
        )
    ),
    'v3/message/total' => array(
        'data' => array(
            'start_date' => '1356592845',
            'end_date' => '1363057694',
        ),
    ),
  
    'v3/employee/update' => array(
        'data' => array(
            'nick_name' => '甘家口_李明',
            'intro' => '我的商店我经营',
        )
    ),
    'v3/employee/friends/delete' => array(
        'data' => array(
            'user_id' => '1',
            'user_type' => '0'
        )
    ),
    'v3/employee/friends/judge' => array(
        'data' => array(
            'user_id' => '1',
            'user_type' => '0',
        )
    ),
    'v3/goods/laud' => array(
        'data' => array(
            'bu_id' => 1,
            'bu_goods_id' => 2314
        )
    ),
    'v3/goods/getlaudstatus' => array(
        'data' => array(
            'bu_id' => 1,
            'goods_id' => 2314
        )
    ),
    'v3/employee/friends/search/user' => array(
        'data' => array(
            'key' => '18611169301'
        )
    ),
    'v3/employee/friends/apply/list' => array(
        'data' => array(
            'page' => 1,
            'limit' => 10
        )
    ),
    'v3/employee/friends/add' => array(
        'data' => array(
            'id' => 1,
        )
    ),
    'v3/employee/friends/address/list' => array(
        'data' => array(
            'phone_number' => '张三||15210814192,马六||18614586392'
        )
    ),
    'v3/friend/message/count' => array(
        'data' => array()
    ),
    'v3/friend/message/list' => array(
        'data' => array()
    ),
    'v3/friend/message/agree' => array(
        'data' => array(
            'id' => 5
        )
    ),
    'v3/friend/message/delete' => array(
        'data' => array(
            'id' => '5'
        )
    ),
    'v3/employee/friends/apply/delete' => array(
        'data' => array(
            'id' => 1,
        )
    ),
    'v3/employee/friends/apply' => array(
        'data' => array(
            'to_uid' => 125,
            'user_type' => 0,
        )
    ),
    'v3/employee/fans/dm' => array(
        'data' => array(
            'page' => 1,
            'limit' => 30
        )
    ),
    'v3/employee/fans/tag' => array(
        'data' => array(
            'page' => 1,
            'limit' => 30
        )
    ),
    'v3/summarize/laud' => array(
        'data' => array(
            'tag_id' => 7637,
        )
    ),
    'v3/employee/image' => array(
        'data' => array()
    ),
    'v3/user/add/token' => array(
        'data' => array(
            'device_token' => 'e8631031623497cc9804a4ec1dba3b09aba000d41cbbcddeadaefc00f1ae79a8'
        )
    ),
    'v3/employee/add/token' => array(
        'data' => array(
            'device_token' => 'e8631031623497cc9804a4ec1dba3b09aba000d41cbbcddeadaefc00f1ae79a8'
        )
    ),
    'v3/employee/add/goods/privileges' => array(
        'data' => array()
    ),
    'v3/employee/add/dm/privileges' => array(
        'data' => array()
    ),
    'v3/store/format' => array(
        'data' => array(
            'page' => 1,
            'limit' => 30
        )
    ),
    'v3/store/format/search' => array(
        'data' => array(
            'key' => '超市',
            'cityid' => 52,
            'page' => 1,
            'limit' => 30
        )
    ),
    'v3/store/format/list' => array(
        'data' => array(
            'page' => 1,
            'limit' => 4,
            'cityid' => 52,
            'id' => 1
        )
    ),
    'v3/store/sub/list' => array(
        'data' => array(
            'cityid' => 52,
        )
    ),
    'v3/order/list' => array(
        'data' => array(
            'order_type' => 10,
            'page' => 1
        )
    ),
    'v3/order/order_info' => array(
        'data' => array(
            'order_id' => 3,
        )
    ),
    'v3/order/cancel_order' => array(
        'data' => array(
            'order_id' => 1,
        )
    ),
    'v3/goods/info' => array(
        'data' => array(
            'bu_goods_id' => 1,
            'user_id' => 1
        )
    ),
    'v3/goods/attr' => array(
        'data' => array(
            'bu_goods_id' => 414796,
        )
    ),
    'v3/shake/list' => array(
        'data' => array(
            'page' => '1',
            'limit' => '5',
            'shake_id' => 19
        )
    ),
    'v3/shake' => array(
        'data' => array(
            'longitude' => '116.469254556',
            'latitude' => '37.9544819661',
            'shake_id' => 30,
            'store_id' => 128
        )
    ),
    'v3/shake/verifycode' => array(
        'data' => array(
            'type' => '00003',
            'dmid' => 12,
            'id' => 30,
            'uid' => 100,
            'bu_id' => 2
        )
    ),
    'v3/shake/getcouponcode' => array(
        'data' => array(
            'code' => '0004-1-2'
        )
    ),
    'v3/shake/activityList' => array(
        'data' => array(
            'page' => 1,
            'limit' => 6,
            'longitude' => '116.397308',
            'latitude' => '39.767102',
            'city_id' => 52
        )
    ),
    'v3/shake/buActivity' => array(
        'data' => array(
            'bu_id' => 19
        )
    ),
    'v3/shake/info' => array(
        'data' => array(
            'shake_id' => 1
        )
    ),
    'v3/region/get' => array(
        'data' => array(
            'type' => 'all'
        )
    ),
    'v3/region/getCityId' => array(
        'data' => array(
            'province_name' => '浙江省',
            'city_name' => '绍兴市',
        )
    ),
    'v3/bu/category/list' => array(
        'data' => array(
            'bu_id' => '33',
            'page' => '1',
            'limit' => '50',
        )
    ),
    'v3/bu/last/category/list' => array(
        'data' => array(
            'bu_id' => '33',
            'bu_category_id' => 9340,
            'page' => '1',
            'limit' => '50',
        )
    ),
    'v3/bu/brand/list' => array(
        'data' => array(
            'bu_id' => '33',
            'page' => '1',
            'limit' => '50',
        )
    ),
    'v3/store/info' => array(
        'data' => array(
            'store_id' => 33
        )
    ),
     'v3/bu/brands/list' => array(
        'data' => array(
            'bu_id' => '127',
	'page' => '1',
	'limit' => '10'
        )
    ),
	'v3/jump/config' => array(
        'data' => array()
    ),
    'v3/jump/url' => array(
        'data' => array(
            'type' => 'gyg',
            'longitude' => '',
            'latitude' => '',
            'cityid' => 0
        )
    ),
    'v3/unit/getCount' => array('data' => array('bu_id' => 128)),
    'v3/unit/detail' => array('data' => array('bu_id' => 128)),
    
    'v3/share/statistics' => array(
        'data' => array(
            'share_url' => 'http://test.h5.mystore.com.cn/share/goods/959278/0/2247/dbad376340815ba262964be9b128b56b/2',
        )
    ),
    'v3/share/todynamic' => array(
        'data' => array(
            'type' => 1,
            'id' => 1,
            'body' => ''
        )
    ),

    'v3/employee/share' => array(
        'data' => array(
            'type' => 'dm',
            'id' => 1,
        )
    ),
    'v3/share' => array(
        'data' => array(
            'type' => 'dm',
            'id' => 1,
        )
    ),
    'v3/employee/employee_brand_list'=>array(
        'data'=>array('page_num' => 10,'current_page'=>1)
    ),
    'v3/employee/employee_category_list'=>array(
        'data'=>array('page_num' => 10,'current_page'=>1)
    ),
    'v3/employee/employee_goods_list'=>array(
        'data'=>array('page_num' => 10,'current_page'=>1,'actionType'=>'b','id'=>353338)

    ),
    'v3/preferential' => array(
        'data' => array(
            'longitude' => 0,
            'latitude' => 0,
            'city_id' => 52
        )
    ),
);

/* End of file rosetests.php */
/* Location: ./application/config/rosetests.php */
