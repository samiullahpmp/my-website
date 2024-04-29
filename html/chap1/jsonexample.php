<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2>Converting JSON string into a Javascript Object</h2>
<div id="result"></div>

<script>
const person = '{"name":"Garry Owen", "age":47, "car":"BMW"}';

const obj = JSON.parse(person);

document.getElementById("result").innerHTML = obj.name + " is " + obj.age+ " and drives a " + obj.car;

</script>


</body>
</html>