<?php

include("init.php"); 

if(!$session->isSignedIn()){
	redirect("Login");
}else{
    $user = User::findById($session->userId);
}

$status = "";

if(isset($_POST['submit'])){
    
    $post = new Post();

        if($post){

            $post->title = $db->escapeString($_POST['title']);
            $post->cat_id = $_POST['cat_id'];
            $post->author = $_POST['author'];
            $post->keywords = $db->escapeString($_POST['keywords']);
            $post->description = $db->escapeString($_POST['description']);
            $post->created = date("Y-m-d H:i:s");

            $post->setFile($_FILES['post_img']);

            if($post->uploadPostImg()){

                $status = "<h3 align='center' style='background:green;padding:7px;'>Post Uploaded Successfully</h3>";

            }else{

            $status = join("<br>", $post->errors);

            }

        }else{

            $status = "<h3 align='center' style='background:red;padding:7px;'>Error posting</h3>";

    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/ipub_logo.png">
    
    <title>Add Post - Nigerian Cultural Arts Exchange</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    
    <!--Bootstrap Html5 Editor-->
    <link rel="stylesheet" href="../plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" />
    
    <!--Dropify-->
    <link rel="stylesheet" href="../plugins/bower_components/dropify/dist/css/dropify.min.css">
    
    <!--Form CSS-->
    <link href="../plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="../plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="../plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="../plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="../plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <script>
        window.onload = function(){
            setInterval(ajax, 10000);
        }
    </script>
   
</head>

<body>
    <!-- Preloader -->
   <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    
    <div id="wrapper">
        
        <!-- Navigation -->
        <?php include('layouts/head.php'); ?>
        <!-- Left navbar-header end -->
        
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Post</h4> 
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
    <div class="row">
        <div class="col-sm-12">

            <?php echo $status; ?>



            <div class="white-box">

                <form id="submit" class="form" action="" method="post" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Title</label>
                        <div class="col-10">
                            <input class="form-control" id="example-text-input" type="text" maxlength="50" name="title" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Category</label>
                        <div class="col-10">
                            <select class="form-control" name="cat_id">

                                <?php
                                    $categories = Category::findAll();

                                    foreach ($categories as $category):
                                ?>

                                <option value="<?php echo $category->id; ?>"> <?php echo $category->name; ?> </option>

                                <?php endforeach; ?>

                            </select>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Author</label>
                        <div class="col-10">
                            <input class="form-control" id="example-text-input" type="text" maxlength="30" name="author" value="<?php echo $user->fname; ?>" readonly>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Key Words</label>
                        <div class="col-10">
                            <input class="form-control" id="example-text-input" type="text" name="keywords" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="example-text-input" class="col-2 col-form-label">Description</label>
                        <textarea class="form-control textarea_editor" rows="15" placeholder="Enter text ..." name="description"></textarea>
                    </div>

                      <div class="col-sm-12 ol-md-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Upload Image</h3>
                            <label for="input-file-now">input file</label>
                            <input type="file" id="input-file-now" class="dropify" name="post_img" required />
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-success waves-effect waves-light m-r-10">Post</button>

                </form>

            </div>
        </div>
    </div>
    <!-- /.row -->
   
            </div>
            <!-- /.container-fluid -->
            
            <footer class="footer text-center"> 
                <?php include('layouts/foot.php'); ?>
            </footer>
            
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    
    
    <!--Dashboard-->
    <script src="js/dashboard1.js"></script>
    
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>

    <!--auto-save form to draft table-->
    <script>
        $(document).ready(function(){
            $('#submit').submit(ajax);
        });

        function ajax(){
            $.ajax({
                url : 'add_post_draft.php',
                type : 'POST',
                data : $('form').serialize(),
                success: function(data){
                    $('#status').html(data);
                }
            });
            return false;
        }
    </script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    
    <!--Morris JavaScript -->
    <script src="../plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="../plugins/bower_components/morrisjs/morris.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/jasny-bootstrap.js"></script>
    
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="../plugins/bower_components/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="../plugins/bower_components/html5-editor/bootstrap-wysihtml5.js"></script>
    <script>
    $(document).ready(function() {
        $('.textarea_editor').wysihtml5();
    });
    </script>
    
    <!-- jQuery file upload -->
    <script src="../plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
        
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
        // Used events
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
    
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../plugins/bower_components/switchery/dist/switchery.min.js"></script>
    <script src="../plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
    <script src="../plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="../plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>
    
    <script>
    jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
    });
    </script>
    
    <!--<script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Elite admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>-->
    
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    
</body>

</html>
