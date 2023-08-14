
<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 
	<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li> 
	<li><a href="#">Member</a></li> 
	<li class="active">Member Registration</li> 
</ul> 



<form id="submit_form" class="bs-example" role="search">
<div class="m-b-md"><h3 class="m-b-none">Member Registration</h3> </div> 


<div class="row"> 
	<div class="col-sm-6"> 
		<section class="panel panel-default form-horizontal"> 
			<header class="panel-heading font-bold">Basic Information</header>
			<div class="panel-body">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Member Type</label>
                        <div class="col-sm-10">
                            <label class="checkbox-inline"> <input type="radio" name="gender" id="memberType1" value="BM" checked> Board of Member </label>
                            <label class="checkbox-inline"> <input type="radio" name="gender" id="memberType2" value="E"> Employee </label>
                            <label class="checkbox-inline"> <input type="radio" name="gender" id="memberType3" value="S"> Student </label>
                        </div>
                    </div>
				
					<div class="form-group"> 
						<label class="col-sm-2 control-label">Name</label> 
						<div class="col-sm-10">
							<input type="text" id="member_name" name="member_name" class="form-control" data-required="true">
						</div> 
					</div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-10">
                            <select id="member_list" class="select2" name="member_id" style="width: 100%">
                            </select>
                        </div>
                    </div>

					<div class="form-group"> 
						<label class="col-sm-2 control-label">Gender</label> 
						<div class="col-sm-10"> 
							<label class="checkbox-inline"> <input type="radio" name="gender" id="gender1" value="Male" checked> Male </label>
							<label class="checkbox-inline"> <input type="radio" name="gender" id="gender2" value="Female"> Female </label>
						</div> 
					</div>

					<div class="form-group"> 
						<label class="col-sm-2 control-label">Joining Date</label> 
						<div class="col-sm-10"> 
							<input id="joining_date" name="joining_date" class="input-sm input-s datepicker-input form-control" size="16" type="text" value="" data-date-format="dd-mm-yyyy" >
						</div> 
					</div>
 
					<div class="form-group"> 
						<label class="col-sm-2 control-label">Photo</label> 
						<div class="col-sm-10"> 
							<input type="file" class="filestyle" accept="image/*" onchange="loadFile(event)" name="photo" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s">
                            <p><img id="output" width="200"/></p>
                            <script>
                                var loadFile = function(event) {
                                    var image = document.getElementById('output');
                                    image.src=URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                        </div>
					</div> 
				 
			</div> 
		</section> 
	</div> 
	<div class="col-sm-6"> 
		<section class="panel panel-default form-horizontal"> 
			<header class="panel-heading font-bold">Contact information</header>
				<div class="panel-body"> 


                    <div class="form-group">
                        <label class="col-sm-4 control-label">Personal Phone</label>
                        <div class="col-sm-8">
                            <input type="text" id="phone_no" name="phone_no" class="form-control" data-required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Personal Email</label>
                        <div class="col-sm-8">
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>

				
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Official Phone</label>
                        <div class="col-sm-8">
                            <input type="text" id="official_phone" name="official_phone" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Official Email</label>
                        <div class="col-sm-8">
                            <input type="email" id="official_email" name="official_email" class="form-control">
                        </div>
                    </div>
				
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Present address</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
				
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Permanent address</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>

			</div> 
		</section> 
	</div> 
</div>




<section class="panel panel-default form-horizontal"> 
	<header class="panel-heading font-bold"> Payment Information </header> 
	<div class="panel-body"> 

		<div class="form-group"> 
			<label class="col-sm-2 control-label">Monthly Payable Amount</label> 
			<div class="col-sm-10"> 
				<input type="text" id="monthly_payable" name="monthly_payable" class="form-control">
			</div> 
		</div> 
		
		<div class="form-group"> 
			<label class="col-sm-2 control-label">Current Balance</label> 
			<div class="col-sm-10"> 
				<input type="text" id="opening_balance" name="opening_balance" class="form-control">
			</div> 
		</div>
		<div class="line line-lg pull-in"></div> 
		<div class="form-group"> 
			<div class="col-sm-10" align="center"> 
				<!--<a href="#modal-form" class="btn btn-success" data-toggle="modal">Form in a modal</a>-->
				<button type="submit" id="btnClear" class="btn btn-default">Cancel</button> 
				<button type="submit" class="btn btn-primary">Submit</button>  
			</div> 
		</div>
		
	</div>
</section>
</form>


<!-- Modal window -->
<div class="modal fade" id="modal-form"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-body"> 
				<div class="row"> 
					<div class="col-sm-6 b-r"> 
						<h3 class="m-t-none m-b">Sign in</h3> 
						<p>Sign in to meet your friends.</p> 
						<form role="form"> 
							<div class="form-group"> 
								<label>Email</label> 
								<input type="email" class="form-control" placeholder="Enter email"> 
							</div> 
							<div class="form-group"> 
								<label>Password</label> 
								<input type="password" class="form-control" placeholder="Password"> 
							</div> 
							<div class="checkbox m-t-lg"> 
								<button type="submit" class="btn btn-sm btn-success pull-right text-uc m-t-n-xs"><strong>Log in</strong></button> 
								<label> <input type="checkbox"> Remember me </label> 
							</div>
						</form>
					</div> 
					<div class="col-sm-6"> 
						<h4>Not a member?</h4> 
						<p>You can create an account <a href="#" class="text-info">here</a></p> 
						<p>OR</p> 
						<a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a> 
						<a href="#" class="btn btn-twitter btn-block m-b-sm"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a> 
						<a href="#" class="btn btn-gplus btn-block"><i class="fa fa-google-plus pull-left"></i>Sign in with Google+</a> 
					</div> 
				</div> 
			</div> 
		</div><!-- /.modal-content --> 
	</div><!-- /.modal-dialog --> 
</div>


<script>
$(document).ready(function(){
	var userList	= "";
    $('#member_list').select2();
    $("#joining_date").datepicker();
});

loadDataGrid();
	/*Clear Button Action Performed*/
	
	$('#btnClear').click(function(){
		//clearForm();	
		alert("clear form");
		return false;
	});	
	
	
	
	/* Submit Button Action Performed */
	$("form#submit_form").submit(function(event) {
        var gender = $('input[name="gender"]:checked').val();

        if($.trim($('#member_name').val()).length==0 ){
			alert('Please Enter Member Name');
			return false;
		}else if($.trim($('#phone_no').val()).length==0 ){
            alert('Please Enter Phone Number');
            return false;
        }else if($.trim($('#monthly_payable').val()).length==0 ) {
            alert('Please Enter monthly payable amount');
            return false;
        }else if($.trim($('#opening_balance').val()).length==0 ){
                alert('Please Enter current balance');
                return false;
        } else {

			$('#btnSubmit').prop('disabled',true);			
			event.preventDefault();
			var formData = new FormData($(this)[0]);
			formData.append("action","insertOrUpdate");
            formData.append("gender",gender);
            $.ajax({
				url: "../friends/controller/add_member_controller.php",
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data) {						
					//$('#btnSubmit').prop('disabled',false);	
					
					var result = JSON.parse(data);

					if (result.success) {
                        document.getElementById("submit_form").reset();
						alert("New Member Created Successfully.");
					}
					else if (result.error) {
						//clearForm();
						alert("Salary Sheet Updated Successfully.");
					}
				}
			});
			return false;	
		}
		
	});
		
	// clearForm();




function loadDataGrid(){
    var postData = {actionType:'getAllMembers'};
    var html = "<option value=''>-- Select Member --</option>";
    $.ajax({
        url: 'controller/infos.php',
        type: 'POST',
        data: JSON.stringify(postData),
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            // $('#member_grid').html(data);
            var result = JSON.parse(data);
            $.each(result, function(i,data){
                html +="<option value='"+data.member_id+"'>"+data.member_name+"</option>";
            });
        }
    });
    $('#member_list').html(html);
}

</script>




	
