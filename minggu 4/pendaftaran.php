<!DOCTYPE html>
<html>
<head>
    <title>PPDB 2021</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titel">FORMULIR PPDB JALUR ZONASI TAHUN 2021</h1>
    <hr>
    <form action="tampil.php" method="post">
        <table>
            <tr>
                <td>NO</td>
                <td colspan="2">INFO PENDAFTARAN</td>
            </tr>
            <tr>
                <td>1</td>
                <td>NISN</td>
                <td><input type="text" name="nisn" id="nisn" placeholder="Masukan NISN"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Asal Sekolah</td>
                <td><input type="text" name="asalsekolah" id="asalsekolah" placeholder="Asal sekolah"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tahun lulus</td>
                <td><input type="date" name="thlulus" id="thlulus">&emsp;Lampirkan Ijasah  <input type="file" name="ijasah" id="ijasah"></td>
            </tr>
            <tr>
                <td colspan="3">DATA CALON PESERTA</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" placeholder="masukan nama anda"></td>
            </tr>
            <tr>
                <td>5</td>
                <td>NIK</td>
                <td><input type="text" name="nik" placeholder="masukan nik"></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Tempat/Tanggal Lahir</td>
                <td><input type="text" name="tempatlahir" placeholder="tempat lahir"><input type="date" name="tanggall" id=""></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Jenis kelamin</td>
                <td>
                    <input type="radio" name="jk" value="laki"> Laki-Laki&emsp;
                    <input type="radio" name="jk" value="perempuan"> Perempuan</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Alamat</td>
                <td><input type="text" name="alamat" placeholder="Masukan alamat anda"></td>
            </tr>
            <tr>
                <td>9</td>
                <td>&emsp;&emsp;&emsp;Desa/Kel.</td>
                <td><input type="text" name="desa" ></td>
            </tr>
            <tr>
                <td>10</td>
                <td>&emsp;&emsp;&emsp;Kecamatan</td>
                <td><input type="text" name="kecamatan" id=""></td>
            </tr>
            <tr>
                <td>11</td>
                <td>&emsp;&emsp;&emsp;Kabupaten</td>
                <td><input type="text" name="kabupa" id=""></td>
            </tr>
            <tr>
                <td>12</td>
                <td>&emsp;&emsp;&emsp;Provinsi</td>
                <td><input type="text" name="prov" id=""></td>
            </tr>
            <tr>
                <td>13</td>
                <td>Email Aktif</td>
                <td><input type="email" name="email" placeholder="masukan email aktif"></td>
            </tr>
            <tr>
                <td colspan="2">DATA ORANG TUA</td>
                <td>Lampirkan KK&emsp;<input type="file" name="kk" placeholder="inputkan kk"></td>
            </tr>
            <tr>
                <td>14</td>
                <td>Nomor kartu keluarga</td>
                <td><input type="text" name="nokk" placeholder="masukan no kk"></td>
            </tr>
            <tr>
                <td>15</td>
                <td>Nama Ayah kandung</td>
                <td><input type="text" name="ayah" placeholder="nama ayah"></td>
            </tr>
            <tr>
                <td>16</td>
                <td>NAgama</td>
                <td><input type="text" name="agamaA"></td>
            </tr>
            <tr>
                <td>17</td>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaanA"></td>
            </tr>
            <tr>
                <td>18</td>
                <td>Nama Ibu kandung</td>
                <td><input type="text" name="ibu"></td>
            </tr>
            <tr>
                <td>19</td>
                <td>agama</td>
                <td><input type="text" name="agamai"></td>
            </tr>
            <tr>
                <td>20</td>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaani"></td>
            </tr>
            <tr>
                <td>21</td>
                <td>Alamat orang tua</td>
                <td><input type="text" name="alamatot" id=""></td>
            </tr>
            <tr>
                <td>22</td>
                <td>&emsp;&emsp;&emsp;Desa/Kel.</td>
                <td><input type="text" name="desaot" id=""></td>
            </tr>
            <tr>
                <td>23</td>
                <td>&emsp;&emsp;&emsp;Kecamatan</td>
                <td><input type="text" name="kecot" id=""></td>
            </tr>
            <tr>
                <td>24</td>
                <td>&emsp;&emsp;&emsp;Kabupaten</td>
                <td><input type="text" name="kabot" id=""></td>
            </tr>
            <tr>
                <td>25</td>
                <td>&emsp;&emsp;&emsp;Provinsi</td>
                <td><input type="text" name="provot" id=""></td>
            </tr>
        </table>
        <input type="submit" value="submit" class="btn">
    </form>
</body>
</html>