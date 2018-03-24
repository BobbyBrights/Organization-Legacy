</div>
<footer class="footer">
	<div style="position: relative;"class="innerFooter"><span><a href="credits" class="creditsLink">Credits</a></span><span><a href="team" class="creditsLink">Our Team</a></span>
       
   
   </div>
    <div style="position: relative;"class="innerFooter"><span>Alex&nbsp;Taffe,&nbsp;Joshua&nbsp;Thomas,&nbsp;Shane&nbsp;Mitnick,&nbsp;Nikhil&nbsp;Behari</span><span>&copy;2015-<?php echo date("Y"); ?></span></div>

</footer>
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/bootstrap.min.js" data-no-instant></script>
<script>
    function addOverlayListener(){
        $('#bs-example-navbar-collapse-1').on('show.bs.collapse', function () {
            $("#overlay").css("display", "block");
        });
        $('#bs-example-navbar-collapse-1').on('hide.bs.collapse', function () {
            $("#overlay").css("display", "none");
        });
    }
</script><?php
if (!(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false))
{
    echo '<script src="/js/instantclick.min.js" data-no-instant></script>
<script data-no-instant>
    InstantClick.init();
</script>
<script>
    InstantClick.on("change", function () {
        addOverlayListener();
    });
</script>';
}?>

</body>

</html>