
           
            
            <div id="page" class="w984">
                <div id="header">
                    <div class="top-search-box">
                        <a class="logo" href="/"><img src="http://img.baidu.com/img/logo-zhidao.gif" alt="百度知道" width="137" height="46" /></a>
                        <ul class="channel">
                            <li>
                                <a onclick="nslog(this.href, 2012, {sc_pos: 'c_news'});return iknow.channelChange(this)" href="http://news.baidu.com/">新闻</a>
                            </li>
                            <li>
                                <a onclick="nslog(this.href, 2012, {sc_pos: 'c_baidu'});return iknow.channelChange(this)" href="http://www.baidu.com/">网页</a>
                            </li>
                            <li>
                                <a onclick="nslog(this.href, 2012, {sc_pos: 'c_tieba'});return iknow.channelChange(this)" href="http://tieba.baidu.com/">贴吧</a>
                            </li>
                            <li>
                                <strong>知道</strong>
                            </li>
                            <li>
                                <a onclick="nslog(this.href, 2012, {sc_pos: 'c_mp3'});return iknow.channelChange(this)" href="http://music.baidu.com/">音乐</a>
                            </li>
                            <li>
                                <a onclick="nslog(this.href, 2012, {sc_pos: 'c_pic'});return iknow.channelChange(this)" href="http://image.baidu.com/">图片</a>
                            </li>
                            <li>
                                <a onclick="nslog(this.href, 2012, {sc_pos: 'c_video'});return iknow.channelChange(this)" href="http://video.baidu.com/">视频</a>
                            </li>
                            <li>
                                <a onclick="nslog(this.href, 2012, {sc_pos: 'c_map'});return iknow.channelChange(this)" href="http://map.baidu.com/">地图</a>
                            </li>
                            <li>
                                <a onclick="nslog(this.href, 2012, {sc_pos: 'c_baike'});return iknow.channelChange(this)" href="http://baike.baidu.com/">百科</a>
                            </li>
                            <li>
                                <a onclick="nslog(this.href, 2012, {sc_pos: 'c_doc'});return iknow.channelChange(this)" href="http://wenku.baidu.com/">文库</a>
                            </li>
                            <li>
                                <a onclick="nslog(this.href, 2012, {sc_pos: 'c_jingyan'});iknow.channelChange(this);" href="http://jingyan.baidu.com/">经验</a>
                            </li>
                        </ul>
                        <form action="/search" name="top-search-form" method="get" id="top-search-form">
                            <div class="box box-v2" style="position:relative;width:650px">
                                <span class="top-search-box-bg"></span>
                                <input class="hdi" id="kw" maxlength="256" tabindex="1" size="46" name="word" />
                            </div>
                            <div class="btns" style="width:650px">
                                <input type="hidden" name="pn" value="0" />
                                <input type="hidden" name="ie" value="gbk" />
                                <input type="hidden" name="rn" value="10" />
                                <input type="hidden" name="lm" value="0" autocomplete="off" />
                                <input type="hidden" name="fr" value="search" autocomplete="off" />
                                <span class="btn-wrap">
                                    <input alog-action="g-search-anwser" type="submit" id="top-search-btn" hidefocus="true" onmouseover="this.className='btn-global btn-hover'" tabindex="2" value="搜索答案" class="btn-global" onmouseout="this.className='btn-global'" onmousedown="this.className='btn-global btn-active'"/>
                                </span>
                                <span class="btn-wrap">
                                    <input alog-action="g-i-ask" type="button" id="top-ask-btn" hidefocus="true" onmouseover="this.className='btn-global btn-hover'" tabindex="3" value="我要提问" class="btn-global" onmouseout="this.className='btn-global'" onmousedown="this.className='btn-global btn-active'"/>
                                </span>
                                <span class="btn-wrap">
                                    <input alog-action="g-i-reply" type="button" id="top-answer-btn" hidefocus="true" onmouseover="this.className='btn-global btn-hover'" tabindex="4" value="我要回答" class="btn-global" onmouseout="this.className='btn-global'" onmousedown="this.className='btn-global btn-active'"/>
                                </span>
                            </div>
                        </form>
                        <form name="top-ask-form" action="/q" method="get" id="top-ask-form">
                            <input type="hidden" name="ct" value="17" />
                            <input type="hidden" name="pn" value="0" />
                            <input type="hidden" name="tn" value="ikask" />
                            <input type="hidden" name="rn" value="10" />
                            <input type="hidden" name="word" value="" />
                            <input type="hidden" name="cm" value="1" />
                            <input type="hidden" name="lm" value="394496" />
                        </form>
                        <div class="invisible-clear"></div>
                    </div>
                    <div id="menu" class="menu ">
                        <div class="main-menu" style="clear:both;">
                            <div class="outer">
                                <div class="inner">
                                    <ul>
                                        <li class="first current">
                                            <a class="first" href="/" onclick="log.nslog(this.href, 210, { pos: 'home', group:'6' })">知道首页</a>
                                        </li>
                                        <li>
                                            <a href="/team" onclick="log.nslog(this.href, 210, { pos: 'team', group:'6' })">知道团队</a>
                                        </li>
                                        <li>
                                            <a href="/expert/apply?type=0&step=1" onclick="log.nslog(this.href, 210, { pos: 'gongshe', group:'6' })">知道公社</a>
                                        </li>
                                        <!--<li><a target="_blank" href="http://zhishi.baidu.com/" onclick="log.nslog(this.href, 210, { pos: 'master', group:'6' })">知识掌门人</a></li>-->
                                        <li>
                                            <a href="http://zhidao.baidu.com/s/activity/index.html">知道活动</a>
                                        </li>
                                        <li>
                                            <a href="http://zhidao.baidu.com/shop">知道商城</a>
                                        </li>
                                        <li class="three">
                                            <a class="three" target="_blank" href="http://light.baidu.com/" onclick="log.nslog(this.href, 210, { pos: 'light', group:'6' })">小桔灯</a>
                                        </li>
                                        <li class="two">
                                            <a class="two" target="_blank" href="http://jingyan.baidu.com/" onclick="log.nslog(this.href, 210, { pos: 'jingyan', group:'6' })">经验</a>
                                        </li>
                                    </ul>
                                    <span class="total">累计解决问题：212579515</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="body">
                    <div class="l-grid-2 grid-m0e191">
                        <div class="l-main-col">
                            <div class="l-main-wrap">
                                <div class="rc-block1 recommend">
                                    <b class="tl"></b><b class="tr"></b>
                                    <div class="outer">
                                        <div class="inner">

                                            <div class="rc-list-wrapper">
                                                <ul id="rc-list" class="rc-list">

                                                    <li class="show">
                                                        <div class="pic">
                                                            <a alog-action="recom-pic" href="http://zhidao.baidu.com/question/495144070.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'r_image'})"><img width="213" height="170" src="http://www.baidu.com/search/zhidao/jctuijian/shuangxingren.jpg"/></a>
                                                        </div>
                                                        <div class="txt">
                                                            <div class="hd">
                                                                <h3><img width="59" height="17" src="http://img.baidu.com/img/iknow/home/recommand.png" alt="精彩推荐"></h3>
                                                                <span class="time">2012.11.08</span>
                                                                <a alog-action="recom-more" href="http://zhidao.baidu.com/home_reclist/index.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'more'})">更多</a>
                                                            </div>
                                                            <dl  alog-group="recom-title" class="bd">
                                                                <dt>
                                                                    <a href="http://zhidao.baidu.com/question/495144070.html" target="_blank" class="title" onclick="log.nslog(this.href, 211, {'pos': 'r_title'})" title="双性人是怎么拥有两种性别的？">双性人是怎么拥有两种性别的？</a>
                                                                </dt>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/495143174.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="双性人长得像男人还是女人？">双性人长得像男人还是女人？</a>
                                                                    <span class="answerer">芙蓉荷</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/495143360.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="双性人可以自己跟自己生孩子吗？">双性人可以自己跟自己生孩子吗...</a>
                                                                    <span class="answerer">新石家庄</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/495143422.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="有哪些明星曾被爆出是双性人？">有哪些明星曾被爆出是双性人？</a>
                                                                    <span class="answerer">xiangnel</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/495143518.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="为何印度将双性人当成神来崇拜？">为何印度将双性人当成神来崇拜...</a>
                                                                    <span class="answerer">韩春琴</span>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </li>

                                                    <li class="show">
                                                        <div class="pic">
                                                            <a alog-action="recom-pic" href="http://zhidao.baidu.com/question/494863014.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'r_image'})"><img width="213" height="170" src="http://www.baidu.com/search/zhidao/jctuijian/meiguodaxuan.jpg"/></a>
                                                        </div>
                                                        <div class="txt">
                                                            <div class="hd">
                                                                <h3><img width="59" height="17" src="http://img.baidu.com/img/iknow/home/recommand.png" alt="精彩推荐"></h3>
                                                                <span class="time">2012.11.07</span>
                                                                <a alog-action="recom-more" href="http://zhidao.baidu.com/home_reclist/index.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'more'})">更多</a>
                                                            </div>
                                                            <dl  alog-group="recom-title" class="bd">
                                                                <dt>
                                                                    <a href="http://zhidao.baidu.com/question/494863014.html" target="_blank" class="title" onclick="log.nslog(this.href, 211, {'pos': 'r_title'})" title="在美国选总统要花多少钱？">在美国选总统要花多少钱？</a>
                                                                </dt>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/494869926.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="哪届美国总统竞选花钱最多？">哪届美国总统竞选花钱最多？</a>
                                                                    <span class="answerer">左脚绊右脚倒了</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/494863184.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="美国大选竞选费用从哪儿来？">美国大选竞选费用从哪儿来？</a>
                                                                    <span class="answerer">素问2011</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/494869853.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="美国大选开销都花在了哪？">美国大选开销都花在了哪？</a>
                                                                    <span class="answerer">热心网友</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/494868987.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="竞选资金如何做到公开透明？">竞选资金如何做到公开透明？</a>
                                                                    <span class="answerer">42252525</span>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </li>

                                                    <li class="show">
                                                        <div class="pic">
                                                            <a alog-action="recom-pic" href="http://zhidao.baidu.com/question/494388516.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'r_image'})"><img width="213" height="170" src="http://www.baidu.com/search/zhidao/jctuijian/qiukulou2.jpg"/></a>
                                                        </div>
                                                        <div class="txt">
                                                            <div class="hd">
                                                                <h3><img width="59" height="17" src="http://img.baidu.com/img/iknow/home/recommand.png" alt="精彩推荐"></h3>
                                                                <span class="time">2012.11.06</span>
                                                                <a alog-action="recom-more" href="http://zhidao.baidu.com/home_reclist/index.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'more'})">更多</a>
                                                            </div>
                                                            <dl  alog-group="recom-title" class="bd">
                                                                <dt>
                                                                    <a href="http://zhidao.baidu.com/question/494388516.html" target="_blank" class="title" onclick="log.nslog(this.href, 211, {'pos': 'r_title'})" title="“秋裤”最近为什么会这么红？">“秋裤”最近为什么会这么红？</a>
                                                                </dt>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/362261104.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="“秋裤”这个词是怎么来的？">“秋裤”这个词是怎么来的？</a>
                                                                    <span class="answerer">marilyn_aj</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/465799379.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="“秋裤楼”破了哪些世界纪录？">“秋裤楼”破了哪些世界纪录？</a>
                                                                    <span class="answerer">baiquan08</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/494564318.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="望穿秋水怎么变“望穿秋裤”了？">望穿秋水怎么变“望穿秋裤”了...</a>
                                                                    <span class="answerer">热心网友</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/354773737.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="网上有哪些爆笑“秋裤体”？">网上有哪些爆笑“秋裤体”？</a>
                                                                    <span class="answerer">热心网友 </span>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </li>

                                                    <li class="show">
                                                        <div class="pic">
                                                            <a alog-action="recom-pic" href="http://zhidao.baidu.com/question/96192285.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'r_image'})"><img width="213" height="170" src="http://www.baidu.com/search/zhidao/jctuijian/shangban-2.jpg"/></a>
                                                        </div>
                                                        <div class="txt">
                                                            <div class="hd">
                                                                <h3><img width="59" height="17" src="http://img.baidu.com/img/iknow/home/recommand.png" alt="精彩推荐"></h3>
                                                                <span class="time">2012.11.05</span>
                                                                <a alog-action="recom-more" href="http://zhidao.baidu.com/home_reclist/index.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'more'})">更多</a>
                                                            </div>
                                                            <dl  alog-group="recom-title" class="bd">
                                                                <dt>
                                                                    <a href="http://zhidao.baidu.com/question/96192285.html" target="_blank" class="title" onclick="log.nslog(this.href, 211, {'pos': 'r_title'})" title="为何有些人特别恐惧星期一？">为何有些人特别恐惧星期一？</a>
                                                                </dt>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/17254588.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="每周开始的第一天是星期一吗？">每周开始的第一天是星期一吗？</a>
                                                                    <span class="answerer">a543461674</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/73541061.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="被称为“黑色星期一”的是哪天？">被称为“黑色星期一”的是哪天...</a>
                                                                    <span class="answerer">mumu5391278</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/489745109.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="哪些人最容易得星期一综合症？">哪些人最容易得星期一综合症？</a>
                                                                    <span class="answerer">710765967</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/31421509.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="如何避免出现星期一综合症？">如何避免出现星期一综合症？</a>
                                                                    <span class="answerer">echo6975</span>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </li>

                                                    <li class="show">
                                                        <div class="pic">
                                                            <a alog-action="recom-pic" href="http://zhidao.baidu.com/question/134218420.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'r_image'})"><img width="213" height="170" src="http://www.baidu.com/search/zhidao/jctuijian/xue-1.jpg"/></a>
                                                        </div>
                                                        <div class="txt">
                                                            <div class="hd">
                                                                <h3><img width="59" height="17" src="http://img.baidu.com/img/iknow/home/recommand.png" alt="精彩推荐"></h3>
                                                                <span class="time">2012.11.04</span>
                                                                <a alog-action="recom-more" href="http://zhidao.baidu.com/home_reclist/index.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'more'})">更多</a>
                                                            </div>
                                                            <dl  alog-group="recom-title" class="bd">
                                                                <dt>
                                                                    <a href="http://zhidao.baidu.com/question/134218420.html" target="_blank" class="title" onclick="log.nslog(this.href, 211, {'pos': 'r_title'})" title="下雪天真的比化雪天暖和吗？">下雪天真的比化雪天暖和吗？</a>
                                                                </dt>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/223830187.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="下雪行车时要注意哪些事项？">下雪行车时要注意哪些事项？</a>
                                                                    <span class="answerer">Ceeyer</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/38528671.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="下雪天在户外活动时要预防什么？">下雪天在户外活动时要预防什么...</a>
                                                                    <span class="answerer">seaman122</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/421499295.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="下雪入冬后吃什么对身体最好？">下雪入冬后吃什么对身体最好？</a>
                                                                    <span class="answerer">王俊华</span>
                                                                </dd>

                                                                <dd>
                                                                    <a href="http://zhidao.baidu.com/question/16344238.html" target="_blank" onclick="log.nslog(this.href, 211, {'pos': 'qlist_title'})" title="下雪入冬后该如何保暖？">下雪入冬后该如何保暖？</a>
                                                                    <span class="answerer">QQPAMER </span>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </li>

                                                </ul>
                                                <script>
                                                    function rc(fr) {
                                                        log.imageReq("/clk.html?fr=" + fr);
                                                    }
                                                </script>

                                            </div>
                                            <ul id="slider" class="slider">
                                                <li alog-action="recom-slider" title="双性人是怎么拥有两种性别的？" class="item-1 current">
                                                    双性人是怎么拥有两种...
                                                </li>
                                                <li alog-action="recom-slider" title="在美国选总统要花多少钱？" class="item-6">
                                                    在美国选总统要花多少...
                                                </li>
                                                <li alog-action="recom-slider" title="“秋裤”最近为什么会这么红？" class="item-11">
                                                    “秋裤”最近为什么会...
                                                </li>
                                                <li alog-action="recom-slider" title="为何有些人特别恐惧星期一？" class="item-16">
                                                    为何有些人特别恐惧星...
                                                </li>
                                                <li alog-action="recom-slider" title="下雪天真的比化雪天暖和吗？" class="item-21">
                                                    下雪天真的比化雪天暖...
                                                </li>
                                            </ul>

                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <b class="bl"></b><b class="br"></b>
                                </div>
                            </div>
                        </div>
                        <div class="l-aside">
                            <div class="rc-block1 rc-block1-yellow notice">
                                <b class="tl"></b><b class="tr"></b>
                                <div class="outer">
                                    <div class="inner">
                                        <div class="hd">
                                            <h3>公告区</h3>
                                            <a alog-alias="announ-more" href="http://hi.baidu.com/%B0%D9%B6%C8%D6%AA%B5%C0/blog" target="_blank" onclick="log.nslog(this.href, 212, {pop: 'more', group: '6'})">更多</a>
                                        </div>
                                        <div class="bd">
                                            <style type="text/css">
                                                #center-top-ad {
                                                    height: auto;
                                                }
                                                #center-top-ad a img {
                                                    display: block;
                                                }
                                            </style>
                                            <ul alog-group="hm-gg-title">
                                                <li class="help">
                                                    <a href="http://www.baidu.com/search/zhidao_help.html" onclick="log.nslog(this.href, 212, {'pos': 'title'})" target="_blank">如何使用知道</a>
                                                </li>
                                                <li>
                                                    <a href="http://hi.baidu.com/zhidao/item/3467f0fae37b90cf531c26f0" target="_blank" onclick="log.nslog(this.href, 212, {'pos': 'title'})">精彩推荐征答令1107</a><span class="new"></span>
                                                </li>
                                                <li>
                                                    <a href="http://tieba.baidu.com/p/1966272394" target="_blank" onclick="log.nslog(this.href, 212, {'pos': 'title'})">知道神级问答收集专场</a>
                                                </li>
                                                <li>
                                                    <a href="http://uxsurvey.baidu.com/index.php?sid=38486&lang=zh-Hans" target="_blank" onclick="log.nslog(this.href, 212, {'pos': 'title'})">翻书有“译”又有奖</a>
                                                </li>
                                                <li>
                                                    <a href="http://hi.baidu.com/openkw/item/d8bed07d4ddb6f49ee1e530f" target="_blank" onclick="log.nslog(this.href, 212, {'pos': 'title'})">企业知道招募智囊团</a>
                                                </li>
                                                <li>
                                                    <a href="http://wenku.baidu.com/topic/sheying/index.html?fr=zhidaogg" target="_blank" onclick="log.nslog(this.href, 212, {'pos': 'title'})">一分钟学会风光摄影</a>
                                                </li>
                                            </ul>
                                            <!--10000-->
                                        </div>
                                    </div>
                                </div>
                                <b class="bl"></b><b class="br"></b>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid-3 grid-s202m0e191">
                        <div class="l-main-col">
                            <div class="l-main-wrap">
                                <div id="center-top-ad" class="ad1">
                                    <script type="text/javascript">
                                        BaiduAdsDisplay(46);
                                    </script>
                                </div>
                                <!-- 登录待解决问题 -->
                                <!-- 关键词部分 -->
                                <!-- 分类部分 -->
                                <!-- 无数据部分 -->
                                <!-- 核心用户推送 -->
                                <!-- 没有定制分类、关键词、核心推送，出未登录情况下的代解决问题 -->
                                <!-- 未登录待解决问题 -->
                                <!-- 通用框 -->
                                <!-- 通用问题列表字段 -->
                                <!-- 核心用户推送问题列表字段 -->
                                <!-- 关键词，分类，推送列表部分 -->

                                <div class="rc-block2 being-q">
                                    <b class="tl"></b><b class="tr"></b>
                                    <div class="outer">
                                        <div class="inner">
                                            <div class="hd">
                                                <h3><a onclick="log.nslog(this.href,214,{'pos':'more'})" href="/browse/?lm=2&fr=nw" target="_blank">待完善问题</a></h3><a alog-action="set-care-field" href="#" id="carefield_set"><img src="http://img.baidu.com/img/iknow/home/setup.gif" width="102" height="19" /></a>
                                            </div>
                                            <div alog-group="index-que" class="bd">
                                                <!-- 如果没有定制分类，提示文字要出现在最上面 -->

                                                <div id="no_category">
                                                    <a alog-alias="set-care-cate" class="no_result_set" href="#category">设置分类</a>，轻松订阅感兴趣的分类问题
                                                </div>

                                                <!-- 关键词部分 -->

                                                <div id="no_keyword">
                                                    <a alog-alias="set-care-tag" class="no_result_set" href="#keyword">设置关键词</a>，轻松订阅感兴趣的关键词问题
                                                </div>

                                                <!-- 分类部分 -->

                                                <!-- 无数据部分 -->

                                                <div id="no_carefield">
                                                    <a alog-action="set-care-field" class="no_result_set" href="#all">设置关注领域</a>，轻松订阅自己感兴趣的待完善问题
                                                </div>
                                                <script type="text/javascript">
                                                    baidu.hide("no_keyword");
                                                    baidu.hide("no_category");
                                                </script>

                                                <!-- 核心用户推送 -->

                                                <div class="concern-hd" id="push-h">
                                                    <span class="expanded"></span><a alog-alias="more-que" style="background:#fff;*margin-top:-20px;" href="/q?ct=24&cm=16&tn=ucframework#push" target="_blank">更多</a><a class="push-title" href="/q?ct=24&cm=16&tn=ucframework#push" target="_blank">为我推荐的问题</a>
                                                </div>

                                                <div id="push-c" class="concern-bd cle">
                                                    <div alog-group="push-data" id="pushData">
                                                        <ul>

                                                            <li id="li493863719" class="cle core-user " data-index="g1"  onmouseover="showDel(493863719);" onmouseout="hideDel(493863719);">
                                                                <a title="不再推荐" class="push-del" id="493863719" onclick="clickDel(493863719)"></a>
                                                                <span class="ans-num">0回答</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/493863719.html?push=core&group=1" title="模仿秋瑾的秋天写几行小诗" target="_blank">模仿秋瑾的秋天写几行小诗</a></span>

                                                            </li>

                                                            <li id="li494895802" class="cle core-user " data-index="g1"  onmouseover="showDel(494895802);" onmouseout="hideDel(494895802);">
                                                                <a title="不再推荐" class="push-del" id="494895802" onclick="clickDel(494895802)"></a>
                                                                <span class="ans-num">1回答</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/494895802.html?push=core&group=1" title="江西省赣州市屏山镇委书记是谁啊?" target="_blank">江西省赣州市屏山镇委书记是谁啊?</a></span>

                                                                <a href="http://zhidao.baidu.com/s/2011wapadv/index.html?fr=index&tab=0" target="_blank"><img src="http://img.baidu.com/img/iknow/icon_mobile.gif" border="0" title="来自手机知道"/></a>

                                                            </li>

                                                            <li id="li491537010" class="cle core-user " data-index="g1"  onmouseover="showDel(491537010);" onmouseout="hideDel(491537010);">
                                                                <a title="不再推荐" class="push-del" id="491537010" onclick="clickDel(491537010)"></a>
                                                                <span class="ans-num">0回答</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/491537010.html?push=core&group=1" title="沙田群峰什么时间开工" target="_blank">沙田群峰什么时间开工</a></span>

                                                            </li>

                                                            <li id="li493927382" class="cle core-user " data-index="g1"  onmouseover="showDel(493927382);" onmouseout="hideDel(493927382);">
                                                                <a title="不再推荐" class="push-del" id="493927382" onclick="clickDel(493927382)"></a>
                                                                <span class="ans-num">0回答</span>

                                                                <span class="price">50</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/493927382.html?push=core&group=1" title="低价刷各种钻，骗人不是人" target="_blank">低价刷各种钻，骗人不是人</a></span>

                                                                <a href="http://zhidao.baidu.com/s/2011wapadv/index.html?fr=index&tab=0" target="_blank"><img src="http://img.baidu.com/img/iknow/icon_mobile.gif" border="0" title="来自手机知道"/></a>

                                                            </li>

                                                            <li id="li490957935" class="cle core-user " data-index="g1"  onmouseover="showDel(490957935);" onmouseout="hideDel(490957935);">
                                                                <a title="不再推荐" class="push-del" id="490957935" onclick="clickDel(490957935)"></a>
                                                                <span class="ans-num">1回答</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/490957935.html?push=core&group=1" title="请问饶平县高堂镇委书记黄文超家庭详细地址?" target="_blank">请问饶平县高堂镇委书记黄文超家庭详细地址?</a></span>

                                                            </li>

                                                        </ul>
                                                        <ul>

                                                            <li id="li494214836" class="cle core-user " data-index="g2"  onmouseover="showDel(494214836);" onmouseout="hideDel(494214836);">
                                                                <a title="不再推荐" class="push-del" id="494214836" onclick="clickDel(494214836)"></a>
                                                                <span class="ans-num">2回答</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/494214836.html?push=core&group=1" title="文峰的总裁陈浩真TM的不是人，造个文峰大厦还要剥削员工的钱，每个员工强制性扣2000元，祝愿它早日下地狱" target="_blank">文峰的总裁陈浩真TM的不是人，造个文峰大厦还要剥削员工...</a></span>

                                                            </li>

                                                            <li id="li494888739" class="cle core-user " data-index="g2"  onmouseover="showDel(494888739);" onmouseout="hideDel(494888739);">
                                                                <a title="不再推荐" class="push-del" id="494888739" onclick="clickDel(494888739)"></a>
                                                                <span class="ans-num">0回答</span>

                                                                <span class="price">10</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/494888739.html?push=core&group=1" title="东莞沙田世纪大豪庭那里有邮局有多远?" target="_blank">东莞沙田世纪大豪庭那里有邮局有多远?</a></span>

                                                            </li>

                                                            <li id="li494926001" class="cle core-user " data-index="g2"  onmouseover="showDel(494926001);" onmouseout="hideDel(494926001);">
                                                                <a title="不再推荐" class="push-del" id="494926001" onclick="clickDel(494926001)"></a>
                                                                <span class="ans-num">2回答</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/494926001.html?push=core&group=1" title="一个姓姚的守台湾,好像是和日本人打,清朝末期的电视剧" target="_blank">一个姓姚的守台湾,好像是和日本人打,清朝末期的电视剧</a></span>

                                                            </li>

                                                            <li id="li494684137" class="cle core-user " data-index="g2"  onmouseover="showDel(494684137);" onmouseout="hideDel(494684137);">
                                                                <a title="不再推荐" class="push-del" id="494684137" onclick="clickDel(494684137)"></a>
                                                                <span class="ans-num">1回答</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/494684137.html?push=core&group=1" title="描写清朝女子的语段，丫鬟和妃子啊，福晋啊，要分开阿哥也要" target="_blank">描写清朝女子的语段，丫鬟和妃子啊，福晋啊，要分开阿哥...</a></span>

                                                                <a href="http://zhidao.baidu.com/s/2011wapadv/index.html?fr=index&tab=0" target="_blank"><img src="http://img.baidu.com/img/iknow/icon_mobile.gif" border="0" title="来自手机知道"/></a>

                                                            </li>

                                                            <li id="li494076214" class="cle core-user " data-index="g2"  onmouseover="showDel(494076214);" onmouseout="hideDel(494076214);">
                                                                <a title="不再推荐" class="push-del" id="494076214" onclick="clickDel(494076214)"></a>
                                                                <span class="ans-num">1回答</span>

                                                                <span class="price">30</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/494076214.html?push=core&group=1" title="谁有百家讲坛《正说清朝24臣》全集的下载链接？请发过来好么" target="_blank">谁有百家讲坛《正说清朝24臣》全集的下载链接？请发过来...</a></span>

                                                            </li>

                                                            <li id="li493998535" class="cle core-user core-list-backup" data-index="g2" style="display:none" onmouseover="showDel(493998535);" onmouseout="hideDel(493998535);">
                                                                <a title="不再推荐" class="push-del" id="493998535" onclick="clickDel(493998535)"></a>
                                                                <span class="ans-num">0回答</span>

                                                                <span class="price">50</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/493998535.html?push=core&group=1" title="求清朝十大奇案完整版下载，要完整的十个案件，谢啦！1282867029@qq.com" target="_blank">求清朝十大奇案完整版下载，要完整的十个案件，谢啦！12...</a></span>

                                                            </li>

                                                            <li id="li493426055" class="cle core-user core-list-backup" data-index="g2" style="display:none" onmouseover="showDel(493426055);" onmouseout="hideDel(493426055);">
                                                                <a title="不再推荐" class="push-del" id="493426055" onclick="clickDel(493426055)"></a>
                                                                <span class="ans-num">0回答</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/493426055.html?push=core&group=1" title="南昌县志上可以查询明朝和清朝的大型移民情况吗求高人" target="_blank">南昌县志上可以查询明朝和清朝的大型移民情况吗求高人</a></span>

                                                            </li>

                                                            <li id="li493790605" class="cle core-user core-list-backup" data-index="g2" style="display:none" onmouseover="showDel(493790605);" onmouseout="hideDel(493790605);">
                                                                <a title="不再推荐" class="push-del" id="493790605" onclick="clickDel(493790605)"></a>
                                                                <span class="ans-num">0回答</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/493790605.html?push=core&group=1" title="太后不是人 乃是仙女下凡尘 是哪部电视剧中的" target="_blank">太后不是人 乃是仙女下凡尘 是哪部电视剧中的</a></span>

                                                            </li>

                                                            <li id="li493418881" class="cle core-user core-list-backup" data-index="g2" style="display:none" onmouseover="showDel(493418881);" onmouseout="hideDel(493418881);">
                                                                <a title="不再推荐" class="push-del" id="493418881" onclick="clickDel(493418881)"></a>
                                                                <span class="ans-num">1回答</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/493418881.html?push=core&group=1" title="这块是清朝和田青玉吗？大概值多少钱？" target="_blank">这块是清朝和田青玉吗？大概值多少钱？</a></span>

                                                            </li>

                                                            <li id="li494886353" class="cle core-user core-list-backup" data-index="g2" style="display:none" onmouseover="showDel(494886353);" onmouseout="hideDel(494886353);">
                                                                <a title="不再推荐" class="push-del" id="494886353" onclick="clickDel(494886353)"></a>
                                                                <span class="ans-num">1回答</span>

                                                                <span class="price">5</span>

                                                                <span class="title"><a onclick="log.nslog(this.href,214,{'pos':'title'})" href="/question/494886353.html?push=core&group=1" title="南宁哪里有斜跨帆布包买学生背的?【注：大和平、和平商场、朝阳广场那边、交易场、大沙田都去过了没有】" target="_blank">南宁哪里有斜跨帆布包买学生背的?【注：大和平、和平商...</a></span>

                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="push-change">
                                                        <span style="color:#666;margin-right:6px;">没有感兴趣的问题？试试</span><a alog-alias="push-change" id="push_change" href="javascript:void(0);" onclick="clickChange();">换一批</a>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    var global_change = 0;
                                                    var global_del = 0;
                                                    var global_qid;
                                                    function clickDel(g) {
                                                        global_del = 1;
                                                        global_change = 0;
                                                        global_qid = g + "";
                                                        var f = baidu.dom.q("core-list-backup");
                                                        nslog(location.href, 2013, {
                                                            del_index : "del"
                                                        });
                                                        clearTimeout(c);
                                                        baidu.ajax.post("/submit/user", "cm=100580&qid=" + g);
                                                        baidu.fx.fadeOut("li" + global_qid, {
                                                            duration : 800
                                                        });
                                                        var e = baidu.dom.getAttr("li" + g, "data-index");
                                                        if (f.length > 0) {
                                                            if (e == "g2") {
                                                                var c = setTimeout(function() {
                                                                    f[0].style.display = "";
                                                                    baidu.dom.remove("li" + global_qid);
                                                                    baidu.dom.removeClass(f[0], "core-list-backup");
                                                                    f.splice(0, 1)
                                                                }, 800)
                                                            } else {
                                                                var d = baidu.g("pushData").getElementsByTagName("ul");
                                                                var a = baidu.dom.last(d[0]);
                                                                var b = baidu.dom.first(d[1]);
                                                                var c = setTimeout(function() {
                                                                    baidu.dom.setAttr(b, "data-index", "g1");
                                                                    baidu.dom.insertAfter(b, a);
                                                                    baidu.dom.remove("li" + global_qid);
                                                                    f[0].style.display = "";
                                                                    baidu.dom.removeClass(f[0], "core-list-backup");
                                                                    f.splice(0, 1)
                                                                }, 800)
                                                            }
                                                        } else {
                                                            var c = setTimeout(function() {
                                                                baidu.sio.callByServer("/q?ct=15&cm=2&tn=iknowindex_core_push&qid=0&t=" + (new Date()).getTime(), "getData")
                                                            }, 1000)
                                                        }
                                                    }

                                                    function getData(e) {
                                                        if (e.pushListNum > 0) {
                                                            baidu.cookie.set("CPLN", e.pushListNum, {
                                                                path : "/",
                                                                expires : "",
                                                                domain : location.host.replace(/:\d+/, ""),
                                                                secure : ""
                                                            });
                                                            baidu.cookie.set("CPOFF", e.pushOffset, {
                                                                path : "/",
                                                                expires : "",
                                                                domain : location.host.replace(/:\d+/, ""),
                                                                secure : ""
                                                            });
                                                            if (global_change == 1) {
                                                                if (e.pushListNum <= 10) {
                                                                    pop.show("知道提示", {
                                                                        info : '<div style="font-family:微软雅黑,黑体,arial;font-size:16px;" class="yahei"><p>不能再换一批喽:(</p><p style="margin-top:10px;">推荐给您的问题就剩这么多了</p><p style="font-size:12px;color:#666;font-family:arial;margin-top:10px;">请继续答题或者稍等查看我们为您推荐的新问题:)</p></div>',
                                                                        width : 400,
                                                                        height : 200
                                                                    })
                                                                }
                                                            }
                                                            var d = [];
                                                            d.push("<ul>");
                                                            for (var c = 0; c < e.pushQuestion.length - 1; c++) {
                                                                d.push(e.pushQuestion[c].answerNum + e.pushQuestion[c].score);
                                                                d.push('<span class="title">' + e.pushQuestion[c].questionTitle + "</span>");
                                                                d.push(e.pushQuestion[c].cellphone + "</li>");
                                                                if (c == 4) {
                                                                    d.push("</ul><ul>")
                                                                }
                                                            }
                                                            d.push("</ul>");
                                                            G("pushData").innerHTML = d.join("");
                                                            var a = baidu.q("ans-num", "pushData");
                                                            if (a.length > 0) {
                                                                for (var c = 0; c < a.length; c++) {
                                                                    if (a[c].parentNode && a[c].parentNode.id) {
                                                                        var b = +a[c].parentNode.id.replace("li", "");
                                                                        baidu.dom.insertHTML(a[c], "beforeBegin", '<a title="不再推荐" class="push-del" id="' + b + '" onclick="clickDel(' + b + ')"></a>')
                                                                    } else {
                                                                        baidu.dom.insertHTML(a[c], "beforeBegin", '<a class="push-del"></a>')
                                                                    }
                                                                }
                                                            }
                                                            if (global_change == 1) {
                                                                baidu.fx.fadeIn("pushData", {
                                                                    duration : 500
                                                                })
                                                            }
                                                        } else {
                                                            if (global_del == 1) {
                                                                G("push-c").innerHTML = '<p style="padding:15px 0 15px;">已经没有为您推荐的问题了！请继续答题或者稍等查看我们为您推荐的新问题：）<a style="font-weight:bold;font-family:宋体;" href="http://zhidao.baidu.com/browse/?lm=2&fr=nw" target="_blank">现在就去回答>></a></p>'
                                                            }
                                                        }
                                                    }

                                                    function clickChange() {
                                                        global_change = 1;
                                                        global_del = 0;
                                                        nslog(location.href, 2013, {
                                                            change_index : "change"
                                                        });
                                                        clearTimeout(a);
                                                        var a = setTimeout(function() {
                                                            baidu.sio.callByServer("/q?ct=15&cm=3&tn=iknowindex_core_push&qid=0&t=" + (new Date()).getTime(), "getData")
                                                        }, 10)
                                                    }

                                                    function showDel(b) {
                                                        var a = b + "";
                                                        baidu.g(a).style.visibility = "visible";
                                                        baidu.on(a, "mouseover", function() {
                                                            baidu.g(a).style.backgroundPosition = "0 -114px"
                                                        });
                                                        baidu.on(a, "mouseout", function() {
                                                            if (baidu.g(a)) {
                                                                baidu.g(a).style.backgroundPosition = "0 -84px"
                                                            }
                                                        })
                                                    }

                                                    function hideDel(b) {
                                                        var a = b + "";
                                                        baidu.g(a).style.visibility = "hidden"
                                                    };
                                                </script>

                                                <!-- 没有定制分类、关键词、核心推送，出未登录情况下的代解决问题 -->

                                            </div>
                                        </div>
                                    </div>
                                    <b class="bl"></b><b class="br"></b>
                                </div>
                                <script type="text/javascript">
                                    baidu.ready(function() {
                                        var c = baidu.Q("no_result_set", document, "a");
                                        var b = baidu.Q("edit", document, "a");
                                        b = b.concat(c);
                                        baidu.each(b, function(d) {
                                            baidu.on(d, "click", function(f) {
                                                if (/#keyword/.test(this.href)) {
                                                    var e = 1;
                                                    a(e)
                                                } else {
                                                    if (/#all/.test(this.href)) {
                                                        a()
                                                    } else {
                                                        var e = 2;
                                                        a(e)
                                                    }
                                                }
                                                baidu.preventDefault(f)
                                            })
                                        });
                                        baidu.on("carefield_set", "click", function(e) {
                                            var d = "10031" == T.string.encodeHTML(decodeURIComponent(T.url.getQueryValue(window.location.href, "taskid") + T.url.getQueryValue(window.location.href, "keyword")));
                                            if (!d) {
                                                a()
                                            } else {
                                                a(1, d)
                                            }
                                            baidu.preventDefault(e)
                                        });
                                        function a() {
                                            var f = arguments.length ? "show=" + arguments[0] + "&" : "";
                                            var d = "index";
                                            var e = arguments.length ? arguments[1] : false;
                                            e && ( d = "zt");
                                            pop.show("设定关注领域", {
                                                url : "/browse?tn=pop&" + f + "fr=" + d + "&t=" + (new Date()).getTime(),
                                                width : 518,
                                                height : e ? 330 : 680
                                            })
                                        }
                                        IknowRank.init()
                                    });
                                    var IknowRank = (function() {
                                        function c() {
                                            if (!G("no_category")) {
                                                baidu.sio.callByServer("/ucenter/api/uccategoryrank?t=" + (new Date()).getTime(), "IknowRank.data")
                                            }
                                        }

                                        function a(g) {
                                            if (!g) {
                                                return
                                            }
                                            var f = g.rank;
                                            for (var d = 0; d < f.length; d++) {
                                                var e = G("rank_" + f[d].cid);
                                                if (e) {
                                                    b(e, f[d].rank)
                                                }
                                            }
                                        }

                                        function b(h, f) {
                                            var g = parseInt(f);
                                            var k = ["0", "-27", "-54", "-81", "-200"];
                                            var d = [5, 20, 50, 100];
                                            if (g == 0) {
                                                h.innerHTML = "更多参与回答，您的个人排名会出现在这里";
                                                return
                                            }
                                            for (var e = 0; e < d.length; e++) {
                                                if (g <= d[e]) {
                                                    var j = k[e] + "px";
                                                    break
                                                }
                                                var j = k[k.length - 1] + "px"
                                            }
                                            h.style.backgroundPosition = "100% " + j;
                                            h.innerHTML = "回答排名：" + f;
                                            h.title = "回答排名"
                                        }
                                        return {
                                            data : a,
                                            init : c
                                        }
                                    })();
                                </script>

                                <div id="center-bottom-ad" class="ad1">
                                    <script type="text/javascript">
                                        BaiduAdsDisplay(94);
                                    </script>
                                </div>
                                <div class="rc-block2 rc-block2-blue baike-word">
                                    <b class="tl"></b><b class="tr"></b>
                                    <div class="outer">
                                        <div class="inner">
                                            <div class="hd">
                                                <h3><a href="http://zhidao.baidu.com/s/open" target="_blank">百度知道开放平台</a></h3>
                                                <a class="more" href="http://zhidao.baidu.com/s/open" target="_blank">更多</a>
                                            </div>
                                            <div class="bd">
                                                <style>
                                                    .home-open .intro {
                                                        margin: 5px 5px 21px 0;
                                                        font-size: 12px;
                                                    }
                                                    .home-open .open-item-wrap {
                                                        display: inline-block;
                                                        margin: 0 0 20px 10px;
                                                        width: 245px;
                                                        *float: left;
                                                        *display: inline;
                                                    }
                                                    .home-open .open-item-wrap .l-img {
                                                        width: 47px;
                                                        height: 47px;
                                                        border: none;
                                                        margin: 0;
                                                    }
                                                    .home-open .open-item-wrap .l-img a {
                                                        width: 47px;
                                                        height: 48px;
                                                        line-height: 47px;
                                                    }
                                                    .home-open .open-item-wrap .l-img a img {
                                                        width: 47px;
                                                        height: 47px;
                                                        vertical-align: middle;
                                                        position: static;
                                                    }
                                                    .home-open .open-item-wrap .r-wrap {
                                                        margin: 0 0 0 10px;
                                                        width: 185px;
                                                    }
                                                    .home-open .open-item-wrap .r-wrap h4 {
                                                        margin: 4px 0 2px 0;
                                                    }
                                                    .home-open .open-item-wrap .r-wrap .r-content {
                                                        font-size: 12px;
                                                    }
                                                    .home-open .right-item {
                                                        margin-left: 30px;
                                                    }
                                                    .home-open .more-open {
                                                        margin: 12px 0 20px 0;
                                                        font-size: 12px;
                                                    }
                                                    .home-open .more-open a {
                                                        margin-right: 15px;
                                                        font-weight: bold;
                                                    }
                                                </style>
                                                <div class="baikeForIknow home-open">
                                                    <h4><a href="http://zhidao.baidu.com/qiye" target="_blank">企业平台</a></h4>
                                                    <p class="intro">
                                                        百度知道企业平台，为企业量身打造的最精准问答营销平台。帮助企业实现高效网络客服，精准问答营销，灵敏数据监控等收益。众多知名企业已经加盟。<a alog-alias="qiye-apply-hz" href="http://zhidao.baidu.com/qiye" target="_blank" title="申请合作">申请合作</a>
                                                    </p>

                                                    <div alog-group="qiye-title" class="open-item-wrap">
                                                        <div class="home-open-item l-img">
                                                            <a href="http://zhidao.baidu.com/c/lenovo/" target="_blank"> <img src="http://hiphotos.baidu.com/openiknow/pic/item/29381f30c6bd4d07a8018e5c.jpg"> </a>
                                                        </div>
                                                        <div class="home-open-item r-wrap">
                                                            <h4><a href="http://zhidao.baidu.com/c/lenovo/" target="_blank">联想企业平台</a></h4>
                                                            <div class="r-content">
                                                                已为三千万用户提供官方权威解答
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div alog-group="qiye-title" class="open-item-wrap">
                                                        <div class="home-open-item l-img">
                                                            <a href="http://zhidao.baidu.com/c/samsung/" target="_blank"> <img src="http://hiphotos.baidu.com/baidu/pic/item/b17eca8065380cd7d009bf71a144ad3459828112.jpg"> </a>
                                                        </div>
                                                        <div class="home-open-item r-wrap">
                                                            <h4><a href="http://zhidao.baidu.com/c/samsung/" target="_blank">三星数字服务平台</a></h4>
                                                            <div class="r-content">
                                                                三星最专业的官方网络服务平台
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div alog-group="qiye-title" class="open-item-wrap">
                                                        <div class="home-open-item l-img">
                                                            <a href="http://zhidao.baidu.com/c/xiaomi/" target="_blank"> <img src="http://hiphotos.baidu.com/openiknow/pic/item/728da97725914685b151b946.jpg"> </a>
                                                        </div>
                                                        <div class="home-open-item r-wrap">
                                                            <h4><a href="http://zhidao.baidu.com/c/xiaomi/" target="_blank">小米企业平台</a></h4>
                                                            <div class="r-content">
                                                                数码界新宠问答营销新通路
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div alog-group="qiye-title" class="open-item-wrap">
                                                        <div class="home-open-item l-img">
                                                            <a href="http://zhidao.baidu.com/c/meiling" target="_blank"> <img src="http://hiphotos.baidu.com/openiknow/pic/item/500fd9f9d20733f1252df2b1.jpg"> </a>
                                                        </div>
                                                        <div class="home-open-item r-wrap">
                                                            <h4><a href="http://zhidao.baidu.com/c/meiling" target="_blank">美菱企业平台</a></h4>
                                                            <div class="r-content">
                                                                制冷行业领先者
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="line"></div>
                                                    <div class="more-open">
                                                        更多合作模式:&nbsp;&nbsp;
                                                        <a href="http://open.zhidao.baidu.com/gov/" target="_blank">政务问答平台</a>
                                                        <a href="http://open.zhidao.baidu.com/api/" target="_blank">API合作</a>
                                                        <a href="http://open.zhidao.baidu.com/channel/" target="_blank">频道合作</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <b class="bl"></b><b class="br"></b>
                                </div>
                            </div>
                        </div>
                        <div class="l-aside">
                            <div class="rc-block2 qclist-box">
                                <b class="tl"></b><b class="tr"></b>
                                <div class="outer">
                                    <div class="inner">
                                        <div class="hd">
                                            <h3><a href="/browse/" target="_blank">问题分类</a></h3>
                                        </div>
                                        <div class="bd">
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/74" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">电脑/网络</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/1063" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">电脑装机</a>
                                                    <a href="/browse/86" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">硬件</a>
                                                    <a href="/browse/1069" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">软件</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/92" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">反病毒</a>
                                                    <a href="/browse/88" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">互联网</a>
                                                    <a href="/browse/767" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">百度知道</a>
                                                    <a href="/browse/74" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/80" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">生活</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/149" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">服装/首饰</a>
                                                    <a href="/browse/147" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">美容/塑身</a>
                                                    <a href="/browse/148" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">美食/烹饪</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/155" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">购车养车</a>
                                                    <a href="/browse/158" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">交通出行</a>
                                                    <a href="/browse/152" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">购物</a>
                                                    <a href="/browse/80" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/79" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">医疗健康</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/790" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">内科</a>
                                                    <a href="/browse/791" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">外科</a>
                                                    <a href="/browse/792" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">妇产科</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/793" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">儿科</a>
                                                    <a href="/browse/795" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">五官科</a>
                                                    <a href="/browse/146" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">人体常识</a>
                                                    <a href="/browse/79" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/78" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">体育/运动</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/123" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">足球</a>
                                                    <a href="/browse/124" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">篮球</a>
                                                    <a href="/browse/126" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">赛车/F1</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/134" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">健身</a>
                                                    <a href="/browse/135" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">运动用品</a>
                                                    <a href="/browse/131" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">武术搏击</a>
                                                    <a href="/browse/78" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/95" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">电子数码</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/839" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">手机购买</a>
                                                    <a href="/browse/1040" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">手机使用</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/843" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">照相机/摄像机</a>
                                                    <a href="/browse/879" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">MP4/MP3</a>
                                                    <a href="/browse/95" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/82" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">商业/理财</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/772" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">股票</a>
                                                    <a href="/browse/184" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">财务税务</a>
                                                    <a href="/browse/786" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">银行业务</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/182" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">创业投资</a>
                                                    <a href="/browse/183" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">贸易</a>
                                                    <a href="/browse/164" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">个人理财</a>
                                                    <a href="/browse/82" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/83" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">教育/科学</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/1092" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">升学入学</a>
                                                    <a href="/browse/197" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">学习帮助</a>
                                                    <a href="/browse/1093" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">职业教育</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/951" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">英语考试</a>
                                                    <a href="/browse/189" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">出国/留学</a>
                                                    <a href="/browse/202" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">理工学科</a>
                                                    <a href="/browse/83" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/84" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">社会民生</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/209" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">法律</a>
                                                    <a href="/browse/1095" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">公务办理</a>
                                                    <a href="/browse/973" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">时事政治</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/208" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">宗教</a>
                                                    <a href="/browse/177" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">求职就业</a>
                                                    <a href="/browse/84" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/85" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">文化/艺术</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/1097" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">文学</a>
                                                    <a href="/browse/761" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">历史话题</a>
                                                    <a href="/browse/206" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">民俗传统</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/214" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">器乐/声乐</a>
                                                    <a href="/browse/212" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">舞蹈</a>
                                                    <a href="/browse/213" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">书画美术</a>
                                                    <a href="/browse/85" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/77" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">游戏</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/111" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">网络游戏</a>
                                                    <a href="/browse/112" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">单机游戏</a>
                                                    <a href="/browse/113" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">电视游戏</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/114" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">手机游戏</a>
                                                    <a href="/browse/118" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">小游戏</a>
                                                    <a href="/browse/77" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/1031" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">娱乐休闲</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/99" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">音乐</a>
                                                    <a href="/browse/96" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">电影</a>
                                                    <a href="/browse/97" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">电视</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/100" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">动漫</a>
                                                    <a href="/browse/101" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">星座/运势</a>
                                                    <a href="/browse/151" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">宠物</a>
                                                    <a href="/browse/1031" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/81" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">烦恼</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/171" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">恋爱</a>
                                                    <a href="/browse/172" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">夫妻</a>
                                                    <a href="/browse/173" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">家庭关系</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/176" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">校园生活</a>
                                                    <a href="/browse/180" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">情感情绪</a>
                                                    <a href="/browse/167" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">交友技巧</a>
                                                    <a href="/browse/81" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/1101" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">资源共享</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/1035" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">视频共享</a>
                                                    <a href="/browse/1102" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">音频/歌曲共享</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/763" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">软件共享</a>
                                                    <a href="/browse/196" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">文档/报告共享</a>
                                                    <a href="/browse/1101" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                            <dl alog-group="hm-cate" class="qclist">
                                                <dt>
                                                    <a href="/browse/1" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">地区</a>
                                                </dt>
                                                <dd>
                                                    <a href="/browse/220" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">北京</a>
                                                    <a href="/browse/240" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">上海</a>
                                                </dd>
                                                <dd>
                                                    <a href="/browse/246" onclick="log.nslog(this.href, 213, {rank: '2', group: '6'})">山东</a>
                                                    <a href="/browse/1" onclick="log.nslog(this.href, 213, {rank: '1', group: '6'})">...</a>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <b class="bl"></b><b class="br"></b>
                            </div>
                            <div class="left-bottom-ad-wrapper">
                                <div id="left-bottom-ad">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="l-extend">
                            <div class="ad2">
                                <a alog-action="ad-banner" href="http://zhidao.baidu.com/s/iknowAPP/index.html" target="_blank" onMouseDown="return rc('b2')" onclick="log.nslog(this.href,218)"> <img width="183" src="http://www.baidu.com/search/zhidao/tuiguang/183_39.jpg " alt="玩手机知道app，赢ipad大奖" > </a>
                            </div>

                            <div class="ad2">
                                <a alog-action="ad-banner" href="http://jingyan.baidu.com/z/2012gg/index.html" target="_blank" onMouseDown="return rc('b2')" onclick="log.nslog(this.href,218)"> <img width="183" src="http://jingyan.baidu.com/z/2012gg/img/183_39.jpg " alt="从相亲开始相爱" > </a>
                            </div>

                            <div class="ad2">
                                <a alog-action="ad-banner" href="http://zhidao.baidu.com/utask/info?tid=71" target="_blank" onMouseDown="return rc('b2')" onclick="log.nslog(this.href,218)"> <img width="183" src="http://img.baidu.com/img/iknow/daren_183_39.jpg" alt="知识“答”人行动" > </a>
                            </div>

                            <style type="text/css">
