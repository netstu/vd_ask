<!DOCTYPE html>
<!--STATUS OK-->
<html>
    <head>
        <meta charset="gb2312"/>
        <title>外科_待解决问题_百度知道</title>
        <meta content="外科,心胸外科,脑外科,肝胆外科,泌尿外科,肛肠外科," name="keywords"/>
        <link href="http://iknow.bdimg.com/common/css/base.css?@=yukvke" rel="stylesheet" type="text/css"/>
        <script src="http://iknow.bdimg.com/common/js/tangram-base.js?@=1lho8z6" type="text/javascript"></script>
        <script src="http://iknow.bdimg.com/common/js/base.js?@=pzbslc" type="text/javascript"></script>
        <script type="text/javascript">
            ik.createComp("data", function() {
                var _ = this;
                _.cid = 791;
                _.isLogin = true;
                _.isAdmin = false;
                _.userLevel = null;
                _.isTag = 0;
                _.keyword = "";
                _.isEmpty = false;
            });
        </script>
        <link href="http://iknow.bdimg.com/browse/css/browse.css?@=blbdri" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <?php echo $this->getContent(); ?>
        <div class="clearfix" id="usrbar">
            <ul class="usr-infos">
                <li class="usrbar-usrinfo">
                    <a class="user-name" href="http://www.baidu.com/p/netstu?from=zhidao" id="user-name" target="_blank"><strong class="list" id="username">netstu</strong></a>
                    <ul class="sub-list username-sublist" id="username-sublist" style="display:none">
                        <li>
                            <a href="http://www.baidu.com/p/netstu?from=zhidao" id="usrbar-mypage" target="_blank">我的主页</a>
                        </li>
                        <li>
                            <a href="http://passport.baidu.com/center" id="usrbar-myinfo" target="_blank">帐号设置</a>
                        </li>
                        <li>
                            <a href="http://passport.baidu.com/?logout&amp;aid=7&amp;u=http%3A//zhidao.baidu.com" id="usrbar-logout">退出</a>
                        </li>
                    </ul>
                    <a id="user-grade"><span class="user-grade">四级</span></a>
                    <span id="IMBubble"></span>
                </li>
                <li class="line info-line">
                    |
                </li>
                <li>
                    <a alog-alias="#" class="list" href="/q?ct=24&amp;cm=16&amp;tn=ucframework#myiknow" id="my-home" target="_blank">我的知道</a>
                    <ul class="sub-list my-iknow-list" id="my-home-list" style="display:none">
                        <li>
                            <a alog-alias="#" href="/q?ct=24&amp;cm=16&amp;tn=ucframework#ask" id="status-my-ask" target="_blank">我的提问</a>
                        </li>
                        <li>
                            <a alog-alias="#" href="/q?ct=24&amp;cm=16&amp;tn=ucframework#answer" id="status-my-answer" target="_blank">我的回答</a>
                        </li>
                        <li>
                            <a alog-alias="status-my-question" href="http://zhidao.baidu.com/q?ct=24&amp;cm=16&amp;tn=ucframework#push" target="_blank">为我推荐的提问</a>
                        </li>
                    </ul>
                </li>
                <li class="line">
                    |
                </li>
                <li>
                    <a href="http://zhidao.baidu.com/s/2011wapadv/index.html?fr=new1" target="_blank">手机知道</a>
                </li>
                <li class="line">
                    |
                </li>
                <li alog-alias="#" id="usrbar-msg"></li>
                <li class="line">
                    |
                </li>
                <li>
                    <a href="http://www.baidu.com/" id="usrbar-bdindex">百度首页</a>
                </li>
            </ul>
        </div>
        <script type="text/javascript">
            function reg_rericd() {
                window.open("/html/user_reg.html?oldurl=" + window.location.href);
            }
        </script>
        <div id="header">
            <div class="top-search-box clearfix" id="top-search-box">
                <a class="logo" href="/"><img alt="" height="46" src="http://img.baidu.com/img/logo-zhidao.gif" width="137"/></a>
                <ul class="channel">
                    <li>
                        <a href="http://news.baidu.com/" log="key:2012,sc_pos:c_news">新闻</a>
                    </li>
                    <li>
                        <a href="http://www.baidu.com/" log="key:2012,sc_pos:c_baidu">网页</a>
                    </li>
                    <li>
                        <a href="http://tieba.baidu.com/" log="key:2012,sc_pos:c_tieba">贴吧</a>
                    </li>
                    <li>
                        <strong>知道</strong>
                    </li>
                    <li>
                        <a href="http://music.baidu.com/" log="key:2012,sc_pos:c_mp3">音乐</a>
                    </li>
                    <li>
                        <a href="http://image.baidu.com/" log="key:2012,sc_pos:c_pic">图片</a>
                    </li>
                    <li>
                        <a href="http://video.baidu.com/" log="key:2012,sc_pos:c_video">视频</a>
                    </li>
                    <li>
                        <a href="http://map.baidu.com/" log="key:2012,sc_pos:c_map">地图</a>
                    </li>
                    <li>
                        <a href="http://baike.baidu.com/" log="key:2012,sc_pos:c_baike">百科</a>
                    </li>
                    <li>
                        <a href="http://wenku.baidu.com/" log="key:2012,sc_pos:c_doc">文库</a>
                    </li>
                    <li>
                        <a href="http://jingyan.baidu.com/" log="key:2012,sc_pos:c_jingyan">经验</a>
                    </li>
                </ul>
                <form action="/search" id="top-search-form" method="get" name="top-search-form">
                    <div class="box" style="position:relative;width:650px">
                        <span class="top-search-box-bg"></span>
                        <input class="hdi" id="kw" maxlength="256" name="word" size="46" tabindex="1" value=""/>
                    </div>
                    <div class="btns" style="width:650px">
                        <span class="btn-wrap">
                            <input alog-action="g-search-anwser" class="btn-global" hidefocus="true" id="top-search-btn" onmousedown="this.className=&#34;btn-global btn-active&#34;" onmouseout="this.className=&#34;btn-global&#34;" onmouseover="this.className=&#34;btn-global btn-hover&#34;" tabindex="2" type="submit" value="搜索答案"/>
                        </span>
                        <span class="btn-wrap">
                            <input alog-action="g-i-ask" class="btn-global" hidefocus="true" id="top-ask-btn" onmousedown="this.className=&#34;btn-global btn-active&#34;" onmouseout="this.className=&#34;btn-global&#34;" onmouseover="this.className=&#34;btn-global btn-hover&#34;" tabindex="3" type="button" value="我要提问"/>
                        </span>
                        <span class="btn-wrap">
                            <input alog-action="g-i-reply" class="btn-global" hidefocus="true" id="top-answer-btn" onmousedown="this.className=&#34;btn-global btn-active&#34;" onmouseout="this.className=&#34;btn-global&#34;" onmouseover="this.className=&#34;btn-global btn-hover&#34;" tabindex="4" type="button" value="我要回答"/>
                        </span>
                    </div>
                </form>
                <form action="/q" id="top-ask-form" method="get" name="top-ask-form">
                    <input name="ct" type="hidden" value="17"/>
                    <input name="pn" type="hidden" value="0"/>
                    <input name="tn" type="hidden" value="ikask"/>
                    <input name="rn" type="hidden" value="10"/>
                    <input name="word" type="hidden" value=""/>
                    <input name="cm" type="hidden" value="1"/>
                    <input name="lm" type="hidden" value="394496"/>
                </form>
                <div class="invisible-clear"></div>
            </div>
        </div>
        <div class="clearfix" id="body">
            <div class="l-main-col span-23">
                <div class="path" id="path">
                    <ul>
                        <li>
                            <a href="/browse/">全部问题</a>&#160;&#160;>
                        </li>
                        <li alog-group="br-cate-1">
                            <a href="/browse/79&amp;lm=2">医疗健康</a>&#160;&#160;>
                        </li>
                        <li alog-group="br-cate-2">
                            <span class="i-downlist">外科</span>
                            <div class="related-category" style="display:none">
                                <dl>
                                    <dt>
                                        <span class="i-downlist">外科</span>
                                    </dt>
                                    <dd>
                                        <a href="/browse/790?lm=2">内科</a>
                                    </dd>
                                    <dd>
                                        <a href="/browse/770?lm=2">肿瘤科</a>
                                    </dd>
                                    <dd>
                                        <a href="/browse/792?lm=2">妇产科</a>
                                    </dd>
                                    <dd>
                                        <a href="/browse/793?lm=2">儿科</a>
                                    </dd>
                                    <dd>
                                        <a href="/browse/795?lm=2">五官科</a>
                                    </dd>
                                    <dd>
                                        <a href="/browse/930?lm=2">男科</a>
                                    </dd>
                                    <dd>
                                        <a href="/browse/796?lm=2">传染科</a>
                                    </dd>
                                    <dd>
                                        <a href="/browse/140?lm=2">中医</a>
                                    </dd>
                                    <dd>
                                        <a href="/browse/143?lm=2">精神心理科</a>
                                    </dd>
                                    <dd>
                                        <a href="/browse/146?lm=2">人体常识</a>
                                    </dd>
                                    <dd>
                                        <a href="/browse/794?lm=2">皮肤科</a>
                                    </dd>
                                    <dd>
                                        <a href="/browse/1193?lm=2">医院</a>
                                    </dd>
                                </dl>
                            </div>
                        </li>
                        <li id="iscat">
                            <a alog-alias="#" href="#" id="path-set-class">设置为关注分类</a>
                        </li>
                    </ul>
                </div>
                <div class="category top-box">
                    <div class="hd">
                        <h2> 外科</h2>
                    </div>
                    <div class="bd">
                        <ul alog-group="br-cate-1" class="clearfix">
                            <li>
                                <a href="/browse/1091?lm=2&amp;seed=0">心胸外科</a>(9960)
                            </li>
                            <li>
                                <a href="/browse/1085?lm=2&amp;seed=0">脑外科</a>(9127)
                            </li>
                            <li>
                                <a href="/browse/1087?lm=2&amp;seed=0">肝胆外科</a>(10979)
                            </li>
                            <li>
                                <a href="/browse/1084?lm=2&amp;seed=0">泌尿外科</a>(25451)
                            </li>
                            <li>
                                <a href="/browse/1086?lm=2&amp;seed=0">肛肠外科</a>(37826)
                            </li>
                            <li>
                                <a href="/browse/936?lm=2&amp;seed=0">骨科</a>(97480)
                            </li>
                            <li>
                                <a href="/browse/937?lm=2&amp;seed=0">外伤科</a>(28050)
                            </li>
                        </ul>
                    </div>
                </div><a name="list"></a>
                <div class="tab-container qustion-list">
                    <div class="tab-holder">
                        <ul alog-group="br-q-tab" class="clearfix">
                            <li>
                                <a class="current" href="javascript:void(0)"><span>待完善问题</span></a>
                            </li>
                            <li>
                                <a href="/browse/791?lm=0"><span>已完善</span></a>
                            </li>
                            <li>
                                <a href="/browse/791?lm=4"><span>高分</span></a>
                            </li>
                            <li>
                                <a href="/browse/791?lm=8"><span>零回答</span></a>
                            </li>
                            <li>
                                <a href="/browse/791?lm=16"><span>紧急</span></a>
                            </li>
                            <li>
                                <a href="/browse/791?lm=14" id="push-for-me"><span>为我推荐的问题</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-panels">
                        <div class="tab-panel" id="tab-panel" info="1">
                            <table border="0" cellspacing="0" class="table-list" width="100%">
                                <thead>
                                    <tr>
                                        <td class="align-l" width="488">标题 <span class="gray">(共 <span id="total_count">110651</span> 项)</span></td>
                                        <td width="60">回答数</td><td width="70">提问时间</td>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">
                                        <div class="pagination" id="pg">
                                            <p alog-group="br-pager" class="pager">
                                                <b>1</b><a href="/browse/791?lm=2&amp;word=&pn=25">2</a><a href="/browse/791?lm=2&amp;word=&pn=50">3</a><a href="/browse/791?lm=2&amp;word=&pn=75">4</a><a href="/browse/791?lm=2&amp;word=&pn=100">5</a><a href="/browse/791?lm=2&amp;word=&pn=125">6</a><a href="/browse/791?lm=2&amp;word=&pn=150">7</a><a href="/browse/791?lm=2&amp;word=&pn=175">8</a><a href="/browse/791?lm=2&amp;word=&pn=200">9</a><a href="/browse/791?lm=2&amp;word=&pn=225">10</a><a class="next" href="/browse/791?lm=2&amp;word=&pn=25">下一页&gt;</a><a class="last" href="/browse/791?lm=2&amp;word=&pn=2475">尾页</a>
                                            </p>
                                        </div></td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc=" " qid="495563332" qtitle="脓肿的概念是什么？ "><a alog-action="br-q-title" class="title" href="/question/495563332.html?seed=0" target="_blank" title="脓肿的概念是什么？ "> 脓肿的概念是什么？</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">0</td><td class="quick-time"> 22秒钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="患者信息：男 30岁 山东 淄博
                                        病情描述(发病时间、主要症状等)：
                                        骨折一小时后就诊。右跟骨、距骨骨折；医生要求：打石膏。一种是普通的，还一种是支架的。

                                        想得到怎样的帮助：
                                        想知道两种的费用分别是多少？ 谢谢。

                                        曾经治疗情况及是否有过敏、遗传病史：
                                        无。 " qid="495562464" qtitle="临淄区医院脚踝骨折打石膏的费用是多少? "><img align="absmiddle" alt="悬赏5分" height="11" src="http://img.baidu.com/img/iknow/browse/gold.png" width="12"/><span class="c-red">5</span><a alog-action="br-q-title" class="title" href="/question/495562464.html?seed=0" target="_blank" title="临淄区医院脚踝骨折打石膏的费用是多少? "> 临淄区医院脚踝骨折打石膏的费用是多少?</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">0</td><td class="quick-time"> 3分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="患者信息：女 23岁 江西 萍乡
                                        病情描述(发病时间、主要症状等)：
                                        今年年初开始就觉得肩颈十分的酸痛 就去医院骨科做了核磁共振 医生说大问题没有 颈椎有点变形 主要是劳损引起的 后面偶尔做做盲人按摩觉得还可以了  直到今年10月份觉得酸痛难忍 我又去做了X光 结果是颈椎稍反曲 医生也没有说什么 他也没什么耐性 我急呀

                                        想得到怎样的帮助：
                                        请大家帮帮我 教我到底如何做才能缓解酸痛或是该如何治疗 去哪里治疗  医院理疗科我也去了 效果不理想 有个医生说我经常抬抬头会好些 注意休息 ！我真是不知道接下来要怎么办 5555555

                                        曾经治疗情况及是否有过敏、遗传病史：
                                        无 " qid="495561621" qtitle="颈椎反曲是怎么回事?有什么治疗方法吗?生活中如何预防? "><a alog-action="br-q-title" class="title" href="/question/495561621.html?seed=0" target="_blank" title="颈椎反曲是怎么回事?有什么治疗方法吗?生活中如何预防? "> 颈椎反曲是怎么回事?有什么治疗方法吗?生活... </a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 5分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="937" class="align-l" qdesc=" " qid="495560938" qtitle="被火烧伤能用冷水冲洗吗？用京万红会留疤痕吗？脸烧伤怎么处理不留疤痕？ "><img align="absmiddle" alt="悬赏30分" height="11" src="http://img.baidu.com/img/iknow/browse/gold.png" width="12"/><span class="c-red">30</span><a alog-action="br-q-title" class="title" href="/question/495560938.html?seed=0" target="_blank" title="被火烧伤能用冷水冲洗吗？用京万红会留疤痕吗？脸烧伤怎么处理不留疤痕？ "> 被火烧伤能用冷水冲洗吗？用京万红会留疤痕... </a><a href="http://zhidao.baidu.com/s/2011wapadv/index.html?fr=browse&amp;tab=0" target="_blank"><img border="0" class="cellphone" src="http://img.baidu.com/img/iknow/icon_mobile.gif" title="来自手机知道"/></a><a class="c-gray" href="/browse/937?lm=" target="_blank">[外伤科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 8分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="患者信息：男 22岁
                                        病情描述(发病时间、主要症状等)：
                                        昨天晚上我在操场跑了10圈，都是走走跑跑的，没有很费劲，那时候没感觉痛。。然后回寝室的时候脚踝处（我也说不出是哪里地方，感觉就是突出那根骨头的下面吧）就剧痛，走一步就那种刺骨的痛，很难受，晚上用热水泡了下，不走路的时候不通，脚也没肿，我把脚扭来扭去也没感觉痛疼感，就一走路就那种刺骨的痛，好像是脚抬起来的时候就痛。。。第二天还是痛，还是不能走路，一走就疼。。。

                                        想得到怎样的帮助：
                                        帮我看看我是什么情况，是骨折，伤筋还是什么的

                                        曾经治疗情况及是否有过敏、遗传病史：
                                        脚没有受伤过！！ " qid="495560514" qtitle="走路的时候脚踝剧痛 "><img align="absmiddle" alt="悬赏20分" height="11" src="http://img.baidu.com/img/iknow/browse/gold.png" width="12"/><span class="c-red">20</span><a alog-action="br-q-title" class="title" href="/question/495560514.html?seed=0" target="_blank" title="走路的时候脚踝剧痛 "> 走路的时候脚踝剧痛</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">0</td><td class="quick-time"> 9分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="1084" class="align-l" qdesc="患者信息：男 40岁 云南
                                        病情描述(发病时间、主要症状等)：
                                        现在每天（包括晚上）要小便十多次，白天上班半天时间一般要小便五次，每次都是因为尿急膀胱有压迫感不得不去小便，小便量好像也正常，生活中因为各种原因以前多次强忍小便，例如小时候读书上课，外出人多没有厕所的地方。 " qid="495559613" qtitle="尿频的原因有哪些?如何治疗? "><a alog-action="br-q-title" class="title" href="/question/495559613.html?seed=0" target="_blank" title="尿频的原因有哪些?如何治疗? "> 尿频的原因有哪些?如何治疗?</a><a class="c-gray" href="/browse/1084?lm=" target="_blank">[泌尿外科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 12分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="患者信息：男 26岁 新疆 乌鲁木齐
                                        病情描述(发病时间、主要症状等)：
                                        有时便血，没有疼痛 " qid="495558652" qtitle="如果得了痔疮用手能摸到吗 "><a alog-action="br-q-title" class="title" href="/question/495558652.html?seed=0" target="_blank" title="如果得了痔疮用手能摸到吗 "> 如果得了痔疮用手能摸到吗</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">3</td><td class="quick-time"> 15分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="1086" class="align-l" qdesc="患者信息：女 17岁
                                        病情描述(发病时间、主要症状等)：
                                        大概前两天发现大便出血 没有与大便混合 今天又出现了这种情况 不痛 血液鲜红

                                        想得到怎样的帮助：
                                        这是什么原因？严重吗？要怎么治？！ " qid="495558622" qtitle="便血怎么办 什么原因？ "><img align="absmiddle" alt="悬赏5分" height="11" src="http://img.baidu.com/img/iknow/browse/gold.png" width="12"/><span class="c-red">5</span><a alog-action="br-q-title" class="title" href="/question/495558622.html?seed=0" target="_blank" title="便血怎么办 什么原因？ "> 便血怎么办 什么原因？</a><a class="c-gray" href="/browse/1086?lm=" target="_blank">[肛肠外科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 15分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="病情描述(发病时间、主要症状等)：
                                        没有动手术。 " qid="495558409" qtitle="骨裂后一个月能吃牛肉吗？ "><a alog-action="br-q-title" class="title" href="/question/495558409.html?seed=0" target="_blank" title="骨裂后一个月能吃牛肉吗？ "> 骨裂后一个月能吃牛肉吗？</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">2</td><td class="quick-time"> 16分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="936" class="align-l" qdesc=" " qid="495557465" qtitle="治腰间盘突出什么药好 "><img align="absmiddle" alt="悬赏30分" height="11" src="http://img.baidu.com/img/iknow/browse/gold.png" width="12"/><span class="c-red">30</span><a alog-action="br-q-title" class="title" href="/question/495557465.html?seed=0" target="_blank" title="治腰间盘突出什么药好 "> 治腰间盘突出什么药好</a><a href="http://zhidao.baidu.com/s/2011wapadv/index.html?fr=browse&amp;tab=0" target="_blank"><img border="0" class="cellphone" src="http://img.baidu.com/img/iknow/icon_mobile.gif" title="来自手机知道"/></a><a class="c-gray" href="/browse/936?lm=" target="_blank">[骨科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 19分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="我左脚膝盖的左上方，当我把重心压在左腿上，蹲下来的时候会有强烈的疼痛感，都快一年了，如果一不小心扭到或者干嘛，就连用两只脚蹲都很难蹲下，如果蹲下了又很难站起，我今年16岁了，我还得训练跆拳道，该怎么治好啊 " qid="495557455" qtitle="我左脚膝盖左上方蹲下来的时候会疼痛该怎么治 "><a alog-action="br-q-title" class="title" href="/question/495557455.html?seed=0" target="_blank" title="我左脚膝盖左上方蹲下来的时候会疼痛该怎么治 "> 我左脚膝盖左上方蹲下来的时候会疼痛该怎么治</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 19分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="患者信息：男 13岁 湖南 永州
                                        病情描述(发病时间、主要症状等)：
                                        大约一个月前体育课摔了一跤，几分钟腿就肿大了。后来到市三医院就诊，耽误了最先的三天病情。 " qid="495557275" qtitle="胫骨骨裂后一个月受伤处还是肿的，正常吗 "><a alog-action="br-q-title" class="title" href="/question/495557275.html?seed=0" target="_blank" title="胫骨骨裂后一个月受伤处还是肿的，正常吗 "> 胫骨骨裂后一个月受伤处还是肿的，正常吗</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 20分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc=" " qid="495555809" qtitle="走路走到小腿大腿都疼了怎么减轻 "><a alog-action="br-q-title" class="title" href="/question/495555809.html?seed=0" target="_blank" title="走路走到小腿大腿都疼了怎么减轻 "> 走路走到小腿大腿都疼了怎么减轻</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">0</td><td class="quick-time"> 25分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="936" class="align-l" qdesc="患者信息：女 48岁 浙江 其他
                                        病情描述(发病时间、主要症状等)：
                                        尾椎骨发热

                                        想得到怎样的帮助：
                                        尾椎骨发热属于什么病症，使用药物

                                        曾经治疗情况及是否有过敏、遗传病史：
                                        无 " qid="495235962" qtitle="本人女48.。长年从事坐着工作，一天会坐着工作好长时间，曾做过痔疮手术，今年尾椎骨发热是什么病症，跪求 "><a alog-action="br-q-title" class="title" href="/question/495235962.html?seed=0" target="_blank" title="本人女48.。长年从事坐着工作，一天会坐着工作好长时间，曾做过痔疮手术，今年尾椎骨发热是什么病症，跪求 "> 本人女48.。长年从事坐着工作，一天会坐着... </a><a class="c-gray" href="/browse/936?lm=" target="_blank">[骨科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 22小时前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="936" class="align-l" qdesc=" " qid="494999798" qtitle="谁知道颈椎病的症状及预防方法？ "><a alog-action="br-q-title" class="title" href="/question/494999798.html?seed=0" target="_blank" title="谁知道颈椎病的症状及预防方法？ "> 谁知道颈椎病的症状及预防方法？</a><a class="c-gray" href="/browse/936?lm=" target="_blank">[骨科]</a></td>
                                        <td class="quick-num">0</td><td class="quick-time"> 1天前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="病情描述(发病时间、主要症状等)：
                                        打针两天，没效果 " qid="495237527" qtitle="睾丸炎打针要多久？ "><a alog-action="br-q-title" class="title" href="/question/495237527.html?seed=0" target="_blank" title="睾丸炎打针要多久？ "> 睾丸炎打针要多久？</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 22小时前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="急求股骨头坏死的治疗方法！ " qid="495174890" qtitle="股骨头坏死的治疗方法？ "><a alog-action="br-q-title" class="title" href="/question/495174890.html?seed=0" target="_blank" title="股骨头坏死的治疗方法？ "> 股骨头坏死的治疗方法？</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 1天前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="1084" class="align-l" qdesc="平时喝水少,上厕所太频繁。小便多,刚吃过饭就要上厕所,零食很少吃,有眼袋,身体不浮肿,嘴唇干,蜕皮,用唇膏也不行,吃多了东西,马上就有大小便的感觉。怎么才能消除啊?听说是因为身体不能吸收??? " qid="495554758" qtitle="尿频是什么原因? "><a alog-action="br-q-title" class="title" href="/question/495554758.html?seed=0" target="_blank" title="尿频是什么原因? "> 尿频是什么原因?</a><a href="http://zhidao.baidu.com/s/2011wapadv/index.html?fr=browse&amp;tab=0" target="_blank"><img border="0" class="cellphone" src="http://img.baidu.com/img/iknow/icon_mobile.gif" title="来自手机知道"/></a><a class="c-gray" href="/browse/1084?lm=" target="_blank">[泌尿外科]</a></td>
                                        <td class="quick-num">0</td><td class="quick-time"> 28分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="做完手术过后要多久才可以拆线? " qid="495053414" qtitle="手术过后要多久才可以拆线? "><a alog-action="br-q-title" class="title" href="/question/495053414.html?seed=0" target="_blank" title="手术过后要多久才可以拆线? "> 手术过后要多久才可以拆线?</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">2</td><td class="quick-time"> 1天前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="我现在上初二， 我的左腿一伸直，左膝盖就有点痛，已经一个多星期了，然后平常很少锻炼，这几个星期每天晚上都打1个多小时篮球，请问这是什么情况，怎么办，多久才能好 " qid="495228444" qtitle="左腿伸直膝盖痛 "><a alog-action="br-q-title" class="title" href="/question/495228444.html?seed=0" target="_blank" title="左腿伸直膝盖痛 "> 左腿伸直膝盖痛</a><a href="http://zhidao.baidu.com/s/2011wapadv/index.html?fr=browse&amp;tab=0" target="_blank"><img border="0" class="cellphone" src="http://img.baidu.com/img/iknow/icon_mobile.gif" title="来自手机知道"/></a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 22小时前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="1084" class="align-l" qdesc="患者信息：男 20岁 上海 徐汇区 " qid="495553946" qtitle="包皮环切术 "><a alog-action="br-q-title" class="title" href="/question/495553946.html?seed=0" target="_blank" title="包皮环切术 "> 包皮环切术</a><a class="c-gray" href="/browse/1084?lm=" target="_blank">[泌尿外科]</a></td>
                                        <td class="quick-num">0</td><td class="quick-time"> 30分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="936" class="align-l" qdesc=" " qid="495553937" qtitle="腰椎牵引器可以治疗哪些腰椎病的症状呢？ "><a alog-action="br-q-title" class="title" href="/question/495553937.html?seed=0" target="_blank" title="腰椎牵引器可以治疗哪些腰椎病的症状呢？ "> 腰椎牵引器可以治疗哪些腰椎病的症状呢？</a><a class="c-gray" href="/browse/936?lm=" target="_blank">[骨科]</a></td>
                                        <td class="quick-num">0</td><td class="quick-time"> 30分钟前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="病情描述(发病时间、主要症状等)：
                                        耳鸣 " qid="495237878" qtitle="脚骨骨折与耳鸣有关系么？ 脚神经一碰也痛 "><img align="absmiddle" alt="悬赏5分" height="11" src="http://img.baidu.com/img/iknow/browse/gold.png" width="12"/><span class="c-red">5</span><a alog-action="br-q-title" class="title" href="/question/495237878.html?seed=0" target="_blank" title="脚骨骨折与耳鸣有关系么？ 脚神经一碰也痛 "> 脚骨骨折与耳鸣有关系么？ 脚神经一碰也痛</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 22小时前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc=" " qid="495026400" qtitle="踏板车压弯膝盖怎么压低 "><a alog-action="br-q-title" class="title" href="/question/495026400.html?seed=0" target="_blank" title="踏板车压弯膝盖怎么压低 "> 踏板车压弯膝盖怎么压低</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">0</td><td class="quick-time"> 1天前</td>
                                    </tr>
                                    <tr class="qlist-tr">
                                        <td cid="791" class="align-l" qdesc="患者信息：女 22岁 广东 茂名
                                        病情描述(发病时间、主要症状等)：
                                        乳腺增生已有八年，经常疼痛，去人民医院检查了三次，也看过中医都说问题不大，吃药，忌口就好了，可是怎么感觉越来越痛呢,好像摸到里面有一块块的硬块，可是去人民医院检查医生说没有，中医生说那是乳核，难道乳核会有很多块的吗？乳核摸到也痛？求解，谢谢给位好心人士！

                                        想得到怎样的帮助：
                                        我现在的增生到了什么程度啊,我是不是又要去医院检查，还是怎么样，到底中医好，还是西医好，我很担心自己的身体，对婚姻或生育有着很大的影响吗/

                                        曾经治疗情况及是否有过敏、遗传病史：
                                        我妈妈也是，可是医生说不会遗传的 " qid="495268558" qtitle="乳腺增生怎么办 "><img align="absmiddle" alt="悬赏5分" height="11" src="http://img.baidu.com/img/iknow/browse/gold.png" width="12"/><span class="c-red">5</span><a alog-action="br-q-title" class="title" href="/question/495268558.html?seed=0" target="_blank" title="乳腺增生怎么办 "> 乳腺增生怎么办</a><a class="c-gray" href="/browse/791?lm=" target="_blank">[外科]</a></td>
                                        <td class="quick-num">1</td><td class="quick-time"> 21小时前</td>
                                    </tr>
                                </tbody>
                            </table>
                            <script src="http://iknow.bdimg.com/browse/js/src/quickAnswer.js?@=ys89pf" type="text/javascript"></script>
                        </div>
                    </div>
                </div>
                <div class="bottom-search-box">
                    <form action="/q" id="bottom-search-form" name="bottom-search">
                        <p>
                            <input id="bottom-search-text" name="bottom-search-text" type="text" value=""/>
                            <a href="http://www.baidu.com/search/zhidao_help.html">帮助</a>
                        </p>
                        <p>
                            <input alog-action="g-search-answer" id="bottom-search-answer" name="bottom-search-answer" type="submit" value="搜索答案"/>
                            <input alog-action="g-i-ask" id="bottom-i-ask" name="bottom-i-ask" type="button" value="我要提问"/>
                            <input alog-action="g-i-reply" id="bottom-i-reply" name="bottom-i-reply" type="button" value="我要回答"/>
                        </p>
                    </form>
                </div>
            </div>
            <div class="l-aside-col span-10 ">
                <!DOCTYPE html>
                <!--STATUS OK-->
                <html>
                    <head>
                        <meta charset="gb2312"/>
                    </head>
                    <body>
                        <div class="box-rod carefield" id="carefield-panel">
                            <div class="rod1"></div><div class="rod2"></div><div class="rod3"></div>
                            <div class="rod">
                                <h2>我的关注领域</h2>
                                <dl class="clearfix care-keyword">
                                    <dt>
                                        <a alog-alias="#" class="edit-link" href="/browse?" id="set-keyword">编辑</a> 我关注的关键词
                                    </dt>
                                    <dd alog-group="br-care-tag" id="my-carefield-keyword"></dd>
                                </dl>
                                <div class="clearfix care-class" id="my-carefield-class"></div>
                            </div>
                            <div class="rod3"></div><div class="rod2"></div><div class="rod4"></div>
                        </div>
                    </body>
                </html>
                <!DOCTYPE html>
                <!--STATUS OK-->
                <html>
                    <head>
                        <meta charset="gb2312"/>
                    </head>
                    <body>
                        <div class="box-rod admin" id="admin-panel">
                            <div class="rod1"></div><div class="rod2"></div><div class="rod3"></div>
                            <div class="rod">
                                <div class="tab-container">
                                    <div class="tab-holder">
                                        <ul class="clearfix">
                                            <li>
                                                <a class="current" href="#"><span>分类管理员</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>内容管理员</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-panels">
                                        <div class="tab-panel admin-category-panel">
                                            <dl class="d-gride d-gride-hover clearfix">
                                                <dt>
                                                    <a class="i-admin-level-10" href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔" target="_blank" title="十级分类管理员"></a>
                                                    <a alog-action="br-cate-admin" href="http://www.baidu.com/p/破晓_之舞?from=zhidao" target="_blank">破晓_之舞</a>
                                                </dt>
                                                <dd class="visibility">
                                                    <a href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔">高级营长</a>
                                                </dd>
                                                <dd>
                                                    转移分类：0
                                                </dd>
                                                <dd>
                                                    处理问题：29
                                                </dd>
                                                <dd>
                                                    检举数：4
                                                </dd>
                                            </dl>
                                            <dl class="d-gride clearfix">
                                                <dt>
                                                    <a class="i-admin-level-3" href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔" target="_blank" title="三级分类管理员"></a>
                                                    <a alog-action="br-cate-admin" href="http://www.baidu.com/p/佳佳0307?from=zhidao" target="_blank">佳佳0307</a>
                                                </dt>
                                                <dd class="visibility">
                                                    <a href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔">高级班长</a>
                                                </dd>
                                                <dd>
                                                    转移分类：4
                                                </dd>
                                                <dd>
                                                    处理问题：21
                                                </dd>
                                                <dd>
                                                    检举数：7
                                                </dd>
                                            </dl>
                                            <dl class="d-gride clearfix">
                                                <dt>
                                                    <a class="i-admin-level-3" href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔" target="_blank" title="三级分类管理员"></a>
                                                    <a alog-action="br-cate-admin" href="http://www.baidu.com/p/金秋十月sjb?from=zhidao" target="_blank">金秋十月sjb</a>
                                                </dt>
                                                <dd class="visibility">
                                                    <a href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔">高级班长</a>
                                                </dd>
                                                <dd>
                                                    转移分类：0
                                                </dd>
                                                <dd>
                                                    处理问题：5
                                                </dd>
                                                <dd>
                                                    检举数：0
                                                </dd>
                                            </dl>
                                            <dl class="d-gride clearfix">
                                                <dt>
                                                    <a class="i-admin-level-9" href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔" target="_blank" title="九级分类管理员"></a>
                                                    <a alog-action="br-cate-admin" href="http://www.baidu.com/p/Philip鹏?from=zhidao" target="_blank">Philip鹏</a>
                                                </dt>
                                                <dd class="visibility">
                                                    <a href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔">初级营长</a>
                                                </dd>
                                                <dd>
                                                    转移分类：0
                                                </dd>
                                                <dd>
                                                    处理问题：0
                                                </dd>
                                                <dd>
                                                    检举数：0
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="tab-panel admin-content-panel" style="display:none">
                                            <dl class="d-gride d-gride-hover clearfix">
                                                <dt>
                                                    <a class="i-admin-level-11" href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔" target="_blank" title="十一级内容管理员"></a>
                                                    <a alog-action="br-cate-admin" href="http://www.baidu.com/p/小小花AU?from=zhidao" target="_blank">小小花AU</a>
                                                </dt>
                                                <dd class="visibility">
                                                    <a href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔">初级团长</a>
                                                </dd>
                                                <dd>
                                                    处理问题：0
                                                </dd>
                                                <dd>
                                                    精彩推荐：356
                                                </dd>
                                            </dl>
                                            <dl class="d-gride clearfix">
                                                <dt>
                                                    <a class="i-admin-level-6" href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔" target="_blank" title="六级内容管理员"></a>
                                                    <a alog-action="br-cate-admin" href="http://www.baidu.com/p/sdmaqiang?from=zhidao" target="_blank">sdmaqiang</a>
                                                </dt>
                                                <dd class="visibility">
                                                    <a href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔">高级排长</a>
                                                </dd>
                                                <dd>
                                                    处理问题：0
                                                </dd>
                                                <dd>
                                                    精彩推荐：0
                                                </dd>
                                            </dl>
                                            <dl class="d-gride clearfix">
                                                <dt>
                                                    <a class="i-admin-level-3" href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔" target="_blank" title="三级内容管理员"></a>
                                                    <a alog-action="br-cate-admin" href="http://www.baidu.com/p/健康团长?from=zhidao" target="_blank">健康团长</a>
                                                </dt>
                                                <dd class="visibility">
                                                    <a href="http://www.baidu.com/search/zhidao_help.html#如何选择头衔">高级班长</a>
                                                </dd>
                                                <dd>
                                                    处理问题：0
                                                </dd>
                                                <dd>
                                                    精彩推荐：0
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rod3"></div><div class="rod2"></div><div class="rod4"></div>
                        </div>
                    </body>
                </html>
                <!DOCTYPE html>
                <!--STATUS OK-->
                <html>
                    <head>
                        <meta charset="gb2312"/>
                    </head>
                    <body>
                        <div class="box-rod expert" id="expert-panel">
                            <div class="rod1"></div><div class="rod2"></div><div class="rod3"></div>
                            <div class="rod">
                                <h2>分类知道专家</h2>
                                <dl class="d-gride d-gride-hover">
                                    <dt>
                                        <a alog-action="br-cate-expert" href="/upf/?expertuc&amp;un=思华堂骨科专家" target="_blank"> <h4>骨科医师傅峥</h4> </a><span class="fr">骨关节科</span>
                                    </dt>
                                    <dd>
                                        精通领域：骨关节科
                                    </dd>
                                    <dd>
                                        提供单位：<a href="http://www.sihuatang.com" target="_blank">思华堂骨科诊所</a>
                                    </dd>
                                    <dd>
                                        回答总数：3201
                                    </dd>
                                    <dd>
                                        <a class="fixedask-e" href="#" rel="思华堂骨科专家"><img border="0" height="19" src="http://img.baidu.com/img/iknow/dxtw2.gif" width="86"/></a>
                                    </dd>
                                </dl>
                                <dl class="d-gride">
                                    <dt>
                                        <a alog-action="br-cate-expert" href="http://zhidao.baidu.com/upf/?expertuc&amp;un=yaya5201314123" target="_blank"> <h4>结石病医师沈章义</h4> </a><span class="fr">结石病饮食</span>
                                    </dt>
                                    <dd>
                                        精通领域：结石病饮食
                                    </dd>
                                    <dd>
                                        提供单位：<a href="http://www.hbjieshi.com/" target="_blank">武汉京都结石病医院</a>
                                    </dd>
                                    <dd>
                                        回答总数：970
                                    </dd>
                                    <dd>
                                        <a class="fixedask-e" href="#" rel="yaya5201314123"><img border="0" height="19" src="http://img.baidu.com/img/iknow/dxtw2.gif" width="86"/></a>
                                    </dd>
                                </dl>
                                <dl class="d-gride">
                                    <dt>
                                        <a alog-action="br-cate-expert" href="http://zhidao.baidu.com/upf/?expertuc&amp;un=整形专家孟强" target="_blank"> <h4>整形医师孟强</h4> </a><span class="fr">五官整形</span>
                                    </dt>
                                    <dd>
                                        精通领域：五官整形
                                    </dd>
                                    <dd>
                                        提供单位：<a href="http://www.symlmr.com" target="_blank">沈阳名流美容医院</a>
                                    </dd>
                                    <dd>
                                        回答总数：777
                                    </dd>
                                    <dd>
                                        <a class="fixedask-e" href="#" rel="整形专家孟强"><img border="0" height="19" src="http://img.baidu.com/img/iknow/dxtw2.gif" width="86"/></a>
                                    </dd>
                                </dl>
                                <dl class="d-gride">
                                    <dt>
                                        <a alog-action="br-cate-expert" href="http://zhidao.baidu.com/upf/?expertuc&amp;un=xahrh3" target="_blank"> <h4>泌尿科医师沈旭辉</h4> </a><span class="fr">泌尿外科</span>
                                    </dt>
                                    <dd>
                                        精通领域：泌尿外科
                                    </dd>
                                    <dd>
                                        提供单位：<a href="http://029sz.net" target="_blank">西安生殖保健院</a>
                                    </dd>
                                    <dd>
                                        回答总数：649
                                    </dd>
                                    <dd>
                                        <a class="fixedask-e" href="#" rel="xahrh3"><img border="0" height="19" src="http://img.baidu.com/img/iknow/dxtw2.gif" width="86"/></a>
                                    </dd>
                                </dl>
                                <dl class="d-gride">
                                    <dt>
                                        <a alog-action="br-cate-expert" href="http://zhidao.baidu.com/upf/?expertuc&amp;un=瑞贝贝卡" target="_blank"> <h4>结石外科医师张松河</h4> </a><span class="fr">结石外科</span>
                                    </dt>
                                    <dd>
                                        精通领域：结石外科
                                    </dd>
                                    <dd>
                                        提供单位：<a href="http://www.hbjieshi.com" target="_blank">武汉京都结石病医院</a>
                                    </dd>
                                    <dd>
                                        回答总数：562
                                    </dd>
                                    <dd>
                                        <a class="fixedask-e" href="#" rel="瑞贝贝卡"><img border="0" height="19" src="http://img.baidu.com/img/iknow/dxtw2.gif" width="86"/></a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="rod3"></div><div class="rod2"></div><div class="rod4"></div>
                        </div>
                    </body>
                </html>
                <!DOCTYPE html>
                <!--STATUS OK-->
                <html>
                    <head>
                        <meta charset="gb2312"/>
                    </head>
                    <body>
                        <div class="box-rod rank" id="rank-panel">
                            <div class="rod1"></div><div class="rod2"></div><div class="rod3"></div>
                            <div class="rod">
                                <div class="tab-container">
                                    <div class="tab-holder">
                                        <ul class="clearfix">
                                            <li>
                                                <a class="current" href="#"><span>高手团</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>名人堂</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>达人榜</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-panels">
                                        <div class="tab-panel team">
                                            <div id="scroll-panel">
                                                <div class="scroll-box " id="scroller-container"></div>
                                            </div>
                                        </div>
                                        <div class="tab-panel mingren" style="display:none">
                                            <table border="0" cellpadding="0" cellspacing="0" id="mingren-table-list" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td width="55%">用户名</td>
                                                        <td align="center">累积分类经验值</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-panel daren" style="display:none">
                                            <table border="0" cellpadding="0" cellspacing="0" id="daren-table-list" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%">用户名</td>
                                                        <td align="center" width="15%">动态</td>
                                                        <td align="center">上周上升</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rod3"></div><div class="rod2"></div><div class="rod4"></div>
                        </div>
                    </body>
                </html>
                <div class="web-im">
                    <div class="rhi_1"></div><div class="rhi_2"></div>
                    <div class="rhi" style="padding:5px 5px 5px 30px;position:relative">
                        <a class="web-im-icon" href="http://im.baidu.com/" target="_blank"><img alt="百度Hi" border="0" src="http://img.baidu.com/img/iknow/icon_hi.gif"/></a>
                        <a class="web-im-link" href="http://group.im.baidu.com/search.php?query=外科&amp;pn=ik&amp;enc=gbk" style="" target="_blank">与大家一起群聊<span>外科</span></a>
                    </div>
                    <div class="rhi_2" style="clear:both"></div><div class="rhi_1"></div>
                </div>
                <div class="rss" style="margin-top:10px">
                    <p>
                        <a href="/q?ct=18&amp;cid=791&amp;lm=2&amp;rn=25&amp;tn=rssql&amp;md=8" target="_blank"> <img align="absmiddle" height="14" src="http://www.baidu.com/search/img/rss_xml.jpg" width="36"/> </a>
                        订阅该分类问题
                    </p>
                </div>
                <div id="advertise">
                    <!--STATUS OK-->
                    <script>
                        if (!g_f_js) {
                            var g_f_js = true;
                            document.write('<script src=http://eiv.baidu.com/other/ff.js><\/scr' + 'ipt>');
                        }
                    </script>
                    <table border=0 cellpadding=0 cellspacing=0>
                        <tr>
                            <td>
                            <table width=100% border=0>
                                <tr>
                                    <td style='table-layout:fixed;word-break:break-all;cursor:pointer'><a id=dfs0 href='http://www.baidu.com/baidu.php?url=060000K0Tcc7wH1E9ltSoFNkjlC84WrpAenkS0S0-QjZjxWgShDjbCgtRJelJtC05teBaaqG-KOMGGjjwGIYssdBb_LmTeYpeXh8zfDQGFKEB6qXRQ6-fYedzEGJ.7D_iwnkIJxQugEBeRfNRPPAjwCdI_ZOfYwTDxKv4eQQ5Z5gbzyIr15be_L5Bd8lxZmk-YoDsOVBIsQjPakklXMW_R0.U1Yk0ZDq1X2Ok6KY5T5pk5QP3oOAkni3qV2qdQJlssKGUHYznHf0I1Y0u1d3Xj00Iybq0ZKGujYk0APGujY1rjR0Ugfqn0KopHYs0ANGujYs0AdGujYs0A-kIjYs0APzm1YYn1m1n6' target='_blank'><span class=f14>泌尿<font color=#C60A00>外科</font>哪个医院好? </span></a>
                                    <br>
                                    <a href="http://www.baidu.com/baidu.php?url=060000K0Tcc7wH1E9ltSoFNkjlC84WrpAenkS0S0-QjZjxWgShDjbCgtRJelJtC05teBaaqG-KOMGGjjwGIYssdBb_LmTeYpeXh8zfDQGFKEB6qXRQ6-fYedzEGJ.7D_iwnkIJxQugEBeRfNRPPAjwCdI_ZOfYwTDxKv4eQQ5Z5gbzyIr15be_L5Bd8lxZmk-YoDsOVBIsQjPakklXMW_R0.U1Yk0ZDq1X2Ok6KY5T5pk5QP3oOAkni3qV2qdQJlssKGUHYznHf0I1Y0u1d3Xj00Iybq0ZKGujYk0APGujY1rjR0Ugfqn0KopHYs0ANGujYs0AdGujYs0A-kIjYs0APzm1YYn1m1n6" id="bdfs0" target="_blank" style="text-decoration:none; display:block;"><font color=#000000>泌尿<font color=#C60A00>外科</font>哪个医院好,最受欢迎男科医院,北京首家专业男科医院,云集三..</font>
                                    <br>
                                    <font color=#008000>Nanke.819nk.com</font></a></td>
                                </tr>
                            </table>
                            <br>
                            <table width=100% border=0>
                                <tr>
                                    <td style='table-layout:fixed;word-break:break-all;cursor:pointer'><a id=dfs1 href='http://www.baidu.com/baidu.php?url=060000Ka1efOmcvMl_0mVLbulRBNmKb4lwx4DbGal8Djh2-CJ-vPqk8sTKjpnN2Ggs3G5G_4E9WXvGPCxrYv5meQSMgVNSXdi5kdTfe13zr9U9_3NcqnSwJuKvpa.7Y_jWuvXzWYc6eLLg4Xg98dTn5QCYIVlkn5emMTas1f_I-IMZcC.U1Yz0ZDq1X2Ok6KY5THDEPQiEIilsqoDt_LBEtplssKGUHYznHf0I1Y0u1d3Xj00Iybq0ZKGujYk0APGujY1rjR0Ugfqn0KopHYs0ANGujYs0AdGujYs0A-kIjYs0APzm1YdnW0s' target='_blank'><span class=f14>哪家医院泌尿<font color=#C60A00>外科</font>好,304医..</span></a>
                                    <br>
                                    <a href="http://www.baidu.com/baidu.php?url=060000Ka1efOmcvMl_0mVLbulRBNmKb4lwx4DbGal8Djh2-CJ-vPqk8sTKjpnN2Ggs3G5G_4E9WXvGPCxrYv5meQSMgVNSXdi5kdTfe13zr9U9_3NcqnSwJuKvpa.7Y_jWuvXzWYc6eLLg4Xg98dTn5QCYIVlkn5emMTas1f_I-IMZcC.U1Yz0ZDq1X2Ok6KY5THDEPQiEIilsqoDt_LBEtplssKGUHYznHf0I1Y0u1d3Xj00Iybq0ZKGujYk0APGujY1rjR0Ugfqn0KopHYs0ANGujYs0AdGujYs0A-kIjYs0APzm1YdnW0s" id="bdfs1" target="_blank" style="text-decoration:none; display:block;"><font color=#000000>[权威三甲]哪家医院泌尿<font color=#C60A00>外科</font>好,北京304医院泌尿<font color=#C60A00>外科</font>,性泌尿系统感染..</font>
                                    <br>
                                    <font color=#008000>BJ_No.1_www.304qlx.com/010-56139304</font></a></td>
                                </tr>
                            </table>
                            <br>
                            <table width=100% border=0>
                                <tr>
                                    <td style='table-layout:fixed;word-break:break-all;cursor:pointer'><a id=dfs2 href='http://www.baidu.com/baidu.php?url=0600000wuByEo2zYbsPDVA-FY-FOdhNjNFTkYRIP5bCkDAjoyOVyFvlGcvBHJ6XA0_o6xMkO4sOWQW6jbvgHTKtmQfNOB2kgP5wbeoH2y1f5SbYpdCY-wc_ujiwT.7Y_az8zOKCswg3PAKDAWwJem5S9lOCNoDsOVBIsQjPakkLqMZXC.U1Y10ZDq1X2Ok6KY5Ux912WRv_OxdtMwoeBSEtm0pyYqnWDY0ZTq0ATqXZ6s0ZNG5fKspyfqnfKWpyfqn16d0AdY5H00pvbqn0K-pyfqn0KVpyfqn0KGTgfqn0KWThnqPHfLPj0' target='_blank'><span class=f14>丰台在线咨询妇科_丰台在线..</span></a>
                                    <br>
                                    <a href="http://www.baidu.com/baidu.php?url=0600000wuByEo2zYbsPDVA-FY-FOdhNjNFTkYRIP5bCkDAjoyOVyFvlGcvBHJ6XA0_o6xMkO4sOWQW6jbvgHTKtmQfNOB2kgP5wbeoH2y1f5SbYpdCY-wc_ujiwT.7Y_az8zOKCswg3PAKDAWwJem5S9lOCNoDsOVBIsQjPakkLqMZXC.U1Y10ZDq1X2Ok6KY5Ux912WRv_OxdtMwoeBSEtm0pyYqnWDY0ZTq0ATqXZ6s0ZNG5fKspyfqnfKWpyfqn16d0AdY5H00pvbqn0K-pyfqn0KVpyfqn0KGTgfqn0KWThnqPHfLPj0" id="bdfs2" target="_blank" style="text-decoration:none; display:block;"><font color=#000000>丰台在线咨询妇科,北京东方丽人医院,妇科(医保)医院,丰台最好的妇科..</font>
                                    <br>
                                    <font color=#008000>www.010buyunbuyu.com</font></a></td>
                                </tr>
                            </table>
                            <br>
                            <table width=100% border=0>
                                <tr>
                                    <td style='table-layout:fixed;word-break:break-all;cursor:pointer'><a id=dfs3 href='http://www.baidu.com/baidu.php?url=060000jMiOpXYSM2KWjmFDGMdrwzXm6psih2coTf5puH2ehO_Wa2Y949LiHq6J8UiSpThlnfUKEr48XrJhCYBfS1UH7tur9gqAJTNUNLN4clHL5l2y7czvwuX_GH.DR_aOQRzSF-DDiXarjwCdI_ZXSeQ-4UtVHQ3hXyzEdl32AM-WI6h9ikX1BsIT7jHzlRL5spycTT5gKfYt_QrMAzONDkugloDsOVBIsQjPak8ovX5iC0.U1YY0ZDq1X2Ok6KY5IUf8lojv_Hz1X2Ok6KGUHYznHf0I1Y0u1d3Xj00Iybq0ZKGujYk0APGujY1rjR0Ugfqn0KopHYs0ANGujYs0AdGujYs0A-kIjYs0APzm1YdrHnLP6' target='_blank'><span class=f14>中华泌尿<font color=#C60A00>外科</font> 北京海i军i总..</span></a>
                                    <br>
                                    <a href="http://www.baidu.com/baidu.php?url=060000jMiOpXYSM2KWjmFDGMdrwzXm6psih2coTf5puH2ehO_Wa2Y949LiHq6J8UiSpThlnfUKEr48XrJhCYBfS1UH7tur9gqAJTNUNLN4clHL5l2y7czvwuX_GH.DR_aOQRzSF-DDiXarjwCdI_ZXSeQ-4UtVHQ3hXyzEdl32AM-WI6h9ikX1BsIT7jHzlRL5spycTT5gKfYt_QrMAzONDkugloDsOVBIsQjPak8ovX5iC0.U1YY0ZDq1X2Ok6KY5IUf8lojv_Hz1X2Ok6KGUHYznHf0I1Y0u1d3Xj00Iybq0ZKGujYk0APGujY1rjR0Ugfqn0KopHYs0ANGujYs0AdGujYs0A-kIjYs0APzm1YdrHnLP6" id="bdfs3" target="_blank" style="text-decoration:none; display:block;"><font color=#000000>中华泌尿<font color=#C60A00>外科</font> 海i军i总医院 北京最好的男科医院,治男科三甲医院典范..</font>
                                    <br>
                                    <font color=#008000>www.bjhaina.com/QQ:415907612</font></a></td>
                                </tr>
                            </table>
                            <br>
                            <table width=100% border=0>
                                <tr>
                                    <td style='table-layout:fixed;word-break:break-all;cursor:pointer'><a id=dfs4 href='http://www.baidu.com/baidu.php?url=060000j6QTQ1GvmwM1YMmuc8KNEWJzU0XeUgukyuo8pSlEQoaVQGNOTizrFe4dTIY2gHgqL6spfvY5VJ622v3jiPrhAX05sZ15MKy_VcmrEKP7_Z_GS-yu9SOnJa.7R_aG-SgK7gb_4cPjqAKhQ2qnIHQCrqqvgQzd4Qcm8gtLudsRP5QAeKPa-BqM76l32AM-YG8x6Y_f33X8a9G4myIrP-SJFWtLm_HjSvFL0_nYQAi1uuYJ0.U1Yd0ZDq1X2Ok6KY5TBo8xojv_Hz1X2OkVx88_rdkP2qdQC0pyYqnWDY0ZTq0ATqXZ6s0ZNG5fKspyfqnfKWpyfqn16d0AdY5H00pvbqn0K-pyfqn0KVpyfqn0KGTgfqn0KWThnqPWfvrHT' target='_blank'><span class=f14>全国泌尿<font color=#C60A00>外科</font>最好的医院 北..</span></a>
                                    <br>
                                    <a href="http://www.baidu.com/baidu.php?url=060000j6QTQ1GvmwM1YMmuc8KNEWJzU0XeUgukyuo8pSlEQoaVQGNOTizrFe4dTIY2gHgqL6spfvY5VJ622v3jiPrhAX05sZ15MKy_VcmrEKP7_Z_GS-yu9SOnJa.7R_aG-SgK7gb_4cPjqAKhQ2qnIHQCrqqvgQzd4Qcm8gtLudsRP5QAeKPa-BqM76l32AM-YG8x6Y_f33X8a9G4myIrP-SJFWtLm_HjSvFL0_nYQAi1uuYJ0.U1Yd0ZDq1X2Ok6KY5TBo8xojv_Hz1X2OkVx88_rdkP2qdQC0pyYqnWDY0ZTq0ATqXZ6s0ZNG5fKspyfqnfKWpyfqn16d0AdY5H00pvbqn0K-pyfqn0KVpyfqn0KGTgfqn0KWThnqPWfvrHT" id="bdfs4" target="_blank" style="text-decoration:none; display:block;"><font color=#000000>公立三甲医保全国泌尿<font color=#C60A00>外科</font>最好的医院,北京海i军i总医院三甲公立医院..</font>
                                    <br>
                                    <font color=#008000>NanKe.MiNiaoWaiKe.HaiJun120.CN</font></a></td>
                                </tr>
                            </table>
                            <br>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div id="footer">
            <p>
                <a href="http://www.baidu.com/search/zhidao_help.html" target="_blank">帮助</a>
                |
                <a href="http://tieba.baidu.com/f?kw=%D6%AA%B5%C0%D2%E2%BC%FB%C9%E7" target="_blank">反馈建议</a>
                |
                <a href="http://tousu.baidu.com/zhidao" target="_blank">投诉举报</a>
                |
                <a href="/iknowcode.html" target="_blank">百度知道免费代码</a>
            </p>
            <p>
                <span class="copyright">&#169;2012 Baidu&#160;&#160;</span>
                <a href="http://www.baidu.com/duty/" target="_blank">使用百度前必读</a>
                |
                <a href="http://www.baidu.com/search/zhidao_help.html#知道协议" target="_blank">知道协议</a>
                |
                <a href="http://zhidao.baidu.com/s/open" target="_blank">百度知道开放平台</a>
            </p>
        </div>
        <script type="text/javascript">
            with (document) {
                0[(getElementsByTagName("head")[0] || body).appendChild(createElement("script")).src = "http://img.baidu.com/hunter/zhidao.js?st=" + ~(new Date() / 86400000)];
            }
        </script>
        <script src="http://iknow.bdimg.com/browse/js/browse.js?@=20ufu4u" type="text/javascript"></script>
        <img src="http://c.baidu.com/c.gif?t=2&amp;c=%CD%E2%BF%C6&amp;p=2&amp;pn=0" style="display:none"/>
    </body>
</html>