
flatpickr("#date-input", {
    enableTime: false,
    dateFormat: "Y-m-d H:i",
})
flatpickr("#time-input", {
    enableTime: true,
        noCalendar: true,
    dateFormat: "H:i",
})


var example_array = [{ 'name': 'Small hookah', 'price': 15 }, { 'name': 'B', 'price': 350 }, { 'name': 'A', 'price': 150 }, { 'name': 'B', 'price': 300 }];

var select = document.getElementById("example-select");
for(index in example_array) {
    select.options[select.options.length] = new Option(example_array[index], index);
}

for (key in example_array) {
    if (data.hasOwnProperty(key)) {
        console.log(example_array[key])
    }
}