/*** Nokersang 2014-3 ***/

/*** jQuery plugins ***/

;(function($){

    $.fn.noker_labelChange=function(o){var t=this;var tl=t.length;var d={s:null,a:"mouseover",c:"active",b:0,d:0};var o=$.extend(d,o);if(!o.s||o.s.length!=tl){throw new Error("Tags correspondence does not hold,check!");}else{o.s.hide().eq(o.b%tl).show();t.eq(o.b%tl).addClass(o.c);if(o.d>0&&o.a=="mouseover"){t.data("timer",null).hover(function(){var l=$(this);if(l.hasClass(o.c)){return false;};window.clearTimeout(t.data("timer"));var n=$(this);t.data("timer",window.setInterval(function(){o.s.hide().eq(t.removeClass(o.c).index(l.addClass(o.c))).show();l.mouseenter();},o.d));},function(){window.clearTimeout(t.data("timer"));});}else{t.bind(o.a,function(){var l=$(this);if(l.hasClass(o.c)){return false;};o.s.hide().eq(t.removeClass(o.c).index(l.addClass(o.c))).show();return false;});};};return this;};
    
    })(jQuery);
    
    /*** JavaScript Function ***/
    
    function login_bar_init(){
        var goto=window.web_header_login_goto?web_header_login_goto:location.href;
        $.get("/passport/login_bar?random="+Math.random(),function(data){
            if(data.logined){
                $("#header_area .login").html(data.greetings+"，<a href=\"http://www.doyo.cn/my/\" class=\"name\"><strong>"+data.username+"</strong> (LV"+data.level+")</a>|<a href=\"http://www.doyo.cn/my/\">个人中心</a>|<a href=\"http://www.doyo.cn/my/msg/"+(data.msg_unread>0?"unread":"inbox")+"/\">收件箱"+(data.newmsg>0?"<strong>("+data.newmsg+")</strong>":"")+"</a>|<a href=\"#\" class=\"logout\">退出</a>");
                $("#header_area a.logout").one("click",function(){
                    $.get("/passport/logout",function(){
                        if($("#header_area .login").length){login_bar_init();};
                    });
                    return false;
                });
            }else{
                $("#header_area .login").html(data.greetings+"，欢迎来到逗游网！<a target=\"_self\" href=\"http://www.doyo.cn/passport/login?next="+goto+"\">登录</a>|<a target=\"_self\" href=\"http://www.doyo.cn/passport/register_1\">注册</a>");
            }
        },"json");
    };
    
    function nav_bar_init(){
        $("<span></span>").insertAfter("#header_area .nav a:not(:last)");
        $("#header_area .nav a.index").addClass("active").next("span").remove().end().prev("span").remove();
    };
    
    function game_bar_init(){
        $("#game_bar .nav .l .w").append("<div class=\"a\"></div>");
        $("#game_bar .nav .l").noker_labelChange({s:$("#game_bar .content .b"),a:"mouseover",c:"l_a",b:0}).hover(function(){$(".w .a",this).stop(true,true).css({"left":"135px"}).animate({"left":"160px"},"normal");},function(){});
        window.setTimeout(function(){$("#game_bar .nav .l_a").first().mouseenter();},0);
    };
    
    var focus_pic={"id":"focus_pic","timer":null,"begin":0,"speed":300,"arrow":"keep"};
    var wl_focus_pic={"id":"wl_focus_pic","timer":null,"begin":0,"speed":300,"arrow":"hover"};
    var sj_focus_pic={"id":"sj_focus_pic","timer":null,"begin":0,"speed":300,"arrow":"hover"};
    
    function focus_pic_init(o){
        if($("#"+o.id+" a").length<2){return false;};
        o.o=$("#"+o.id);
        o.a=$("a",o.o)
        $("<div class=\"cover\"></div><div class=\"line\"></div><div class=\"word\"><a href=\"#\"></a></div><div class=\"point\"></div><div class=\"go_left\"></div><div class=\"go_right\"></div>").appendTo(o.o);
        o.a.each(function(i,e){$("<span></span>").appendTo($(".point",o.o));});
        o.gl=$(".go_left",o.o);
        o.gr=$(".go_right",o.o);
        o.l=$(".word a",o.o);
        o.s=$(".point span",o.o).eq(o.begin).addClass("active").end();
        o.l.text(o.a.eq(o.begin).attr("title")).attr("href",o.a.eq(o.begin).attr("href"));
        o.s.hover(function(){focus_pic_change(o,$(this).index());},function(){});
        o.gl.hover(function(){o.gl.addClass("go_left_hover");},function(){o.gl.removeClass("go_left_hover");}).click(function(){focus_pic_change(o,"left");});
        o.gr.hover(function(){o.gr.addClass("go_right_hover");},function(){o.gr.removeClass("go_right_hover");}).click(function(){focus_pic_change(o,"right");});
        o.timer=window.setInterval(function(){focus_pic_change(o,"auto");},6000);
        o.o.hover(function(){window.clearInterval(o.timer);if(o.arrow=="hover"){o.gl.stop(true,true).fadeIn();o.gr.stop(true,true).fadeIn();};},function(){o.timer=window.setInterval(function(){focus_pic_change(o,"auto");},6000);if(o.arrow=="hover"){o.gl.stop(true,true).fadeOut();o.gr.stop(true,true).fadeOut();};});
    };
    
    function focus_pic_change(o,c){
        var f=c;
        var n=o.s.filter(".active").index();
        if(f==n){return false;};
        var l=o.a.length;
        var w=o.o.width();
        if(f=="left"){f=(n+l-1)%l;}
        if(f=="auto"||f=="right"){f=(n+1)%l;}
        o.l.text(o.a.eq(f).attr("title")).attr("href",o.a.eq(f).attr("href"));
        var v=f-n;
        if(v>0){
            v="-="+Math.abs(v*w);
        }else if(v<0){
            v="+="+Math.abs(v*w);
        };
        o.s.removeClass("active").eq(f).addClass("active");
        $(".content",o.o).stop(true,true).animate({"left":v},o.speed);
    };
    
    function focus_article_init(){
        $("#f_m_t .l").noker_labelChange({s:$("#f_m_m .b"),a:"mouseover",c:"l_a",b:0});
    };
    
    function game_track_init(){
        $("#game_track .title .l").noker_labelChange({s:$("#game_track .content .b"),a:"mouseover",c:"l_a",b:0});
        $("#game_track .content .b li:even").addClass("g");
    };
    
    function dj_rank_init(){
        $("#dj_rank .title .l").noker_labelChange({s:$("#dj_rank .content .b"),a:"mouseover",c:"l_a",b:0});
        //$("#dj_rank .content .b li:even").addClass("g");
        $("#dj_rank .content .b").each(function(i,e){
            $("li",e).each(function(i,e){
                $(".r",e).addClass("rank_"+i);
            });
        });
    };
    
    function wl_fahao_init(){
        $("#wl_fahao .title .l").noker_labelChange({s:$("#wl_fahao .content .b"),a:"mouseover",c:"l_a",b:0});
        $("#wl_fahao .content .b li:even").addClass("g");
    };
    
    function wl_week_news_init(){
        $("#wl_week_news .title .l").noker_labelChange({s:$("#wl_week_news .top .b"),a:"mouseover",c:"l_a",b:0});
    };
    
    function wy_game_zone_init(){
        var o=$("#wy_game_zone .right .t a");
        $("#wy_game_zone .left .l").each(function(i,element){
            $("<div class=\"a\"></div>").appendTo(this);
            $("<div class=\"w\">进入专区</div>").appendTo(o.eq(i));
        }).noker_labelChange({s:$("#wy_game_zone .right .b"),a:"mouseover",c:"l_a",b:0});
    };
    
    function wy_kaifu_init(){
        $("#wy_kaifu .content li:even").addClass("g");
    };
    
    function n_rank_init(){
        $("#n_rank .title .l").noker_labelChange({s:$("#n_rank .content .b"),a:"mouseover",c:"l_a",b:0});
        //$("#n_rank .content .b li:even").addClass("g");
        $("#n_rank .content .b").each(function(i,e){
            $("li",e).each(function(i,e){
                $(".r",e).addClass("rank_"+i);
            });
        });
    };
    
    function f_game_recommend_init(){
        $("#f_game_recommend .title .l").noker_labelChange({s:$("#f_game_recommend .content .b"),a:"mouseover",c:"l_a",b:0,d:100});
    };
    
    function f_rank_init(){
        $("#f_rank .title .l").noker_labelChange({s:$("#f_rank .content .b"),a:"mouseover",c:"l_a",b:0});
        $("#f_rank .content .b li:even").addClass("g");
        $("#f_rank .content .b").each(function(i,e){
            $("li",e).each(function(i,e){
                $(".r",e).addClass("rank_"+i);
            });
        });
    };
    
    function p_list_init(){
        $("#p_list a").each(function(i,e){
            var o=$(this);
            var w=$(".word",o);
            w.css({"left":o.width()*0.1,"width":o.width()*0.8,"top":(o.height()-w.height())/2});
        });
    }
    
    function curtain_link_init(){
        $("a.curtain").each(function(index, element) {
            var o=$(this);
            var w=o.innerWidth()-9;
            $("div.cover_s,div.word_s",o).css({"width":w});
        }).hover(function(){
            var o=$(this);
            var w=o.innerWidth()-9;
            $("<div class=\"cover_b\"></div>").appendTo(o).css({"background":o.css("background-color"),"height":o.height()}).animate({"width":w},130,function(){
                $("div.word_b",o).show();
                $("div.cover_s,div.word_s",o).hide();
            });
            $("<div class=\"word_b\">"+$("div.word_s",o).html()+"</div>").appendTo(o).css({"width":w-10});
            $("div.word_b",o).css({"top":(o.height()-$("div.word_b",o).height())/2});
        },function(){
            //alert(1)
            var o=$(this);
            $("div.cover_b,div.word_b",o).remove();
            $("div.cover_s,div.word_s",o).show();
            window.setTimeout(function(){
                if($("div.word_b",o).length==0){
                    $("div.cover_s,div.word_s",o).show();
                }
            },200);
        });
    };
    
    function quick_bar_init(){
        if($("#quick_bar").length==0){return false;};
        //if($(window).scrollTop()>600){$("#quick_bar").show();}else{$("#quick_bar").hide();};
        //$(window).scroll(function(){if($(window).scrollTop()>600){$("#quick_bar").show();}else{$("#quick_bar").hide();};});
        $("#quick_bar .go_top").hover(function(){$(this).addClass("go_top_hover");},function(){$(this).removeClass("go_top_hover");}).click(function(e){$(window).scrollTop(0);});
        $("#quick_bar .go_area").hover(function(){$(this).addClass("go_area_hover");$("#quick_bar .go_area_box").show();},function(){$(this).removeClass("go_area_hover");});
        $("#quick_bar .go_area_box").hover(function(){},function(){$(this).hide();});
        $("#quick_bar .go_area_box .n").first().addClass("f").end().last().addClass("l").end().hover(function(){if($(this).hasClass("f")){$(this).addClass("f_h");}else if($(this).hasClass("l")){$(this).addClass("l_h");}else{$(this).addClass("n_h");};},function(){if($(this).hasClass("f")){$(this).removeClass("f_h");}else if($(this).hasClass("l")){$(this).removeClass("l_h");}else{$(this).removeClass("n_h");};}).click(function(){if($(this).attr("go_to")){$(window).scrollTop($("#"+$(this).attr("go_to")).offset().top-43);};});
    };
    
    //add favorite
    function AddFavorite(sUrl,sTitle){if(document.all){try{window.external.addFavorite(sUrl,sTitle);}catch(e1){try{window.external.addToFavoritesBar(sUrl,sTitle);}catch(e2){alert("请使用Ctrl+D添加收藏");}}}else if(window.sidebar && window.sidebar.addPanel){window.sidebar.addPanel(sTitle,sUrl,"");}else{alert("请使用Ctrl+D添加收藏");}};
    
    var lazy_load_timer=null;
    var lazy_load_obj=null;
    function lazy_load_images(){window.clearTimeout(lazy_load_timer);lazy_load_timer=window.setTimeout(function(){var o_list=lazy_load_obj.filter(":visible");if(o_list.length){var v_h=$(window).height()+$(document).scrollTop()+100;o_list.each(function(i){if($(this).offset().top<v_h){$(this).attr("src",$(this).attr("osrc"));lazy_load_obj=lazy_load_obj.not($(this).removeAttr("osrc"));};});};if(!lazy_load_obj.length){lazy_load_images_remove();}},0);};
    function lazy_load_images_remove(){lazy_load_timer=null;lazy_load_obj=null;$(self).unbind("scroll",lazy_load_images);$(self).unbind("resize",lazy_load_images);if($.isFunction(self.other_lazy_load_images_remove)){other_lazy_load_images_remove();};};
    function lazy_load_images_init(){lazy_load_obj=$("images[osrc]");if(lazy_load_obj.length){$(self).scroll(lazy_load_images);$(self).resize(lazy_load_images);if($.isFunction(self.other_lazy_load_images_init)){other_lazy_load_images_init();};lazy_load_images();};};
    
    function other_lazy_load_images_init(){
        $("#f_m_t .l").bind("mouseenter",lazy_load_images);
        $("#wy_game_zone .left .l").bind("mouseenter",lazy_load_images);
        $("#f_game_recommend .title .l").bind("mouseenter",lazy_load_images);
        $("#sj_rank .it").bind("mouseenter",lazy_load_images);
    };
    function other_lazy_load_images_remove(){
        $("#f_m_t .l").unbind("mouseenter",lazy_load_images);
        $("#wy_game_zone .left .l").unbind("mouseenter",lazy_load_images);
        $("#f_game_recommend .title .l").unbind("mouseenter",lazy_load_images);
        $("#sj_rank .it").unbind("mouseenter",lazy_load_images);
    };
    
    // shouji
    function sj_rank_init(){
        $("#sj_rank .it").mouseover(function(){
            $(this).siblings(".it").removeClass("active").end().addClass("active");
        });
        $("#sj_rank .it:last").css("border-bottom","none");
    };
    
    function sj_banner_init(){
        $("#sj_banner a").hover(function(){
            var o=$(this);
            var w=$(".word",o);
            w.css("top",(o.height()-w.height())/2);
        },function(){
            $(".word",this).css("top","92px");
        });
    };
    
    function gg_click_init(){
        var o1=$("#game_bar span:contains('手机游戏')").closest(".l");
        if(o1.length==1){
            $("a",o1).click(function(){
                $("<iframe src=\"http://tablet.doyo.cn/jump/gg?W_I_05_"+($("a",o1).index(this)+1)+"\" style=\"width:0;height:0;border:0;\"></iframe>").appendTo("body");
            });
        };
    };
    
    function click_click_init(){
        var o1=$("#game_bar .content .b:first .l:first");
        if(o1.length==1){
            $("a",o1).click(function(){
                $("<iframe src=\"http://tablet.doyo.cn/jump/click?W_I_01_"+($("a",o1).index(this)+1)+"\" style=\"width:0;height:0;border:0;\"></iframe>").appendTo("body");
            });
        };
        var o2=$("#focus_pic");
        if(o2.length==1){
            o2.on("click","a",function(){
                var u=$(this).attr("href");
                $(".content a",o2).each(function(i,e){
                    if($(e).attr("href")==u){
                        $("<iframe src=\"http://tablet.doyo.cn/jump/click?W_I_02_"+(i+1)+"\" style=\"width:0;height:0;border:0;\"></iframe>").appendTo("body");
                    };
                });
            });
        };
    };
    
    var console=console||{log:function(){}};
    
    function console_info_show(){
        console.log("看到这段文字，我想您应该是一位开发人员:)\n逗游网正在招聘：PHP开发，Linux系统工程师等；\n不管您是新人还是老鸟，如对逗游网感兴趣，请查看我们的职位介绍。\n");
        console.log("职位介绍链接：%chttp://www.doyo.cn/job","color:red");
    };
    
    function sj_strategy_init(){
    
    
    };
    
    
    function page_init(){
    
    login_bar_init();
    
    $.ajax({url:"/Tpl/web/Public/js/2014_top_search.js",cache:true,dataType:"script"});
    
    nav_bar_init();
    
    focus_pic_init(focus_pic);
    
    lazy_load_images_init();
    
    game_bar_init();
    
    focus_article_init();
    
    game_track_init();
    
    dj_rank_init();
    
    focus_pic_init(wl_focus_pic);
    
    wl_fahao_init();
    
    wl_week_news_init();
    
    wy_game_zone_init();
    
    wy_kaifu_init();
    
    n_rank_init();
    
    f_game_recommend_init();
    
    f_rank_init();
    
    p_list_init();
    
    curtain_link_init();
    
    quick_bar_init();
    
    focus_pic_init(sj_focus_pic);
    
    sj_rank_init();
    
    sj_banner_init();
    
    sj_strategy_init();
    
    gg_click_init();
    
    click_click_init();
    
    //console_info_show();
    
    };
    
    /*** jQuery $(document).ready() ***/
    
    jQuery(function($){
    
    page_init();
    
    });