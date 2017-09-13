// JavaScript source code
app.controller('DashboardController', function ($scope, DashboardService, $filter, $uibModal, TemporaryService, $location) {
   
    $scope.Invoices = DashboardService.GetInvoicesToBeSubmitted();
    $scope.TotalCountofInvoices = $scope.Invoices.length;
    $scope.TotalSumofInvoices = $filter("sumByColumn")($scope.Invoices, 'amount');
    $scope.Customers = DashboardService.GetCustomersWithTaskandExpenses();
    $scope.CountOfInvoices = DashboardService.GetCountOfInvoices();

    $scope.LoadInvoicesToBeSubmitted = function () {
        $scope.Invoices = DashboardService.GetInvoicesToBeSubmitted();
        $scope.TotalCountofInvoices = $scope.Invoices.length;
        $scope.TotalSumofInvoices = $filter("sumByColumn")($scope.Invoices, 'amount');
       
    };
    $scope.LoadInvoicesSubmitted = function () {
        $scope.Invoices = DashboardService.GetInvoicesSubmitted();
        $scope.TotalCountofInvoices = $scope.Invoices.length;
        $scope.TotalSumofInvoices = $filter("sumByColumn")($scope.Invoices, 'amount');
        
    };
    $scope.LoadInvoicesApproved = function () {
        $scope.Invoices = DashboardService.GetInvoicesApproved();
        $scope.TotalCountofInvoices = $scope.Invoices.length;
        $scope.TotalSumofInvoices = $filter("sumByColumn")($scope.Invoices, 'amount');
    };

    $scope.$watch("filterInvoiceName",function (query) {
        $scope.TotalCountofInvoices = $filter("filter")($scope.Invoices, query).length;     
        $scope.TotalSumofInvoices = $filter("sumByColumn")($filter("filter")($scope.Invoices, query), 'amount');
    });
        
    $scope.$watch("filterInvoicecompany", function (query) {
        $scope.TotalCountofInvoices = $filter("filter")($scope.Invoices, query).length;
        $scope.TotalSumofInvoices = $filter("sumByColumn")($filter("filter")($scope.Invoices, query), 'amount');
    
    });

   


    var UpdateInvoiceListHeader = function (query) {
        $scope.TotalCountofInvoices = $filter("filter")($scope.Invoices, query).length;     
        $scope.TotalSumofInvoices = $filter("sumByColumn")($filter("filter")($scope.Invoices, query), 'amount');
    };

    $scope.OpenTaskModalPopup = function (customername,customerid) {

        $scope.opts = {
            backdrop: true,
            backdropClick: true,
            dialogFade: false,
            keyboard: true,
            templateUrl: '/Views/TaskEntry.html',
            controller: TaskModalInstanceController,
            //controller: function ($uibModalInstance, $scope) {
            //    $scope.ok = function () {
            //        $uibModalInstance.close('ok');
            //    };

            //},
            resolve: {
                selectedCustomer: function () { return { CustomerID: customerid, CustomerName: customername } }
            } // empty storage
        };

        $scope.opts.resolve.item = function () {
            return angular.copy(
                { name: $scope.name }
            ); // pass name to resolve storage
        }

        var modalInstance = $uibModal.open($scope.opts);

        modalInstance.result.then(function (IsTaskCreated) {
            //on ok button press 
            if (IsTaskCreated) {
                //alert('Task created - need to refresh data')
                $scope.Invoices = DashboardService.GetInvoicesToBeSubmitted();
            }
            else {
                //alert('No need to refresh')
            }
        }, function () {
            //on cancel button press
            //console.log("Modal Closed");
        });
    };    

    $scope.OpenExpensesModalPopup = function (customername, customerid) {

        $scope.opts = {
            backdrop: true,
            backdropClick: true,
            dialogFade: false,
            keyboard: true,
            templateUrl: '/Views/Expenses.html',
            controller: ExpensesModalInstanceController,
            resolve: {
                selectedCustomer: function () { return { CustomerID: customerid, CustomerName: customername } }
            } // empty storage
        };

        $scope.opts.resolve.item = function () {
            return angular.copy(
                { name: $scope.name }
            ); // pass name to resolve storage
        }

        var modalInstance = $uibModal.open($scope.opts);

        modalInstance.result.then(function () {
            //on ok button press 
        }, function () {
            //on cancel button press
            //console.log("Modal Closed");
        });
    };    
    
    $scope.CreateInvoiceFromTaskExpense = function (customername,customerId,link) {
        // your code here
       
        var selectedCustomer = { CustomerID: customerId, CustomerName: customername};//Get the customer 
        TemporaryService.SetSelectedCustomer(selectedCustomer);    
        $location.url(link);
    };
});


