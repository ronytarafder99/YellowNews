<?php global $wesoftpress; ?>

<?php $cat_id = $wesoftpress['post_cat_one']; ?>
<?php $lastpost = new WP_Query('cat=' . $cat_id . ' & posts_per_page=4'); ?>
<?php if ($lastpost->have_posts()) : ?>
<div class='deals cf'>
    <div class='deal-box cf'>
        <div class='latest-title cf'><a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_the_category_by_id($cat_id); ?></a></div>
        <div class='cf'>

            <?php while ($lastpost->have_posts()) : $lastpost->the_post(); 
            get_template_part('template-parts/content/content-box');
            endwhile; ?>
                
        </div>
    </div>
</div>
<?php endif; ?>

<div class='clear email-outer' id='email-outer'>
    <div class='email-box'>
        <form action='https://inl02.netline.com/rssnews0001/' class='clear cf' id='subform' method='post' name='f1'
            target='_blank'>
            <div class='email-box-h3'>Cybersecurity Newsletter &#8212; Stay Informed</div>
            <p>Sign up for cybersecurity newsletter and get latest news updates delivered straight to your inbox daily.
            </p>
            <div class='email-input'>
                <input name='_submit' type='hidden' value='0001' />
                <input id='brand' name='brand' type='hidden' value='thehackernews' />
                <div class='e-book'><input checked='yes' id='opt_001' name='opt_001' type='checkbox' value='Y' /><input
                        checked='yes' id='opt_003' name='opt_003' type='checkbox' value='Y' /></div><label
                    class='visuallyhidden' for='input-email'>Email</label><input class='text' id='input-email'
                    name='email' placeholder='Enter your email address' required='' type='email' />
                <button aria-label='Subscribe' id='submitform' type='submit' value='Subscribe'></button>
            </div>
        </form>
    </div>
</div>

<footer class='footer cf'>
    <div class='footer-box clear'>
        <div class='footer-stuff clear cf'>
            <div class='footer-box-h4' id='follow-us'>Follow Us</div>
            <div class='follow-box cf'>
                <div class='social-box s-tw'><a aria-label='twitter' href='https://twitter.com/thehackersnews'
                        rel='noopener' target='_blank'><i class='icon-font icon-twitter'>&#61593;</i>
                        <div class='sb-text'>850,500 Followers</div>
                    </a></div>
                <div class='social-box s-fb'><a aria-label='facebook' href='https://www.facebook.com/thehackernews'
                        rel='noopener' target='_blank'><i class='icon-font icon-facebook'>&#61594;</i>
                        <div class='sb-text'>1,950,000 Followers</div>
                    </a></div>
                <div class='social-box s-in'><a aria-label='linkedin'
                        href='https://www.linkedin.com/company/thehackernews/' rel='noopener' target='_blank'><i
                            class='icon-font icon-linkedin'>&#61665;</i>
                        <div class='sb-text'>350,500 Followers</div>
                    </a></div>
                <div class='social-box s-yt'><a aria-label='youtube'
                        href='https://www.youtube.com/c/thehackernews?sub_confirmation=1' rel='noopener'
                        target='_blank'><i class='icon-font icon-youtube'>&#61799;</i>
                        <div class='sb-text'>19,900 Subscribers</div>
                    </a></div>
                <div class='social-box s-it'><a aria-label='instagram' href='https://www.instagram.com/thehackernews/'
                        rel='noopener' target='_blank'><i class='icon-font icon-instagram'>&#61805;</i>
                        <div class='sb-text'>140,500 Followers</div>
                    </a></div>
            </div>
            <nav class='f-menu-box cf'>
                <div class='f-menu-cl-1 cf'>
                    <div class='footer-box-h5'>About</div>
                    <ul class='cf f-menu-list cf'>
                        <li><a href='/p/about-us.html'>About Us</a></li>
                        <li><a href='/p/advertising-with-hacker-news.html'>Advertising</a></li>
                        <li><a href='/p/authors.html'>Editorial Team</a></li>
                        <li><a href='/p/submit-news.html'>Contact</a></li>
                    </ul>
                </div>
                <div class='f-menu-cl-2 cf'>
                    <div class='footer-box-h5'>Pages</div>
                    <ul class='cf f-menu-list cf'>
                        <li><a href='https://feeds.feedburner.com/TheHackersNews' rel='noopener' target='_blank'>RSS
                                Feeds</a></li>
                        <li><a href='https://deals.thehackernews.com' rel='noopener' target='_blank'>Deals Store</a>
                        </li>
                        <li><a href='/p/privacy-policy.html'>Privacy Policy</a></li>
                        <li><a href='/p/careers-technical-writer-designer-and.html'>Jobs</a></li>
                    </ul>
                </div>
                <div class='f-menu-cl-3 cf'>
                    <div class='footer-box-h5'>Deals</div>
                    <ul class='cf f-menu-list cf'>
                        <li><a href='https://deals.thehackernews.com/collections/citizengoods-exclusives' rel='noopener'
                                target='_blank'>Exclusives</a></li>
                        <li><a href='https://deals.thehackernews.com/collections/hacking' rel='noopener'
                                target='_blank'>Hacking</a></li>
                        <li><a href='https://deals.thehackernews.com/collections/shop-by-specialization-developer'
                                rel='noopener' target='_blank'>Development</a></li>
                        <li><a href='https://deals.thehackernews.com/collections/shop-by-interest-android'
                                rel='noopener' target='_blank'>Android</a></li>
                    </ul>
                </div>
                <div class='f-menu-cl-4 cf'>
                    <a class='f-m-b' href='https://feeds.feedburner.com/TheHackersNews' rel='noopener' target='_blank'>
                        <div class='f-menu-bt'><i class='icon-font icon-rss'>&#61598;</i> RSS Feeds</div>
                    </a>
                    <a class='f-m-b' href='/p/submit-news.html'>
                        <div class='f-menu-bt'><i class='icon-font icon-mail-alt'>&#61664;</i> Contact Us</div>
                    </a>
                    <a class='f-m-b' href='https://t.me/joinchat/AAAAADwuDObFWF60CiR-HQ' rel='noopener' target='_blank'>
                        <div class='f-menu-bt'><i class='icon-font icon-telegram'>&#62150;</i> Telegram Channel</div>
                    </a>
                </div>
            </nav>
            <div class='footer-note cf'>&#169; The Hacker News, 2022. All Rights Reserved.</div>
        </div>
    </div>
