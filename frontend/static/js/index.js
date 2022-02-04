const employees = document.getElementsByClassName("employee-overview");

window.onload = function() {
    //Add employee id to each item in the class. Also unhide first element
    for (var i = 0; i < employees.length; i++) {
        const employee = employees[i];
        if (i == 0) {
            employee.style.display = "block";
        }
        employee.id = "employee-" + i; 
    }
};

// Show previous employee
function previousEmployee() {
    for (let i = 0; i < employees.length; i++) {
        const employee = employees[i];
        const idString = "employee-";
        const idNumber = employee.id.replace(idString, '');
        const style = window.getComputedStyle(employee);
        // Get element that is currently being shown
        if (style.display === 'block') {
            // Hide it
            employee.style.display = "none";
            // Check if previous element in line exists
            let previousElement = document.getElementById(idString + (+idNumber - 1));
            if (previousElement != null) {
                previousElement.style.display = "block";
            }
            // Otherwise grab last element from list
            else {
                const lastNumber = employees.length - 1;
                previousElement = document.getElementById(idString + lastNumber);
                previousElement.style.display = "block";
            }
            break;
        }
    }
}

// Show next employee
function nextEmployee() {
    for (let i = 0; i < employees.length; i++) {
        const employee = employees[i];
        const idString = "employee-";
        const idNumber = employee.id.replace(idString, '');
        const style = window.getComputedStyle(employee);
        // Get element that is currently being shown
        if (style.display === 'block') {
            // Hide it
            employee.style.display = "none";
            // Check if next element in line exists
            let nextElement = document.getElementById(idString + (+idNumber + 1));
            if (nextElement != null) {
                nextElement.style.display = "block";
            }
            // Otherwise grab first element from list
            else {
                nextElement = document.getElementById(idString + "0");
                nextElement.style.display = "block";
            }
            break;
        }
    }
}