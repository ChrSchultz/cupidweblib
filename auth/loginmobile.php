<?php require_once('../auth/user.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" >

<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />

<title>Login</title>
<link rel="stylesheet" href="/mobile/css/jquery.mobile-1.2.1.css" />
<link rel="stylesheet" href="/mobile/css/jqm-docs.css" />
<link rel="stylesheet" href="/mobile/css/CuPID.css" />
<script src="/js/jquery-1.11.0.min.js"></script>
<script src="/js/jquery-migrate-1.2.1.min.js"></script>

<script src="/mobile/js/jqm-docs.js"></script>
<script src="/mobile/js/jquery.mobile-1.2.1.js"></script>

<script src="/js/iijslib.js" type="text/javascript"></script>
<script src="/js/cupidjslib.js" type="text/javascript"></script>

</head>

<body>
    <div data-role="page" class="type-home">
        <div data-role="content">
            <div class="content-secondary">
                <?php $user->loginmobile_form(); ?>
            </div>
        </div>
    </div>
</body>

</html>
