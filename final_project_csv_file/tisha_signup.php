 <?php 
include("header.php"); 
?>

<!-- php code for csv file -->
<?php
    $error="";
    $user_name="";
    $user_password="";
    $Contact="";
    $user_description="";
    $dept="";
    $gender="";
    $cr1="";

if (isset($_POST["submit"])) {
  
    $user_name=$_POST["user_name"];
    $user_email=$_POST["user_email"];
    $user_password=$_POST["user_password"];
    $Contact=$_POST["Contact"];
    $user_description=$_POST["user_description"];
    $dept=$_POST["dept"];
    $gender=$_POST["gender"];
  
     if($error==''){
//    csv file open   

        $file_open=fopen('table.csv',"a");
        $line_num=count(file("table.csv"));
            if($line_num>1)
            {
             $line_num=($line_num-1)+1;
            }
        $data=array(

            "Serial_no"=>$line_num,
            "user_name"=>$user_name,
            "user_email"=>$user_email,
            "user_password"=>$user_password,
            "Contact"=>$Contact,
            "user_description"=>$user_description,
            "dept"=>$dept,
            "gender"=>$gender,
        );

        fputcsv($file_open,$data);
           
    }
}
 
?>
    <div class="container">
        <h1>Sign Up From Here</h1>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <div >
  <span class="input-group-text" id="addon-wrapping"><img src="images/user.webp"</span>
<input type="text" name="user_name" value="" placeholder="Enter Your Name"class="form-control" required />
  
</div>

<br/>

 <div >
  <span class="input-group-text" id="addon-wrapping"><img src="images/email.png"</span>
<input type="email" name="user_email" value="" placeholder="Enter Your Email"class="form-control" required />
  
</div>
<br/>

 <div >
  <span class="input-group-text" id="addon-wrapping"><img src="images/password.png"</span>
<input type="password" name="user_password" value="" placeholder="Enter Your Password"
                            class="form-control" required />
  
</div>
<br/>

<div >
  <span class="input-group-text" id="addon-wrapping"><img src="images/contact.jpg"</span>
<input type="number" name="Contact" value="" placeholder="Enter Your number"
                            class="form-control" required  />
  
</div>
<br/>

<div >
  <span class="input-group-text" id="addon-wrapping"><img src="images/comment.png"</span>
<textarea name="user_description" class="form-control"></textarea>
  
</div>
<br/>
    
                    <div class="form-group">
                        <label><b>Gender</b></label>
                        <input type="radio" name="gender" value="Male" />
                        <label>Male</label>
                        <input type="radio" name="gender" value="Female" />
                        <label>Female</label>
                    </div>
<br/>


<div class="mb-3">
  <label for="formFileMultiple" class="form-label"> Choose files </label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>
<br/>


                    <div class="form-group">
                        <label><b>Course</b></label>
                        <input type="checkbox" name="course0" value="234" />
                        <label>ALGORITHM</label>
                        <input type="checkbox" name="course1" value="210" />
                        <label>SE</label>
                        <input type="checkbox" name="course2" value="310" />
                        <label>DBMS</label>

                        <input type="checkbox" name="course3" value="360" />
                        <label>SPL</label>
                    </div>
<br/>

                    <div class="form-group">
                        <label><b>Department</b></label>
                        <select name="dept">
                            <option value="CSE">Computer Science</option>
                            <option value="EEE">Electrical</option>
                            <option value="CE">Civil</option>
                        </select>
                    </div>
<br/>

<div class="form-group">
  <p><input type="checkbox" name="confirm" value="" />
                        <label>I read and agree to Teams & conditions</label></p>
                    </div>
<br/>
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="submit" style="background-color: palevioletred" value="submit" name="submit">Sign Up</button>

</div>
<br/>
<p>Already Have an Account ? <a href="/">Sign In </a></p>
                </form>
            </div>
        </div>
    </div>

    <?php 
include("footer.php"); 
    ?>

 