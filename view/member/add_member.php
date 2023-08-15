
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
                            <label class="checkbox-inline"> <input type="radio" name="member_type" value="BM" checked> Board of Member </label>
                            <label class="checkbox-inline"> <input type="radio" name="member_type" value="E"> Employee </label>
                            <label class="checkbox-inline"> <input type="radio" name="member_type" value="S"> Student </label>
                        </div>
                    </div>
				
					<div class="form-group"> 
						<label class="col-sm-2 control-label">Name</label> 
						<div class="col-sm-10">
							<input type="text" id="emp_name" name="emp_name" class="form-control" data-required="true">
						</div>
					</div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-10">
                            <select id="designation" class="select2" name="designation" style="width: 100%">
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
                            <input type="text" id="personal_phone" name="personal_phone" class="form-control" data-required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Personal Email</label>
                        <div class="col-sm-8">
                            <input type="email" id="personal_email" name="personal_email" class="form-control">
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
                            <input type="text" id="present_address" name="present_address" class="form-control">
                        </div>
                    </div>
				
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Permanent address</label>
                        <div class="col-sm-8">
                            <input type="text" id="permanent_address" name="permanent_address" class="form-control">
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
				<button type="submit" id="btnClear" class="btn btn-default">Cancel</button> 
				<button type="submit" class="btn btn-primary">Submit</button>  
			</div> 
		</div>
		
	</div>
</section>
</form>



<script>
$(document).ready(function(){
	var userList	= "";
    $('#designation').select2();
    $("#joining_date").datepicker();
    loadDesignation();
});


	/*Clear Button Action Performed*/
	$('#btnClear').click(function(){
		//clearForm();	
		alert("clear form");
		return false;
	});	
	
	
	
	/* Submit Button Action Performed */
	$("form#submit_form").submit(function(event) {
        var gender = $('input[name="gender"]:checked').val();
        var member_type = $('input[name="member_type"]:checked').val();

        if($.trim($('#emp_name').val()).length==0 ){
			alert('Please Enter Member Name');
			return false;
        } else {

			$('#btnSubmit').prop('disabled',true);			
			event.preventDefault();
			var formData = new FormData($(this)[0]);
			formData.append("action","insertOrUpdate");
            formData.append("member_type",member_type);
            formData.append("gender",gender);
            $.ajax({
				url: "controller/add_member_controller.php",
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
						alert("Error !!.");
					}
				}
			});
			return false;	
		}
		
	});
		
	// clearForm();




function loadDesignation(){

    $.post("controller/infos.php", {actionType: "getAllDesignation"}, function(data, status){
        var result = JSON.parse(data);
        var html='';
        $.each(result, function(i,data){
            //alert(data.designation_id);
            html +="<option value='"+data.designation_id+"'>"+data.designation_name+"</option>";
        });
        $('#designation').html(html);
    });
}

</script>




	