</footer>

<script data-cfasync='false'>
//<![CDATA[
!function(a,b){var c=b(a,a.document,Date);a.lazySizes=c,"object"==typeof module&&module.exports&&(module.exports=c)}("undefined"!=typeof window?window:{},function(a,b,c){"use strict";var d,e;if(function(){var b,c={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:!0,expFactor:1.5,hFac:.8,loadMode:2,loadHidden:!0,ricTimeout:0,throttleDelay:125};e=a.lazySizesConfig||a.lazysizesConfig||{};for(b in c)b in e||(e[b]=c[b])}(),!b||!b.getElementsByClassName)return{init:function(){},cfg:e,noSupport:!0};var f=b.documentElement,g=a.HTMLPictureElement,h="addEventListener",i="getAttribute",j=a[h].bind(a),k=a.setTimeout,l=a.requestAnimationFrame||k,m=a.requestIdleCallback,n=/^picture$/i,o=["load","error","lazyincluded","_lazyloaded"],p={},q=Array.prototype.forEach,r=function(a,b){return p[b]||(p[b]=new RegExp("(\\s|^)"+b+"(\\s|$)")),p[b].test(a[i]("class")||"")&&p[b]},s=function(a,b){r(a,b)||a.setAttribute("class",(a[i]("class")||"").trim()+" "+b)},t=function(a,b){var c;(c=r(a,b))&&a.setAttribute("class",(a[i]("class")||"").replace(c," "))},u=function(a,b,c){var d=c?h:"removeEventListener";c&&u(a,b),o.forEach(function(c){a[d](c,b)})},v=function(a,c,e,f,g){var h=b.createEvent("Event");return e||(e={}),e.instance=d,h.initEvent(c,!f,!g),h.detail=e,a.dispatchEvent(h),h},w=function(b,c){var d;!g&&(d=a.picturefill||e.pf)?(c&&c.src&&!b[i]("srcset")&&b.setAttribute("srcset",c.src),d({reevaluate:!0,elements:[b]})):c&&c.src&&(b.src=c.src)},x=function(a,b){return(getComputedStyle(a,null)||{})[b]},y=function(a,b,c){for(c=c||a.offsetWidth;c<e.minSize&&b&&!a._lazysizesWidth;)c=b.offsetWidth,b=b.parentNode;return c},z=function(){var a,c,d=[],e=[],f=d,g=function(){var b=f;for(f=d.length?e:d,a=!0,c=!1;b.length;)b.shift()();a=!1},h=function(d,e){a&&!e?d.apply(this,arguments):(f.push(d),c||(c=!0,(b.hidden?k:l)(g)))};return h._lsFlush=g,h}(),A=function(a,b){return b?function(){z(a)}:function(){var b=this,c=arguments;z(function(){a.apply(b,c)})}},B=function(a){var b,d=0,f=e.throttleDelay,g=e.ricTimeout,h=function(){b=!1,d=c.now(),a()},i=m&&g>49?function(){m(h,{timeout:g}),g!==e.ricTimeout&&(g=e.ricTimeout)}:A(function(){k(h)},!0);return function(a){var e;(a=!0===a)&&(g=33),b||(b=!0,e=f-(c.now()-d),e<0&&(e=0),a||e<9?i():k(i,e))}},C=function(a){var b,d,e=99,f=function(){b=null,a()},g=function(){var a=c.now()-d;a<e?k(g,e-a):(m||f)(f)};return function(){d=c.now(),b||(b=k(g,e))}},D=function(){var g,m,o,p,y,D,F,G,H,I,J,K,L=/^img$/i,M=/^iframe$/i,N="onscroll"in a&&!/(gle|ing)bot/.test(navigator.userAgent),O=0,P=0,Q=0,R=-1,S=function(a){Q--,(!a||Q<0||!a.target)&&(Q=0)},T=function(a){return null==K&&(K="hidden"==x(b.body,"visibility")),K||!("hidden"==x(a.parentNode,"visibility")&&"hidden"==x(a,"visibility"))},U=function(a,c){var d,e=a,g=T(a);for(G-=c,J+=c,H-=c,I+=c;g&&(e=e.offsetParent)&&e!=b.body&&e!=f;)(g=(x(e,"opacity")||1)>0)&&"visible"!=x(e,"overflow")&&(d=e.getBoundingClientRect(),g=I>d.left&&H<d.right&&J>d.top-1&&G<d.bottom+1);return g},V=function(){var a,c,h,j,k,l,n,o,q,r,s,t,u=d.elements;if((p=e.loadMode)&&Q<8&&(a=u.length)){for(c=0,R++;c<a;c++)if(u[c]&&!u[c]._lazyRace)if(!N||d.prematureUnveil&&d.prematureUnveil(u[c]))ba(u[c]);else if((o=u[c][i]("data-expand"))&&(l=1*o)||(l=P),r||(r=!e.expand||e.expand<1?f.clientHeight>500&&f.clientWidth>500?500:370:e.expand,d._defEx=r,s=r*e.expFactor,t=e.hFac,K=null,P<s&&Q<1&&R>2&&p>2&&!b.hidden?(P=s,R=0):P=p>1&&R>1&&Q<6?r:O),q!==l&&(D=innerWidth+l*t,F=innerHeight+l,n=-1*l,q=l),h=u[c].getBoundingClientRect(),(J=h.bottom)>=n&&(G=h.top)<=F&&(I=h.right)>=n*t&&(H=h.left)<=D&&(J||I||H||G)&&(e.loadHidden||T(u[c]))&&(m&&Q<3&&!o&&(p<3||R<4)||U(u[c],l))){if(ba(u[c]),k=!0,Q>9)break}else!k&&m&&!j&&Q<4&&R<4&&p>2&&(g[0]||e.preloadAfterLoad)&&(g[0]||!o&&(J||I||H||G||"auto"!=u[c][i](e.sizesAttr)))&&(j=g[0]||u[c]);j&&!k&&ba(j)}},W=B(V),X=function(a){var b=a.target;if(b._lazyCache)return void delete b._lazyCache;S(a),s(b,e.loadedClass),t(b,e.loadingClass),u(b,Z),v(b,"lazyloaded")},Y=A(X),Z=function(a){Y({target:a.target})},$=function(a,b){try{a.contentWindow.location.replace(b)}catch(c){a.src=b}},_=function(a){var b,c=a[i](e.srcsetAttr);(b=e.customMedia[a[i]("data-media")||a[i]("media")])&&a.setAttribute("media",b),c&&a.setAttribute("srcset",c)},aa=A(function(a,b,c,d,f){var g,h,j,l,m,p;(m=v(a,"lazybeforeunveil",b)).defaultPrevented||(d&&(c?s(a,e.autosizesClass):a.setAttribute("sizes",d)),h=a[i](e.srcsetAttr),g=a[i](e.srcAttr),f&&(j=a.parentNode,l=j&&n.test(j.nodeName||"")),p=b.firesLoad||"src"in a&&(h||g||l),m={target:a},s(a,e.loadingClass),p&&(clearTimeout(o),o=k(S,2500),u(a,Z,!0)),l&&q.call(j.getElementsByTagName("source"),_),h?a.setAttribute("srcset",h):g&&!l&&(M.test(a.nodeName)?$(a,g):a.src=g),f&&(h||l)&&w(a,{src:g})),a._lazyRace&&delete a._lazyRace,t(a,e.lazyClass),z(function(){var b=a.complete&&a.naturalWidth>1;p&&!b||(b&&s(a,"ls-is-cached"),X(m),a._lazyCache=!0,k(function(){"_lazyCache"in a&&delete a._lazyCache},9)),"lazy"==a.loading&&Q--},!0)}),ba=function(a){if(!a._lazyRace){var b,c=L.test(a.nodeName),d=c&&(a[i](e.sizesAttr)||a[i]("sizes")),f="auto"==d;(!f&&m||!c||!a[i]("src")&&!a.srcset||a.complete||r(a,e.errorClass)||!r(a,e.lazyClass))&&(b=v(a,"lazyunveilread").detail,f&&E.updateElem(a,!0,a.offsetWidth),a._lazyRace=!0,Q++,aa(a,b,f,d,c))}},ca=C(function(){e.loadMode=3,W()}),da=function(){3==e.loadMode&&(e.loadMode=2),ca()},ea=function(){if(!m){if(c.now()-y<999)return void k(ea,999);m=!0,e.loadMode=3,W(),j("scroll",da,!0)}};return{_:function(){y=c.now(),d.elements=b.getElementsByClassName(e.lazyClass),g=b.getElementsByClassName(e.lazyClass+" "+e.preloadClass),j("scroll",W,!0),j("resize",W,!0),j("pageshow",function(a){if(a.persisted){var c=b.querySelectorAll("."+e.loadingClass);c.length&&c.forEach&&l(function(){c.forEach(function(a){a.complete&&ba(a)})})}}),a.MutationObserver?new MutationObserver(W).observe(f,{childList:!0,subtree:!0,attributes:!0}):(f[h]("DOMNodeInserted",W,!0),f[h]("DOMAttrModified",W,!0),setInterval(W,999)),j("hashchange",W,!0),["focus","mouseover","click","load","transitionend","animationend"].forEach(function(a){b[h](a,W,!0)}),/d$|^c/.test(b.readyState)?ea():(j("load",ea),b[h]("DOMContentLoaded",W),k(ea,2e4)),d.elements.length?(V(),z._lsFlush()):W()},checkElems:W,unveil:ba,_aLSL:da}}(),E=function(){var a,c=A(function(a,b,c,d){var e,f,g;if(a._lazysizesWidth=d,d+="px",a.setAttribute("sizes",d),n.test(b.nodeName||""))for(e=b.getElementsByTagName("source"),f=0,g=e.length;f<g;f++)e[f].setAttribute("sizes",d);c.detail.dataAttr||w(a,c.detail)}),d=function(a,b,d){var e,f=a.parentNode;f&&(d=y(a,f,d),e=v(a,"lazybeforesizes",{width:d,dataAttr:!!b}),e.defaultPrevented||(d=e.detail.width)&&d!==a._lazysizesWidth&&c(a,f,e,d))},f=function(){var b,c=a.length;if(c)for(b=0;b<c;b++)d(a[b])},g=C(f);return{_:function(){a=b.getElementsByClassName(e.autosizesClass),j("resize",g)},checkElems:g,updateElem:d}}(),F=function(){!F.i&&b.getElementsByClassName&&(F.i=!0,E._(),D._())};return k(function(){e.init&&F()}),d={cfg:e,autoSizer:E,loader:D,init:F,uP:w,aC:s,rC:t,hC:r,fire:v,gW:y,rAF:z}});
//]]>
</script>
<script data-cfasync='false'>
//<![CDATA[
(function(n,t){"use strict";function v(){}function u(n,t){if(n){typeof n=="object"&&(n=[].slice.call(n));for(var i=0,r=n.length;i<r;i++)t.call(n,n[i],i)}}function rt(n,i){var r=Object.prototype.toString.call(i).slice(8,-1);return i!==t&&i!==null&&r===n}function h(n){return rt("Function",n)}function ut(n){return rt("Array",n)}function st(n){var i=n.split("/"),t=i[i.length-1],r=t.indexOf("?");return r!==-1?t.substring(0,r):t}function f(n){(n=n||v,n._done)||(n(),n._done=1)}function y(n){var t={},i,r;if(typeof n=="object")for(i in n)!n[i]||(t={name:i,url:n[i]});else t={name:st(n),url:n};return(r=l[t.name],r&&r.url===t.url)?r:(l[t.name]=t,t)}function p(n){n=n||l;for(var t in n)if(n.hasOwnProperty(t)&&n[t].state!==a)return!1;return!0}function ht(n){n.state=ot,u(n.onpreload,function(n){n.call()})}function ct(n){n.state===t&&(n.state=tt,n.onpreload=[],ft({url:n.url,type:"cache"},function(){ht(n)}))}function w(n,t){if(t=t||v,n.state===a){t();return}if(n.state===it){i.ready(n.name,t);return}if(n.state===tt){n.onpreload.push(function(){w(n,t)});return}n.state=it,ft(n,function(){n.state=a,t(),u(s[n.name],function(n){f(n)}),o&&p()&&u(s.ALL,function(n){f(n)})})}function ft(t,i){function e(t){t=t||n.event,u.onload=u.onreadystatechange=u.onerror=null,i()}function o(t){t=t||n.event,(t.type==="load"||/loaded|complete/.test(u.readyState)&&(!r.documentMode||r.documentMode<9))&&(u.onload=u.onreadystatechange=u.onerror=null,i())}var u,f;i=i||v,/\.css[^\.]*$/.test(t.url)?(u=r.createElement("link"),u.type="text/"+(t.type||"css"),u.rel="stylesheet",u.href=t.url):(u=r.createElement("script"),u.type="text/"+(t.type||"javascript"),u.src=t.url),u.onload=u.onreadystatechange=o,u.onerror=e,u.async=!1,u.defer=!1,f=r.head||r.getElementsByTagName("head")[0],f.insertBefore(u,f.lastChild)}function e(){if(!r.body){n.clearTimeout(i.readyTimeout),i.readyTimeout=n.setTimeout(e,50);return}o||(o=!0,u(k,function(n){f(n)}))}function b(){r.addEventListener?(r.removeEventListener("DOMContentLoaded",b,!1),e()):r.readyState==="complete"&&(r.detachEvent("onreadystatechange",b),e())}var r=n.document,k=[],d=[],s={},l={},et="async"in r.createElement("script")||"MozAppearance"in r.documentElement.style||n.opera,g,o,nt=n.head_conf&&n.head_conf.head||"head",i=n[nt]=n[nt]||function(){i.ready.apply(null,arguments)},tt=1,ot=2,it=3,a=4,c;if(i.load=et?function(){var t=arguments,n=t[t.length-1],r={};return h(n)||(n=null),u(t,function(i,u){i!==n&&(i=y(i),r[i.name]=i,w(i,n&&u===t.length-2?function(){p(r)&&f(n)}:null))}),i}:function(){var n=arguments,t=[].slice.call(n,1),r=t[0];return g?(r?(u(t,function(n){h(n)||ct(y(n))}),w(y(n[0]),h(r)?r:function(){i.load.apply(null,t)})):w(y(n[0])),i):(d.push(function(){i.load.apply(null,n)}),i)},i.js=i.load,i.test=function(n,t,r,u){var f=typeof n=="object"?n:{test:n,success:!t?!1:ut(t)?t:[t],failure:!r?!1:ut(r)?r:[r],callback:u||v},e=!!f.test;return e&&!!f.success?(f.success.push(f.callback),i.load.apply(null,f.success)):e||!f.failure?u():(f.failure.push(f.callback),i.load.apply(null,f.failure)),i},i.ready=function(n,t){var e,u;return n===r?(o?f(t):k.push(t),i):(h(n)&&(t=n,n="ALL"),typeof n!="string"||!h(t))?i:(e=l[n],e&&e.state===a||n==="ALL"&&p()&&o)?(f(t),i):(u=s[n],u?u.push(t):u=s[n]=[t],i)},i.ready(r,function(){p()&&u(s.ALL,function(n){f(n)}),i.feature&&i.feature("domloaded",!0)}),r.readyState==="complete")e();else if(r.addEventListener)r.addEventListener("DOMContentLoaded",b,!1),n.addEventListener("load",e,!1);else{r.attachEvent("onreadystatechange",b),n.attachEvent("onload",e),c=!1;try{c=!n.frameElement&&r.documentElement}catch(at){}c&&c.doScroll&&function lt(){if(!o){try{c.doScroll("left")}catch(t){n.clearTimeout(i.readyTimeout),i.readyTimeout=n.setTimeout(lt,50);return}e()}}()}setTimeout(function(){g=!0,u(d,function(n){n()})},300)})(window);
//]]>
</script>
<script type="71faf2f913f77f1791574256-text/javascript">
//<![CDATA[
head.ready(document,function(){head.load({jqueryfile:"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"},{google:"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"})}),head.ready("jqueryfile",function(){$(".articlebody div").css("text-align","left"),$(".ad_two").css("text-align","center"),$(".articlebody .separator a").css("margin-bottom","15px"),$(".articlebody .separator a").css("margin-left","0"),$(".menu-more, .m-menu-more").click(function(){$(".overlay").fadeToggle("fast"),$(".button a").toggleClass("btn-open").toggleClass("btn-close"),$("html, body").css("overflow","hidden")}),$(".btn-close").on("click",function(){$(".overlay").fadeToggle("fast"),$(".button a").toggleClass("btn-open").toggleClass("btn-close"),$("html, body").css("overflow","auto"),open=!1});var e=$(".share-modal");$(".share-show-modal, .fs-more").click(function(){e.fadeIn(),$("html, body").css("overflow","hidden")}),$(".share-close-modal").click(function(){e.fadeOut(),$("html, body").css("overflow","auto")}),$(".search-here, .m-search-here").on("click",function(){$(".search-here i").hasClass("icon-search")?$(".search-here i").removeClass("icon-search").addClass("fa-times"):$(".search-here i").removeClass("fa-times").addClass("icon-search"),$(".search-box").slideToggle(),$(".search-b input").focus()})});
//]]>
</script>

