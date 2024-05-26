// $(function () {

//     $('.tomboltambahanggota').on('click', function () {
//         $('#formanggotalabel').html('Tambah Data Anggota');
//         $('.modal-footer button[type=submit]').html('Tambah Data');
//     });

//     $('.tombolubahanggota').on('click', function () {
//         $('#formanggotalabel').html('Ubah Data Anggota');
//         $('.modal-footer button[type=submit]').html('Ubah Data');

//         const id = $(this).data('nim'); // Mengambil data 'nim' dari tombol yang diklik
//         $.ajax({
//             url: 'http://localhost/weblanjut/perpustakaan/public/anggota/getubah',
//             data: { id: nim }, // Mengirimkan nim sebagai parameter
//             method: 'post',
//             dataType: 'json',
//             success: function (data) {
//                 $('#nim').val(data.nim);
//                 $('#gambar').val(data.gambar); // Mengisi data gambar ke dalam input
//                 $('#nama').val(data.nama);
//                 $('#prodi').val(data.prodi);
//                 $('#kelas').val(data.kelas);
//                 $('#alamat').val(data.alamat);
//             }
//         })
//     });
// });
