<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("test","header"); ?>

<body>
<div class="header_wrap">
    <div class="header_top">
        <div class="center">
            <a href="https://www.3dmgame.com" class="head_top_le">
                <i></i>
                <span>3dmgame.com</span>
            </a>
            <div class="head_top_rt" id="my_user_top">
                <img src="https://www.3dmgame.com/index/images/ioc-ren.png">
                <a href="javascript:void(0);" class="login" onclick="openlogin()">登录</a>
                <a href="javascript:void(0);" class="enroll" onclick="openregister()">注册</a>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="center">
            <a href="https://www.3dmgame.com"><img src="https://www.3dmgame.com/index/images/logo.png" class="login"></a>
            <div class="search">
                <form action="https://so.3dmgame.com/" method="get" target="_blank" autocomplete="off" id="bdcs">
                    <input type="text" onblur="if (this.value=='') this.value='我的世界'" value="我的世界" this.style.color="#000000" onfocus="if (this.value!='') this.value=''" name="keyword" />
                    <input type="hidden" name="subsearch" value="1" />
                    <input type="hidden" name="type" value="1" />
                    <button type="submit" class="but"><i></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="center">
            <ul>
                <?php $n=1;if(is_array($category)) foreach($category AS $r) { ?>
                <?php if($r[isside]==1) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?><span class="hide"></span></a></li>
                <?php } ?>
                <?php $n++;}unset($n); ?>
            </ul>
            <ol>
                <?php $n=1;if(is_array($category)) foreach($category AS $k=>$r) { ?>
                <?php if($r[isside]==0) { ?>
                <li><a href="<?php echo $r['url'];?>" <?php if($k==0) { ?> class="as" <?php } ?>><?php echo $r['catname'];?></a></li>
                <?php } ?>
                <?php $n++;}unset($n); ?>
            </ol>
        </div>
    </div>
</div>

