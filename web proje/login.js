function validateForm() {
    var email = document.getElementById("exampleInputEmail1").value;
    var password = document.getElementById("exampleInputPassword1").value;
    
    if (email == "" || password == "") {
      alert("Lütfen tüm alanları doldurun!");
      return false;
    }
    return true;
  }

  