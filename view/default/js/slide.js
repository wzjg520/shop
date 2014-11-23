(function($) {
    $(document).ready(function() {
        var $root = $('#HP_carousel'),
            root_w = $root.width();
        var p = $root.find('> div.img > div.slider'),
            n = p.children().length;
        $('.pattern').empty().append('<div class="masking"></div>');
        $('.subpattern').empty().append('<div class="masking"></div>');
        p.children().eq(0).clone().appendTo(p);
        p.children().eq(n - 1).clone().appendTo('.pattern');
        //p.children().eq(0).before(p.children().eq(n-1).clone());
        function onoff(on, off) {
            (on !== -1) && btns.eq(on).addClass('on');
            (off !== -1) && btns.eq(off).removeClass('on');
        }

        function dgo(n, comp) {
                // hack for slast
                var idx = n > max ? 0 : n;
                onoff(idx, cur);
                cur = idx;
                p.stop().animate({
                    left: -1 * root_w * n
                }, {
                    duration: dur,
                    complete: comp
                });
                //p.children().eq(n-1).clone().appendTo('.pattern');
            }
            // next if dir > 0
            // prev if dir < 0
            // reinit if dir == 0
            // slast -> 如果播放完最后1张，要如何处理
            // true 平滑切换到第1张
        var cur = 0,
            max = n - 1,
            pt = 0,
            stay = 2 * 1000, // ms
            dur = .6 * 1000, // ms
            btns;

        function go(dir, slast) {
            pt = +new Date();
            if (dir === 0) {
                onoff(cur, -1);
                p.css({
                    left: -1 * root_w * cur
                });
                return;
            }
            var t;
            $('.pattern').empty().append('<div class="masking"></div>');
            $('.subpattern').empty().append('<div class="masking"></div>');
            $('.masking').css('width', ($(document.body).width() - 960) / 2);
            if (dir > 0) {
                t = cur + 1;
                if (t > max && !slast) {
                    t = 0;
                }
                if (t <= max) {
                    return dgo(t);
                }
                return dgo(t, function() {
                    p.children().eq(n - 1).clone().appendTo('.pattern');
                    p.css({
                        left: 0
                    });
                });
            } else {
                t = cur - 1;
                if (t < 0) {
                    t = max;
                    p.css({
                        left: -1 * root_w * (max + 1)
                    });
                    return dgo(t, function() {
                        p.children().eq(0).clone().appendTo('.subpattern');
                    });
                } else {
                    return dgo(t, function() {
                        if (t == 0) {
                            p.children().eq(n - 1).clone().appendTo('.pattern');
                        }
                    });
                }
            }
        }
        btns = $((new Array(n + 1)).join('<li></li>')).each(function(idx, el) {
            $(el).data({
                idx: idx
            });
        });
        var pn_btn = $('<span class="prev icon"></span><span class="next icon"></span>');
        $('<div class="btns"/ >').append($('<ul class="switcher"/>').append(btns).delegate('li', 'click', function(ev) {
            var idx_i = ($(this).data('idx'));
            $('.pattern').empty().append('<div class="masking"></div>');
            $('.subpattern').empty().append('<div class="masking"></div>');
            $('.masking').css('width', ($(document.body).width() - 960) / 2);
            dgo(idx_i, function() {
                if (idx_i == 0) {
                    p.children().eq(n - 1).clone().appendTo('.pattern');
                }
            });
        }).css({
            width: n * 20,
            marginLeft: -10 * n
        })).delegate('span', 'click', function(ev) {
            go($(this).is('.prev') ? -1 : 1, true);
        }).append(pn_btn).appendTo($root);
        //go(1);
        // 自动播放
        // var ie6 = $.browser.msie && $.browser.version < '7.0';
        //$root.hover(function(ev) {
        //$root[(ev.type == 'mouseenter' ? 'add' : 'remove') + 'Class']('show-hover');
        // if (ie6) {
        // pn_btn[ev.type == 'mouseenter' ? 'show' : 'hide']();
        // } else {
        //pn_btn.stop()['fade' + (ev.type == 'mouseenter' ? 'In' : 'Out')]('fast');
        // }
        //});
        if ($root.attr('rel') == 'auto-play') {
            var num = 0;
            var si = setInterval(function() {
                // if (num > 2) {
                //     clearInterval(si);
                //     return;
                // }
                var now = +new Date();
                if (now - pt < stay) {
                    return;
                }
                go(1, true);
                num++;
            }, 30000);
            p.mouseover(function() {
                clearInterval(si);
            })
            p.mouseout(function(){
                si = setInterval(function(){
                	var now = +new Date();
                	if (now - pt < stay) {
                		return;
                	}
               		go(1, true);
                }, 30000);
            })
        }
        var min_w = 960;
        var wid = $(window).width() - 2;
        if (wid < min_w) {
            wid = min_w;
        }
        var swid = (wid - min_w) / 2;
        var bwid = root_w * n;
        $('#HP_carousel').css('width', wid);
        $('#HP_carousel .img').css('width', wid);
        $('#HP_carousel .btns').css('left', swid)
        $('.paging').css('width', swid);
        $('.masking').css('width', swid);
        $('.subpattern').css('right', 0);
        $('#HP_carousel .img div.slider').css(({
            paddingLeft: swid
        }));
        $('.btns li').eq(0).addClass('on');
    });
    $(window).bind('resize', function() {
        var min_w = 960;
        var wid = $(window).width() - 2;
        if (wid < min_w) {
            wid = min_w;
        }
        var swid = (wid - min_w) / 2;
        var p = $('#HP_carousel').find('> div.img > div.slider');
        var n = p.children().length;
        var bwid = min_w * n;
        $('#HP_carousel').css('width', wid);
        $('#HP_carousel .img').css('width', wid);
        $('#HP_carousel .btns').css('left', swid)
        $('.paging').css('width', swid);
        $('.masking').css('width', swid);
        $('#HP_carousel .img div.slider').css(({
            paddingLeft: swid
        }));
    });
})(jQuery);