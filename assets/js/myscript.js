const flashData = $('.flash-data').data('flashdata');
// console.log(flashData);

if (flashData) {
	Swal.fire({
		title: 'Data Mahasiswa ',
		text: 'Berhasil ' + flashData,
		type: 'success',
		confirmButtonText: 'Ok'
	});
}

// tombol hapus
$('.tombol-hapus').on('click', function (e) {

	// mematikan aksi default
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin',
		text: "data mahasiswa akan dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value == true) {
			document.location.href = href;
		}
	})


})
