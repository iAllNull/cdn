<?php 
include '../../../../Config.php';
?>
<div class="layui-card-header">版本信息</div>
<div class="layui-card-body layui-text layadmin-about">
<script type="text/html" template>
<p>当前版本：<?php echo $ver_config['versions']; ?></p>
<p>基于框架：<?php echo $ver_config['LayuiVer']; ?></p>
</script>
<div class="layui-btn-container">
<a href="http://auth.phpth.cn/" target="_blank" class="layui-btn layui-btn-danger">授权系统</a>
<a href="http://jiami.phpth.cn/" target="_blank" class="layui-btn">陌屿加密</a>
</div>
</div>

<div class="layui-card-header">关于本站</div>
<div class="layui-card-body layui-text layadmin-about">
  
<blockquote class="layui-elem-quote" style="border: none;">
<?php echo $conf_config['site']; ?>，免费提供API接口服务,本站不收取任何费用,该API接口来源于网上收集如有侵权联系站长删除。
</blockquote>
<blockquote class="layui-elem-quote">站长 QQ：<?php echo $conf_config['kfqq']; ?><br/>官方Q群：1075035838</blockquote>
<center>Copyright © 2015-2020. <a href="http://www.beian.miit.gov.cn/">陌屿网</a> Powered by MoYu. </br> 
<img src="./assets/img/beian.jpg"></a> ICP号：<a href="http://www.beian.miit.gov.cn/">渝ICP备19013582号</a></center>
</div>