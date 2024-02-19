<!--Footer Area-->
<footer class="footer-area section-padding-footer">
    <div class="container">
        <div class="row">
            <?php
            if (is_active_sidebar('sidebar-footer')) {
                dynamic_sidebar('sidebar-footer');
            };
            ?>
        </div>
    </div>
</footer><!--/Footer Area-->

<!--Copyright Area-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col centered">
                <p>Copyright &copy; <?php echo date('Y');?> All Rights Reserved</p>
            </div>
        </div>
    </div>
</div><!--/Copyright Area-->
</div>

<?php wp_footer() ?>

</body>

</html>