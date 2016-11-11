<html>
<head>
    <title>CodeIgniter Ratchet Websocket using jQuery</title>
    <script type="text/javascript">
        var BASE_URL = "<?php echo base_url(); ?>";
        var Broadcast = {
            POST : "<?php echo POST; ?>",
            BROADCAST_URL : "<?php echo BROADCAST_URL; ?>",
            BROADCAST_PORT : "<?php echo BROADCAST_PORT; ?>"
        };
    </script>
    <script type="text/javascript" src="http://localhost/codeigniter3/assets/js/jquery-2.1.1.js" ></script>
    <script type="text/javascript" src="http://localhost/codeigniter3/assets/app/Connection2.js" ></script>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href=<?php echo base_url("bootstrap/css/bootstrap.min.css");?>>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href=<?php echo base_url("dist/css/AdminLTE.min.css"); ?>>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href=<?php echo base_url("dist/css/skins/_all-skins.min.css"); ?>>
    <!-- iCheck -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/iCheck/flat/blue.css"); ?>>
    <!-- Morris chart -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/morris/morris.css"); ?>>
    <!-- jvectormap -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/jvectormap/jquery-jvectormap-1.2.2.css"); ?>>
    <!-- Date Picker -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/datepicker/datepicker3.css"); ?>>
    <!-- Daterange picker -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/daterangepicker/daterangepicker.css"); ?>>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"); ?>>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition skin-blue sidebar-mini">


<!-- Chat box -->
<div class="box box-success">
    <div class="box-header">
        <i class="fa fa-comments-o"></i>

        <h3 class="box-title">Chat</h3>

        <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
            <div class="btn-group" data-toggle="btn-toggle">
                <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
            </div>
        </div>
    </div>
    <div class="box-body chat" id="chat-box">
        <!-- chat item -->
        <div class="item" id="messages3">
            <img src="<? echo base_url("dist/img/user4-128x128.jpg")?>" alt="user image" class="online">

            <?php
            foreach ($posts as $post) {
                ?>
                <div class="messsage" id="messages">
                    <a href="#" class="name" id="messages">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                        Mike Doe
                    </a>
                    <span><?php echo  $post->postText ?></span>
                </div>
            <?php
            }
            ?>

            <!-- /.attachment -->
        </div>
        <!-- /.item -->
    </div>
    <!-- /.chat -->
    <div class="box-footer">

            <form class="input-group" name="addPostForm">
                <input type="text" name="postText" id="postText" class="form-control" placeholder="Type message..."/>
                <div class="input-group-btn">
                    <input type="submit" name="submit" id="submit"  class="btn btn-success"/>

                </div>

            </form>

    </div>
</div>
<!-- /.box (chat box) -->

<br><br><br>
Footer

</body>
<script type="text/javascript">

    var conn = new Connection2(Broadcast.BROADCAST_URL+":"+Broadcast.BROADCAST_PORT);

    $(document).ready(function(){

        $("#submit").on("click", function(e){

            e.preventDefault();

            $.ajax({
                type : "POST",
                url : BASE_URL + "addPost",
                dataType : "json",
                data : { postText : $("#postText").val() }
            }).done(function(data){

                if(data.status == "success")
                {
                    var typeData = { broadType : Broadcast.POST, data : data.postData};
                    conn.sendMsg(typeData);
                }

                $("#postText").val("");
            });




        });


    });

</script>

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src=<?php echo base_url("plugins/jQuery/jquery-2.2.3.min.js"); ?>></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src=<?php echo base_url("/bootstrap/js/bootstrap.min.js"); ?>></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src=<?php echo base_url("/plugins/morris/morris.min.js"); ?>></script>
<!-- Sparkline -->
<script src=<?php echo base_url("/plugins/sparkline/jquery.sparkline.min.js"); ?>></script>
<!-- jvectormap -->
<script src=<?php echo base_url("/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"); ?>></script>
<script src=<?php echo base_url("/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"); ?>></script>
<!-- jQuery Knob Chart -->
<script src=<?php echo base_url("/plugins/knob/jquery.knob.js"); ?>></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src=<?php echo base_url("plugins/daterangepicker/daterangepicker.js"); ?>></script>
<!-- datepicker -->
<script src=<?php echo base_url("plugins/datepicker/bootstrap-datepicker.js"); ?>></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=<?php echo base_url("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"); ?>></script>
<!-- Slimscroll -->
<script src=<?php echo base_url("plugins/slimScroll/jquery.slimscroll.min.js"); ?>></script>
<!-- FastClick -->
<script src=<?php echo base_url("plugins/fastclick/fastclick.js"); ?>></script>
<!-- AdminLTE App -->
<script src=<?php echo base_url("dist/js/app.min.js"); ?>></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=<?php echo base_url("/dist/js/pages/dashboard.js"); ?>></script>
<!-- AdminLTE for demo purposes -->
<script src=<?php echo base_url("dist/js/demo.js"); ?>></script>


</html>
