/*
	[Destoon B2B System] Copyright (c) 2008-2013 Destoon.COM
	This is NOT a freeware, use is subject to license.txt
*/
var area_id;
function load_area1(areaid, id) {
	area_id = id; area_areaid[id] = areaid;
	var s=$("#load_area_1").find("option:selected").text();
    Dd("Xxdz").value=s;
	makeRequest('action=area1&area_title='+area_title[id]+'&area_extend='+area_extend[id]+'&area_id='+area_id+'&areaid='+areaid, AJPath, 'into_area');
}
function into_area() {   
	if(xmlHttp.readyState==4 && xmlHttp.status==200) {
		Dd('areaid_'+area_id).value = area_areaid[area_id];
		if(xmlHttp.responseText) Dd('load_area_'+area_id).innerHTML = xmlHttp.responseText;
	}
}