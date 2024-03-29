<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Flowers Day 2024</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
        
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
        
    </head>
    <body>

        

        <script type="text/javascript">
            var submitted = false;
        </script>
        <iframe name="hiddenConfirm" id="hiddenConfirm" style="display: none" onload="if(submitted){window.location='submitted.html';}"></iframe>
        <h1 class="text-center">Flowers Day 2023</h1>
        <form action="<?php echo env("GOOGLE_FORM");?>" method="POST" onsubmit="submitted=true" id="form">

            @csrf
            
            <section id="pengirim-section">
                <h3 class="text-center">Data Pengirim</h3>
                <div class="data-pengirim">
                    <!-- <label for="nama-penerima">Nama Pengirim: </label> -->
                    <input type="text" placeholder="Nama Pengirim" id="nama-pengirim" name="entry.287391154" required />
                    <span class="text-danger"> <br />*Isi "Anonymous" jika nama tidak ingin ditampilkan</span>
                </div>

                <div class="data-pengirim">
                    <!-- <label for="kelas-pengirim">Kelas: </label> -->
                    <select id="kelas-pengirim" name="entry.2133329921">
                        <option value="Anonymous">Anonymous</option>
                        <option value="X-1">X-1</option>
                        <option value="X-2">X-2</option>
                        <option value="X-3">X-3</option>
                        <option value="X-4">X-4</option>
                        <option value="X-5">X-5</option>
                        <option value="X-6">X-6</option>
                        <option value="X-7">X-7</option>
                        <option value="X-8">X-8</option>
                        <option value="X-9">X-9</option>
                        <option value="XI-1">XI-1</option>
                        <option value="XI-2">XI-2</option>
                        <option value="XI-3">XI-3</option>
                        <option value="XI-4">XI-4</option>
                        <option value="XI-5">XI-5</option>
                        <option value="XI-6">XI-6</option>
                        <option value="XI-7">XI-7</option>
                        <option value="XI-8">XI-8</option>
                        <option value="XI-9">XI-9</option>
                        <option value="XII-1">XII-1</option>
                        <option value="XII-2">XII-2</option>
                        <option value="XII-3">XII-3</option>
                        <option value="XII-4">XII-4</option>
                        <option value="XII-5">XII-5</option>
                        <option value="XII-6">XII-6</option>
                        <option value="XII-7">XII-7</option>
                        <option value="XII-8">XII-8</option>
                    </select>
                    <span class="text-danger"> <br />*Isi dengan kelasmu jika tidak dikirim secara anonim</span>
                </div>
                <div class="data-pengirim">
                    <!-- <label for="email-pengirim">Email Pengirim:</label> -->
                    <input type="email" name="entry.1592840593" id="email-pengirim" placeholder="Email Pengirim" required />
                </div>
                <div class="data-pengirim">
                    <!-- <label for="nomor-telepon-pengirim"></label> -->
                    <input type="number" name="entry.812587699" id="nomor-telepon-pengirim" placeholder="No HP Pengirim" required />
                </div>
                <div class="data-pengirim" onclick="checkFieldsAndShowSection()">
                    <div class="tombol-next"  style="display: block">Next</div>
                </div>
            </section>
            <section id="penerima-section" style="display: none">
                <table class="" id="all-penerima">
                    <tbody class="overflow-scroll text-center" onchange="showHargaKeseluruhan()">
                        <tr>
                            <th>Nama Penerima</th>
                            <th>Kelas Penerima</th>
                            <th>
                                Paket A <br />
                                (20.000)
                            </th>
                            <th>
                                Paket B <br />
                                (25.000)
                            </th>
                            <th>
                                Bouquet <br />
                                (15.000)
                            </th>
                            <th>
                                Batangan <br />
                                (10.000)
                            </th>
                            <th>
                                Kartu Ucapan <br />
                                (5.000)
                            </th>
                            <th>Total Harga <br /></th>
                            <th>Ket.</th>
                        </tr>
                        <tr id="penerima-1" onchange="showHarga('penerima-1')">
                            <td>
                                <input type="text" placeholder="Ketik nama di sini" id="nama-penerima" name="entry.1336288915" required />
                            </td>
                            <td>
                                <select id="kelas-penerima" name="entry.1967255455">
                                    <option value="X-1">X-1</option>
                                    <option value="X-2">X-2</option>
                                    <option value="X-3">X-3</option>
                                    <option value="X-4">X-4</option>
                                    <option value="X-5">X-5</option>
                                    <option value="X-6">X-6</option>
                                    <option value="X-7">X-7</option>
                                    <option value="X-8">X-8</option>
                                    <option value="X-9">X-9</option>
                                    <option value="XI-1">XI-1</option>
                                    <option value="XI-2">XI-2</option>
                                    <option value="XI-3">XI-3</option>
                                    <option value="XI-4">XI-4</option>
                                    <option value="XI-5">XI-5</option>
                                    <option value="XI-6">XI-6</option>
                                    <option value="XI-7">XI-7</option>
                                    <option value="XI-8">XI-8</option>
                                    <option value="XI-9">XI-9</option>
                                    <option value="XII-1">XII-1</option>
                                    <option value="XII-2">XII-2</option>
                                    <option value="XII-3">XII-3</option>
                                    <option value="XII-4">XII-4</option>
                                    <option value="XII-5">XII-5</option>
                                    <option value="XII-6">XII-6</option>
                                    <option value="XII-7">XII-7</option>
                                    <option value="XII-8">XII-8</option>
                                </select>
                            </td>
                            <td>
                                <input type="checkbox" name="entry.851185307" id="paket-A" value="Paket A" />
                            </td>
                            <td>
                                <input type="checkbox" name="entry.851185307" id="paket-B" value="Paket B" />
                            </td>
                            <td>
                                <input type="checkbox" name="entry.851185307" id="bouquet" value="Bouquet" />
                            </td>
                            <td>
                                <input type="checkbox" name="entry.851185307" id="batangan" value="Batangan" />
                            </td>
                            <td>
                                <textarea type="text" name="entry.1519282563" placeholder="Ketik pesanmu di sini" id="pesan" disabled></textarea>
                            </td>
                            <td><span id="harga">-</span></td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="">Total Harga:<span id="total-harga-keseluruhan">-</span></h3>
                <input type="hidden" name="amount" id="amount" value="">
                
                <input type="submit" name="" id="tombol-submit" style="display: none" />
                
            </section>
        </form>
        
        
        <button id="tombol-bayar-btn" class="btn btn-success" onclick="bayar()" >Bayar</button>
        <button id="tambah-penerima-btn" onclick="addPenerima()" class="btn btn-warning" style="display: none">+ tambah penerima</button>
        <script src="js/script.js"></script>       
        <script>

                        

            // var tombolSubmit = document.getElementById('tombol-submit');

            
            // tombolSubmit.disabled = true;
            

            function bayar() {
                var namaPengirim = document.getElementById('nama-pengirim').value;
                var nomorTeleponPengirim = document.getElementById('nomor-telepon-pengirim').value;
                var emailPengirim = document.getElementById('email-pengirim').value;

                // Konfirmasi sebelum membuka halaman baru
                var isConfirmed = confirm("Anda akan dialihkan ke halaman pembayaran. Pastikan data yang diinput sudah benar");
                
                if (isConfirmed) {
                    var cURL = 'checkout' +
                        '?namaPengirim=' + encodeURIComponent(namaPengirim) +
                        '&nomorTelepon=' + encodeURIComponent(nomorTeleponPengirim) +
                        '&email=' + encodeURIComponent(emailPengirim) +
                        '&hargaTotal=' + encodeURIComponent(hargaTotal);

                    window.open(cURL, '_blank');
                } else {
                    
                    alert("Proses pembayaran dibatalkan.");
                }

                
            }

                

        </script>       
    </body>
    <template id="template-penerima">
        <tr id="penerima" onchange="showHarga('penerima')">
            <td style="display: none">
                <input type="text" placeholder="Nama Pengirim" id="nama-pengirim" name="entry.287391154" />
                <input type="text" placeholder="Kelas Pengirim" id="kelas-pengirim" name="entry.287391154" />
            </td>

            <td>
                <input type="text" placeholder="Ketik nama di sini" id="nama-penerima" name="entry.1336288915" required />
            </td>
            <td>
                <select id="kelas-penerima" required name="entry.1967255455">
                    <option value="X-1">X-1</option>
                    <option value="X-2">X-2</option>
                    <option value="X-3">X-3</option>
                    <option value="X-4">X-4</option>
                    <option value="X-5">X-5</option>
                    <option value="X-6">X-6</option>
                    <option value="X-7">X-7</option>
                    <option value="X-8">X-8</option>
                    <option value="X-9">X-9</option>
                    <option value="XI-1">XI-1</option>
                    <option value="XI-2">XI-2</option>
                    <option value="XI-3">XI-3</option>
                    <option value="XI-4">XI-4</option>
                    <option value="XI-5">XI-5</option>
                    <option value="XI-6">XI-6</option>
                    <option value="XI-7">XI-7</option>
                    <option value="XI-8">XI-8</option>
                    <option value="XI-9">XI-9</option>
                    <option value="XII-1">XII-1</option>
                    <option value="XII-2">XII-2</option>
                    <option value="XII-3">XII-3</option>
                    <option value="XII-4">XII-4</option>
                    <option value="XII-5">XII-5</option>
                    <option value="XII-6">XII-6</option>
                    <option value="XII-7">XII-7</option>
                    <option value="XII-8">XII-8</option>
                </select>
            </td>
            <td><input type="checkbox" name="entry.851185307" id="paket-A" value="Paket A" class="paket-penerima" /></td>
            <td><input type="checkbox" name="entry.851185307" id="paket-B" value="Paket B" class="paket-penerima" /></td>
            <td><input type="checkbox" name="entry.851185307" id="bouquet" value="Bouquet" /></td>
            <td><input type="checkbox" name="entry.851185307" id="batangan" value="Batangan" /></td>
            <td>
                <textarea type="text" name="entry.1519282563" placeholder="Ketik pesanmu di sini" id="pesan" disabled></textarea>
            </td>
            <td><span id="harga">-</span></td>
            <td>
                <button id="remove-button" class="btn btn-danger" onlick="removePenerima('penerima')">Hapus</button>
            </td>
        </tr>
    </template>
    
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>