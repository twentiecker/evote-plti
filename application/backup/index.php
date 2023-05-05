<h1> Registrasi </h1>

<script>
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
</head>
<body>

<h2>JavaScript Validation</h2>

<form name="myForm" action="registrasi/tampiluser" onsubmit="return validateForm()" method="post">
  NIK: <input type="text" name="fname">
  <input type="submit" value="Submit">
</form>