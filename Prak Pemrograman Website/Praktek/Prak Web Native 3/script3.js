var jumlahDeret, i, total, hasilElemen;

jumlahDeret = prompt(parseInt('Masukkan jumlah deret: '));

if (isNaN(jumlahDeret) || jumlahDeret <= 0) {
  alert('Masukkan angka yang valid dan lebih besar dari 0!');
} else {
  i = 1;
  total = 0;

  do {
    total += i;
    i++;
  } while (i <= jumlahDeret);

  hasilElemen = document.createElement('p');
  hasilElemen.textContent = 'Jumlah Deret dari 1 sampai ' + jumlahDeret + ' adalah = ' + total;

  document.body.appendChild(hasilElemen);
}
