
    

    <section class="content-header">
        <h1>
            Dashboard            
        </h1>        
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-4 col-xs-6">               
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{CountOfInvoices.ToBeSubmitted}}</h3>
                        <p>Invoices to be Submitted</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a ng-click="LoadInvoicesToBeSubmitted()" class="small-box-footer">More info <i class="fa fa-arrow-circle-down"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-xs-6">                
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{CountOfInvoices.Submitted}}</h3>
                        <p>Invoices to be Approved</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a ng-click="LoadInvoicesSubmitted()" class="small-box-footer">More info <i class="fa fa-arrow-circle-down"></i></a>
                </div>
            </div>
           
            <div class="col-lg-4 col-xs-6">
               
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{CountOfInvoices.Approved}}</h3>
                        <p>Invoices Approved</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a ng-click="LoadInvoicesApproved()" class="small-box-footer">More info <i class="fa fa-arrow-circle-down"></i></a>
                </div>
            </div>            
        </div>
        
        <div class="row">                
            <div class="col-lg-8 col-xs-12" style="border:none">

                       
                <div class="row CustomPanelHeaderResponsive">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <span># Invoices : {{TotalCountofInvoices}}</span>
                        <span class="glyphicon glyphicon-filter" data-toggle="collapse" href="#InvoiceFilterDiv" style="padding-left:15px;padding-top:13px;cursor:pointer;"></span>
                    </div>
                    <div class="collapse col-lg-8 col-md-8 col-sm-12 col-xs-12" id="InvoiceFilterDiv">
                        <span style="line-height:35px;">Invoice</span>
                        <input type="text" ng-model="filterInvoiceName" class="filterControls" />
                        <span>Company</span>
                        <input type="text" ng-model="filterInvoicecompany" class="filterControls" />

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 pull-right">
                        <!--<span class="pull-right" style="line-height:35px;">Total Amount $: {{Invoices | sumByColumn: 'amount'}}</span>-->
                        <span class="pull-right" style="line-height:35px;">Total Amount $: {{TotalSumofInvoices}}</span>
                        
                    </div>
                </div>
                           
                            <ul style="list-style:none ; -webkit-padding-start :10px">
                                <li ng-repeat="invoice in Invoices | filter:{invno:filterInvoiceName,name:filterInvoicecompany}">


                                    <div class="panel panel-default customPanel ">
                                        <div class="panel-heading ">
                                            <h4 class="panel-title customspanHeader">
                                                <span class="glyphicon glyphicon-triangle-bottom" data-toggle="collapse" href="#collapse{{invoice.invno}}" style="cursor:pointer;"></span>
                                                <span class="customspanHeader" >{{invoice.invno}}</span>                                               
                                                <span class="pull-right">$ {{invoice.amount}}</span>
                                                
                                            </h4>
                                        </div>
                                        <div id="collapse{{invoice.invno}}" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                
                                                <div class="row customRow">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <span class="customSpanLabel">Customer :{{invoice.name}}</span>
                                                        
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <span class="customSpanLabel">Project Ref No :</span>
                                                       
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <span class="customSpanLabel">Date :</span>                                                        
                                                    </div>
                                                </div>                                                
                                                <br />
                                                <div>
                                                    <span class="customSpanLabel">Tasks</span>
                                                    <!--<a href="#" title="Add Task" class="customspanHeader">
                                                        <span class="fa  fa-plus pull-right"></span>
                                                    </a>-->
                                                    <button class="customIconButtonFixed pull-right" ng-click="OpenTaskModalPopup(invoice.name,invoice.customerId)">
                                                        <span class="fa  fa-plus pull-right "></span>
                                                    </button>
                                                </div>
                                                <!--<i class="menu--icon  fa fa-2x fa-file-text customMenuIcon pull-right"></i>-->
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
                                                            <tr ng-repeat="task in invoice.Tasks">
                                                                <td>{{task.task}}</td>
                                                                <td>{{task.category}}</td>
                                                                <td>{{task.hours}}</td>
                                                                <td>{{task.rate}}</td>
                                                                <td>${{task.amount}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <span class="customSpanLabel">Expenses</span>
                                                <!--<a href="#" title="Add Expenses" class="customspanHeader">
                                                    <span class="fa  fa-plus pull-right"></span>
                                                </a>-->
                                                <button class="customIconButtonFixed pull-right" ng-click="OpenExpensesModalPopup(invoice.name,invoice.customerId)">
                                                    <span class="fa  fa-plus pull-right "></span>
                                                </button>
                                                <div class="table-responsive" >
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
                                                            <tr ng-repeat="expense in invoice.Expenses">
                                                                <td width="20%">{{expense.expenseNo}}</td>
                                                                <td width="20%">{{expense.expenseType}}</td>
                                                                <td width="40%">{{expense.description}}</td>
                                                                <td width="20%">${{expense.expenseAmount}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="20%"></td>
                                                                <td width="20%"></td>
                                                                <td width="40%" align="right">Total $ </td>
                                                                <td width="20%">{{invoice.amount}}</td>
                                                                
                                                            </tr>
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                               
                                                        <button class="customIconButtonFixed pull-right" title="Submit Invoice">
                                                            <span class="fa fa-2x fa-share "></span>
                                                        </button>
                                                   

                                            </div>

                                        </div>
                                    </div>


                                </li>
                            </ul>
                       
                        <!--</div>-->

            </div>
                    
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border:none">
                        <!--<div class="table-responsive">-->
                            <div style="border:none">
                                <div class="panel panel-default customPanel CustomPanelHeader">
                                    <span class="pull-left" style="line-height:40px;margin-left :10px">Tasks - Expenses</span>
                                </div>
                                <ul style="list-style:none ; -webkit-padding-start :10px">
                                    <li ng-repeat="cust in Customers">
                                        <div class="panel panel-default customPanel ">
                                            <div class="panel-heading ">
                                                <h4 class="panel-title customspanHeader">
                                                    <span class="glyphicon glyphicon-triangle-bottom" data-toggle="collapse" href="#collapse{{cust.customer}}" style="cursor:pointer;"></span>
                                                    <span class="customspanHeader">{{cust.customer}}</span>
                                                </h4>
                                            </div>
                                            <div id="collapse{{cust.customer}}" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <!--<div>-->
                                                        <span class="customSpanLabel">Tasks</span>
                                                        <!--<a href="#" title="Add Task" class="customspanHeader">
                                                            <span class="fa  fa-plus pull-right"></span>
                                                        </a>-->
                                                    <button class="customIconButtonFixed pull-right" ng-click="OpenTaskModalPopup(cust.customer,cust.customerID)">
                                                        <span class="fa  fa-plus pull-right "></span>
                                                    </button>
                                                    <!--</div><br />-->
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr class="TRHeader">
                                                                    <td width="20%">Select</td>
                                                                    <td width="20%">Task</td>
                                                                    <td width="20%">Category</td>
                                                                    <td width="20%">Qty</td>
                                                                    <td width="20%">Amount</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr ng-repeat="task in cust.Tasks">
                                                                    <td><input type="checkbox" /></td>
                                                                    <td>{{task.task}}</td>
                                                                    <td>{{task.category}}</td>
                                                                    <td>{{task.hours}}</td>
                                                                    <td>${{task.amount}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--<div>-->
                                                        <span class="customSpanLabel">Expenses</span>
                                                        <!--<a href="#" title="Add Expense" class="customspanHeader">
                                                            <span class="fa  fa-plus pull-right"></span>
                                                        </a>-->
                                                    <button class="customIconButtonFixed pull-right" ng-click="OpenExpensesModalPopup(cust.customer,cust.customerID)">
                                                        <span class="fa  fa-plus pull-right "></span>
                                                    </button>
                                                    <!--</div><br />-->
                                                    <div class="table-responsive" >
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr class="TRHeader">
                                                                    <td width="10%">Select</td>
                                                                    <td width="30%">ExpenseNo</td>
                                                                    <td width="30%">Type</td>
                                                                    <td width="30%">Amount</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr ng-repeat="exp in cust.Expenses">
                                                                    <td><input type="checkbox" /></td>
                                                                    <td>{{exp.expenseNo}}</td>
                                                                    <td>{{exp.expenseType}}</td>
                                                                    <td>${{exp.expenseAmount}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        
                                                        <!--<a href="#!/invoice" title="Create Invoice" class="customspanHeader">
                                                            <span class="fa fa-2x fa-file-text pull-right"></span>
                                                        </a>-->
                                                        <a  ng-click="CreateInvoiceFromTaskExpense(cust.customer,cust.customerID,'/invoice')">
                                                            <span class="fa fa-2x fa-file-text pull-right"></span>
                                                        </a>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                            



                                            </div>
                                    </li>
                                </ul>


                            </div>
                            
                        <!--</div>-->
                    </div>                
         </div>        
    </section>
    

    <div id="theModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>

   