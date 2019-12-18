(function(){
    var abarbox = document.querySelector('.bar_box');
    var abar = document.querySelector('.bar');
    var aclose = document.querySelector('.close');
    var apfmc = document.querySelector('.performance_wrap');
    var amvlsbox = document.querySelector('.mvls_box');
    var amvlsclose = document.querySelector('.mvls_close');
    abarbox.onclick = function(){
        abar.style.display = "block";
    }
    aclose.onclick = function(){
        abar.style.display = "none";
    }
    amvlsbox.onclick = function(){
        apfmc.style.display = "block";
    }
    amvlsclose.onclick = function(){
        apfmc.style.display = "none";
    }
})();