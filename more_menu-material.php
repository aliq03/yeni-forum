<?php
header("Access-Control-Allow-Origin: *");
?>
<div class="menu-mat1">
<input type="checkbox" id="menu-toggle"/>
       <label for="menu-toggle">
              <i id="open" class="material-icons">menu</i>
              <i id="close" class="material-icons">arrow_back</i>
          </label>
          <ul id="menu">
              <li><a href="http://aliq03.tr.gg/forum/topic-9-1-Profil-Resmini-Değiştir.htm"><i class="material-icons">account_circle</i>Profil fotoğrafını değiştir</a></li>
              <li><a href="#"><i class="material-icons">image</i>Kapak fotoğrafını değiştir</a></li>
              <li><a href="http://aliq03.tr.gg/forum/logout.htm"><i class="material-icons">cancel</i>Çıkış yap</a></li>
          </ul>
</div>
<style>
@import url(https://fonts.googleapis.com/css?family=Material+Icons|Roboto:400,700);

/*@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(../icons/MaterialIcons-Regular.eot); /* For IE6-8 *//*
  src: local('Material Icons'),
       local('MaterialIcons-Regular'),
       url(../icons/MaterialIcons-Regular.woff2) format('woff2'),
       url(../icons/MaterialIcons-Regular.woff) format('woff'),
       url(../icons/MaterialIcons-Regular.ttf) format('truetype');
}*/
.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;/* Preferred icon size */
  display: inline-block;
  width: 1em;
  height: 1em;
  line-height: 3;
  text-transform: none;
  letter-spacing: normal;
  word-wrap: normal;
  white-space: nowrap;
  direction: ltr;/* Support for all WebKit browsers. */
  vertical-align: sub;
  -webkit-font-smoothing: antialiased;/* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;/* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;/* Support for IE. */
  font-feature-settings: 'liga';
}
label[for="menu-toggle"], label[for="menu-toggle"]:before, label[for="menu-toggle"]:after {
    position: absolute;
    margin: 88px 214px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #673AB7;
    box-shadow: rgba(0, 0, 0, 0.117647) 0px 0px 8px 0px, rgba(0, 0, 0, 0.239216) 0px 8px 8px 0px;
    transition: 0.55s cubic-bezier(0.19, 1, 0.22, 1);
    z-index: 5;
}
label[for="menu-toggle"] #open {
    position: absolute;
    top: -16px;
    left: 8px;
    color: #eaeaea;
    font-size: 24px!important;
    cursor: pointer;
}
label[for="menu-toggle"] #close {
    opacity: 0;
    cursor: pointer;
}
#menu-toggle:not(:checked) + label[for="menu-toggle"]:hover {
    box-shadow: rgba(0, 0, 0, 0.0784314) 0px 0px 12px 0px, 
                rgba(0, 0, 0, 0.239216) 0px 12px 12px 0px;
}

#menu {
    position: absolute;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: none;
    transition:0.55s cubic-bezier(0.19, 1, 0.22, 1);
    z-index: 1;
}

#menu-toggle:checked + label[for="menu-toggle"] {
    position: absolute;
    margin-top: 110px;
    margin-left: 0px;
    width: 280px;
    height: 216px;
    background-color: #673AB7;
    border-radius: 0;
    box-shadow: none;
    z-index: 4;
    transition: 0s;

}
#menu-toggle:checked + label[for="menu-toggle"] #open {
    opacity: 0;
    pointer-events: none;
}
#menu-toggle:checked + label[for="menu-toggle"] #close {
   position: absolute;
    top: -20px;
    right: 20px;
    color: #e8e8e8;
    font-size: 32px!important;
    opacity: 1;
}

#menu-toggle:checked + label[for="menu-toggle"] + #menu {
    position: absolute;
    margin-top: 156px;
    width: 250px;
    background: #673AB7;
    height: 145px;
    z-index: 5;
    text-align: left;
    border-radius: 0;
    padding-right: 30px;
    padding-top: 23px;
    padding-left: 0px;
    -webkit-transition: height 1s ease;
    -moz-transition: height 1s ease;
    -ms-transition: height 1s ease;
    -o-transition: height 1s ease;
    transition: height 1s ease;
0px;
}

#menu-toggle:not(:checked) + label[for="menu-toggle"] + #menu li {
    opacity: 0;
    position: absolute;
    top: 0; left: 0;
    pointer-events: none;
    
}
#menu-toggle:checked + label[for="menu-toggle"] + #menu li {
  opacity: 1;
    margin-left: 30px;
    padding: 0;
    transition: .2s ease .1s;
    list-style: none;
    font-family: roboto;
    margin-top: -26px;
    margin-bottom: 24px;
}
#menu-toggle:checked + label[for="menu-toggle"] + #menu li a {
    color: #ffffff;
    text-decoration: none;
}
#menu-toggle:checked + label[for="menu-toggle"] + #menu li a i {
    padding-right: 8px;
}
[type="checkbox"]:not(:checked), [type="checkbox"]:checked  {
    display: none;
}
</style>