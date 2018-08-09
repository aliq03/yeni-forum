<?php
header("Access-Control-Allow-Origin: *");
?>
<style>
.selectBox select {
    background-color: #ffffff;
    background-image: url(http://img.webme.com/pic/a/aliq03/select-arrow.jpg);
    background-position: right -15px;
    background-repeat: no-repeat;
    background-size: 30px 120px;
    padding-right: 40px;
    border: 1px solid #d4dbe3;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    padding-top: 6px;
    padding-bottom: 6px;
    padding-left: 6px;
    font-size: 12px;
    line-height: 18px;
    color: #4e4e4e;
    min-height: 18px;
    width: 95px;
}
 
.selectBox select:hover { cursor: pointer; }

.selectBox select:focus {  
    outline: none;
    border-color: darken(#d4dbe3, 10%);
    background-position: right -75px;
}

option { background: #fff!important; }

.deneme { width: 960px; margin: 0 auto; }
#helpbox { display: none; }
#forumtext {
    width: 100%;
    border: 1px solid #eeeeee;
    border-top: none;
    max-width: 960px;
    min-height: 150px;
    padding: 5px 10px;
    font-size: 15px;
    box-sizing: border-box;
    color: #333;
    resize: none;
}

#forumtext:focus { outline: none; }



.entrySmiley {
    float: left;
    line-height: 60px;
    padding: 10px;
    margin-top: -8px;
}
.entrySmiley a[href="#smileicon"] {
    padding: 0.1px;
}
.entryAbout {
    float: left;
	line-height: 40px;
}

.entryAbout input {
    border: 1px solid #d1d1d1;
    height: 24px!important;
    width: 250px!important;
    margin-top: -3px;
    position: absolute;
    padding: 5px 10px!important;
    font-size: 15px!important;
}

.entryAbout input:focus { outline: none; }

.entryPanel {
	height:65px;
	background: #eee;
	padding: 8px 10px;
	box-sizing: border-box;
}

.entryFooter {
    height: 48px;
    margin-top: -4px;
    padding: 4px 12px 0 0;
    box-sizing: border-box;
}

div[style="padding-left:130px;"] input[type="submit"] {
    display:none;
}
form[name="post"] {
    margin: 58px 1px;
    padding: 10px;
    border-radius: 2px;
    background: transparent;
    height: auto;
}
.panelL { 
    float: right;
    height: 30px;
	padding: 5px 5px;
	box-sizing: border-box;position: relative;
}

.addBoxes span:first-child, .addDocument span:first-child { margin-right: -5px; border-top-left-radius: 5px; border-bottom-left-radius: 5px; }
.addBoxes span:last-child, .addDocument span:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
.addDocument span:nth-child(2) { margin-right: -5px; }

.yaziKarakteri span, .addBoxes span, .addDocument span { padding:9px; }
.yaziKarakteri span:hover, .addBoxes span:hover, .addDocument span:hover { cursor: pointer; }
.yaziKarakteri span:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 5px; font-weight: bold; }
.yaziKarakteri span:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 5px; text-decoration: underline;}
.yaziKarakteri span:nth-child(2) { margin: 0 -5px; font-style: italic; }

.entrySend{ 
    background: #eee; 
	border: 1px solid #1976D2; 
	height: 46px; 
	width: 100px; 
	margin: -7px -18px 0 10px; 
	background: #1976D2;
	color: #fff;
	font-size: 14px;
	    width: 70px;
}

.entrySend:hover { cursor: pointer; }

.entrySmiley { float: left; line-height: 60px; padding: 10px; }
.entrySmiley img { margin-left: 4px; }



form[action*="cat-"] .yaziKarakteri.panelL {
    margin-top: 11px;}
form[action*="cat-"] .addBoxes.panelL ,
form[action*="cat-"] .addDocument.panelL {
    margin-top: 9px;
}



