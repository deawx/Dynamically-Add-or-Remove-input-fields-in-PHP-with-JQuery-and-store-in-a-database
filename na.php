 <?php  
 $connect = mysqli_connect("localhost", "root", "", "testdb");  
 $number = count($_POST["name"]);  
 if($number > 0)  
 {  
     
          //if(trim($_POST["name"][0] != ''))  
          // {  
              // $sql = "INSERT INTO input_field(College1) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][0])."')";  
              //  mysqli_query($connect, $sql);  
          // }  

            if(trim($_POST["name"][0] != '') && trim($_POST["name"][1] != '') && trim($_POST["name"][2] != '') && trim($_POST["name"][3] != '') && trim($_POST["name"][4] != ''))  {  
                $sql = "INSERT INTO input_field(College1,College2,College3,College4,College5) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][0])."','".mysqli_real_escape_string($connect, $_POST["name"][1])."','".mysqli_real_escape_string($connect, $_POST["name"][2])."','".mysqli_real_escape_string($connect, $_POST["name"][3])."','".mysqli_real_escape_string($connect, $_POST["name"][4])."')";  
                mysqli_query($connect, $sql);  
           } 
       
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?>  
