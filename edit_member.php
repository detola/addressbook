<?php include('core/init.php'); ?>

<?php 
//Create DB Object
$db = new Database;

//Run Query
$db->query("UPDATE `profile` SET 
	title                   = :title,
	last_name				= :last_name,
	first_name				= :first_name,
	middle_name				= :middle_name,
	dob						= :dob,	
	place_of_birth			= :place_of_birth,
	sex						= :sex, 
	marital_status 			= :marital_status,
	phone 					= :phone, 
	email 					= :email, 
	height 					= :height, 
	home_town 				= :home_town, 
	lga 					= :lga, 
	state_of_origin 		= :state_of_origin, 
	permanent_add			= :permanent_add, 
	occupation 				= :foreign_add, 
	foreign_add				= :occupation, 
	business_type			= :business_type,
	type_of_permit 			= :type_of_permit,
	special_feature 		= :special_feature,
	next_of_kin				= :next_of_kin,
	next_of_kin_tel 		= :next_of_kin_tel,
	next_of_kin_add 		= :next_of_kin_add,
	next_of_kin1			= :next_of_kin1,
	next_of_kin1_tel 		= :next_of_kin1_tel,
	next_of_kin1_add		= :next_of_kin1_add
							WHERE id=:id");
	

//Bind Values 
$db->bind(':title', $_POST['title']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':middle_name', $_POST['middle_name']);
$db->bind(':dob', $_POST['dob']);
$db->bind(':place_of_birth', $_POST['place_of_birth']);
$db->bind(':sex', $_POST['sex']);
$db->bind(':marital_status', $_POST['marital_status']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':email', $_POST['email']);
$db->bind(':height', $_POST['height']);
$db->bind(':home_town', $_POST['home_town']);
$db->bind(':lga', $_POST['lga']);
$db->bind(':state_of_origin', $_POST['state_of_origin']);
$db->bind(':permanent_add', $_POST['permanent_add']);
$db->bind(':foreign_add', $_POST['foreign_add']);
$db->bind(':occupation', $_POST['occupation']);
$db->bind(':business_type', $_POST['business_type']);
$db->bind(':type_of_permit', $_POST['type_of_permit']);
$db->bind(':special_feature', $_POST['special_feature']);
$db->bind(':next_of_kin', $_POST['next_of_kin']);
$db->bind(':next_of_kin_tel', $_POST['next_of_kin_tel']);
$db->bind(':next_of_kin_add', $_POST['next_of_kin_add']);
$db->bind(':next_of_kin1', $_POST['next_of_kin1']);
$db->bind(':next_of_kin1_tel', $_POST['next_of_kin1_tel']);
$db->bind(':next_of_kin1_add', $_POST['next_of_kin1_add']);
$db->bind(':id', $_POST['id']);


if($db->execute()) {
	echo "Member was updated!";
}
else{
	echo "Could not update member";
}




 ?>