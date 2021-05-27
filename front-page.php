<?php get_header(); ?>
        <!-- ロード画面 -->
        <div class="p-top-load">
            <div class="p-top-load__inner c-fadein--late">
                <div class="p-top-load__img"><img src="<?= mypath(); ?>img/favicon.png" alt="logo"></div>
                <div class="p-top-load__txt">
                    <p>ポートフォリオをご覧いただき、ありがとうございます。</p>
                    <p>どうぞごゆるりと、細部までご覧いただけたら嬉しいです。</p>
                    <p>よろしくお願いいたします。</p>
                </div>       
            </div>        
        </div>
        <main id="main">
            <div id="wrapper">
                <!--左画面-->
                <div class="ms-left">
                    <!-- 第一画面 -->
                    <section class="ms-section" id="left1">
                        <div class="p-top-mask p-top-mask--left"></div>
                        <div class="sp-top">
                            <p class="txt">
                                <span class="color1 color color--gray">T</span><span class="color2 color color--gray">a</span><span class="color3 color color--gray">k</span><span class="color4 color color--gray">e</span><span class="color5 color color--gray">a</span><span class="color6 color color--gray">k</span><span class="color7 color color--gray">i</span>
                            </p>
                        </div>
                        <div class="sp-bottom">
                            <div class="p-top-mask p-top-mask--right"></div>
                            <p class="txt">
                                <span class="color8 color color--white">i</span><span class="color9 color color--white">s</span><span class="color10 color color--white">h</span><span class="color11 color color--white">i</span><span class="color12 color color--white">d</span><span class="color13 color color--white">a</span>
                            </p>
                            <div class="p-top__scroll">
                                <span>Scroll</span>
                            </div>
                        </div>
                    </section>
                    <!-- 第二画面 -->
                    <section class="ms-section" id="left2">
                        <div class="sp-top"></div>
                        <div class="sp-bottom">
                            <div class="p-top-pickup__wrapper">
                                <h2 class="p-top__title p-top__title--blue"><span>01</span>Pick UP</h2>
                                <p class="p-top-pickup__overview p-top-pickup__overview--white">デザインと実装を行ったオリジナルのコーポレートサイトです。<br>特にjqueryの実装部分に力を入れて制作しました。</p>
                                <ul class="p-top-pickup__skill">
                                    <li><img src="<?= mypath(); ?>img/html.png" alt=""></li>
                                    <li><img src="<?= mypath(); ?>img/css.png" alt=""></li>
                                    <li><img src="<?= mypath(); ?>img/jquery.png" alt=""></li>
                                    <li><img src="<?= mypath(); ?>img/sass.png" alt=""></li>
                                    <li><img src="<?= mypath(); ?>img/vscode.png" alt=""></li>
                                </ul>
                                <div class="p-top__btn">
                                    <a href="<?php the_permalink(132); ?>" class="c-btn c-btn--blue">このサイトの詳細へ</a>
                                </div>
                                <div class="p-top__link">
                                    <a href="<?php the_permalink(10); ?>" class="c-link c-link--blue">作品一覧はこちら</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- 第三画面 -->
                    <section class="ms-section" id="left3">
                        <div class="sp-top">
                        </div>
                        <div class="sp-bottom">
                            <div class="p-top-pickup__wrapper">
                                <h2 class="p-top__title p-top__title--yellow"><span>02</span>Pick UP</h2>
                                <p class="p-top-pickup__overview p-top-pickup__overview--gray">デザインと実装を行ったオリジナルのブランディングサイトです。</p>
                                <div class="p-top__btn">
                                    <a href="<?php the_permalink(111); ?>" class="c-btn c-btn--gray">このサイトの詳細へ</a>
                                </div>
                                <div class="p-top__link">
                                    <a href="<?php the_permalink(10); ?>" class="c-link c-link--yellow">作品一覧はこちら</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- 第四画面 -->
                    <section class="ms-section" id="left4">
                        <div class="sp-top"></div>
                        <div class="sp-bottom">
                            <div class="p-top-pickup__wrapper">
                                <h2 class="p-top__title p-top__title--blue"><span>03</span>Pick UP</h2>
                                <p class="p-top-pickup__overview p-top-pickup__overview--white">初めてオリジナルで制作したブランディングサイトです。<br></p>
                                <ul class="p-top-pickup__skill">
                                    <li><img src="<?= mypath(); ?>img/html.png" alt=""></li>
                                    <li><img src="<?= mypath(); ?>img/css.png" alt=""></li>
                                    <li><img src="<?= mypath(); ?>img/sass.png" alt=""></li>
                                    <li><img src="<?= mypath(); ?>img/vscode.png" alt=""></li>
                                </ul>
                                <div class="p-top__btn">
                                    <a href="<?php the_permalink(47); ?>" class="c-btn c-btn--blue">このサイトの詳細へ</a>
                                </div>
                                <div class="p-top__link">
                                    <a href="<?php the_permalink(10); ?>" class="c-link c-link--blue">作品一覧はこちら</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- 第五画面 -->
                    <section class="ms-section" id="left5">
                        <div class="sp-top">
                            <div class="p-top-about">
                                <h2 class="p-top__title p-top__title--yellow"><span>04</span>About</h2>
                                <p class="p-top-about__name">石田剛章</p>
                                <div class="p-top-about__career">
                                    <p>2018年、芝浦工業大学 工学部 情報工学科卒。</p>
                                    <p>卒業後約2年半、生命保険会社でシステムエンジニアを経験。</p>
                                    <p>退職後、約半年間は職業訓練でWEBデザインを学習。</p>
                                </div>
                                <div class="p-top__btn">
                                    <a href="<?php the_permalink(14); ?>" class="c-btn c-btn--gray">詳しく知る</a>
                                </div>
                            </div>
                        </div>
                        <div class="sp-bottom">
                            <div class="p-top-contact">
                                <h2 class="p-top__title p-top__title--blue"><span>05</span>Contact</h2>
                                <div class="p-top-contact__txtArea">
                                    <p>私のポートフォリオをご覧いただき、ありがとうございます。</p>
                                    <p>ポートフォリオの中で気になったこと等ございましたら、下記のコンタクトフォームにまでご連絡いただけますと幸いです。</p>
                                </div>
                                <div class="p-top-contact__btn">
                                    <a href="<?php the_permalink(12); ?>" class="c-btn c-btn--blue">コンタクトフォームへ</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div><!--/ここまで左画面-->
                <!--右画面はPCのみ表示する。-->
                <div class="ms-right">
                    <div class="ms-section" id="right1">
                        <div class="p-top-mask p-top-mask--right"></div>
                        <p class="txt">
                            <span class="color8 color color--white">i</span><span class="color9 color color--white">s</span><span class="color10 color color--white">h</span><span class="color11 color color--white">i</span><span class="color12 color color--white">d</span><span class="color13 color color--white">a</span>
                        </p>
                        <div class="p-top__scroll">
                            <span>Scroll</span>
                        </div>
                    </div>
                    <div class="ms-section" id="right2">
                    </div>
                    <div class="ms-section" id="right3">
                        <div class="p-top-pickup__wrapper">
                            <h2 class="p-top__title p-top__title--yellow"><span>02</span>Pick UP</h2>
                            <p class="p-top-pickup__overview p-top-pickup__overview--gray">デザインと実装を行ったオリジナルのブランディングサイトです。</p>
                            <ul class="p-top-pickup__skill">
                                <li><img src="<?= mypath(); ?>img/html.png" alt=""></li>
                                <li><img src="<?= mypath(); ?>img/css.png" alt=""></li>
                                <li><img src="<?= mypath(); ?>img/sass.png" alt=""></li>
                                <li><img src="<?= mypath(); ?>img/jquery.png" alt=""></li>
                                <li><img src="<?= mypath(); ?>img/php.png" alt=""></li>
                                <li><img src="<?= mypath(); ?>img/wordpress.png" alt=""></li>
                                <li><img src="<?= mypath(); ?>img/vscode.png" alt=""></li>
                            </ul>
                            <div class="p-top__btn">
                                <a href="<?php the_permalink(111); ?>" class="c-btn c-btn--gray">このサイトの詳細へ</a>
                            </div>
                            <div class="p-top__link">
                                    <a href="<?php the_permalink(10); ?>" class="c-link c-link--yellow">作品一覧はこちら</a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-section" id="right4"></div>
                    <div class="ms-section" id="right5">
                        <div class="p-top-contact">
                            <h2 class="p-top__title p-top__title--blue"><span>05</span>Contact</h2>
                            <div class="p-top-contact__txtArea">
                                <p>私のポートフォリオをご覧いただき、ありがとうございます。</p>
                                <p>ポートフォリオの中で気になったこと等ございましたら、下記のコンタクトフォームにまでご連絡いただけますと幸いです。</p>
                            </div>
                            <div class="p-top-contact__btn">
                                <a href="<?php the_permalink(12); ?>" class="c-btn c-btn--blue">コンタクトフォームへ</a>
                            </div>
                        </div>
                    </div>
                </div><!--/ここまで右画面-->
            <!--/wrapper--></div>
        </main>
        <!-- /.main -->
        <!-- <div class="c-scroll"><span>Scroll</span></div> -->
<?php get_footer(); ?>