.brand .hd {display:inline-block; width:160px;}
.brand .hd h3 a {float:none;}
.brand .bd {display:inline-block;}
.brand .bd .brand-page-wrap {height:220px; overflow:hidden; margin: 5px 0; background:#F1F1F1; width:157px; height:208px;}
.brand .bd ul { display:inline-block; padding:2px; width:153px;}
.brand .bd li { background:none; float:left; margin:0; padding:0;}
.brand .bd li a {border:1px solid #F1F1F1; display:inline-block;}
.brand .bd li a:hover {border-color:#6FB90F;}
.brand .bd li img {margin:0; padding:1px;}
.brand .brand-pager {text-align:center;cursor:defazult;}
.brand .brand-pager a { vertical-align:middle; cursor:pointer; display:inline-block; background:url("http://img.baidu.com/img/iknow/2012mailuo/images/roll-pager.gif") -20px -20px; height:6px; width:7px; margin:0 2px; overflow:hidden;}
.brand .brand-pager .brand-prev {background-position: 0 0; height:16px; width:16px; margin-right:4px; _height:17px;}
.brand .brand-pager .brand-current {background-position: 0 -20px; height:6px; width:7px;}
.brand .brand-pager .brand-next {background-position: -20px 0; height:16px; width:16px; margin-left:4px; _height:17px;}
                            </style>

                            <div class="mod box3 brand">
                                <div class="mod-outer">

                                    <div class="hd">
                                        <h3><a href="http://zhidao.baidu.com/qiye" target="_blank">优质企业平台</a></h3>
                                        <a href="http://open.zhidao.baidu.com/html/qiye/intro.html" target="_blank">更多</a>
                                    </div>

                                    <div class="bd">
                                        <p class="intro">
                                            企业官方人员在线服务，为网友提供最权威专业的答案。
                                        </p>
                                        <div alog-alias="#" class="brand-page-wrap" id="brand-page-wrap"></div>
                                    </div>

                                </div>
                            </div>

                            
                            <div class="ra-block1 star">
                                <div class="outer">
                                    <div class="hd">
                                        <h3>本周知道之星</h3>
                                        <a class="more" href="http://zhidao.baidu.com/s/star/list.html" onclick="log.nslog(this.href, 219, {pos: 'history'})" target="_blank">历届之星</a>
                                    </div>
                                    <div class="bd">
                                        <img style="float:left;width:48px;height:48px;margin-right:5px;margin-bottom:5px;*margin-bottom:0;" src="http://img.baidu.com/img/iknow/star/zx306-48.jpg" />
                                        <div style="float:left;">
                                            <h4><a style="background:url(http://img.baidu.com/img/iknow/star/zdzx.gif) left center no-repeat;padding-left:18px;" href="http://zhidao.baidu.com/s/star/2012-10-25/1358519289.html" onclick="log.nslog(this.href, 219, {pos: 'username'})" target="_blank">最后天使毁灭</a></h4>
                                            <p style="margin-top:5px;">
                                                天下兵马大都督 <span style="display:none"> 二十级 </span>
                                            </p>
                                        </div>
                                        <div style="clear:both;zoom:1">
                                            <!---->
                                        </div>
                                        <p>
                                            精通领域：<a href="http://zhidao.baidu.com/browse/1031?lm=2" onclick="log.nslog(this.href, 219, {pos: 'area'})" target="_blank">娱乐休闲</a><a href="http://zhidao.baidu.com/browse/85?lm=2" onclick="log.nslog(this.href, 219, {pos: 'area'})" target="_blank">文化艺术</a>
                                        </p>
                                        <p style="font-family:宋体;">
                                            知道访谈：<a href="http://hi.baidu.com/zhishibole/item/46efd11437a258f965eabfbb" target="_blank">306届知道之星访谈</a>
                                        </p>
                                        <p class="list-title">
                                            精选回答：
                                        </p>
                                        <ul>
                                            <li>
                                                <a href="http://zhidao.baidu.com/question/473079712.html?quesup2" title="世界海战能力最强的国家？" onclick="log.nslog(this.href, 219, {pos: 'ans_list'})" target="_blank">目前实力对比前三强是...</a>
                                            </li>
                                            <li>
                                                <a href="http://zhidao.baidu.com/question/483597460.html?oldq=1" title="（）（）无声 独占（）头 求答案？" onclick="log.nslog(this.href, 219, {pos: 'ans_list'})" target="_blank">【鸦雀】无声...</a>
                                            </li>
                                            <li>
                                                <a href="http://zhidao.baidu.com/question/483546862.html?oldq=1" title="这个帅哥出自哪部动漫？" onclick="log.nslog(this.href, 219, {pos: 'ans_list'})" target="_blank">出自“新选组异闻录”...</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ra-block1 star">
                                <div class="outer">
                                    <div class="hd">
                                        <h3>本周推荐专家</h3>
                                        <a class="more" href="http://zhidao.baidu.com/expert/" onclick="log.nslog(this.href, 220, {pos: 'history', group: '6'})" target="_blank">更多</a>
                                    </div>
                                    <div class="bd">
                                        <h4><a href="http://www.baidu.com/p/专业仲裁员?from=zhidao" onclick="log.nslog(this.href, 220, {pos: 'username', group: '6'})" target="_blank">劳动法咨询师韩飞</a></h4>
                                        <p>
                                            精通领域：劳动争议
                                        </p>
                                        <p>
                                            回答数：18893
                                        </p>
                                        <p>
                                            被采纳率：32%
                                        </p>
                                        <p class="list-title">
                                            精选回答：
                                        </p>
                                        <ul>
                                            <li>
                                                <a href="http://zhidao.baidu.com/question/485838967.html" onclick="log.nslog(this.href, 220, {pos: 'ans_list', group: '6'})" title="上海松下老员工辞职公司给补偿吗?" target="_blank">上海松下老员工辞职公司...</a>
                                            </li>
                                            <li>
                                                <a href="http://zhidao.baidu.com/question/484644591.html" onclick="log.nslog(this.href, 220, {pos: 'ans_list', group: '6'})" title="《劳动法》规定被辞退，我的工资应该怎么算？" target="_blank">《劳动法》规定被辞退，...</a>
                                            </li>
                                            <li>
                                                <a href="http://zhidao.baidu.com/question/485425634.html" onclick="log.nslog(this.href, 220, {pos: 'ans_list', group: '6'})" title="这样的合同合法吗？" target="_blank">这样的合同合法吗？</a>
                                            </li>
                                        </ul>
                                        <a href="#" class="ask-to-expert" onclick="log.nslog(this.href, 220, {pos: 'ask_btn', group: '6'});FixedAsk.init('专业仲裁员');return false;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ra-block1 box3 rank">
                                <div class="outer">
                                    <div class="hd">
                                        <h3>周积分上升排行</h3>
                                        <a class="more" href="http://zhidao.baidu.com/upf/?uscore&fr=idup" onclick="log.nslog(this.href, 221, {pos: 'more', group: '6'})" target="_blank">更多</a>
                                    </div>
                                    <div class="bd">
                                        <ul>
                                            <li class="no1">
                                                <span>17214</span><a href="http://www.baidu.com/p/36557832?from=zhidao" onclick="log.nslog(this.href, 221, {pos: 'username', group: '6'})" target="_blank">36557832</a>
                                            </li>
                                            <li class="no2">
                                                <span>14594</span><a href="http://www.baidu.com/p/风亦夜晗?from=zhidao" onclick="log.nslog(this.href, 221, {pos: 'username', group: '6'})" target="_blank">风亦夜晗</a>
                                            </li>
                                            <li class="no3">
                                                <span>13077</span><a href="http://www.baidu.com/p/雨曳风潇?from=zhidao" onclick="log.nslog(this.href, 221, {pos: 'username', group: '6'})" target="_blank">雨曳风潇</a>
                                            </li>
                                            <li class="no4">
                                                <span>12924</span><a href="http://www.baidu.com/p/我不是他舅?from=zhidao" onclick="log.nslog(this.href, 221, {pos: 'username', group: '6'})" target="_blank">我不是他舅</a>
                                            </li>
                                            <li class="no5">
                                                <span>11684</span><a href="http://www.baidu.com/p/zx001z?from=zhidao" onclick="log.nslog(this.href, 221, {pos: 'username', group: '6'})" target="_blank">zx001z</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ra-block1 box3 rank">
                                <div class="outer">
                                    <div class="hd">
                                        <h3>总积分排行</h3>
                                        <a class="more" href="http://zhidao.baidu.com/upf/?tscore&fr=idtt" onclick="log.nslog(this.href, 222, {pos: 'more', group: '6'})" target="_blank">更多</a>
                                    </div>
                                    <div class="bd">
                                        <ul>
                                            <li class="no1">
                                                <span>9550807</span><a href="http://www.baidu.com/p/12345A帮助?from=zhidao" onclick="log.nslog(this.href, 222, {pos: 'username', group: '6'})" target="_blank">12345A帮助</a>
                                            </li>
                                            <li class="no2">
                                                <span>5391409</span><a href="http://www.baidu.com/p/宿命的猫?from=zhidao" onclick="log.nslog(this.href, 222, {pos: 'username', group: '6'})" target="_blank">宿命的猫</a>
                                            </li>
                                            <li class="no3">
                                                <span>5193961</span><a href="http://www.baidu.com/p/吴田田?from=zhidao" onclick="log.nslog(this.href, 222, {pos: 'username', group: '6'})" target="_blank">吴田田</a>
                                            </li>
                                            <li class="no4">
                                                <span>4656461</span><a href="http://www.baidu.com/p/我不是他舅?from=zhidao" onclick="log.nslog(this.href, 222, {pos: 'username', group: '6'})" target="_blank">我不是他舅</a>
                                            </li>
                                            <li class="no5">
                                                <span>3362581</span><a href="http://www.baidu.com/p/妙酒?from=zhidao" onclick="log.nslog(this.href, 222, {pos: 'username', group: '6'})" target="_blank">妙酒</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        