// ��Ʊ�������� UPDATE DAVID 2015-04
/*  ���졢����ʱʱ�� �����ֲɼ���ַ����ֹ360��վʧЧ���ɽ����滻
	{
		title:'����ʱʱ��',
		source:'������',
		name:'cqssc',
		enable:true,
		timer:'cqssc',

		option:{
			host:"www.cailele.com",
			timeout:30000,
			path: '/static/ssc/newlyopenlist.xml',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "
			}
		},
		parse:function(str){
			try{
				str=str.substr(0,200);
				var reg=/<row expect="(\d+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/; 
				//<row expect="20130720017" opencode="4,9,1,2,9" opentime="2013-07-20 01:25:30"/>
				var m;
	
				if(m=str.match(reg)){
					return {
						type:1,
						time:m[3],
						number:m[1].replace(/^(\d{8})(\d{3})$/, '$1-$2'),
						data:m[2]
					};
				}					
				
			}catch(err){
				throw('����ʱʱ�ʽ������ݲ���ȷ');
			}
		}
	},
	{
		title:'����ʱʱ��',
		source:'������',
		name:'jxssc',
		enable:true,
		timer:'jxssc',

		option:{
			host:"www.cailele.com",
			timeout:30000,
			path: '/static/jxssc/newlyopenlist.xml',
			headers:{
				"User-Agent": "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; Sleipnir/2.9.8)"
			}
		},
		
		parse:function(str){
			try{
				//return getFromShishicaiWeb(str,3);
				str=str.substr(0,200);
				var reg=/<row expect="(\d+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/; 
				//<row expect="20130719084" opencode="3,0,6,3,6" opentime="2013-07-19 23:12:25"/>
				var m;
	
				if(m=str.match(reg)){
					return {
						type:3,
						time:m[3],
						number:m[1].replace(/^(\d{8})(\d{3})$/, '$1-$2'),
						data:m[2]
					};
				}	
			}catch(err){
				throw('����ʱʱ�ʲ����ֽ������ݲ���ȷ');
			}
		}
},*/
exports.cp=[
	
	{
		title:'����ʱʱ��',
		source:'360��Ʊ��',
		name:'cqssc',
		enable:true,
		timer:'cqssc', 

		option:{
			host:"cp.360.cn",
			timeout:50000,
			path: '/ssccq/',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
		parse:function(str){
			try{
				return getFrom360CP(str,1);
			}catch(err){
				throw('����ʱʱ�ʽ������ݲ���ȷ');
			}
		}
	},
	{
		title:'����ʱʱ��',
		source:'360��Ʊ��',
		name:'jxssc',
		enable:false,
		timer:'jxssc',
 

		option:{
			host:"cp.360.cn",
			timeout:50000,
			path: '/sscjx/',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
		parse:function(str){
			try{
				return getFrom360CP(str,3);
			}catch(err){
				throw('����ʱʱ��360��Ʊ���������ݲ���ȷ');
			}
		}
	},
	{
		title:'�½�ʱʱ��',
		source:'�½�ʱʱ�ʹ���',
		name:'xjssc',
		enable:true,
		timer:'xjssc',

		option:{
			host:"www.xjflcp.com",
			timeout:50000,
			path: '/game/sscIndex',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
		
		parse:function(str){
			return getFromXJFLCPWeb(str,12);
		}
	},
	{
		title:'����3D',
		source:'500wan',
		name:'fc3d',
		enable:true,
		timer:'fc3d',

		option:{
			host:"www.500wan.com",
			timeout:50000,
			path: '/static/info/kaijiang/xml/sd/list10.xml',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
		
		parse:function(str){
			try{
				str=str.substr(0,300);
				var m;
				var reg=/<row expect="(\d+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)" trycode="[\d\,]*?" tryinfo="" \/>/;
                                        
				if(m=str.match(reg)){
					return {
						type:9,
						time:m[3],
						number:m[1],
						data:m[2]
					};
				}
			}catch(err){
				throw('����3D�������ݲ���ȷ');
			}
		}
	},
	{
		title:'����3',
		source:'500wan',
		name:'pai3',
		enable:true,
		timer:'pai3',

		option:{
			host:"www.500wan.com",
			timeout:50000,
			path: '/static/info/kaijiang/xml/pls/list10.xml',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
		
		parse:function(str){
			try{
				str=str.substr(0,300);
				var m;	 
				var reg=/<row expect="(\d+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;
				if(m=str.match(reg)){
					return {
						type:10,
						time:m[3],
						number:20+m[1],
						data:m[2]
					};
				}
			}catch(err){
				throw('��3�������ݲ���ȷ');
			}
		}
	},
	{
		title:'�㶫11ѡ5',
		source:'360��Ʊ��',
		name:'gd11x5',
		enable:true,
		timer:'gd11x5',

 

		option:{
			host:"cp.360.cn",
			timeout:50000,
			path: '/gd11/',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
		parse:function(str){
			try{
				return getFrom360CP(str,6);
			}catch(err){
				//throw('�㶫11ѡ5�������ݲ���ȷ');
			}
		}
	},
	{
		title:'����11ѡ5',
		source:'360��Ʊ��',
		name:'jx11x5',
		enable:true,
		timer:'jx11x5',
 

		option:{
			host:"cp.360.cn",
			timeout:50000,
			path: '/dlcjx/',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
		parse:function(str){
			try{
				return getFrom360CP(str,16);
			}catch(err){
				//throw('�������ֲʽ������ݲ���ȷ');
			}
		}
	},
	{
		title:'ɽ��11ѡ5',
		source:'360��Ʊ��',
		name:'sd11x5',
		enable:true,
		timer:'sd11x5', 

		option:{
			host:"cp.360.cn",
			timeout:50000,
			path: '/yun11/',
			headers:{
				"User-Agent": "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; Sleipnir/2.9.8) "
			}
		},
		parse:function(str){
			try{
				return getFrom360sd11x5(str,7);
			}catch(err){
				//throw('ɽ��11ѡ5�������ݲ���ȷ');
			}
		}
	},
	{
		title:'����PK10',
		source:'��������ƽ̨',
		name:'bjpk10',
		enable:true,
		timer:'bjpk10',

		option:{

			host:"www.bwlc.gov.cn",
			timeout:50000,
			path: '/bulletin/trax.html',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
		
		parse:function(str){
			try{
				return getFromPK10(str,20);
			}catch(err){
				throw('�������ݲ���ȷ');
			}
		}
	},//(((
	
//{{{
	{
		title:'�������ʮ��',
		source:'������',
		name:'klsf',
		enable:false,
		timer:'klsf',

		option:{
			host:"www.cailele.com",
			timeout:30000,
			path: '/static/cqklsf/newlyopenlist.xml',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Win64; x64; Trident/4.0)"
			}
		},
		
		parse:function(str){
			try{
				str=str.substr(0,200);
				var reg=/<row expect="(\d+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/; 
				var m;
	
				if(m=str.match(reg)){
					return {
						type:18,
						time:m[3],
						number:m[1].replace(/^(\d{8})(\d{2})$/, '$1-0$2'),
						data:m[2]
					};
				}					
			}catch(err){
				throw('����ʮ�ֽ������ݲ���ȷ');
			}
		}
	},
	{
		title:'��ֲ�',
		source:'ƽ̨��Ʊ',
		name:'qtllc',
		enable:true,
		timer:'qtllc',

		option:{
			host:"localhost",
			port:"8080",
			timeout:50000,
			path:'/index.php/xyylcp/xml',
			headers:{
				"User-Agent": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.116 Safari/537.36"
			}
		},
		parse:function(str){
			try{
				str=str.substr(0,200);
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/; 			
				var m;
				if(m=str.match(reg)){
					return {
						type:14,
						time:m[3],
						number:m[1],
						data:m[2]
					};
				}
			}catch(err){
				throw('��ֲʽ������ݲ���ȷ');
			}
		}
	},
	{
		title:'�ֲַ�',
		source:'ffc',
		name:'ffc',
		enable:true,
		timer:'ffc',
		option:{
			host:"103.204.13.2",
			port:"8080",
			timeout:50000,
			path: '/index.php/xyylcp/xml3',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "
			}
		},
		parse:function(str){
			try{
				str=str.substr(0,200);	
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/; 
				var m;
				if(m=str.match(reg)){
					return {
						type:5,
						time:m[3],
						number:m[1],
						data:m[2]
					};
				}					
			}catch(err){
				throw('�ֲַʽ������ݲ���ȷ');
			}
		}
	}
];

// ����ʱ�ȴ� 10
exports.errorSleepTime=10;

// ����ʱ��������СʱΪ��λ��0Ϊ������
//exports.restartTime=0.4;
exports.restartTime=0;

exports.submit={

	host:'localhost',
	port:'8081',
	path:'/admin778899.php/dataSource/kj'
}

exports.dbinfo={
	host:'localhost',
	user:'root',
	password:'!@#$%^&*())(*&^%$#@!',
	database:'boesdnh8y6f'

}

global.log=function(log){
	var date=new Date();
	console.log('['+date.toDateString() +' '+ date.toLocaleTimeString()+'] '+log)
}
function getFromXJFLCPWeb(str, type){
	
	str=str.substr(str.indexOf('<div class="con_left" style="position:relative;">'), 400).replace(/[\r\n]+/g,'');
	
	var reg=/[\s]*<span>[\s]*(\d*)[\s]*<\/span>[\s\S]*<\/p>[\s\S]*?(\s*)/,
	match=str.match(reg);
	var mynumber = match[1];
	reg = /<i>(\d)*<\/i>/g;
	var mydata=str.match(reg).map(function(v){
				var reg=/<i>(\d)*<\/i>/;
				return v.match(reg)[1];
			}).join(',');
	var myround = mynumber.replace(/^\d{4}\d{2}\d{2}(\d{2})/, '$1');
	var mytime = mynumber.replace(/^(\d{4})(\d{2})(\d{2})\d{2}/, '$1-$2-$3 ')
	console.log(myround);
	if(!mydata) throw new Error('���ݲ���ȷ');
	try{
		var data={
			type:type,
			time:mytime,
			number:mynumber,
			data:mydata
		};
		//console.log(data);
		return data;
	}catch(err){
		throw('��������ʧ��');
	}
}


function getFromCaileleWeb(str, type, slen){
	if(!slen) slen=500;
	str=str.substr(str.indexOf('<span class="cz_name">'),slen);
	//console.log(str);
	var reg=/<td.*?>(\d+)<\/td>[\s\S]*?<td.*?>([\d\- \:]+)<\/td>[\s\S]*?<td.*?>((?:[\s\S]*?<span class="red_ball">\d+<\/span>){3,5})\s*<\/td>/,
	match=str.match(reg);
	if(match.length>1){
		
		if(match[1].length==7) match[1]='2014'+match[1].replace(/(\d{4})(\d{3})/,'$1-$2');
		if(match[1].length==8){
			if(parseInt(type)!=11){
				match[1]='20'+match[1].replace(/(\d{6})(\d{2})/,'$1-0$2');
			}else{match[1]='20'+match[1].replace(/(\d{6})(\d{2})/,'$1-$2');}
		}
		if(match[1].length==9) match[1]='20'+match[1].replace(/(\d{6})(\d{2})/,'$1-$2');
		if(match[1].length==10) match[1]=match[1].replace(/(\d{8})(\d{2})/,'$1-0$2');
		var mynumber=match[1].replace(/(\d{8})(\d{3})/,'$1-$2');
	try{
		var data={
			type:type,
			time:match[2],
			number:mynumber
		}
		reg=/<div.*>(\d+)<\/div>/g;
		data.data=match[3].match(reg).map(function(v){
			var reg=/<div.*>(\d+)<\/div>/;
			return v.match(reg)[1];
		}).join(',');
		
		//console.log(data);
		return data;
	}catch(err){
		throw('��������ʧ��');
	}
   }
}
function getFromBwlcWeb(str, type){
	str=str.substr(str.indexOf('<tr class="'), 300).replace(/[\r\n]+/g,'');
         
	var reg=/<td>(\d{6}).+([\d+,]{29}).+([\d\- \:]{16})<\/td>/,
				 //<td>374454</td><td>04,10,01,03,05,09,06,07,02,08</td><td>2013-07-25 23:57</td>

	match=str.match(reg);
	
	if(!match) throw new Error('���ݲ���ȷ');
                    
	try{
		var data={
			type:type,
			time:match[3],
			number:match[1],
			data:match[2]
		};
		//console.log(data);
		return data;
	}catch(err){
		throw('��������ʧ��');
	}
}
function getFrom360CP(str, type){

	str=str.substr(str.indexOf('<em class="red" id="open_issue">'),380);
	
	var reg=/[\s\S]*?(\d+)<\/em>[\s\S].*?<ul id="open_code_list">((?:[\s\S]*?<li class=".*?">\d+<\/li>){3,5})[\s\S]*?<\/ul>/,
	match=str.match(reg);
	console.log(match[0]);
	var myDate = new Date();
	var year = myDate.getFullYear();       //��   
    var month = myDate.getMonth() + 1;     //��   
    var day = myDate.getDate();            //��
	if(month < 10) month="0"+month;
	if(day < 10) day="0"+day;
	var mytime=year + "-" + month + "-" + day + " " +myDate.toLocaleTimeString();
	//console.log(match);
	if(match.length>1){
		if(match[1].length==7) match[1]=year+match[1].replace(/(\d{8})(\d{3})/,'$1-$2');
		if(match[1].length==6) match[1]=year+match[1].replace(/(\d{4})(\d{2})/,'$1-0$2');
		if(match[1].length==9) match[1]='20'+match[1].replace(/(\d{6})(\d{2})/,'$1-$2');
		if(match[1].length==10) match[1]=match[1].replace(/(\d{8})(\d{2})/,'$1-0$2');
		var mynumber=match[1].replace(/(\d{8})(\d{3})/,'$1-$2');
		
		try{
			var data={
				type:type,
				time:mytime,
				number:mynumber
			}
			
			reg=/<li class=".*?">(\d+)<\/li>/g;
			data.data=match[2].match(reg).map(function(v){
				var reg=/<li class=".*?">(\d+)<\/li>/;
				return v.match(reg)[1];
			}).join(',');
			
			//console.log(data);
			return data;
		}catch(err){
			throw('��������ʧ��');
		}
	}
}

function getFrom360CPK3(str, type){

	str=str.substr(str.indexOf('<em class="red" id="open_issue">'),380);
	//console.log(str);
	var reg=/[\s\S]*?(\d+)<\/em>[\s\S].*?<ul id="open_code_list">((?:[\s\S]*?<li class=".*?">\d+<\/li>){3,5})[\s\S]*?<\/ul>/,
	match=str.match(reg);
	var myDate = new Date();
	var year = myDate.getFullYear();       //��   
    var month = myDate.getMonth() + 1;     //��   
    var day = myDate.getDate();            //��
	if(month < 10) month="0"+month;
	if(day < 10) day="0"+day;
	var mytime=year + "-" + month + "-" + day + " " +myDate.toLocaleTimeString();
	//console.log(match);
	match[1]=match[1].replace(/(\d{4})(\d{2})/,'$1$2');
		
		try{
			var data={
				type:type,
				time:mytime,
				number:match[1]
			}
			
			reg=/<li class=".*?">(\d+)<\/li>/g;
			data.data=match[2].match(reg).map(function(v){
				var reg=/<li class=".*?">(\d+)<\/li>/;
				return v.match(reg)[1];
			}).join(',');
			
			//console.log(data);
			return data;
		}catch(err){
			throw('��������ʧ��');
		}
}

function getFromPK10(str, type){
	str=str.substr(str.indexOf('<tr class="'),200).replace(/[\r\n]+/g,'');
	var reg=/<tr class=".*?">[\s\S]*?<td>(\d+)<\/td>[\s\S]*?<td>(.*)<\/td>[\s\S]*?<td>([\d\:\- ]+?)<\/td>[\s\S]*?<\/tr>/,
	match=str.match(reg);
	if(!match) throw new Error('���ݲ���ȷ');
	try{
		var data={
			type:type,
			time:match[3],
			number:match[1],
			data:match[2]
		};
		return data;
	}catch(err){
		throw('��������ʧ��');
	}
	
}

function getFromK8(str, type){

	str=str.substr(str.indexOf('<div class="lott_cont">'),450).replace(/[\r\n]+/g,'');
    //console.log(str);
	var reg=/<tr class=".*?">[\s\S]*?<td>(\d+)<\/td>[\s\S]*?<td>(.*)<\/td>[\s\S]*?<td>(.*)<\/td>[\s\S]*?<td>([\d\:\- ]+?)<\/td>[\s\S]*?<\/tr>/,
	match=str.match(reg);
	if(!match) throw new Error('���ݲ���ȷ');
	//console.log(match);
	try{
		var data={
			type:type,
			time:match[4],
			number:match[1],
			data:match[2]+'|'+match[3]
		};
		//console.log(data);
		return data;
	}catch(err){
		throw('��������ʧ��');
	}
	
}


function getFromCJCPWeb(str, type){

	//console.log(str);
	str=str.substr(str.indexOf('<table class="qgkj_table">'),1200);
	
	//console.log(str);
	
	var reg=/<tr>[\s\S]*?<td class=".*">(\d+).*?<\/td>[\s\S]*?<td class=".*">([\d\- \:]+)<\/td>[\s\S]*?<td class=".*">((?:[\s\S]*?<input type="button" value="\d+" class=".*?" \/>){3,5})[\s\S]*?<\/td>/,
	match=str.match(reg);
	
	//console.log(match);
	
	if(!match) throw new Error('���ݲ���ȷ');
	try{
		var data={
			type:type,
			time:match[2],
			number:match[1].replace(/(\d{8})(\d{2})/,'$1-0$2')
		}
		
		reg=/<input type="button" value="(\d+)" class=".*?" \/>/g;
		data.data=match[3].match(reg).map(function(v){
			var reg=/<input type="button" value="(\d+)" class=".*?" \/>/;
			return v.match(reg)[1];
		}).join(',');
		
		//console.log(data);
		return data;
	}catch(err){
		throw('��������ʧ��');
	}
	
}

function getFromCaileleWeb_1(str, type){
	str=str.substr(str.indexOf('<tbody id="openPanel">'), 120).replace(/[\r\n]+/g,'');
         
	var reg=/<tr.*?>[\s\S]*?<td.*?>(\d+)<\/td>[\s\S]*?<td.*?>([\d\:\- ]+?)<\/td>[\s\S]*?<td.*?>([\d\,]+?)<\/td>[\s\S]*?<\/tr>/,
	match=str.match(reg);
	if(!match) throw new Error('���ݲ���ȷ');
	//console.log(match);
	var number,_number,number2;
	var d = new Date();
	var y = d.getFullYear();
	if(match[1].length==9 || match[1].length==8){number='20'+match[1];}else if(match[1].length==7){number='2014'+match[1];}else{number=match[1];}
	_number=number;
	if(number.length==11){number2=number.replace(/^(\d{8})(\d{3})$/, '$1-$2');}else{number2=number.replace(/^(\d{8})(\d{2})$/, '$1-0$2');_number=number.replace(/^(\d{8})(\d{2})$/, '$10$2');}
	try{
		var data={
			type:type,
			time:_number.replace(/^(\d{4})(\d{2})(\d{2})\d{3}/, '$1-$2-$3 ')+match[2],
			number:number2,
			data:match[3]
		};
		//console.log(data);
		return data;
	}catch(err){
		throw('��������ʧ��');
	}
}

function getFrom360sd11x5(str, type){

	str=str.substr(str.indexOf('<em class="red" id="open_issue">'),380);
	//console.log(str);
	var reg=/[\s\S]*?(\d+)<\/em>[\s\S].*?<ul id="open_code_list">((?:[\s\S]*?<li class=".*?">\d+<\/li>){3,5})[\s\S]*?<\/ul>/,
	match=str.match(reg);
	var myDate = new Date();
	var year = myDate.getFullYear();       //��   
    var month = myDate.getMonth() + 1;     //��   
    var day = myDate.getDate();            //��
	if(month < 10) month="0"+month;
	if(day < 10) day="0"+day;
	var mytime=year + "-" + month + "-" + day + " " +myDate.toLocaleTimeString(); 
	//console.log(mytime);
	//console.log(match);
	
	if(!match) throw new Error('���ݲ���ȷ');
	try{
		var data={
			type:type,
			time:mytime,
			number:year+match[1].replace(/(\d{4})(\d{2})/,'$1-0$2')
		}
		
		reg=/<li class=".*?">(\d+)<\/li>/g;
		data.data=match[2].match(reg).map(function(v){
			var reg=/<li class=".*?">(\d+)<\/li>/;
			return v.match(reg)[1];
		}).join(',');
		
		//console.log(data);
		return data;
	}catch(err){
		throw('��������ʧ��');
	}
}

function getFromCaileleWeb_2(str, type){

	str=str.substr(str.indexOf('<tbody id="openPanel">'), 500).replace(/[\r\n]+/g,'');
	//console.log(str);
	var reg=/<tr>[\s\S]*?<td>(\d+)<\/td>[\s\S]*?<td>([\d\:\- ]+?)<\/td>[\s\S]*?<td>([\d\,]+?)<\/td>[\s\S]*?<\/tr>/,
	match=str.match(reg);
	if(!match) throw new Error('���ݲ���ȷ');
	//console.log(match);
	var number,_number,number2;
	var d = new Date();
	var y = d.getFullYear();
	if(match[1].length==9 || match[1].length==8){number='20'+match[1];}else if(match[1].length==7){number='2014'+match[1];}else{number=match[1];}
	_number=number;
	if(number.length==11){number2=number.replace(/^(\d{8})(\d{3})$/, '$1-$2');}else{number2=number.replace(/^(\d{8})(\d{2})$/, '$1-0$2');_number=number.replace(/^(\d{8})(\d{2})$/, '$10$2');}
	try{
		var data={
			type:type,
			time:_number.replace(/^(\d{4})(\d{2})(\d{2})\d{3}/, '$1-$2-$3 ')+match[2],
			number:number2,
			data:match[3]
		};
		//console.log(data);
		return data;
	}catch(err){
		throw('��������ʧ��');
	}
}