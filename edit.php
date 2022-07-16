<?php
session_start();
include "database/database.php";
include 'component/header.php';
if(isset($_POST['update'])){
    $fname = ($_POST['fname']);
    $lname = ($_POST['lname']);
    $gender = ($_POST['gender']);
    $phone = ($_POST['phone']);
    $qualification = ($_POST['qualification']);
    $email = ($_POST['email']);
    $pass = ($_POST['password']);
    

    $profilepicture = $_FILES['profilepicture']['name'];
    $temppicture = $_FILES['profilepicture']['tmp_name'];
    $picturefolder = 'image/'. $profilepicture;

    if(isset($_GET['id'])){
        $fullprofile_id = $_GET['id'];
    $todatabase = "UPDATE fullprofile SET fname='$fname', lname='$lname', gender='$gender', phone='$phone', qualification='$qualification', email='$email', pass='$pass', profilepicture='$profilepicture' WHERE id=$fullprofile_id";
  
    $toinsert = mysqli_query($databaseconnect, $todatabase);
    $toupload = move_uploaded_file($temppicture, $picturefolder);
    if($toinsert && $toupload){
      $_SESSION['message'] = "Profile deleted Successfully";
      $_SESSION['errorstyle'] = "green";
      header('location: list.php');
    } else {
      $_SESSION['message'] = "Profile not deleted";
      $_SESSION['errorstyle'] = "red";
      header('location: list.php');
    }
    }
  }
?>
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
    <div class="max-w-screen-2xl text-gray-500 sm:text-lg dark:text-gray-400">
    <?php
      if(isset($_SESSION['message']) && isset($_SESSION['errorstyle'])){ ?>
      <div class="p-2 mb-4 text-sm text-<?php echo $_SESSION['errostyle']?>-700 bg-<?php echo $_SESSION['errorstyle']?>-100 rounded-lg dark:bg-<?php echo $_SESSION['errorstyle']?>-200 dark:text-<?php echo $_SESSION['errorstyle']?>-800" role="alert">
         <span class="font-medium"><?php echo $_SESSION['message']?></span>
      </div>
      <?php
      }
      unset($_SESSION['message']);
      unset($_SESSION['errorstyle']);
      ?>
                        <?php
                         if(isset($_GET['id'])){
                        $fullprofile_id = $_GET['id']; 
                        $showsingle = "SELECT * FROM fullprofile WHERE id=$fullprofile_id";
                        $showfromdb = mysqli_query($databaseconnect, $showsingle);
                            while ($fullprofile = mysqli_fetch_array($showfromdb)) {
                            
                        ?>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
          <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First name</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your Firstname" required="" autocomplete="off" name="fname" value="<?php echo $fullprofile['fname'];?>">
          </div>
          <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last name</label>
            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your Lastname" required="" autocomplete="off" name="lname" value="<?php echo $fullprofile['lname'];?>">
          </div>
          <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an option</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="gender">
              <option selected="">Choose a gender</option>
              <option value="male"<?php if($fullprofile['gender'] == 'male'){echo "selected";}?>>Male</option>
              <option value="female"<?php if($fullprofile['gender'] == 'female'){echo "selected";}?>>Female</option>
              <option value="other"<?php if($fullprofile['gender'] == 'other'){echo "selected";}?>>Other</option>
            </select>

          </div>
          <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone number</label>
            <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="080.., 070.., 090.., 081.., 091.." required="" autocomplete="off" name="phone" value="<?php echo $fullprofile['phone'];?>">
          </div>
          <div>
            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Qualification</label>
            <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required="" autocomplete="off" name="qualification" value="<?php echo $fullprofile['qualification'];?>">
          </div>
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your Email" required="" autocomplete="off" name="email" value="<?php echo $fullprofile['email'];?>">
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required="" autocomplete="off" name="password" value="<?php echo $fullprofile['pass'];?>">
          </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Profile Picture</label>
            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" name="profilepicture" value="<?php echo $fullprofile['profilepicture'];?>">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG.</p>
          </div>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="update">Update</button>
      </form>
      <?php
                            }
                        }
      ?>
    </div>
  </div>
</section>
<?php
include 'component/footer.php';
?>