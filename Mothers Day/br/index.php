<?php
$name = isset($_GET['n']) ? $_GET['n'] : 'Tu nombre';

// convert -- OR - to space
$name = str_replace('-', ' ', $name);

// then sanitize
$name = htmlspecialchars($name);
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="google" content="notranslate" />
<meta name="robots" content="noindex" />
<title><?php echo $name;?> desejo a você um Feliz Dia das Mães</title>
<meta property="og:type" content="Mensagem secreta" />
<meta property="og:title" content="<?php echo $name;?> te enviou uma mensagem surpresa. Abra isto">
<meta property="og:url" content="https://see-you.co/br/?n=Seu-Nome" />
<meta property="og:description" content="Clique aqui" />
<meta property="og:site_name" content="<?php echo $name;?> desejo" />
<meta property="og:image" content="https://cdn.jsdelivr.net/gh/cdn2026/pic26/ogmsg.jpg" />
<link rel="canonical" href="https://see-you.co/br/" />
<link rel="stylesheet" href="../pic27/layout.min.css">
<script>
    if (window.location.search) {
        window.history.replaceState({}, document.title, window.location.pathname);
    }
</script>

<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js" crossorigin="anonymous"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/22884184265/ca-pub-1553494237872495-tag/see-you1', [320, 50], 'div-gpt-ad-topad').addService(googletag.pubads());
    googletag.defineSlot('/22884184265/ca-pub-1553494237872495-tag/see-you2', [320, 50], 'div-gpt-ad-bottomad').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
  });
</script>

</head>
<body>
<div class="maincontainer">
<div class="leftcurtain">
  <img src="../pic27/gate1.webp" alt="" />
</div>

<div class="rightcurtain">
  <img src="../pic27/gate2.webp" alt="" />
</div>

<div class="rope" onclick="PlaySound();" data-name="gate_opened">
  <div class="rope-text">
    Toque aqui<br>
    <img class="arrow" src="../pic27/arrow.webp" alt="arrow">
  </div>

  <div class="santa-box">
    <img class="santa" src="../pic27/all/mom/gift01.png" alt="santa">
  </div>
</div>
<marquee class='m1' behavior='scroll' direction='up' scrolldelay='0'>
<img src='../pic27/all/mom/mom11.png' height='130px' width='25px'/><br><br>
<img src='../pic27/all/mom/mom11.png' height='130px' width='25px'/><br><br>
<img src='../pic27/all/mom/mom11.png' height='130px' width='25px'/><br><br>
<img src='../pic27/all/mom/mom11.png' height='130px' width='25px'/><br><br>
<img src='../pic27/all/mom/mom11.png' height='130px' width='25px'/><br><br>
</marquee>
<marquee class='m2' behavior='scroll' direction='down' scrolldelay='0'>
<img src='../pic27/all/mom/mom11.png' height='130px' width='25px'/><br><br>
<img src='../pic27/all/mom/mom11.png' height='130px' width='25px'/><br><br>
<img src='../pic27/all/mom/mom11.png' height='130px' width='25px'/><br><br>
<img src='../pic27/all/mom/mom11.png' height='130px' width='25px'/><br><br>
<img src='../pic27/all/mom/mom11.png' height='130px' width='25px'/><br><br>
</marquee>

<div class="ad-wrap">
<!-- /22884184265/ca-pub-1553494237872495-tag/see-you1 -->
<div id='div-gpt-ad-topad' style='min-width: 320px; min-height: 50px;'></div>
</div>

<div class="sname"><?php echo $name;?></div>
<br>
<img src="../pic27/all/ny/br/brwish.svg" width="50%" alt="" class="anim-rubber" />
<br>
<div class="countdown-text">
<p id="demo"></p></div>
<br>
<img src="../pic27/all/mom/br/mommain1.webp" width="75%" loading="lazy" alt="" class="anim-tada" />
<br><br>

<img src="../pic27/all/mom/momunder1.gif" width="40%" loading="lazy" alt="" />
<img src="../pic27/all/mom/momunder2.gif" width="40%" loading="lazy" alt="" />

<div class="ad-wrap">
<!-- /22884184265/ca-pub-1553494237872495-tag/see-you2 -->
<div id='div-gpt-ad-bottomad' style='min-width: 320px; min-height: 50px;'></div>
</div>

<div class="GodMessage">
  <p class="line1">O amor de mãe nos mostra</p>
  <p class="line2">como cuidar 💖</p>
  <p class="line3">como crescer 🌷</p>
  <p class="line4">e como brilhar ✨</p>
  <p class="line5">🌸 Feliz Dia das Mães 🌸</p>
</div>

<div class="sname1"><?php echo $name;?></div> 
        
</div>
<div class="footer">
  <form method="POST" action="./wish.php">
    <input type="text" name="n" maxlength="50" placeholder="👉 Digite <?php echo $name;?> aqui.." required>
    <input type="submit" value="👉 IR">
  </form>
</div>
<script>let curtainOpen=!1;const rope=document.querySelector(".rope"),leftCurtain=document.querySelector(".leftcurtain"),rightCurtain=document.querySelector(".rightcurtain");leftCurtain.style.transition="width 2s",rightCurtain.style.transition="width 2s",rope.style.transition="top 0.35s ease-out",rope.addEventListener("click",()=>{curtainOpen?(rope.style.top="5px",leftCurtain.style.width="50%",rightCurtain.style.width="50%",curtainOpen=!1):(rope.style.top="-171%",leftCurtain.style.width="0",rightCurtain.style.width="0",curtainOpen=!0,googletag.cmd.push(function(){googletag.display("div-gpt-ad-topad"),googletag.display("div-gpt-ad-bottomad")}))});</script>
<script>
var countDownDate = new Date("May 10, 2026 00:00:00").getTime();
var x = setInterval(function() {
var distance = countDownDate - new Date().getTime();
if (distance < 0) { clearInterval(x); document.getElementById("demo").innerHTML = ""; }
else {
var d = Math.floor(distance / (1000 * 60 * 60 * 24)), h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)), m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)), s = Math.floor((distance % (1000 * 60)) / 1000);
document.getElementById("demo").innerHTML = `${d}<font color='#E91E63'> dias,</font> ${h}<font color='#8E24AA'> h,</font> ${m}<font color='#0288D1'> min,<br></font> ${s}<font color='#D84315'> seg antes</font> `;
}
}, 1000);
</script>
<audio id="audiocracker" src="../pic27/all/mom/momsong.mp3" preload="none"></audio>
<script>
    function PlaySound() {
          var sound = document.getElementById("audiocracker");
          sound.play()
      }
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-29SJNEF823"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-29SJNEF823');
</script>

<script>document.querySelectorAll(".rope").forEach(function(e){e.addEventListener("click",function(){const t=e.getAttribute("data-name")||"unknown";gtag("event","gate_opened",{gate_opened:t,debug_mode:!0})})});document.addEventListener("click", function (e) {
    const box = document.querySelector(".footer input[type='text']");
    if (box && !box.contains(e.target)) box.blur();
});
</script>
</body>
</html>