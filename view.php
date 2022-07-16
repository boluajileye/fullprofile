<?php
include "database/database.php";
include 'component/header.php';
?>
<section class="bg-white max-h-screen dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="max-w-screen-2xl text-gray-500 sm:text-lg dark:text-gray-400">
            <?php
            if (isset($_GET['id'])) {
                $fullprofile_id = $_GET['id'];
                $showsingle = "SELECT * FROM fullprofile WHERE id=$fullprofile_id";
                $showfromdb = mysqli_query($databaseconnect, $showsingle);
                while ($fullprofile = mysqli_fetch_array($showfromdb)) {

            ?>
                    <div class="flex items-center h-screen w-full justify-center">

                        <div class="max-w-xs">
                            <div class="bg-gray-200 shadow-xl rounded-lg py-3 dark:bg-gray-800">
                                <div class="photo-wrapper p-2">
                                    <img class="w-32 h-32 rounded-full mx-auto" src="image/<?php echo $fullprofile['profilepicture'];?>" alt="<?php echo $fullprofile['fname']; ?> <?php echo $fullprofile['lname']; ?>">
                                </div>
                                <div class="p-2">
                                    <h3 class="text-center text-xl text-gray-900 font-medium leading-8"><?php echo $fullprofile['fname']; ?> <?php echo $fullprofile['lname']; ?></h3>
                                    <div class="text-center text-gray-400 text-xs font-semibold">
                                        <p><?php echo $fullprofile['qualification']; ?></p>
                                    </div>
                                    <table class="text-xs my-3">
                                        <tbody>
                                            <tr>
                                                <td class="px-2 py-2 text-gray-500 font-semibold">Gender</td>
                                                <td class="px-2 py-2"><?php echo $fullprofile['gender']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>
                                                <td class="px-2 py-2"><?php echo $fullprofile['phone']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                                <td class="px-2 py-2"><?php echo $fullprofile['email']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-center my-3">
                                        <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="list.php">Go Back</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
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