<div class="content">
    <div id="index_top_tonglan" class="tonglona_1">
        <script>
            (function() {
                var s = "_" + Math.random().toString(36).slice(2);
                document.write('<div id="' + s + '"></div>');
                (window.slotbydup=window.slotbydup || []).push({
                    id: '5866857',
                    container: s,
                    size: '1200,90',
                    display: 'inlay-fix'
                });
            })();
        </script>
        <i style="width:26px;height:15px;position:absolute;left:0;bottom:0;background:url(https://www.3dmgame.com/page/images/icon_ad.png);"></i>
    </div>
    <div class="Min_1">
        <?php $n=1;if(is_array($type)) foreach($type AS $k=>$r) { ?>
        <div class="lis lis<?php echo $k;?>">
            <p><?php echo $r;?></p>
            <?php $n=1;if(is_array($gametype)) foreach($gametype AS $kk=>$rr) { ?>
            <a href="<?php echo $rr['url'];?>"  target="_blank"  <?php if($rr[color]==1) { ?> class="red" <?php } ?> ><?php echo $rr['title'];?><i></i></a>
            <?php $n++;}unset($n); ?>

        </div>
        <?php $n++;}unset($n); ?>

    </div>
    <div class="Min_2">
        <div class="Min2_top">
            <a href="https://www.3dmgame.com/news/201809/3744983.html" target="_blank"  >正版促销</a>
            <a href="https://www.3dmgame.com/games/zq/" target="_blank"  >热门专区</a>
            <a href="https://www.3dmgame.com/phb.html" target="_blank"  >游戏排行榜</a>
            <a href="https://dl.3dmgame.com/patch/" target="_blank"  >补丁工具</a>
            <a href="https://www.3dmgame.com/hanhua/" target="_blank"  >3DM汉化</a>
            <a href="https://www.3dmgame.com/tag/" target="_blank"  >标签合集</a>
            <a href="https://www.3dmgame.com/original/yzht/" target="_blank"  >一周话题</a>
            <a href="https://shouyou.3dmgame.com/hanhua/" target="_blank"  >汉化手游</a>
            <a href="https://shouyou.3dmgame.com/original_28_1/" target="_blank"  >手游周推</a>
            <a href="https://ol.3dmgame.com/test/" target="_blank"  >网游开测</a>
            <a href="https://yeyou.3dmgame.com/h5/" target="_blank"  >H5游戏</a>
        </div>
        <div class="tonglona_2">
            <script>
                (function() {
                    var s = "_" + Math.random().toString(36).slice(2);
                    document.write('<div id="' + s + '"></div>');
                    (window.slotbydup=window.slotbydup || []).push({
                        id: '5866584',
                        container: s,
                        size: '1160,90',
                        display: 'inlay-fix'
                    });
                })();
            </script>
            <i style="width:26px;height:15px;position:absolute;left:0;bottom:0;background:url(https://www.3dmgame.com/page/images/icon_ad.png);"></i>
        </div>
        <div class="Min2_L">
            <div class="hdwrap">
                <div class="ban" id="hdlist">
                    <div class="ban2" id="ban_pic1">
                        <div class="lis"></div>
                        <ul>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li>
                                <a href="<?php echo $r['url'];?>"  target="_blank"   ><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" /></a>
                                <div class="bt">
                                    <a href="<?php echo $r['url'];?>"  target="_blank"   ><?php echo $r['title'];?></a>
                                </div>
                            </li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <div class="min_pic">
                        <div class="num clearfix" id="ban_num1">
                            <ul>
                                <li>
                                    <a href="javascript:;"><img src="https://img.3dmgame.com/uploads/images/thumbnews/20181204/1543916437_234726.jpg" /></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="https://img.3dmgame.com/uploads/images/thumbnews/20181204/1543916494_809579.jpg" /></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="https://img.3dmgame.com/uploads/images/thumbnews/20181204/1543916563_235432.jpg" /></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="https://img.3dmgame.com/uploads/images/thumbnews/20181204/1543916614_971514.jpg" /></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="https://img.3dmgame.com/uploads/images/thumbnews/20181204/1543908253_906501.jpg" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zzswrap">
                <div class="QZ_title">
                    <div class="bt">
                        <span><i class="ico1"></i>涨姿势</span>
                        <a href="https://www.3dmgame.com/bagua/" target="_blank" class="mor">更多<i></i></a>
                    </div>
                </div>
                <div class="list_a">
                    <a href="https://www.3dmgame.com/bagua/612.html" target="_blank" class="lis">
                        <div class="bq">
                            <i></i>
                            <span>人在囧图</span>
                        </div>
                        <div class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181202/1543706336_555325.jpg" alt="周一内涵囧图云飞系列 美女内裤你也敢提这是在找死"></div>
                        <div class="bt">周一内涵囧图云飞系列 美女内裤你也敢提这是在找死</div>
                    </a>
                    <a href="https://www.3dmgame.com/bagua/618.html" target="_blank" class="lis">
                        <div class="bq">
                            <i></i>
                            <span>观察者联盟</span>
                        </div>
                        <div class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181203/1543829759_472302.jpeg" alt="盘点影视剧中那些身残志坚的角色！"></div>
                        <div class="bt">盘点影视剧中那些身残志坚的角色！</div>
                    </a>
                </div>
                <div class="list_b">
                    <ul>
                        <li><i></i><a href="https://www.3dmgame.com/bagua/625.html" target="_blank">还有这种操作？医院手术中突然涨价 患者忍痛说出银行密码</a><span>12-04</span></li>
                        <li><i></i><a href="https://www.3dmgame.com/bagua/624.html" target="_blank">定档大年初一的《流浪地球》 能否开启中国科幻元年</a><span>12-04</span></li>
                        <li><i></i><a href="https://www.3dmgame.com/bagua/623.html" target="_blank">西安一高校挂禁烟表情包：“吸烟找不到对象”</a><span>12-04</span></li>
                        <li><i></i><a href="https://www.3dmgame.com/bagua/622.html" target="_blank">我要打10个！“最佳人气歌手”奖薛之谦一人battle9人</a><span>12-04</span></li>
                    </ul>
                </div>
            </div>
            <div class="tpwrap">
                <div class="QZ_title">
                    <div class="bt">
                        <span><i class="ico2"></i>争议投票</span>
                        <a href="https://www.3dmgame.com/original_41_1/" target="_blank" class="mor">更多<i></i></a>
                    </div>
                </div>
                <div class="Tptop">
                    <input type="hidden" id="voteid" value="23" />
                    <a href="https://www.3dmgame.com/vote/23.html" target="_blank" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbvotefirst/20181127/1543317894_402233.jpg" alt="你如何看待《星际公民》？"></a>
                    <a href="https://www.3dmgame.com/vote/23.html" target="_blank" class="bt">你如何看待《星际公民》？</a>
                    <div class="miaoshu">
                        历史上众筹金额最高的游戏《星际公民》在你眼中是怎样的？是无良画饼卖船骗钱？还是物有所值科幻盛宴？


                        本周是《星际公民》免费周，所有玩家在官网注册并登录后均可免费尝试这款游戏。





                        一般来说，我在投票专栏的文章介绍某个项目时都会分正反两面来展开，这篇也不例外。但</div>
                </div>
                <div class="Tplist">
                    <ul>
                        <li>
                            <div class="Tp_L">
                                <div class="lin">
                                    <div class="box"><span style="width:76%"></span></div>
                                    <div class="num">605</div>
                                </div>
                                <div class="bt">画饼骗钱，好多人都被骗了</div>
                            </div>
                            <div class="Tp_R" data-id="67">投票</div>
                        </li>
                        <li>
                            <div class="Tp_L">
                                <div class="lin">
                                    <div class="box"><span style="width:23%"></span></div>
                                    <div class="num">176</div>
                                </div>
                                <div class="bt">这么多人支持必然有其理由</div>
                            </div>
                            <div class="Tp_R" data-id="68">投票</div>
                        </li>
                        <li>
                            <div class="Tp_L">
                                <div class="lin">
                                    <div class="box"><span style="width:3%"></span></div>
                                    <div class="num">16</div>
                                </div>
                                <div class="bt">我捐了钱，但我后悔了</div>
                            </div>
                            <div class="Tp_R" data-id="69">投票</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="hard_wrap">
                <div class="QZ_title">
                    <div class="bt">
                        <span><i class="ico3"></i>硬件设备</span>
                        <a href="https://3c.3dmgame.com/" target="_blank" class="mor">更多<i></i></a>
                    </div>
                </div>
                <div class="lia_a">
                    <a href="https://3c.3dmgame.com/show-14-8986-1.html" target="_blank" class="lis">
                        <div class="img"><img class="lazy" data-original="https://3c.3dmgame.com/uploadfile/2018/1204/20181204095806402.jpg" alt="NVIDIA找来帮手务必改善光追"></div>
                        <div class="bt"><i></i>NVIDIA找来帮手务必改善光追</div>
                    </a>
                    <a href="https://3c.3dmgame.com/show-33-8983-1.html" target="_blank" class="lis">
                        <div class="img"><img class="lazy" data-original="https://3c.3dmgame.com/uploadfile/2018/1201/20181201082252351.jpg" alt="硬件双十二有啥看头？"></div>
                        <div class="bt"><i></i>硬件双十二有啥看头？</div>
                    </a>
                </div>
                <div class="lis_b">
                    <a href="https://3c.3dmgame.com/show-14-8986-1.html" target="_blank" class="lis">
                        <i></i>
                        <p>NVIDIA找来帮手:务必改善《战地5》光追的画面效果</p>
                        <span>12-04</span>
                    </a>
                    <a href="https://3c.3dmgame.com/show-22-8987-1.html" target="_blank" class="lis">
                        <i></i>
                        <p>重狙下的清晰辨音 HyperX 阿尔法黑金版专业电竞耳机</p>
                        <span>12-04</span>
                    </a>
                    <a href="https://3c.3dmgame.com/show-14-8984-1.html" target="_blank" class="lis">
                        <i></i>
                        <p>《战地 5》实测数据新鲜出炉!DX12提升幅度感人!</p>
                        <span>12-03</span>
                    </a>
                </div>
            </div>
            <div class="review">
                <div class="QZ_title">
                    <div class="bt">
                        <span><i class="ico4"></i>游戏评测</span>
                        <a href="https://www.3dmgame.com/original_40_1/" target="_blank" class="mor">更多<i></i></a>
                    </div>
                </div>
                <div class="score_box_a">
                    <a href="https://shouyou.3dmgame.com/original/27992.html" target="_blank" class="Gm_info">
                        <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/img/2018/1203/1543807719243350_1.jpg" alt="《侍魂：胧月传说》评测：为你取回当年的那朵魔界之花"></div>
                        <div class="bt">《侍魂：胧月传说》评测：为你取回当年的那朵魔界之花</div>
                    </a>
                    <div class="Gm_score">
                        <div class="processingbar">
                            <i>8.0</i>
                        </div>
                    </div>
                </div>
                <div class="score_list">
                    <div class="lis">
                        <a href="https://www.3dmgame.com/score/3741984.html" target="_blank" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbpcfirst/20181201/1543659143_823903_1.jpg" alt="《暗黑血统：狂怒》评测：在死亡后的狂怒重生"></a>
                        <a href="https://www.3dmgame.com/score/3741984.html" target="_blank" class="txt">
                            <p>《暗黑血统：狂怒》评测：在死亡后的狂怒重生</p>
                        </a>
                        <div class="score_box_b">
                            <div class="score_txt">
                                <span>7.3</span>
                                <i></i>
                            </div>
                            <div class="linbox">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="lis">
                        <a href="https://www.3dmgame.com/score/3741983.html" target="_blank" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbpcfirst/20181201/1543627570_731800_1.jpg" alt="《方舟：生存进化》NS版评测：可以玩，但没必要"></a>
                        <a href="https://www.3dmgame.com/score/3741983.html" target="_blank" class="txt">
                            <p>《方舟：生存进化》NS版评测：可以玩，但没必要</p>
                        </a>
                        <div class="score_box_b">
                            <div class="score_txt">
                                <span>5.0</span>
                                <i></i>
                            </div>
                            <div class="linbox">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="lis">
                        <a href="https://www.3dmgame.com/score/3741982.html" target="_blank" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbpcfirst/20181129/1543457539_572556_1.png" alt="《贪婪洞窟2》评测：向死而生的无尽深渊"></a>
                        <a href="https://www.3dmgame.com/score/3741982.html" target="_blank" class="txt">
                            <p>《贪婪洞窟2》评测：向死而生的无尽深渊</p>
                        </a>
                        <div class="score_box_b">
                            <div class="score_txt">
                                <span>8.1</span>
                                <i></i>
                            </div>
                            <div class="linbox">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="Min2_M">
            <div class="bt_wrap">
                <a href="https://www.3dmgame.com/news/201812/3750707.html" target="_blank" class="bt_a">马化腾接受采访：更欣赏仰望星空与脚踏实地</a>
                <div class="bt_b">
                    <a href="https://www.3dmgame.com/news/201812/3750709.html" target="_blank">打奶奶？《惊奇队长》新预告</a>
                    <span></span>
                    <a href="https://www.3dmgame.com/news/201812/3750715.html" target="_blank">《正当防卫4》IGN7.9分</a>
                </div>
                <a href="https://www.3dmgame.com/news/201812/3750705.html" target="_blank" class="bt_a">漫威拟拍首部华裔超级英雄电影 原型李小龙</a>
                <div class="bt_b">
                    <a href="https://www.3dmgame.com/news/201812/3750722.html" target="_blank">Switch被称为“国产黑科技”</a>
                    <span></span>
                    <a href="https://www.3dmgame.com/news/201812/3750737.html" target="_blank">网友请愿Tumblr取消禁令</a>
                </div>
            </div>

            <div class="Listwrap">
                <div class="lis" style="display: block">
                    <ul>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/news/201812/3750774.html" target="_blank"  >《死或生》霞全新重制手办欣赏 美人肌肤更加细腻</a>
                            <span>09:08</span>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/news/201812/3750770.html" target="_blank"  class="hot_newnews"  >《生化危机2：重制版》新演示 克莱尔大战暴君</a>
                            <span>08:47</span>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/news/201812/3750773.html" target="_blank"  >海王现身亲自推广《乐高DC超级反派》海王DLC</a>
                            <span>08:46</span>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/news/201812/3750772.html" target="_blank"  >韩国新修正案正在审议中 游戏代练或将判2年监禁</a>
                            <span>08:46</span>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/news/201812/3750771.html" target="_blank"  >美剧《老爸老妈浪漫史》将翻拍中国版</a>
                            <span>08:40</span>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/news/201812/3750769.html" target="_blank"  >雪莉只身探险《生化危机2重制版》新增全新孤儿院场景</a>
                            <span>07:20</span>
                        </li>
                    </ul><ul>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750768.html" target="_blank"  >TGA2018或将正式公布《古惑狼赛车重制版》</a>
                        <span>07:11</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750767.html" target="_blank"  class="hot_newnews"  >《生化危机2重制版》艾达王红色短裙视频亮相</a>
                        <span>06:53</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750766.html" target="_blank"  >Xbox总裁Phil解释为何微软依然将出席2019年E3展</a>
                        <span>05:57</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750765.html" target="_blank"  >Valve将Steam Link带到Raspberry Pi 3和3B+当中</a>
                        <span>05:55</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750764.html" target="_blank"  >《龙腾世纪4》将在本周TGA上公布 距离发行还很遥远</a>
                        <span>05:52</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750763.html" target="_blank"  >无DRM还有折扣！《闪回》重制版登陆GOG平台</a>
                        <span>05:51</span>
                    </li>
                </ul><ul>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750762.html" target="_blank"  class="hot_newnews"  >《全面战争：三国》基于引擎角色宣传片：女贼郑姜</a>
                        <span>05:47</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750761.html" target="_blank"  >备战次世代？育碧多款未公布游戏泄露</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750760.html" target="_blank"  >《血源2》会有吗？宫崎英高：我们深爱《血源》游戏</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750759.html" target="_blank"  >育碧U点将加入有效期 超过2年就无效了</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750758.html" target="_blank"  >《死亡搁浅》要成PS5游戏？柯南：离发售还很遥远</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750757.html" target="_blank"  >《战地5》负面消息缠身 EA股价半年来狂降44%</a>
                        <span>12-04</span>
                    </li>
                </ul><ul>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750756.html" target="_blank"  >性能两倍麒麟970：Imagination发布最强手机GPU</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750754.html" target="_blank"  >传微软开发新的浏览器 采用Chrome内核</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750753.html" target="_blank"  class="hot_newnews"  >B社的《辐射76》帆布袋值多少钱？万能的阿里告诉你</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/news/201812/15377.html" target="_blank"  >韩国最新法案审议 游戏代练将判2年监禁和十万罚款</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750752.html" target="_blank"  >回合制游戏新时代 《突变元年：伊甸之路》IGN7.9分 </a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750751.html" target="_blank"  >优酷前总裁涉经济问题 正配合警方调查</a>
                        <span>12-04</span>
                    </li>
                </ul></div><div class="lis"><ul>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750750.html" target="_blank"  >明年复出 FF音乐灵魂植松伸夫更新个人博客状态</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750749.html" target="_blank"  >温子仁：想拍一个非常吓人的恐怖片版《蝙蝠侠》</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750748.html" target="_blank"  class="hot_newnews"  >游戏晚报|汤不热新策致股价暴跌！首款V版游戏被攻破</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://3c.3dmgame.com/show-22-8987-1.html" target="_blank"  >重狙下清晰辨音 HyperX 阿尔法黑金版专业电竞耳机</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://3c.3dmgame.com/show-14-8986-1.html" target="_blank"  >NVIDIA找来帮手:务必改善《战地5》光追画面效果</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750746.html" target="_blank"  >马龙的太阳花 蜘蛛侠：平行宇宙最新“快出发”预告 </a>
                    <span>12-04</span>
                </li>
            </ul><ul>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750745.html" target="_blank"  class="hot_newnews"  >《刺客信条》之父新作将参加TGA 公布新的演示</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750743.html" target="_blank"  >最大80%优惠！索尼PS系年度获奖优秀游戏大优惠促销期间开启</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750733.html" target="_blank"  >Switch《死或生沙滩排球3：绯红》预告 红叶性感登场</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750742.html" target="_blank"  >策略游戏《大将军：罗马》加入世界奇迹 画面效果震撼</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750740.html" target="_blank"  >《新神雕侠侣》杨过小龙女剧照 神雕夫妇英气逼人</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750739.html" target="_blank"  >代号就是V！万代新推元祖高达诞生V计划主题可爱抱枕</a>
                    <span>12-04</span>
                </li>
            </ul><ul>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750738.html" target="_blank"  >国外美术设计师概念画 《银翼杀手2049》男女激情画面</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750737.html" target="_blank"  class="hot_newnews"  >呼吁Tumblr取消成人内容禁令 国外网友联名请愿</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750736.html" target="_blank"  >凄凉尘世！Avalanche科幻惊悚FPS《零世代》最新演示 </a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750735.html" target="_blank"  >中美贸易战暂停 AMD领衔、美国半导体公司股票普涨</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750734.html" target="_blank"  >变形金刚《大黄蜂》新海报 内地定档2019年1月4日 </a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750732.html" target="_blank"  class="hot_newnews"  >俄美女Cos《守望先锋》D.va 性感火辣靓丽甜美</a>
                    <span>12-04</span>
                </li>
            </ul><ul>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750731.html" target="_blank"  >估价6万刀！苹果1说明书乔布斯手写稿5日上架纽拍行</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750730.html" target="_blank"  >《武装突袭3》免费新更新发布 战争领主模式加入</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750728.html" target="_blank"  >火绒：微信勒索病毒感染用户超2万 还窃取支付宝密码 </a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750726.html" target="_blank"  >歌手陈羽凡被认定吸毒成瘾 被警方责令社区戒毒3年</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750724.html" target="_blank"  >70岁台湾大爷爆改自行车搭15部手机只玩宝可梦GO！</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750723.html" target="_blank"  >拍摄日期继续延后 《光环》剧集导演宣布离开剧组  </a>
                    <span>12-04</span>
                </li>
            </ul></div><div class="lis"><ul>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750722.html" target="_blank"  class="hot_newnews"  >电视台报道闹乌龙 任天堂Switch被称为“国产黑科技”</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750721.html" target="_blank"  >英伟达宣布开源PhysX A卡用户或将可以享受华丽特效</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750720.html" target="_blank"  >只有原装手柄大！索尼迷你PS主机发售外媒开封直击</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750712.html" target="_blank"  class="hot_newnews"  >《正当防卫4》明日发售价格昂贵 来3DM商店有优惠</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750719.html" target="_blank"  >五万粉丝请愿：请让《行尸走肉》弩哥的狗狗活着</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750718.html" target="_blank"  >《最后的神迹》重制版新预告片 高速移动躲避危险</a>
                    <span>12-04</span>
                </li>
            </ul><ul>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750717.html" target="_blank"  >可探测战斗力！《龙珠超布罗利》实体圆球赛亚人飞船</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750716.html" target="_blank"  >《刺客信条》交响诗将于2019年6月在全球六大城市上演</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750715.html" target="_blank"  class="hot_newnews"  >可以说就是前作的大型DLC！《正当防卫4》IGN7.9分</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750711.html" target="_blank"  >发出了咕咕咕的声音 《战地5》DLC上线前一天宣布延迟</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750710.html" target="_blank"  >重返战场 《幽灵行动：荒野》“特别行动3”即将发布</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750709.html" target="_blank"  class="hot_newnews"  >无限靠她逆转！漫威大片《惊奇队长》最新官方中文预告</a>
                    <span>12-04</span>
                </li>
            </ul><ul>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750708.html" target="_blank"  >惊了！微软被爆出正与PlayStation工作室展开深度交谈 </a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750707.html" target="_blank"  >马化腾：不太相信弯道超车，更欣赏仰望星空与脚踏实地</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750706.html" target="_blank"  >迪士尼新启动《玩具总动员》主题酒店或于2021年开张</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://ol.3dmgame.com/esports/10535.html" target="_blank"  >阿P又惹事了！欧洲多支战队起诉G2违规招募队员</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750705.html" target="_blank"  class="hot_newnews"  >漫威拟拍首部亚裔超级英雄电影《上气》 李小龙为原型</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750704.html" target="_blank"  >“汤不热”宣布永久禁止色情内容 母公司股价下跌</a>
                    <span>12-04</span>
                </li>
            </ul><ul>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750703.html" target="_blank"  >《超杀行尸走肉》销量惨淡 《收获日2》开发商面临破产</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750702.html" target="_blank"  >R星回应《大镖客OL》物价高：正式版做出平衡性调整</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750701.html" target="_blank"  >英伟达炫技！AI仅靠视频就能生成逼真游戏世界</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://ol.3dmgame.com/news/201812/15368.html" target="_blank"  >狩猎解禁！《最终幻想14》国服开放怪物猎人联动</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750700.html" target="_blank"  >仅需21.07G 《生化危机2：重制版》占用空间披露</a>
                    <span>12-04</span>
                </li>
                <li>
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750699.html" target="_blank"  >闹着玩儿呢？ 首款V加密游戏《都市巡警》已被攻破</a>
                    <span>12-04</span>
                </li>
            </ul>
            </div>
                <div class="tabbtn">
                    <span class="btn_L"></span>
                    <span class="point"></span>
                    <span class="btn_R"></span>
                </div>
            </div>

            <div class="hot-hg">
                <div class="QZ_title">
                    <div class="bt">
                        <span><i class="ico21"></i>热门回顾</span>
                        <a href="https://www.3dmgame.com/news/" target="_blank" class="mor">更多<i></i></a>
                    </div>
                </div>
                <ul>
                    <li class="selectpost">
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750602.html" target="_blank" class="bt selectarcpost">马蓉称被王宝强殴打并紧急送医 受伤急救照片曝光</a>
                        <a href="https://www.3dmgame.com/news/201812/3750602.html" target="_blank" class="cm">
                            <u></u>
                            <span class="selectarcnum">156</span>
                        </a>
                    </li>
                    <li class="selectpost">
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750660.html" target="_blank" class="bt selectarcpost">新版《神雕侠侣》全阵容海报 小龙女身上没仙气？</a>
                        <a href="https://www.3dmgame.com/news/201812/3750660.html" target="_blank" class="cm">
                            <u></u>
                            <span class="selectarcnum">117</span>
                        </a>
                    </li>
                    <li class="selectpost">
                        <i></i>
                        <a href="https://ol.3dmgame.com/news/201812/15354.html" target="_blank" class="bt selectarcpost">绝地求生玩家被封5个号怒喷蓝洞：我开透视也算挂？</a>
                        <a href="https://ol.3dmgame.com/news/201812/15354.html" target="_blank" class="cm">
                            <u></u>
                            <span class="selectarcnum">93</span>
                        </a>
                    </li>
                    <li class="selectpost">
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750707.html" target="_blank" class="bt selectarcpost">马化腾：不太相信弯道超车，更欣赏仰望星空与脚踏实地</a>
                        <a href="https://www.3dmgame.com/news/201812/3750707.html" target="_blank" class="cm">
                            <u></u>
                            <span class="selectarcnum">78</span>
                        </a>
                    </li>
                    <li class="selectpost">
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750593.html" target="_blank" class="bt selectarcpost">华为再发广告讽刺苹果手机：把iPhone手机给埋了？</a>
                        <a href="https://www.3dmgame.com/news/201812/3750593.html" target="_blank" class="cm">
                            <u></u>
                            <span class="selectarcnum">69</span>
                        </a>
                    </li>
                    <li class="selectpost">
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750608.html" target="_blank" class="bt selectarcpost">盘点2019年十大最值得期待的游戏新作</a>
                        <a href="https://www.3dmgame.com/news/201812/3750608.html" target="_blank" class="cm">
                            <u></u>
                            <span class="selectarcnum">62</span>
                        </a>
                    </li>
                </ul>
            </div>
            <script type="text/javascript" src="https://my.3dmgame.com/ct/js/commentlist.js"></script>
            <div class="YC-content">
                <div class="QZ_title">
                    <div class="bt">
                        <span><i class="ico6"></i>原创内容</span>
                        <a href="https://www.3dmgame.com/original/" target="_blank" class="mor">更多<i></i></a>
                    </div>
                </div>
                <div class="lia_a">
                    <a href="https://www.3dmgame.com/original/3741463.html" target="_blank" class="lis">
                        <div class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumborigfirst/20181130/1543543218_346659.jpg" alt="请不要让Roguelike成为独立游戏的遮羞布"></div>
                        <div class="bt">请不要让Roguelike成为独立游戏的遮羞布</div>
                    </a>
                    <a href="https://www.3dmgame.com/original/3741464.html" target="_blank" class="lis">
                        <div class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumborigfirst/20181130/1543544463_863792.jpg" alt="曾经虐你千百遍的“彩京”系列，如今登陆NS了"></div>
                        <div class="bt">曾经虐你千百遍的“彩京”系列，如今登陆NS了</div>
                    </a>
                </div>
                <div class="lis_b">
                    <a href="https://www.3dmgame.com/original/3741462.html" target="_blank" class="lis">
                        <i></i>
                        <p>游系列传之《精灵宝可梦》: 小智和皮卡丘的亲生父亲原来是他? </p>
                        <span>11-29</span>
                    </a>
                    <a href="https://www.3dmgame.com/original/3741461.html" target="_blank" class="lis">
                        <i></i>
                        <p>网易游戏超级会员卡评测：借由服务第九艺术所带来的全新尝试</p>
                        <span>11-28</span>
                    </a>
                    <a href="https://www.3dmgame.com/original/3741460.html" target="_blank" class="lis">
                        <i></i>
                        <p>由蒜头王八说起，简单聊聊宝可梦名字能有多奇怪</p>
                        <span>11-27</span>
                    </a>
                    <a href="https://www.3dmgame.com/original/3741459.html" target="_blank" class="lis">
                        <i></i>
                        <p>【3DM】编辑部开黑日常05：TrickyTower</p>
                        <span>11-26</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="Min2_R">
            <div class="Med-info">
                <div class="Topline"></div>
                <div class="infowrap">
                    <div class="inftop">3DM媒体信息</div>
                    <a href="https://shouyou.3dmgame.com/ios/14856.html" class="iosdownl" target="_blank"><span>1.32</span></a>
                    <a href="https://shouyou.3dmgame.com/android/5995.html" class="azdownl" target="_blank"><span>3.8</span></a>
                    <div class="ewmwrap">
                        <a href="#" target="_blank">
                            <div class="lis">
                                <div class="ewm"><img src="https://www.3dmgame.com/index/images/weixin.jpg" alt="新浪微博"></div>
                                <i class="wb"></i>
                                <p>新浪微博</p>
                                <span>账号：3dmgame</span>
                            </div>
                        </a>
                        <div class="lis">
                            <div class="ewm"><img src="https://www.3dmgame.com/index/images/weixin.jpg" alt="微信公众号"></div>
                            <i class="wx"></i>
                            <p>微信公众号</p>
                            <span>账号:sdmgame</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="near_wrap">
                <div class="QZ_title">
                    <div class="bt">
                        <span><i class="ico7"></i>近期新作</span>
                        <a href="https://www.3dmgame.com/games/zq/" target="_blank" class="mor">更多<i></i></a>
                    </div>
                </div>
                <ul>
                    <li class="on" >
                        <a class="lis_b" href="https://www.3dmgame.com/games/beholder2/" target="_blank">
                            <img class="img" src="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20181201/1543650402_263272.jpg" alt="旁观者2">
                            <div class="infowrap">
                                <div class="bt">
                                    <span>旁观者2</span>
                                </div>
                                <div class="time">
                                    <p><i></i>12-05<em></em></p>
                                    <p>RPG</p>
                                </div>
                            </div>
                        </a>
                        <div class="lis_a">
                            <a href="https://www.3dmgame.com/games/beholder2/" target="_blank">旁观者2</a><span>简中</span>
                        </div>
                    </li>
                    <li  >
                        <a class="lis_b" href="https://www.3dmgame.com/games/justcause4/" target="_blank">
                            <img class="img" src="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20180718/1531879595_284959.jpg" alt="正当防卫4">
                            <div class="infowrap">
                                <div class="bt">
                                    <span>正当防卫4</span>
                                </div>
                                <div class="time">
                                    <p><i></i>12-05<em></em></p>
                                    <p>ARPG</p>
                                </div>
                            </div>
                        </a>
                        <div class="lis_a">
                            <a href="https://www.3dmgame.com/games/justcause4/" target="_blank">正当防卫4</a><span>简中</span>
                        </div>
                    </li>
                    <li  >
                        <a class="lis_b" href="https://www.3dmgame.com/games/darksiders3/" target="_blank">
                            <img class="img" src="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20181012/1539332647_982116.jpg" alt="暗黑血统3">
                            <div class="infowrap">
                                <div class="bt">
                                    <span>暗黑血统3</span>
                                </div>
                                <div class="time">
                                    <p><i></i>11-28<em></em></p>
                                    <p>ARPG</p>
                                </div>
                            </div>
                        </a>
                        <div class="lis_a">
                            <a href="https://www.3dmgame.com/games/darksiders3/" target="_blank">暗黑血统3</a><span>简中</span>
                        </div>
                    </li>
                    <li  >
                        <a class="lis_b" href="https://www.3dmgame.com/games/gjqt3/" target="_blank">
                            <img class="img" src="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20180925/1537865450_449163.jpg" alt="古剑奇谭3">
                            <div class="infowrap">
                                <div class="bt">
                                    <span>古剑奇谭3</span>
                                </div>
                                <div class="time">
                                    <p><i></i>11-23<em></em></p>
                                    <p>RPG</p>
                                </div>
                            </div>
                        </a>
                        <div class="lis_a">
                            <a href="https://www.3dmgame.com/games/gjqt3/" target="_blank">古剑奇谭3</a><span>简中</span>
                        </div>
                    </li>
                    <li  >
                        <a class="lis_b" href="https://www.3dmgame.com/games/battlefieldv/" target="_blank">
                            <img class="img" src="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20180704/1530698382_688660.jpg" alt="战地5">
                            <div class="infowrap">
                                <div class="bt">
                                    <span>战地5</span>
                                </div>
                                <div class="time">
                                    <p><i></i>11-20<em></em></p>
                                    <p>FPS</p>
                                </div>
                            </div>
                        </a>
                        <div class="lis_a">
                            <a href="https://www.3dmgame.com/games/battlefieldv/" target="_blank">战地5</a><span>简中</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="hh_fb">
                <div class="QZ_title">
                    <div class="bt">
                        <span><i class="ico8"></i>汉化发布</span>
                        <a href="https://www.3dmgame.com/hanhua/" target="_blank" class="mor">更多<i></i></a>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="https://www.3dmgame.com/hanhua_1" target="_blank" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20180726/1532569701_351408.jpg" alt="3dm汉化"></a>
                    </li>
                    <li>
                        <div class="bt">
                            <i></i>
                            <a href="https://dl.3dmgame.com/pc/126700.html" target="_blank">《心链猫》 中文免安装版</a>
                        </div>
                    </li>
                    <li>
                        <div class="bt">
                            <i></i>
                            <a href="https://dl.3dmgame.com/pc/126677.html" target="_blank">《另一半》 中文免安装版</a>
                        </div>
                    </li>
                    <li>
                        <div class="bt">
                            <i></i>
                            <a href="https://dl.3dmgame.com/pc/126675.html" target="_blank">《日落过载》 中文免安装版</a>
                        </div>
                    </li>
                    <li>
                        <div class="bt">
                            <i></i>
                            <a href="https://dl.3dmgame.com/pc/126625.html" target="_blank">《未上锁的房间3》 中文免安装版</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="jijiang_fb">
                <div class="QZ_title">
                    <div class="bt">
                        <span><i class="ico9"></i>即将发布</span>
                        <a href="https://www.3dmgame.com/release/pc201812/" target="_blank" class="mor">更多<i></i></a>
                    </div>
                </div>
                <ul>
                    <li>
                        <div class="jijiang_lia">
                            <a href="https://www.3dmgame.com/games/supersmashbrosultima/" target="_blank" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20180616/1529117279_184686.jpg" alt="任天堂明星大乱斗特别版"></a>
                            <a href="https://www.3dmgame.com/games/supersmashbrosultima/" target="_blank" class="bt">任天堂明星大乱斗特别版</a>
                            <div class="time">
                                <p>ACT</p>
                                <p>2018-12-07</p>
                            </div>
                            <a href="https://www.3dmgame.com/games/supersmashbrosultima/" target="_blank" class="dy">订阅</a>
                        </div>
                        <i class="line"></i>
                    </li>
                    <li>
                        <div class="jijiang_lia">
                            <a href="https://www.3dmgame.com/games/godeater3/" target="_blank" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20180920/1537425657_167649.jpg" alt="噬神者3"></a>
                            <a href="https://www.3dmgame.com/games/godeater3/" target="_blank" class="bt">噬神者3</a>
                            <div class="time">
                                <p>ACT</p>
                                <p>2018-12-13</p>
                            </div>
                            <a href="https://www.3dmgame.com/games/godeater3/" target="_blank" class="dy">订阅</a>
                        </div>
                        <i class="line"></i>
                    </li>
                    <li>
                        <div class="jijiang_lia">
                            <a href="https://www.3dmgame.com/games/judgeeyes/" target="_blank" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20180911/1536647200_302471.jpg" alt="审判之眼：死神的遗言"></a>
                            <a href="https://www.3dmgame.com/games/judgeeyes/" target="_blank" class="bt">审判之眼：死神的遗言</a>
                            <div class="time">
                                <p>ACT</p>
                                <p>2018-12-13</p>
                            </div>
                            <a href="https://www.3dmgame.com/games/judgeeyes/" target="_blank" class="dy">订阅</a>
                        </div>
                        <i class="line"></i>
                    </li>
                    <li>
                        <div class="jijiang_lia">
                            <a href="https://www.3dmgame.com/games/talesofvesperiadefin/" target="_blank" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20180718/1531879054_847458.jpg" alt="薄暮传说"></a>
                            <a href="https://www.3dmgame.com/games/talesofvesperiadefin/" target="_blank" class="bt">薄暮传说</a>
                            <div class="time">
                                <p>RPG</p>
                                <p>2019-01-11</p>
                            </div>
                            <a href="https://www.3dmgame.com/games/talesofvesperiadefin/" target="_blank" class="dy">订阅</a>
                        </div>
                        <i class="line"></i>
                    </li>
                    <li>
                        <div class="jijiang_lia">
                            <a href="https://www.3dmgame.com/games/re2r/" target="_blank" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20180919/1537340625_478890.jpg" alt="生化危机2：重制版"></a>
                            <a href="https://www.3dmgame.com/games/re2r/" target="_blank" class="bt">生化危机2：重制版</a>
                            <div class="time">
                                <p>ACT</p>
                                <p>2019-01-25</p>
                            </div>
                            <a href="https://www.3dmgame.com/games/re2r/" target="_blank" class="dy">订阅</a>
                        </div>
                        <i class="line"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="Min_3">
        <div class="QZ_title">
            <div class="bt">
                <span><i class="ico10"></i>精彩视频</span>
                <a href="https://ol.3dmgame.com/v_all_1/" target="_blank" class="mor">更多<i></i></a>
            </div>
        </div>
        <div class="Min3_L">
            <a href="https://www.3dmgame.com/original/3741462.html" target="_blank" class="img">
                <img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181129/1543474014_619334.jpg" alt=" 游系列传之《精灵宝可梦》">
            </a>
            <a href="https://www.3dmgame.com/original/3741462.html" target="_blank" class="bt"> 游系列传之《精灵宝可梦》</a>
        </div>
        <div class="Min3_R">
            <ul>
                <li>
                    <a href="https://www.3dmgame.com/news/201811/3750144.html" target="_blank" class="img">
                        <img alt="VR动作电影《The Limit》演示" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181126/1543214389_224072.jpg"  />
                    </a>
                    <a href="https://www.3dmgame.com/news/201811/3750144.html" class="bt" target="_blank">VR动作电影《The Limit》演示</a>
                </li>
                <li>
                    <a href="https://www.3dmgame.com/news/201811/3750147.html" target="_blank" class="img">
                        <img alt="《生化危机2RE》最新官宣短视频" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181126/1543214347_633239.jpg"  />
                    </a>
                    <a href="https://www.3dmgame.com/news/201811/3750147.html" class="bt" target="_blank">《生化危机2RE》最新官宣短视频</a>
                </li>
                <li>
                    <a href="https://www.3dmgame.com/news/201811/3750110.html" target="_blank" class="img">
                        <img alt="《女神异闻录5》年末动画特番" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181126/1543214430_803891.jpg"  />
                    </a>
                    <a href="https://www.3dmgame.com/news/201811/3750110.html" class="bt" target="_blank">《女神异闻录5》年末动画特番</a>
                </li>
                <li>
                    <a href="https://www.3dmgame.com/news/201811/3750134.html" target="_blank" class="img">
                        <img alt="《她与光明的肩负者》试玩版发布" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181126/1543214480_929289.jpg"  />
                    </a>
                    <a href="https://www.3dmgame.com/news/201811/3750134.html" class="bt" target="_blank">《她与光明的肩负者》试玩版发布</a>
                </li>
            </ul>
        </div>
        <div class="Min3_R2">
            <ul>
                <li  >
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750770.html" target="_blank" class="bt">《生化危机2：重制版》新演示 克莱尔大战暴君</a>
                </li>
                <li  >
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750773.html" target="_blank" class="bt">海王现身亲自推广《乐高DC超级反派》海王DLC</a>
                </li>
                <li  >
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750767.html" target="_blank" class="bt">《生化危机2重制版》艾达王红色短裙视频亮相</a>
                </li>
                <li  >
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750763.html" target="_blank" class="bt">无DRM还有折扣！《闪回》重制版登陆GOG平台</a>
                </li>
                <li class="line" >
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750762.html" target="_blank" class="bt">《全面战争：三国》基于引擎角色宣传片：女贼郑姜</a>
                </li>
                <li  >
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750746.html" target="_blank" class="bt">马龙的太阳花 《蜘蛛侠：平行宇宙》最新“快出发”预告 </a>
                </li>
                <li  >
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750736.html" target="_blank" class="bt">凄凉尘世！Avalanche科幻惊悚FPS《零世代》最新演示 </a>
                </li>
                <li  >
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750730.html" target="_blank" class="bt">《武装突袭3》免费新更新发布 战争领主模式加入</a>
                </li>
                <li  >
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750722.html" target="_blank" class="bt">电视台报道闹乌龙 任天堂Switch被称为“国产黑科技”</a>
                </li>
                <li  >
                    <i></i>
                    <a href="https://www.3dmgame.com/news/201812/3750718.html" target="_blank" class="bt">《最后的神迹》重制版新预告片 高速移动躲避危险</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tonglona_3">
        <script>
            (function() {
                var s = "_" + Math.random().toString(36).slice(2);
                document.write('<div id="' + s + '"></div>');
                (window.slotbydup=window.slotbydup || []).push({
                    id: '5866586',
                    container: s,
                    size: '1160,90',
                    display: 'inlay-fix'
                });
            })();
        </script>
        <i style="width:26px;height:15px;position:absolute;left:0;bottom:0;background:url(https://www.3dmgame.com/page/images/icon_ad.png);"></i>
    </div>
    <div class="Min_4">
        <div class="Index_tit">
            <div class="tit_L">
                <i class="dj"></i>
                <span>单机 - 游戏</span>
            </div>
            <div class="tit_R">
                <a href="https://www.3dmgame.com/original/" target="_blank"><i></i>原创</a>
                <a href="https://www.3dmgame.com/games/zq_1/" target="_blank"><i></i>专区</a>
                <a href="https://www.3dmgame.com/phb.html" target="_blank"><i></i>排行榜</a>
                <a href="https://www.3dmgame.com/gl_all_1/" target="_blank"><i></i>攻略</a>
                <a href="https://www.3dmgame.com/tag_1/" target="_blank"><i></i>标签</a>
                <a href="https://www.3dmgame.com/hanhua_1/" target="_blank"><i></i>汉化</a>
                <a href="https://dl.3dmgame.com/patch/" target="_blank"><i></i>补丁</a>
            </div>
            <div class="line"></div>
        </div>
        <div class="Min4_L">
            <div class="M4_a">
                <div class="QZ_title">
                    <div class="bt">
                        <span><i class="ico11"></i>近期大作</span>
                        <a href="https://www.3dmgame.com/games/zq/" target="_blank" class="mor">更多<i></i></a>
                    </div>
                    <ul>
                        <li>
                            <a href="https://www.3dmgame.com/games/justcause4/" target="_blank" class="img">
                                <img alt="正当防卫4" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20180716/1531728918_968257.jpg" />
                            </a>
                            <a href="https://www.3dmgame.com/games/justcause4/" target="_blank" class="bt">正当防卫4</a>
                            <div class="time">12月05号</div>
                            <div class="bqwrap">标签：
                                <a href="https://www.3dmgame.com/tag/qiangzhan_1/" target="_blank">枪战</a>,
                                <a href="https://www.3dmgame.com/tag/juqing_1/" target="_blank">剧情</a>,
                                <a href="https://www.3dmgame.com/tag/baoli_1/" target="_blank">暴力</a>,
                            </div>
                            <div class="Item">
                                <a href="https://www.3dmgame.com/news/201812/3750687.html" target="_blank"><i></i>正版分流</a>
                                <a href="https://www.3dmgame.com/news/201812/3750680.html" target="_blank"><i></i>媒体评分</a>
                                <a href="https://www.3dmgame.com/news/201812/3750517.html" target="_blank"><i></i>演示视频</a>
                                <a href="https://www.3dmgame.com/news/201811/3750284.html" target="_blank"><i></i>新预告片</a>
                                <a href="https://www.3dmgame.com/news/201811/3750138.html" target="_blank"><i></i>奶牛枪</a>
                                <a href="https://www.3dmgame.com/news/201811/3749985.html" target="_blank"><i></i>电影级预告</a>
                                <a href="https://www.3dmgame.com/news/201811/3749851.html" target="_blank"><i></i>穿越地图</a>
                                <a href="https://www.3dmgame.com/news/201811/3749733.html" target="_blank"><i></i>劲爆武器</a>
                                <a href="https://www.3dmgame.com/news/201811/3749591.html" target="_blank"><i></i>实机演示</a>
                            </div>
                        </li>
                        <li>
                            <a href="https://www.3dmgame.com/games/darksiders3/" target="_blank" class="img">
                                <img alt="暗黑血统3" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20181012/1539332642_131592.jpg" />
                            </a>
                            <a href="https://www.3dmgame.com/games/darksiders3/" target="_blank" class="bt">暗黑血统3</a>
                            <div class="time">11月28号</div>
                            <div class="bqwrap">标签：
                                <a href="https://www.3dmgame.com/tag/mohuan_1/" target="_blank">魔幻</a>,
                                <a href="https://www.3dmgame.com/tag/juqing_1/" target="_blank">剧情</a>,
                                <a href="https://www.3dmgame.com/tag/jingdian_1/" target="_blank">经典</a>,
                            </div>
                            <div class="Item">
                                <a href="https://www.3dmgame.com/news/201811/3749413.html" target="_blank"><i></i>新预告片</a>
                                <a href="https://www.3dmgame.com/news/201811/3750011.html" target="_blank"><i></i>无名之马</a>
                                <a href="https://www.3dmgame.com/news/201811/3749675.html" target="_blank"><i></i>天启四骑士</a>
                                <a href="https://www.3dmgame.com/news/201810/3746623.html" target="_blank"><i></i>懒惰Boss战</a>
                                <a href="https://www.3dmgame.com/news/201810/3746574.html" target="_blank"><i></i>力量怒神</a>
                                <a href="https://www.3dmgame.com/news/201810/3747082.html" target="_blank"><i></i>首批DLC</a>
                                <a href="https://www.3dmgame.com/news/201810/3746884.html" target="_blank"><i></i>焦灼议会</a>
                                <a href="https://www.3dmgame.com/news/201811/3748872.html" target="_blank"><i></i>配置需求</a>
                                <a href="https://www.3dmgame.com/news/201811/3750184.html" target="_blank"><i></i>IGN7分</a>
                            </div>
                        </li>
                        <li>
                            <a href="https://www.3dmgame.com/games/battlefieldv/" target="_blank" class="img">
                                <img alt="战地5" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20181029/1540795648_863737.jpg" />
                            </a>
                            <a href="https://www.3dmgame.com/games/battlefieldv/" target="_blank" class="bt">战地5</a>
                            <div class="time">11月20号</div>
                            <div class="bqwrap">标签：
                                <a href="https://www.3dmgame.com/tag/zhanzheng_1/" target="_blank">战争</a>,
                                <a href="https://www.3dmgame.com/tag/lishi_1/" target="_blank">历史</a>,
                                <a href="https://www.3dmgame.com/tag/qiangzhan_1/" target="_blank">枪战</a>,
                            </div>
                            <div class="Item">
                                <a href="https://www.3dmgame.com/news/201811/3748978.html" target="_blank"><i></i>14分钟演示</a>
                                <a href="https://www.3dmgame.com/news/201811/3749632.html" target="_blank"><i></i>画面对比</a>
                                <a href="https://www.3dmgame.com/news/201811/3749485.html" target="_blank"><i></i>免费地图</a>
                                <a href="https://www.3dmgame.com/news/201811/3749193.html" target="_blank"><i></i>大行动模式</a>
                                <a href="https://www.3dmgame.com/news/201811/3749102.html" target="_blank"><i></i>截图欣赏</a>
                                <a href="https://www.3dmgame.com/news/201811/3749039.html" target="_blank"><i></i>单人战役</a>
                                <a href="https://www.3dmgame.com/news/201811/3748897.html" target="_blank"><i></i>PC版预载</a>
                                <a href="https://www.3dmgame.com/news/201811/3748499.html" target="_blank"><i></i>首发地图</a>
                                <a href="https://www.3dmgame.com/news/201811/3748427.html" target="_blank"><i></i>配置需求</a>
                            </div>
                        </li>
                        <li>
                            <a href="https://www.3dmgame.com/games/fallout76/" target="_blank" class="img">
                                <img alt="辐射76" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20180716/1531723721_712829.jpg" />
                            </a>
                            <a href="https://www.3dmgame.com/games/fallout76/" target="_blank" class="bt">辐射76</a>
                            <div class="time">11月14号</div>
                            <div class="bqwrap">标签：
                                <a href="https://www.3dmgame.com/tag/qiangzhan_1/" target="_blank">枪战</a>,
                                <a href="https://www.3dmgame.com/tag/juqing_1/" target="_blank">剧情</a>,
                                <a href="https://www.3dmgame.com/tag/jingdian_1/" target="_blank">经典</a>,
                            </div>
                            <div class="Item">
                                <a href="https://www.3dmgame.com/news/201810/3747394.html" target="_blank"><i></i>白金收藏版</a>
                                <a href="https://www.3dmgame.com/news/201811/3749028.html" target="_blank"><i></i>首日补丁</a>
                                <a href="https://www.3dmgame.com/news/201811/3749235.html" target="_blank"><i></i>PVP模式</a>
                                <a href="https://www.3dmgame.com/news/201811/3748837.html" target="_blank"><i></i>锁定60帧</a>
                                <a href="https://www.3dmgame.com/news/201811/3748823.html" target="_blank"><i></i>画面对比</a>
                                <a href="https://www.3dmgame.com/news/201810/3748224.html" target="_blank"><i></i>真人宣传片</a>
                                <a href="https://www.3dmgame.com/news/201810/3747921.html" target="_blank"><i></i>组队挑战</a>
                                <a href="https://www.3dmgame.com/news/201810/3747801.html" target="_blank"><i></i>支线任务</a>
                                <a href="https://www.3dmgame.com/news/201810/3746912.html" target="_blank"><i></i>实机试玩</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico12"></i>单机发售表</span>
                    <a href="https://www.3dmgame.com/release/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M4_b">
                <div class="M4b_top">
                    <p  class="on" >PC</p>
                    <p >PS4</p>
                    <p >SWITCH</p>
                    <p >XBOXONE</p>
                </div>
                <div class="M4b_item">
                    <ul style="display: block">
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/myzrte/" target="_blank" class="bt">突变元年：伊甸之路</a>
                            <div class="lx">SLG</div>
                            <div class="time">12-05</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/beholder2/" target="_blank" class="bt">旁观者2</a>
                            <div class="lx">RPG</div>
                            <div class="time">12-05</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/justcause4/" target="_blank" class="bt">正当防卫4</a>
                            <div class="lx">ARPG</div>
                            <div class="time">12-05</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/virgovsthezodiac/" target="_blank" class="bt">处女座VS黄道十二宫</a>
                            <div class="lx">RPG</div>
                            <div class="time">12-04</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/x4foundt/" target="_blank" class="bt">X4：基石</a>
                            <div class="lx">SLG</div>
                            <div class="time">12-01</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/bandit/" target="_blank" class="bt">山贼</a>
                            <div class="lx">ACT</div>
                            <div class="time">12-01</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/irisfall/" target="_blank" class="bt">彩虹坠入</a>
                            <div class="lx">AVG</div>
                            <div class="time">11-30</div>
                        </li>
                    </ul>
                    <ul >
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/myzrte/" target="_blank" class="bt">突变元年：伊甸之路</a>
                            <div class="lx">SLG</div>
                            <div class="time">12-05</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/justcause4/" target="_blank" class="bt">正当防卫4</a>
                            <div class="lx">ARPG</div>
                            <div class="time">12-05</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/ttwt/" target="_blank" class="bt">巫师之昆特牌：王权的陨落</a>
                            <div class="lx">RPG</div>
                            <div class="time">12-04</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/darksiders3/" target="_blank" class="bt">暗黑血统3</a>
                            <div class="lx">ARPG</div>
                            <div class="time">11-28</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/zzt4psm/" target="_blank" class="bt">绝体绝命都市4Plus：夏日记忆</a>
                            <div class="lx">AVG</div>
                            <div class="time">11-22</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/battlefieldv/" target="_blank" class="bt">战地5</a>
                            <div class="lx">FPS</div>
                            <div class="time">11-20</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/fallout76/" target="_blank" class="bt">辐射76</a>
                            <div class="lx">RPG</div>
                            <div class="time">11-14</div>
                        </li>
                    </ul>
                    <ul >
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/arkse/" target="_blank" class="bt">方舟：生存进化</a>
                            <div class="lx">AVG</div>
                            <div class="time">11-30</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/incrediblemandy/" target="_blank" class="bt">不可思议之梦蝶</a>
                            <div class="lx">ACT</div>
                            <div class="time">11-27</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/pokemonletsgopikachu/" target="_blank" class="bt">精灵宝可梦Let's Go！皮卡丘/伊布</a>
                            <div class="lx">RPG</div>
                            <div class="time">11-16</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/civilization6/" target="_blank" class="bt">文明6</a>
                            <div class="lx">SLG</div>
                            <div class="time">11-16</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/yomawarina/" target="_blank" class="bt">夜廻</a>
                            <div class="lx">AVG</div>
                            <div class="time">10-26</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/shinyomawari/" target="_blank" class="bt">深夜廻</a>
                            <div class="lx">PUZ</div>
                            <div class="time">10-25</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/blackbird/" target="_blank" class="bt">黑鸟</a>
                            <div class="lx">ACT</div>
                            <div class="time">10-18</div>
                        </li>
                    </ul>
                    <ul >
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/myzrte/" target="_blank" class="bt">突变元年：伊甸之路</a>
                            <div class="lx">SLG</div>
                            <div class="time">12-05</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/justcause4/" target="_blank" class="bt">正当防卫4</a>
                            <div class="lx">ARPG</div>
                            <div class="time">12-05</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/ttwt/" target="_blank" class="bt">巫师之昆特牌：王权的陨落</a>
                            <div class="lx">RPG</div>
                            <div class="time">12-04</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/darksiders3/" target="_blank" class="bt">暗黑血统3</a>
                            <div class="lx">ARPG</div>
                            <div class="time">11-28</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/battlefieldv/" target="_blank" class="bt">战地5</a>
                            <div class="lx">FPS</div>
                            <div class="time">11-20</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/farmingsimulator19/" target="_blank" class="bt">模拟农场19</a>
                            <div class="lx">SIM</div>
                            <div class="time">11-19</div>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://www.3dmgame.com/games/fallout76/" target="_blank" class="bt">辐射76</a>
                            <div class="lx">RPG</div>
                            <div class="time">11-14</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Min4_M">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico7"></i>游戏新闻</span>
                    <a href="https://www.3dmgame.com/news/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="news_item">
                <div class="lis_a">
                    <a href="https://www.3dmgame.com/news/201812/3750692.html" class="bt" target="_blank">B社终于良心发现 将为玩家免费更换《辐射76》尼龙包</a>
                    <a href="https://www.3dmgame.com/news/201812/3750692.html" class="img" target="_blank"><img alt="B社终于良心发现 将为玩家免费更换《辐射76》尼龙包" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181202/1543745001_908710.jpg" ></a>
                    <p class="miaoshu">
                        之前我们报道过B社宣称《辐射76》动力装甲版将附赠帆布包，但最终产品中附赠的却是尼龙包，材质廉价，做工粗糙，引起了许多玩家不满，甚至纷纷抗议并要求退款。





                        而官方后续的补偿方案也没能获得玩家谅解。今日B社终于宣布，将免费为购买了典藏版的玩家更换尼龙包，但需要玩家自行进</p>
                </div>
                <div class="lis_a">
                    <a href="https://www.3dmgame.com/news/201812/3750686.html" class="bt" target="_blank">顽皮狗发布《美国末日2》公布两周年纪念视频</a>
                    <a href="https://www.3dmgame.com/news/201812/3750686.html" class="img" target="_blank"><img alt="顽皮狗发布《美国末日2》公布两周年纪念视频" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181204/1543878124_248694.jpg" ></a>
                    <p class="miaoshu">
                        为了庆祝《美国末日2》公布两周年，该游戏的开发商顽皮狗今日特别发布了一段庆祝视频。视频截取了PSX2016游戏发布之时，数十名玩家对发布预告片的现场反应，请看以下视频：






                        这段视频展示了数十名游戏爱好者在PSX2016期间首次观看到《美国末日2》预告片后的反应，他</p>
                </div>
                <ul class="lis_b">
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750774.html" class="bt" target="_blank">《死或生》霞全新重制手办欣赏 美人肌肤更加细腻</a>
                        <span>12-05</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750773.html" class="bt" target="_blank">海王现身亲自推广《乐高DC超级反派》海王DLC</a>
                        <span>12-05</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750772.html" class="bt" target="_blank">韩国新修正案正在审议中 游戏代练或将判2年监禁</a>
                        <span>12-05</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750771.html" class="bt" target="_blank">美剧《老爸老妈浪漫史》将翻拍中国版 共30集</a>
                        <span>12-05</span>
                    </li>
                </ul>
            </div>
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico13"></i>游戏攻略</span>
                    <a href="https://www.3dmgame.com/gl/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="news_item">
                <div class="lia_c">
                    <a href="https://www.3dmgame.com/gl/3751172.html" target="_blank" class="lis">
                        <div class="img"><img alt="《暗黑血统3》 全剧情图文流程+战斗要点+boss打法+全章节解密" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181128/1543414480_515822.jpg" ></div>
                        <div class="bt">《暗黑血统3》 全剧情图文流程+战斗要点+boss打法+全章节解密</div>
                    </a>
                    <a href="https://www.3dmgame.com/gl/3749810.html" target="_blank" class="lis">
                        <div class="img"><img alt="《杀手2》 图文全剧情流程攻略 全关卡潜入刺杀方案攻略" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181113/1542094942_942611.jpg" ></div>
                        <div class="bt">《杀手2》 图文全剧情流程攻略 全关卡潜入刺杀方案攻略</div>
                    </a>
                </div>
                <ul class="lis_b">
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/gl/3751861.html" class="bt" target="_blank">《X4：基石》占领中立星区方法分享</a>
                        <span>12-05</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/gl/3751860.html" class="bt" target="_blank">《X4：基石》扫描任务完成攻略</a>
                        <span>12-05</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/gl/3751859.html" class="bt" target="_blank">《心链猫》  图文攻略  全关卡任务解密流程全金币收集攻略</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/gl/3751858.html" class="bt" target="_blank">战地1启动弹出战地5广告怎么解决</a>
                        <span>12-04</span>
                    </li>
                </ul>
            </div>
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico2"></i>厂商快报</span>
                    <a href="https://www.3dmgame.com/news_38_1/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="news_item">
                <div class="lis_a">
                    <a href="https://www.3dmgame.com/news/201812/3750671.html" class="bt" target="_blank">不来看看吗？PlayStation Awards 2018各项大奖揭晓</a>
                    <a href="https://www.3dmgame.com/news/201812/3750671.html" class="img" target="_blank"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181203/1543831210_771495.jpg" alt="不来看看吗？PlayStation Awards 2018各项大奖揭晓"></a>
                    <p class="miaoshu">

                        PlayStation Awards 2018已于12月3日在日本东京新高轮王子酒店举行，各项大奖已经揭晓，作为玩家的你们肯定会想知道的，那么废话不多说快来看看吧！


                        PS VR大奖：





                        《上古卷轴5：天际》VR


                        《GT赛车Sport》VR</p>
                </div>
                <div class="lis_a">
                    <a href="https://www.3dmgame.com/news/201812/3750649.html" class="bt" target="_blank">生存沙盒神作《方舟：生存进化》Switch全球上市，预告片首曝</a>
                    <a href="https://www.3dmgame.com/news/201812/3750649.html" class="img" target="_blank"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/2018/1203/1543814264576.jpg" alt="生存沙盒神作《方舟：生存进化》Switch全球上市，预告片首曝"></a>
                    <p class="miaoshu">
                        12月1日(北美时间11月30日)，《方舟：生存进化》开发商Studio Wildcard宣布，游戏已在Nintendo Switch全球上市。





                        《方舟：生存进化》Switch版


                        屡获殊荣的恐龙生存冒险游戏《方舟：生存进化》 为Nintendo
                        Sw</p>
                </div>
                <ul class="lis_b data_topaddin">
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750747.html" target="_blank" class="bt">《彩虹六号》新赛季风城行动 今晚10点更新</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750741.html" target="_blank" class="bt">ET等世界级拳皇高手约战第二届NGWT上海赛</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750727.html" target="_blank" class="bt">战地5加速器海豚智能好在哪？一键加速全区服低延迟</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://www.3dmgame.com/news/201812/3750714.html" target="_blank" class="bt">木村拓哉登场造成台湾大轰动！《审判之眼：死神的遗言》发售纪念活动在君悦酒店举办</a>
                        <span>12-04</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="Min4_R">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico2"></i>推荐资源</span>
                    <a href="https://dl.3dmgame.com" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M4R_a">
                <ul>
                    <li>
                        <a href="https://dl.3dmgame.com/pc/126710.html" target="_blank" class="img"><img alt=" 中文版 Steam正版分流" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20180718/1531879595_284959.jpg" ></a>
                        <a href="https://dl.3dmgame.com/pc/126710.html" target="_blank" class="bt">正当防卫4</a>
                        <div class="miaoshu"> 中文版 Steam正版分流</div>
                        <div class="time">2018-12-04</div>
                        <a href="https://dl.3dmgame.com/pc/126710.html" target="_blank" class="downl">下载</a>
                    </li>
                    <li>
                        <a href="https://dl.3dmgame.com/pc/126700.html" target="_blank" class="img"><img alt=" 中文免安装版" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20181125/1543109585_129393.jpg" ></a>
                        <a href="https://dl.3dmgame.com/pc/126700.html" target="_blank" class="bt">心链猫</a>
                        <div class="miaoshu"> 中文免安装版</div>
                        <div class="time">2018-12-03</div>
                        <a href="https://dl.3dmgame.com/pc/126700.html" target="_blank" class="downl">下载</a>
                    </li>
                    <li>
                        <a href="https://dl.3dmgame.com/pc/126675.html" target="_blank" class="img"><img alt=" 中文免安装版" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20181117/1542434495_570844.jpg" ></a>
                        <a href="https://dl.3dmgame.com/pc/126675.html" target="_blank" class="bt">日落过载</a>
                        <div class="miaoshu"> 中文免安装版</div>
                        <div class="time">2018-12-01</div>
                        <a href="https://dl.3dmgame.com/pc/126675.html" target="_blank" class="downl">下载</a>
                    </li>
                    <li>
                        <a href="https://dl.3dmgame.com/pc/126711.html" target="_blank" class="img"><img alt="简体中文免安装版" class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbkwdfirst/20181201/1543630230_919808.jpg" ></a>
                        <a href="https://dl.3dmgame.com/pc/126711.html" target="_blank" class="bt">格斗领域EX</a>
                        <div class="miaoshu">简体中文免安装版</div>
                        <div class="time">2018-12-01</div>
                        <a href="https://dl.3dmgame.com/pc/126711.html" target="_blank" class="downl">下载</a>
                    </li>
                </ul>
            </div>
            <div class="M4R_b">
                <div class="yxk_top">
                    <p class="on">MOD</p>
                    <p>修改器</p>
                    <p>汉化补丁</p>
                    <p>其他补丁</p>
                </div>
                <div class="Item"  style="display: block"  >
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131798.html" class="bt" target="_blank">《死或生5：最后一战》Tamaki性感泳装MOD</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131797.html" class="bt" target="_blank">《死或生5：最后一战》Mila性感皮质服装MOD</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131796.html" class="bt" target="_blank">《死或生5：最后一战》Honoka性感物理泳装MOD</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131793.html" class="bt" target="_blank">《上古卷轴5：天际重置版》传送法术MOD</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131791.html" class="bt" target="_blank">《上古卷轴5：天际重置版》光线效果优化MOD</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131787.html" class="bt" target="_blank">《巫师3：狂猎》十字弓加强MOD</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131785.html" class="bt" target="_blank">《巫师3：狂猎》主菜单动画替换MOD</a>
                    </div>
                </div>
                <div class="Item"  >
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131802.html" class="bt" target="_blank">《正当防卫4》v1.0 十一项修改器[3DM]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131714.html" class="bt" target="_blank">《龙珠战士Z》v1.11六项修改器[MrAntiFun]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131712.html" class="bt" target="_blank">《荒无人烟》v0.8.80十一项修改器[MrAntiFun]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131710.html" class="bt" target="_blank">《地下城英雄》v2018.12.01六项修改器[MrAntiFun]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131708.html" class="bt" target="_blank">《祖先：遗产》v53219无敌模式无限士气修改器[MrAntiFun]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131706.html" class="bt" target="_blank">《铁锤守卫英雄》vb90无限生命无限魔力修改器[MrAntiFun]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131704.html" class="bt" target="_blank">《装机模拟器》v0.9.2.5无限金钱经验修改器[MrAntiFun]</a>
                    </div>
                </div>
                <div class="Item"  >
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131557.html" class="bt" target="_blank">《心链猫》 3DM汉化组汉化补丁v1.0</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131339.html" class="bt" target="_blank">《另一半》 3DM汉化组汉化补丁v1.0</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131195.html" class="bt" target="_blank">《失落的方舟》汉化补丁</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131099.html" class="bt" target="_blank">《日落过载》3DM汉化组汉化补丁v2.0</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131043.html" class="bt" target="_blank">《暗黑之门：伦敦》 3DM汉化组汉化补丁v1.0</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/130961.html" class="bt" target="_blank">《未上锁的房间3》 3DM汉化组汉化补丁v2.0</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/130959.html" class="bt" target="_blank">《欢迎来到王子之地》 3DM汉化组汉化补丁v1.0</a>
                    </div>
                </div>
                <div class="Item"  >
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131809.html" class="bt" target="_blank">《Up And Up》v6升级档+未加密补丁[PLAZA]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131808.html" class="bt" target="_blank">《The Subject》v1.1.0升级档+未加密补丁[PLAZA]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131807.html" class="bt" target="_blank">《终极钓鱼模拟器》v1.2.2.383升级档+未加密补丁[CODEX]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131806.html" class="bt" target="_blank">《为了吾王》v1.0.10.9454升级档+未加密补丁[CODEX]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131805.html" class="bt" target="_blank">《战场兄弟》v1.2.0.19升级档+未加密补丁[CODEX]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131804.html" class="bt" target="_blank">《北加尔》v1.5.11342升级档+DLC+未加密补丁[PLAZA]</a>
                    </div>
                    <div class="list">
                        <i></i>
                        <a href="https://dl.3dmgame.com/patch/131803.html" class="bt" target="_blank">《时光之帽》v20181204升级档+未加密补丁[CODEX]</a>
                    </div>
                </div>
                <a href="https://dl.3dmgame.com/patch/89066.html" target="_blank" class="downl">游戏玩家必备运行库</a>
            </div>
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico11"></i>正版商城</span>
                    <a href="https://3dmgame.taobao.com/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M4R_c">
                <div class="lis_a">
                    <a href="https://item.taobao.com/item.htm?id=570296385316" target="_blank" rel="nofollow" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181023/1540260363_379063.jpg" alt="战地5" /></a>
                    <div class="bq">正版</div>
                    <div class="txt">
                        <a href="https://item.taobao.com/item.htm?id=570296385316" target="_blank" rel="nofollow" class="bt_a">战地5</a>
                        <a href="https://item.taobao.com/item.htm?id=570296385316" target="_blank" rel="nofollow" class="btn2">购买：348</a>
                        <p class="list_a">剧情 · 射击 · 联机</p>
                    </div>
                </div>
                <div class="lis_b">
                    <a href="https://item.taobao.com/item.htm?id=571480157444" target="_blank" rel="nofollow" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181023/1540259889_497107.jpg" alt="正当防卫4" /></a>
                    <div class="txt">
                        <a href="https://item.taobao.com/item.htm?id=571480157444" target="_blank" rel="nofollow" class="bt_a">正当防卫4</a>
                        <a href="https://item.taobao.com/item.htm?id=571480157444" target="_blank" rel="nofollow" class="btn2">购买：239</a>
                        <p class="list_a">剧情 · 射击</p>
                    </div>
                </div>
                <div class="lis_b">
                    <a href="https://item.taobao.com/item.htm?id=570015106216" target="_blank" rel="nofollow" class="img"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181023/1540260032_180018.jpg" alt="使命召唤15" /></a>
                    <div class="txt">
                        <a href="https://item.taobao.com/item.htm?id=570015106216" target="_blank" rel="nofollow" class="bt_a">使命召唤15</a>
                        <a href="https://item.taobao.com/item.htm?id=570015106216" target="_blank" rel="nofollow" class="btn2">购买：386</a>
                        <p class="list_a">射击 · 吃鸡 · 僵尸</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Min_5">
        <div class="Index_tit">
            <div class="tit_L">
                <i class="sj"></i>
                <span>手机 - 游戏</span>
            </div>
            <div class="tit_R">
                <a href="https://shouyou.3dmgame.com/android/" target="_blank" ><i></i>安卓</a>
                <a href="https://shouyou.3dmgame.com/ios/" target="_blank" ><i></i>苹果</a>
                <a href="https://shouyou.3dmgame.com/tv/" target="_blank" ><i></i>TV版</a>
                <a href="https://shouyou.3dmgame.com/pc/" target="_blank" ><i></i>电脑版</a>
                <a href="https://shouyou.3dmgame.com/news/" target="_blank" ><i></i>新闻</a>
                <a href="https://shouyou.3dmgame.com/original/" target="_blank" ><i></i>原创</a>
                <a href="https://shouyou.3dmgame.com/hanhua/" target="_blank" ><i></i>汉化</a>
            </div>
            <div class="line"></div>
        </div>
        <div class="Min5_L">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico11"></i>日常安利</span>
                    <a href="https://shouyou.3dmgame.com/original_26_1/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="ML5_a">
                <a href="https://shouyou.3dmgame.com/original/27991.html" target="_blank" class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/img/2018/1128/1543371967246326.jpg" alt="日常安利《贪婪洞窟2》 一起来组队探险吧" /></a>
                <a href="https://shouyou.3dmgame.com/original/27991.html" target="_blank" class="bt">日常安利《贪婪洞窟2》 一起来组队探险吧</a>
            </div>
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico1"></i>手游资讯</span>
                    <a href="https://shouyou.3dmgame.com/news/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="news_item">
                <div class="lis_a">
                    <a href="https://shouyou.3dmgame.com/news/33199.html" class="bt" target="_blank">武汉方言玩坏CF手游欢乐盛典</a>
                    <a href="https://shouyou.3dmgame.com/news/33199.html" class="img" target="_blank"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/thumb/2018/1204/1543912519248467.png" alt="武汉方言玩坏CF手游欢乐盛典"></a>
                    <p class="miaoshu">
                        武汉话拯救世界！CF手游三周年TVC方言配音




                    </p>
                </div>
                <div class="lis_a">
                    <a href="https://shouyou.3dmgame.com/news/33198.html" class="bt" target="_blank">CF手游三周年  1201欢乐谷等你来疯玩！</a>
                    <a href="https://shouyou.3dmgame.com/news/33198.html" class="img" target="_blank"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/thumb/2018/1204/1543912428350566.png" alt="CF手游三周年  1201欢乐谷等你来疯玩！"></a>
                    <p class="miaoshu">
                        CF手游三周年欢乐盛典




                    </p>
                </div>
                <ul class="lis_b">
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/news/33197.html" class="bt" target="_blank">大起大落落落落 《部落冲突》野猪骑士的送餐辛酸史让人泪目</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/news/33196.html" class="bt" target="_blank">野猪骑士敲出世界冠军！皇室战争CRL全球总决赛NOVA夺冠回顾</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/news/33194.html" class="bt" target="_blank">触手剑仙再现李白经典龙坑之战，最后竟然……</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/news/33193.html" class="bt" target="_blank">《潮人篮球》中锋艾拉浪漫变身，约会皮肤惊艳亮相</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/news/33192.html" class="bt" target="_blank">《猎手之王》冷兵器战术竞技，属于勇敢者的搏斗挑战</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/news/33190.html" class="bt" target="_blank">少侠，你的“双修”秘籍掉了！《天下》手游晚秋福利来袭！</a>
                        <span>12-04</span>
                    </li>
                </ul>
            </div>
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico4"></i>手游攻略</span>
                    <a href="https://shouyou.3dmgame.com/gl/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="news_item">
                <div class="lia_c">
                    <a href="https://shouyou.3dmgame.com/gl/101250.html" target="_blank" class="lis">
                        <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/thumb/2018/1112/1541989025496381.jpg" alt="《微信一笔画完》全关卡通关攻略"></div>
                        <div class="bt">《微信一笔画完》全关卡通关攻略</div>
                    </a>
                    <a href="https://shouyou.3dmgame.com/gl/100967.html" target="_blank" class="lis">
                        <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/thumb/2018/1112/1541988670850262.jpg" alt="微信《IQ挑战大会》小程序游戏1-102关汇总大全"></div>
                        <div class="bt">微信《IQ挑战大会》小程序游戏1-102关汇总大全</div>
                    </a>
                    <a href="https://shouyou.3dmgame.com/gl/100949.html" target="_blank" class="lis">
                        <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/thumb/2018/1031/1540952943531.jpg" alt="《微信疯狂女神探》全关卡通关攻略"></div>
                        <div class="bt">《微信疯狂女神探》全关卡通关攻略</div>
                    </a>
                    <a href="https://shouyou.3dmgame.com/gl/100309.html" target="_blank" class="lis">
                        <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/thumb/2018/1024/1540345573490.jpg" alt="2018淘宝天猫双十一活动大全"></div>
                        <div class="bt">2018淘宝天猫双十一活动大全</div>
                    </a>
                </div>
                <ul class="lis_b">
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/gl/103727.html" class="bt" target="_blank">花木兰上架的星元单品一共几件呢？</a>
                        <span>12-05</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/gl/103726.html" class="bt" target="_blank">《popular wars》新手引导中英文翻译攻略</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/gl/103725.html" class="bt" target="_blank">《Popular Wars》怎么获取高分？</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/gl/103723.html" class="bt" target="_blank">《绝地求生：刺激战场》S5赛季开始时间介绍</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/gl/103722.html" class="bt" target="_blank">《Popular Wars》怎么玩？</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/gl/103720.html" class="bt" target="_blank">《决战平安京》灵咒使用小知识盘点</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/gl/103719.html" class="bt" target="_blank">《绝地求生：刺激战场》S4赛季结束时间介绍</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://shouyou.3dmgame.com/gl/103718.html" class="bt" target="_blank">濡沫江湖游仙枕怎么获得</a>
                        <span>12-04</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="Min5_M">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico14"></i>精彩推荐</span>
                    <a href="https://shouyou.3dmgame.com/news/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M5_lis">
                <div class="lis">
                    <a href="https://shouyou.3dmgame.com/news/33195.html" class="img" target="_blank"><img src="https://shouyou.3dmgame.com/uploadimg/thumb/2018/1204/1543909583702.gif" alt="《我叫MT4》手游玩家策划面对面活动-北京站大回顾"></a>
                    <a href="https://shouyou.3dmgame.com/news/33195.html" class="bt" target="_blank">《我叫MT4》手游玩家策划面对面活动-北京站大回顾</a>
                    <div class="info">
                        <div class="sy">
                            <i></i>
                            <span>厂商新闻</span>
                        </div>
                        <div class="time">
                            <i></i>
                            <span>12-04</span>
                        </div>
                    </div>
                </div>
                <div class="lis">
                    <a href="https://shouyou.3dmgame.com/news/33191.html" class="img" target="_blank"><img src="https://shouyou.3dmgame.com/uploadimg/thumb/2018/1204/1543907732150.jpg" alt="哈妮克孜太美了吧 《光明大陆》最美奶妈走红！"></a>
                    <a href="https://shouyou.3dmgame.com/news/33191.html" class="bt" target="_blank">哈妮克孜太美了吧 《光明大陆》最美奶妈走红！</a>
                    <div class="info">
                        <div class="sy">
                            <i></i>
                            <span>厂商新闻</span>
                        </div>
                        <div class="time">
                            <i></i>
                            <span>12-04</span>
                        </div>
                    </div>
                </div>
                <div class="lis">
                    <a href="https://shouyou.3dmgame.com/news/33180.html" class="img" target="_blank"><img src="https://shouyou.3dmgame.com/uploadimg/thumb/2018/1204/1543894607557.jpg" alt="《梦幻花园》少女心测试上线，“锦鲤女主”报名通道全面开放"></a>
                    <a href="https://shouyou.3dmgame.com/news/33180.html" class="bt" target="_blank">《梦幻花园》少女心测试上线，“锦鲤女主”报名通道全面开放</a>
                    <div class="info">
                        <div class="sy">
                            <i></i>
                            <span>厂商新闻</span>
                        </div>
                        <div class="time">
                            <i></i>
                            <span>12-04</span>
                        </div>
                    </div>
                </div>
                <div class="lis">
                    <a href="https://shouyou.3dmgame.com/news/33179.html" class="img" target="_blank"><img src="https://shouyou.3dmgame.com/uploadimg/thumb/2018/1204/1543894348913.jpg" alt="《问道》手游全民PK奇袭上海，群雄争霸再掀风云"></a>
                    <a href="https://shouyou.3dmgame.com/news/33179.html" class="bt" target="_blank">《问道》手游全民PK奇袭上海，群雄争霸再掀风云</a>
                    <div class="info">
                        <div class="sy">
                            <i></i>
                            <span>厂商新闻</span>
                        </div>
                        <div class="time">
                            <i></i>
                            <span>12-04</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Min5_R">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico15"></i>手游礼包</span>
                    <a href="https://shouyou.3dmgame.com/ka/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M5R_lis">
                <div class="lis">
                    <div class="jh_dara">
                        <a href="https://shouyou.3dmgame.com/ka/2181.html" class="img" target="_blank"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/0207/1517998105848244.png" alt="《永远的7日之都》周年庆礼包" /></a>
                        <a href="https://shouyou.3dmgame.com/ka/2181.html" class="bt" target="_blank">《永远的7日之都》周年庆礼包</a>
                        <div class="info">
                            <p>运营：网易移动游戏</p>
                            <p>平台：<i class="ios"></i><i class="az"></i></p>
                        </div>
                        <a href="https://shouyou.3dmgame.com/ka/2181.html" class="lq" target="_blank">领取</a>
                    </div>
                    <i class="line"></i>
                </div>
                <div class="lis">
                    <div class="jh_dara">
                        <a href="https://shouyou.3dmgame.com/ka/2179.html" class="img" target="_blank"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1127/1543306271502393.jpg" alt="《小米超神》周年庆礼包" /></a>
                        <a href="https://shouyou.3dmgame.com/ka/2179.html" class="bt" target="_blank">《小米超神》周年庆礼包</a>
                        <div class="info">
                            <p>运营：小米互娱</p>
                            <p>平台：<i class="ios"></i><i class="az"></i></p>
                        </div>
                        <a href="https://shouyou.3dmgame.com/ka/2179.html" class="lq" target="_blank">领取</a>
                    </div>
                    <i class="line"></i>
                </div>
                <div class="lis">
                    <div class="jh_dara">
                        <a href="https://shouyou.3dmgame.com/ka/2177.html" class="img" target="_blank"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/0207/1517994081161686.jpg" alt="《烈焰武尊》感恩节礼包" /></a>
                        <a href="https://shouyou.3dmgame.com/ka/2177.html" class="bt" target="_blank">《烈焰武尊》感恩节礼包</a>
                        <div class="info">
                            <p>运营：苏州仙峰网络</p>
                            <p>平台：<i class="ios"></i><i class="az"></i></p>
                        </div>
                        <a href="https://shouyou.3dmgame.com/ka/2177.html" class="lq" target="_blank">领取</a>
                    </div>
                    <i class="line"></i>
                </div>
                <div class="lis">
                    <div class="jh_dara">
                        <a href="https://shouyou.3dmgame.com/ka/2174.html" class="img" target="_blank"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1022/1540193611595839.png" alt="《赛尔号星球大战》首发礼包" /></a>
                        <a href="https://shouyou.3dmgame.com/ka/2174.html" class="bt" target="_blank">《赛尔号星球大战》首发礼包</a>
                        <div class="info">
                            <p>运营：淘米</p>
                            <p>平台：<i class="ios"></i><i class="az"></i></p>
                        </div>
                        <a href="https://shouyou.3dmgame.com/ka/2174.html" class="lq" target="_blank">领取</a>
                    </div>
                    <i class="line"></i>
                </div>
            </div>

        </div>
        <div class="Min5_B">
            <div class="M5B_lis">
                <div class="tab_top">
                    <p class="on">安卓手游</p>
                    <p>苹果手游</p>
                </div>
                <div class="tab_item">
                    <div class="item"  style="display: block"  >
                        <a href="https://shouyou.3dmgame.com/android/93454.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1204/1543889035566418.jpg" alt="Popular Wars"></div>
                            <p class="name">Popular Wars</p>
                            <span class="lx">休闲益智</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/87821.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1105/1541413074967383.png" alt="66手游"></div>
                            <p class="name">66手游</p>
                            <span class="lx">其它软件</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/93517.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1204/1543906582192731.png" alt="爸爸把我的手机藏起来了"></div>
                            <p class="name">爸爸把我的手机藏起来了</p>
                            <span class="lx">休闲益智</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/4312.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1204/1543894559404810.png" alt="烈火裁决"></div>
                            <p class="name">烈火裁决</p>
                            <span class="lx">角色扮演</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/69266.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1203/1543805649956764.png" alt="侍魂：胧月传说"></div>
                            <p class="name">侍魂：胧月传说</p>
                            <span class="lx">动作竞技</span>
                        </a>
                    </div>
                    <div class="item"  >
                        <a href="https://shouyou.3dmgame.com/ios/14856.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/0814/1534228110767798.jpg" alt="3DM手机客户端"></div>
                            <p class="name">3DM手机客户端</p>
                            <span class="lx">新闻阅读</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/ios/92865.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1128/1543399599364244.png" alt="我的男友是条狗"></div>
                            <p class="name">我的男友是条狗</p>
                            <span class="lx">休闲益智</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/ios/55324.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/0121/1516503474450501.jpg" alt="明日之后"></div>
                            <p class="name">明日之后</p>
                            <span class="lx">生存冒险</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/ios/38273.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1022/1540188105832046.gif" alt="非人学园"></div>
                            <p class="name">非人学园</p>
                            <span class="lx">动作竞技</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/ios/67962.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/0928/1538105554850182.png" alt="方舟指令"></div>
                            <p class="name">方舟指令</p>
                            <span class="lx">角色扮演</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="M5B_lis">
                <div class="tab_top">
                    <p class="on">3DM汉化</p>
                    <p>小编推荐</p>
                </div>
                <div class="tab_item">
                    <div class="item"  style="display: block"  >
                        <a href="https://shouyou.3dmgame.com/android/92837.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1128/1543393756623850.png" alt="狗狗d小PP 3DM汉化版"></div>
                            <p class="name">狗狗d小PP 3DM汉化版</p>
                            <span class="lx">休闲益智</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/92589.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1126/1543226236507739.png" alt="拼字成词2 3DM汉化版"></div>
                            <p class="name">拼字成词2 3DM汉化版</p>
                            <span class="lx">休闲益智</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/92350.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1123/1542951075453840.png" alt="拼字成词 3DM汉化版"></div>
                            <p class="name">拼字成词 3DM汉化版</p>
                            <span class="lx">休闲益智</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/87648.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/0921/1537502536225603.png" alt="托尼君爬塔记 3DM汉化版"></div>
                            <p class="name">托尼君爬塔记 3DM汉化版</p>
                            <span class="lx">休闲益智</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/81748.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/0717/1531807512444941.png" alt="死亡独轮车 3DM汉化版"></div>
                            <p class="name">死亡独轮车 3DM汉化版</p>
                            <span class="lx">休闲益智</span>
                        </a>
                    </div>
                    <div class="item"  >
                        <a href="https://shouyou.3dmgame.com/android/93454.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1204/1543889035566418.jpg" alt="Popular Wars"></div>
                            <p class="name">Popular Wars</p>
                            <span class="lx">休闲益智</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/87821.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1105/1541413074967383.png" alt="66手游"></div>
                            <p class="name">66手游</p>
                            <span class="lx">其它软件</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/93517.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1204/1543906582192731.png" alt="爸爸把我的手机藏起来了"></div>
                            <p class="name">爸爸把我的手机藏起来了</p>
                            <span class="lx">休闲益智</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/4312.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1204/1543894559404810.png" alt="烈火裁决"></div>
                            <p class="name">烈火裁决</p>
                            <span class="lx">角色扮演</span>
                        </a>
                        <a href="https://shouyou.3dmgame.com/android/69266.html" class="lis" target="_blank">
                            <div class="img"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1203/1543805649956764.png" alt="侍魂：胧月传说"></div>
                            <p class="name">侍魂：胧月传说</p>
                            <span class="lx">动作竞技</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico16"></i>手游专区</span>
                    <a href="https://shouyou.3dmgame.com/zt/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="syzq_itme">
                <div class="lis">
                    <a href="https://shouyou.3dmgame.com/zt/46420/" class="img" target="_blank"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1204/1543900891437600.jpg" alt="猎手之王" /></a>
                    <a href="https://shouyou.3dmgame.com/zt/46420/" class="bt" target="_blank">猎手之王</a>
                </div>
                <div class="lis">
                    <a href="https://shouyou.3dmgame.com/zt/35655/" class="img" target="_blank"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1203/1543827582270187.png" alt="孤岛先锋" /></a>
                    <a href="https://shouyou.3dmgame.com/zt/35655/" class="bt" target="_blank">孤岛先锋</a>
                </div>
                <div class="lis">
                    <a href="https://shouyou.3dmgame.com/zt/19796/" class="img" target="_blank"><img class="lazy" data-original="https://shouyou.3dmgame.com/uploadimg/ico/2018/1203/1543814230261018.jpg" alt="月圆之夜" /></a>
                    <a href="https://shouyou.3dmgame.com/zt/19796/" class="bt" target="_blank">月圆之夜</a>
                </div>
            </div>
        </div>
    </div>
    <div  class="tonglona_4">
        <script>
            (function() {
                var s = "_" + Math.random().toString(36).slice(2);
                document.write('<div id="' + s + '"></div>');
                (window.slotbydup=window.slotbydup || []).push({
                    id: '5866588',
                    container: s,
                    size: '1160,90',
                    display: 'inlay-fix'
                });
            })();
        </script>
        <i style="width:26px;height:15px;position:absolute;left:0;bottom:0;background:url(https://www.3dmgame.com/page/images/icon_ad.png);"></i>
    </div>
    <div class="Min_6">
        <div class="Index_tit">
            <div class="tit_L">
                <i class="wl"></i>
                <span>网络 - 游戏</span>
            </div>
            <div class="tit_R">
                <a href="https://ol.3dmgame.com/news/" target="_blank"><i></i>新闻</a>
                <a href="https://ol.3dmgame.com/gl/" target="_blank"><i></i>攻略</a>
                <a href="https://ol.3dmgame.com/hao/" target="_blank"><i></i>礼包</a>
                <a href="https://ol.3dmgame.com/test/" target="_blank"><i></i>开服</a>
            </div>
            <div class="line"></div>
        </div>
        <div class="Min6_L">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico0"></i>新游测试</span>
                    <a href="https://ol.3dmgame.com/test/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M6item_a">
                <div class="lis">
                    <a href="https://ol.3dmgame.com/test/wd/" class="img" target="_blank"><img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbbig/20181026/1540533706_439301.jpg" alt="问道"></a>
                    <a href="https://ol.3dmgame.com/test/wd/" class="bt" target="_blank">问道</a>
                    <div class="time">
                        <span>11-01</span>
                        <p>天衍神机</p>
                    </div>
                    <div class="bq">
                        <a href="http://ol.3dmgame.com/ku_category_rpg_1/" target="_blank"><i></i>角色扮演</a>
                        <a href="https://ol.3dmgame.com/ku_collection_cl_1/" target="_blank"><i></i>策略</a>
                        <a href="https://ol.3dmgame.com/ku_firm_gyyx_1/" target="_blank"><i></i>光宇游戏</a>
                    </div>
                </div>
                <div class="lis">
                    <a href="https://ol.3dmgame.com/test/qxzz/" class="img" target="_blank"><img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbbig/20180920/1537425904_267431.jpg" alt="群雄征战"></a>
                    <a href="https://ol.3dmgame.com/test/qxzz/" class="bt" target="_blank">群雄征战</a>
                    <div class="time">
                        <span>12-15</span>
                        <p>横扫千军</p>
                    </div>
                    <div class="bq">
                        <a href="https://ol.3dmgame.com/ku_collection_ls_1/" target="_blank"><i></i>历史</a>
                        <a href="https://ol.3dmgame.com/ku_collection_pvp_1/" target="_blank"><i></i>竞技</a>
                        <a href="https://ol.3dmgame.com/ku_firm_178cx_1/" target="_blank"><i></i>创星网络</a>
                    </div>
                </div>
                <div class="lis">
                    <a href="https://ol.3dmgame.com/test/hxqmx/" class="img" target="_blank"><img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbbig/20180813/1534147802_201649.jpg" alt="幻想全明星"></a>
                    <a href="https://ol.3dmgame.com/test/hxqmx/" class="bt" target="_blank">幻想全明星</a>
                    <div class="time">
                        <span>09-28</span>
                        <p>美好世界</p>
                    </div>
                    <div class="bq">
                        <a href="http://ol.3dmgame.com/ku_category_MOBA_1/" target="_blank"><i></i>MOBA</a>
                        <a href="http://ol.3dmgame.com/ku_collection_dm_1/" target="_blank"><i></i>动漫</a>
                        <a href="http://ol.3dmgame.com/ku_firm_7fgame_1/" target="_blank"><i></i>起凡游戏</a>
                    </div>
                </div>
            </div>
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico17"></i>竞技视频</span>
                    <a href="https://ol.3dmgame.com/v_2_1/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M6item_b">
                <div class="lis_a">
                    <a href="https://ol.3dmgame.com/esports/10508.html" class="img" target="_blank">
                        <i class="btn"></i>
                        <img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbsmall/20181201/1543646669_210263.jpg" alt="2018《英雄联盟》全明星赛全程报道">
                    </a>
                    <a href="https://ol.3dmgame.com/esports/10508.html" class="bt" target="_blank">
                        <p>2018《英雄联盟》全明星赛全程报道</p>
                    </a>
                </div>

                <div class="lis_b">
                    <a href="https://ol.3dmgame.com/v/1242.html" class="img" target="_blank">
                        <i class="btn"></i>
                        <img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbsmall/20181027/1540640069_610758.jpg" alt="【S8半决赛】G2 VS IG">
                    </a>
                    <a href="https://ol.3dmgame.com/v/1242.html" class="bt" target="_blank">
                        <p>【S8半决赛】G2 VS IG</p>
                    </a>
                </div>

                <div class="lis_b">
                    <a href="https://ol.3dmgame.com/v/1260.html" class="img" target="_blank">
                        <i class="btn"></i>
                        <img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbsmall/20181103/1541246570_298022.jpg" alt="IG击溃FNC赢下世界冠军！">
                    </a>
                    <a href="https://ol.3dmgame.com/v/1260.html" class="bt" target="_blank">
                        <p>IG击溃FNC赢下世界冠军！</p>
                    </a>
                </div>

            </div>
        </div>
        <div class="Min6_M">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico7"></i>网游资讯</span>
                    <a href="https://ol.3dmgame.com/news/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="news_item">
                <div class="lis_a">
                    <a href="https://ol.3dmgame.com/esports/10532.html" class="bt" target="_blank">STK官宣：原AFs教练Zefa加盟，曾担任亚运会韩国队教练</a>
                    <a href="https://ol.3dmgame.com/esports/10532.html" class="img" target="_blank"><img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbnews/20181203/1543821055_940727.png" alt="STK官宣：原AFs教练Zefa加盟，曾担任亚运会韩国队教练" /></a>
                    <p class="miaoshu">
                        今日，SKT战队通过微博宣布，原AFs教练Zefa加盟，未来将与Fly一同带领SKT前进。Zefa曾是S4Najin白盾的AD，因抗癌治疗退离赛场，后转型教练回归，曾担任2018亚运会韩国英雄联盟代表队教练。





                        原文如下：


                        大家好，这里是SKT T1。
                    </p>
                </div>
                <div class="lis_a">
                    <a href="https://ol.3dmgame.com/news/201812/15329.html" class="bt" target="_blank">全面优化，《古剑奇谭网络版》首部资料片“剑鸣流花”即将上线</a>
                    <a href="https://ol.3dmgame.com/news/201812/15329.html" class="img" target="_blank"><img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbnews/2018/1203/1543802442460.jpg" alt="全面优化，《古剑奇谭网络版》首部资料片“剑鸣流花”即将上线" /></a>
                    <p class="miaoshu">
                        由网元圣唐旗下上海烛龙研发的“真时长，真仙侠，真国风”网游《古剑奇谭网络版》，已于11月24日12:00开启新服“天鹿城”。与《古剑奇谭三》联动外装已经上架，进入官网即刻了解。


                        《古剑奇谭网络版》全新资料片“剑鸣流花”，将于2018年12月下旬上线，新内容，新玩法，新场景，全面优化</p>
                </div>
                <ul class="lis_b">
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/news/201812/15377.html" class="bt" target="_blank">韩国最新法案审议 游戏代练将判2年监禁和十万罚款</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/news/201812/15376.html" class="bt" target="_blank">斗鱼主播“回归潮”，吸引力来自何方？</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/news/201812/15375.html" class="bt" target="_blank">《QQ炫舞》浪漫冬日庆典，电脑管家助力</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/news/201812/15374.html" class="bt" target="_blank">《使命召唤OL》周末任意登录一天，即可领永久翡翠</a>
                        <span>12-04</span>
                    </li>
                </ul>
            </div>
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico4"></i>网游攻略</span>
                    <a href="https://ol.3dmgame.com/gl/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M6item_c">
                <div class="lis_a">
                    <a href="https://ol.3dmgame.com/gl/29657.html" class="img" target="_blank">
                        <img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbnews/2018/1204/1543892575664.jpg" alt="《DNF》95哈勒姆​史诗防具属性" />
                    </a>
                    <a href="https://ol.3dmgame.com/gl/29657.html" class="bt" target="_blank">《DNF》95哈勒姆​史诗防具属性</a>
                </div>
                <div class="lis_a">
                    <a href="https://ol.3dmgame.com/gl/29535.html" class="img" target="_blank">
                        <img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbnews/2018/1203/1543815078913.png" alt="《流放之路》3.5COC鸟弓弹幕BD攻略" />
                    </a>
                    <a href="https://ol.3dmgame.com/gl/29535.html" class="bt" target="_blank">《流放之路》3.5COC鸟弓弹幕BD攻略</a>
                </div>
                <ul>
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/gl/29748.html" target="_blank">炉石传说拉斯塔哈魔块术怎么组</a>
                        <span>12-05</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/gl/29747.html" target="_blank">《DNF》2018圣诞套介绍</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/gl/29746.html" target="_blank">《DNF》2018圣诞武器装扮介绍</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/gl/29745.html" target="_blank">《DNF》2018圣诞装扮介绍</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/gl/29744.html" target="_blank">《DNF》2018圣诞节礼包内容介绍</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/gl/29743.html" target="_blank">《DNF》95A与90B对比分析</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://ol.3dmgame.com/gl/29742.html" target="_blank">《Artifact》平民卡组推荐</a>
                        <span>12-04</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="Min6_R">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico20"></i>热门专区</span>
                    <a href="https://ol.3dmgame.com/ku/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M6item_d">
                <div class="lis">
                    <a  href="https://ol.3dmgame.com/lol/"  target="_blank" class="img">
                        <img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbbig/20171218/1513565838_688301.jpg" alt="英雄联盟" />
                    </a>
                    <div class="menban">
                        <div class="bt">英雄联盟</div>
                        <div class="jieshao2"><a href='https://ol.3dmgame.com/ku_collection_hz_1/' target='_blank'>合作</a>,<a href='https://ol.3dmgame.com/ku_collection_pvp_1/' target='_blank'>竞技</a>,<a href='https://ol.3dmgame.com/ku_collection_cl_1/' target='_blank'>策略</a></div>
                        <a href="https://ol.3dmgame.com/lol/" target="_blank" class="zq">进入专区</a>
                    </div>
                </div>
                <div class="lis">
                    <a  href="https://ol.3dmgame.com/artifact/"  target="_blank" class="img">
                        <img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbbig/20181112/1542012641_987940.jpg" alt="Artifact" />
                    </a>
                    <div class="menban">
                        <div class="bt">Artifact</div>
                        <div class="jieshao2"><a href='https://ol.3dmgame.com/ku_collection_qh_1/' target='_blank'>奇幻</a>,<a href='https://ol.3dmgame.com/ku_collection_pvp_1/' target='_blank'>竞技</a>,<a href='https://ol.3dmgame.com/ku_collection_cl_1/' target='_blank'>策略</a></div>
                        <a href="https://ol.3dmgame.com/artifact/" target="_blank" class="zq">进入专区</a>
                    </div>
                </div>
                <div class="lis">
                    <a  href="https://ol.3dmgame.com/dnf/"  target="_blank" class="img">
                        <img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbbig/20171218/1513565190_260859.jpg" alt="地下城与勇士" />
                    </a>
                    <div class="menban">
                        <div class="bt">地下城与勇士</div>
                        <div class="jieshao2"><a href='https://ol.3dmgame.com/ku_collection_mx_1/' target='_blank'>冒险</a>,<a href='https://ol.3dmgame.com/ku_collection_pvp_1/' target='_blank'>竞技</a>,<a href='https://ol.3dmgame.com/ku_collection_mh_1/' target='_blank'>魔幻</a></div>
                        <a href="https://ol.3dmgame.com/dnf/" target="_blank" class="zq">进入专区</a>
                    </div>
                </div>
            </div>
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico15"></i>网游活动</span>
                    <a href="https://ol.3dmgame.com/news_5_1/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M6item_e">
                <div class="lis">
                    <a href="https://ol.3dmgame.com/news/201812/15375.html" class="img" target="_blank"><img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbnewshd/20181204/1543916375_628018.jpg" alt="《QQ炫舞》浪漫冬日庆典，电脑管家助力"></a>
                    <a href="https://ol.3dmgame.com/news/201812/15375.html" class="bt" target="_blank">《QQ炫舞》浪漫冬日庆典，电脑管家助力</a>
                    <div class="txt">奖励 : Q币、腾讯视频VIP</div>
                    <div class="time">时间：11-30—12-29</div>
                    <a href="https://ol.3dmgame.com/news/201812/15375.html" class="btn" target="_blank">参与活动</a>
                </div>
                <div class="lis">
                    <a href="https://ol.3dmgame.com/news/201812/15374.html" class="img" target="_blank"><img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbnewshd/20181204/1543914145_411120.jpg" alt="《使命召唤OL》周末任意登录一天，即可领永久翡翠"></a>
                    <a href="https://ol.3dmgame.com/news/201812/15374.html" class="bt" target="_blank">《使命召唤OL》周末任意登录一天，即可领永久翡翠</a>
                    <div class="txt">奖励 : 翡翠阔剑地雷</div>
                    <div class="time">时间：12-07—12-09</div>
                    <a href="https://ol.3dmgame.com/news/201812/15374.html" class="btn" target="_blank">参与活动</a>
                </div>
                <div class="lis">
                    <a href="https://ol.3dmgame.com/news/201812/15373.html" class="img" target="_blank"><img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbnewshd/2018/1204/1543912047244.jpg" alt="《使命召唤OL》重金属刮刮刮，重金属特色配件首发"></a>
                    <a href="https://ol.3dmgame.com/news/201812/15373.html" class="bt" target="_blank">《使命召唤OL》重金属刮刮刮，重金属特色配件首发</a>
                    <div class="txt">奖励 : 重金属系列、史诗角色</div>
                    <div class="time">时间：12-04—01-31</div>
                    <a href="https://ol.3dmgame.com/news/201812/15373.html" class="btn" target="_blank">参与活动</a>
                </div>
                <div class="lis">
                    <a href="https://ol.3dmgame.com/news/201812/15355.html" class="img" target="_blank"><img class="lazy" data-original="https://ol.3dmgame.com/uploads/images/thumbnewshd/2018/1203/1543829269447.png" alt="《地下城与勇士》时光之约，我与NPC有个约定"></a>
                    <a href="https://ol.3dmgame.com/news/201812/15355.html" class="bt" target="_blank">《地下城与勇士》时光之约，我与NPC有个约定</a>
                    <div class="txt">奖励 : 深渊派对邀请函</div>
                    <div class="time">时间：11-29—12-13</div>
                    <a href="https://ol.3dmgame.com/news/201812/15355.html" class="btn" target="_blank">参与活动</a>
                </div>
            </div>
        </div>
    </div>
    <div class="Min_7">
        <div class="Index_tit">
            <div class="tit_L">
                <i class="wy"></i>
                <span>网页 - 游戏</span>
            </div>
            <div class="tit_R">
                <a href="https://yeyou.3dmgame.com/news/" target="_blank"><i></i>新闻</a>
                <a href="https://yeyou.3dmgame.com/gl/" target="_blank"><i></i>攻略</a>
                <a href="https://yeyou.3dmgame.com/gift/" target="_blank"><i></i>发号</a>
            </div>
            <div class="line"></div>
        </div>
        <div class="Min7_L">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico19"></i>经典页游</span>
                    <a href="https://yeyou.3dmgame.com/zt/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M7item_a">
                <div class="lis">
                    <a href="http://bbs.3dmgame.com/plugin.php?id=smx_dldl:wsadvertisement" class="img" target="_blank"><img src="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20180930/1538290647_798521.png" alt="斗罗大陆"></a>
                    <div class="mb"><a href="http://bbs.3dmgame.com/plugin.php?id=smx_dldl:wsadvertisement" class="playbtn" target="_blank">进入游戏</a></div>
                    <div class="info">
                        <a href="http://bbs.3dmgame.com/plugin.php?id=smx_dldl:wsadvertisement" class="bt" target="_blank">斗罗大陆</a>
                    </div>
                </div>
                <div class="lis">
                    <a href="http://bbs.3dmgame.com/plugin.php?id=smx_sslj:advertisement" class="img" target="_blank"><img src="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20181009/1539071282_195289.jpg" alt="三十六计"></a>
                    <div class="mb"><a href="http://bbs.3dmgame.com/plugin.php?id=smx_sslj:advertisement" class="playbtn" target="_blank">进入游戏</a></div>
                    <div class="info">
                        <a href="http://bbs.3dmgame.com/plugin.php?id=smx_sslj:advertisement" class="bt" target="_blank">三十六计</a>
                    </div>
                </div>
                <div class="lis">
                    <a href="http://bbs.3dmgame.com/plugin.php?id=smx_xiangsu:3dmadvertisement" class="img" target="_blank"><img src="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20181009/1539071455_687962.jpg" alt="像素骑士团"></a>
                    <div class="mb"><a href="http://bbs.3dmgame.com/plugin.php?id=smx_xiangsu:3dmadvertisement" class="playbtn" target="_blank">进入游戏</a></div>
                    <div class="info">
                        <a href="http://bbs.3dmgame.com/plugin.php?id=smx_xiangsu:3dmadvertisement" class="bt" target="_blank">像素骑士团</a>
                    </div>
                </div>
                <div class="lis">
                    <a href="http://bbs.3dmgame.com/plugin.php?id=smx_hdx:3dmadvertisement" class="img" target="_blank"><img src="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20181116/1542339503_744515.jpg" alt="寒刀行"></a>
                    <div class="mb"><a href="http://bbs.3dmgame.com/plugin.php?id=smx_hdx:3dmadvertisement" class="playbtn" target="_blank">进入游戏</a></div>
                    <div class="info">
                        <a href="http://bbs.3dmgame.com/plugin.php?id=smx_hdx:3dmadvertisement" class="bt" target="_blank">寒刀行</a>
                    </div>
                </div>
            </div>
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico4"></i>页游攻略</span>
                    <a href="https://yeyou.3dmgame.com/gl/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M7item_b">
                <div class="news_item">
                    <div class="lia_c">
                        <a href="https://yeyou.3dmgame.com/gl/14617.html" target="_blank" class="lis">
                            <div class="img"><img src="https://yeyou.3dmgame.com/uploads/images/thumbgl/2018/1128/1543398632833.jpg" alt="《暴走萌姬》全斗士装备附魔属性详细解析" /></div>
                            <div class="bt">《暴走萌姬》全斗士装备附魔属性详细解析</div>
                        </a>
                        <a href="https://yeyou.3dmgame.com/gl/14475.html" target="_blank" class="lis">
                            <div class="img"><img src="https://yeyou.3dmgame.com/uploads/images/thumbgl/20181126/1543217764_518551.jpg" alt="万军丛中取敌将首级 《战神三十六计》传奇英雄白起介绍" /></div>
                            <div class="bt">万军丛中取敌将首级 《战神三十六计》传奇英雄白起介绍</div>
                        </a>
                    </div>
                    <ul class="lis_b">
                        <li>
                            <i></i>
                            <a href="https://yeyou.3dmgame.com/gl/14783.html" class="bt" target="_blank">《绝世神功》进阶攻略</a>
                            <span>12-04</span>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://yeyou.3dmgame.com/gl/14781.html" class="bt" target="_blank">《绝世神功》平民攻略</a>
                            <span>12-04</span>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://yeyou.3dmgame.com/gl/14780.html" class="bt" target="_blank">《荣耀与远征》魔卡战场攻略</a>
                            <span>12-04</span>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://yeyou.3dmgame.com/gl/14778.html" class="bt" target="_blank">《荣耀与远征》皮肤元素玩法介绍</a>
                            <span>12-04</span>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://yeyou.3dmgame.com/gl/14777.html" class="bt" target="_blank">《大明王爷》开疆扩土副本介绍</a>
                            <span>12-04</span>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://yeyou.3dmgame.com/gl/14775.html" class="bt" target="_blank">《大明王爷》秀院玩法攻略</a>
                            <span>12-04</span>
                        </li>
                        <li>
                            <i></i>
                            <a href="https://yeyou.3dmgame.com/gl/14774.html" class="bt" target="_blank">《大明王爷》幕僚属性详解</a>
                            <span>12-04</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Min7_M">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico7"></i>页游资讯</span>
                    <a href="https://yeyou.3dmgame.com/news/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="news_item">
                <div class="lis_a">
                    <a href="https://yeyou.3dmgame.com/news/10854.html" class="bt" target="_blank">《寒刀行》线下充值返利Ⅱ</a>
                    <a href="https://yeyou.3dmgame.com/news/10854.html" class="img" target="_blank"><img class="lazy" data-original="https://yeyou.3dmgame.com/uploads/images/thumbnews/20181204/1543895845_665292.jpg" alt="《寒刀行》线下充值返利Ⅱ" /></a>
                    <p class="miaoshu">
                        返利叠加，单日累计充值金额数超过当前档且达不到下一档的，按当前档返，比如单日累计充值1900元，返500跟1000档，单日累计900元，返500档，游戏刚上线下返利，只按此表内道具和数量进行返利，返利金额也必须是单日累计，线下返利12月4日0点正式开启（之前充值的不算在内），没有特殊。

                    </p>
                </div>
                <div class="lis_a">
                    <a href="https://yeyou.3dmgame.com/news/10831.html" class="bt" target="_blank">《梦道》双十二疯狂购物节活动</a>
                    <a href="https://yeyou.3dmgame.com/news/10831.html" class="img" target="_blank"><img class="lazy" data-original="https://yeyou.3dmgame.com/uploads/images/thumbnews/20181130/1543561717_726950.jpg" alt="《梦道》双十二疯狂购物节活动" /></a>
                    <p class="miaoshu">
                        《梦道》是一款主打东方仙侠元素的回合制H5游戏作品！游戏拥有精致细腻的画面风格，独创的策略战斗模式，双十二即将来临，《梦道》双十二活动已然到来，下面是是活动内容介绍，具体活动内容以游戏内为准。


                        活动一：节日好礼


                        1. 活动时间：2018年11月30日00:00:00-2</p>
                </div>
                <ul class="lis_b">
                    <li>
                        <i></i>
                        <a href="https://yeyou.3dmgame.com/news/10856.html" class="bt" target="_blank">《魔灵军团》本周周中活动公告</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://yeyou.3dmgame.com/news/10855.html" class="bt" target="_blank">《寒刀行》临时维护公告</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://yeyou.3dmgame.com/news/10852.html" class="bt" target="_blank">3D视效 《黑域战界》十大颜值女神你值得拥有</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://yeyou.3dmgame.com/news/10851.html" class="bt" target="_blank">三足鼎立《奇迹重生》阿尔卡战争上演三强争霸</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://yeyou.3dmgame.com/news/10850.html" class="bt" target="_blank">预约即享豪礼 《热血合击》瓜分百万元宝大奖</a>
                        <span>12-04</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://yeyou.3dmgame.com/news/10849.html" class="bt" target="_blank">12月4日《战神三十六计》全区全服更新公告</a>
                        <span>12-03</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://yeyou.3dmgame.com/news/10848.html" class="bt" target="_blank">《寒刀行》12月4日合服公告</a>
                        <span>12-03</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://yeyou.3dmgame.com/news/10846.html" class="bt" target="_blank">《寒刀行》合服活动</a>
                        <span>12-03</span>
                    </li>
                    <li>
                        <i></i>
                        <a href="https://yeyou.3dmgame.com/news/10845.html" class="bt" target="_blank">《寒刀行》合服规则</a>
                        <span>12-03</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="Min7_R">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico2"></i>页游开服表</span>
                    <a href="https://yeyou.3dmgame.com/kf/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M7item_c">
                <div class="lis on">
                    <div class="box_a">
                        <a href="http://web.3dmgame.com/h5/game?gameid=10015"  target="_blank" class="name">侠客行</a>
                        <div class="lx">S2353</div>
                        <div class="time">2018-12-05</div>
                        <div class="box_b">
                            <a href="http://web.3dmgame.com/h5/game?gameid=10015"  target="_blank" class="img"><img src="https://yeyou.3dmgame.com/uploads/images/thumbgameh5/20181009/1539076031_158576.jpg" alt="侠客行"></a>
                            <a href="http://web.3dmgame.com/h5/game?gameid=10015"  target="_blank" class="btn" rel="nofollow">开始游戏</a>
                        </div>
                    </div>
                </div>
                <div class="lis">
                    <div class="box_a">
                        <a href="http://bbs.3dmgame.com/forum-2652-1.html"  target="_blank" class="name">西游七十二变</a>
                        <div class="lx">长安906服			</div>
                        <div class="time">2018-12-05</div>
                        <div class="box_b">
                            <a href="http://bbs.3dmgame.com/forum-2652-1.html"  target="_blank" class="img"><img src="https://yeyou.3dmgame.com/uploads/images/thumbgameh5/20180703/1530620142_181332.jpg" alt="西游七十二变"></a>
                            <a href="http://bbs.3dmgame.com/forum-2652-1.html"  target="_blank" class="btn" rel="nofollow">开始游戏</a>
                        </div>
                    </div>
                </div>
                <div class="lis">
                    <div class="box_a">
                        <a href="http://bbs.3dmgame.com/forum-2784-1.html"  target="_blank" class="name">超能战区</a>
                        <div class="lx">太空148区</div>
                        <div class="time">2018-12-05</div>
                        <div class="box_b">
                            <a href="http://bbs.3dmgame.com/forum-2784-1.html"  target="_blank" class="img"><img src="https://yeyou.3dmgame.com/uploads/images/thumbgameh5/20180829/1535514063_582251.jpg" alt="超能战区"></a>
                            <a href="http://bbs.3dmgame.com/forum-2784-1.html"  target="_blank" class="btn" rel="nofollow">开始游戏</a>
                        </div>
                    </div>
                </div>
                <div class="lis">
                    <div class="box_a">
                        <a href="http://web.3dmgame.com/h5/game?gameid=10055"  target="_blank" class="name">部落大作战</a>
                        <div class="lx">S76</div>
                        <div class="time">2018-12-05</div>
                        <div class="box_b">
                            <a href="http://web.3dmgame.com/h5/game?gameid=10055"  target="_blank" class="img"><img src="https://yeyou.3dmgame.com/uploads/images/thumbgameh5/20180913/1536828322_440318.png" alt="部落大作战"></a>
                            <a href="http://web.3dmgame.com/h5/game?gameid=10055"  target="_blank" class="btn" rel="nofollow">开始游戏</a>
                        </div>
                    </div>
                </div>
                <div class="lis">
                    <div class="box_a">
                        <a href="http://bbs.3dmgame.com/forum-2181-1.html"  target="_blank" class="name">绝世神功</a>
                        <div class="lx">正式1000服</div>
                        <div class="time">2018-12-05</div>
                        <div class="box_b">
                            <a href="http://bbs.3dmgame.com/forum-2181-1.html"  target="_blank" class="img"><img src="https://yeyou.3dmgame.com/uploads/images/thumbgameh5/20180704/1530694227_933126.jpg" alt="绝世神功"></a>
                            <a href="http://bbs.3dmgame.com/forum-2181-1.html"  target="_blank" class="btn" rel="nofollow">开始游戏</a>
                        </div>
                    </div>
                </div>
                <div class="lis">
                    <div class="box_a">
                        <a href="http://bbs.3dmgame.com/forum-2774-1.html"  target="_blank" class="name">命运守护夜</a>
                        <div class="lx">守护112服	</div>
                        <div class="time">2018-12-05</div>
                        <div class="box_b">
                            <a href="http://bbs.3dmgame.com/forum-2774-1.html"  target="_blank" class="img"><img src="https://yeyou.3dmgame.com/uploads/images/thumbgameh5/20180813/1534154740_763812.jpg" alt="命运守护夜"></a>
                            <a href="http://bbs.3dmgame.com/forum-2774-1.html"  target="_blank" class="btn" rel="nofollow">开始游戏</a>
                        </div>
                    </div>
                </div>
                <div class="lis">
                    <div class="box_a">
                        <a href="http://web.3dmgame.com/h5/game?gameid=10066"  target="_blank" class="name">古龙群侠传2</a>
                        <div class="lx">群侠15服</div>
                        <div class="time">2018-12-05</div>
                        <div class="box_b">
                            <a href="http://web.3dmgame.com/h5/game?gameid=10066"  target="_blank" class="img"><img src="https://yeyou.3dmgame.com/uploads/images/thumbgameh5/20181120/1542697799_755370.jpg" alt="古龙群侠传2"></a>
                            <a href="http://web.3dmgame.com/h5/game?gameid=10066"  target="_blank" class="btn" rel="nofollow">开始游戏</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Min7_B">
            <div class="QZ_title">
                <div class="bt">
                    <span><i class="ico18"></i>H5游戏</span>
                    <a href="https://yeyou.3dmgame.com/h5/" target="_blank" class="mor">更多<i></i></a>
                </div>
            </div>
            <div class="M7item_d">
                <div class="lis">
                    <a href="http://web.3dmgame.com/h5/game?gameid=10013" target="_blank" class="img"><img class="lazy" data-original="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20181030/1540868853_552608.jpg" alt="《暴走萌姬》"></a>
                    <div class="top">
                        <div class="ewm"><img src="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20181129/1543470671_790086.png" alt="《暴走萌姬》"></div>
                        <a href="http://web.3dmgame.com/h5/game?gameid=10013" target="_blank" class="play">开始游戏</a>
                        <a href="https://yeyou.3dmgame.com/zt/bzmj/" target="_blank" class="gw" rel="nofollow">进入官网</a>
                    </div>
                    <div class="bot">
                        <p>《暴走萌姬》</p>
                        <span>史上最性感最刺激的H5游戏</span>
                    </div>
                </div>
                <div class="lis">
                    <a href="http://web.3dmgame.com/h5/game?gameid=10011" target="_blank" class="img"><img class="lazy" data-original="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20181030/1540868861_879693.jpg" alt="《绯雨骑士团》"></a>
                    <div class="top">
                        <div class="ewm"><img src="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20181129/1543470680_667560.png" alt="《绯雨骑士团》"></div>
                        <a href="http://web.3dmgame.com/h5/game?gameid=10011" target="_blank" class="play">开始游戏</a>
                        <a href="https://yeyou.3dmgame.com/zt/fyqst/" target="_blank" class="gw" rel="nofollow">进入官网</a>
                    </div>
                    <div class="bot">
                        <p>《绯雨骑士团》</p>
                        <span>小姐姐都爱玩的公会战</span>
                    </div>
                </div>
                <div class="lis">
                    <a href="http://web.3dmgame.com/h5/game?gameid=10024" target="_blank" class="img"><img class="lazy" data-original="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20181009/1539072468_320779.jpg" alt="《妖怪宝可萌》"></a>
                    <div class="top">
                        <div class="ewm"><img src="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20181129/1543470688_547702.png" alt="《妖怪宝可萌》"></div>
                        <a href="http://web.3dmgame.com/h5/game?gameid=10024" target="_blank" class="play">开始游戏</a>
                        <a href="https://yeyou.3dmgame.com/zt/ygbkm/" target="_blank" class="gw" rel="nofollow">进入官网</a>
                    </div>
                    <div class="bot">
                        <p>《妖怪宝可萌》</p>
                        <span>口袋粉的最爱</span>
                    </div>
                </div>
                <div class="lis">
                    <a href="http://web.3dmgame.com/h5/game?gameid=10032" target="_blank" class="img"><img class="lazy" data-original="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20181009/1539072582_793817.png" alt="《命运守护夜》"></a>
                    <div class="top">
                        <div class="ewm"><img src="https://yeyou.3dmgame.com/uploads/images/thumbsmall/20181129/1543470698_120152.png" alt="《命运守护夜》"></div>
                        <a href="http://web.3dmgame.com/h5/game?gameid=10032" target="_blank" class="play">开始游戏</a>
                        <a href="https://yeyou.3dmgame.com/zt/myshy/" target="_blank" class="gw" rel="nofollow">进入官网</a>
                    </div>
                    <div class="bot">
                        <p>《命运守护夜》</p>
                        <span>二次元卡牌对战</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Min_8">
        <div class="Index_tit">
            <div class="tit_L">
                <i class="yl"></i>
                <span>娱乐 - 频道</span>
            </div>
            <div class="tit_R">
                <a href="https://www.3dmgame.com/bagua_62_1/" target="_blank"><i></i>娱乐八卦</a>
                <a href="https://www.3dmgame.com/bagua_63_1/" target="_blank"><i></i>涨涨姿势</a>
                <a href="https://www.3dmgame.com/bagua_64_1/" target="_blank"><i></i>观察者联盟</a>
                <a href="https://www.3dmgame.com/bagua_65_1/" target="_blank"><i></i>人在囧图</a>
                <a href="https://www.3dmgame.com/bagua_66_1/" target="_blank"><i></i>精选壁纸</a>
            </div>
            <div class="line"></div>
        </div>
        <div class="M8_item">
            <div class="lis_a">
                <a href="https://www.3dmgame.com/news/201812/3750651.html" class="img" target="_blank"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181203/1543818064_864294.jpg" alt=" 日本美女COS《血源》玛利亚 冷漠优雅气质还原" /></a>
                <a href="https://www.3dmgame.com/news/201812/3750651.html" class="txt" target="_blank"> 日本美女COS《血源》玛利亚 冷漠优雅气质还原</a>
            </div>
            <div class="lis_b">
                <div class="lis">
                    <a href="https://www.3dmgame.com/news/201812/3750533.html" class="img" target="_blank"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181201/1543656746_190868.jpg" alt="深度再挖掘！经典科幻电影《银翼杀手2049》将制作动画版" /></a>
                    <a href="https://www.3dmgame.com/news/201812/3750533.html" class="txt" target="_blank">深度再挖掘！经典科幻电影《银翼杀手2049》将制作动画版</a>
                </div>
                <div class="lis">
                    <a href="https://www.3dmgame.com/news/201811/3750434.html" class="img" target="_blank"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181130/1543548966_537131.jpg" alt="《复联3&4》导演将亮相TGA：届时有重大内容发表！"></a>
                    <a href="https://www.3dmgame.com/news/201811/3750434.html" class="txt" target="_blank">《复联3&4》导演将亮相TGA：届时有重大内容发表！</a>
                </div>
            </div>
            <div class="lis_a">
                <a href="https://www.3dmgame.com/news/201812/3750521.html" class="img" target="_blank"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181201/1543656669_257384.jpg" alt="圣衣加护妹子变小强！《圣斗少女翔》全新动画版最新演示放出"></a>
                <a href="https://www.3dmgame.com/news/201812/3750521.html" class="txt" target="_blank">圣衣加护妹子变小强！《圣斗少女翔》全新动画版最新演示放出</a>
            </div>
            <div class="lis_b">
                <div class="lis">
                    <a href="https://www.3dmgame.com/news/201812/3750637.html" class="img" target="_blank"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181203/1543818433_709432.jpg" alt="漫威女英雄电影《惊奇队长》海报 一身战甲惊艳"></a>
                    <a href="https://www.3dmgame.com/news/201812/3750637.html" class="txt" target="_blank">漫威女英雄电影《惊奇队长》海报 一身战甲惊艳</a>
                </div>
                <div class="lis">
                    <a href="https://www.3dmgame.com/news/201812/3750539.html" class="img" target="_blank"><img class="lazy" data-original="https://img.3dmgame.com/uploads/images/thumbnews/20181201/1543656347_217771.jpg" alt="2米高哥斯拉惊现东京漫画展 《哥斯拉2》宣传造势中"></a>
                    <a href="https://www.3dmgame.com/news/201812/3750539.html" class="txt" target="_blank">2米高哥斯拉惊现东京漫画展 《哥斯拉2》宣传造势中</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="Linkwrap" style="display: block;">
    <div class="Yqlink">
        <div class="link">
            <p><i></i>友情链接      QQ：306596972</p>
            <a href="http://www.3dmgame.com/" target="_blank"  >单机游戏</a>
            <a href="http://shouyou.3dmgame.com/" target="_blank"  >手机游戏</a>
            <a href="http://www.pc6.com/" target="_blank"  >pc6下载站</a>
            <a href="https://www.cr173.com/" target="_blank"  >西西软件园</a>
            <a href="http://www.game333.net/" target="_blank"  >单机游戏下载</a>
            <a href="http://www.paopaoche.net/" target="_blank"  >单机游戏下载</a>
            <a href="http://www.91danji.com/" target="_blank"  >91单机网</a>
            <a href="http://www.962.net/" target="_blank"  >单机游戏下载</a>
            <a href="http://www.manhuatai.com/" target="_blank"  >罗大陆漫画</a>
            <a href="http://www.liqucn.com/" target="_blank"  >历趣app下载</a>
            <a href="http://www.narutom.com/" target="_blank"  >火影忍者</a>
            <a href="http://www.cncrk.com/" target="_blank"  >起点软件下载</a>
            <a href="http://www.xiazaiba.com/" target="_blank"  >绿色下载吧</a>
            <a href="http://v.61.com/" target="_blank"  >动画片大全</a>
            <a href="https://www.fxxz.com/" target="_blank"  >游戏下载基地</a>
            <a href="http://www.doyo.cn/" target="_blank"  >单机游戏下载</a>
            <a href="http://www.yzmg.com/" target="_blank"  >亿智蘑菇</a>
            <a href="http://www.yxdown.com/" target="_blank"  >游讯单机游戏</a>
            <a href="https://www.52pojie.cn/" target="_blank"  >吾爱破解</a>
            <a href="https://www.ruan8.com/" target="_blank"  >软吧手机软件</a>
            <a href="https://www.douxie.com/" target="_blank"  >斗蟹游戏</a>
            <a href="http://www.52z.com/" target="_blank"  >飞翔下载</a>
            <a href="http://www.downza.cn/" target="_blank"  >下载之家</a>
            <a href="http://www.3987.com/" target="_blank"  >统一下载</a>
            <a href="http://www.pc841.com/" target="_blank"  >百事电脑网</a>
            <a href="http://www.ooqiu.com/" target="_blank"  >求全电竞网</a>
            <a href="http://www.glzy8.com/" target="_blank"  >管理资料</a>
            <a href="http://news.4399.com/" target="_blank"  >4399资讯</a>
            <a href="https://www.xiaopi.com/" target="_blank"  >小皮游戏</a>
            <a href="http://www.18183.com/" target="_blank"  >18183手机游戏</a>
            <a href="http://www.37.com/" target="_blank"  >37游戏</a>
            <a href="http://www.gamedog.cn/" target="_blank"  >手机游戏</a>
            <a href="http://www.4399.cn/" target="_blank"  >4399手机游戏</a>
            <a href="http://www.07073.com/" target="_blank"  >网页游戏</a>
            <a href="https://www.youzu.com/" target="_blank"  >网页游戏</a>
            <a href="http://www.gamersky.com/" target="_blank"  >游民星空</a>
            <a href="http://cc.163.com/" target="_blank"  >cc直播</a>
            <a href="http://www.ddooo.com/" target="_blank"  >多多软件站</a>
            <a href="http://www.jianglishi.cn/" target="_blank"  >讲历史</a>
            <a href="https://www.douyu.com/  " target="_blank"  >游戏直播</a>
            <a href="https://www.qqtn.com/" target="_blank"  >QQ下载</a>
            <a href="http://www.pcsoft.com.cn/" target="_blank"  >PC下载网</a>
            <a href="http://www.onlinedown.net/" target="_blank"  >软件下载</a>
            <a href="https://www.dns.com?token=856018&id=53" target="_blank"  >游戏专用DNS</a>
        </div>
    </div>
    <div class="line"></div>
