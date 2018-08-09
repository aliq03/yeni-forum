<?php
header("Access-Control-Allow-Origin: *");
?>

<button class="trash">
  <span class="lid"></span>
  <span class="can"></span>
</button>
<style>
.trash {
    width: 30px;
    height: 22px;
    margin: -5px -39px;
    opacity: 0.8;
    vertical-align: middle;
    cursor: pointer;
    -webkit-transition: opacity 200ms;
    position: absolute;
    -webkit-appearance: none;
    background: none;
    border: none;
    cursor: pointer;
    display: inline-block;
    outline: none;
    padding: 0;
}

.lid {
    -webkit-transform-origin: -7% 100%;
    -webkit-transition: -webkit-transform 150ms;
    height: 8px;
    width: 20px;
    background: url('http://f.cl.ly/items/0R1Y2w3H2t033u1i132E/trash.png') 0 0 no-repeat;
    background-size: 16px;
    left: 8px;
    position: absolute;
    right: 8px;
    top: 2px;
}

.trash:hover .lid {
-webkit-transform: rotate(-45deg);
-webkit-transition: -webkit-transform 250ms;
}

.can {
    height: 17px;
    margin-left: 1px;
    margin-right: 2px;
    margin-top: 4px;
    width: 18px;
    background: url('http://f.cl.ly/items/0R1Y2w3H2t033u1i132E/trash.png') -1px -5px no-repeat;
    background-size: 16px;
    left: 8px;
    position: absolute;
    right: 8px;
    top: 3px;
}
</style>