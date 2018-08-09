<?php
header("Access-Control-Allow-Origin: *");
?>


<div class="login-form">

<form method="post" class="giris-yap">
<h2>Giriş Yap</h2>
<h4>Kullanıcı Adı</h4>
    <input type="text" name="modulenter[nick]">
<h4>Şifre</h4>
    <input type="password" name="modulenter[pwd]">
<div class="hesap-ac-kayit">Hesabın yok mu?<a href="http://aliq03.tr.gg/forum/register.htm">Kaydol</a></div>
  <button type="submit" class="login-button aliq-btn aliq-btn--primary">Giriş Yap</button>
<input type="hidden" name="mode" value="login">
</form>

</div>

<style>

a.alintiyap, .konueklesene {
    display: none;
}
div#container div#content {margin-top: -107px;}

div.user-content {
    background: #fff;
    height: auto;
    box-shadow: 0 8px 6px -8px rgba(0,0,0,.3);
    border: 1px solid #d8d8d8;
}

.giris-yap h4 {
    margin: 0px 0px;
    color: #cecece;
    font-family: roboto;
    font-size: 13px;
    font-weight: 400;
    margin-top: 7px;
}
form.giris-yap {
    padding: 15px 52px;

}
.giris-yap input {
    padding: 5px;
    border: 1px solid #CCCCCC;
}
.giris-yap h2 {
    margin: 0px;
    padding-bottom: 7px;
    color: #fff;
}
.giris-yap button.login-button {
    margin: 20px 60px;
    margin-bottom: 2px;
    position: relative;
    background: #10568e;
    width: 95px;
    font-weight: 400;
    font-family: arial;
padding: 2px;
}
.hesap-ac-kayit {
    margin-top: 12px;
    font-family: roboto;
    font-size: 13px;
    color:#cecece;
}
.hesap-ac-kayit a {
    color: #67b6f5;
    margin-left: 6px;
}
</style>
<script>
$(document).ready(function(){
$(".user-content").append( $( ".login-form" ) );
});
</script>