<?php

    $koneksi = new PDO("mysql:host=localhost;dbname=11rpl", "root","");

    $koneksi->query("insert into siswa values (3, 'opal')");

    $koneksi->query("delete from siswa where id=3");

    $koneksi->query("update siswa set id='69' where nama='reza' ");

    $koneksi->query("select `nama` from `siswa` where id=34");