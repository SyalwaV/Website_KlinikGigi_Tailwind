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
                            <a href="Dokter.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Dokter</a>
                        </li>
                        <li>
                            <a href="Pasien.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Pasien</a>
                        </li>
                        <li>
                            <a href="Petugas.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Petugas</a>
                        </li>
                        <li>
                            <a href="Pembayaran.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Pembayaran</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php

            if (isset ($_GET['id'])) {

                include '../koneksi.php';
                
                $id = $_GET['id'];
                // Insert user data into table
                $result = mysqli_query($koneksi,"DELETE from pasien where id_pasien='$id'");

                
                // Show message when user adde
                if ($result) {
                    echo '
                    <div class="mx-auto px-24 mt-8 -mb-4">
                        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                            <span class="font-medium">Berhasil!</span> Data Pasien Berhasil Dihapus.
                        </div>
                    </div>
                
                    ';

                    echo '<meta http-equiv="refresh" content="2;url=Pasien.php">';
                }

            }
        ?>

        <div class="md:mx-24 bg-white mt-8 rounded-lg shadow-xl">

            <div class="px-8 py-4">
                <p class="text-slate-800 text-xl">
                    Pasien
                </p>
            </div>

            <hr>

            <div class="mt-6 mx-8">
                <a class="px-4 py-2 bg-slate-500 hover:bg-slate-700 rounded-lg text-white"
                 href="../Shere/Add_Data_Pasien.php">Tambah Data</a>
            </div>

            <div class="flex flex-col px-8 py-6">
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed ">
                                <thead class="bg-gray-100 ">
                                    <tr>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Nama
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Alamat
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Keluhan
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Tanggal Datang
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Dokter Penangan
                                        </th>
                                        <th scope="col" class="p-4 w-1/12">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 ">

                                    <?php
                                        include "../koneksi.php";

                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * from pasien inner join dokter on pasien.id_dokter = dokter.id_dokter;");
                                        while ($data = mysqli_fetch_array($query)) {
                                     ?>

                                    <tr class="hover:bg-gray-100 ">
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap "><?php echo $data['nama_pasien'] ?></td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                            <?php echo $data['alamat_pasien'] ?>
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap "><?php echo $data['keluhan_pasien'] ?></td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap "><?php echo date('Y-m-d H:i:s', strtotime($data['tanggal_datang']));  ?></td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap "><?php echo $data['nama_dokter'] ?></td>
                                        <td class="py-4 px-6 text-sm font-medium whitespace-nowrap border flex justify-center space-x-2">
                                            <a href="../Shere/Edit_Data_Pasien.php?id=<?php echo $data['id_pasien'] ?>" class="bg-amber-400 hover:bg-amber-600  p-1.5 rounded-sm text-black   hover:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>
                                            <button data-modal-toggle="modalhapus<?php echo $data['id_pasien'] ?>" type="button" class="bg-red-500 hover:bg-red-700 p-1.5 rounded-sm text-white hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                </svg>
                                            </button>

                                            <!-- modal -->
                                            <div id="modalhapus<?php echo $data['id_pasien'] ?>" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-1 z-50 justify-center items-center 
                                            h-modal md:h-full md:inset-0">
                                                <div class="relative px-4 w-full max-w-2xl h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow ">
                                                        <!-- Modal header -->
                                                        <div class="flex justify-between items-start p-5 rounded-t border-b">
                                                            <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl ">
                                                                Hapus Data <?php echo $data['nama_pasien'] ?>
                                                            </h3>
                                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" 
                                                            data-modal-toggle="modalhapus<?php echo $data['id_pasien'] ?>">
                                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="p-6  text-center">
                                                            <p class=" leading-relaxed text-gray-700">
                                                                Apakah Anda Ingin Menghapus Data <?php echo $data['nama_pasien'] ?> ?
                                                            </p>
                                                        </div>
                                                        <!-- Modal footer -->
                                                        <div class="flex justify-end p-6 space-x-2 rounded-b border-t border-gray-200">
                                                            <button data-modal-toggle="modalhapus<?php echo $data['id_pasien'] ?>" type="button" class="text-white bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-gray-300 rounded-lg border
                                                             border-gray-200 text-sm font-medium px-5 py-2.5  focus:z-10 ">Batalkan</button>
                                                            <a href="Pasien.php?id=<?php echo $data['id_pasien'] ?>" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:ring-blue-300 font-medium 
                                                            rounded-lg text-sm px-5 py-2.5 text-center ">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                    
                                    <?php 
                                        }

                                        $koneksi->close();
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
</body>

</html>