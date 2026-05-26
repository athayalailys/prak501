<?php

require "Koneksi.php";


// ================= MEMBER =================

function getAllMember()
{
    global $koneksi;

    return mysqli_query(
        $koneksi,
        "SELECT * FROM member"
    );
}

function getMemberById($id)
{
    global $koneksi;

    return mysqli_fetch_assoc(
        mysqli_query(
            $koneksi,
            "SELECT * FROM member WHERE id_member=$id"
        )
    );
}

function insertMember($data)
{
    global $koneksi;

    mysqli_query($koneksi,

    "INSERT INTO member VALUES(

        '',
        '{$data['nama_member']}',
        '{$data['nomor_member']}',
        '{$data['alamat']}',
        '{$data['tgl_mendaftar']}',
        '{$data['tgl_terakhir_bayar']}'

    )");

}

function updateMember($data)
{
    global $koneksi;

    mysqli_query($koneksi,

    "UPDATE member SET

    nama_member='{$data['nama_member']}',
    nomor_member='{$data['nomor_member']}',
    alamat='{$data['alamat']}',
    tgl_mendaftar='{$data['tgl_mendaftar']}',
    tgl_terakhir_bayar='{$data['tgl_terakhir_bayar']}'

    WHERE id_member='{$data['id_member']}'

    ");

}

function deleteMember($id)
{
    global $koneksi;

    mysqli_query(
        $koneksi,
        "DELETE FROM member WHERE id_member=$id"
    );
}


// ================= BUKU =================

function getAllBuku()
{
    global $koneksi;

    return mysqli_query(
        $koneksi,
        "SELECT * FROM buku"
    );
}

function getBukuById($id)
{
    global $koneksi;

    return mysqli_fetch_assoc(
        mysqli_query(
            $koneksi,
            "SELECT * FROM buku WHERE id_buku=$id"
        )
    );
}

function insertBuku($data)
{
    global $koneksi;

    mysqli_query($koneksi,

    "INSERT INTO buku VALUES(

        '',
        '{$data['kode_buku']}',
        '{$data['judul']}',
        '{$data['pengarang']}',
        '{$data['penerbit']}',
        '{$data['tahun_terbit']}'

    )");

}

function updateBuku($data)
{
    global $koneksi;

    mysqli_query($koneksi,

    "UPDATE buku SET

    kode_buku='{$data['kode_buku']}',
    judul='{$data['judul']}',
    pengarang='{$data['pengarang']}',
    penerbit='{$data['penerbit']}',
    tahun_terbit='{$data['tahun_terbit']}'

    WHERE id_buku='{$data['id_buku']}'

    ");

}

function deleteBuku($id)
{
    global $koneksi;

    mysqli_query(
        $koneksi,
        "DELETE FROM buku WHERE id_buku=$id"
    );
}


// ================= PEMINJAMAN =================

function getAllPeminjaman()
{
    global $koneksi;

    return mysqli_query($koneksi,

    "SELECT peminjaman.*,
    member.nama_member,
    buku.judul

    FROM peminjaman

    JOIN member
    ON peminjaman.id_member=member.id_member

    JOIN buku
    ON peminjaman.id_buku=buku.id_buku"

    );
}

function getPeminjamanById($id)
{
    global $koneksi;

    return mysqli_fetch_assoc(

        mysqli_query(
            $koneksi,
            "SELECT * FROM peminjaman
            WHERE id_peminjaman=$id"
        )

    );
}

function insertPeminjaman($data)
{
    global $koneksi;

    mysqli_query($koneksi,

    "INSERT INTO peminjaman VALUES(

        '',
        '{$data['id_member']}',
        '{$data['id_buku']}',
        '{$data['tgl_pinjam']}',
        '{$data['tgl_kembali']}'

    )");

}

function updatePeminjaman($data)
{
    global $koneksi;

    mysqli_query($koneksi,

    "UPDATE peminjaman SET

    id_member='{$data['id_member']}',
    id_buku='{$data['id_buku']}',
    tgl_pinjam='{$data['tgl_pinjam']}',
    tgl_kembali='{$data['tgl_kembali']}'

    WHERE id_peminjaman='{$data['id_peminjaman']}'

    ");

}

function deletePeminjaman($id)
{
    global $koneksi;

    mysqli_query(
        $koneksi,
        "DELETE FROM peminjaman
        WHERE id_peminjaman=$id"
    );
}

?>