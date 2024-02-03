let calculation = ''; 


function displayCalculation() {
    document.getElementById('result').innerText = calculation;
}


function updateCalculation(value) {
    calculation += value;
    displayCalculation();
}


function calculateResult() {
    calculation = eval(calculation);
    displayCalculation();
}


function clearCalculation() {
    calculation = '';
    displayCalculation();
}