app.controller('CommonController', function ($scope, CommonService, $uibModal, TemporaryService) {
    
    
    $scope.CustomersList = CommonService.GetCustomersList();    
    $scope.SelectedCustomer = TemporaryService.GetSelectedCustomer(); //to pre select a customer
    if ($scope.SelectedCustomer !== undefined){
        $scope.TaskExpenseForCustomer = CommonService.GetTaskExpenseForCustomer($scope.SelectedCustomer.CustomerID);
    }
    
    $scope.CustomerSelected = function (selectedItem) {      
        $scope.TaskExpenseForCustomer = CommonService.GetTaskExpenseForCustomer(selectedItem.CustomerID);
        $scope.SelectedCustomer = selectedItem;       
    }

    
    $scope.OpenTaskModalPopup = function () {

        $scope.opts = {
            backdrop: true,
            backdropClick: true,
            dialogFade: false,
            keyboard: true,
            templateUrl: '/Views/TaskEntry.html',
            controller: TaskModalInstanceController,
            //controller: function ($uibModalInstance, $scope) {
            //    $scope.ok = function () {
            //        $uibModalInstance.close('ok');
            //    };

            //},
            resolve: {
                selectedCustomer: function () { return $scope.SelectedCustomer }
            } // empty storage
        };

        $scope.opts.resolve.item = function () {
            return angular.copy(
                { name: $scope.name }
            ); // pass name to resolve storage
        }

        var modalInstance = $uibModal.open($scope.opts);

        modalInstance.result.then(function (IsTaskCreated) {
            //on ok button press 
            if (IsTaskCreated) {
                //alert('Task created - need to refresh data')
                $scope.TaskExpenseForCustomer = CommonService.GetTaskExpenseForCustomer(selectedItem.CustomerID);
            }
            else
            {
                //alert('No need to refresh')
            }
        }, function () {
            //on cancel button press
            //console.log("Modal Closed");
        });
    };            


    $scope.OpenExpensesModalPopup = function () {

        $scope.opts = {
            backdrop: true,
            backdropClick: true,
            dialogFade: false,
            keyboard: true,
            templateUrl: '/Views/Expenses.html',
            controller: ExpensesModalInstanceController,            
            resolve: {
                selectedCustomer: function () { return $scope.SelectedCustomer }
            } // empty storage
        };

        $scope.opts.resolve.item = function () {
            return angular.copy(
                { name: $scope.name }
            ); // pass name to resolve storage
        }

        var modalInstance = $uibModal.open($scope.opts);

        modalInstance.result.then(function () {
            //on ok button press 
            $scope.TaskExpenseForCustomer = CommonService.GetTaskExpenseForCustomer(selectedItem.CustomerID);
        }, function () {
            //on cancel button press
            //console.log("Modal Closed");
        });
    };   

    //alert(TemporaryService.GetSelectedCustomer());

    
});


//selectedcustomer is resolved parameter passed
var TaskModalInstanceController = function ($uibModalInstance, $scope, CommonService, selectedCustomer) {

        $scope.CloseModal = function () {
                    $uibModalInstance.close(false);
                };
        $scope.CustomersList = CommonService.GetCustomersList();
        $scope.SelectedCustomer = selectedCustomer; 

        $scope.TaskCategoriesList = CommonService.GetTaskCategories();


        $scope.taskcreated = { task: '', amount: '', hours: '', category: '', rate: '', description: '' };


        $scope.CategorySelected = function (selectedItem) {
            $scope.taskcreated.category = selectedItem.TaskCategory;
        };

        $scope.SaveTask = function () {
           
            CommonService.SaveTaskForCustomer(selectedCustomer.CustomerID, $scope.taskcreated)
            alert('Task saved successfully')
            $uibModalInstance.close(true);
        };
};


var ExpensesModalInstanceController = function ($uibModalInstance, $scope, CommonService, selectedCustomer) {

    $scope.CloseModal = function () {
        $uibModalInstance.close('ok');
    };
    $scope.CustomersList = CommonService.GetCustomersList();
    $scope.SelectedCustomer = selectedCustomer;

    $scope.expensecreated = { expenseNo: '', expenseType: '', expenseAmount: '', description: '' };
    $scope.SaveExpense = function () {

        CommonService.SaveExpenseForCustomer(selectedCustomer.CustomerID, $scope.expensecreated);
        alert('Expense saved successfully')
        $uibModalInstance.close(true);
    };
    
};





