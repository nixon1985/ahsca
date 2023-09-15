

<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
    <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="#">Member</a></li>
    <li class="active">Member List</li>
</ul>



<div class="m-b-md"> <h3 class="m-b-none"><a href="javascript:popupEntryForm();" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Create</a></h3> </div>
<section class="panel panel-default">
    <header class="panel-heading">Project List</header>

    <div class="table-responsive">
        <table id="member_grid" class="table table-striped b-t b-light">
            <thead>
            <tr>
                <th class="th-sortable" data-toggle="class">Member ID <span class="th-sort"> <i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i> </span> </th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Present Address</th>
                <th>Monthly Payable</th>
                <th>Opening Balance</th>
                <th></th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

</section>

<div id="panel_view"></div>



<!-- Modal window -->
<div class="modal fade" id="project-entry-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">

                <form id="submit_form" class="bs-example" role="search">
                    <div class="row">
                        <div class="col-sm-12">
                            <section class="panel panel-default form-horizontal">
                                <header class="panel-heading font-bold">Add New Project</header>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Project Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="member_name" name="member_name" class="form-control" data-required="true">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Client</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="phone_no" name="phone_no" class="form-control" data-required="true">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Contact Person</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="present_address" name="present_address" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="present_address" name="present_address" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="permanent_address" name="permanent_address" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Contract Date</label>
                                        <div class="col-sm-10">
                                            <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="" data-date-format="dd-mm-yyyy" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Start Date</label>
                                        <div class="col-sm-10">
                                            <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="" data-date-format="dd-mm-yyyy" >
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>
                    </div>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



<script type="text/javascript">

    loadDataGrid();
    function popupEntryForm(){
        $('#project-entry-form').modal('show');
    }
    function loadDataGrid(){
        var postData = {actionType:'getAllMembers'};
        //$('.table tbody tr').remove();
        var html = "";
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
                    html +="<tr>";
                    html +="<td align='center' class='id'>"+data.member_no+"</td>";
                    html +="<td align='center' class='installment_no'>"+data.member_name+"</td>";
                    html +="<td class='pay_type'>"+data.phone_no+"</td>";
                    html +="<td align='right' class='payable'>"+data.email+"</td>";
                    html +="<td class='payment_date' align='center'>"+data.present_address+"</td>";
                    html +="<td class='payment_date' align='right'>"+data.monthly_payable+"</td>";
                    html +="<td class='payment_date' align='right'>"+data.opening_balance+"</td>";
                    html +='<td class="payment_date" align="center"><a href="javascript:editMember('+data.member_id+');"><i class="fa fa-pencil"></i></a></td>';
                    html +='</tr>';
                });
            }
        });
        $('#member_grid tbody').html(html);
    }

    function editMember(memberID){

        $.post("controller/infos.php", {actionType: "personInfo", member_id: memberID}, function(data, status){
            var result = JSON.parse(data);
            alert(data);
            $('#member_name').val(result[0].member_name);
            $('#phone_no').val(result[0].phone_no);
            $('#email').val(result[0].email);
            $('#present_address').val(result[0].present_address);
            $('#permanent_address').val(result[0].permanent_address);
            $("input[name=gender][value="+result[0].gender+"]").prop("checked",true);
            $('#opening_balance').val(result[0].opening_balance);
            $('#monthly_payable').val(result[0].monthly_payable);
            if(result[0].photo_path!=0){
                $('#profilePic').html('<img src="'+result[0].photo_path+'" class="img-circle">');
            }else{
                $('#profilePic').html('');
            }


            $('#modal-form').modal('show');
        });

    }



</script>




