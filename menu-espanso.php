<?php
header("Access-Control-Allow-Origin: *");
?>

 <div class="menu-espanso">
    <div id="menu" class="menu">
    <div id="menu-in" class="menu-in"></div>
    </div>
<div class="linee-munu">
    <span class="linee linea1"></span>
    <span class="linee linea2"></span>
    <span class="linee linea3"></span>
    </div>
    <div class="voci-menu">
      <ul>
        <li><a href="#">Profil Fotoğrafını Değiştir</a></li>
        <li><a href="#">Kapak Fotoğrafını Değiştir</a></li>
        <li><a href="#">Çıkış Yap</a></li>
      </ul>
    </div>
</div>

<style>
.menu-espanso {
    background-color: transparent;
    position: absolute;
    top: 44px;
    right: 36px;
    width: 280px;
    height: 326PX;
    overflow: hidden !important;
    z-index: 5;
}

.menu,
.linee {
  cursor: pointer;
}

.menu-in {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  height: 49px;
  width: 49px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.78);
  border: none;
  transition: all 0.40s ease-out;
}

.menu {
  position: absolute;
  right: 0;
  margin: 15px 15px 0 0;
  height: 49px;
  width: 49px;
  border-radius: 50%;
  background-color: transparent;
  border: none;
  transition: all 0.40s ease-out;
}

.over {
  width: 2000px;
  height: 2000px;
  transition: all 0.350s ease-in;
  cursor: default;
}

.linea1 {
  background: #fff;
  height: 2px;
  width: 15px;
  position: absolute;
  right: 33px;
  top: 33px;
  transition: all 0.3s;
}

.linea2 {
  background: #fff;
  height: 2px;
  width: 15px;
  position: absolute;
  right: 33px;
  top: 38px;
  opacity: 1;
  transition: opacity 0.5s;
}

.linea3 {
  background: #fff;
  height: 2px;
  width: 15px;
  position: absolute;
  right: 33px;
  top: 43px;
}

.overL1 {
  animation: closetop 1s forwards;
  animation-direction: alternate;
  cursor: pointer;
}

.overL2 {
  opacity: 0;
  transition: opacity 0.5s;
  cursor: pointer;
}

.overL3 {
  animation: closebottom 1s forwards;
  animation-direction: alternate;
  cursor: pointer;
}

@keyframes closetop {
  0% {
    transform: translateY(5px) rotate(0deg);
  }
  25% {
    transform: translateY(5px) rotate(0deg);
  }
  75% {
    transform: translateY(5px) rotate(-45deg);
  }
  100% {
    transform: translateY(5px) rotate(-45deg);
  }
}

@keyframes closebottom {
  0% {
    transform: translateY(0px) rotate(0deg);
  }
  25% {
    transform: translateY(-5px) rotate(0deg);
  }
  75% {
    transform: translateY(-5px) rotate(45deg);
  }
  100% {
    transform: translateY(-5px) rotate(45deg);
  }
}

.voci-menu {
  visibility: hidden;
  position: absolute;
  right: 50px;
  top: 40px;
  opacity: 0;
  transition: all 0.300s;
  transition-delay: 0s;
}

.overvoci {
  visibility: visible;
  opacity: 1;
  transition: all 0.400s;
  transition-delay: 0.370s;
}

.voci-menu ul {
  list-style-type: none;
}

.voci-menu ul li {
  margin: 20px 0px;
}

.voci-menu ul li a {
    float: right;
    text-decoration: none;
    color: #fff;
    margin-top: 20px;
    font-family: roboto;
}

.voci-menu ul li a:hover {
  opacity: 0.7;
}

.footer {
  position: relative;
  padding-top: 40px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  z-index: 2;
  background: #5F5F5F;
  width: 100%;
  height: 150px;
}

.footer div {
  width: 200px;
  text-align: center;
}

.footer div ul {
  list-style-type: none;
}

.footer div ul li span {
  text-align: center;
  text-decoration: none;
  color: transparent;
  background-color: #999;
  margin-top: 10px;
  display: inline-block;
}
</style>
<script>
$('.menu , .linee').on('click', function() {
  $('.menu-in').toggleClass('over')
  $('.linea1').toggleClass('overL1')
  $('.linea2').toggleClass('overL2')
  $('.linea3').toggleClass('overL3')
  $('.voci-menu').toggleClass('overvoci')
});
</script>