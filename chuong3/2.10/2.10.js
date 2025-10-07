let display = document.getElementById('display');

function appendNumber(num) {
    if (display.value === "0") display.value = num;
    else display.value += num;
}

function appendOperator(op) {
    display.value += op;
}

function clearAll() {
    display.value = "0";
}

function clearEntry() {
    display.value = display.value.slice(0, -1);
    if (display.value === "") display.value = "0";
}

function toggleSign() {
    if (display.value.startsWith("-")) {
        display.value = display.value.slice(1);
    } else {
        display.value = "-" + display.value;
    }
}

function calculate() {
    try {
        display.value = eval(display.value);
    } catch {
        display.value = "Error";
    }
}