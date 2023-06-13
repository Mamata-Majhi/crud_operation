<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./color.css">


    <title>registration form</title>
</head>

<body>
    <?php
    include './html/navbar.php';
    ?>
    <section class="regback">
        <div class="px-16">
            <form action="./php/datastore.php" method="post" class="text-black">
                <div class=" text-center text-3xl font-bold pt-2">
                    <h1 class="text-black">STUDENT REGISTRATION FORM</h1>
                </div>
                <div class="pt-2">
                    <label for="foto" class="text-2xl font-semibold">Student Foto :</label>
                    <input class="w-2/5 text-xl border-2 rounded border-black cursor-pointer inputfield dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 p-2" id="foto" type="file" name="foto">
                </div>
                <div class="pt-4">
                    <label for="name" class="text-2xl font-semibold">Student Name :</label>
                    <input type="text" id="name" name="name" class="inputfield border-solid w-2/5 border-2 rounded border-black p-2 text-xl" placeholder="Enter your full name">
                </div>
                <div class="pt-4">
                    <label for="fname" class="text-2xl font-semibold">Father's Name :</label>
                    <input type="text" id="fname" name="fname" class="inputfield border-solid w-2/5 border-2 rounded border-black p-2 text-xl" placeholder="Enter your father's full name">
                </div>
                <div class="pt-4">
                    <label for="mname" class="text-2xl font-semibold">Mother's Name :</label>
                    <input type="text" id="mname" name="mname" class="inputfield border-solid w-2/5 border-2 rounded border-black p-2 text-xl" placeholder="Enter your mother's full name">
                </div>
                <div>
                    <label for="gender" class="text-2xl font-semibold">Gender</label>
                   
                    <!-- php code to update code -->

                    <input type="radio" name="gender" value="male" <?php echo (isset($data) && $data['gender'] == 'male') ? 'checked' : ''; ?> />
                    <label for="gender" class="text-xl">Male</label>
                    <input type="radio" name="gender" value="female" <?php echo (isset($data) && $data['gender'] == 'female') ? 'checked' : ''; ?>>
                    <label for="gender" class="text-xl">Female</label>
                    <input type="radio" name="gender" value="other" <?php echo (isset($data) && $data['gender'] == 'other') ? 'checked' : ''; ?> />
                    <label for="gender" class="text-xl">Other</label>
                    
                </div>
                <div class="pt-4">
                    <label for="bdate" class="text-2xl font-semibold">Date of Birth :</label>
                    <input type="date" name="bdate" id="bdate" class="inputfield border-solid w-2/5 border-2 rounded border-black p-2 text-xl">
                </div>
                <div class="pt-4">
                    <label for="email" class="text-2xl font-semibold">E-mail :</label>
                    <input type="email" id="email" name="email" class="inputfield border-solid w-2/5 border-2 rounded border-black p-2 text-xl" placeholder="xyz@gmail.com">
                </div>
                <div class="pt-4">
                    <label for="department" class="text-2xl font-semibold">Department :</label>
                    <select name="department" id="department" class="inputfield border-solid w-2/5 border-2 rounded border-black p-2 text-xl">
                        <option value="Bsc.CSIT">Bsc.CSIT</option>
                        <option value="BCA">BCA</option>
                        <option value="BIM">BIM</option>
                        <option value="BHM">BHM</option>
                        <option value="BBS">BBS</option>
                    </select>
                </div>
                <div class="pt-4">
                    <label for="phone" class="text-2xl font-semibold">Tel/Mobile :</label>
                    <input type="text" id="phone" name="phone" class="inputfield border-solid w-2/5 border-2 rounded border-black p-2 text-xl" placeholder="112 123 1234">
                </div>
                <div class="pt-4 w-2/5 pl-44 pb-4">
                    <button class="text-2xl font-bold bg-[#116D6E] hover:bg-[#107e6f] px-4 py-2 rounded-lg transition duration-500 ease-in-out">Submit</button>
                </div>


            </form>
        </div>
    </section>
</body>

</html>