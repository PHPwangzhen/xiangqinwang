<?php
/**
 * Created by PhpStorm.
 * User: konohanaruto
 * Blog: http://www.muyesanren.com
 * QQ: 1039814413
 * Wechat Number: wikitest
 * Date: 2017/12/5
 * Time: 20:19
 */
?>
@extends('frontend.layouts.authed.default')

{{--title--}}
@section('title', '个人中心')
@inject('userPresenter', 'App\Konohanaruto\Presenters\Frontend\UserPresenter')
@section('basic-static-resource')
    @parent
    <link rel="stylesheet" href="{{config('custom.staticServer')}}/css/common.css" />
    <link rel="stylesheet" href="{{config('custom.staticServer')}}/css/form.css" />
    <link rel="stylesheet" href="{{config('custom.staticServer')}}/css/myaccount.css" />
    <script src="{{config('custom.staticServer')}}/js/common.js"></script>
@endsection
@section('content')
    <div class="profile-mainbox {{$userPresenter->detectMyAccoutBackgroundByUserId($userInfo['user_id'])}} clearfix">
        <div class="w clearfix">
            <div class="profile-basic-avatar fl" onclick="window.location.href='{{url('setting/face')}}'">
                <div class="user-avatar">
                    <div class="avatar-update hide">
                        <span>点击修改头像</span>
                    </div>
                    <div class="user-check"><span>非真人头像，请上传清晰美观个人照</span></div>
                    <img width="238" src="{{config('custom.staticServer') . '/'. $userInfo['thumb_avatar']}}">
                    <p>
                        <em class="icon-online-android"></em>
                        <span class="profile-online-text">她在线，赶紧跟她联系吧</span>
                    </p>
                </div>
            </div>
            <div class="profile-basic-main fl">
                <p class="user-status-bar">
                    <span class="username">韩梦</span>
                    <a class="in-block credit-level-female" href="javascript:;">中信用</a>
                    <a class="in-block icon-verified-mobile-female" href="javascript:;"></a>
                    <span class="uid">ID：17266388</span>
                </p>
                <p class="profile-basic-info">
                    <span class="sex">女</span>
                    <span class="age">24岁</span>
                    <span class="cm">164cm</span>
                    <span class="area">湖北武汉</span>
                    <span class="info-percent">资料完整度：95%</span>
                </p>
                <!-- 该用户有标签时显示 -->
                <p class="profile-basic-tag-list clearfix">
                    <span>苗条</span>
                    <span>无神论者</span>
                    <span>读书</span>
                    <span>占有欲</span>
                    <span>爱情至上</span>
                    <span>浪漫</span>
                    <span>依赖心强</span>
                    <span>日剧迷</span>
                    <span>传统</span>
                    <span>羽毛球</span>
                </p>
                <!-- 没有标签记录时的文字提示 -->
                <p class="profile-basic-tag-desc">
                    暂无标签（<a href="#">回答QA</a>、<a href="#">完善资料</a>获得更多标签）<a class="icon-edit-s" href="javascript:;" title="编辑标签"></a>
                </p>

                <p class="profile-basic-relation">
                    <a href="javascript:;" class="icon-mess"><em></em><i>私信</i></a>
                    <a href="#" class="icon-fav"><em></em><i>喜欢</i></a>
                    <a href="#" class="sayhi"><em></em><i>打招呼</i></a>
                    <a href="#" class="sendgift"><em></em><i>送礼物</i></a>
                <div class="send-gift-msg-box">
                    <em class="upper-arrows"></em>
                    <em class="close-icon-btn"></em>
                    <span>送个贴心的礼物会让你更受对方的青睐</span>
                </div>
                </p>
                <p class="profile-sns">
                    <span>分享到</span>
                    <em class="weibo-trigger"></em>
                    <em class="qzone-trigger"></em>
                    <em class="renren-trigger"></em>
                    <em class="qq-trigger"></em>
                    <em class="weixin-trigger"></em>
                    <em class="yixin-trigger"></em>
                </p>
            </div>
        </div>
        <div class="w">
            <div class="profile-header">
                <div class="monolog-box">
                    <div class="profile-monolog-preview">
                        <em class="monolog-upper-arrows"></em>
                        <em class="in-block icon-quote-up hide"></em>
                        <span class="text-gray">今天我生日，希望能遇到那个合适的他，<i class="icon-noresult-s"></i></span>
                        <em class="in-block icon-quote-down hide"></em>
                        <span class="js-edit-btn hide"><a class="a-icon-edit" href="javascript:;"></a></span>
                    </div>
                    <div class="profile-monolog-edit-hd hide">
                        <h3>内心独白</h3>
                        <span class="profile-monolog-tips">一天内只可修改一次</span>
                        <span class="js-edit-btn hide"><a class="a-cancel-edit-text" href="javascript:;">取消编辑</a></span>
                    </div>
                    <div class="profile-monolog-textarea hide ">
                        <textarea></textarea>
                    </div>
                    <div class="profile-monolog-edit-send hide">
                        <div class="js-body">
                            <span class="char-constantia"><strong>147</strong>个字</span>
                            <a class="red-button" href="javascript:;">保存</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profile-content-box ">
        <div class="w clearfix main-box">
            <div class="con-left fl">
                <div class="profile-tabbar clearfix">
                    <ul>
                        <li class="trigger-trend">她的动态</li>
                        <li class="trigger-info current">她的资料</li>
                        <li>她的QA</li>
                    </ul>
                </div>
                <div class="profile-trend-box hide">
                    <div class="photo-info clearfix">
                        <a href="javascript:;" class="fr">
                            <em class="photo-trigger"></em>
                            <span>她的相册<strong>16</strong></span>
                        </a>
                    </div>
                    <div class="trend-js">
                        <ul>
                            <li>
                                <div class="trend-item-title">上传了头像</div>
                                <div class="photo-media">
                                    <a href="javascript:;"><img src="{{config('custom.staticServer')}}/images/myaccount/94540476055953806.jpg" alt=""></a>
                                    <a href="javascript:;"><img src="{{config('custom.staticServer')}}/images/myaccount/94540476055953806.jpg" alt=""></a>
                                </div>
                                <div class="trend-footer">
                                    <div class="media-info fl">
                                        <em class="in-block trend-publish-time"></em>
                                        <span>
                                            12-15 来自
                                            <a href="#">Android客户端</a>
                                        </span>
                                    </div>
                                    <div class="right-contact-btn fr">
                                        <a class="" href="#"><em class="icon-like native"></em><b class="likes">+10</b></a>
                                        <a class="icon-send-msg" href="#"><em class="icon-like native"></em></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dating-list-info">
                                    <p class="dating-list-title">发布了逛街约会</p>
                                    <p class="dating-detail">
                                        <em class="dating-cost"></em>
                                        <span>费用：我买单</span>

                                    </p>
                                    <p class="dating-detail">
                                        <em class="dating-time"></em>
                                        <span>时间：周末</span>
                                    </p>
                                    <p class="dating-detail">
                                        <em class="dating-location"></em>
                                        <span>地点：湖北武汉</span>
                                    </p>
                                    <p class="dating-detail">
                                        <em class="dating-desc"></em>
                                        <span>描述：合适，主要合适。</span>
                                    </p>
                                    <div class="footer-text clearfix">
                                        <div class="media-info fl">
                                            <div class="dating-publish-date fl">
                                                <em></em>
                                                <span>12-15</span>
                                            </div>
                                            <div class="dating-publish-media fl">
                                                来自<a href="javascript:;">Android客户端</a>
                                            </div>
                                        </div>
                                        <div class="right-contact-btn profile-join-btn fr">
                                            <a class="" href="#">报名参加</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="profile-info-box">
                    <div class="lover-desc-box">
                        <h2 class="label-text">交友要求</h2>
                        <span class="js-edit-btn"><a class="a-icon-edit" href="javascript:;"></a></span>
                        <span class="js-edit-btn hide"><a class="a-cancel-edit-text" href="javascript:;">取消编辑</a></span>
                        <div class="js-info-preview">我希望你在 <span class="keyword">湖北 武汉</span> ，年龄<span class="keyword">20到31岁</span>之间 。以上并不是硬性要求，快来和我联系吧。</div>
                        <div class="js-edit hide">
                            <p class="js-tips">
                                <span>修改交友要求将同步修改首页的搜索条件</span>
                                <em class="icon-close"></em>
                            </p>
                            <div class="form-row">
                                <label class="form-label">身高:</label>
                                <div class="form-control">
                                    <select>
                                        <option value="">不限</option>
                                    </select>
                                    <span>到</span>
                                    <select>
                                        <option value="">不限</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="form-label">年龄:</label>
                                <div class="form-control">
                                    <select>
                                        <option value="">不限</option>
                                    </select>
                                    <span>到</span>
                                    <select>
                                        <option value="">不限</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="form-label">学历:</label>
                                <div class="form-control">
                                    <select class="js-education-select">
                                        <option value="">不限</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="form-label">月收入:</label>
                                <div class="form-control">
                                    <select>
                                        <option value="">不限</option>
                                    </select>
                                    <span>到</span>
                                    <select>
                                        <option value="">不限</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="form-label">居住在:</label>
                                <div class="form-control">
                                    <select>
                                        <option value="">不限</option>
                                    </select>
                                    <span>到</span>
                                    <select>
                                        <option value="">不限</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="form-label"></label>
                                <a class="general-btn red-button submit-btn" href="javascript:;">保存</a>
                            </div>
                        </div>
                    </div>
                    <div class="summary-info-box">
                        <div class="member-base-info">
                            <h2 class="label-text">基本资料</h2>
                            <span class="js-edit-btn"><a class="a-icon-edit" href="javascript:;"></a></span>
                            <span class="js-edit-btn hide"><a class="a-cancel-edit-text" href="javascript:;">取消编辑</a></span>
                            <div class="js-info-preview">
                                <p><span class="text-gray">昵称：</span>韩梦</p>
                                <p><span class="text-gray">婚姻状态：</span>未婚</p>
                                <p><span class="text-gray">我在寻找：</span>恋人</p>
                                <p><span class="text-gray">性别：</span>女</p>
                                <p><span class="text-gray">年龄：</span>21岁</p>
                                <p><span class="text-gray">身高：</span>164cm</p>
                                <p><span class="text-gray">体重：</span>44kg</p>
                                <p><span class="text-gray">居住在：</span>湖北武汉</p>
                                <p><span class="text-gray">学历：</span>大专以下</p>
                                <p><span class="text-gray">毕业院校：</span>你的心</p>
                                <p><span class="text-gray">行业：</span>商业/服务业/个体经营</p>
                                <p><span class="text-gray">工作单位：</span>美颜美甲</p>
                                <p><span class="text-gray">目前职位：</span>普通职员</p>
                                <p><span class="text-gray">月收入：</span>2000-4000元</p>
                            </div>
                            <div class="js-edit hide">
                                <div class="form-row">
                                    <label class="form-label">昵称:</label>
                                    <div class="form-control">
                                        <input class="input-text single-column" type="text" placeholder="输入您的昵称">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">婚姻状态:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">我在寻找:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">性别:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">生日:</label>
                                    <div class="form-control">
                                        <select>
                                            <option value="">不限</option>
                                        </select>
                                        <select>
                                            <option value="">不限</option>
                                        </select>
                                        <select>
                                            <option value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">身高:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">体重:</label>
                                    <div class="form-control">
                                        <input class="input-text single-column" type="text" placeholder="">
                                    </div>
                                    <span>公斤</span>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">居住在:</label>
                                    <div class="form-control">
                                        <select class="col-w-6">
                                            <option value="">不限</option>
                                        </select>
                                        <select class="col-w-6">
                                            <option value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">学历:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">毕业院校:</label>
                                    <div class="form-control">
                                        <input class="input-text single-column graduate-university" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">行业:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">工作单位:</label>
                                    <div class="form-control">
                                        <input class="input-text single-column" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">目前职位:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">月收入:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <!--保存-->
                                <div class="form-row">
                                    <label class="form-label"></label>
                                    <a class="general-btn red-button submit-btn" href="javascript:;">保存</a>
                                </div>

                            </div>
                        </div>

                        <div class="member-detail-box">
                            <h2 class="label-text">详细资料</h2>
                            <span class="js-edit-btn"><a class="a-icon-edit" href="javascript:;"></a></span>
                            <span class="js-edit-btn hide"><a class="a-cancel-edit-text" href="javascript:;">取消编辑</a></span>
                            <div class="js-info-preview">
                                <p><span class="text-gray">户口：</span>湖北黄石</p>
                                <p><span class="text-gray">住房情况：</span>单位宿舍</p>
                                <p><span class="text-gray">购车情况：</span>未购车</p>
                                <p><span class="text-gray">民族：</span>汉族</p>
                                <p><span class="text-gray">籍贯：</span>湖北黄石</p>
                                <p><span class="text-gray">家中排行：</span>独生子女</p>
                                <p><span class="text-gray">有无子女：</span>无小孩</p>
                                <p><span class="text-gray">星座：</span>射手座</p>
                                <p><span class="text-gray">血型：</span>A型</p>
                                <p><span class="text-gray">属相：</span>猪</p>
                                <p><span class="text-gray">宗教信仰：</span>无宗教信仰</p>
                                <p><span class="text-gray">微博地址：</span>--</p>
                                <p><span class="text-gray">豆瓣地址：</span>--</p>
                            </div>
                            <div class="js-edit hide">
                                <div class="form-row">
                                    <label class="form-label">户口:</label>
                                    <div class="form-control">
                                        <select class="col-w-6">
                                            <option value="">湖北</option>
                                        </select>
                                        <select class="col-w-6">
                                            <option value="">武汉</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">住房情况:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">购车情况:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">民族:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">籍贯:</label>
                                    <div class="form-control">
                                        <select class="col-w-6">
                                            <option value="">湖北</option>
                                        </select>
                                        <select class="col-w-6">
                                            <option value="">武汉</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">家中排行:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">有无子女:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">星座:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">血型:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">属相:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">宗教信仰:</label>
                                    <div class="form-control">
                                        <select class="single-column">
                                            <option class="input-text" value="">不限</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">微博地址:</label>
                                    <div class="form-control">
                                        <input class="input-text single-column" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="form-label">豆瓣地址:</label>
                                    <div class="form-control">
                                        <input class="input-text single-column" type="text" placeholder="">
                                    </div>
                                </div>
                                <!--保存-->
                                <div class="form-row">
                                    <label class="form-label"></label>
                                    <a class="general-btn red-button submit-btn" href="javascript:;">保存</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="con-right fr">
                <div class="gift-box">
                    <h2><span class="text-h2">她收到的礼物</span><span class="gift-count">(<i>5</i>个)</span></h2>
                    <div class="gift-list-box clearfix">
                        <ul>
                            <li class="first-icon-bar">
                                <em class="icon-gift"></em>
                                <i class="icon-left-arrows"></i>
                                <i class="icon-right-arrows"></i>
                                <span class="send-gift-text">送我礼物</span>
                            </li>
                            <li>
                                <div class="gift-item-img">
                                    <img src="{{config('custom.staticServer')}}/images/gift/cake.png" alt="">
                                </div>
                                <div class="gift-item-desc-text">蛋糕<br>高级会员免费使用</div>
                            </li>
                            <li>
                                <div class="gift-item-img">
                                    <img src="{{config('custom.staticServer')}}/images/gift/cat.png" alt="">
                                </div>
                                <div class="gift-item-desc-text">喵<br>高级会员免费使用</div>
                            </li>
                            <li>
                                <div class="gift-item-img">
                                    <img src="{{config('custom.staticServer')}}/images/gift/kouhong.png" alt="">
                                </div>
                                <div class="gift-item-desc-text">口红<br>高级会员免费使用</div>
                            </li>
                            <li>
                                <div class="gift-item-img">
                                    <img src="{{config('custom.staticServer')}}/images/gift/panda.png" alt="">
                                </div>
                                <div class="gift-item-desc-text">熊猫<br>高级会员免费使用</div>
                            </li>
                            <li>
                                <div class="gift-item-img">
                                    <img src="{{config('custom.staticServer')}}/images/gift/puppy.png" alt="">
                                </div>
                                <div class="gift-item-desc-text">小狗<br>高级会员免费使用</div>
                            </li>
                        </ul>
                    </div>
                    <div class="gift-list-pagination fr">
                        <a href="javascript:;" class="disable pages-prev"></a>
                        <a href="javascript:;" class="pages-next"></a>
                    </div>
                </div>
                <div class="contact-us">
                    <p class="top-text"><span>花田相关</span></p>
                    <ul class="main-info">
                        <li><span>新手上路：</span><a href="#">教你快速找到意中人</a></li>
                        <li><span>安全中心：</span><a href="#">网上交友如何防骗</a></li>
                        <li><span>花田帮助：</span><a href="#">常见反馈问题解答</a></li>
                        <li><span>联系客服：</span><a href="#">咨询花田小红娘</a><br/><span class="wrap-font">电话咨询 020-85105681<br>( 工作日 10点 - 18点 )</span></li>
                        <li class="serval-info">
                            <span>关注花田：</span>
                            <a href="#" class="sina-icon"></a>
                            <a href="#" class="douban-icon"></a>
                            <a href="#" class="wx-icon"></a>
                        </li>
                    </ul>
                </div>
                <h2 class="market-cooperation"><span class="text-h2">市场合作</span></h2>
                <div class="contact-info">
                    <p><span>联系人：</span>凌先生</p>
                    <p><span>电话：</span>020-85105163 转 54459</p>
                    <p><span>邮箱：</span>bd.love163@service.netease.com</p>
                </div>
                <div class="weixin-guide">
                    <p>关注花田君</p>
                    <p>免费领取花田<i>SVIP</i></p>
                    <p class="qr-bg"><img src="{{config('custom.staticServer')}}/images/weixin_attract.png" alt=""></p>
                    <p>使用微信扫描即可关注</p>
                </div>
                <div class="system-ads">
                    <ul>
                        <li><a href="#"><img src="{{config('custom.staticServer')}}/images/myaccount-ad1.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{--模态框区域开始--}}
            <!-- 模态框标签提示开始 -->
    <div class="modal-layer hide tag-too-few-modal">
        <div class="main-box modal-layer-main-sm">
            <div class="title-row">
                <h3>我的标签</h3>
                <a class="icon-close" href="javascript:;"></a>
            </div>
            <div class="content">
                <div class="result-inner">
                    <em></em>
                    <div class="js-tips">
                        <p>很抱歉，你的资料过少无法提取标签</p>
                        <p>你需要继续<a href="javascript:;">回答QA</a>、或<a href="javascript:;">完善资料</a>。</p>
                    </div>
                </div>
            </div>
            <div class="foot-row">
                <a class="general-btn red-button" href="javascript:;">知道了</a>
            </div>
        </div>
    </div>
    <!-- 模态框标签提示结束-->

    <!-- 大学模态框开始 -->
    <div class="modal-layer hide select-university">
        <div class="main-box modal-layer-main">
            <div class="title-row">
                <h3>选择毕业院校</h3>
                <a class="icon-close" href="javascript:;"></a>
            </div>
            <div class="js-body">
                <div class="poplayer-bd">
                    <div class="poplayer-schoolbox-select">
                        <span class="select-label">请选择省市：</span>
                        <select class="js-select-province">
                            <option value="北京市">北京市</option>
                        </select>
                        <span class="select-label schoolbox-select-text">没有自己的学校？<a class="click-trigger js-switch-form" href="javascript:;">点击直接输入</a></span>
                        <span class="poplayer-schoolbox-select-form select-label hide">输入学校名称：
                            <input type="text" name="custom-university-name">
                            <a class="click-trigger js-form-submit" href="javascript:;">点击提交</a>
                        </span>
                    </div>
                    <div class="poplayer-schoolbox-list">
                        <ul class="js-list clearfix">
                            <li title="清华大学"><em class="square"></em><span>清华大学</span></li>
                            <li title="北京大学"><em class="square"></em><span>北京大学</span></li>
                            <li title="中国人民大学"><em class="square"></em><span>中国人民大学</span></li>
                            <li title="北京航空航天大学"><em class="square"></em><span>北京航空航天大学</span></li>
                            <li title="北京邮电大学"><em class="square"></em><span>北京邮电大学</span></li>
                            <li title="北京师范大学"><em class="square"></em><span>北京师范大学</span></li>
                            <li title="中国传媒大学"><em class="square"></em><span>中国传媒大学</span></li>
                            <li title="中国农业大学"><em class="square"></em><span>中国农业大学</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 大学模态框结束 -->

    <!-- 私信模态框开始 -->
    <div class="modal-layer private-mess-box hide">
        <div class="main-box modal-layer-main-sm">
            <div class="title-row">
                <h3>发送私信</h3>
                <a class="icon-close" href="javascript:;"></a>
            </div>
            <div class="js-body">
                <div class="poplayer-bd">
                    <p class="mess-tips-close">
                        <span>提醒：请选择熟悉的环境见面，不要和任何人产生金钱往来，以防被骗。</span>
                    </p>

                    <div class="poplayer-send-message-addressee">
                        <span class="fl">收件人：<i>心锁</i></span>
                        <span class="fr"><a href="javascript:;">共2条对话</a></span>
                    </div>

                    <div class="publish-textarea">
                        <textarea></textarea>
                    </div>

                    <div class="publish-operate">
                        <em class="icon-face emotion-trigger" title="表情"></em>
                        <label class="label-tag">
                            <input class="js-set-top" type="checkbox">
                            在她消息中心置顶(<a class="text-red" href="javascript:;">开通高级VIP会员</a>免费使用)
                        </label>
                    </div>
                </div>
            </div>
            <div class="foot-row">
                <a class="general-btn red-button submit-red-button" href="javascript:;">发送</a>
            </div>

            <div class="emoji-layer">
                <div class="icon-winlayer-arrow-up"></div>
                <div class="title-row">
                    <a class="icon-close" href="javascript:;"></a>
                </div>
                <div class="winlayer-emoji-list clearfix">
                    <ul class="clearfix">
                        <li><a data-code="[daizhi]" data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/peach/daizhi.png" alt="呆滞"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                        <li><a data-code="[daizhi]" href="javascript:;" title="呆滞"><img src="{{config('custom.staticServer')}}/images/emotion/emoji/Smiling_Face_With_Smiling_Eyes.png" alt="微笑"></a></li>
                    </ul>
                    <p class="emoji-select-tip text-gray">提示：按Ctrl可以一次多选表情</p>
                </div>
            </div>
        </div>
    </div>
    <!-- 私信模态框结束 -->

    <!-- 送礼模态框开始 -->
    <div class="modal-layer send-gift hide">
        <div class="main-box">
            <div class="title-row">
                <h3>给<span class="to-gift-user">韩梦</span>送礼物</h3>
                <a class="icon-close" href="javascript:;"></a>
            </div>
            <div class="js-body">
                <div class="poplayer-bd">
                    <div class="poplayer-gift-tips text-dark-gray clearfix">
                        <span class="text-dark text-block fr">
                            <em class="vip-open-icon"></em>
                            <a class="vip-text" href="#">开通高级vip会员</a>，礼物全场5折
                        </span>
                    </div>
                    <div class="arrow-area">
                        <a class="poplayer-slider-prev prev-trigger disabled" href="javascript:;">
                            <em class="poplayer-gift-slider-prev"></em>
                        </a>
                        <a class="poplayer-slider-next next-trigger" href="javascript:;">
                            <em class="poplayer-gift-slider-next"></em>
                        </a>
                    </div>
                    <div class="poplayer-slider-content">
                        <div class="poplayer-gift-list-box">
                            <ul class="gift-list-ul current fl clearfix">
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/chocolate.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/chocolate.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/chocolate.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/chocolate.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/chocolate.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/chocolate.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/chocolate.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/chocolate.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/chocolate.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/chocolate.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="gift-list-ul fl clearfix">
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/cat.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/cat.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/cat.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/cat.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/cat.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/cat.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/cat.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/cat.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/cat.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/cat.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="gift-list-ul fl clearfix">
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/yaodai.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/yaodai.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/yaodai.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/yaodai.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/yaodai.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/yaodai.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/yaodai.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/yaodai.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/yaodai.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="gift-img-box">
                                            <img src="{{config('custom.staticServer')}}/images/gift/yaodai.png" alt="篮球">
                                        </div>
                                        <div class="gift-desc-box clearfix">
                                            <span>表达好感礼物</span>
                                            <em></em>
                                        </div>
                                        <div class="gift-name">巧克力</div>
                                        <div class="gift-price text-gray">免费</div>
                                        <div class="icon-vip-privilege"></div>
                                        <div class="icon-gift-selected hide"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-row">
                <a class="general-btn red-button" href="javascript:;">立即赠送</a>
            </div>
        </div>
    </div>
    <!-- 送礼模态框结束 -->
@endsection
@section('additional-js')
    <script>
        $(function () {

        })
    </script>
@endsection