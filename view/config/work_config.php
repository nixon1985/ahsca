
    <section class="hbox stretch">
        <aside class="aside-md bg-white b-r" id="subNav">
            <div class="wrapper b-b header">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-default" title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button type="button" class="btn btn-sm btn-default" title="Remove"><i class="fa fa-trash-o"></i></button>
                    </div>
                    <a href="javascript:editSubWork('mw');" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Create</a>
            </div>
            <ul id="workList" class="nav">
                <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Accountancy</a></li>
                <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Auditing</a></li>
                <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Taxation</a></li>
                <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Cost Accountancy</a></li>
                <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Internal Audit</a></li>
            </ul>
        </aside>
        <aside>
            <section class="vbox">
                <header class="header bg-white b-b clearfix">
                    <div class="row m-t-sm">
                        <div class="col-sm-8 m-b-xs">

                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-default" title="Refresh"><i class="fa fa-refresh"></i></button>
                                <button type="button" class="btn btn-sm btn-default" title="Remove"><i class="fa fa-trash-o"></i></button>
                            </div>
                            <a href="javascript:addNewSubWork();" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Create</a>
                        </div>
                        <div class="col-sm-4 m-b-xs">
                            <div class="input-group">
                                <input type="text" class="input-sm form-control" placeholder="Search">
                                <span class="input-group-btn">
										<button class="btn btn-sm btn-default" type="button">Go!</button>
									</span>
                            </div>
                        </div>
                    </div>
                </header>

                <section class="scrollable wrapper w-f">
                    <section class="panel panel-default">
                        <div class="table-responsive">
                            <table class="table table-striped m-b-none">
                                <thead>
                                <tr>
                                    <th width="20"><input type="checkbox"></th>
                                    <th class="th-sortable" data-toggle="class">Sub Work <span class="th-sort"> <i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i> </span> </th>
                                    <th width="20"></th>
                                    <th width="20"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="checkbox" name="post[]" value="2"></td>
                                    <td>Idrawfast</td>
                                    <td><a href="javascript:editSubWork();"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="javascript:editSubWork();"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="post[]" value="3"></td>
                                    <td>Formasa</td>
                                    <td><a href="javascript:editSubWork();"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="javascript:editSubWork();"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="post[]" value="4"></td>
                                    <td>Avatar system</td>
                                    <td><a href="javascript:editSubWork();"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="javascript:editSubWork();"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="post[]" value="4"></td>
                                    <td>Throwdown</td>
                                    <td><a href="javascript:editSubWork();"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="javascript:editSubWork();"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </section>

                <footer class="footer bg-white b-t">
                    <div class="row text-center-xs">
                        <div class="col-md-6 hidden-sm"> <p class="text-muted m-t">Showing 20-30 of 50</p> </div>
                        <div class="col-md-6 col-sm-12 text-right text-center-xs">
                            <ul class="pagination pagination-sm m-t-sm m-b-none">
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </section>
        </aside>
    </section>
    <!--<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>-->




<div class="modal fade" id="sub-work-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Work</h4>
            </div>
            <form id="sub_work_name" class="bs-example" role="search">
            <div class="modal-body">
                <div id="msgPanel2" class="form-group"></div>
                    <section class="panel panel-default form-horizontal">

                        <header class="panel-heading font-bold" id="workType"> Work Information </header>

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Work Name</label>
                                <div class="col-sm-9">
                                    <select id="work_id" class="select2" name="work_id" style="width: 100%">
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Sub Work Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="sub_work_name" name="sub_work_name" class="form-control">
                                </div>
                            </div>
                        </div>
                    </section>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                <!--<button type="button" class="btn btn-info" data-loading-text="Updating...">Save changes</button>-->
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>








    <div class="modal fade" id="work-form">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Work</h4>
                </div>
                <form id="work_form" class="bs-example" role="search">
                    <div class="modal-body">
                        <div id="msgPanel2" class="form-group"></div>
                        <section class="panel panel-default form-horizontal">

                            <header class="panel-heading font-bold" id="workType"> Work Information </header>

                            <div class="panel-body">

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">Work Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="work_name" name="work_name" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <!--<button type="button" class="btn btn-info" data-loading-text="Updating...">Save changes</button>-->
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>




    <script>
        $(document).ready(function(){
            var userList	= "";
            $('#work_id').select2();
            // $("#joining_date").datepicker();
            loadWorkList();
        });

        function addNewWork(){
            $('#work-form').modal('show');
        }

        function addNewSubWork(){
            $('#sub-work-form').modal('show');
        }

        function editSubWork(workType){
            if(workType=='mw'){
                $('#workType').html('Main Work Name');
            }else if(workType=='sw'){
                $('#workType').html('Sub-Work Name');
            }
            $('#work-form').modal('show');
        }

        function loadWorkList(){

            $.post("controller/infos.php", {actionType: "getAllMainWork"}, function(data, status){
                var result = JSON.parse(data);
                var html='';
                var leftWorkList='';
                $.each(result, function(i,data){
                    leftWorkList +="<li class='b-b b-light'><a href='#'><i class='fa fa-chevron-right pull-right m-t-xs text-xs icon-muted'></i>"+data.work_name+"</a></li>";
                    html +="<option value='"+data.work_id+"'>"+data.work_name+"</option>";
                });
                $('#workList').html(leftWorkList);
                $('#work_id').html(html);
            });
        }


        $("form#work_form").submit(function(event) {

            if($.trim($('#work_name').val()).length==0 ){
                alert('Please Enter Work Name');
                return false;
            } else {

                //$('#btnSubmit').prop('disabled',true);
                event.preventDefault();
                var formData = new FormData($(this)[0]);
                formData.append("action","main_work");
                $.ajax({
                    url: "controller/config_controller.php",
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
                            document.getElementById("work_form").reset();
                            var ssMass = '<div class="alert alert-success">' +
                                '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                                '<i class="fa fa-ok-sign"></i>'+
                                'Added successfully.</div>';
                            $('#msgPanel2').html(ssMass);

                            var identity = setInterval(scene, 100);
                            function scene() {
                                $('#msgPanel2').html('');
                                clearInterval(identity);
                            }

                            // $("#work-form").modal('hide');
                            // alert("New Member Created Successfully.");
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




        $("form#sub_work_form").submit(function(event) {

            if($.trim($('#sub_work_name').val()).length==0 ){
                alert('Please Enter Work Name');
                return false;
            } else {

                //$('#btnSubmit').prop('disabled',true);
                event.preventDefault();
                var formData = new FormData($(this)[0]);
                formData.append("action","sub_work");
                $.ajax({
                    url: "controller/config_controller.php",
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
                            document.getElementById("sub_work_form").reset();
                            var ssMass = '<div class="alert alert-success">' +
                                '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                                '<i class="fa fa-ok-sign"></i>'+
                                'Added successfully.</div>';
                            $('#msgPanel3').html(ssMass);
/*
                            var identity = setInterval(scene, 100);
                            function scene() {
                                $('#msgPanel3').html('');
                                clearInterval(identity);
                            }
*/

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
    </script>