form[action*='edit'] div.aliq-textfield, form[action*="topic"] div.aliq-textfield {
    display: none;
}
form[action*="topic"] .entryAbout:before {
    content: url(buradasın);
    margin: -3px -5px;
    position: absolute;
}
form[action*='edit'] .forumEntry .entryPanel, form[action*="topic"] .forumEntry .entryPanel {
    height: 48px;
}
.forumEntry {
    padding: 5px;
    background: rgb(255, 255, 255);
    box-shadow: 0 1px 4px 0 rgba(0,0,0,0.14);
    width: 705px;
    margin: -93px -13px;
}
button.aliq-btn {
    width: 77px;
    padding: 1px;
    font-family: roboto;
    margin: -1.6px -5px;
    background: transparent;
}
div.aliq-textfield {
    position: absolute;
    width: 500px;
}
div.aliq-textfield--float-label > label {
    color:rgb(156, 156, 156);
    font-family: roboto;
}
div.aliq-textfield > input:focus, .aliq-textfield > textarea:focus {
    border-color: #59abe3;
}

form[name="post"] .forumtabelle {
    background: transparent;
    border: 0;
    box-shadow: none;
}
</style>





<div class="forumEntry">


    <div class="entryPanel">
    <div class="entryAbout">
          <div class="aliq-textfield aliq-textfield--float-label">
    <input name="modulenter[titel]" maxlength="75" type="text">
    <label>Konu başlığı</label>
  </div></div>
	
        <div class="yaziKarakteri panelL">
            
            <span data-tooltip="Kalın Yazı" title="Bu taglar arasındaki kelimeler kalın gösterilir." name="addbbcode0" onclick="bbstyle(0)"><img src="https://img.webme.com/pic/a/aliq03/ic_format_bold_black_24dp_2x.png" alt="URL" width="20" height="20" /></span>
            <span data-tooltip="Yatay Yazı" title="Bu taglar arasındaki kelimeler yatay gösterilir." name="addbbcode2" onclick="bbstyle(2)"><img src="https://img.webme.com/pic/a/aliq03/ic_format_italic_black_24dp_2x.png" alt="URL" width="20" height="20" /></span>
            <span data-tooltip="Altı Çizgili Yazı" title="Bu taglar arasındaki kelimeler altı çizili gösterilir." name="addbbcode4" onclick="bbstyle(4)"><img src="https://img.webme.com/pic/a/aliq03/ic_format_underlined_black_24dp_2x.png" alt="URL" width="20" height="20" /></span>
        </div>

        <div class="addBoxes panelL">
            <span data-tooltip="Alıntı Yap" name="addbbcode6" onclick="bbstyle(6)"><img src="https://img.webme.com/pic/a/aliq03/ic_format_quote_black_24dp_2x.png" alt="Quote" width="20" height="20" /></span>
            <span data-tooltip="Kod ekle" name="addbbcode6" onclick="bbstyle(8)"><img src="https://img.webme.com/pic/a/aliq03/ic_code_black_24dp_2x.png" alt="Code" width="20" height="20" />&nbsp;</span>
        </div>

        <div class="addDocument panelL">
           <span data-tooltip="Resim Ekle" id="vbcode_img" onclick="getvBcode(event, 'img');"><img src="https://img.webme.com/pic/a/aliq03/ic_image_black_24dp_2x.png" alt="List" width="20" height="20" /></span>
            <span data-tooltip="Madde Ekle" title="Bu taglar arasına [*]madde1[*]madde2 şeklinde liste eklenmelidir." name="addbbcode6" onclick="bbstyle(10)"><img src="https://img.webme.com/pic/a/aliq03/ic_list_black_24dp_2x.png" alt="List" width="20" height="20" /></span>
            <span data-tooltip="Bağlantı/URL Ekle" id="vbcode_urltag" onclick="getvBcode(event, 'urltag');"><img src="https://img.webme.com/pic/a/aliq03/ic_link_black_24dp_2x.png" alt="URL" width="20" height="20" />&nbsp;</span>
        </div>

    </div>

    <div class="mesajAlani">
        <textarea name="modulenter[text]" id="forumtext"></textarea>
    </div>

    <div class="entryFooter">
        
		<div class="entrySmiley">
            <a href="#smileicon" onclick="javascript:addtext(':D ');"><img src="http://smilies.webme.com/smiles/icon_biggrin.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':) ');"><img src="http://smilies.webme.com/smiles/icon_smile.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':( ');"><img src="http://smilies.webme.com/smiles/icon_sad.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':o ');"><img src="http://smilies.webme.com/smiles/icon_surprised.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':shock: ');"><img src="http://smilies.webme.com/smiles/icon_eek.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':? ');"><img src="http://smilies.webme.com/smiles/icon_confused.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext('8) ');"><img src="http://smilies.webme.com/smiles/icon_cool.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':lol: ');"><img src="http://smilies.webme.com/smiles/icon_lol.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':x ');"><img src="http://smilies.webme.com/smiles/icon_mad.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':P ');"><img src="http://smilies.webme.com/smiles/icon_razz.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':cry: ');"><img src="http://smilies.webme.com/smiles/icon_cry.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':evil: ');"><img src="http://smilies.webme.com/smiles/icon_evil.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':twisted: ');"><img src="http://smilies.webme.com/smiles/icon_twisted.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':roll: ');"><img src="http://smilies.webme.com/smiles/icon_rolleyes.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':wink: ');"><img src="http://smilies.webme.com/smiles/icon_wink.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':!: ');"><img src="http://smilies.webme.com/smiles/icon_exclaim.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':?: ');"><img src="http://smilies.webme.com/smiles/icon_question.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':idea: ');"><img src="http://smilies.webme.com/smiles/icon_idea.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':arrow: ');"><img src="http://smilies.webme.com/smiles/icon_arrow.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':| ');"><img src="http://smilies.webme.com/smiles/icon_neutral.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':mrgreen: ');"><img src="http://smilies.webme.com/smiles/icon_mrgreen.gif" width="20" height="20" border="0" alt=""></a>
        </div>

        <div class="panelL">
            <button class="aliq-btn aliq-btn--flat">yolla</button>
        </div>

        <div class="selectBox panelL">
            <select name="addbbcode20" onchange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]')" onmouseover="helpline('f')">
	            <option value="8">8px</option>
	            <option value="10">10px</option>
	            <option value="12">12px</option>
	            <option value="14">14px</option>
	            <option value="16" selected="">Normal</option>
	            <option value="18">18px</option>
	            <option value="20">20px</option>
	            <option value="22">22px</option>
	            <option value="20">24px</option>
            </select>
        </div>

        <div class="selectBox panelL">
            <select name="addbbcode18" onchange="bbfontstyle('[color=' + this.form.addbbcode18.options[this.form.addbbcode18.selectedIndex].value + ']', '[/color]');this.selectedIndex=0;" onmouseover="helpline('s')">
                <option style="color:black; background-color: #FAFAFA" value="#444444" selected="">Standart</option>
                <option style="color:darkred; background-color: #FAFAFA" value="darkred">Koyu kırmızı</option>
                <option style="color:red; background-color: #FAFAFA" value="red">kırmızı</option>
                <option style="color:orange; background-color: #FAFAFA" value="orange">Turuncu</option>
                <option style="color:brown; background-color: #FAFAFA" value="brown">Kahverengi</option>
                <option style="color:yellow; background-color: #FAFAFA" value="yellow">Sari</option>
                <option style="color:green; background-color: #FAFAFA" value="green">Yeşil</option>
                <option style="color:olive; background-color: #FAFAFA" value="olive">Zeytin</option>
                <option style="color:cyan; background-color: #FAFAFA" value="cyan">Cyan</option>
                <option style="color:blue; background-color: #FAFAFA" value="blue">Mavi</option>
                <option style="color:darkblue; background-color: #FAFAFA" value="darkblue">Koyu mavi</option>
                <option style="color:indigo; background-color: #FAFAFA" value="indigo">Indigo</option>
                <option style="color:violet; background-color: #FAFAFA" value="violet">Leylak</option>
                <option style="color:white; background-color: #FAFAFA" value="white">Beyaz</option>
                <option style="color:black; background-color: #FAFAFA" value="black">Siyah</option>
            </select>
        </div>

    </div>


</div>