</div>
<div class="fotter">
    <div class="fotter-top">
        <div class="center">
            <div class="wrap">
                <p>综合内容</p>
                <ul>
                    <li><a href="https://3c.3dmgame.com/" target="_blank">硬件设备</a></li>
                    <li><a href="http://bbs.3dmgame.com/" target="_blank">游戏论坛</a></li>
                    <li><a href="https://www.3dmgame.com/bagua/" target="_blank">娱乐频道</a></li>
                    <li><a href="https://www.3dmgame.com/original.html" target="_blank">原创专栏</a></li>
                    <li><a href="https://3dmgame.taobao.com/" target="_blank">游戏商城</a></li>
                    <li><a href="https://www.3dmgame.com/hanhua/" target="_blank">游戏汉化</a></li>
                </ul>
            </div>
            <div class="wrap">
                <p>单机游戏</p>
                <ul>
                    <li><a href="https://dl.3dmgame.com/" target="_blank">游戏下载</a></li>
                    <li><a href="https://dl.3dmgame.com/patch/" target="_blank">补丁MOD</a></li>
                    <li><a href="https://www.3dmgame.com/gl/" target="_blank">原创攻略</a></li>
                    <li><a href="https://www.3dmgame.com/games/ns_all_1/" target="_blank">Switch</a></li>
                    <li><a href="https://www.3dmgame.com/games/ps4_all_1/" target="_blank">PS4</a></li>
                    <li><a href="https://www.3dmgame.com/release/" target="_blank">发售表</a></li>
                </ul>
            </div>
            <div class="wrap">
                <p>手机游戏</p>
                <ul>
                    <li><a href="https://shouyou.3dmgame.com/android/" target="_blank">安卓游戏</a></li>
                    <li><a href="https://shouyou.3dmgame.com/ios/" target="_blank">苹果游戏</a></li>
                    <li><a href="https://shouyou.3dmgame.com/gl/" target="_blank">手游攻略</a></li>
                    <li><a href="https://shouyou.3dmgame.com/ka/" target="_blank">手游礼包</a></li>
                    <li><a href="https://shouyou.3dmgame.com/zt/" target="_blank">专题合集</a></li>
                    <li><a href="https://shouyou.3dmgame.com/phb/" target="_blank">手游排行</a></li>
                </ul>
            </div>
            <div class="wrap">
                <p>网络游戏</p>
                <ul>
                    <li><a href="https://ol.3dmgame.com/news/" target="_blank">网游资讯</a></li>
                    <li><a href="https://ol.3dmgame.com/esports/" target="_blank">竞技赛事</a></li>
                    <li><a href="https://ol.3dmgame.com/news_5_1/" target="_blank">网游活动</a></li>
                    <li><a href="https://ol.3dmgame.com/ku/" target="_blank">网游大全</a></li>
                    <li><a href="https://ol.3dmgame.com/test/" target="_blank">新游试玩</a></li>
                    <li><a href="https://ol.3dmgame.com/hao/" target="_blank">激活码</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="fotter-bottom">
        <div class="fotter-link">
            <a href="https://www.3dmgame.com/s/about.html" target="_blank">关于3DMGAME</a>|<a href="https://www.3dmgame.com/s/joinus.html" target="_blank">招聘信息</a>|<a href="https://www.3dmgame.com/s/sitemap.html" target="_blank">网站地图</a>|<a href="https://www.3dmgame.com/s/contact.html" target="_blank">联系我们</a>|<a href="https://www.3dmgame.com/s/media.html" target="_blank">媒体信息</a>
            <p>CopyRight©2003-2018 <a href="https://www.3dmgame.com">WWW.3DMGAME.COM</a> All Right Reserved 京ICP备14006952号-1 京网文（2016）1650-207号</p>
        </div>
    </div>
