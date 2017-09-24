<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Centacare Schedule</title>

    <link href="css/jquery-ui.css" rel="stylesheet" />
    <link href="css/semantic.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="css/styles.css" />
    <link type="text/css" rel="stylesheet" href="css/menustyle.css"/>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link href="css/jquery-ui.theme.css" rel="stylesheet" />

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/semantic.js"></script>
    <script src="js/jquery-ui.js"></script>


    <style>
        #gallery {
            float: left;
            min-width: 93%;
            min-height: 12em;
        }

        .gallery.custom-state-active {
            background: #eee;
        }

        .gallery li {
            height:100px;
            padding: 0.4em;
            margin: 0 0.4em 0.4em 0;
            text-align: center;
        }

            .gallery li h5 {
                margin: 0 0 0.4em;
                cursor: move;
            }

            .gallery li a {
                float: right;
            }

                .gallery li a.ui-icon-zoomin {
                    float: left;
                }

            .gallery li img {
                width: 100%;
                cursor: move;
            }

        #trash {
            width: 23%;
            height: 100%;
            min-height: 35em;
            padding: 1%;
        }

            #trash h4 {
                line-height: 16px;
                margin: 0 0 0.4em;
            }

                #trash h4 .ui-icon {
                    float: left;
                }

            #trash .gallery h5 {
                display: none;
            }
    </style>
</head>

