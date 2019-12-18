(function() {
    let hei = 20;
    let speed = 40;
    var aahover = document.getElementsByClassName("a_hover");
    var anavdn = document.getElementsByClassName("nav_dn");
    var anavdnbk = document.getElementsByClassName("nav_dn_bk")[0];
    var aahover1 = document.getElementsByClassName("a_hover_1")[0];
    for (let i = 0; i < anavdn.length; i++) {
        aahover[i].wrap = i;
        aahover[i].onmouseenter = function() {
            anavdn[this.wrap].style.display = "block";
            heitionk();
            anavdnbk.style.display = "block";
        }
        aahover1.onmouseenter = function() {
            anavdnbk.style.display = "block";
        }
        anavdnbk.onmouseenter = function() {
            anavdnbk.style.display = "none";
        }
        aahover[i].onmouseleave = function() {
            hei = 0;
            anavdn[this.wrap].style.display = "none";
            anavdnbk.style.display = "none";
        }

        function heitionk() {
            hei += speed;
            hei = Math.min(hei, 382);
            anavdn[aahover[i].wrap].style.height = hei + "px";
            if (hei >= 382) {
                return;
            }
            requestAnimationFrame(heitionk);
        }
    }

})();
//返回顶部按钮
(function() {
    var aup = document.getElementById('up');
    var timer = null;
    var _height = document.documentElement.clientHeight;
    window.onscroll = function() {
        var uptop = document.body.scrollTop || document.documentElement.scrollTop;
        if (uptop >= _height) {
            aup.style.display = 'block';
        } else {
            aup.style.display = 'none';
        }
    }

    aup.onclick = function() {
        timer = setInterval(function() {
            var uptop = document.body.scrollTop || document.documentElement.scrollTop;
            var speedtop = uptop / 5;
            document.documentElement.scrollTop = uptop - speedtop;
            if (uptop == 0) {
                clearInterval(timer);
            }
        }, 30);

    }
})();

(function() {
    var open = false;
    var hdgz = $('.hd-gz');
    var hdc = $('.hd-c');
    $('#hd-btn').click(function() {
        $(this).css("background-image", open ? 'url(/static/index/static/images/index/icon-btn.png)' : 'url(/static/index/static/images/delete.png)');
        var hdnav = $('.hd-nav');
        var hdheight = hdnav.offset().top + hdnav.height();
        $('.hd-c').animate({
            height: open ? 66 : hdheight
        });
        open = !open;
    })

})();