// html:
var element = document.getElementById("id01");
element.innerHTML = "New Heading";

// css:
element.style.color = "blue";

// events:
function showContent() {
    var companyName = document.getElementById("guest").value

    document.getElementById("company_name").innerHTML = companyName;
    console.log(document.getElementById("company_name").innerHTML = companyName);


    var temp = document.getElementsByTagName("template")[0];
    var clon = temp.content.cloneNode(true);
    document.body.appendChild(clon);
    
  }

  document.getElementById("btn").addEventListener("click", showContent)
//  document.getElementById("btn").addEventListener("dblclick", showContent)
//  document.getElementById("btn").addEventListener("mouseover", showContent)
