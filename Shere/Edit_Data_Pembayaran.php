<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Excel || Klinik</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        <nav class="bg-slate-900 text-white border-gray-200 px-2 sm:px-4 py-2.5 rounded ">
            <div class="container flex flex-wrap justify-between items-center mx-auto md:px-24 h-12">
                <a href="#" class="flex items-center mt-2">
                    <span class="self-center text-xl font-semibold whitespace-nowrap d ">Klinik</span>
                </a>
                <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        <li>
                            <a href="../index.php" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent  md:p-0 " aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="../Pages/Dokter.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Dokter</a>
                        </li>
                        <li>
                            <a href="../Pages/Pasien.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Pasien</a>
                        </li>
                        <li>
                            <a href="../Pages/Petugas.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Petugas</a>
                        </li>
                        <li>
                            <a href="../Pages/Pembayaran.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Pembayaran</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
            include "../koneksi.php";
            $id = $_GET['id'];
            $data_pembayaran = mysqli_query($koneksi, "SELECT * from pembayaran 
            inner join 
            petugas 
            on 
            pembayaran.id_petugas = petugas.id_petugas 
            inner join 
            pasien 
            on 
            pembayaran.id_pasien = pasien.id_pasien
            WHERE id_pembayaran='$id'");

            if (isset($_POST['Submit'])) {
                $id_pembayaran  = $_POST['id_pembayaran'];
                $id_petugas = $_POST['id_petugas'];
                $id_pasien  = $_POST['id_pasien'];
                $harga = $_POST['harga'];

                // include database connection file
                include "../koneksi.php";

                // Insert user data into table
                $result = mysqli_query($koneksi, 
                "UPDATE pembayaran SET 
                    id_pembayaran='$id_pembayaran', 
                    id_petugas='$id_petugas', 
                    id_pasien='$id_pasien' , 
                    harga='$harga' 
                    
                WHERE id_pembayaran='$id'");

                
                // Show message when user adde
                echo '
                <div class="mx-auto w-3/5 mt-4">
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                        <span class="font-medium">Berhasil!</span> Data Pembayaran Berhasil Dirubah.
                    </div>
                </div>
            
                ';

                echo '<meta http-equiv="refresh" content="2;url=../Pages/Pembayaran.php">';

            }
        ?>    

        

        <div class="bg-white mt-12 rounded-lg shadow-xl w-3/5 mx-auto">

            <div class="px-8 py-4">
                <p class="text-slate-800 text-xl flex ">
                    <a class="pt-2 mr-3" href="../Pages/Pembayaran.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 
                            .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg>
                    </a>
                    Pembayaran / Edit Data
                </p>
            </div>

            <hr>

            <div class="px-8 py-6 ">
                <?php
                    
                    $nomor = 1;
                    while($data = mysqli_fetch_array($data_pembayaran)){
                ?>
                <form action="Edit_Data_Pembayaran.php?id=<?php echo $data['id_pembayaran'] ?>" method="post" name="form1">
                    <input type="hidden" name="id_pembayaran" value="<?php echo $data['id_pembayaran'] ?>"/>
                    <input type="hidden" name="id_petugas" value="<?php echo $data['id_petugas'] ?>"/>
                    <input type="hidden" name="id_pasien" value="<?php echo $data['id_pasien'] ?>"/>
                    <div>
                        <label  class="block mb-2 text-sm font-medium text-gray-900">Nama Pasien</label>
                        <input type="text"  disabled value="<?php echo $data['nama_pasien'] ?>"
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border 
                        border-gray-300 sm:text-xs focus:ring-slate focus:border-slate-800">
                    </div>
                    <div class="mt-4">
                        <label  class="block mb-2 text-sm font-medium text-gray-900">Nama Petugas</label>
                        <input type="text"  disabled value="<?php echo $data['nama_petugas'] ?>"
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border 
                        border-gray-300 sm:text-xs focus:ring-slate focus:border-slate-800">
                    </div>
                    <div class="mt-4">
                        <label  class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                        <input type="number" name="harga"  value="<?php echo $data['harga'] ?>"
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border 
                        border-gray-300 sm:text-xs focus:ring-slate focus:border-slate-800">
                    </div>
                    
                    <button type="submit" name="Submit" class="text-white mt-6 bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-blue-300 
                    font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2 text-center ">Submit</button>
                </form>

                <?php } ?>
            </div>

        </div>
    </div>


</body>

</html>