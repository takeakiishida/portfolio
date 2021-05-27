<?php get_header(); ?>
    <main class="c-fadein">
        <div class="p-workDetails">
            <!-- 作品タイトル -->
            <?php if ( get_field( 'title' ) ) : ?>
                <h2 class="p-workDetails-title"><?php the_field( 'title' ); ?></h2>
            <?php endif; ?>
            <!-- サブタイトル -->
            <?php if ( get_field( 'sub-title' ) ) : ?>
                <h3 class="p-workDetails-subtitle"><?php the_field( 'sub-title' ); ?></h3>
            <?php endif; ?>
            <!-- 作品画像 -->
            <div class="p-workDetails-img">
                <?php if ( get_field( 'img' ) ) : ?>
                    <?php 
                        $image = get_field('img');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
                    ?>
                <?php endif; ?>
            </div>
            <!-- 作品情報全体のwraper -->
            <div class="p-workDetails-info">
                <!-- 文書 -->
                <div class="p-workDetails-info__left">
                    <!-- コンセプト -->
                    <?php if ( get_field( 'concept' ) ) : ?>
                        <div class="p-workDetails-info__item">
                            <h4 class="c-underline">&diams;コンセプト</h4>
                            <p><?php the_field( 'concept' ); ?></p>
                        </div>
                    <?php endif; ?>
                    <!-- 目的 -->
                    <?php if ( get_field( 'purpose' ) ) : ?>
                        <div class="p-workDetails-info__item">
                            <h4 class="c-underline">&diams;目的</h4>
                            <p><?php the_field( 'purpose' ); ?></p>
                        </div>
                    <?php endif; ?>
                    <!-- ターゲット -->
                    <?php if ( get_field( 'target' ) ) : ?>
                        <div class="p-workDetails-info__item">
                            <h4 class="c-underline">&diams;ターゲット</h4>
                            <p><?php the_field( 'target' ); ?></p>
                        </div>
                    <?php endif; ?>
                    <!-- ひとこと -->
                    <?php if ( get_field( 'word' ) ) : ?>
                        <div class="p-workDetails-info__item">
                            <h4 class="c-underline">&diams;ひとこと</h4>
                            <p><?php the_field( 'word' ); ?></p>
                        </div>
                    <?php endif; ?>                    
                </div>
                <!-- 表 -->
                <div class="p-workDetails-info__right">
                    <!-- その他情報 -->
                    <table>
                        <!-- 担当領域 -->
                        <?php if ( get_field( 'region' ) ) : ?>
                            <tr>
                                <th>担当領域</th>
                                <td><?php the_field( 'region' ); ?></td>
                            </tr>
                        <?php endif; ?>
                        <!-- ページ数 -->
                        <?php if ( get_field( 'page' ) ) : ?>
                            <tr>
                                <th>ページ数</th>
                                <td><?php the_field( 'page' ); ?>ページ</td>
                            </tr>
                        <?php endif; ?>  
                        <!-- サイズ -->
                        <?php if ( get_field( 'size' ) ) : ?>
                            <tr>
                                <th>サイズ</th>
                                <td><?php the_field( 'size' ); ?></td>
                            </tr>
                        <?php endif; ?>   
                        <!-- 工数 -->
                        <?php if ( get_field( 'cost' ) ) : ?>
                            <tr>
                                <th>工数</th>
                                <td><?php the_field( 'cost' ); ?>人月</td>
                            </tr>
                        <?php endif; ?>  
                        <!-- 使用言語・ツール -->
                        <?php if ( get_field( 'tool' ) ) : ?>
                            <tr>
                                <th>使用言語・ツール</th>
                                <td><?php the_field( 'tool' ); ?></td>
                            </tr>
                        <?php endif; ?>
                        <!-- github -->
                        <?php if ( get_field( 'github' ) ) : ?>
                            <tr>
                                <th>Github</th>
                                <td><a href="<?php the_field( 'github' ); ?>" target=”_blank”><?php the_field( 'github' ); ?></a></td>
                            </tr>
                        <?php endif; ?>
                        <!-- バナー掲載URL -->
                        <?php if ( get_field( 'bannerURL' ) ) : ?>
                            <tr>
                                <th>バナー掲載URL</th>
                                <td><a href="<?php the_field( 'bannerURL' ); ?>" target=”_blank”><?php the_field( 'bannerURL' ); ?></a></td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
            <div class="p-workDetails-btn">
                <!-- 作品URL-->
                <?php if ( get_field( 'url' ) ) : ?>
                    <a href="<?php the_field( 'url' ); ?>" class="c-btn c-btn--normal c-btn--ripple" target=”_blank”>サイトを見る</a>
                <?php endif; ?>
            </div>
            <!-- コンセプト -->
            <div class="p-workDetails-concept">
                <!-- 作品の概略 -->
                <?php if ( get_field( 'overview' ) ) : ?>
                    <div class="p-workDetails-concept__verticalLine"></div>
                    <div class="p-workDetails-concept__overview">
                        <?php the_field( 'overview' ); ?>
                    </div>
                <?php endif; ?> 
                <!-- コンセプトwrapper -->
                <div class="p-workDetails-concept__wrapper">
                    <!-- ポイント➀ -->
                    <?php if ( get_field( 'point-1-img' ) ) : ?>
                        <div class="p-workDetails-concept__item">
                            <!-- 画像エリア -->
                            <div class="p-workDetails-concept__left">
                                <?php if ( get_field( 'point-1-img' ) ) : ?>
                                    <?php 
                                        $image = get_field('point-1-img');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        }
                                    ?>
                                <?php endif; ?>
                            </div>
                            <!-- 説明エリア -->
                            <div class="p-workDetails-concept__right">
                                <?php if ( get_field( 'point-1-desc' ) ) : ?>
                                    <p class="p-workDetails-concept__desc"><?php the_field( 'point-1-desc' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- ポイント⓶ -->
                    <?php if ( get_field( 'point-2-img' ) ) : ?>
                        <div class="p-workDetails-concept__item">
                            <!-- 画像エリア -->
                            <div class="p-workDetails-concept__left">
                                <?php if ( get_field( 'point-2-img' ) ) : ?>
                                    <?php 
                                        $image = get_field('point-2-img');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        }
                                    ?>
                                <?php endif; ?>
                            </div>
                            <!-- 説明エリア -->
                            <div class="p-workDetails-concept__right">
                                <?php if ( get_field( 'point-2-desc' ) ) : ?>
                                    <p class="p-workDetails-concept__desc"><?php the_field( 'point-2-desc' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- ポイント⓷ -->
                    <?php if ( get_field( 'point-3-img' ) ) : ?>
                        <div class="p-workDetails-concept__item">
                            <!-- 画像エリア -->
                            <div class="p-workDetails-concept__left">
                                <?php if ( get_field( 'point-3-img' ) ) : ?>
                                    <?php 
                                        $image = get_field('point-3-img');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        }
                                    ?>
                                <?php endif; ?>
                            </div>
                            <!-- 説明エリア -->
                            <div class="p-workDetails-concept__right">
                                <?php if ( get_field( 'point-3-desc' ) ) : ?>
                                    <p class="p-workDetails-concept__desc"><?php the_field( 'point-3-desc' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- ポイント⓸ -->
                    <?php if ( get_field( 'point-4-img' ) ) : ?>
                        <div class="p-workDetails-concept__item">
                            <!-- 画像エリア -->
                            <div class="p-workDetails-concept__left">
                                <?php if ( get_field( 'point-4-img' ) ) : ?>
                                    <?php 
                                        $image = get_field('point-4-img');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        }
                                    ?>
                                <?php endif; ?>
                            </div>
                            <!-- 説明エリア -->
                            <div class="p-workDetails-concept__right">
                                <?php if ( get_field( 'point-4-desc' ) ) : ?>
                                    <p class="p-workDetails-concept__desc"><?php the_field( 'point-4-desc' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- ポイント⓹ -->
                    <?php if ( get_field( 'point-5-img' ) ) : ?>
                        <div class="p-workDetails-concept__item">
                            <!-- 画像エリア -->
                            <div class="p-workDetails-concept__left">
                                <?php if ( get_field( 'point-5-img' ) ) : ?>
                                    <?php 
                                        $image = get_field('point-5-img');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        }
                                    ?>
                                <?php endif; ?>
                            </div>
                            <!-- 説明エリア -->
                            <div class="p-workDetails-concept__right">
                                <?php if ( get_field( 'point-5-desc' ) ) : ?>
                                    <p class="p-workDetails-concept__desc"><?php the_field( 'point-5-desc' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>   
            </div>
            <div class="p-workDetails-btn">
                <a href="<?php the_permalink(10); ?>" class="c-link c-link--normal">作品一覧はこちら</a>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
