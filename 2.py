def cetak_gambar(nomor):
    if nomor % 2 != 0:
        separator = nomor-2
        tengah = int(nomor/2+0.5)
        for i in range(nomor):
            if i != tengah-1:
                print("*" + "="* separator + "*")
            else:
                print("*"*nomor)
    else:
        print("Value nomor harus diisi angka ganjil")
cetak_gambar(5)