<body>
     <div class="container" id="header">
        <header class="row" data-spy="affix" data-offset-top="197">
            <div class="col-md-7"><img src="images/logo.png" /></div>

          <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation" style="float:left">
              <ul class="nav navbar-nav menu">

                <div class="dropdown">
              <button class="dropbtn">Activity</button>
                <div class="dropdown-content">
                  <a href="schedule.php">Schedule Activity</a>
                    <a href="#">Edit Activity</a>
                </div>
              </div>

                <div class="dropdown">
                <button class="dropbtn">Client</button>
                <div class="dropdown-content">
                  <a href="Client Interest.php">Add Client</a>
                    <a href="#">Edit Client</a>
                </div>
              </div>

                <div class="dropdown">
                <button class="dropbtn">Administrator</button>
                <div class="dropdown-content">
                    <a name="signup" data-toggle="modal" data-target="#myModal" type="button">Sign Up</a>
                    <a href="Logout.php" >Log Out</a>
                </div>
              </div>
          </ul>
              </nav>


        </header>
    </div>
    <div class="container">
        <!-- Nav tabs -->

                <div class="schedulespace">
                    <div id="left">
                    <div id="filters">
                        <form id='form1'>
                        <img src="images/u38.png" /><br>
                        <label>File number<label>
                        <input type = text name= fno id = "fno"><br>

                        <label> Mobility and Wellness</label><br>
                        <select  id = 'mobility'>
                          <option value =""> Please select the mobility and Wellness Condition</option>
                <option value ="Independent">Independent</option>
              <option value ="Requires Supervision">Requires Supervision</option>
                <option value="Requires Assistance">Requires Assistance</option>
              <option value="Falls Risk">Falls Risk</option>
              <option value="Requires assistance in the event of disaster or pandemic">Requires assistance in the event of disaster or pandemic</option>
            </select><br>
            <label> Interest Field</label><br>
            <select id='interestcategory'>
              <option> Please select the interest field</option>
              <option value ="IntresComputing">Computing</option>
              <option value ="IntresLiteratyarts">Literaty arts</option>
              <option value ="IntresGames">Games</option>
              <option value ="IntresPerforming">Performing Arts</option>
              <option value ="IntresLeisure">Leisure</option>
              <option value ="IntresVisualArts">Visual Arts</option>
              <option value ="IntresHairBeauty">Hair/Beauty</option>
              <option value ="IntresMenGirlShed">Men's Shed/Girls' Shed</option>
              <option value ="IntresPhysicalActivity">Physical Activity</option>
              <option value ="IntresCrafts">Crafts</option>
              <option value ="IntresNaturalTherapies">Natural Therapies</option>
              <option value ="IntresOther">Other</option>
            </select><br>
            <label> Detailed Interest</label><br>
            <select id="interest_first">
                <option> Please select the detailed interest</option>
            </select>
            <select class="subcategory" id="Computing">
                  <option>Games</option>
                <option>Email</option>
                  <option>Internet</option>
              </select>
              <select class="subcategory" id="Literatyarts">
                  <option>Poetry</option>
                <option>Novels</option>
                  <option>Short Stories</option>
              </select>
              <select class="subcategory" id="Games">
                  <option>Bingo</option>
                <option>Cards</option>
                  <option>Chess/Checkers</option>
                  <option>Jigsaws</option>
                  <option>Trivia</option>
                  <option>World puzzles</option>
              </select>
              <select class="subcategory" id="Performing">
                  <option>Concerts/Music</option>
                <option>Dance/Ballet</option>
                  <option>Opera</option>
                  <option>Plays</option>
                <option>Singing</option>
                  <option>Theatre/Drama</option>
              </select>
              <select class="subcategory" id="Leisure">
                  <option>Eating Out</option>
                <option>Films/Movies</option>
                  <option>Galleries/Museums</option>
                  <option>Outings</option>
                <option>Picnics</option>
                  <option>Shopping</option>
              </select>
              <select class="subcategory" id="VisualArts">
                  <option>Architecture</option>
              <option>Drawing</option>
              <option>Fashion</option>
              <option>Painting</option>
              <option>Photography</option>
              <option>Pottery/Sculpture</option>
              </select>
              <select class="subcategory" id="HairBeauty">
                  <option>Hairdressing</option>
              <option>Facials</option>
              <option>Manicures</option>
              <option>Pedicures</option>
              </select>
              <select class="subcategory" id="MenGirlShed">
                  <option>Men's Shed</option>
              <option>Girl's Shed</option>
              <option>Bicycle Repairs</option>
              <option>Framing</option>
              <option>Metal Work</option>
              <option>Wood Work</option>
              </select>
              <select class="subcategory" id="PhysicalActivity">
                  <option>Fishing</option>
              <option>Gardening</option>
              <option>Golf</option>
              <option>Lawn Bowls</option>
              <option>Sailing/Boating</option>
              <option>Snooker</option>
              <option>Swimming</option>
              <option>Tai Chi</option>
              <option>Tennis</option>
              <option>Ten Pin Bowling</option>
              <option>Walking</option>
              <option>Yoga</option>
              </select>
              <select class="subcategory" id="Crafts">
                  <option>Card Making</option>
              <option>Crochet</option>
              <option>Craftwork</option>
              <option>Jewellery Making</option>
              <option>Knitting</option>
              <option>Needlework</option>
              </select>
              <select class="subcategory" id="NaturalTherapies">
                  <option>Aromatherapy</option>
              <option>Massage</option>
              <option>Meditation</option>
              <option>Relaxation</option>
              </select>
              <select class="subcategory" id="Other">
                  <option>Cooking</option>
              <option>Flower Arranging</option>
              <option>Education</option>
              <option>Languages</option>
              <option>Model Building</option>
              <option>Volunteering</option>
              </select>
              <br>
              <br>
              <button name="search" id ="search"> Search </button>
                </form>

                    </div>
                    <div class="ui-widget ui-helper-clearfix" id="namecards">
                        <ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
                        </ul>
                    </div>
                    </div>
                        <div class="groups">
                            <div id="add">
                                <img src="images/plusinCircle.png" />
                            </div>
                            <div class="groups" id="addingarea">

                            </div>
                        </div>
                        <div id="buttonset">
                            <button id="save" value="save">
                            <button id="cancel" class="button" type="button">Cancel</button>
                        </div>
                    </div>
                    <div id="makeschedule"></div>
                </div>
            </div>
        </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="jumbotron">
        <p>© 2016 Centacare</p>
    </footer>
    <script type="text/javascript">
       $(document).ready(function(){
          $('#form1').submit(function(e){
              e.preventDefault();
          });
          $('.subcategory').hide();
       $("#interestcategory").change(function(){
          var index = $("#interestcategory").get(0).selectedIndex-1;
          $('#interest_first').hide();
          $('.subcategory').hide();
          $('.subcategory').eq(index).show();
        });

       $("#save").click(function(){
          var info = $('#trash b').text();
          var list = info.split(" ");
          list.pop();
          var activityName = $('#act_name').val();
          var activityTime = $('#time').val();
          var activityLocation = $('#loc').val();
          var activityStaff =$('#stuff').val();

        });


       $("#search").click(function(){
          var mobility = $('#mobility').val();
          var interestField = $('#interestcategory').val();
          var subInterest;
          if (interestField == 'IntresComputing'){
              subInterest = $("#Computing option:selected").text();
          }
          if (interestField == 'IntresOther'){
              subInterest = $("#Other option:selected").text();
          }
          if (interestField == 'IntresCrafts'){
              subInterest = $("#Crafts option:selected").text();
          }
          if (interestField == 'IntresLeisure'){
              subInterest = $("#Leisure option:selected").text();
          }
          if (interestField == 'IntresPerforming'){
              subInterest = $("#Performing option:selected").text();
          }
          if (interestField == 'IntresGames'){
              subInterest = $("#Games option:selected").text();
          }
          if (interestField == 'IntresLiteratyarts'){
              subInterest = $("#Literatyarts option:selected").text();
          }
          if (interestField == 'IntresNaturalTherapies'){
              subInterest = $("#NaturalTherapies option:selected").text();
          }
          if (interestField == 'IntresPhysicalActivity'){
              subInterest = $("#PhysicalActivity option:selected").text();
          }
          if (interestField == 'IntresHairBeauty'){
              subInterest = $("#HairBeauty option:selected").text();
          }
          if (interestField == 'IntresVisualArts'){
              subInterest = $("#VisualArts option:selected").text();
          }
          if (interestField == 'IntresMenGirlShed'){
              subInterest = $("#MenGirlShed option:selected").text();
          }
          calldata(mobility,interestField,subInterest);
       });
      });


     function calldata(mobility,interestField,subInterest){

        $.ajax({

                 url: "https://drwatson.uqcloud.net/final/search.php",
                 type: 'POST',
                 callback: '?',
                 dataType: 'json',
                 data: {'mobi':mobility,'interest':interestField,'sub':subInterest},
                 success: function(a) {
                                        passData(a);
                                       },
                 error: function (xhr, ajaxOptions, thrownError) {
                                    alert(xhr.status);
                                    alert(thrownError);
                                }
                });
                            }

    function passData(a){
      for (var i=0; i< a.length;i++){
        name = a[i]['ClientName'];
        dob = a[i]['D.O.B'];
        fno = a[i]['FileNo'];
        namecard(name,dob,fno)
      }
    }
    function namecard(name,dob,fno){
      $("ul#gallery").empty();
      var namecard = "<li class='ui-widget-content ui-corner-tr'><div><p id = 'name' class = 'ui-widget-header'>"+name+"</p><br><p>D.O.B: "+dob+"</p><br><p>File No.: <b>"+fno+" </b></p><br></div></li>";
      namecardcss();
      $("ul#gallery").append(namecard);

    }
    function namecardcss(){
      $("ul#gallery>li").css({
        "border": "1px solid black",
        "width": "148 px",
        "line-height":"70%"
    });
    }



  </script>

</body>
</html>
