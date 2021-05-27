        <!-- .footer -->
        <footer id="p-footer" class="p-footer">
            <div class="p-footer-copyright">
                <small>COPYRIGHT &copy;2021 Takeaki ishida ALLRIGHTS RESERVED.</small>
            </div>
        </footer>
        <!-- /.footer -->
        <p id="page-top"><a href="#body"></a></p>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script src="<?= mypath(); ?>js/jquery.smooth-scroll.min.js"></script>
    <?php if(is_home()): ?>
        <!-- TOPのみ -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/multiscroll.js/0.2.2/jquery.multiscroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <?php endif; ?>
    <?php if( get_the_ID() == 10): ?>
        <!-- works一覧のみ -->
        <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
        <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
        <script src="<?= mypath(); ?>/js/works.js"></script>
    <?php endif; ?>
    <!-- 共通 -->
    <script src="<?= mypath(); ?>js/common.js"></script>
    <?php if(is_home()): ?>
        <!-- TOP画面のみ -->
        <script src="<?= mypath(); ?>js/top.js"></script>
    <?php endif; ?>
    <?php if( get_the_ID() == 14): ?>
        <!-- Aboutのみ -->
        <script src="<?= mypath(); ?>js/about.js"></script>
    <?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>