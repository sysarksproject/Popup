// JavaScript source code
var invoicesApproved = [{
    name: 'Company1', invno: 'Inv01', amount: '630', customerId: '1',
    Tasks: [{ task: 'Task1', amount: '100', hours: '8', category: 'A Category', rate: '' },
    { task: 'Task2', amount: '200', hours: '8', category: 'A Category', rate: '' },
    { task: 'Task3', amount: '300', hours: '8', category: 'A Category', rate: '' }],
    Expenses: [{ expenseNo: '1', expenseType: '', expenseAmount: '10', description: 'expense 1' },
    { expenseNo: '2', expenseType: '', expenseAmount: '20', description: 'expense 2' }]
},
{
    name: 'Company2', invno: 'Inv02', amount: '630', customerId: '2',
    Tasks: [{ task: 'Task4', amount: '100', hours: '8', category: 'B Category', rate: '' },
    { task: 'Task5', amount: '200', hours: '8', category: 'B Category', rate: '' },
    { task: 'Task6', amount: '300', hours: '8', category: 'B Category', rate: '' }],
    Expenses: [{ expenseNo: '3', expenseType: '', expenseAmount: '10', description: 'expense 3' },
    { expenseNo: '4', expenseType: '', expenseAmount: '20', description: 'expense 4' }]
},
{
    name: 'Company3', invno: 'Inv03', amount: '630', customerId: '3',
    Tasks: [{ task: 'Task7', amount: '100', hours: '8', category: 'C Category', rate: '' },
    { task: 'Task8', amount: '200', hours: '8', category: 'C Category', rate: '' },
    { task: 'Task9', amount: '300', hours: '8', category: 'C Category', rate: '' }],
    Expenses: [{ expenseNo: '5', expenseType: '', expenseAmount: '10', description: 'expense 5' },
    { expenseNo: '6', expenseType: '', expenseAmount: '20', description: 'expense 6' }]
}];


var invoicesSubmitted = [{
    name: 'Company4', invno: 'Inv04', amount: '330', customerId: '4',
    Tasks: [{ task: 'Task10', amount: '100', hours: '8', category: 'D Category', rate: '' },
    { task: 'Task11', amount: '100', hours: '8', category: 'D Category', rate: '' },
    { task: 'Task12', amount: '100', hours: '8', category: 'D Category', rate: '' }],
    Expenses: [{ expenseNo: '7', expenseType: '', expenseAmount: '10', description: 'expense 1' },
    { expenseNo: '8', expenseType: '', expenseAmount: '20', description: 'expense 2' }]
},
{
    name: 'Company5', invno: 'Inv05', amount: '330', customerId: '5',
    Tasks: [{ task: 'Task13', amount: '100', hours: '8', category: 'E Category', rate: '' },
    { task: 'Task14', amount: '100', hours: '8', category: 'E Category', rate: '' },
    { task: 'Task15', amount: '100', hours: '8', category: 'E Category', rate: '' }],
    Expenses: [{ expenseNo: '9', expenseType: '', expenseAmount: '10', description: 'expense 3' },
    { expenseNo: '10', expenseType: '', expenseAmount: '20', description: 'expense 4' }]
    }];

var invoicesToBeSubmitted = [{
    name: 'Company1', invno: 'Inv06', amount: '480', customerId: '1',
    Tasks: [{ task: 'Task16', amount: '150', hours: '8', category: 'A Category', rate: '' },
    { task: 'Task17', amount: '150', hours: '8', category: 'A Category', rate: '' },
    { task: 'Task18', amount: '150', hours: '8', category: 'A Category', rate: '' }],
    Expenses: [{ expenseNo: '1', expenseType: '', expenseAmount: '10', description: 'expense 1' },
    { expenseNo: '2', expenseType: '', expenseAmount: '20', description: 'expense 2' }]
},
{
    name: 'Company2', invno: 'Inv07', amount: '330', customerId: '2',
    Tasks: [{ task: 'Task19', amount: '100', hours: '8', category: 'B Category', rate: '' },
    { task: 'Task20', amount: '100', hours: '8', category: 'B Category', rate: '' },
    { task: 'Task21', amount: '100', hours: '8', category: 'B Category', rate: '' }],
    Expenses: [{ expenseNo: '3', expenseType: '', expenseAmount: '10', description: 'expense 3' },
    { expenseNo: '4', expenseType: '', expenseAmount: '20', description: 'expense 4' }]
},
{
    name: 'Company3', invno: 'Inv08', amount: '630', customerId: '3',
    Tasks: [{ task: 'Task22', amount: '100', hours: '8', category: 'C Category', rate: '' },
    { task: 'Task23', amount: '200', hours: '8', category: 'C Category', rate: '' },
    { task: 'Task24', amount: '300', hours: '8', category: 'C Category', rate: '' }],
    Expenses: [{ expenseNo: '5', expenseType: '', expenseAmount: '10', description: 'expense 5' },
    { expenseNo: '6', expenseType: '', expenseAmount: '20', description: 'expense 6' }]
}];

