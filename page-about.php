<?php get_header(); ?>
    <main id="main" class="c-fadein">
        <h2 class="c-section__title" data-en="About">自己紹介</h2>
        <div class="p-about-top">
            <!-- プロフィール -->
            <section class="p-about-profile">
                <div class="p-about-profile__inner">
                    <h3 class="c-section__subtitle">プロフィール</h3>
                    <div class="p-about-profile__img"><img src="<?= mypath();?>img/watashi.jpg" alt=""></div>
                    <p class="p-about-profile__name">石田&ensp; 剛章</p>
                    <p class="p-about-profile__address">鹿児島県出身、東京都在住の26歳。</p>
                    <p class="p-about-profile__qualification">&diams;資格：基本情報技術者試験合格</p>
                    <p class="p-about-profile__hobby">&diams;趣味：サッカー観戦、温泉、読書、海外旅行</p>
                    <ul class="p-about-profile__country">
                        <li><img src="<?= mypath();?>img/spain.png" alt=""></li>
                        <li><img src="<?= mypath();?>img/spain.png" alt=""></li>
                        <li><img src="<?= mypath();?>img/spain.png" alt=""></li>
                        <li><img src="<?= mypath();?>img/france.png" alt=""></li>
                        <li><img src="<?= mypath();?>img/italy.png" alt=""></li>
                        <li><img src="<?= mypath();?>img/uae.png" alt=""></li>
                        <li><img src="<?= mypath();?>img/philippines.png" alt=""></li>
                    </ul>
                    <p class="p-about-profile__recent">最近、DMMブックス70%オフキャンペーンで、欲しかったデザイン書籍を大人買いしました。読書機会が増えています。</p>
                </div>    
            </section>
            <!-- 経歴 -->
            <section class="p-about-career">
                <h3 class="c-section__subtitle">経歴</h3>
                <div class="p-about-career__line"></div>
                <div class="p-about-career__wrapper">
                    <div class="p-about-career__article">
                        <div class="p-about-career__title">
                            <p>2018年3月、芝浦工業大学 工学部 情報工学科卒業。</p>
                        </div>
                        <div class="p-about-career__detail">
                            <p>大学の授業では、主にJava・C・Pythonなどの言語を学びました。システム開発演習もあり、より実務に近い形で上流工程から下流工程までを経験できました。</p>
                        </div>
                        <div class="meta-date">
                            <span class="year">2018</span>
                        </div>
                    </div>
                    <div class="p-about-career__article">
                        <div class="p-about-career__title">
                            <p>2018年4月、某生命保険会社にシステムエンジニアとして入社。</p>
                        </div>
                        <div class="p-about-career__detail">
                            <p>入社後は、上流～下流工程に携わり幅広く経験を積みました。所属するチーム(15人程度)では、保険の営業職員が使用するCJFアプリケーションのフロント部分（画面・印刷制御）を製造していました。所管するCJFアプリケーションは多く、全部で約600本を管理していました。また、プロパーとしてパートナーのスケジュール管理、案件の関係各所との折衝等々も担っていました。</p>
                        </div>
                        <div class="meta-date">
                            <span class="year">2018</span>
                        </div>
                    </div>
                    <div class="p-about-career__article">
                        <div class="p-about-career__title">
                            <p>2020年10月末、約2年半勤めた某生命保険会社を退職。</p>
                        </div>
                        <div class="p-about-career__detail">
                            <p>職場環境・上司にも恵まれ、いわゆるホワイトな働きやすい環境でしたが、自己都合で退職しました。WEB業界に入りたいと思ったのは、”世に出るモノづくり”がしたいと思ったためです。製造していたフロント部分はあくまで全国の営業職員しか使用せず、外から使用されている様子が見れなかったため、中々やりがいに繋がってきませんでした。そのため、”誰でも見れる”WEBに段々と魅力を感じるようになりました。</p>
                        </div>
                        <div class="meta-date">
                            <span class="year">2020</span>
                        </div>
                    </div>
                    <div class="p-about-career__article">
                        <div class="p-about-career__title">
                            <p>2020年11月、職業訓練校でWEBデザインの受講を開始。</p>
                        </div>
                        <div class="p-about-career__detail">
                            <p>独学（Udemyや参考書）でもWEB制作を学んでいましたが、さらに学習効率を引き上げるために、2020.11.16&#xFF5E;2021.04.30までインタープランITスクールで学びました。コーディングをメインに、デザインツールの基礎まで学んでいます。</p>
                        </div>
                        <div class="meta-date">
                            <span class="year">2020</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="p-about-middle">
            <section class="p-about-skill">
                <h3 class="c-section__subtitle">スキル</h3>
                <div class="p-about-skill__inner">
                    <div class="p-about-skill__experienced">
                        <h4 class="c-ribbon c-ribbon--yellow">実務経験あり</h4>
                        <ul class="p-about-skill__list">
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/java.png" alt="">
                                    <dt>JAVA</dt>
                                </div>
                                <dd>前職ではJAVAを使用したシステム開発を行っていました。開発のみならず、要件定義～テストまで幅広い工程を担っていました。オブジェクト指向を理解しているため、WEB開発にも生かせるのではないかと考えています。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/svn.png" alt="">
                                    <dt>Tortise SVN</dt>
                                </div>
                                <dd>所属チームでは、SVNを使用してバージョン管理を行っていました。リリース作業・所管資源数が多く、頻繁にマージ作業やコンフリクトの解消を行っていたため、操作に慣れています。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/excel.png" alt="">
                                    <dt>Excel</dt>
                                </div>
                                <dd>簡単な関数（主にvlookup等）を使用しながら、業務を効率化するために使用していました。ショートカットキーの使用にも慣れており、スムーズに作業を進めることができます。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/ffftp.png" alt="">
                                    <dt>FFFTP</dt>
                                </div>
                                <dd>テストサーバーに対するファイル送受信で使用していました。テストリリース作業も担当することが多かったので、ツール操作には慣れています。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/server.png" alt="">
                                    <dt>リリース作業</dt>
                                </div>
                                <dd>テストリリース・本番リリース作業を担っていました。所管するアプリケーション数が多かったため(約650本)、リリースするファイルの正当性チェックに時間をかけていました。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/sd.png" alt="">
                                    <dt>要件定義・調整</dt>
                                </div>
                                <dd>要件定義からリリースまですべてを担った案件もあります。担当者との打合せで必要要件の確認を行い、抜け漏れのないよう開発・テストを行いリリースしていました。</dd>
                            </dl>
                        </ul>    
                    </div>
                    <div class="p-about-skill__inexperienced">
                        <h4 class="c-ribbon c-ribbon--blue">実務経験なし</h4>
                        <p>★は主観的な自信の程度です。（HTML/CSSへの自信を★５つとしたときの相対値）</p>
                        <ul class="p-about-skill__list">
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/htmlcss.png" alt="">
                                    <dt>HTML/CSS</dt>
                                </div>
                                <span class="c-star" data-rate="5"></span>
                                <dd>基本的な記述についてはコーディング可能です。CSS設計については、BEMやFLOCSSを学習中です（ウェビナーやCSS設計完全ガイド）。エディターは主にVSCodeを使用していますが、その他ツールにも対応可能です。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/sass.png" alt="">
                                    <dt>Sass</dt>
                                </div>
                                <span class="c-star" data-rate="4"></span>
                                <dd>独学で学習中です(Sassの教科書)。オリジナル作品すべてに使用しています。コンポーネントや各種設定ごとにフォルダを切り分け、FLOCSSベースの開発を行っています。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/js.png" alt="">
                                    <dt>JavaScript/Jquery</dt>
                                </div>
                                <span class="c-star" data-rate="3"></span>
                                <dd>基本的に自力で調べてデバッグを行いながら実装をすることが可能です。見慣れないコンソールエラーについては解消に時間がかかってしまいます。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/php.png" alt="">
                                    <dt>PHP</dt>
                                </div>
                                <span class="c-star" data-rate="2"></span>
                                <dd>一部のオリジナル作品に使用しました。基本的な構文について理解しています。PHP独自の記述方法にはまだ慣れていないため、複雑なコーディングについては時間を要してしまいます。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/wordpress.png" alt="">
                                    <dt>WordPress</dt>
                                </div>
                                <span class="c-star" data-rate="3"></span>
                                <dd>一部のオリジナル作品に使用しました。オリジナルテーマを使用したサイトの構築が可能です。カスタム投稿/カスタムタクソノミー/カスタムフィールド等の実装も可能です。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/git-github.png" alt="">
                                    <dt>Git/Github</dt>
                                </div>
                                <span class="c-star" data-rate="3"></span>
                                <dd>独学で学習中です。オリジナル４作品のソースをGithubにアップロードしています。Gitの操作にはSourceTreeを使用しました。元々Tortise SVNの使用経験があり、基本的な作業を行うことができます。私のGithubページは<a href="https://github.com/takeakiishida" target=”_blank”>こちら。</a></dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/illustrator.png" alt="">
                                    <dt>Illustrator</dt>
                                </div>
                                <span class="c-star" data-rate="3"></span>
                                <dd>主にカンプ作成に使用していました。基本的な操作内容について理解しています。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/photoshop.png" alt="">
                                    <dt>Photoshop</dt>
                                </div>
                                <span class="c-star" data-rate="2"></span>
                                <dd>主に画像の加工に使用していました。基本的な操作内容や画像加工の方法について理解しています。</dd>
                            </dl>
                            <dl>
                                <div>
                                    <img src="<?= mypath();?>img/xd.png" alt="">
                                    <dt>XD</dt>
                                </div>
                                <span class="c-star" data-rate="1"></span>
                                <dd>職業訓練校の授業で触れた程度です。基本的な操作に触れたことがある状態ですが、再度作業をする際は少し時間を要します。</dd>
                            </dl>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div class="p-about-bottom">
            <section class="p-about-vision">
                <h3 class="c-section__subtitle">ビジョン</h3>
                <div class="p-about-vision__content">
                    <p class="p-about-vision__content--left">Design</p>
                    <div class="p-about-vision__content--middle"></div>
                    <p class="p-about-vision__content--right">Coding</p>
                </div>
                <div class="p-about-vision__txtArea">
                    <p>デザイン、コーディングの両方好きです。どちらも極めていきたいと考えています。</p>
                    <p>カッコいいサイト、おしゃれなサイトを作れる技術も勿論高めたいですが、</p>
                    <p>何よりお客様の課題を解決できるデザインを導きだせるプロになれるよう精進していきます。</p>
                </div>
            </section>
        </div>
        <div class="p-about-btn"><a href="<?= home_url(); ?>" class="c-link c-link--normal">TOPページに戻る</a></div>
    </main>
<?php get_footer(); ?>
