<!DOCTYPE html>
<html style="height: 100%">
   <head>
       <meta charset="utf-8">
   </head>
   <body style="height: 100%; margin: 0">
       <div id="container" style="height: 100%"></div>
       <link rel="stylesheet" type="text/css" href="css/index.css">
       <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
       <script type="text/javascript" src="js/echarts-all-3.js"></script>
       <script type="text/javascript" src="js/dataTool.min.js"></script>
       <script type="text/javascript" src="js/china.js"></script>
       <script type="text/javascript" src="js/world.js"></script>
       <script type="text/javascript" src="js/api.js"></script>
       <script type="text/javascript" src="js/bmap.min.js"></script>
       <script type="text/javascript" src="js/index.js"></script>
       <script type="text/javascript">
var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};
option = null;

var Seventeen = [
    [{name:'青岛(17条主线路)'}, {name:'合肥',value:95}],
    [{name:'青岛(17条主线路)'}, {name:'沈阳',value:90}],
    [{name:'青岛(17条主线路)'}, {name:'大连',value:80}],
    [{name:'青岛(17条主线路)'}, {name:'佛山',value:60}],
    [{name:'青岛(17条主线路)'}, {name:'胶州',value:40}],
    [{name:'青岛(17条主线路)'}, {name:'重庆',value:20}],
	[{name:'青岛(17条主线路)'}, {name:'黄岛',value:20}],
	[{name:'青岛(17条主线路)'}, {name:'遵义',value:20}],
	[{name:'青岛(17条主线路)'}, {name:'郑州',value:20}],
	[{name:'青岛(17条主线路)'}, {name:'顺德',value:20}],
	[{name:'青岛(17条主线路)'}, {name:'武汉',value:20}],
	[{name:'青岛(17条主线路)'}, {name:'天津',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'乌鲁木齐',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'济南',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'唐山',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'杭州',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'北京',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'西安',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'厦门',value:30}], 
	[{name:'青岛(17条主线路)'}, {name:'襄樊',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'无锡',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'西宁',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'广州',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'烟台',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'呼和浩特',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'福州',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'哈尔滨',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'胶南',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'银川',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'长春',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'深圳',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'昆明',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'贵阳',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'兰州',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'南昌',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'锦州',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'宁波',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'上海',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'南宁',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'南京',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'海口',value:30}],
	[{name:'青岛(17条主线路)'}, {name:'成都',value:30}],
	

];
<?php	
include(conn/conn.php);
		   
echo "var red =[
	[{name:'青岛(17条主线路)'},{name:'合肥',value:95}]
];"
?>



var planePath = 'path://M1705.06,1318.313v-89.254l-319.9-221.799l0.073-208.063c0.521-84.662-26.629-121.796-63.961-121.491c-37.332-0.305-64.482,36.829-63.961,121.491l0.073,208.063l-319.9,221.799v89.254l330.343-157.288l12.238,241.308l-134.449,92.931l0.531,42.034l175.125-42.917l175.125,42.917l0.531-42.034l-134.449-92.931l12.238-241.308L1705.06,1318.313z';

var convertData = function (data) {
    var res = [];
    for (var i = 0; i < data.length; i++) {
        var dataItem = data[i];
        var fromCoord = geoCoordMap[dataItem[0].name];
		
        var toCoord = geoCoordMap[dataItem[1].name];
        if (fromCoord && toCoord) {
            res.push({
                fromName: dataItem[0].name,
                toName: dataItem[1].name,
                coords: [fromCoord, toCoord],
			
				
				
            });
        }
    }
    return res;
};

var color = ['#46bee9', 'red', '#46bee9'];
var series = [];
[['青岛(17条主线路)', Seventeen],['red',red]].forEach(function (item, i) {
    series.push({
        name: item[0],
        type: 'lines',
        zlevel: 1,
		//polyline:true,
        effect: {
            show: true,
            period: 6,
            trailLength: 0.7,
            color: '#fff',
            symbolSize: 3
        },
        lineStyle: {
            normal: {
                color: color[i],
                width: 0,
                curveness: 0
            }
        },
        data: convertData(item[1]),

    },
    {
        name: item[0],
        type: 'lines',
        zlevel: 2,
        effect: {
            show: true,
            period: 6,
            trailLength: 0,
            symbol:'circle',
			//symbol: planePath,
            symbolSize:10,
        },
		lineStyle: {
            normal: {
                color:color[i],
                width: 0.2,
                opacity: 0.4,
                curveness: 0
            }
        },
        
		data: convertData(item[1]),
		
    },
    {
       name: item[0],
        type: 'effectScatter',
        coordinateSystem: 'geo',
        zlevel: 2,
        rippleEffect: {
            brushType: 'stroke'
        },
        label: {
            normal: {
                show: true,
                position: 'right',
                formatter: '{b}'
            }
        },
		/*
        symbolSize: function (val) {
            return val[2] / 8;
        },*/
        itemStyle: {
            normal: {
                color: color[i],
            },
        },
        data: item[1].map(function (dataItem) {
            return {
                name: dataItem[1].name,
                value: geoCoordMap[dataItem[1].name].concat([dataItem[1].value])
            };
        })
    });
});


option = {
    backgroundColor: '#404a59',
    title : {
        text: '大屏展示',
        subtext: 'Haier',
        left: 'center',
        textStyle : {
            color: '#fff'
        }
    },
    tooltip : {
        trigger: 'item'
    },
    /*legend: {
        orient: 'vertical',
        top: 'bottom',
        left: 'right',
        data:['青岛(17条主线路)'],
        textStyle: {
            color: '#fff'
        },
        selectedMode: 'single'
    },*/
    geo: {
        map: 'china',
        label: {
            emphasis: {
                show: true,
				textStyle:{
					color:'#000'
				}
            }
        },
		
        roam: true,
        itemStyle: {
            normal: {
                areaColor: '#323c48',
                borderColor: '#404a59'
            },
            emphasis: {
                areaColor: '#2a333d'
            }
        },
		regions:[{
			name:'沈阳',
			selected:true,
			itemStyle:{
				normal:{
					color:'red'
				}
			}
		}],
    },
    series:series
};
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
/*myChart.on('click',function(option){
		/*$("#container").load("tooltip.php",function(response,status,xhr){
			
		});
	  window.location.href="http://10.135.6.121/zabbix/report2.php?config=0&filter_timesince=20161225000000&filter_timetill=20161226000000&filter_groupid=9&filter_hostid=10123&filter_timesince_year=2016&filter_timesince_month=12&filter_timesince_day=25&filter_timesince_hour=00&filter_timesince_minute=00&filter_timetill_year=2016&filter_timetill_month=12&filter_timetill_day=26&filter_timetill_hour=00&filter_timetill_minute=00&filter_set=过滤";
})*/
       </script>


   </body>
</html>