var customers = [{
    customer: 'Company1',
    customerID: '1',
    Tasks: [{ task: 'Task1', amount: '100', hours: '8', category: 'B Category', rate: '' },
    { task: 'Task2', amount: '200', hours: '8', category: 'B Category', rate: '' },
    { task: 'Task3', amount: '300', hours: '8', category: 'B Category', rate: '' }],
    Expenses: [{ expenseNo: '1', expenseType: '', expenseAmount: '10', description: 'expense 1' },
    { expenseNo: '2', expenseType: '', expenseAmount: '20', description: 'expense 2' }]
},
{
    customer: 'Company2',
    customerID: '2',
    Tasks: [{ task: 'Task2_1', amount: '100', hours: '8', category: 'A Category', rate: '' },
    { task: 'Task2_2', amount: '200', hours: '8', category: 'A Category', rate: '' },
    { task: 'Task2_3', amount: '300', hours: '8', category: 'A Category', rate: '' }],
    Expenses: [{ expenseNo: '2_1', expenseType: '', expenseAmount: '10', description: 'expense 1' },
    { expenseNo: '2_2', expenseType: '', expenseAmount: '20', description: 'expense 2' }]
},
{
    customer: 'Company3',
    customerID: '3',
    Tasks: [{ task: 'Task3_1', amount: '100', hours: '8', category: 'C Category', rate: '' },
    { task: 'Task3_2', amount: '200', hours: '8', category: 'C Category', rate: '' },
    { task: 'Task3_3', amount: '300', hours: '8', category: 'C Category', rate: '' }],
    Expenses: [{ expenseNo: '3_1', expenseType: '', expenseAmount: '10', description: 'expense 1' },
    { expenseNo: '3_2', expenseType: '', expenseAmount: '20', description: 'expense 2' }]
}];

var invoicesCount = { ToBeSubmitted: '3', Submitted: '2', Approved: '3' };

var customersList = [
    { CustomerID: '1', CustomerName: 'Company1' },
    { CustomerID: '2', CustomerName: 'Company2' },
    { CustomerID: '3', CustomerName: 'Company3' },
    { CustomerID: '4', CustomerName: 'Company4' },
    { CustomerID: '5', CustomerName: 'Company5' },
];

var TaskExpenseForCustomer1 = {
    customer: 'Company1', customerId: '1',
    Tasks: [{ task: 'Task1', amount: '100', hours: '8', category: 'B Category', rate: '', description: '' },
    { task: 'Task2', amount: '200', hours: '8', category: 'B Category', rate: '', description: '' },
    { task: 'Task3', amount: '300', hours: '8', category: 'B Category', rate: '', description: '' }],
    Expenses: [{ expenseNo: '1', expenseType: '', expenseAmount: '10', description: 'expense 1' },
    { expenseNo: '2', expenseType: '', expenseAmount: '20', description: 'expense 2' }]
};

var TaskExpenseForCustomer2 = {
    customer: 'Company1', customerId: '2',
    Tasks: [{ task: 'Task2_1', amount: '100', hours: '8', category: 'A Category', rate: '', description: '' },
    { task: 'Task2_2', amount: '200', hours: '8', category: 'A Category', rate: '', description: '' },
    { task: 'Task2_3', amount: '300', hours: '8', category: 'A Category', rate: '', description: '' }],
    Expenses: [{ expenseNo: '2_1', expenseType: '', expenseAmount: '10', description: 'expense 1' },
    { expenseNo: '2_2', expenseType: '', expenseAmount: '20', description: 'expense 2' }]
};

var TaskExpenseForCustomer3 = {
    customer: 'Company1', customerId: '3',
    Tasks: [{ task: 'Task3_1', amount: '100', hours: '8', category: 'C Category', rate: '', description: '' },
    { task: 'Task3_2', amount: '200', hours: '8', category: 'C Category', rate: '', description: '' },
    { task: 'Task3_3', amount: '300', hours: '8', category: 'C Category', rate: '', description: '' }],
    Expenses: [{ expenseNo: '3_1', expenseType: '', expenseAmount: '10', description: 'expense 1' },
    { expenseNo: '3_2', expenseType: '', expenseAmount: '20', description: 'expense 2' }]
};

var TaskExpenseForCustomer4 = {
    customer: 'Company1', customerId: '4',
    Tasks: [{ task: 'Task4_1', amount: '100', hours: '8', category: 'category1', rate: '', description: '' },
    { task: 'Task4_2', amount: '200', hours: '8', category: 'category1', rate: '', description: '' },
    { task: 'Task4_3', amount: '300', hours: '8', category: 'category1', rate: '', description: '' }],
    Expenses: [{ expenseNo: '4_1', expenseType: '', expenseAmount: '10', description: 'expense 1' },
    { expenseNo: '4_2', expenseType: '', expenseAmount: '20', description: 'expense 2' }]
};

var TaskExpenseForCustomer5 = {
    customer: 'Company1', customerId: '5',
    Tasks: [{ task: 'Task5_1', amount: '100', hours: '8', category: 'category1', rate: '', description: '' },
    { task: 'Task5_2', amount: '200', hours: '8', category: 'category1', rate: '', description: '' },
    { task: 'Task5_3', amount: '300', hours: '8', category: 'category1', rate: '', description: '' }],
    Expenses: [{ expenseNo: '5_1', expenseType: '', expenseAmount: '10', description: 'expense 1' },
    { expenseNo: '5_2', expenseType: '', expenseAmount: '20', description: 'expense 2' }]
};