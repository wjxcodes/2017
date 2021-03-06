<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="msapplication-tap-highlight" content="no">
<!-- 适应移动端end -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- 删除苹果默认的工具栏和菜单栏 -->
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<!-- 设置苹果工具栏颜色 -->
<meta name="format-detection" content="telphone=no, email=no" />
<!-- 忽略页面中的数字识别为电话，忽略email识别 -->
<!-- 启用360浏览器的极速模式(webkit) -->
<meta name="renderer" content="webkit">
<!-- 避免IE使用兼容模式 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
<meta name="HandheldFriendly" content="true">
<!-- 微软的老式浏览器 -->
<title>借款续期</title><link href="/free/Public/mobile/css/xuqi.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/free/Public/mobile/js/jq-5.js"></script>
<script type="text/javascript" src="/free/Public/mobile/js/jquery-1.11.1.js"></script>
</head>

<body>
<div class="ps">
<div>续期</div>
</div>
<div class="kong"></div>
<form action="/free/mobile.php/home/repay/to_pay" method="post" enctype="multipart/form-data">
<div class="xl">
  <ul class="xin">
    <li class="z1">续期天数：</li>
    <li class="z2">
      <select name="time" class="xla_k" id="select_i" style=" background: none;">
              <option value="7">7天</option>
      </select>
    </li>
  </ul>
</div>

<script type="text/javascript">
  $("#select_i").change(function(){
    var time=$("#select_i").val();
    $.ajax({
      url:'/free/mobile.php/home/repay/ajax',
      type:'POST',
      dataType:'json',
      data:{time:time},
      success:function(data){
        $("#y").html(data['time']);
        $("#x").html(data['new_time']);
        if(data['binmoney'] > 0){
          $("#bq").html(data['binmoney']+"元");
        }
        $("#fw").html(data['renewal_fw']+"元");
        $("#xx").html(data['all']+"元");
      }
    });
  });
</script>

<div class="qing"></div>
<input type="hidden" value="<?php echo ($huankuanriqi); ?>" id="yuan">
<div class="sfz">
  <ul class="xin">
    <li class="z1">原还款日：</li>
    <li class="z2" id="y">
      <?php echo (date("Y-m-d",$overdue_show['time'])); ?>
      </li>
  </ul>
</div>
<div class="qing"></div>

<div class="sfz"   id="x1">
  <ul class="xin">
    <li class="z1">续期还款日：</li>
    <li class="z2" id="x">
      <?php echo (date("Y-m-d",$is_lpay)); ?>
      </li>
  </ul>
</div>
<?php if(($overdue_show['day'] > 0) AND ($overdue_show['day'] < 5)): ?><div class="qing"></div>
      <div class="sfz">
      <ul class="xin">
        <li class="z1">逾期费用：</li>
          <li class="z2" id="bq">
          <?php echo ($binmoney); ?>元
          </li>
      </ul>
</div><?php endif; ?>

<div class="qing"></div>
<div class="sfz">
  <ul class="xin">
    <li class="z1">服务费用：</li>
    <li class="z2" id="fw">
      <?php echo ($fwmoney); ?>元
      </li>
  </ul>
</div>

<div class="qing"></div>
<div class="sfz">
  <ul class="xin">
    <li class="z1">续期手续费：</li>
    <li class="z2" id="sx">
      <?php echo ($sxmoney); ?>元
      </li>
  </ul>
</div>

<div class="qing"></div>
<div class="sfz">
  <ul class="xin">
    <li class="z1">续期总费用：</li>
    <li class="z2" id="xx">
      <?php echo ($renewal_all); ?>元
      </li>
  </ul>
</div>
<div class="qing"></div>
<div class="qing"></div>
<div class="bc">
<input  type="submit" value="确定" >
</form>
</div>
<p>&nbsp;</p>
</body>
</html>