</div>
<script src="https://www.3dmgame.com/index/js/lazyload.js"></script>
<script src="https://www.3dmgame.com/index/js/pic_tab.js"></script>
<script src="https://www.3dmgame.com/index/js/index.js"></script>
<div style="display: none;">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?41e10dae8e5d7e8cc907484abce82fb9";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</div>
<script src="https://my.3dmgame.com/user/js/user.js?v=1107"></script>
<div id="my_login_form" class="login_wrap"  style="display: none;">
    <div class="form_login">
        <div class="title">会员登录</div>
        <div class="input_wrap login_username">
            <div class="name_ico">
                <i></i>
            </div>
            <input type="text" title="用户名" name="username" id="loginname" value="" maxlength="" placeholder="请输入手机号 / 论坛账号 " />
            <p class="Tipsbox_yes Tips_name"></p>
        </div>
        <div class="input_wrap login_password">
            <div class="password_ico">
                <i></i>
            </div>
            <input type="password" title="密码" name="passwd" id="loginpassword" value="" required="required" placeholder="请输入密码">
            <p class="Tipsbox_yes Tips_pswd"></p>
        </div>
        <div class="Tipsbox Tips-name">
            <i></i>
            <p>请输入手机号或论坛账号</p>
        </div>
        <div class="Tipsbox Tips-pswd">
            <i></i>
            <p>请输入密码</p>
        </div>
        <div class="auto_login">
            <div class="radiobtn">
                <input type="checkbox" id="atloginck" value="1" checked="checked" onchange="setautologin(this)" />
                <input type="hidden" name="autologin" id="myautologin" value="1" />
                <span class="inpbg"></span>
            </div>
            <label for="atloginck">自动登录</label>
            <a href="https://my.3dmgame.com/findpasswd" class="forget_link" target="_blank">忘记密码</a>
            <a href="javascript:void(0);" class="registered_link" onclick="openregister()">新会员注册</a>
        </div>
        <a href="javascript:void(0);" class="submit" onclick="login_submit()">登 录</a>
        <div class="other_login">
            <p>社交账号登录</p>
        </div>
        <div class="other_login_list">
            <div class="weibo">
                <i onclick="sina_login()"></i>
            </div>
            <div class="weixin">
                <i onclick="wechat_login()"></i>
            </div>
            <div class="QQ">
                <i onclick="qq_login()"></i>
            </div>
        </div>
    </div>
    <div class="form_register">
        <div class="title">3DM  欢迎新人加入</div>
        <div class="infowrap">
            <div class="input_lis">
                <span>区号:</span>
                <select id="areacode" name="areacode">
                    <option value="86" >中国大陆(China-86)</option>
                    <option value="852" >中国香港(Hong Kong-852)</option>
                    <option value="853" >中国澳门(Macau-853)</option>
                    <option value="886" >中国台湾(Taiwan-886)</option>
                    <option value="855" >柬埔寨(Cambodia-855)</option>
                    <option value="91" >印度(India-91)</option>
                    <option value="62" >印度尼西亚(Indonesia-62)</option>
                    <option value="972" >以色列(Israel-972)</option>
                    <option value="81" >日本(Japan-81)</option>
                    <option value="962" >约旦(Jordan-962)</option>
                    <option value="996" >吉尔吉斯斯坦(Kyrgyzstan-996)</option>
                    <option value="60" >马来西亚(Malaysia-60)</option>
                    <option value="960" >马尔代夫(Maldives-960)</option>
                    <option value="976" >蒙古(Mongolia-976)</option>
                    <option value="63" >菲律宾(Philippines-63)</option>
                    <option value="974" >卡塔尔(Qatar-974)</option>
                    <option value="966" >沙特阿拉伯(Saudi Arabia-966)</option>
                    <option value="65" >新加坡(Singapore-65)</option>
                    <option value="82" >韩国(South Korea-82)</option>
                    <option value="94" >斯里兰卡(Sri Lanka-94)</option>
                    <option value="90" >土耳其(Turkey-90)</option>
                    <option value="964" >伊拉克(Iraq-964)</option>
                    <option value="66" >泰国(Thailand-66)</option>
                    <option value="971" >阿联酋(United Arab Emirates-971)</option>
                    <option value="84" >越南(Vietnam-84)</option>
                    <option value="43" >奥地利(Austria-43)</option>
                    <option value="375" >白俄罗斯(Belarus-375)</option>
                    <option value="32" >比利时(Belgium-32)</option>
                    <option value="359" >保加利亚(Bulgaria-359)</option>
                    <option value="45" >丹麦(Denmark-45)</option>
                    <option value="372" >爱沙尼亚(Estonia-372)</option>
                    <option value="358" >芬兰(Finland-358)</option>
                    <option value="33" >法国(France-33)</option>
                    <option value="49" >德国(Germany-49)</option>
                    <option value="30" >希腊(Greece-30)</option>
                    <option value="36" >匈牙利(Hungary-36)</option>
                    <option value="353" >爱尔兰(Ireland-353)</option>
                    <option value="39" >意大利(Italy-39)</option>
                    <option value="370" >立陶宛(Lithuania-370)</option>
                    <option value="352" >卢森堡(Luxembourg-352)</option>
                    <option value="31" >荷兰(Netherlands-31)</option>
                    <option value="47" >挪威(Norway-47)</option>
                    <option value="48" >波兰(Poland-48)</option>
                    <option value="351" >葡萄牙(Portugal-351)</option>
                    <option value="40" >罗马尼亚(Romania-40)</option>
                    <option value="7" >俄罗斯(Russia-7)</option>
                    <option value="381" >塞尔维亚(Serbia-381)</option>
                    <option value="34" >西班牙(Spain-34)</option>
                    <option value="46" >瑞典(Sweden-46)</option>
                    <option value="41" >瑞士(Switzerland-41)</option>
                    <option value="380" >乌克兰(Ukraine-380)</option>
                    <option value="44" >英国(United Kingdom-44)</option>
                    <option value="371" >拉脱维亚(Latvijas-371)</option>
                    <option value="421" >斯洛伐克(Slovak-421)</option>
                    <option value="54" >阿根廷(Argentina-54)</option>
                    <option value="1242" >巴哈马(Bahamas-1242)</option>
                    <option value="501" >伯利兹(Belize-501)</option>
                    <option value="55" >巴西(Brazil-55)</option>
                    <option value="1" >加拿大(Canada-1)</option>
                    <option value="56" >智利(Chile-56)</option>
                    <option value="57" >哥伦比亚(Colombia-57)</option>
                    <option value="52" >墨西哥(Mexico-52)</option>
                    <option value="507" >巴拿马(Panama-507)</option>
                    <option value="51" >秘鲁(Peru-51)</option>
                    <option value="1" >美国(United States-1)</option>
                    <option value="58" >委内瑞拉(Venezuela-58)</option>
                    <option value="1284" >英属维尔京群岛(Virgin Islands, British-1284)</option>
                    <option value="20" >埃及(Egypt-20)</option>
                    <option value="212" >摩洛哥(Morocco-212)</option>
                    <option value="234" >尼日利亚(Nigeria-234)</option>
                    <option value="248" >塞舌尔(Seychelles-248)</option>
                    <option value="27" >南非(South Africa-27)</option>
                    <option value="216" >突尼斯(Tunisia-216)</option>
                    <option value="61" >澳大利亚(Australia-61)</option>
                    <option value="64" >新西兰(New Zealand-64)</option>
                    <option value="255" >坦桑尼亚(Tanzania-255)</option>
                    <option value="233" >加纳共和国(Ghana-233)</option>
                    <option value="223" >马里共和国(Mali-223)</option>
                </select>
            </div>
            <div class="input_lis">
                <span>账号:</span>
                <input value="" required="required" autocomplete="off" requiredtitle="请输入手机号" patterntitle="国内手机号为11个数字国外手机为区号-手机号!" class="mobile" type="text" name="mobile" id="mobile" placeholder="请输入手机号">
            </div>
            <div class="input_lis">
                <span>密码:</span>
                <input id="regpasswd" name="regpasswd" value="" required="required" autocomplete="off" title="别忘了密码" class="passwd" type="password" placeholder="请输入密码（6-18位字母、数字、符号）">
            </div>
            <div class="input_lis">
                <span>确认密码:</span>
                <input id="checkpasswd" name="checkpasswd" value="" required="required" autocomplete="off" title="别忘了密码" class="checkpasswd" type="password" placeholder="再次输入密码">
            </div>
            <div class="input_lis yzm_inp">
                <span>验证码:</span>
                <input id="validate" name="validate" value="" required="required" requiredtitle="输入验证码" type="text" class="yzm-c" maxlength="16" placeholder="输入验证码">
                <div class="time " id="validate_btn" onclick="get_regsms()">获取验证码</div>
            </div>
            <div class="tips">
                收不到验证码？<span class="feedback" onclick="show_feedback()">去反馈</span>
            </div>
            <div class="submit_wrap">
                <span class="submit" onclick="reg_submit()">注 册</span>
            </div>
            <div class="rule_wrap">
                <input id="rule" name="rule" type="checkbox" checked="checked" value="">
                <div class="btn_ico2"></div>
                <label for="rule">我已同意</label><a href="javascript:void(0);">《3DM账号协议》</a>
                <div class="tips_login">已有账号？<a id="login2" href="javascript:void(0);" onclick="openlogin()">去登录</a></div>
            </div>
        </div>
    </div>
</div><script>
    (function() {
        var s = "_" + Math.random().toString(36).slice(2);
        document.write('<div id="' + s + '"></div>');
        (window.slotbydup=window.slotbydup || []).push({
            id: '5941958',
            container: s,
            size: '1000,90',
            display: 'inlay-fix'
        });
    })();
</script>

<script>
    (function() {
        var s = "_" + Math.random().toString(36).slice(2);
        document.write('<div id="' + s + '"></div>');
        (window.slotbydup=window.slotbydup || []).push({
            id: '5866590',
            container: s,
            size: '1000,90',
            display: 'inlay-fix'
        });
    })();
</script>
<script>
    (function() {
        var s = "_" + Math.random().toString(36).slice(2);
        document.write('<div id="' + s + '"></div>');
        (window.slotbydup=window.slotbydup || []).push({
            id: '5866592',
            container: s,
            size: '900,350',
            display: 'inlay-fix'
        });
    })();
</script>

</body>
</html>
