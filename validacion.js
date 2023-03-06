function doValidate()
    {
            console.log("Validating...");
            try
            {
                email = document.getElementById("exampleInputEmail1").value;
                pw = document.getElementById("exampleInputPassword1").value;
                console.log("Validating email="+email);
                console.log("Validating pw="+pw);
                if (pw == null || pw == "" || email == null || email == "")
                {
                    alert("Los dos campos estan vacios");
                    return false;
                }
                if(email.search("@") === -1)
                {
                    alert("La dirección de correo debe contener @");
                    return false;
                }
                return true;
            }
            catch(e)
            {
                return false;
            }
            return false;
    }