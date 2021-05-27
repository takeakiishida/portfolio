// works一覧のギャラリー表示
$(window).on('load',function(){	//画面遷移時にギャラリーの画像が被らないように、すべての読み込みが終わった後に実行する

    //Muuriギャラリープラグイン設定
    var grid = new Muuri('.p-works-list', {
    
      //アイテムの表示速度※オプション。入れなくても動作する
      showDuration: 600,
      showEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
      hideDuration: 600,
      hideEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
        
      // アイテムの表示/非表示状態のスタイル※オプション。入れなくても動作する
      visibleStyles: {
        opacity: '1',
        transform: 'scale(1)'
      },
      hiddenStyles: {
        opacity: '0',
        transform: 'scale(0.5)'
      }    
    });
    
    //＝＝＝並び替えボタン設定
    $('.p-works-sort li').on('click',function(){			//並び替えボタンをクリックしたら
        $(".p-works-sort .is-active").removeClass("is-active");	//並び替えボタンに付与されているis-activeクラスを全て取り除き
        var className = $(this).attr("class");			//クラス名を取得
        className = className.split(' ');				//「sortXX is-active」のクラス名を分割して配列にする
        $("."+className[0]).addClass("is-active");			//並び替えボタンに付与されているクラス名とギャラリー内のリストのクラス名が同じボタンにactiveクラスを付与
        if(className[0] == "all"){						//クラス名がallのボタンの場合は、
             grid.show('');								//全ての要素を出す
        }else{											//それ以外の場合は
             grid.filter("."+className[0]); 				//フィルターを実行
        }
    });
});