<section class="content-header" ><h1>Invoice</h1></section>
<section class="content">
    <div class="CustomDiv  col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
        <div class="row customRow">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="#!/" title="Create Invoice" class="customspanHeader">
                    <span class="glyphicon glyphicon-remove-circle pull-right" style="opacity:1"></span>
                </a>
                </div>
            </div>
                <div class="row customRow">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <span class="customSpan">Customer</span>
                        <ui-select ng-model="SelectedCustomer" on-select="CustomerSelected($item)">
                            <ui-select-match placeholder="Select Customer">
                                <span ng-bind="$select.selected.CustomerName"></span>
                            </ui-select-match>
                            <ui-select-choices repeat="item in (CustomersList | filter: $select.search) track by item.CustomerID">
                                <span ng-bind="item.CustomerName"></span>
                            </ui-select-choices>
                        </ui-select>

                     </div>
                     <div class="row customRow">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <span class="customSpan">Date</span>
                        <input type="text" class="form-control customFormControl" />
                    
                </div>
                <div class="row customRow">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <span class="customSpan">Project Reference #</span>
                        <input type="text" class="form-control customFormControl" />
                    </div>
                    
                </div>

                <div>
                    <div class="panel-body">

                        <div>
                            <span class="customSpanLabel">Tasks</span>
                            <!--<a href="TaskEntry_Modal.html" class="menu--link" title="Task" data-toggle="modal" data-target="#theModal">-->
                            <!--<a href="/Views/TaskEntry.html" title="Add Task" class="customspanHeader" data-toggle="modal" data-target="#Div_invoiceModalTask" >-->
                            <!--<a title="Add Task" class="customspanHeader" ng-click="showModal()">
                                <span class="fa  fa-plus pull-right"></span>
                            </a>-->
                            <button class="customIconButtonFixed pull-right" ng-click="OpenTaskModalPopup()">
                                <span class="fa  fa-plus pull-right "></span>
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="TRHeader">
                                        <td width="20%">Service Description</td>
                                        <td width="20%">Category</td>
                                        <td width="20%">Qty</td>
                                        <td width="20%">Hourly Rate</td>
                                        <td width="20%">Amount</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="task in TaskExpenseForCustomer.Tasks">
                                        <td>{{task.task}}</td>
                                        <td>{{task.category}}</td>
                                        <td>{{task.hours}}</td>
                                        <td>{{task.rate}}</td>
                                        <td>
                                            ${{task.amount}}
                                            <button class="customIconButton pull-right">
                                                <span class="fa  fa-remove "></span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <span class="customSpanLabel">Expenses</span>
                        <!--<a href="TaskEntry_Modal.html" class="menu--link" title="Task" data-toggle="modal" data-target="#theModal">-->
                        <!--<a href="/Views/Expenses.html" title="Add Expenses" class="customspanHeader" data-toggle="modal" data-target="#Div_invoiceModalExpense">
                            <span class="fa  fa-plus pull-right"></span>
                        </a>-->
                        <button class="customIconButtonFixed pull-right" ng-click="OpenExpensesModalPopup()">
                            <span class="fa  fa-plus pull-right "></span>
                        </button>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="TRHeader">
                                        <td width="20%">Expense No</td>
                                        <td width="20%">Expense Type</td>
                                        <td width="40%">Description</td>
                                        <td width="20%">Amount</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="expense in TaskExpenseForCustomer.Expenses">
                                        <td width="20%">{{expense.expenseNo}}</td>
                                        <td width="20%">{{expense.expenseType}}</td>
                                        <td width="40%">{{expense.description}}</td>
                                        <td width="20%">
                                            ${{expense.expenseAmount}}
                                            <button class="customIconButton pull-right">
                                                <span class="fa  fa-remove "></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td width="20%"></td>
                                        <td width="20%"></td>
                                        <td width="40%" align="right">Total $ </td>
                                        <td width="20%"></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="row customRowFooterControls">
                            <div class="col-lg-3 pull-right">
                                <button type="button" class="w3-btn w3-green w3-margin-bottom customButton" data-toggle="confirmation"
                                        data-title="Do you want to send Invoice to the Customer Right away ">
                                    Confirm
                                </button>
                            </div>
                
                        
                            <div class="col-lg-3 pull-right">
                                <button type="button" class="w3-btn w3-green w3-margin-bottom customButton" data-toggle="confirmation"
                                        data-title="Do you want to send Invoice to the Customer Right away ">
                                    Approved
                                </button>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
</section>

<!--<div id="Div_invoiceModalTask" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
 </div>
<div id="Div_invoiceModalExpense" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>-->
   



