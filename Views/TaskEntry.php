
<div class="CustomDiv  col-lg-12 col-md-12 col-sm-12 col-xs-12" >
    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="pull-left">Task</span><span class="pull-left"></span>
            <button type="button" class="close" ng-click="CloseModal()"><span class="glyphicon glyphicon-remove-circle pull-right" style="opacity:1"></span></button>
        </div>
    </div>
    <div class="row customRow">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <span class="customSpan">Company Name</span>
            <ui-select ng-model="SelectedCustomer" on-select="CustomerSelected($item)">
                <ui-select-match placeholder="Search Customer">
                    <span ng-bind="$select.selected.CustomerName"></span>
                </ui-select-match>
                <ui-select-choices repeat="item in (CustomersList | filter: $select.search) track by item.CustomerID">
                    <span ng-bind="item.CustomerName"></span>
                </ui-select-choices>
            </ui-select>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <span class="customSpan">Category</span>
            <ui-select ng-model="SelectedCategory" on-select="CategorySelected($item)">
                <ui-select-match placeholder="Search Category">
                    <span ng-bind="$select.selected.TaskCategory"></span>
                </ui-select-match>
                <ui-select-choices repeat="item in (TaskCategoriesList | filter: $select.search) track by item.TaskCategoryID">
                    <span ng-bind="item.TaskCategory"></span>
                </ui-select-choices>
            </ui-select>
        </div>

    </div>
    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="customSpan">Task</span>
            <input type="text" class="form-control customFormControl" ng-model="taskcreated.task"/>
        </div>
    </div>   
    <div class="row customRow">

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <span class="customSpan">No of Hours</span>
            <input type="text" class="form-control customFormControl" ng-model="taskcreated.hours" />
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <span class="customSpan">Hourly Rate</span>
            <input type="text" class="form-control customFormControl" ng-model="taskcreated.rate"/>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <span class="customSpan">Task Amount</span>
            <input type="text" class="form-control customFormControl" ng-model="taskcreated.amount"/>
        </div>
    </div>    
    <div class="row customRow">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="customSpan">Description</span>
            <textarea class="form-control customFormControl" ng-model="taskcreated.description"></textarea>
        </div>
    </div>
    <div class="row customRowFooterControls">
        <div class="col-lg-4 pull-right">
            <button type="button" class="w3-btn w3-green w3-margin-bottom customButton" ng-click="SaveTask()">Confirm</button>
        </div>
    </div>
</div>
       
     
