function getCharInfo1(name) {
  var somethingelse = "nothing";
  $.ajax({
    url:
      "https://solomid-resources.s3.amazonaws.com/blitz/tft/data/champions.json",
    type: "GET",
    data: { get_param: "value" },
    dataType: "json",
    success: function(data) {
      somethingelse = waiting(data, name);
      return somethingelse;
    }
  });
}
function waiting(data, name) {
  var result = data;
  var name1 = name;
  var sp1 = document.createElement("span");
  sp1.id = "childSpan";
  var sp1_content = document.createTextNode(result[name1].name);
  sp1.appendChild(sp1_content);
  var linebreak = document.createElement("br");
  sp1.appendChild(linebreak);
  var sp1_content = document.createTextNode(
    "Origin: " + result[name1].origin[0]
  );
  sp1.appendChild(sp1_content);
  var linebreak = document.createElement("br");
  sp1.appendChild(linebreak);
  var sp1_content = document.createTextNode("Class: " + result[name1].class[0]);
  sp1.appendChild(sp1_content);
  var sp2 = document.getElementById("childSpan");
  var parentDiv = sp2.parentNode;
  parentDiv.replaceChild(sp1, sp2);
  var x = document.getElementById("childSpan");
  x.style.color = "blue";
  x.style.fontSize = 20;
}
function getCharInfo2(name) {
  var somethingelse = "nothing";
  $.ajax({
    url:
      "https://solomid-resources.s3.amazonaws.com/blitz/tft/data/champions.json",
    type: "GET",
    data: { get_param: "value" },
    dataType: "json",
    success: function(data) {
      somethingelse = waiting1(data, name);
      return somethingelse;
    }
  });
}
function waiting1(data, name) {
  var result = data;
  var name1 = name;
  var sp1 = document.createElement("span");
  sp1.id = "childSpan";
  var namez = originChecker(data, name);
  var clazz = classChecker(data, name);
  var sp1_content = document.createTextNode(result[name1].name);
  sp1.appendChild(sp1_content);
  var linebreak = document.createElement("br");
  sp1.appendChild(linebreak);
  var sp1_content = document.createTextNode(
    "Origin: " + result[name1].origin[0]
  );
  sp1.appendChild(sp1_content);
  var linebreak = document.createElement("br");
  sp1.appendChild(linebreak);
  var sp1_content = document.createTextNode("Class: " + result[name1].class[0]);
  sp1.appendChild(sp1_content);
  var linebreak = document.createElement("br");
  sp1.appendChild(linebreak);
  var linebreak = document.createElement("br");
  sp1.appendChild(linebreak);
  var sp1_content = document.createTextNode(
    "Ultimate Ability: " + result[name1].ability.description
  );
  sp1.appendChild(sp1_content);
  var linebreak = document.createElement("br");
  sp1.appendChild(linebreak);
  var linebreak = document.createElement("br");
  sp1.appendChild(linebreak);
  var sp1_content = document.createTextNode("Same Origin" + namez);
  sp1.appendChild(sp1_content);
  var linebreak = document.createElement("br");
  sp1.appendChild(linebreak);
  var sp1_content = document.createTextNode("Same Class" + clazz);
  sp1.appendChild(sp1_content);
  var sp2 = document.getElementById("childSpan");
  var parentDiv = sp2.parentNode;
  parentDiv.replaceChild(sp1, sp2);
  var x = document.getElementById("childSpan");
  x.style.color = "blue";
  x.style.fontSize = 20;
}
function originChecker(data, name) {
  var namez = "";
  var obj2 = data[name].origin[0];
  for (var key in data) {
    if (data.hasOwnProperty(key)) {
      if (
        data[name].origin[0] == data[key].origin[0] &&
        data[name].name != data[key].name
      ) {
        namez += "  " + data[key].name;
      }
    }
  }
  return namez;
}
function classChecker(data, name) {
  var namez = "";
  var obj2 = data[name].class[0];
  for (var key in data) {
    if (data.hasOwnProperty(key)) {
      if (
        data[name].class[0] == data[key].class[0] &&
        data[name].name != data[key].name
      ) {
        namez += "  " + data[key].name;
      }
      
    }
  }
  return namez;
}
