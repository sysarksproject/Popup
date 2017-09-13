// JavaScript source code
app.service('DashboardService', function () {

    this.GetInvoicesApproved = function () { return invoicesApproved; };        

    this.GetInvoicesSubmitted = function () { return invoicesSubmitted; };      

    this.GetInvoicesToBeSubmitted = function () { return invoicesToBeSubmitted; };      

    this.GetCustomersWithTaskandExpenses = function () { return customers; };    

    this.GetCountOfInvoices = function () { return invoicesCount; };
});

app.service('CommonService', function () {    

    this.GetCustomersList = function () { return customersList; };  

    this.GetTaskExpenseForCustomer = function (customerId) {
        var taskExpenseForCustomer;
        switch (customerId) {
            case '1':
                taskExpenseForCustomer = TaskExpenseForCustomer1;
                break;
            case '2':
                taskExpenseForCustomer = TaskExpenseForCustomer2;
                break;
            case '3':
                taskExpenseForCustomer = TaskExpenseForCustomer3;
                break;
            case '4':
                taskExpenseForCustomer = TaskExpenseForCustomer4;
                break;
            case '5':
                taskExpenseForCustomer = TaskExpenseForCustomer5;
                break;
        }
        return taskExpenseForCustomer;
    };

    this.GetTaskCategories = function () {
        var categories = [
            { TaskCategoryID: '1', TaskCategory: 'A Category' },
            { TaskCategoryID: '2', TaskCategory: 'B Category' },
            { TaskCategoryID: '3', TaskCategory: 'C Category' },
            { TaskCategoryID: '4', TaskCategory: 'D Category' },
            { TaskCategoryID: '5', TaskCategory: 'E Category' },
        ];

        return categories;
    };

    this.SaveTaskForCustomer = function (customerid, task)
    {
        
        switch (customerid) {
            case '1':
                TaskExpenseForCustomer1.Tasks.push(task);
                break;
            case '2':
                TaskExpenseForCustomer2.Tasks.push(task);
                break;
            case '3':
                TaskExpenseForCustomer3.Tasks.push(task);
                break;
            case '4':
                TaskExpenseForCustomer4.Tasks.push(task);
                break;
            case '5':
                TaskExpenseForCustomer5.Tasks.push(task);
                break;
        }
        
    };

    this.SaveExpenseForCustomer = function (customerid, expense) {

        switch (customerid) {
            case '1':
                TaskExpenseForCustomer1.Expenses.push(expense);
                break;
            case '2':
                TaskExpenseForCustomer2.Expenses.push(expense);
                break;
            case '3':
                TaskExpenseForCustomer3.Expenses.push(expense);
                break;
            case '4':
                TaskExpenseForCustomer4.Expenses.push(expense);
                break;
            case '5':
                TaskExpenseForCustomer5.Expenses.push(expense);
                break;
        }

    };

});

app.service('TemporaryService', function () {
    var SelectedCustomer;
    this.GetSelectedCustomer = function () {
        return SelectedCustomer;
    };
    this.SetSelectedCustomer = function (data) {
        SelectedCustomer = data;
    };
});

