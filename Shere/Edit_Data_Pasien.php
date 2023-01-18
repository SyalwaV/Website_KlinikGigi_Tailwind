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
            $data_dokter = mysqli_query($koneksi,"SELECT * FROM pasien WHERE id_pasien='$id'");


            if (isset($_POST['Submit'])) {
                $id_pasien = $_POST['id_pasien'];
                $nama_pasien = $_POST['nama_pasien'];
                $alamat_pasien = $_POST['alamat_pasien'];
                 
                $tanggal_datang = date('Y-m-d H:i:s', strtotime($_POST['tanggal_datang']));
                $keluhan_pasien = $_POST['keluhan_pasien'];
                $id_dokter = $_POST['id_dokter'];

                // include database connection file
                include "../koneksi.php";

                // Insert user data into table
                $result = mysqli_query($koneksi, 
                "UPDATE pasien SET 
                    id_pasien='$id_pasien', 
                    nama_pasien='$nama_pasien', 
                    alamat_pasien='$alamat_pasien' , 
                    tanggal_datang='$tanggal_datang' , 
                    id_dokter='$id_dokter' , 
                    keluhan_pasien='$keluhan_pasien' 
                    
                WHERE id_pasien='$id'");

                
                // Show message when user adde
                echo '
                <div class="mx-auto w-3/5 mt-4">
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                        <span class="font-medium">Berhasil!</span> Data Pasien Berhasil Dirubah.
                    </div>
                </div>
            
                ';

                echo '<meta http-equiv="refresh" content="2;url=../Pages/Pasien.php">';

            }
        ?>    

        

        <div class="bg-white mt-12 rounded-lg shadow-xl w-3/5 mx-auto">

            <div class="px-8 py-4">
                <p class="text-slate-800 text-xl flex ">
                    <a class="pt-2 mr-3" href="../Pages/Pasien.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 
                            .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg>
                    </a>
                    Pasien / Edit Data
                </p>
            </div>

            <hr>

            <div class="px-8 py-6 ">
                <?php
                    
                    $nomor = 1;
                    while($data = mysqli_fetch_array($data_dokter)){
                ?>
                <form action="Edit_Data_Pasien.php?id=<?php echo $data['id_pasien'] ?>" method="post" name="form1">
                    <input type="hidden" name="id_pasien" value="<?php echo $data['id_pasien'] ?>"  />

                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" value="<?php echo $data['nama_pasien'] ?>" name="nama_pasien" class="block py-2.5 px-0 w-full text-sm 
                        text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 
                        scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                        peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 
                        peer-focus:-translate-y-6">Nama Pasien</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" value="<?php echo $data['alamat_pasien'] ?>" name="alamat_pasien" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 
                        scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                        peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 
                        peer-focus:-translate-y-6">Alamat Pasien</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" value="<?php echo $data['keluhan_pasien'] ?>" name="keluhan_pasien" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 
                        scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                        peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 
                        peer-focus:-translate-y-6">Keluhan</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label  class="block mb-2 text-sm font-medium text-gray-900 ">Dokter yang menangani</label>

                        <select name="id_dokter"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value="">-- Pilih Dokter --</option>
                            <?php
                                include "../koneksi.php";

                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM `dokter`");
                                while ($dokter = mysqli_fetch_array($query)) {
                                    if ($dokter['id_dokter'] == $data['id_dokter']) 
                                    {
                                        $select="selected";
                                        } else {
                                        $select="";
                                    }
                            ?>
                            <option   <?php echo $select ?> value="<?php echo $dokter['id_dokter'] ?>"><?php echo $dokter['nama_dokter'] . ' ( Spesialis ' . $dokter['spesialis_dokter'] . ' )'?></option>

                            <?php 
                                } $koneksi->close();
                            ?>
                        </select>

                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label class="block mb-2 text-sm font-medium text-gray-900 ">Tanggal Masuk</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input  type="datetime-local" name="tanggal_datang" 
                            value="<?php echo date('Y-m-d\TH:i:s', strtotime($data['tanggal_datang'])) ?>"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 
                            focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Pilih Tanggal">
                        </div>
                    </div>

                    <button type="submit" name="Submit" class="text-white bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-blue-300 
                    font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2 text-center ">Submit</button>
                </form>

                <?php } ?>
            </div>

        </div>
    </div>


</body>

</html>