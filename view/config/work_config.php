
    <section class="hbox stretch">
        <aside class="aside-md bg-white b-r" id="subNav">
            <div class="wrapper b-b header">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-default" title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button type="button" class="btn btn-sm btn-default" title="Remove"><i class="fa fa-trash-o"></i></button>
                    </div>
                    <a href="javascript:editSubWork();" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Create</a>
            </div>
            <ul class="nav">
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
                            <a href="modal.html" data-toggle="ajaxModal" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Create</a>
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
                                    <th class="th-sortable" data-toggle="class">Project <span class="th-sort"> <i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i> </span> </th>
                                    <th>Task</th>
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




<div class="modal fade" id="work-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Idrawfast 02/2013</h4>
            </div>
            <div class="modal-body">


                <form id="submit_form" class="bs-example" role="search">
                    <div class="m-b-md"><h3 class="m-b-none">Add Work Name</h3> </div>

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
                        </div>
                    </section>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                <!--<button type="button" class="btn btn-info" data-loading-text="Updating...">Save changes</button>-->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>





    <div class="modal fade" id="work-form1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Idrawfast 02/2013</h4>
                </div>
                <div class="modal-body">
                    <p>This is a table in a modal, click the trash icon to remove the item</p>
                    <section class="panel panel-default m-l-n-md m-r-n-md m-b-none">
                        <header class="panel-heading"> <span class="label bg-danger pull-right">4 left</span> Tasks </header>
                        <table class="table table-striped m-b-none text-sm">
                            <thead>
                            <tr>
                                <th>Progress</th>
                                <th>Item</th>
                                <th width="20"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="item-1">
                                <td>
                                    <div class="progress progress-sm progress-striped active m-t-xs m-b-none">
                                        <div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="80%" style="width: 80%"></div>
                                    </div>
                                </td>
                                <td>App prototype design</td>
                                <td class="text-right">
                                    <a href="#item-1" data-dismiss="alert"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr id="item-2">
                                <td>
                                    <div class="progress progress-xs m-t-xs m-b-none">
                                        <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                                    </div>
                                </td>
                                <td>Design documents</td>
                                <td class="text-right"> <a href="#item-2" data-dismiss="alert"><i class="fa fa-trash-o"></i></a> </td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" data-loading-text="Updating...">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>




    <script>
        function addNewWork(){
            $('#work-form').modal('show');
        }

        function addNewSubWork(){
            $('#work-form').modal('show');
        }

        function editSubWork(){
            $('#work-form').modal('show');
        }
    </script>