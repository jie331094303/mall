	window.onload = function() {
		//鼠标滑过显示标题
		(function() {
			function showTitle(number) {
				var titles = document.getElementById("nav-left-title-" + number);
				var showTitles = document.getElementById("nav-left-title-show-" + number);
				titles.onmouseover = function() {
					showTitles.style.display = "block";
				}; 
				titles.onmouseout = function() {
					showTitles.style.display = "none";
				};
			}
			function writeNumber() {
				for(var i = 1; i < 9; i++) {
					showTitle(i);
				} 
			}
			writeNumber();
		})();
		// 轮播图
		(function(){
			var box = document.getElementsByClassName('nav-right-box')[0];
			var list = document.getElementById('nav-right-list');
			var buttons = document.getElementById('nav-right-buttons');
			var prev = document.getElementById('nav-right-prev');
			var next = document.getElementById('nav-right-next');
			var spans = buttons.getElementsByTagName('span');
			var index = 1;
			var show1 = false;
			var timer = null;
			//移动函数 
			function move(x){
				show1 = true;
				left = parseInt(list.style.left);
				var aleft = left + x;
				var time = 300;
				var interval = 10;
				var speed = x / (time/interval);
					function go(){
						if((speed < 0 && parseInt(list.style.left) > aleft)||(speed > 0 && parseInt(list.style.left) < aleft)){
							list.style.left = parseInt(list.style.left) + speed + 'px';
							setTimeout(go,interval);
							// console.log(left);
						}else{
								show1 = false;
							   list.style.left = aleft + 'px';
							if(aleft > -980){
								list.style.left = -4900 + 'px'; //让它回到最后一张
							}
							if(aleft < -4900){
								list.style.left = -980 + 'px';
								//让它回到第一张，不然后面会出现空白
							}
						}
					}
			go();
			}
			//自动播放
			function play(){
				timer = setInterval(function(){
					next.onclick();
				},2000);
			}

			function stop(){
				clearInterval(timer);
			}
			play();
			box.onmouseover = function(){
				stop();
				prev.style.display = 'block';
				next.style.display = 'block';
			};
			box.onmouseout = function() {
				play();
				prev.style.display = 'none';
				next.style.display = 'none';
			};
			//显示按钮
			function showButton(){
				for(var i = 0; i < spans.length; i++){
					if(spans[i].className == 'nav-right-on'){
						spans[i].className = '';
					}
				}
				spans[index - 1].className = 'nav-right-on';
			}
			//跳转
			for(var j = 0; j< spans.length; j ++){
				spans[j].onclick = function(){
					if(this.className === 'nav-right-on'){
							return;
					}
					var aindex = parseInt(this.getAttribute('index'));
					var movex = -980 * (aindex - index);
					if(show1 === false){
						move(movex);	
					}
					index = aindex;
					showButton();
					// debugger;
				};
			}
			//向前
			prev.onclick = function(){
				if(show1 === false){
					move(980);
				}
				if(index === 1){
					index = 5;
				}else{
					index = index - 1;
				}
				showButton();
			};
			//向后
			next.onclick = function(){
				if(show1 === false){
					move(-980);
				}
				if(index === 5){
					index = 1;
				}else{
					index = index + 1;
				}
				showButton();
			};
		})();
		//显示登陆注册
		(function() {
			var login = document.getElementById('login');
			var register = document.getElementById('register');
			var login_close = document.getElementById('login-close');
			var register_close = document.getElementById('register-close');
			var body = document.getElementsByTagName('body')[0];
			//显示元素
			function showIdUi(id,flag) {
				var showId = document.getElementById(id);
				if(flag === true) {
					showId.style.display = "block";
				}else {
					showId.style.display = "none";
				}
			}
			function fillTobody(flag) {
				var mask = document.getElementsByClassName("mask")[0];
				if (flag === true) {
					mask.style.display = "block";
				} else {
					mask.style.display = "none";
				}		
			} 
			//自动居中
			function autoCenter(id) {
				var idName = document.getElementById(id);
				var windowW = document.body.clientWidth || document.documentElement.clientWidth;
				var windowH =  window.innerHeight; 
				var idW = idName.offsetWidth;
				var idH = idName.offsetHeight;				
				var left = (windowW - idW) / 2;
				var top = (windowH - idH) / 2;
				idName.style.top = top + "px";
				idName.style.left = left + "px";
			}
			//显示登陆
			login.onclick = function() {
				showIdUi("login-ui",true);
				fillTobody(true);
				autoCenter("login-ui");
				body.style.overflow = "hidden"; 
				return false;
			};
			//关闭登陆
			login_close.onclick = function() {
				showIdUi("login-ui",false);
				body.style.overflow = "visible";
				fillTobody(false);
			};
			//显示注册
			register.onclick = function() {
				showIdUi("register-ui",true);
				fillTobody(true);
				autoCenter("register-ui");
				body.style.overflow = "hidden";
				return false;
			};
			//关闭注册
			register_close.onclick = function() {
				showIdUi("register-ui",false);
				fillTobody(false);
				body.style.overflow = "visible";
			};
		})();
    };