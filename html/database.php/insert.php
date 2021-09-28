<? php
    
    
   $name = $_post['name']; 
 $email = $_post['email']; 
$Product type = $_post['pro_type']; 
$Product Name = $_post['pro_name']; 
$Product amont = $_post['payment']; 
    
    
if (!empty( $name)||  !empty( $email)|| !empty( $Product type)|| !empty( $Product amont )|| !empty( $Product Name)     )
{
    
    $host = "localhost";
    
     $dbUsername = "root";
    
     $dbpassword = "";
     $dbname = " Aci_websites";
    #code...
    
    $conn = new mysqli($host, $dbUsername, $dbpassword,  $dbname );
    if (mysqli_connect_error())
    {die ('connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());}
    else {
        $SELECT = "SELECT email from register where email =? limit 1" ;
        $INSERT = "INSERT into register ( name ,email,Product type,Product Name,Product amont) values (?,?,?,?,?) " ;
        #prepare .....
        
    }
}
else {
    
    
    echo " all field are required "; 
die();}
    
    >