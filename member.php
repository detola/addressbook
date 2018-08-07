    <?php include ('core/init.php'); ?>
    <?php 
      $db = new Database;

      //Run Query
      $db->query("SELECT * FROM `profile`");

      //Assign Result Set 
      $members = $db->resultset();
     ?>
    <div class="row" id="mem">
      <div class="large-12 columns">
        <table>
          <thead>
            <tr>
              <th width="200">Name</th>
              <th width="130">Phone</th>
              <th width="200">Email</th>
              <th width="250">Address</th>
              <th width="100">Occupation</th>
              <th width="150">Actions</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($members as $member) : ?>
            <tr>
              <td><a href="contact.html"><?php echo $member->title.' '.$member->first_name.' '.$member->last_name; ?></a></td>
              <td><?php echo $member->phone; ?></td>
              <td><?php echo $member->email; ?></td>
              <td>
                <ul>
                  <li><?php echo $member->foreign_add; ?></li>
                  <li><?php if ($member->permanent_add) echo $member->permanent_add; ?></li>
                </ul>
              </td>
              <td><?php echo $member->occupation; ?></td>
              <td>
                <ul class="button-group">
                  <li>
                    <a href="#" class="button tiny" data-reveal-id="editModal<?php echo $member->id; ?>" data-member-id="<?php echo $member->id; ?>">Edit</a>
                    <div class="reveal-modal editModal" id="editModal<?php echo $member->id; ?>" mid="<?php echo $member->id; ?>" data-reveal>
                      <h2>Edit Member</h2>
          <form id="editMember" action="#" method="post">
          <div class="row">
             <div class="large-3 columns">
              <label >Title 
                <select name="title" value="<?php echo $member->title; ?>" >
                  <option value="Dr" <?php if($member->title == 'Dr'){echo 'selected';} ?>>Dr.</option>
                  <option value="Hon" <?php if($member->title == 'Hon'){echo 'selected';} ?>>Hon</option>
                  <option value="Mr" <?php if($member->title == 'Mr'){echo 'selected';} ?>>Mr.</option>
                  <option value="Mrs" <?php if($member->title == 'Mrs'){echo 'selected';} ?>>Mrs.</option>
                  <option value="Ms" <?php if($member->title == 'Ms'){echo 'selected';} ?>>Ms.</option>
                  <option value="Prof" <?php if($member->title == 'Prof'){echo 'selected';} ?>>Prof.</option>
                  <option value="Rev" <?php if($member->title == 'Rev'){echo 'selected';} ?>>Rev.</option>
                  <option value="Pst" <?php if($member->title == 'Pst'){echo 'selected';} ?>>Pst.</option>
                </select></label>
            </div>
            <div class="large-3 columns">
              <label >Last Name 
                <input  name="last_name" type="text" placeholder="Enter Last Name" value="<?php echo $member->last_name; ?>" /></label>
            </div>
             <div class="medium-3 columns">
              <label >First Name 
                <input name="first_name" type="text" placeholder="Enter First Name" value="<?php echo $member->first_name; ?>" /></label>
            </div>
             <div class="medium-3 columns">
              <label >Middle Name 
                <input name="middle_name" type="text" placeholder="Enter Middle Name" value="<?php echo $member->middle_name; ?>" /></label>
            </div>
          </div>

          <div class="row">
            <div class="large-2 columns">
              <label >Date of Birth
                <input name="dob" type="Date" placeholder="Date of Birth" value="<?php echo $member->dob; ?>" /></label>
            </div>
             <div class="large-2 columns">
              <label >Place of Birth
                <input name="place_of_birth" type="text" placeholder="Place of Birth" value="<?php echo $member->place_of_birth; ?>" /></label>
            </div>
             <div class="large-2 columns">
              <label >Sex
                 <select name="sex" >
                  <option value="Male" <?php if($member->sex == 'Male') {echo 'selected';} ?>>Male</option>
                  <option value="Female" <?php if($member->sex == 'Female') {echo 'selected';} ?>>Female</option>
                </select></label>
            </div>
             <div class="large-2 columns">
              <label >Marital Status
                <select name="marital_status">
                  <option>Select status</option>
                  <option value="Single" <?php if($member->marital_status == 'Single'){echo 'selected';} ?>>Single</option>
                  <option value="Married" <?php if($member->marital_status == 'Married'){echo 'selected';} ?>>Married</option>
                  <option value="Divorced" <?php if($member->marital_status == 'Divorced'){echo 'selected';} ?>>Divorced</option>
                  <option value="Widowed" <?php if($member->marital_status == 'Widowed'){echo 'selected';} ?>>Widowed</option>
                </select></label>
            </div>
             <div class="large-2 columns">
              <label >Phone No.
                <input name="phone" type="text" placeholder="Phone No." value="<?php echo $member->phone; ?>" /></label>
            </div>
             <div class="large-2 columns">
              <label >E-mail
                <input name="email" type="email" placeholder="E-mail" value="<?php echo $member->email; ?>" /></label>
            </div>
          </div>

          <div class="row">
            <div class="large-3 columns">
              <label >Height
                <input name="height" type="text" placeholder="Height" value="<?php echo $member->height; ?>" /></label>
            </div>
            <div class="large-3 columns">
              <label >Home Town
                <input name="home_town" type="text" placeholder="Home Town" value="<?php echo $member->home_town; ?>" /></label>
            </div>
            <div class="large-3 columns">
              <label >LGA
                <input name="lga" type="text" placeholder="LGA" value="<?php echo $member->lga; ?>" /></label>
            </div>
            <div class="large-3 columns">
              <label >State of Origin
                <input name="state_of_origin" type="text" placeholder="State of Origin" value="<?php echo $member->state_of_origin; ?>" /></label>
            </div>
          </div>

          <div class="row">
            <div class="large-6 columns">
              <label >Permanent Address
                <textarea name="permanent_add" placeholder="Enter Permanent Address"><?php echo $member->permanent_add; ?></textarea></label>
            </div>
            <div class="large-6 columns">
              <label >Foreign Address
                <textarea name="foreign_add" placeholder="Enter Foreign Address"><?php echo $member->foreign_add; ?></textarea></label>
            </div>
          </div>

          <div class="row">
            <div class="large-3 columns">
              <label >Occupation
                <input name="occupation" type="text" placeholder="Occupation" value="<?php echo $member->occupation; ?>" /></label>
            </div>
            <div class="large-3 columns">
              <label >Type of Business
                <input name="business_type" type="text" placeholder="Type of Business" value="<?php echo $member->business_type; ?>" /></label>
            </div>
            <div class="large-3 columns">
              <label >Type of Permit
                <input name="type_of_permit" type="text" placeholder="Type of Permit" value="<?php echo $member->type_of_permit; ?>" /></label>
            </div>
            <div class="large-3 columns">
              <label >Special Feature
                <input name="special_feature" type="text" placeholder="Special Feature" value="<?php echo $member->special_feature; ?>" /></label>
            </div>
          </div>

           <div class="row">
            <div class="large-3 columns">
              <label >Next of Kin 1
                <input name="next_of_kin" type="text" placeholder="Enter Next of Kin 1 Name" value="<?php echo $member->next_of_kin; ?>" /></label>
            </div>
            <div class="large-3 columns">
              <label >Next of Kin 1 Phone
                <input name="next_of_kin_tel" type="text" placeholder="Enter Next of Kin 2 Phone No." value="<?php echo $member->next_of_kin_tel; ?>" /></label>
            </div>
            <div class="large-3 columns">
              <label >Next of Kin 2
                <input name="next_of_kin1" type="text" placeholder="Enter Next of Kin 2 Name" value="<?php echo $member->next_of_kin1; ?>" /></label>
            </div>
            <div class="large-3 columns">
              <label >Next of Kin 2 Phone
                <input name="next_of_kin1_tel" type="text" placeholder="Enter Next of Kin 2 Phone No." value="<?php echo $member->next_of_kin1_tel; ?>" /></label>
            </div>
          </div>

          <div class="row">
            <div class="large-6 columns">
              <label >Next of Kin 1 Address
                <textarea name="next_of_kin_add" placeholder="Enter Next of Kin 1 Address"><?php echo $member->next_of_kin_add; ?></textarea></label>
            </div>
            <div class="large-6 columns">
              <label >Next of Kin 2 Address
                <textarea name="next_of_kin1_add" placeholder="Enter Next of Kin 2 Address" ><?php echo $member->next_of_kin1_add; ?></textarea>
                </label>
            </div>
          </div>
          <input name="id" type="hidden" value="<?php echo $member->id; ?>" />
          <input name="submit" type="submit" class="add-btn button right small" value="Edit Member" />
          <a class="close-reveal-modal">&#215;</a>
        </form>

                    </div>
                  </li>
                  <li>
                    <form action="#" id="deleteMember" method="post">
                      <input type="hidden" name="id" value="<?php echo $member->id; ?>"/>
                      <input type="submit" class="delete-btn button tiny [secondary alert success]" value="Delete">
                    </form>
                  </li>
                </ul>
              </td>
            </tr>


            <?php endforeach; ?>
            
          </tbody>
        </table>
      </div>
       
    </div>