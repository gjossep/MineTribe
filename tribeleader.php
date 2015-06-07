<?php 
require_once("models/config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>tribeleader</title>
	<!-- Add Any other css you want here -->
	<link href="css/tribeleader/tribeleader.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="chatjs-gh-pages/stylesheets/pygment_trac.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<!-- chatjs requirements -->
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="chatjs-gh-pages/ChatJs/js/jquery.autosize.js"></script>
	<!-- chatjs files-->
	<script src="chatjs-gh-pages/ChatJs/js/jquery.chatjs.utils.js"></script>
	<script src="chatjs-gh-pages/ChatJs/js/jquery.chatjs.adapter.servertypes.js"></script>
	<script src="chatjs-gh-pages/ChatJs/js/jquery.chatjs.adapter.js"></script>
	<script src="chatjs-gh-pages/ChatJs/js/jquery.chatjs.adapter.demo.js"></script>
	<script src="chatjs-gh-pages/ChatJs/js/jquery.chatjs.window.js"></script>
	<script src="chatjs-gh-pages/ChatJs/js/jquery.chatjs.messageboard.js"></script>
	<script src="chatjs-gh-pages/ChatJs/js/jquery.chatjs.userlist.js"></script>
	<script src="chatjs-gh-pages/ChatJs/js/jquery.chatjs.pmwindow.js"></script>
	<script src="chatjs-gh-pages/ChatJs/js/jquery.chatjs.friendswindow.js"></script>
	<script src="chatjs-gh-pages/ChatJs/js/jquery.chatjs.controller.js"></script>
	<link rel="stylesheet" href="chatjs-gh-pages/ChatJs/css/jquery.chatjs.css" />
	<script type="text/javascript">
        $(function () {
            $.chat({
                // your user information
                userId: 1,
                // id of the room. The friends list is based on the room Id
                roomId: 1,
                // text displayed when the other user is typing
                typingText: ' is typing...',
                // text displayed when there's no other users in the room
                emptyRoomText: "There's no one around here. You can still open a session in another browser and chat with yourself :)",
                // the adapter you are using
                chatJsContentPath: '/Chatjs/',
                adapter: new DemoAdapter()
            });
        });
    </script>
	<?php require('phpfiles/head.php'); ?>
	</head>

	<body>
    <?php require('phpfiles/header.php'); ?>
    <div class="tribe">
      <h1>
        <center>
          Tribe Leaderboards
        </center>
      </h1>
    </div>
            
    </div>
    <script src="chatjs-gh-pages/javascripts/scale.fix.js"></script>
    <?php require('phpfiles/footer.php'); ?>
</body>
</html>
