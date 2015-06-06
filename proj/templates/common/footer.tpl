<footer>
    <p>Copyright © 2015 Venn</p>
</footer>

<!-- jQuery -->
<script type="text/javascript" src="../../assets/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap core JavaScript-->
<script type="text/javascript" src="../../assets/frameworks/bootstrap/js/bootstrap.min.js"></script>


<!-- Metis Menu Plugin JavaScript -->
<script type="text/javascript" src="../../assets/frameworks/metisMenu/dist/metisMenu.min.js"></script>


<!-- Custom Theme JavaScript -->
<script type="text/javascript" src="../../assets/frameworks/sb-admin-2.js"></script>

<!-- Custom actions -->
<script type="text/javascript" src="../../assets/js/home-scripts.js"></script>

<!-- slide search field -->
<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js"></script>
<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.slide.js"></script>

<!-- drop down menus-->
<script type="text/javascript" src="../../assets/frameworks/bootstrap/js/dropdowns-enhancement.js"></script>

<!-- drop down menus-->
<script type="text/javascript" src="../../assets/frameworks/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript" src="../../assets/frameworks/jasny-bootstrap/jasny-bootstrap.js"></script>



<script>
    var base_url = "{$BASE_URL}";
</script>

{assign var=current_page value={$BASE_URL|cat:'pages/'}|explode:$smarty.server.REQUEST_URI}
{if strpos($current_page[1], 'home/home.php', 0)=== 0}
    <script type="text/javascript" src="../../js/posts/post.js"></script>
    <script type="text/javascript" src="../../js/posts/comments.js"></script>
    <script type="text/javascript" src="../../js/posts/votes.js"></script>
    <script type="text/javascript" src="../../js/users/home.js"></script>
    <script type="text/javascript" src="../../js/users/circles.js"></script>
    <script type="text/javascript" src="../../js/posts/report.js"></script>
{elseif strpos($current_page[1], 'users/profile.php', 0)=== 0}
    <script type="text/javascript" src="../../js/posts/votes.js"></script>
    <script type="text/javascript" src="../../js/posts/post.js"></script>
    <script type="text/javascript" src="../../js/posts/comments.js"></script>
    <script type="text/javascript" src="../../js/users/circles.js"></script
    <script type="text/javascript" src="../../js/posts/report.js"></script>>
{elseif strpos($current_page[1], 'users/tagview.php', 0)=== 0}
    <script type="text/javascript" src="../../js/posts/votes.js"></script>
    <script type="text/javascript" src="../../js/posts/post.js"></script>
    <script type="text/javascript" src="../../js/posts/report.js"></script>
    <script type="text/javascript" src="../../js/posts/comments.js"></script>
    <script type="text/javascript" src="../../js/users/circles.js"></script>
{elseif strpos($current_page[1], 'users/circles.php', 0)=== 0}
    <script type="text/javascript" src="../../js/posts/report.js"></script>
    <script type="text/javascript" src="../../js/users/circles.js"></script>
{/if}

</body>
</html>
