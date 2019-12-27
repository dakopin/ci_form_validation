create  database latihan;
use latihan;

create table mahasiswa(
    nim char(10) not null primary key,
    nama varchar(50) not null,
    alamat text not null,
    telepon char(15) not null
);