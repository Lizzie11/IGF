<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        HelpDesk
        <small>Chat panel</small>
    </h1>
 </section>

<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">

</div>
<!-- /.row -->
<!-- Main row -->
<div class="row">
<!-- Left col -->
<section class="col-lg-7 connectedSortable">


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





</section>
<!-- /.Left col -->

</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>