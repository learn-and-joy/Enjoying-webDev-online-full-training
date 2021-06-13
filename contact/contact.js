function contacter() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var country = document.getElementById("country").value;
    var subject = document.getElementById("lname").value;
    console.log({fname, lname, country, subject}); 
    console.log([fname, lname, country, subject]); 
}

document.getElementById('submit').addEventListener("click", contacter)