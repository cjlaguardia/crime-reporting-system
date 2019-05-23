<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email],input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  text-align: center;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  z-index: 1; /* Sit on top */
  width: 50%; /* Full width */
  height: 70%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
  text-align: center;
  margin: auto;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

</style>
<body>


<h2>Report Crime Form</h2>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="upload.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <input type="hidden" name="report_id"  required autocomplete="off"><br><br>
    <h1> Reporter Info </h1>
    <input type="text" name="name_reporter" placeholder="Name of Reporter"  required autocomplete="off"><br><br>
    <input type="number" name="contact_reporter" placeholder="Your Contact Number"><br><br>
    <input type="email" name="email_reporter" placeholder="Your Email"><br><br>
    <input type="text" name="address_reporter" placeholder="Your Address"><br><br>
    <input type="text" name="relationship_reporter" placeholder="Victim Relationship"><br><br>

    <h1>Victim Info</h1>
    <input type="text" name="name_victim"  placeholder="Name of Victim"><br><br>
    <label>Type of Abuse : </label>
    Physical<input type="radio" value="physical" name="abuse_victim">
    Mental<input type="radio" value="mental" name="abuse_victim">
    Sexual<input type="radio" value="sexual" name="abuse_victim">
    Neglect<input type="radio" value="Male" name="abuse_victim"><br><br> 
    <label>Gender of Victim:  </label>
    Male<input type="radio" value="Male" name="gender_victim">
    Female<input type="radio" value="Female" name="gender_victim"><br><br>
    <label>When did it happen?</label>
    <input type="date" name="date_victim" ><br><br>
    <input type="text" name="address_victim" placeholder="Where did it Happen"><br><br>


    <h1> Suspect Info </h1>
    <input type="text" name="name_suspect" placeholder="Name of Suspect"><br><br>
    <label>Gender of Suspect: </label>
    Male<input type="radio" value="Male" name="gender_suspect">
    Female<input type="radio" value="Female" name="gender_suspect">
    Gayshit<input type="radio" value="gayshit" name="gender_suspect"><br><br>
    <input type="text" name="address_suspect" placeholder="Address of Suspect"><br><br>
    <label> Upload Picture of Victim</label><br>
      <input type="file" name="fileToUpload" id="fileToUpload"><br><br> 

      <div class="clearfix">
        <input type="submit" value="Submit" name="submit">
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>