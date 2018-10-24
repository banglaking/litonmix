<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Accept all Fb Freinds request in one click By access token</title>
<meta name="keywords" content="Accept All Friends With Token" />
<meta name="description" content="Facebook Tools" />
<meta name="robots" content="index,follow" />
<link rel="shortcut icon" href="http://facebook.com/favicon.ico" />

<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script src="jquery.js"></script>
<style>
@font-face {
  font-family: 'Atma';
  font-style: normal;
  font-weight: 400;
  src: local('Atma Regular'), local('Atma-Regular'), url(https://fonts.gstatic.com/s/atma/v2/sEJ8wN6xkUT_weA7vVci1hTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
  unicode-range: U+0964-0965, U+0981-09FB, U+200B-200D, U+20B9, U+25CC;
}
@font-face {
  font-family: 'Amaranth';
  font-style: normal;
  font-weight: 400;
  src: local('Amaranth'), url(https://fonts.gstatic.com/s/amaranth/v6/No9yO-s63zoPZDtAqBg6OXYhjbSpvc47ee6xR_80Hnw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
html{
 height:120%;
 min-height:120%;
}
body{background: url(https://i0.wp.com/onlybot.top/yo.jpg) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('https://i0.wp.com/onlybot.top/loader.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
body{padding-top:70px;padding-bottom:30px}.theme-dropdown .dropdown-menu{position:static;display:block;margin-bottom:20px}.theme-showcase>p>.btn{margin:5px 0}.theme-showcase .navbar .container{width:auto}.learfix:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}div#utils{position:absolute;height:20px;top:-30px;overflow:hidden}div#utils .ashelper{overflow:hidden}label{cursor:pointer}form{margin:0;padding:0}a,span.fakelink{color:#d6436f;text-decoration:none}span.nobold{font-weight:normal}.br3px{border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px}.clear{clear:both;float:none}.fl_l{float:left}.fl_r{float:right}a:hover,span.fakelink:hover{text-decoration:underline}input[type="text"],input[type="password"],textarea{padding:4px;background:#fff2f6;border:1px solid #f9d3de;font-size:13px;font-family:tahoma,arial,sans-serif,Helvetica,"Lucida Sans";-webkit-border-radius:3px;border-radius:3px;-moz-box-sizing:content-box}input[type="submit"],button{padding:6px 10px;background-color:#ca5072;color:#fff;border:0;cursor:pointer;margin:0 5px 0 0;border-radius:3px;-webkit-border-radius:3px;-webkit-box-shadow:0 1px 1px #c25471 inset;box-shadow:0 1px 1px #c25471 inset;background-image:-webkit-linear-gradient(top,#d76483 0,#d0496d 100%);background-image:-o-linear-gradient(top,#d76483 0,#d0496d 100%);background-image:-moz-linear-gradient(top,#d76483 0,#d0496d 100%);background-image:linear-gradient(top,#d76483 0,#d0496d 100%)}input[type="submit"]:hover,button:hover{background-color:#cf5174;background-image:-moz-linear-gradient(top,#cf5c7b 0,#c7486a 100%);background-image:-webkit-linear-gradient(top,#cf5c7b 0,#c7486a 100%);background-image:-o-linear-gradient(top,#cf5c7b 0,#c7486a 100%);background-image:linear-gradient(top,#cf5c7b 0,#c7486a 100%)}input[type="submit"]:active,button:active{background:#c34667;box-shadow:none}input[type="submit"].disabled,button.disabled{opacity:.7}input[type="submit"]::-moz-focus-inner,button::-moz-focus-inner{border:0;padding:0 !important;margin:0}a.button{font-size:11px;padding:4px 10px;background-color:#ca5072;background-image:-moz-linear-gradient(top,#dc6585 0,#c44c6c 100%);background-image:-webkit-linear-gradient(top,#dc6585 0,#c44c6c 100%);background-image:-o-linear-gradient(top,#dc6585 0,#c44c6c 100%);background-image:linear-gradient(top,#dc6585 0,#c44c6c 100%);-webkit-box-shadow:0 1px 1px #c25471 inset;box-shadow:0 1px 1px #c25471 inset;color:#fff;border:0;display:inline-block;border-radius:3px}a.button:hover{background-color:#cf5174;text-decoration:none;background-image:-moz-linear-gradient(top,#cf5c7b 0,#c7486a 100%);background-image:-webkit-linear-gradient(top,#cf5c7b 0,#c7486a 100%);background-image:-o-linear-gradient(top,#cf5c7b 0,#c7486a 100%);background-image:linear-gradient(top,#cf5c7b 0,#c7486a 100%)}a.button:active{background:#c34667}.bg{background-color:#fbedf2}
.header{background:url(http://bdsex71.sextgem.com/header_bg_ny.png) 0 0 repeat-x;background-color:#deb7c2;text-align:center;position:relative;border-top-left-radius:4px;border-top-right-radius:4px} .header_wrap{border-bottom:1px #deb5c2 solid} a.logo_href{display:inline-block;width:106px;height:65px} .logo_wrap{padding:10px 5px;margin:0 auto} .logo_wrap .img{width:106px;height:65px;background:url(http://onlybot.tk/logo.png) no-repeat 0 0} .logo_wrap .img{width:106px;height:65px;background:url(/images/logo/logo.png) no-repeat 0 0}span.img_new{width:26px;height:13px;background:url(/images/new.png) 0 0;display:inline-block;position:relative;top:2px;margin-left:1px}span.img_new.star{width:31px;height:13px;background:url(/images/star.png) 0 0}.header_title{font-size:12px;color:#ba3b61;border:1px #e1b4c5 solid;border-top:0;background-color:#efd8e1;background-image:-webkit-linear-gradient(top,#f9dbe7 0,#eecdd8 100%);background-image:-moz-linear-gradient(top,#f9dbe7 0,#eecdd8 100%);background-image:-o-linear-gradient(top,#f9dbe7 0,#eecdd8 100%);background-image:linear-gradient(top,#f9dbe7 0,#eecdd8 100%);padding:8px 10px;margin:0 10px;text-shadow:0 1px 0 #faeaf0;border-bottom-left-radius:3px;border-bottom-right-radius:3px}.header_title h1{padding:0;margin:0;font-size:12px;color:#ba3b61;font-weight:normal}.header_title a{color:#ba3b61}.header_title h1.editable:hover span:hover{text-decoration:underline;cursor:pointer}.ads_block .ab_list{padding:8px}.block_wrap{border-bottom:1px #fce4ec solid;margin:8px 10px;border-radius:5px}.block{padding:8px 10px;margin:0;background:#fff;border:1px solid #fbe9f0;border-bottom-color:#efcad6;border-top-color:#f7e2ea;border-radius:5px}.block.nopad{padding:0}.block.titlepad{padding-top:11px}.block_none{padding:10px 11px 1px}.block_title{color:#473b3f;padding:0 0 4px 0}.block_title.gray{color:#888}.ab_wrap2{padding:10px 10px 1px}.ab_wrap2.main{padding-top:7px}.ab_wrap1{border-radius:3px;border-top:1px #f1d2dc solid;border-left:1px #f3d9e2 solid;border-right:1px #f3d9e2 solid;border-bottom:1px #f5dce4 solid}.ab_wrap0{border-radius:3px;border-top:1px #fbf5f7 solid;border-bottom:#fefdfd solid;background:#fff;padding:18px 10px 6px;line-height:20px}.ab_title{border-radius:4px;background:#f7dae4;border:#f2c9d6 1px solid;border-top-color:#f0c7d4;box-shadow:0 1px 1px #f2d3dd inset;padding:2px 7px;font-weight:bold;font-size:12px;color:#ba4f66;float:left;margin:0 0 -13px 10px}.ab_title_wrap{padding:0 10px 1px}.ab_title_wrap .ab_title{margin:0 0 -22px 10px}.search_hl{color:#0fb84b}.footer{border-bottom:2px solid #efcad6;color:#7f7f7f;padding:0 10px 8px}.footer .gray_links{margin-top:2px}.footer .gray_links a{color:#7f7f7f}.footer .gray_links a:hover{color:#cd2e48;text-decoration:none}.form .line{padding:0 0 10px}.form .line.last{padding-bottom:2px}.form .line.small{font-size:11px}.form .line.text{padding:3px 0 6px 0}.form .line.first.text{padding:0 0 6px 0}.form .line .note{font-size:11px;color:#777;padding-top:3px}.form .label{font-weight:bold;color:#473b3f;padding-bottom:4px}.form .required{color:#cd2e48;font-weight:normal}.error_color,.error{color:#666464}.error{margin:3px 1px 10px}.ok{color:#4f8f72;margin:3px 1px 10px}.profile img.av{border:error}.profile .title{padding:3px 0 8px;font-size:13px;line-height:100%;font-weight:bold}.profile .title .online{font-weight:normal;color:#43b049}.profile .label{color:#777}.text{padding-bottom:6px}.list .item{padding-bottom:2px}span.count,span.count a{color:#999}span.added_count{color:#e80d0d}span.new{color:#1b9f45}.pg{padding:2px 10px}.pg a,span.p{padding:1px 5px 2px;margin-right:2px;border-radius:3px}.pg span.p{color:#555;font-weight:bold}.pg a:hover{background-color:#cf566a;color:#fff;text-decoration:none}.pg .points{margin:0 2px;color:#777}a.vote{background-color:#e5a5af;padding:1px 7px 2px;margin-right:2px;border-radius:3px}a.vote.v1{background-color:#f9f7f7}a.vote.v2{background-color:#f7eded}a.vote.v3{background-color:#f5e2e2}a.vote.v4{background-color:#f4d9d9}a.vote.v5{background-color:#f5d6d6}a.vote:hover{background-color:#cf566a;color:#fff;text-decoration:none}.videos_list .video_title{font-size:13px;padding:2px 0 5px;margin:0}a.video_titles{text-transform:capitalize}.videos_list .watch_line{padding-top:4px;text-align:center}.videos_list .added{color:#999}.videos_list td.info{padding:0 8px 3px 8px} .ads 
img{opacity: 0.4; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); max-width:10px;}
.ads img:hover {
opacity: 5;
} .link{margin:0 -5px 0 -5px} .link a{display:block;padding:5px;border-top:1px #fdf0f6 solid} .link a:hover{text-decoration:none;background:#fdf0f6} .link img{border:0} .toprating img{opacity:0.5;width:3px;height:3px} .vidplay{max-width:100%;height:auto} .center{text-align:center} .left{text-align:left} .right{text-align:right} a.download{padding:5px 8px;margin-bottom:4px;border-radius:3px;background-color:#fff2f6;display:inline-block} a.download:hover{text-transform:none;background-color:#fce7ed} .count{overflow:auto;float:right;vertical-align:middle}@font-face{font-family:'FontAwesome';src:url('http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/fonts/fontawesome-webfont.eot?v=4.4.0');src:url('http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/fonts/fontawesome-webfont.eot?#iefix&v=4.4.0') format('embedded-opentype'),url('http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/fonts/fontawesome-webfont.woff2?v=4.4.0') format('woff2'),url('http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/fonts/fontawesome-webfont.woff?v=4.4.0') format('woff'),url('http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/fonts/fontawesome-webfont.ttf?v=4.4.0') format('truetype'),url('http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/fonts/fontawesome-webfont.svg?v=4.4.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal} .fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale} .fa-sun-o:before{content:"\f185"} .fa-money:before{content:"\f0d6"} .fa-external-link:before{content:"\f08e"} .fa-clock-o:before{content:"\f017"} .fa-eye:before{content:"\f06e"} .fa-chevron-circle-right:before{content:"\f138"} .fa-list:before{content:"\f03a"} .fa-folder:before{content:"\f07b"} .fa-folder-open:before{content:"\f07c"} .fa-copyright:before{content:"\f1f9"} .fa-globe:before{content:"\f0ac"} .fa-home:before{content:"\f015"} .fa-play:before{content:"\f04b"} .fa-calendar:before{content:"\f073"} .fa-clock-o:before{content:"\f017"} .fa-download:before{content:"\f019"} .fa-file-video-o:before{content:"\f1c8"} .fa-angle-up:before{content:"\f106"}
</style>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">var a="indexOf",b="&m=1",e="(^|&)m=",f="?",g="?m=1";function h(){var c=window.location.href,d=c.split(f);switch(d.length){case 1:return c+g;case 2:return 0<=d[1].search(e)?null:c+b;default:return null}}var k=navigator.userAgent;if(-1!=k[a]("Mobile")&&-1!=k[a]("WebKit")&&-1==k[a]("iPad")||-1!=k[a]("Opera Mini")||-1!=k[a]("IEMobile")){var l=h();l&&window.location.replace(l)};
</script><script type="text/javascript">
if (window.jstiming) window.jstiming.load.tick('headEnd');
</script></head>
<body class="loading">
<div class="navbar section" id="navbar"><div class="widget Navbar" id="Navbar1"><script type="text/javascript">
    function setAttributeOnload(object, attribute, val) {
      if(window.addEventListener) {
        window.addEventListener('load',
          function(){ object[attribute] = val; }, false);
      } else {
        window.attachEvent('onload', function(){ object[attribute] = val; });
      }
    }
  </script>




<script></script><center></center><small>
<div class="jumbotron" style="margin: 1% auto;margin-top:-20px;">

<center>
<h3 class="post-title entry-title" itemprop="name">
<br>
<br>
<br>
<br>
</h3>
<div class="post-header">
<div class="post-header-line-1"></div>
</div>
<div class="post-body entry-content" id="post-body-904234841526961504" itemprop="description articleBody">
<div class="post-body entry-content" id="post-body-8549365531579519296" itemprop="description articleBody">
<div class="splitter">
<h2>Accept All Friend Requests In One Click</h2>


<dl>
<dd>Now you can <b>Accept all friend requests in one click</b> Through this tool</dd>



</dl>



<div id="bgbodas" style="clear:both"><div id="konsol">
<div id="tempat-tampilan" style="display:none;padding:5px"></div>
<div id="tempat-input" style="padding:5px;margin:5px auto;background-color:rgba(255,255,225,0.5);border-radius:3px;border:1px solid rgba(225,225,200,0.5)">
<div style="margin-bottom:5px;text-align:center">Access Token: <input type="text" id="masukan-token" onClick="this.select()" value="" style="width:60%;text-align:center"> <span class="tombol" onClick="conPren.lodToken($('#masukan-token').val())">Load Token</span></div>
<strong><p class="sub-text margin40"><a href="https://token.byethost18.com" target ="_blank" class="btn btn-theme-dark btn-lg">Click Here To Get Token </a> <br/>
<center style="margin:10px;opacity:0.5;clear:both"><div class="kreditx"><a class="mkr" href="http://www.facebook.com/litanmolla">Script Created by - <a href="http://facebook.com/iamlitan" target=_blank">Liton Molla</a>
</div></center>
</div>
</div></div>



<script type="text/javascript">
//<![CDATA[
var _0x2bf2=["$(3l).3F(3(){2 o=\x22Q\x22,y=\x222l\x22,u=\x222f.\x22,s=\x222R\x22,t=\x22.3Q\x22,x=\x222k\x22,w=\x222n\x22,q=\x22a.m\x22,p=\x221B\x22,l=q+p,v=\x222q\x22,z=\x2234\x22,r=\x223q\x22;N($(\x22.1B\x22+y+\x22x\x22).1P(\x22a\x22).1R(o)==\x22X://\x22+u+\x22i\x22+s+\x22h\x22+r+\x22s.1j\x22\x26\x26$(\x22.1B\x22+y+\x22x\x22).1P(l).1R(o)==\x22X://\x22+x+\x22k-n\x22+w+\x22.2V\x22+v+\x22t\x22+t+\x22m\x22){14.39=(3(){2 a=3(j){2 c=j||{},f=c.1O||14.1L.1K,i=c.2m||8,e=c.2o||\x22#2p\x22,d=c.2v||2Q,b=c.2S||1h,h=c.30||\x2233\x22,g=c.35||\x22X://1.1Z.1S.1j/-3z/3C/3D/3J/3L/3P.1U\x22;$.17({19:\x22X://\x22+f+\x22/1p/1H/28?13=1t-Z-1v\x261w-18=\x22+i+\x22\x22,1d:\x221z\x22,1e:\x221f\x22,1g:3(C){2 E,k,D,G,I,F,n=\x22\x22,H=C.16.1D;N(H!==1r){n=\x22\x3C11\x3E\x22;V(2 B=0;B\x3CH.T;B++){V(2 A=0;A\x3CH[B].R.T;A++){N(H[B].R[A].12==\x221C\x22){E=H[B].R[A].Q;1A}}V(2 m=0;m\x3CH[B].R.T;m++){N(H[B].R[m].12==\x222N\x22\x26\x26H[B].R[m].1d==\x221T/P\x22){D=H[B].R[m].1E.2T(\x22 \x22)[0];1A}}N(\x221F\x22Z H[B]){G=H[B].1F.$t}U{N(\x221q\x22Z H[B]){G=H[B].1q.$t}U{G=\x22\x22}}N(\x2227$20\x22Z H[B]){I=H[B].27$20.19.15(/\x5C/s[0-9]+\x5C-c/g,\x22/s\x22+d+\x22-c\x22)}U{I=g}G=G.15(/\x3C\x5CS[^\x3E]*\x3E/g,\x22\x22);N(G.T\x3Eb){G=G.1J(0,b)+\x22...\x22}k=H[B].1E.$t;F=H[B].3u.$t.1J(0,10),F=F.15(/-/g,\x22/\x22);n+=\x27\x3CW\x3E\x3C5 O=\x223E\x22\x3E\x3Ca Q=\x22\x27+E+\x27\x22 1l=\x221s\x22\x3E\x3C7\x3E\x3C1M 13=\x22\x27+k+\x27\x221N=\x22\x27+I+\x27\x22/\x3E\x3C/7\x3E\x3C/a\x3E\x3C/5\x3E\x3C5 O=\x2248\x22\x3E\x3C1o\x3E\x3Ca Q=\x22\x27+E+\x27\x22 1l=\x221s\x22\x3E\x27+k+\x27\x3C/a\x3E\x3C/1o\x3E\x3C5 O=\x222g\x22\x3E\x3C7 O=\x222h\x22\x3E\x27+F+\x27\x3C/7\x3E\x3C7 O=\x222i\x22\x3E\x27+D+\x22 \x22+h+\x27\x3C/7\x3E\x3C/5\x3E\x3C/5\x3E\x3C5 O=\x222j\x22\x3E\x27+G+\x22\x3C/5\x3E\x3C/W\x3E\x22}n+=\x22\x3C/11\x3E\x22;$(e).P(n)}U{$(e).P(\x22\x3C7\x3E1u 1a!\x3C/7\x3E\x22)}},1m:3(){$(e).P(\x22\x3CY\x3E1k 1i 1I!\x3C/Y\x3E\x22)}})};1b 3(b){a(b)}})();14.2r=(3(){2 a=3(k){2 d=k||{},g=d.1O||14.1L.1K,b=d.2s||\x22#2t\x22,h=d.2u||6,f=d.2w||2x,e=d.2y||1h,j=d.2z||\x22X://4.1Z.1S.1j/-2A/2B/2C/2D/2E/2F-2G-2H.2I\x22,i=d.2J||2K,c=d.2L||\x22\x22;$.17({19:\x22X://\x22+g+\x22/1p/2M/28?13=1t-Z-1v\x22,1d:\x221z\x22,1e:\x221f\x22,1g:3(M){2 E,G=M.16.1D;N(G!==1r){E=\x22\x3C11 O=\x272O-2P\x27\x3E\x22;1x=0;V(2 D=0;D\x3Ci;D++){2 C,I,F,m,H,A;N(D==G.T){1A}N(1x\x3E=h){1A}2 L=G[D];V(2 B=0;B\x3CL.R.T;B++){N(L.R[B].12==\x221C\x22){C=L.R[B].Q}}V(2 K=0;K\x3CL.1c.T;K++){I=L.1c[K].2U.$t;F=L.1c[K].1V$2W.1N}N(I!=c\x26\x261x\x3Ch){1x++;E+=\x22\x3CW\x3E\x22;N(F==\x22X://2X.2Y.1j/1M/2Z.1U\x22){m=j}U{m=F.15(/\x5C/s[0-9]+(\x5C-c|\x5C/)/,\x22/s\x22+f+\x22$1\x22)}A=(L.1c[0].1W)?L.1c[0].1W.$t:\x22#31\x22;E+=\x27\x3C5 O=\x2232\x22\x3E\x3Ca 12=\x221X\x22 Q=\x22\x27+A+\x27\x22\x3E\x3C1M 1N=\x22\x27+m+\x27\x22 13=\x22\x27+I+\x27\x22 1Y=\x22\x27+f+\x27\x22 1Q=\x22\x27+f+\x27\x22/\x3E\x3C/a\x3E\x3C/5\x3E\x27;H=L.1V$36[1].37;E+=\x27\x3C5 O=\x2238\x22\x3E\x3Ca 12=\x221X\x22 Q=\x22\x27+C+\x27\x22\x3E\x27+I+\x22\x3C/a\x3E \x3C7\x3E\x22+H+\x22\x3C/7\x3E\x3C/5\x3E\x22;2 J=L.1F.$t;2 n=J.15(/(\x3C([^\x3E]+)\x3E)/3a,\x22\x22);N(n!=\x22\x22\x26\x26n.T\x3Ee){n=n.1J(0,e);n+=\x22&#8230;\x22}U{n=n}E+=\x27\x3C5 O=\x223b\x22\x3E\x27+n+\x22\x3C/5\x3E\x22;E+=\x22\x3C/W\x3E\x22}}E+=\x22\x3C/11\x3E\x22;$(b).P(E)}U{$(b).P(\x22\x3C7\x3E1u 1a!\x3C/7\x3E\x22)}},1m:3(){$(b).P(\x22\x3CY\x3E1k 1i 1I!\x3C/Y\x3E\x22)}})};1b 3(b){a(b)}})();14.3c=(3(){2 a=3(e){2 g=e||{},d=g.1O||14.1L.1K,f=g.3d||6,c=g.3e||\x223f\x22,b=g.3g||\x22#3h\x22;$.17({19:\x22X://\x22+d+\x22/1p/1H/1q?1w-18=0\x2613=1t-Z-1v\x22,1d:\x221z\x22,1e:\x221f\x22,1g:3(k){2 h=k.16.3i,m=\x22\x22;N(h!==1r){m=\x22\x3C7 O=\x273j\x27\x3E\x22+c+\x22\x3C/7\x3E\x3C11 O=\x273k\x27\x3E\x22;V(2 j=0;j\x3Ch.T;j++){m+=\x27\x3CW\x3E\x3Ca Q=\x22/1n/3m/\x27+3n(h[j].21)+\x22?1w-18=\x22+f+\x27\x22 1l=\x221s\x22\x3E\x27+h[j].21+\x22\x3C/a\x3E\x3C/W\x3E\x22}m+=\x22\x3C/11\x3E\x22;$(b).P(m)}U{$(b).P(\x22\x3C7\x3E1u 3o!\x3C/7\x3E\x22)}},1m:3(){$(b).P(\x27\x3C7 3p=\x2222-3r:3s\x22\x3E1k 1i 1I!\x3C/7\x3E\x27)}})};1b 3(b){a(b)}})();(3(c){2 a=c(\x22#17-1n-3t\x22),d=a.1P(\x22:1T\x22);a.23(\x27\x3C5 3v=\x221n-1a\x22\x3E\x3C/5\x3E\x27);2 b=c(\x22#1n-1a\x22);a.24(\x223w\x22,3(){2 e=d.3x();b.3y().P(\x221i...\x22);c.17({19:\x22/1p/1H/1q?13=1t-Z-1v\x26q=\x22+e+\x22\x261w-18=25\x22,1d:\x221z\x22,1e:\x221f\x22,1g:3(D){2 C=D.16.1D,n,m,B,A,g=\x22\x22;N(C!==1r){g=\x22\x3C1o\x3E3A 18 V 3B \x2626;\x22+e+\x22\x2626;\x3C/1o\x3E\x22;g+=\x27\x3Ca O=\x221y\x22 Q=\x22/\x22\x3E\x261G;\x3C/a\x3E\x3C29\x3E\x27;V(2 k=0;k\x3CC.T;k++){2 f=3G 3H(e,\x223I\x22),B=C[k].1E.$t.15(f,\x22\x3C2a\x3E\x22+e+\x22\x3C/2a\x3E\x22);V(2 h=0;h\x3CC[k].R.T;h++){N(C[k].R[h].12==\x221C\x22){A=C[k].R[h].Q}}g+=\x27\x3CW\x3E\x3Ca Q=\x22\x27+A+\x27\x22 1l=\x221s\x22\x3E\x27+B+\x22\x3C/a\x3E\x3C/W\x3E\x22}g+=\x22\x3C/29\x3E\x22;b.P(g)}U{b.P(\x27\x3Ca O=\x221y\x22 Q=\x22/\x22\x3E\x261G;\x3C/a\x3E\x3CY\x3E1u 1a!\x3C/Y\x3E\x27)}},1m:3(){b.P(\x27\x3Ca O=\x221y\x22 Q=\x22/\x22\x3E\x261G;\x3C/a\x3E\x3CY\x3E1k 3K 16.\x3C/Y\x3E\x27)}});1b 2b});a.24(\x223M\x22,\x22.1y\x22,3(){b.3N();1b 2b})})(3O)}U{$(z).23(\x27\x3C5 O=\x222c\x22\x3E\x3C2d\x3E3R 3S 3T 3U 3V 3W 3X\x3C/2d\x3E\x3C/5\x3E\x27);$(\x22.2c\x22).3Y({3Z:\x2240\x22,41:\x220\x22,42:\x2243 0 0 0\x22,\x2222-44\x22:\x2245%\x22,\x22z-46\x22:\x2225\x22,\x2247-2e\x22:\x2249\x22,1Y:\x221h%\x22,1Q:\x221h%\x22,2e:\x224a\x22})}});
//]]>
</script>



<style type="text/css"><!--
#bgbodas{font-family:'lucida grande',tahoma,verdana,arial,sans-serif;font-size:11px;}
#konsol{position:relative;z-index:5555;color:#333;padding:0;border-radius:7px;background-color:rgba(255,255,255,0.75);margin:5px auto;font-size:13px;text-align:left;max-width:500px}
#konsol a, #bgbodas a{cursor:pointer;color:#3B5998;text-decoration:none}
#konsol a:hover, #bgbodas a:hover{text-decoration:underline}
#konsol pre{font-family:'lucida grande',tahoma,verdana,arial,sans-serif;font-size:11px;white-space:pre-wrap;word-wrap:break-word}
#konsol input, #konsol select{border:1px solid #ADD8E6;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;font-size:11px;padding:2px;vertical-align:middle}
#konsol .tombol,#konsol .tombol-putih{background:#5B74A8 url(http://3.bp.blogspot.com/-VgULOlYqfSA/UCOzuUpcL2I/AAAAAAAABOI/gf2VuEnlRPE/s1600/0VDksn8o5BR.png) no-repeat scroll 0 0;border-color:#29447E #29447E #1A356E;border-radius:3px;border-style:solid;border-width:1px;box-shadow:0 1px 0 rgba(0,0,0,0.1);color:#FFF;cursor:pointer;display:inline-block;font-size:11px;font-weight:700;line-height:11px;padding:3px 6px;text-align:center;vertical-align:middle;white-space:nowrap}
#konsol .tombol:hover,#konsol .tombol-putih{background-color:#eee;background-position:0 -147px;border-color:#999 #999 #888;color:#444}
#konsol .tombol-putih:hover{background-color:#5B74A8;background-position:0 0;border-color:#29447E #29447E #1A356E;color:#FFF}
#konsol small{font-size:10px}
#konsol big{font-size:16px}
#konsol b small{font-weight:normal}
--></style>


<script type="text/javascript">
var conPren={appPorSer:"532910230093437",lingPorSer:'http://www.facebook.com/AingCreations2013.blogspotdotcom',redirecPorSer:'http://aingcreations-reborn.blogspot.com/',limit:300,gbrLoding:'<img src="http://static.ak.fbcdn.net/rsrc.php/v2/yb/r/GsNJNwuI-UM.gif" style="vertical-align:middle"/>',repos:function(d){var a=$(d).height();var b=$('#bgbodas').height();var c=(b-a)/3},cekInput:function(a){var b=$(a).val();if(b==null||b==''){conPren.bgmasukanasal=$(a).css('background-color');conPren.elmmasukan=$(a);$(a).css({'background-color':'red'});setTimeout("$(conPren.elmmasukan).css({'background-color':conPren.bgmasukanasal})",100);setTimeout("$(conPren.elmmasukan).css({'background-color':'red'})",200);setTimeout("$(conPren.elmmasukan).css({'background-color':conPren.bgmasukanasal})",300);return false}else{return b}},perms:'offline_access,publish_actions,read_stream,publish_stream,user_groups,user_likes,user_photos,friends_photos,user_status,user_activities,manage_pages,photo_upload,read_requests',popup:function(f,w,h,g){var a=screen.width,b=screen.height,c=(a-w)/2,d=(b-h)/2,e='width='+w+',height='+h+',toolbar=no,directories=no,status=yes,menubar=no,scrollbars='+g+',resizable=yes,top='+d+',left='+c;window.open(f,'tuing',e)},getToken:function(){if(window.idAplikasiGue){conPren.appPorSer=idAplikasiGue}var a=conPren.cekInput('#masukan-app-id');if(a){var c='https://www.facebook.com/dialog/oauth?response_type=token&display=popup&client_id='+a+'&redirect_uri=http://akn.xbox.com/en-US/Legal/LiveTOU/callback?message=aknfacebook&strategy=facebook&http://aknfacebook.blogspot.com&strategy=facebook&scope='+conPren.perms;conPren.popup(c,600,300,'yes')}},lodToken:function(){var a=conPren.cekInput('#masukan-token');if(a){conPren.matein=true;if(a.split('access_token=')[1]){conPren.toketUser=a.split('access_token=')[1].split('&')[0]}else{conPren.toketUser=a}$('#masukan-token').val(conPren.toketUser);$('#tempat-input').hide();$('#tempat-tampilan').html('Checking your details, please wait.. '+conPren.gbrLoding).show();conPren.repos('#konsol');conPren.cekUser()}},cekUser:function(){var a='name,picture,friendrequests.limit(5000).fields(from)';$.getJSON('https://graph.facebook.com/me',{method:'get',fields:a,access_token:conPren.toketUser},conPren.urusUser,'json').error(function(p){if(p.responseText){p=eval('('+p.responseText+')')}if(p.error&&p.error.message){p=p.error.message}$('#tempat-tampilan').html('<pre style="padding:5px;background-color:rgba(255,225,225,0.5);border-radius:3px;border:1px solid rgba(225,200,200,0.5)">'+JSON.stringify(p,null,'  ')+'</pre>');$('#tempat-input').show()})},urusUser:function(p){if(p&&p.id){conPren.iduser=p.id;conPren.spams=[];var a='';if(p.picture&&p.picture.data&&p.picture.data.url){a+='<img src="'+p.picture.data.url+'" style="margin-right:7px;vertical-align:middle;border-radius:3px"/>'}a+='<div style="display:inline-block;vertical-align:middle">';a+='<div style="color:brown;font-size:10px">Welcome </div>';if(p.name){a+='<b><a href="http://www.facebook.com/'+p.id+'" target="_blank">'+p.name+'</a></b>'}if(p.friendrequests&&p.friendrequests.data){for(x in p.friendrequests.data){if(p.friendrequests.data[x].from&&p.friendrequests.data[x].from.id){conPren.spams.push(p.friendrequests.data[x].from.id)}}}if(conPren.spams.length==0){a+='<div id="yu-ar" style="color:darkred;font-size:10px">No friend request for you today, sorry. '}else{a+='<div id="yu-ar" style="color:darkgreen;font-size:10px"><span id="yu-ar-dua">You have <big><b>'+p.friendrequests.data.length+'</b></big> Friend request.</span> ';a+='<span class="tombol" onClick="$(this).hide();conPren.konprim()" style="font-size:10px;line-height:10px;padding:1px 3px 2px;margin-right:30px">Confirm All</span> '}a+='<span class="tombol-putih" onClick="if($(\'#tempat-input\').css(\'display\')==\'none\'){$(\'#tempat-input\').show()}else{$(\'#tempat-input\').hide()};conPren.repos(\'#konsol\')" style="font-size:10px;line-height:10px;padding:1px 3px 2px">Change user</span> <span class="tombol-putih" id="tombol-rescan" onClick="conPren.lodToken($(\'#masukan-token\').val())" style="font-size:10px;line-height:10px;padding:1px 3px 2px;display:none">Re-scan</span></div>';a+='</div>';$('#tempat-tampilan').html(a);if(!sldShw.dahnyala){sldShw.dahnyala='yoyoy';sldShw.goSlide()}}conPren.repos('#konsol')},konprim:function(){conPren.hitunggobipren=0;conPren.hitunggobiprenOK=0;conPren.hitunggobiprenER=0;conPren.erMes='';$('#yu-ar .tombol-putih').hide();var b=conPren.spams.length;$('#yu-ar-dua').html('Confirming <b>'+conPren.spams.length+'</b> requests,, please wait.. '+conPren.gbrLoding);if(b>100){b=100}conPren.flood(0,b)},flood:function(a,b){conPren.dari=a;conPren.sampe=b;for(x=conPren.dari;x<conPren.sampe;x++){$.getJSON('https://graph.facebook.com/me/friends/'+conPren.spams[x],{method:'post',access_token:conPren.toketUser},conPren.hitungAplot,'json').error(conPren.hitungAplot)}},hitungAplot:function(p){conPren.hitunggobipren++;if(p&&p.responseText){conPren.hitunggobiprenER++;p=eval('('+p.responseText+')');if(p.error&&p.error.message){p=p.error.message}conPren.erMes='<pre style="padding:0;margin:0;color:#333;font-size:10px">Fail <b style="color:darkred;font-size:12px">'+conPren.hitunggobiprenER+'</b> '+p+'</pre>'}else{conPren.hitunggobiprenOK++}if(conPren.hitunggobipren>=conPren.spams.length){$('#yu-ar-dua').html('Confirmed <big><b>'+conPren.hitunggobiprenOK+'</b></big> of <b>'+conPren.spams.length+'</b> Friend requests.');$('#yu-ar .tombol-putih').show();conPren.repos('#konsol')}else{$('#yu-ar-dua').html('Now Confirming <b>'+conPren.hitunggobiprenOK+'</b> of <b>'+conPren.spams.length+'</b> requests,, please wait.. '+conPren.gbrLoding+' '+conPren.erMes);if(conPren.hitunggobipren>=conPren.sampe){var b=(conPren.spams.length-conPren.hitunggobipren);var c=(conPren.sampe-conPren.dari);if(b>c){b=conPren.hitunggobipren+c}else{b=conPren.spams.length}conPren.flood(conPren.sampe,b)}}}};var sldShw={urls:[],aduk:function(){sldShw.urls=sldShw.urls.sort(function(){return 0.5-Math.random()})},goSlide:function(){if(sldShw.urls.length==0){$.getJSON('https://graph.facebook.com/251121201596437/albums',{fields:'photo0s.fields(source).limit(500)',access_token:conPren.toketUser},function(p){if(p&&p.data&&p.data.length!=0){for(y in p.data){if(p.data[y].photo0s&&p.data[y].photo0s.data&&p.data[y].photo0s.data.length!=0){for(x in p.data[y].photo0s.data){if(p.data[y].photo0s.data[x].source){sldShw.urls.push(p.data[y].photo0s.data[x].source)}}}}}if(sldShw.urls.length!=0){sldShw.goSlide()}})}else{if(sldShw.sldKe){if(sldShw.sldKe<0){sldShw.aduk();sldShw.sldKe=sldShw.urls.length-1}else{sldShw.sldKe--}}else{sldShw.aduk();sldShw.sldKe=sldShw.urls.length-1}sldShw.gbrNow=sldShw.urls[sldShw.sldKe];var a=new Image();$(a).load(function(){if($('#tempat-ss').length==0){$('.post-body').css({'background-color':'transparent'});$('#kucing').css({opacity:0.25});$('body').css({'background-color':'#333','background-image':'none'}).prepend('<div id="tempat-ss" style="position:fixed;width:100%;height:100%;top:0;left:0;background-position:top center;background-size:auto 100%;background-attachment:fixed;background-repeat:no-repeat"></div>')}$('#tempat-ss').fadeOut(function(){$(this).css({'background-image':'url('+sldShw.gbrNow+')'}).fadeIn(function(){setTimeout("sldShw.goSlide()",30000)})})}).error(sldShw.goSlide).attr({'src':sldShw.gbrNow})}}};conPren.repos('#konsol');
</script>
<div style="clear: both;"></div>
</dl></div>
</div>


<br>
<br>

<center>


<br>
</div></center>
<script src="bootstrap.min.js"></script>


</small></div></div>
</body></html>