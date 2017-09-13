<div class="CustomDiv  col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="pull-left">Expenses</span>
            <button type="button" class="close" ng-click="CloseModal()"><span class="glyphicon glyphicon-remove-circle pull-right" style="opacity:1"></span></button>

        </div>
        </div>
        <div class="row customRow">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <span class="customSpan">Company Name</span>
                <ui-select ng-model="SelectedCustomer" on-select="CustomerSelected($item)">
                    <ui-select-match placeholder="Select Customer">
                        <span ng-bind="$select.selected.CustomerName"></span>
                    </ui-select-match>
                    <ui-select-choices repeat="item in (CustomersList | filter: $select.search) track by item.CustomerID">
                        <span ng-bind="item.CustomerName"></span>
                    </ui-select-choices>
                </ui-select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <span class="customSpan">Expense No</span>
                <input type="text" class="form-control customFormControl" ng-model="expensecreated.expenseNo"/>
            </div>
        </div>
        <div class="row customRow">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <span class="customSpan">Expense Type</span>
                <select name="company" class="form-control customFormControl"></select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <span class="customSpan">Expense Amount</span>
                <input type="text" class="form-control customFormControl" ng-model="expensecreated.expenseAmount"/>
            </div>  
        </div>
        <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="customSpan">Description</span>
            <input type="text" class="form-control customFormControl" ng-model="expensecreated.description"/>
        </div>
        </div>
        
    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="customSpan">Receipts</span>
            <div class="w3-btn w3-green image-preview-input">
                <span class="glyphicon glyphicon-open"></span>
                <span>Upload Receipt</span>
                <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" /> <!-- rename it -->
            </div>

        </div>
    </div>
       
       
    <div class="row customRowFooterControls">        
        <div class="col-lg-4 pull-right">
            <button type="button" class="w3-btn w3-green w3-margin-bottom customButton" ng-click="SaveExpense()"> Confirm</button>           
        </div>
    </div>

    </div>