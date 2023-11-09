function validateForm() {
    let x = document.forms["myform"]["fname"].value;
    if (x == "") {
      alert("first name must be filled out");
      return false;
    }
    let y = document.forms["myform"]["lname"].value;
    if (y == "") {
      alert("last name must be filled out");
      return false;
    }
    let z = document.forms["myform"]["DOB"].value;
    if (z == "") {
      alert("Date of Birth must be filled out");
      return false;
    }
    let a = document.forms["myform"]["email"].value;
    if (a == "") {
      alert("email must be filled out");
      return false;
    }
    let ab = document.forms["myform"]["phone"].value;
    if (ab == "") {
      alert("Mobile Number must be filled out");
      return false;
    }
    let b = document.forms["myform"]["phone"].value;
    if (b == "") {
      alert("phone must be filled out");
      return false;
    }
    let c = document.forms["myform"]["gridRadios"].value;
    if (c == "") {
      alert("Gender must be filled out");
      return false;
    }
    let d = document.forms["myform"]["department"].value;
    if (d == "") {
      alert("department must be filled out");
      return false;
    }
  
    let e = document.forms["myform"]["username"].value;
    if (e == "") {
      alert("username must be filled out");
      return false;
    }
  
    let password = document.forms["myform"]["password"].value;
    if (password == "") {
      alert("password must be filled out");
      return false;
    }
    let confirm = document.forms["myform"]["confirm"].value;
    if (confirm == "") {
      alert("repeat password must be filled out");
      return false;
    }
  
    if(password !="" && confirm != "" && password != confirm)
    {
      alert("password does not matched with confirm password field");
      return false;
    }
  
    let h = document.forms["myform"]["profile"].value;
    if (h == "") {
      alert("profile must be filled out");
      return false;
    }
    let checkbox = document.form["myform"]["terms"].checked;
    console.log(checkbox);
    if (!checkbox){
      alert("please accept terms and conditions");
      return false;
    }
    let j = document.forms["myform"]["country"].value;
    if (j == "") {
      alert("country must be filled out");
      return false;
    }
    let k = document.forms["myform"]["state"].value;
    if (k == "") {
      alert("state must be filled out");
      return false;
    }
  
    let l = document.forms["myform"]["city"].value;
    if (l == "") {
      alert("city must be filled out");
      return false;
    }
    let m = document.forms["myform"]["pincode"].value;
    if (m == "") {
      alert("pincode must be filled out");
      return false;
    }
    let n = document.forms["myform"]["District"].value;
    if (n == "") {
      alert("District must be filled out");
      return false;
    }
    let o = document.forms["myform"]["full-address"].value;
    if (o == "") {
      alert("fulladdress must be filled out");
      return false;
    }
  }
  
  