<!--new-->
<html>
    <head>
        <title>The Curtin Forum</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href = "css/bootstrap.min.css" rel = "stylesheet">
        <link href = "css/styles.css" rel = "stylesheet">
        <link href = "css/bootstrap.css" rel = "stylesheet">
    </head>
    <body>

        <div class="container">
            <div>
                <h3>Common room facility problem</h3>
                <p><img src="img/croom.jpg" height="200" width="280"></p>
                <p>Please increase number of common rooms as there only limited number of common roos and its not adequate</p>
                <h4>Vote this post</h4>
                <form>
                 
                <p><input type="image" id="up" src="img/up.png" id="countButtonUp">
                <input type="image" id="down" name="down" src="img/down.png" alt="Submit"></p>
                           
                 <input type="button" value="Count" id="countButtonUp" />
                <p>The button was pressed <span id="displayCountUp">0</span> times.</p>  
 
             
                <script type="text/javascript">
                  var countU = 0;
                  var countD = 0;
                  var buttonUp = document.getElementById("countButtonUp");
                  var buttonDown = document.getElementById("countButtonDown");
                  var displayUp = document.getElementById("displayCountUp");
                  var displayDown = document.getElementById("displayCountDown");

                buttonUp.onclick = function(){
                  countU++;
                  displayUp.innerHTML = countU;
                      }
                      
                buttonDown.onclick = function(){
                  countD--;
                  displayDown.innerHTML = countU;
                      }
                </script>
                
                <p><a href="#">Load Previous Comments</p>
                <p><a class="btn btn-success" href="#contact" data-toggle="modal" >Comment</a></p>
                 
                </form>
            </div>
        </div>


        <div class = "modal fade" id = "contact">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <p>Your Solution</p>
                    </div>
                    <div class = "modal-body">
                        <p><textarea rows="4" cols="50"/></textarea></p>
                    </div>
                    <div class = "modal-footer">
                        <a class ="btn btn-default" data-dismiss = "modal">Submit</a>
                        <a class ="btn btn-primary" data-dismiss = "modal">Close</a>
                    </div>
                </div>
            </div>
        </div>

        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src = "js/bootstrap.js"></script>
    </body>
</html>