<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/custom1.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
      <div class="large-6 columns">
        <h1>Assoc. Membership</h1>
      </div>
      <div class="large-6 columns">
        <a href="#" class="add-btn button right small" data-reveal-id="addModal">Add Contact</a>
        <div class="reveal-modal" id="addModal" data-reveal>
          <h2>Add Member</h2>
          <form id="addMember" action="#" method="post">
          <div class="row">
             <div class="large-3 columns">
              <label >Title 
                <select name="title" >
                  <option >Select title</option>
                  <option value="Dr">Dr.</option>
                  <option value="Hon">Hon</option>
                  <option value="Mr">Mr.</option>
                  <option value="Mrs">Mrs.</option>
                  <option value="Ms">Ms.</option>
                  <option value="Prof">Prof.</option>
                  <option value="Rev">Rev.</option>
                  <option value="Pst">Pst.</option>
                </select></label>
            </div>
            <div class="large-3 columns">
              <label >Last Name 
                <input  name="last_name" type="text" placeholder="Enter Last Name" /></label>
            </div>
             <div class="medium-3 columns">
              <label >First Name 
                <input name="first_name" type="text" placeholder="Enter First Name" /></label>
            </div>
             <div class="medium-3 columns">
              <label >Middle Name 
                <input name="middle_name" type="text" placeholder="Enter Middle Name" /></label>
            </div>
          </div>

          <div class="row">
            <div class="large-2 columns">
              <label >Date of Birth
                <input name="dob" type="Date" placeholder="Date of Birth" /></label>
            </div>
             <div class="large-2 columns">
              <label >Place of Birth
                <input name="place_of_birth" type="text" placeholder="Place of Birth" /></label>
            </div>
             <div class="large-2 columns">
              <label >Gender
                 <select name="sex" >
                  <option >Select gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select></label>
            </div>
             <div class="large-2 columns">
              <label >Marital Status
                <select name="marital_status">
                  <option >Select status</option>
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Widowed">Widowed</option>
                </select></label>
            </div>
             <div class="large-2 columns">
              <label >Phone No.
                <input name="phone" type="text" placeholder="Phone No." /></label>
            </div>
             <div class="large-2 columns">
              <label >E-mail
                <input name="email" type="email" placeholder="E-mail" /></label>
            </div>
          </div>

          <div class="row">
            <div class="large-3 columns">
              <label >Height
                <input name="height" type="text" placeholder="Height" /></label>
            </div>
            <div class="large-3 columns">
              <label >Home Town
                <input name="home_town" type="text" placeholder="Home Town" /></label>
            </div>
            <div class="large-3 columns">
              <label >LGA
                <input name="lga" type="text" placeholder="LGA" /></label>
            </div>
            <div class="large-3 columns">
              <label >State of Origin
                <input name="state_of_origin" type="text" placeholder="State of Origin" /></label>
            </div>
          </div>

          <div class="row">
            <div class="large-6 columns">
              <label >Permanent Address
                <textarea name="permanent_add" placeholder="Enter Permanent Address"></textarea></label>
            </div>
            <div class="large-6 columns">
              <label >Foreign Address
                <textarea name="foreign_add" placeholder="Enter Foreign Address"></textarea></label>
            </div>
          </div>

          <div class="row">
            <div class="large-3 columns">
              <label >Occupation
                <input name="occupation" type="text" placeholder="Occupation" /></label>
            </div>
            <div class="large-3 columns">
              <label >Type of Business
                <input name="business_type" type="text" placeholder="Type of Business" /></label>
            </div>
            <div class="large-3 columns">
              <label >Type of Permit
                <input name="type_of_permit" type="text" placeholder="Type of Permit" /></label>
            </div>
            <div class="large-3 columns">
              <label >Special Feature
                <input name="special_feature" type="text" placeholder="Special Feature" /></label>
            </div>
          </div>

           <div class="row">
            <div class="large-3 columns">
              <label >Next of Kin 1
                <input name="next_of_kin" type="text" placeholder="Enter Next of Kin 1 Name" /></label>
            </div>
            <div class="large-3 columns">
              <label >Next of Kin 1 Phone
                <input name="next_of_kin_tel" type="text" placeholder="Enter Next of Kin 2 Phone No." /></label>
            </div>
            <div class="large-3 columns">
              <label >Next of Kin 2
                <input name="next_of_kin1" type="text" placeholder="Enter Next of Kin 2 Name" /></label>
            </div>
            <div class="large-3 columns">
              <label >Next of Kin 2 Phone
                <input name="next_of_kin1_tel" type="text" placeholder="Enter Next of Kin 2 Phone No." /></label>
            </div>
          </div>

          <div class="row">
            <div class="large-6 columns">
              <label >Next of Kin 1 Address
                <textarea name="next_of_kin_add" placeholder="Enter Next of Kin 1 Address"></textarea></label>
            </div>
            <div class="large-6 columns">
              <label >Next of Kin 2 Address
                <textarea name="next_of_kin1_add" placeholder="Enter Next of Kin 2 Address"></textarea>
                </label>
            </div>
          </div>
          <input name="submit" type="submit" class="add-btn button right small" value="Add Member" />
          <a class="close-reveal-modal">&#215;</a>
        </form>
        </div>

       

    </div>

    <div id="loaderImage">
      <img src="img/ajax-loader.gif">
    </div>

    <div id="pageContent" class="jqueryOptions"></div>
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <footer id="footer">
      <div id="footer-inner">
        <p >Made with <span style="font-size:100%; color:red;">&hearts;</span> by Detola.</p>
      </div>
    </footer>
  </body>
</html>
