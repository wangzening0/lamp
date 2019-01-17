@extends('layout.admins')


@section('title', $title)

<style>
    #dvs{
        width: 400px;
        height: 40px;
        /*border:solid 1px red;*/
        color:#e43f3b;
        line-height:40px;
        text-align:center;
        font-size:20px;
        border-radius:20px;
        box-shadow: 6px 8px 20px rgba(45,45,45,.15);
        }
</style>

@section('content')
<h2>现在的北京时间是：</h2>
<div id="dvs"></div>
<script>
        
        
        `星期一：Monday（Mon.）
        星期二：Tuesday（Tue.）
        星期三：Wednesday（Wed.）
        星期四：Thursday（Thu.）
        星期五：Friday（Fri.）
        星期六：Saturday（Sat.）
        星期日：Sunday（Sun.）
        
    
        一月     Jan.     January

        二月    Feb.      February

        三月    Mar.     March

        四月    Apr.     April

        五月    May.     May

        六月    Jun.      June

        七月    Jul.       July

        八月    Aug.     August

        九月    Sept.     September

        十月     Oct.       October

        十一月   Nov.       November

        十二月   Dec.      December
    `

    var dvs = document.getElementById('dvs');
    // 定时器

    setInterval(function(){

        //年 月 日 时 分 秒 星期
        //2018-12-8 10:00:23  星期六
        var d = new Date();

        //获取年  2018
        var y = d.getFullYear();

        //获取月
        var m = d.getMonth()+1;

        //获取日
        var t = d.getDate();

        //获取时
        var h = d.getHours();
        if(h < 10){

            h = '0'+h;
        }

        //获取分
        var i = d.getMinutes();
        if(i<10){

            i = '0'+i;
        }

        //获取秒
        var s = d.getSeconds();
        if(s<10){

            s = '0'+s;
        }

        //获取星期
        var w = d.getDay();

        switch(w){
            case 1:
                w = '星期一';
            break;
            case 2:
                w = '星期二';
            break;
            case 3:
                w = '星期三';
            break;
            case 4:
                w = '星期四';
            break;
            case 5:
                w = '星期五';
            break;
            case 6:
                w = '星期六';
            break;
            case 0:
                w = '星期日';
            break;
        }

        var str = y+'-'+m+'-'+t+' '+h+':'+i+':'+s+' '+w;

        //往标签中间添加文本
        dvs.innerHTML = str;

    },1000)

    dvs.onmouseover = function(){

        this.style.background= '#e43f3b';
        this.style.color = 'white';
    }

    dvs.onmouseout = function(){

        this.style.background= '';
        this.style.color = '';
    }

    </script>
@endsection