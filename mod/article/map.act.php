<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
<html>  
 <head>  
  <title> 地图</title>  
  <meta name="Generator" content="EditPlus">  
  <meta name="Author" content="">  
  <meta name="Keywords" content="">  
  <meta name="Description" content="">  
 <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=170493a069b08faaba1a3ac49774fcc9"></script>
  <script type="text/javascript">  
        var map;  
        function initialize(){  
            map=new BMap.Map("container");  
            var point=new BMap.Point(113.970253,22.70345);  
            map.centerAndZoom(point,16);  
            map.addControl(new BMap.NavigationControl());  
            map.addControl(new BMap.ScaleControl());  
            map.addControl(new BMap.OverviewMapControl());  
            map.addControl(new BMap.MapTypeControl());  
            //创建标注  
            //var marker=new BMap.Marker(point);  
            //map.addOverlay(marker);  
            var bounds=map.getBounds();  
            var lngSpan=bounds.maxX-bounds.minX;  
            var latSpan=bounds.maxY-bounds.minY;  
            var gpsdatas = beaches.split("||");  
         
            for(var i=0;i<gpsdatas.length;i++){  
                var beach = gpsdatas[i].split("`");  
                var point=new BMap.Point(beach[1],beach[0]);  
                addMarker(point,i);  
            }  
        }  
	
      //  var beaches = "22.541693`114.080229||22.541693`114.080229||22.546529`114.041519||22.542327`114.106278"; 

	 var beaches = "22.70345`113.970253"; 
        var opts={  
            width:280,//信息窗口宽度height:100,//信息窗口高度  
            title:"<div style='font-size:12px'>电话：<?=$webset['tel']?><br>地址:<?=$webset['address']?></div>"//信息窗口标题  
        }  
        //编写自定义函数，创建标注  
        function addMarker(point,index){  
            //创建图标对象  
            //var myIcon=new BMap.Icon("girl.gif",new BMap.Size(50,68),{  
            //指定定位位置。  
            //当标注显示在地图上时，其所指向的地理位置距离图标左上  
            //角各偏移10像素和25像素。您可以看到在本例中该位置即是  
            //图标中央下端的尖角位置。  
            //offset:new BMap.Size(10,25),  
              //设置图片偏移。  
              //当您需要从一幅较大的图片中截取某部分作为标注图标时，您  
              //需要指定大图的偏移位置，此做法与css sprites技术类似。  
             // imageOffset:new BMap.Size(0,0-index*25)//设置图片偏移  
            //});  
            //创建标注对象并添加到地图,{icon:myIcon}  
              
            var infoWindow=new BMap.InfoWindow("",opts);//创建信息窗口对象  
            var marker=new BMap.Marker(point);  
                map.addOverlay(marker);  
             //  marker.addEventListener("click",function(){  
                   map.openInfoWindow(infoWindow,point);//打开信息窗口  
           // });  
        }  
</script>  
 </head>  
 <body onload="initialize()">  
  <div id="container"style="width:100%;height:400px;"></div>  
 </body>  
</html>  