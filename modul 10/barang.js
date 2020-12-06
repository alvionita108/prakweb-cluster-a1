let daftarAlat = [];
const list = document.getElementById('show');
const barang = document.getElementById('alat');
    
    function add() {
        if (barang.value.length > 0) {
            daftarAlat.push(barang.value);
            changeList();
        } 
        barang.value = '';
            
    }
    
    function hapus(item) {
        const indexItem = daftarAlat.indexOf(item);
        daftarAlat.splice(indexItem, 1);
        changeList();
    }
    
    function edit(item) {
        const indexItem = daftarAlat.indexOf(item);
        const newName = prompt('Ganti nama');
    
        if(newName.length > 0) {
            daftarAlat[indexItem] = newName;
        } else {
            alert('nama baru belum diisi');
        }
        
      changeList();
    }
    
    
    
    function changeList() {
        let alatSekolah = '';
        daftarAlat.forEach(listAlat => {
            alatSekolah +=   `<div class='item'>
                            <span>${listAlat}</span> [
                            <a href="#" onclick="return edit('${listAlat}')">Edit</a> |
                            <a href="#" onclick="return hapus('${listAlat}')">Hapus</a>
                            ]
                        </div>`;
        });
    
        list.innerHTML = alatSekolah;
    }
    