$(document).ready(function(){
	//Show loader image
	$('#loaderImage').show();

	showMembers();
		
	
	//Add member
	$(document).on('submit', '#addMember', function(){
		//Show Loader Image
		$('#loaderImage').show();

		//Post data from form
		$.post("add_member.php", $(this).serialize())
		.done(function(data){
			console.log(data);
			$('#addModal').foundation('reveal', 'close');
			showMembers();
		});
		return false;
	});

	//Edit Member
	$(document).on('submit', '#editMember', function(){
		$('#loaderImage').show();

		//Post data from Editted Form
		$.post("edit_member.php", $(this).serialize())
		.done (function(data){
			console.log(data);
			alert("Member Editted");
			$('.editModal').foundation('reveal', 'close');
			showMembers();
		});
		return false;
	});

	//Delete Member 
	$(document).on('submit','#deleteMember', function(){
		$('loaderImage').show();

		$.post("delete_member.php", $(this).serialize())
		.done(function(data){
			console.log(data);
			showMembers();
		});
	});
});




function showMembers(){
	console.log('Showing Members...');
	setTimeout("$('#pageContent').load('member.php', function(){$('loaderImage').hide();}), 3000");
}


//Close Modal
$(document).on('click', 'close-reveal-modal', function(){
	$('.reveal-modal').foundation('reveal', 'close');
});




