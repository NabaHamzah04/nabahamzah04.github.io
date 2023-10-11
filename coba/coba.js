// Data awal
let dataBarang = [
    { idPemda: "001", namaBarang: "Laptop", harga: 5000, tahun: 2022 },
    { idPemda: "002", namaBarang: "Smartphone", harga: 1000, tahun: 2023 },
    { idPemda: "003", namaBarang: "Tablet", harga: 800, tahun: 2021 },
];

function addData() {
    let idPemda = document.getElementById('idPemda').value;
    let namaBarang = document.getElementById('namaBarang').value;
    let harga = parseFloat(document.getElementById('harga').value);
    let tahun = parseInt(document.getElementById('tahun').value);

    // Validasi input
    if (!idPemda || !namaBarang || isNaN(harga) || isNaN(tahun)) {
        alert('Harap isi semua field dengan benar.');
        return;
    }

    // Tambahkan data baru
    let newData = { idPemda, namaBarang, harga, tahun };
    dataBarang.push(newData);

    // Reset input fields
    document.getElementById('idPemda').value = '';
    document.getElementById('namaBarang').value = '';
    document.getElementById('harga').value = '';
    document.getElementById('tahun').value = '';

    displayData();
}

function displayData() {
    let table = document.getElementById('data');
    table.innerHTML = '';

    for (let i = 0; i < dataBarang.length; i++) {
        let row = table.insertRow();
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);
        let cell4 = row.insertCell(3);
        let cell5 = row.insertCell(4);

        cell1.innerHTML = dataBarang[i].idPemda;
        cell2.innerHTML = dataBarang[i].namaBarang;
        cell3.innerHTML = dataBarang[i].harga;
        cell4.innerHTML = dataBarang[i].tahun;
        cell5.innerHTML = '<button onclick="editData(' + i + ')">Edit</button> ' +
                          '<button onclick="deleteData(' + i + ')">Hapus</button>';
    }
}

function searchData() {
    let searchKeyword = document.getElementById('search').value.toLowerCase();
    let filteredData = dataBarang.filter(function(item) {
        return item.namaBarang.toLowerCase().includes(searchKeyword);
    });
    dataBarang = filteredData;
    displayData();
}

function editData(index) {
    let editedNamaBarang = prompt('Masukkan nama barang baru:', dataBarang[index].namaBarang);
    let editedHarga = parseFloat(prompt('Masukkan harga baru:', dataBarang[index].harga));
    let editedTahun = parseInt(prompt('Masukkan tahun baru:', dataBarang[index].tahun));

    if (!editedNamaBarang || isNaN(editedHarga) || isNaN(editedTahun)) {
        alert('Harap isi semua field dengan benar.');
        return;
    }

    dataBarang[index].namaBarang = editedNamaBarang;
    dataBarang[index].harga = editedHarga;
    dataBarang[index].tahun = editedTahun;

    displayData();
}

function deleteData(index) {
    dataBarang.splice(index, 1);
    displayData();
}

displayData(); // Tampilkan data awal
