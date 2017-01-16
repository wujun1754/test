<?php
	
	function Seventeen(){
		require_once("conn/conn.php");
		//乌鲁木齐
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114149'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=1){
			echo	"[{name:'青岛(17条主线路)'},{name:'乌鲁木齐',value:95}],";
		};
		//哈尔滨
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114215'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=1){
			echo	"[{name:'青岛(17条主线路)'},{name:'哈尔滨',value:95}],";
		};
		//长春
		
	}
	
	function red(){
		require_once("conn/conn.php");
		//乌鲁木齐
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114149'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'乌鲁木齐',value:95}],";
		};
		//哈尔滨
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114215'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'哈尔滨',value:95}],";
		};
		//长春
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114476'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'长春',value:95}],";
		};
		//沈阳
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114317'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'沈阳',value:95}],";
		};
		//锦州
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114506'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'锦州',value:95}],";
		};
		//呼和浩特
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114194'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'呼和浩特',value:95}],";
		};
		//北京
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114194'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'呼和浩特',value:95}],";
		};
		//天津
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114269'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'天津',value:95}],";
		};
		//唐山
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114227'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'唐山',value:95}],";
		};
		//大连
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114254'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'大连',value:95}],";
		};
		//银川
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114500'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'银川',value:95}],";
		};
		//烟台
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114395'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'烟台',value:95}],";
		};
		//胶州
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114440'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'胶州',value:95}],";
		};
		//济南
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114323'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'济南',value:95}],";
		};
		//胶南
		$sql="SELECT value FROM history_uint h WHERE h.itemid='23777'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'胶南',value:95}],";
		};
		//黄岛
		$sql="SELECT value FROM history_uint h WHERE h.itemid='24017'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'黄岛',value:95}],";
		};
		//郑州
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114422'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'郑州',value:95}],";
		};
		//西安
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114458'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'西安',value:95}],";
		};
		//合肥
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114209'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'合肥',value:95}],";
		};
		//南京
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114125'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'南京',value:95}],";
		};
		//襄樊
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114452'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'襄樊',value:95}],";
		};
		//无锡
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114278'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'无锡',value:95}],";
		};
		//上海
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114143'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'上海',value:95}],";
		};
		//成都
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114248'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'成都',value:95}],";
		};
		//重庆
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114485'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'重庆',value:95}],";
		};
		//武汉
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114338'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'武汉',value:95}],";
		};
		//杭州
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114344'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'杭州',value:95}],";
		};
		//宁波
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114263'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'宁波',value:95}],";
		};
		//南昌
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114221'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'南昌',value:95}],";
		};
		//遵义
		$sql="SELECT value FROM history_uint h WHERE h.itemid='23877'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'遵义',value:95}],";
		};
		//贵阳
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114446'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'贵阳',value:95}],";
		};
		//福州
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114359'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'福州',value:95}],";
		};
		//厦门
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114233'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'厦门',value:95}],";
		};
		//昆明
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114311'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'昆明',value:95}],";
		};
		//南宁
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114131'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'南宁',value:95}],";
		};
		//海口
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114365'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'海口',value:95}],";
		};
		//顺德
		$sql="SELECT value FROM history_uint h WHERE h.itemid='23857'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'顺德',value:95}],";
		};
		//佛山
		$sql="SELECT value FROM history_uint h WHERE h.itemid='23997'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'佛山',value:95}],";
		};
		//广州
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114239'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'广州',value:95}],";
		};
		//深圳
		$sql="SELECT value FROM history_uint h WHERE h.itemid='114389'  ORDER BY h.clock DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		if($row[0]=0){
			echo	"[{name:'青岛(17条主线路)'},{name:'深圳',value:95}],";
		};
	}
?>