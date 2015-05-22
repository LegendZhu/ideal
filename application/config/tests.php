<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');
/*
 * Automated testing configuration
*/
$config['tests'] = array(
    'apistore/mystore/moreaddtagtosku' => array(
        'data' => array(
            'retailer_admin_id' => 173,
            'tag_code'=>4,
            'goods_id'=>'13100000012,13393410029'
        )
    ),
    'apistore/mystore/addtagtosku' => array(
        'data' => array(
            'retailer_admin_id' => 173,
            'tag_code'=>4,
            'goods_id'=>13100000012
        )
    ),
    'apistore/more/acquiremobilecaptcha' => array(
        'data' => array(
            'mobile' => 18210996458,
        )
    ),
    'apistore/friends/rmystoremoblie' => array(
        'data' => array(
            'retailer_admin_id' => 73,
            'phonenumber'=>'张喜宏|18210554585,是|18210996458'
        )
    ),
    'api/street/getstorelistbygooglemap' => array(
        'data' => array(
            'store_id' => 28,
            'longitude'=>116.454830000000006,
            'latitude'=>39.945521999999997
        )
    ),
    'api/shoppingwall/geuserhomedash' => array(
        'data' => array(
            'uid' => 28
        )
    ),
    'api/more/updateuserinfo' => array(
        'data' => array(
            'uid' => 28,
            'uname'=>'shisw1',
            'true_name'=>'史生伟',
            'sex'=>'男',
            'city'=>'beijing',
            'province'=>'北京',
            'shopping_manifesto'=>'购物宣扬啊大撒旦',
            'email'=>'313676622@qq.com'
        )
    ),
    'api/more/issetinvtecode' => array(
        'data' => array(
            'invte_code' => 711,
        )
    ),
    'api/more/alterpassword' => array(
        'data' => array(
            'password' => '96e79218965eb72c92a549dd5a330112',
            'retailer_admin_id'=>100,
            'newPassword' => '96e79218965eb72c92a549dd5a330112'
        )
    ),
    'api/more/alertpassword' => array(
        'data' => array(
            'upassword' => '96e79218965eb72c92a549dd5a330112',
            'phonenumber'=>18611169301,
            'captcha' => 991179
        )
    ),
    'api/more/acquirecaptcha' => array(
        'data' => array(
            'invte_code' => 711,
            'mobile'=>18611169301
        )
    ),
    'api/friends/sendbindcaptcha' => array(
        'data' => array(
            'uid' => 28,
            'mobile'=>18210996458
        )
    ),
    'api/friends/getuserinfo' => array(
        'data' => array(
            'uid' => 11
        )
    ),
    'api/more/getuserinfo' => array(
        'data' => array(
            'uid' => 11
        )
    ),
    'api/more/checkcaptcha' => array(
        'data' => array(
            'invte_code' => 711
        )
    ),
    'api/more/changepassword' => array(
        'data' => array(
            'uid' => 28,
            'oldPwd' => '613e606cab2b17a0d6530dcb2f09a537',
            'password' => '613e606cab2b17a0d6530dcb2f09a537'
        )
    ),
    'api/friends/addfriend' => array(
        'data' => array(
            'uid' => 12,
            'friend_uid' => 19
        )
    ),
    'api/street/getuseraddtaglist' => array(
        'data' => array(
            'uid' => 28,
            'start' => 0,
            'num' => 10
        )
    ),
    'api/street/getretailtaglist' => array(
        'data' => array(
            'uid' => 28,
            'store_id' => 3,
            'retailer_id' => 1,
            'start' => 0,
            'num' => 10
        )
    ),
    'apistore/friends/getusertaginfo' => array(
        'data' => array(
            'tag_id' => 130219
        )
    ),
    'api/search/deletetag' => array(
        'data' => array(
            'uid' => 28,
            'tag_id' => 130219
        )
    ),
    'api/shoppingwall/addtag' => array(
        'data' => array(
            'uid' => 28,
            'tag_name' => '我的书架'
        )
    ),
    'api/shoppingwall/getfriendtaglist' => array(
        'data' => array(
            'uid' => 28,
            'start' => 0,
            'num' => 10
        )
    ),
    'api/shoppingwall/gethottaglist' => array(
        'data' => array()
    ),
    'api/shoppingwall/getmytaglist' => array(
        'data' => array(
            'uid' => 28,
            'start' => 0,
            'num' => 10
        )
    ),
    'api/shoppingwall/getnogroupdash' => array(
        'data' => array(
            'uid' => 28
        )
    ),
    'api/street/getstoretagidbygoodslist' => array(
        'data' => array(
            'tag_id' => 1,
            'start' => 0,
            'num' => 1
        )
    ),
    'api/street/getstoretagidbyuserlist' => array(
        'data' => array(
            'tag_id' => 40013,
            'start' => 0,
            'num' => 2
        )
    ),
    'api/street/getstoretaglistbytagid' => array(
        'data' => array(
            'uid' => 17,
            'tag_id' => 39990,
            'start' => 0,
            'num' => 2
        )
    ),
    'api/street/getstoretagdashbytagid' => array(
        'data' => array(
            'uid' => 17,
            'tag_id' => 39990,
            'store_id' => 3,
            'retailer_id' => 1
        )
    ),
    'api/more/comment' => array(
        'data' => array(
            'post_uid' => 33,
            'post_uname' => "周笔畅",
            'post_content' => "我的选择可比克",
        )
    ),
    'api/more/getcitylist' => array(
        'data' => array(
            'start' => 0,
            'num' => 2,
        )
    ),
    'api/shoppingwall/getdmrelatedgoodsbydmid' => array(
        'data' => array(
            'uid' => 17,
            'dm_id' => 268,
            'start=' => 0,
            'num' => 2,
        )
    ),
    'api/street/subscriberetailer' => array(
        'data' => array(
            'uid' => 17,
            'store_id' => 268,
            'retailer_id' => 1
        )
    ),
    'apistore/search/getgoodsinfobygoodscode' => array(
        'data' => array(
            'retailer_admin_id' => 173,
            'goods_code' => '69556886999'
        )
    ),
    'apistore/publishdm/getskulistbytagid' => array(
        'data' => array(
            'tag_id' => 39976,
            'start=' => 0,
            'num' => 2,
        )
    ),
    'api/street/getstorelistbyaddressorname' => array(
        'data' => array(
            'keywords' => '屈臣氏',
            'start=' => 0,
            'num' => 10,
        )
    ),
    'apistore/publishdm/searchgoodsinfobykeywords' => array(
        'data' => array(
            'tag_id' => 1,
            'keywords' => '哈',
            'start=' => 0,
            'num' => 2,
        )
    ),
    'api/street/getstorelistbykeywords' => array(
        'data' => array(
            'uid' => 17,
            'keywords' => '朝阳门店',
            'start=' => 0,
            'num' => 2,
        )
    ),
    'api/street/getstoreinfo' => array(
        'data' => array(
            'store_id' => 3,
            'retailer_id' => 1,
        )
    ),
    'api/street/getrandstorelist' => array(
        'data' => array(
            'city_id' => 1,
            'start' => 0,
            'num' => 2,
        )
    ),
    'api/shoppingwall/getskuinfo' => array(
        'data' => array(
            'uid' => 17,
            'goods_id' => '914536986',
        )
    ),
    'apistore/mystore/getstoredashboard' => array(
        'data' => array(
            'store_id' => 3,
            'retailer_id' => '1',
        )
    ),
    'apistore/more/getcategorybystore' => array(
        'data' => array(
            'retailer_admin_id' => 173,
            'start' => 0,
            'num' => 2,
        )
    ),
    'apistore/more/getstoreadmininfo' => array(
        'data' => array(
            'retailer_admin_id' => 173,
        )
    ),
    'apistore/mystore/getdashboard' => array(
        'data' => array(
            'tag_id' => 1,
        )
    ),
    'apistore/mystore/getdashboardall' => array(
        'data' => array(
            'tag_id' => 39969,
            'uid' => 28,
        )
    ),
    'apistore/mygoods/getskulistbytagid' => array(
        'data' => array(
            'tag_id' => 42793,
            'start' => 0,
            'num' => 2,
        )
    ),
    'apistore/mystore/getmytaglistbyretaileradminid' => array(
        'data' => array(
            'retailer_admin_id' => 173,
            'start' => 0,
            'num' => 2,
        )
    ),
    'apistore/mystore/getbrandsbyretaileradminid' => array(
        'data' => array(
            'retailer_admin_id' => 173,
        )
    ),
    'apistore/mystore/getcategorysbyretaileradminid' => array(
        'data' => array(
            'retailer_admin_id' => 173,
        )
    ),
    'api/more/websitebind' => array(
        'data' => array(
            'uuid' => 1111111,
            'type' => 1,
            'name' => 'shishengwei',
            'invte_code' => 'SPZK610000001',
            'agent' => 'android',
        )
    ),
    'api/more/changegoodstatusin' => array(
        'data' => array(
            'uid' => 27,
            'goods_id' => 13120200116,
        )
    ),
    'api/more/changegoodstatusout' => array(
        'data' => array(
            'uid' => 27,
            'goods_id' => 13120200116,
        )
    ),
    'api/more/changegoodtatusafter' => array(
        'data' => array(
            'uid' => 27,
            'goods_id' => 13122140097,
        )
    ),
    'api/more/changgoodinbuy' => array(
        'data' => array(
            'uid' => 28,
            'goods_id' => 13133300300,
        )
    ),
    'api/more/editshoppingcartgoodscount' => array(
        'data' => array(
            'uid' => 28,
            'goods_id' => 13133300300,
            'goods_num' => 4,
        )
    ),
    'api/more/getaftergoodbyuid' => array(
        'data' => array(
            'uid' => 28,
            'start' => 0,
            'num' => 4,
        )
    ),
    'api/more/getbuygoodslistbyretailer' => array(
        'data' => array(
            'uid' => 28,
            'store_id' => 3,
            'retailer_id' => 1,
            'start' => 0,
            'num' => 2,
        )
    ),
    'api/more/getbuyretailerbyuid' => array(
        'data' => array(
            'uid' => 28,
            'start' => 0,
            'num' => 2,
        )
    ),
    'apistore/mystore/getnotcompletemessagebyskid' => array(
        'data' => array(
            'goods_id' => '13100000012',
        )
    ),
    'apistore/mystore/getdmbystoreadmin' => array(
        'data' => array(
            'retailer_admin_id' => 173,
            'start' => 0,
            'num' => 2,
        )
    ),
    'apistore/mystore/getdminfobydmid' => array(
        'data' => array(
            'dm_id' => 1,
        )
    ),
    'apiatore/publishdm/deldm' => array(
        'data' => array(
            'dm_id' => 1,
            'retailer_admin_id' => 173
        )
    ),
    'apistore/publishdm/getdmlistbydmid' => array(
        'data' => array(
            'dm_id' => 276,
            'start' => 0,
            'num' => 2,
        )
    ),
    'apistore/publishdm/getskutagbustoreadmin' => array(
        'data' => array(
            'retailer_admin_id' => 173,
            'start' => 0,
            'num' => 2,
        )
    ),
    'apistore/publishdm/givedmplaytag' => array(
        'data' => array(
            'dm_id' => 1,
            'retailer_admin_id' => 173,
            'retailer_id' => 1,
            'store_id' => 3,
            'tag_name' => 'dongde'
        )
    ),
    'apistore/mystore/deldmtag' => array(
        'data' => array(
            'dm_id' => 278,
            'tag_id' => '136638',
        )
    ),
    'apistore/mystore/getrdmlistbytagid' => array(
        'data' => array(
            'uid' => 40,
            'tag_id' => 40065,
            'start' => 0,
            'num' => 2
        )
    ),
    'api/search/getdmbytagcode' => array(
        'data' => array(
            'tag_code' => 2299,
            'start' => 0,
            'num' => 2
        )
    ),
    'apistore/search/getdmlistbysearchtag' => array(
        'data' => array(
            'tag_code' => 2299,
            'start' => 0,
            'num' => 2
        )
    ),
    'apistore/search/getdmlistbystoretag' => array(
        'data' => array(
            'tag_id' => 158471,
            'start' => 0,
            'num' => 2
        )
    ),
    'api/shoppingwall/getdmidbydminfo' => array(
        'data' => array(
            'uid' => 17,
            'dm_id' => 228,
        )
    ),
    'api/shoppingwall/getdmlistbytagid' => array(
        'data' => array(
            'uid' => 40,
            'tag_id' => 40065,
            'start' => 0,
            'num' => 2
        )
    ),
    'api/street/getdmbytagid' => array(
        'data' => array(
            'tag_id' => 42445,
            'start' => 0,
            'num' => 2
        )
    ),
    'api/street/getdmlistbystoreid' => array(
        'data' => array(
            'retailer_id' => 1,
            'store_id' => 3,
        )
    ),
    'apistore/mygoods/getalltaglist' => array(
        'data' => array(
            'retailer_admin_id' => 173,
            'start' => 0,
            'num' => 20
        )
    ),
    'apistore/mygoods/getgoodadmintags' => array(
        'data' => array(
            'goods_id' => 13101300004,
            'retailer_admin_id' => 173,
            'start' => 0,
            'num' => 10
        )
    ),
    'apistore/mygoods/gethottagbydmid' => array(
        'data' => array(
            'dm_id' => 255,
            'start' => 0,
            'num' => 20
        )
    ),
    'apistore/mystore/gethotstag' => array(
        'data' => array(
            'session_id' => 1,
            'start' => 0,
            'num' => 2
        )
    ),
    'apistore/mystore/getcustomertaglistbygoodsid' => array(
        'data' => array(
            'session_id' => 1,
            'goods_id' => 13124100127,
            'start' => 0,
            'num' => 2
        )
    ),
    'apistore/mystore/getmerchantstagsubscriberlist' => array(
        'data' => array(
            'uid' => 27,
            'tag_id' => 24690,
            'start' => 0,
            'limit' => 6
        )
    ),
    'apistore/mystore/getsamenamebytagid' => array(
        'data' => array(
            'session_id' => 1,
            'tag_id' => 130203,
            'start' => 0,
            'num' => 1
        )
    ),
    'apistore/mystore/gettagbystoreadmin' => array(
        'data' => array(
            'retailer_admin_id' => 315,
            'start' => 0,
            'num' => 5
        )
    ),
    'apistore/mystore/gettagdictionary' => array(
        'data' => array(
            'retailer_admin_id' => 173,
            'start' => 0,
            'num' => 10
        )
    ),
    'apistore/mystore/gettagnamebydmid' => array(
        'data' => array(
            'dm_id' => 1,
            'retailer_id' => 1,
            'store_id' => 3,
            'start' => 0,
            'num' => 3
        )
    ),
    'apistore/mystore/getusertagbystoreadmin' => array(
        'data' => array(
            'retailer_admin_id' => 212,
            'start' => 0,
            'num' => 5
        )
    ),
    'api/shoppingwall/getskurelatetaglist' => array(
        'data' => array(
            'goods_id' => 215706,
            'start' => 0,
            'num' => 9
        )
    ),
    'api/shoppingwall/getstoretaglist' => array(
        'data' => array(
            'uid' => 27,
            'start' => 0,
            'num' => 9
        )
    ),
    'api/shoppingwall/getsubscribertaguserlistbytagid' => array(
        'data' => array(
            'tag_id' => 40129,
            'start' => 0,
            'num' => 9
        )
    ),
    'api/shoppingwall/gettagdashbytagid' => array(
        'data' => array(
            'uid' => 27,
            'tag_id' => 39968
        )
    ),
    'api/shoppingwall/getungroupeddmlistbyuid' => array(
        'data' => array(
            'uid' => 10,
            'start' => 0,
            'num' => 4
        )
    ),
    'api/shoppingwall/getungroupedskulistbyuid' => array(
        'data' => array(
            'uid' => 27,
            'start' => 0,
            'num' => 5
        )
    ),
    'api/shoppingwall/getusertagidbygoodslist' => array(
        'data' => array(
            'uid' => 28,
            'tag_id' => 39969,
            'start' => 0,
            'num' => 5
        )
    ),
    'apistore/friends/mystoremoblie' => array(
        'data' => array(
            'uid' => 3,
            'phone_number' => '张喜宏|152105814192,史生伟|18611169301,谭岳静|1337224588',
            'start' => 0,
            'num' => 3
        )
    ),
    'api/more/websitelogin' => array(
        'data' => array(
            'uuid' => '1111kkk',
            'type' => 2,
        )
    ),
    'api/more/mystorelogin' => array(
        'data' => array(
            'uname' => '凉语',
            'password' => '96e79218965eb72c92a549dd5a330112'
        )
    ),
    'api/friends/checkmobileandbind' => array(
        'data' => array(
            'uid' => 1,
            'mobile' => 18210996458,
            'captcha' => 225629
        )
    ),
    'api/street/subscribetag' => array(
        'data' => array(
            'tag_id' => 158650,
            'uid' => 9
        )
    ),
    'apistore/friends/addressbook' => array(
        'data' => array(
            'uid' => 1212,
            'type' => 1,
            'address_book' => '0101211111|张喜红,15000100000|老大'
        )
    ),
    'api/more/mobileregister' => array(
        'data' => array(
            'uname' => 'cloudway',
            'password' => '453213',
            'captcha' => '649559',
            'mobile' => '15001167646',
            'invte_code' => 'SPZK610000001',
            'agent' => 'android'
        )
    ),
    'apistore/mygoods/gettaglistbykeywords' => array(
        'data' => array(
            'keywords' => '我的',
            'uid' => 40,
            'start' => 0,
            'limit' => 2000
        )
    ),
    'apistore/mygoods/getskulistbytagidandkeywords' => array(
        'data' => array(
            'tag_id' => 25359,
            'keywords' => '雅丽洁',
            'start' => 0,
            'limit' => 20
        )
    ),
    'apistore/mygoods/completeskuinfo' => array(
        'data' => array(
            'retailer_admin_id' => 201,
            'goods_id' => 17100000012,
            'img_url' => 'aaa/bbb/ccc/ddd.jpg,http://111.121.212.121/1/11/20120507/333.jpg',
            'goods_intro' => '一个传说'
        )
    ),
    'apistore/more/searchbrandlist' => array(
        'data' => array(
            'keywords' => '金',
            'retailer_admin_id' => 88,
            'start' => 0,
            'limit' => 20
        )
    ),
    'apistore/more/judgeallbrandapplystatus' => array(
        'data' => array(
            'retailer_admin_id' => 201
        )
    ),
    'apistore/publishdm/publishdm' => array(
        'data' => array(
            'subject' => '十一黄金周促销',
            'tag_codes' => '956,968',
            'start_date' => '2012-10-1 14:00:00',
            'end_date' => '2012-10-29 14:00:00',
            'retailer_id' => 1,
            'store_id' => 3,
            'retailer_admin_id' => 173,
            'intro' => '',
            'good_ids' => '13100000012,13110490018'
        )
    ),
    'api/street/getuseraddtaglist' => array(
        'data' => array(
            'uid' => 28,
            'start' => 0,
            'num' => 10,
        )
    ),
    'api/street/getretailtaglist' => array(
        'data' => array(
            'uid' => 28,
            'retailer_id' => 1,
            'store_id' => 3,
            'start' => 0,
            'num' => 10,
        )
    ),
    'apistore/friends/getusertaginfo' => array(
        'data' => array(
            'tag_id' => 130219,
        )
    ),
    'apistore/friends/getusertaglist' => array(
        'data' => array(
            'uid' => 40,
            'retailer_admin_id' => 173,
            'start' => 0,
            'num' => 10,
        )
    ),
    'apistore/friends/subscribetag.' => array(
        'data' => array(
            'retailer_admin_id' => 173,
            'tag_id' => 39968,
        )
    ),
    'api/search/deletetag' => array(
        'data' => array(
            'uid' => 28,
            'tag_id' => 39969,
        )
    ),
    'apistore/search/geskulistbystoretag' => array(
        'data' => array(
            'tag_id' => 156802,
            'start' => 0,
            'num' => 10,
        )
    ),
    'api/search/gethottags' => array(
        'data' => array(
        )
    ),
    'apistore/search/randhottaglist' => array(
        'data' => array(
        )
    ),
    'api/search/getrlevansearchtaglist' => array(
        'data' => array(
            'tag_code' => 5161,
            'start' => 0,
            'num' => 10,
        )
    ),
    'api/search/getskubytagcode' => array(
        'data' => array(
            'tag_code' => 3421,
            'start' => 0,
            'num' => 10,
        )
    ),
    'apistore/search/getskulistbysearchtag' => array(
        'data' => array(
            'tag_code' => 3421,
            'start' => 0,
            'num' => 10,
        )
    ),
    'apistore/search/getstorelistbysearchtag' => array(
        'data' => array(
            'tag_code' => 959,
            'start' => 0,
            'num' => 10,
        )
    ),
    'api/search/gettagcodebystorelist' => array(
        'data' => array(
            'tag_code' => 959,
            'start' => 0,
            'num' => 10,
        )
    ),
    'api/search/gettagdashbykeywords' => array(
        'data' => array(
            'keywords' => '盛夏酷饮',
        )
    ),
    'apistore/search/searchtagboard' => array(
        'data' => array(
            'keywords' => '盛夏酷饮',
        )
    ),
    'api/search/getuserlistbycode' => array(
        'data' => array(
            'tag_code' => 959,
            'start' => 0,
            'num' => 10,
        )
    ),
    'apistore/search/getuserlistbysearchtag' => array(
        'data' => array(
            'tag_code' => 959,
            'start' => 0,
            'num' => 10,
        )
    ),
    'api/search/searchrbygoodscode' => array(
        'data' => array(
            'goods_code' => 6948960100429,
            'start' => 0,
            'num' => 10,
        )
    ),
    'api/shoppingwall/addtag' => array(
        'data' => array(
            'tag_name' => '火热促销',
            'uid' => 28,
        )
    ),
    'api/shoppingwall/getfriendtaglist' => array(
        'data' => array(
            'uid' => 28,
            'start' => 0,
            'num' => 10,
        )
    ),
    'api/shoppingwall/gethottaglist' => array(
        'data' => array(
        )
    ),
    'api/shoppingwall/getmytaglist' => array(
        'data' => array(
            'uid' => 28,
            'start' => 0,
            'num' => 10,
        )
    ),
    'api/shoppingwall/getnogroupdash' => array(
        'data' => array(
            'uid' => 28,
        )
    ),
    'api/shoppingwall/getnogroupdash' => array(
        'data' => array(
            'uid' => 28,
        )
    ),
    'api/street/subscribesku' => array(
        'data' => array(
            'uid' => 28,
            'goods_id' => 13100000012,
            'tag_code' => '755,752,745'
        )
    ),
    'apistore/more/exitlogon' => array(
        'data' => array (
            'sessiond_id'=>'c73e9mbmm04ao3pi74ht4rs855'
        )
    ),
    'apistore/more/clerklogon' => array(
        'data' => array (
            'uname'=>'13641195548',
            'password'=>'96e79218965eb72c92a549dd5a330112'
        )
    ),
    'apistore/more/cancelbrand' => array(
        'data' => array (
            'retailer_admin_id' => 190,
            'brand_id' => '68,74'
        )
    ),
    'apistore/more/cancelallcategory' => array(
        'data' => array (
            'retailer_admin_id' => 190
        )
    ),
    'apistore/more/cancelallbrand' => array(
        'data' => array (
            'retailer_admin_id' => 190
        )
    ),
    'apistore/more/applybrand' => array(
        'data' => array (
            'retailer_admin_id' => 199,
            'brand_id' => '68,74'
        )
    ),
    'apistore/more/applyallcategorystatus' => array(
        'data' => array (
            'retailer_admin_id' => 201
        )
    ),
    'apistore/more/applyallbrand' => array(
        'data' => array (
            'retailer_admin_id' => 201
        )
    ),
    'apistore/more/applicationforbusiness' => array(
        'data' => array (
            'retailer_admin_id' => 201,
            'category_id' => 3400
        )
    ),
    'apistore/more/appallcategory' => array(
        'data' => array (
            'retailer_admin_id' => 200
        )
    ),
    'apistore/more/canceltheoperation' => array(
        'data' => array (
            'retailer_admin_id' => 201,
            'category_id' => 3400
        )
    ),
    'apistore/mystore/clerkdeletetag' => array(
        'data' => array (
            'retailer_admin_id' => 4679,
            'tag_id' => 158464
        )
    ),
    'apistore/mystore/clerkaddtag' => array(
        'data' => array (
            'retailer_admin_id' => 315,
            'retailer_id' => 5,
            'store_id' => 95,
            'tag_name' => '红牛,我爱你'
        )
    ),
    'apistore/mystore/getboardcontbyrid' => array(
        'data' => array (
            'retailer_admin_id' => 194,
            'retailer_id' => 2,
            'store_id' => 15,
        )
    ),
    'apistore/mystore/getskulistbytagid' => array(
        'data' => array (
            'tag_id'=>'133322',
            'num'=>10,
            'start'=>0
        )
    ),
    'apistore/mystore/getskuinfostoretaglist' => array(
        'data' => array (
            'goods_id'=>13343230327,
            'limit'=>10,
            'start'=>0
        )
    ),
    'apistore/mystore/getgoodsinfobygoodsid' => array(
        'data' => array (
            'goods_id'=>13111101100,
            'retailer_admin_id'=>144,
            'limit'=>10,
            'start'=>0
        )
    ),
    'apistore/mystore/getallskulist' => array(
        'data' => array (
            'retailer_admin_id'=>144,
            'limit'=>10,
            'start'=>0
        )
    ),
    'apistore/mystore/delskufortag' => array(
        'data' => array (
            'retailer_admin_id'=>173,
            'tag_id'=>39976,
            'goods_id'=>13101220007
        )
    ),
    'apistore/mystore/addgoods' => array(
        'data' => array (
            'goods_retailer_code'=>41258,
            'retailer_id'=>1,
            'store_id'=>2222,
            'retailer_admin_id'=>117,
            'category_id'=>1,
            'brand_id'=>1,
            'goods_name'=>'健力宝',
            'sale_price'=>2.53,
            'original_price'=>3.00,
            'goods_code'=>2222222,
            'code_type'=>0,
            'goods_intro'=>'这是一瓶健力宝',
            'img_url'=>'1.jpg,2.jpg,3.jpg',
            'tag_id'=>1
        )
    ),
    'apistore/more/getbrandlist' => array(
        'data' => array (
            'retailer_admin_id' => 88,
            'limit' => 20,
            'start'=>0
        )
    ),
    'api/friends/gettagdashbyfriendtagid' => array(
        'data' => array (
            'tag_id'=>'40007',
            'fuid'=>2,
            'uid'=>4
        )
    ),
    'apistore/friends/getskulistbytagid' => array(
        'data' => array (
            'tag_id'=>0,
            'num'=>10,
            'start'=>0
        )
    ),
    'apistore/friends/getdmlistbytagid' => array(
        'data' => array (
            'tag_id'=>0,
            'num'=>10,
            'start'=>0
        )
    ),
    'apistore/publishdm/deldm' => array(
        'data' => array(
            'dm_id' => 312,
            'retailer_admin_id' => 173
        )
    ),
    'api/more/checkversion' => array(
        'data' => array(
            'version' => 1.0,
            'model' => 'android'
        )
    ),
    'apistore/mystore/getclerkmanageskulistbykeywords' => array(
        'data' => array(
            'retailer_admin_id' => 173,
            'keywords' => '洁',
            'start' => 0,
            'num' => 2
        )
    ),
    'apistore/search/gethottags' => array(
        'data' => array()
    ),
    'apistore/search/getrlevanttaglistbysearchtag' => array(
        'data' => array(
            'tag_code' => 5161,
            'start' => 0,
            'num' => 10,
        )
    ),
    'api/shoppingwall/subscribedonedm' => array(
        'data' => array(
            'uid' => 28,
            'tag_code' => '968,457,961',
            'dm_id' => '301,302,303',
        )
    ),
    'api/shoppingwall/subscribedonesku' => array(
        'data' => array(
            'uid' => 28,
            'tag_code' => '968,457,961',
            'goods_id' => '112101090100,18393320210,112101050039',
        )
    ),
    'api/street/cancelsubscribedm' => array(
        'data' => array(
            'uid' => 28,
            'dm_id' => 301,
        )
    ),
    'api/street/cancelsubscriberetailer' => array(
        'data' => array(
            'uid' => 28,
            'retailer_id' => 9,
            'store_id' => 132,
        )
    ),
    'api/street/cancelsubscribetag' => array(
        'data' => array(
            'uid' => 28,
            'tag_id' => 40073,
        )
    ),
    'apistore/friends/cancelsubscribetag' => array(
        'data' => array(
            'tag_id' => 39991,
            'retailer_admin_id' => 181,
        )
    ),
    'api/more/mystoreexitlogon' => array(
        'data' => array(
            'session_id' => '11111111111111111111111111111111'
        )
    ),
    'api/search/cancelsubscribesku' => array(
        'data' => array(
            'uid' => '11',
            'good_id' => '11'
        )
     ),
    'api/street/isstoresubscribe' => array(
        'data' => array(
            'uid' => '10',
            'store_id' => '3',
            'retailer_id' => '1'
        )
     ),
    'api/street/getsubscribergoodstaglistbyuid' => array(
        'data' => array(
            'uid' => '28',
            'goods_id' => '13396420158'
        )
     ),
    'api/street/getsubscribestorelistbycity' => array(
        'data' => array(
            'uid' => '28',
            'city_id' => '1',
            'start' => '1',
            'num' => 10
        )
     ),
    'api/street/istagsubscribe' => array(
        'data' => array(
            'uid' => '28',
            'tag_id' => '14011'
        )
    ),
    
    'api/street/subscribedm' => array(
        'data' => array(
            'uid' => '28',
            'dm_id' => '14011'
        )
    ),
    'apistore/friends/subscribetag' => array(
        'data' => array(
            'retailer_admin_id' => '181',
            'tag_id' => '4'
        )
    ),
    'apistore/more/getcheckcodebyphone' => array(
        'data' => array(
            'phone_num' => '18810869149'
        )
    ),
    'apistore/mystore/getsubscriberbytagid' => array(
        'data' => array(
            'tag_id' => '14011',
            'start' => '1',
            'num' => 10
        )
    ),
    'apistore/mystore/getsubscriberlistdashboard' => array(
        'data' => array(
            'tag_id' => '14011',
            'uid' => 1
        )
    ),
);


/* End of file tests.php */
/* Location: ./application/config/tests.php */
