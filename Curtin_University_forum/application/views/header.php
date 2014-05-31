<!DOCTYPE HTML>
<html>
    <head>
        <title>Curtin University Forum</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url() . 'css/bootstrap.min.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/bootstrap.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/styles.css' ?>" rel = "stylesheet">
        <link href="<?php echo base_url() . 'css/dashboardNew.css' ?>" rel = "stylesheet">
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <script>
            function myFunction()
            {
                $(".menuItem").click(function() {
                    var myURL = $(this).attr("mref");

                    $.ajax({
                        type: "POST",
                        url: myURL,
                        success: function(data) {
                            $('#workingspace').html(data);

                        }
                    });
                    return true;
                });
            }
            $(document).ready(myFunction);
        </script>            
    </head>

    <body>

        <!--Navigation bar-->
        <div class = "navbar navbar-inverse navbar-static-top ">
            <div class = "container">

                <div class = "navbar-brand">Curtin University Forum</div>
                <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>

                <div class = "collapse navbar-collapse navHeaderCollapse">
                    <ul class = "nav navbar-nav navbar-right">
                        <li class = "active"><a class ="menuItem" href ='<?php echo base_url() . "main/dashboard" ?>'><span class = "glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a class ="menuItem" href ='<?php echo base_url() . "main/post_problem" ?>'><span class="glyphicon glyphicon-th-list"></span> Post a Problem</a></li>
                        <li><a class ="menuItem" href ='<?php echo base_url() . "main/share_idea" ?>'><span class="glyphicon glyphicon-th-large"></span> Share an Idea</a></li>
                        <li><a href = "#"><span class="glyphicon glyphicon-bell"></span> Notifications</a></li>
                        <li><a href = "#"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
                        <li class = "dropdown">

                            <a href = "#dropdown-menu" class = "dropdown-toggle" data-toggle = "dropdown"><b class = "caret"></b><span class="glyphicon glyphicon-user"></span></a>
                            <ul class = "dropdown-menu">
                                <li><a href = "#profile"data-toggle="modal">My profile</a></li> 
                                <li><a href = "#">Sign Off</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>