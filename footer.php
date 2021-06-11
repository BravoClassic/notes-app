<?php
session_start();
if(isset($_SESSION['id'])):
?>
    <script src="assets/js/app.js"></script>
<?php else: ?>
    <script src="assets/js/index.js"></script>
<?php endif; ?>
<script src="https://kit.fontawesome.com/2e803aa4a5.js" crossorigin="anonymous"></script>
</body>
</html>