function getItemInfo1(name) {
  var somethingelse = "nothing";
  $.ajax({
    url: "https://solomid-resources.s3.amazonaws.com/blitz/tft/data/items.json",
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
  var br = document.createElement("br");

  if (typeof result[name1].buildsInto != "undefined") {
    var sp1 = document.createElement("span");
    sp1.id = "childSpan";
    var sp1_content = document.createTextNode(result[name1].name);
    sp1.appendChild(sp1_content);
    var linebreak = document.createElement("br");
    sp1.appendChild(linebreak);
    var sp1_content = document.createTextNode("Effect: " + result[name1].bonus);
    sp1.appendChild(sp1_content);
    var linebreak = document.createElement("br");
    sp1.appendChild(linebreak);
    var sp1_content = document.createTextNode(
      "Builds Into: " +
        result[name1].buildsInto[6] +
        ", " +
        result[name1].buildsInto[0] +
        ", " +
        result[name1].buildsInto[1] +
        ", " +
        result[name1].buildsInto[2] +
        ", " +
        result[name1].buildsInto[3] +
        ", " +
        result[name1].buildsInto[4] +
        ", " +
        result[name1].buildsInto[5] +
        " and " +
        result[name1].buildsInto[7]
    );
    sp1.appendChild(sp1_content);
    var sp2 = document.getElementById("childSpan");
    var parentDiv = sp2.parentNode;

    parentDiv.replaceChild(sp1, sp2);
  }
  if (typeof result[name1].buildsFrom != "undefined") {
    var sp1 = document.createElement("span");
    sp1.id = "childSpan";
    var sp1_content = document.createTextNode(result[name1].name);
    sp1.appendChild(sp1_content);
    var linebreak = document.createElement("br");
    sp1.appendChild(linebreak);
    var sp1_content = document.createTextNode("Effect: " + result[name1].bonus);
    sp1.appendChild(sp1_content);
    var linebreak = document.createElement("br");
    sp1.appendChild(linebreak);
    var sp1_content = document.createTextNode(
      "Built from: " +
        result[name1].buildsFrom[1] +
        " and " +
        result[name1].buildsFrom[0]
    );
    sp1.appendChild(sp1_content);
    var sp2 = document.getElementById("childSpan");
    var parentDiv = sp2.parentNode;
    parentDiv.replaceChild(sp1, sp2);
  }
  var x = document.getElementById("childSpan");
  x.style.color = "red";
  x.style.fontSize = 20;
}
function getData1() {
  $.ajax({
    url: "https://solomid-resources.s3.amazonaws.com/blitz/tft/data/items.json",
    type: "GET",
    data: { get_param: "value" },
    dataType: "json",
    success: function(data) {
      var result = data;
      console.log(result);
      console.log(data.bfsword.buildsInto);
      //console.log(p)
      return result;
    }
  });
}
