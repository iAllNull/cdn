$(window).on("load",function(){setTimeout(function(){$(".page-loader").fadeOut()},500)});$(function(){$("footer").html("<p>© 2019-2020 <a href=\"/\">PVURL</a> All right reserved. </p>")});function dwzsc(){var dwz=$("input[name='dwz']").val();if(dwz==""){layer.tips('请输入网址再生成哦~','.dwztis',{tips:[1,'#009688']})}else{$.ajax({type:"GET",url:"https://keddy.vip/api.php",data:{"url":dwz.replace('','')},dataType:"json",beforeSend:function(){layer.msg('生成中~~~',{icon:16,shade:0.01,time:5000})},success:function(data){if(data.dwz==false){layer.closeAll();layer.tips('请检查输入网址是否正确~','.dwztis',{tips:[1,'#009688']})}else{layer.alert(data.dwz,{skin:'layui-layer-molv',closeBtn:1,anim:1,btn:['复制'],icon:6,yes:function(){var clipboard=new ClipboardJS('.layui-layer-btn0',{text:function(){return data.dwz}});clipboard.on('success',function(e){layer.msg('复制成功!')});clipboard.on('error',function(e){layer.msg('复制成功!')})},})}},error:function(){layer.msg('生成失败！请重试。',function(){})}})}}