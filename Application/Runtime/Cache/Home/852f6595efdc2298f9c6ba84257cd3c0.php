<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>主页</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/free/Public/css/page.css?v=3.3.6" rel="stylesheet">
    <link href="/free/Public/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/free/Public/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/free/Public/css/animate.min.css" rel="stylesheet">
    <link href="/free/Public/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="/free/Public/layui/src/css/layui.css">
    <script src="/free/Public/layui/src/layui.js"></script>
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
            <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="/free/Public/img/free.jpg" /></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">蜻蜓科技</strong></span>
                                <span class="text-muted text-xs block"><?php  echo session('aname');?></span>
                                </span>
                        </a>
                    </div>
                    <div class="logo-element">蜻蜓
                    </div>
                </li>
                
                <?php if(is_array($base_auth)): $i = 0; $__LIST__ = $base_auth;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; switch($vo): case "Manager": ?><li>
                                <a href="<?php echo U("Home/$vo/index");?>">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">管理员</span>
                                </a>
                            </li><?php break;?>

                        <?php case "Register": ?><li>
                                <a href="<?php echo U("Home/$vo/index");?>">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">注册用户</span>
                                </a>
                            </li><?php break;?>

                        <?php case "Infoaudit": ?><li>
                                <a href="<?php echo U("Home/$vo/index");?>">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">用户审核</span>
                                </a>
                            </li><?php break;?>

                        <?php case "Credit": ?><li>
                                <a href="<?php echo U("Home/$vo/credit");?>">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">芝麻信息</span>
                                </a>
                            </li><?php break;?>

                        <?php case "Examine": ?><li>
                                <a href="<?php echo U("Home/$vo/index");?>">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">打款审核</span>
                                </a>
                            </li><?php break;?>

                        <?php case "Pending": ?><li>
                                <a href="<?php echo U("Home/$vo/index");?>">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">待放款</span>
                                </a>
                            </li><?php break;?>

                        <?php case "Already": ?><li>
                                <a href="<?php echo U("Home/$vo/index");?>">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">已放款</span>
                                </a>
                            </li><?php break;?>
                        
                        <?php case "Search": ?><li>
                                <a href="<?php echo U("Home/$vo/index");?>">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">用户搜索</span>
                                </a>
                            </li><?php break;?>

                        <?php case "Renewal": ?><li>
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">续期还款</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Renewal/renewal');?>" data-index="0">快钱续期</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Renewal/index');?>" data-index="0">支付宝续期</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Renewal/ll_pay');?>" data-index="0">连连续期</a>
                                    </li>
                                </ul>
                            </li><?php break;?>
                        
                        


                        <?php case "Repayment": ?><li>
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">还款记录</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Repayment/refund');?>" data-index="0">快钱还款</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Repayment/zfb');?>" data-index="0">支付宝还款</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Repayment/ll_pay');?>" data-index="0">连连还款</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Repayment/countnum');?>" data-index="0">催收回款</a>
                                    </li>
                                </ul>
                            </li><?php break;?>

                        <?php case "Pre": ?><li>
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">逾期未还</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Pre/index');?>" data-index="0">预催收</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/rong/index');?>" data-index="0">容时期</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Overdue/day_To_day',array('day1'=>4,'day2'=>10000000));?>" data-index="0">逾期4天以上</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Overdue/blackList');?>" data-index="0">添加黑名单</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Overdue/area');?>" data-index="0">地区信息</a>
                                    </li>
                                </ul>
                            </li><?php break;?>


                        <?php case "Withhold": ?><li>
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">连连代扣</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Withhold/index');?>" data-index="0">预约代扣</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Withhold/implement');?>" data-index="0">执行代扣</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Withhold/querySignHtml');?>" data-index="0">绑卡查询</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">连连代付</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Withhold/viwedf');?>" data-index="0">执行代付</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U('Home/Withhold/queryviwedf');?>" data-index="0">代付查询</a>
                                    </li>
                                </ul>
                            </li><?php break;?>


                        <?php case "Statis": ?><li>
                                <a href="<?php echo U("Home/$vo/index");?>"><i class="fa fa-picture-o"></i> <span class="nav-label">统计信息</span></a>
                            </li><?php break;?>

                        <?php case "Mention": ?><li>
                                <a href="<?php echo U("Home/$vo/index");?>"><i class="fa fa-picture-o"></i> <span class="nav-label">配置中心</span></a>
                            </li><?php break;?>

                        <?php case "Interest": ?><li>
                                <a href="<?php echo U("Home/$vo/index");?>"><i class="fa fa-picture-o"></i> <span class="nav-label">降息统计</span></a>
                            </li><?php break;?>
                        <?php case "Bad": ?><li>
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                    <span class="nav-label">催收部</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U("Home/$vo/group");?>" data-index="0">我的任务</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U("Home/$vo/loanrecord");?>" data-index="0">放款记录</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="<?php echo U("Home/$vo/publics");?>" data-index="0">公共区域</a>
                                    </li>
                                </ul>
                            </li><?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>
            

            </ul>
        </div>
    </nav>
        <!--左侧导航结束-->
        </html>
  
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                </nav>
            </div>
            <div class="row content-tabs">
                <a href="<?php echo U('Home/index/logout');?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
               <div class="col-sm-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title" id="sumtext">
                            <h5>已放款:<span style='color: red'></span><?php echo ($sum["ren"]); ?>人</h5>
                            <h5 style='margin-left:50px;'>放款总和:<span style='color: red;'></span><?php echo ($sum['sum_money']); ?>元</h5>
                            <h5 style='margin-left:50px;'>到期应还总和:<span style='color: red;'></span><?php echo ($sum['shouxufei']+$sum['sum_money']); ?>元</h5>
                        </div>
                        <div class="ibox-title">
                            <form action="<?php echo U('Home/Bad/search');?>" method="post" style="float: left; margin-right: 0px;">
                                <input type="text" name="name" placeholder="请输入手机号或姓名">
                                <input type="hidden" name="code" value="search">
                                <input type="submit" value="提交">
                            </form>

                            <form action="<?php echo U('Home/Bad/expire');?>" method="post" style="float: left; margin-right:0px;" >
                                <input placeholder="开始时间" required type="text" id="layui-laydate-input" onclick="layui.laydate({elem: this})" class="layui-input" name="start">
                                <input placeholder="结束时间" required type="text" id="layui-laydate-input" onclick="layui.laydate({elem: this})" class="layui-input" name="end">
                                <input type="submit"  value="到期时间查找">
                            </form>
                             <form action="<?php echo U('Home/Bad/search');?>" method="post" style="float: right; margin-right:0px;" >
                                <input placeholder="开始时间" required type="text" id="layui-laydate-input" onclick="layui.laydate({elem: this})" class="layui-input" name="start">
                                <input placeholder="结束时间" required type="text" id="layui-laydate-input" onclick="layui.laydate({elem: this})" class="layui-input" name="end">
                                <input type="hidden" name="code" value="lending">
                                <input type="submit"  value="放款时间查找">
                            </form>

                <!--             <form action="<?php echo U('Home/Bad/statistical');?>" method="post" style="float: left; margin-right:0px;" >
                                <input placeholder="开始时间" required type="text" id="layui-laydate-input" onclick="layui.laydate({elem: this})" class="layui-input" name="start">
                                <input placeholder="结束时间" required type="text" id="layui-laydate-input" onclick="layui.laydate({elem: this})" class="layui-input" name="end">
                                <input type="submit"  value="生成记录">
                            </form> -->
                            </div>
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="8">
                                <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>姓名</th>
                                    <th>身份证</th>
                                    <th>手机号</th>
                                    <th>放款时间</th>
                                    <th>系统时间</th>
                                    <th>放款额度</th>
                                    <th>借款期限</th>
                                    <th>到期时间</th>
                                    <th>是否续期</th>
                                    <th>到期应还款</th>
                                    <th>应还款</th>
                                    <th>订单编号</th>
                                    <th>借款次数</th>
                                    <th>芝麻分</th>
                                    <th>征信</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($loan_data)): foreach($loan_data as $k=>$v): ?><tr>
                                    <td><?php echo ($k+1); ?></td>
                                    <td><?php echo ($v['u_name']); ?></td>
                                    <td><?php echo ($v['identity']); ?></td>
                                    <td><?php echo ($v['user_name']); ?></td>
                                    <td><?php echo (date("Y-m-d H:i",$v['is_pay'])); ?></td>
                                    <td>
                                        <?php if(($v['is_pays']) == null): ?>小暑之前
                                        <?php else: ?>
                                            <?php echo (date("Y-m-d H:i",$v['is_pays'])); endif; ?>
                                    </td>
                                    <td><?php echo ($v['loan_amount']); ?>元 </td>
                                    <td><?php echo ($v['loan_time']); ?>天</td>
                                    <td><?php echo (date("Y-m-d H:i",$v['be_time'])); ?></td>
                                    <td>
                                        <?php if(($v['renewal_days'] == 0)): ?>未续期
                                        <?php else: ?>
                                            <?php echo ($v['renewal_days']); ?>天<?php endif; ?>
                                    </td>
                                    <td><?php echo ($v['loan_amount']+$v['loan_amount']*$v['interest']-$v['cuts_interest']); ?></td>
                                    <td>+<span style="color:red"><?php echo ($v['overdue_money']); ?></span>=<?php echo ($v['loan_amount']+$v['loan_amount']*$v['interest']+$v['overdue_money']-$v['cuts_interest']); ?></td>
                                    <td><?php echo ($v['loan_order']); ?></td>
                                    <td><?php echo ($v['loan_num']); ?></td>
                                    <td><?php echo ($v['zm_score']); ?></td>
                                    <td>
                                        <a href="<?php echo U('Home/Survey/index',array('id'=>$v['user_name'],'open_id'=>$v['open_id']));?>"><button>征信</button></a> 
                                        <a href="<?php echo U('Home/apix/tel',array('id'=>$v['user_name']));?>"><button>通讯</button></a> 
                                        <a href="<?php echo U('Home/apix/taobao',array('id'=>$v['user_name']));?>"><button>淘宝</button></a> 
                                    </td>
                                </tr><?php endforeach; endif; ?>
                                </tbody>
                            </table>
                            <div class="pagination"><?php echo ($page); ?></div>
                        </div>
                    </div>
                </div>
        </div>
        <!--右侧部分结束-->
    </div>
    <script src="/free/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/free/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/free/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/free/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/free/Public/js/plugins/layer/layer.min.js"></script>
    <script src="/free/Public/js/hplus.min.js?v=4.1.0"></script>
    <script src="/free/Public/js/plugins/pace/pace.min.js"></script>
</body>
<script>
layui.use('laydate', function(){
  var laydate = layui.laydate
});
</script>
</html>