<script type="text/javascript">
    //<![CDATA[
    head.ready("jqueryfile", function () { $(window).scroll(function () { var e = $(this).scrollTop(), s = $(".articlebody").offset().top, i = $(".stophere").offset().top; jQuery(window).height(); e < s ? ($(".float-share").css("visibility", "visible"), $(".float-share").removeClass("fixed-r")) : s < e && e < i - 440 ? ($(".float-share").addClass("fixed-r"), $(".float-share").css("visibility", "visible")) : ($(".float-share").css("visibility", "hidden"), $(".float-share").removeClass("fixed-r")) }) });
//]]>
  </script>

<script type='application/ld+json'>
                {
                    "@context": "https://schema.org",
                    "@type": "Organization",
                    "description":"The Hacker News is the most popular, independent and trusted source for the latest news headlines on cybersecurity, hacking, computer security, cybercrime, privacy, vulnerabilities and technology for all businesses, information security professionals and hackers worldwide.",
                    "name": "The Hacker News",
                    "email": "admin@thehackernews.com",
                    "logo": {
                    "@type": "ImageObject",
                    "url": "https://thehackernews.com/images/-lr1jzOJlY3g/Wzjug8yO0UI/AAAAAAAAxSk/pVpxFhgIHRcIbASdYo3YSDZLB8p3ytjqACLcBGAs/s460-e100/the-hacker-news.jpg",
                    "width": 460,
                    "height": 60
                    },
                    "url": "https://thehackernews.com/",
                    "sameAs" : ["https://twitter.com/thehackersnews",
                    			"https://www.facebook.com/thehackernews",
                    			"https://www.linkedin.com/company/thehackernews/",
                    			"https://www.youtube.com/c/thehackernews",
                    			"https://www.instagram.com/thehackernews/",
								"https://www.crunchbase.com/organization/the-hacker-news",
								"https://www.facebook.com/groups/thehackernews",
                                "https://www.quora.com/topic/The-Hacker-News",
                                "https://telegram.me/thehackernews",
                                "https://vk.com/thehackernews",
                    			"https://www.pinterest.com/thehackernews/"]
                }
</script>
<script type='application/ld+json'>
                {
                    "@context": "https://schema.org",
                    "@type": "WebSite",
                    "name": "The Hacker News",
                    "url": "https://thehackernews.com/",
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "https://thehackernews.com/search?q={search_term_string}",
                        "query-input": "required name=search_term_string"
                    }
                }
</script>
<script type="71faf2f913f77f1791574256-text/javascript">
//<![CDATA[
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/sw.js').then(registration => {
      }).catch(registrationError => {
        console.log('SW registration failed: ', registrationError);
      });
    });
  }
//]]>
</script>
<script src="https://thehackernews.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="71faf2f913f77f1791574256-|49" defer=""></script>

<?php wp_footer(); ?>
</body>

</html>