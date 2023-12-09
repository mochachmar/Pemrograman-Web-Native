function hitungtotal() {
  var nama = document.fform.iname.value;
  var tujuan = document.fform.itujuan.value;
  var jumlahtiket = parseFloat(document.fform.ijumlah.value);
  var ht = 0.0;
  var sub = 0.0;
  var diskon = 0.0;
  var total = 0.0;

  if (tujuan == 'Jakarta') {
    ht = 100000;
  } else if (tujuan == 'Cirebon') {
    ht = 150000;
  } else {
    ht = 200000;
  }

  sub = jumlahtiket * ht;

  if (document.fform.imember.checked == true) {
    diskon = 0.1 * sub;
  } else {
    diskon = 0.0;
  }

  total = sub - diskon;

  document.fform.otiket.value = eval(ht);
  document.fform.osub.value = eval(sub);
  document.fform.odiskon.value = eval(diskon);
  document.fform.ototal.value = eval(total);
}
