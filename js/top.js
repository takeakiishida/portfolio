// TOPページのスクロール用JS
$('#TopWrapper').multiscroll({
	sectionsColor: ['#fff', '#fff', '#fff','#fff', '#fff', '#fff'],//セクションごとの背景色設定
	anchors: ['area1', 'area2', 'area3','area4','area5','area6'],//セクションとリンクするページ内アンカーになる名前
	menu: '#menu',//上部ナビゲーションのメニュー設定
	navigation: true,//右のナビゲーション出現、非表示は false
	navigationTooltips:['Top', 'Pick Up1', 'Pick Up2','Pick Up3','About & Contact','Area6'],
	loopTop: true,//最初のセクションを上にスクロールして最後のセクションまでスクロールするかどうかを定義します。
	loopBottom: true,//最後のセクションを下にスクロールして最初のセクションまでスクロールするかどうかを定義します。
});

//同じ日付で2回目以降ならローディング画面非表示の設定
var splash_text = $.cookie('accessdate'); //キーが入っていれば年月日を取得
var myD = new Date();//日付データを取得
var myYear = String(myD.getFullYear());//年
var myMonth = String(myD.getMonth() + 1);//月
var myDate = String(myD.getDate());//日

$(window).on('load',function(){	
	if (splash_text != myYear + myMonth + myDate) {//cookieデータとアクセスした日付を比較。初回アクセスの場合は以下を実行。
			setTimeout(function () {
				$(".p-top-load__inner").fadeIn(1000, function () {//1000ミリ秒（1秒）かけてロゴがフェードイン
					setTimeout(function () {
						$(".p-top-load__inner").fadeOut(2000);//1000ミリ秒（1秒）かけてロゴがフェードアウト
					}, 2500);//1000ミリ秒（1秒）後に処理を実行
					setTimeout(function () {
						$(".p-top-load").fadeOut(1000, function () {//1000ミリ秒（1秒）かけて画面がフェードアウト
							$('body').addClass('appear');
							$('body.appear .txt').on('animationend', function() {
								$('body').addClass('ColorAppear');
							});
							var myD = new Date();
							var myYear = String(myD.getFullYear());
							var myMonth = String(myD.getMonth() + 1);
							var myDate = String(myD.getDate());
							$.cookie('accessdate', myYear + myMonth + myDate); //accessdateキーで年月日を記録
						});
					}, 1700);//1700ミリ秒（1.7秒）後に処理を実行
				});
			}, 1000);//1000ミリ秒（1秒）後に処理を実行
	}else {
		$(".p-top-load").css("display", "none");//同日2回目のアクセスでローディング画面非表示
		$('body').addClass('appear');
		$('body.appear .txt').on('animationend', function() {
			$('body').addClass('ColorAppear');
		});
	} 
});