<!DOCTYPE html>
<html>
<head>
    <title>PPDB 2021</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titel">FORMULIR PPDB JALUR ZONASI TAHUN 2021</h1>
    <hr>
    <p>Isilah seluruh kolom registrasi dengan <br />sebenar-benarnya.</p>
        <table>
            <tr>
                <td>NO</td>
                <td colspan="2">INFO PENDAFTARAN</td>
            </tr>
            <tr>
                <td>1</td>
                <td>NISN</td>
                <td><?php echo $_POST['nisn']?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Asal Sekolah</td>
                <td><?php echo $_POST['asalsekolah']?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tahun lulus</td>
                <td><?php echo $_POST['thlulus']; echo $_POST['ijasah'] ?></td>
            </tr>
            <tr>
                <td colspan="3">DATA CALON PESERTA</td>
            </tr>
            <tr>
                <td>4</td>
                <td valign="top">Nama Lengkap</td>
                <td><?php echo $_POST['nama']?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>NIK</td>
                <td><?php echo $_POST['nik']?></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Tempat/Tanggal Lahir</td>
                <td><?php echo $_POST['tempatlahir']?><?php echo $_POST['tanggall']?></td>
            </tr>
            <tr>
                <td>7</td>
                <td>jenis kelamin</td>
                <td><?php echo $_POST['jk']?></td>
            </tr>
            <tr>
                <td>8</td>
                <td valign="top">Alamat</td>
                <td><?php echo $_POST['alamat']?></td>
            </tr>
            <tr>
                <td>9</td>
                <td>&emsp;&emsp;&emsp;Desa/Kel.</td>
                <td><?php echo $_POST['desa']?></td>
            </tr>
            <tr>
                <td>10</td>
                <td>&emsp;&emsp;&emsp;Kecamatan</td>
                <td><?php echo $_POST['kecamatan']?></td>
            </tr>
            <tr>
                <td>11</td>
                <td>&emsp;&emsp;&emsp;Kabupaten</td>
                <td><?php echo $_POST['kabupa']?></td>
            </tr>
            <tr>
                <td>12</td>
                <td>&emsp;&emsp;&emsp;Provinsi</td>
                <td><?php echo $_POST['prov']?></td>
            </tr>
            <tr>
                <td>13</td>
                <td valign="top">Email Aktif</td>
                <td><?php echo $_POST['email']?></td>
            </tr>
            <tr>
                <td colspan="2">DATA ORANG TUA</td>
                <td>Lampirkan KK : <?php echo $_POST['kk']?></td>
            </tr>
            <tr>
                <td>14</td>
                <td valign="top">Nomor kartu keluarga</td>
                <td><?php echo $_POST['nokk']?></td>
            </tr>
            <tr>
                <td>15</td>
                <td valign="top">Nama Ayah kandung</td>
                <td><?php echo $_POST['ayah']?></td>
            </tr>
            <tr>
                <td>16</td>
                <td valign="top">NAgama</td>
                <td><?php echo $_POST['agamaA']?></td>
            </tr>
            <tr>
                <td>17</td>
                <td valign="top">Pekerjaan</td>
                <td><?php echo $_POST['pekerjaanA']?></td>
            </tr>
            <tr>
                <td>18</td>
                <td valign="top">Nama Ibu kandung</td>
                <td><?php echo $_POST['ibu']?></td>
            </tr>
            <tr>
                <td>19</td>
                <td valign="top">agama</td>
                <td><?php echo $_POST['agamai']?></td>
            </tr>
            <tr>
                <td>20</td>
                <td valign="top">Pekerjaan</td>
                <td><?php echo $_POST['pekerjaani']?></td>
            </tr>
            <tr>
                <td>21</td>
                <td valign="top">Alamat orang tua</td>
                <td><?php echo $_POST['alamatot']?></td>
            </tr>
            <tr>
                <td>22</td>
                <td>&emsp;&emsp;&emsp;Desa/Kel.</td>
                <td><?php echo $_POST['desaot']?></td>
            </tr>
            <tr>
                <td>23</td>
                <td>&emsp;&emsp;&emsp;Kecamatan</td>
                <td><?php echo $_POST['kecot']?></td>
            </tr>
            <tr>
                <td>24</td>
                <td>&emsp;&emsp;&emsp;Kabupaten</td>
                <td><?php echo $_POST['kabot']?></td>
            </tr>
            <tr>
                <td>25</td>
                <td>&emsp;&emsp;&emsp;Provinsi</td>
                <td><?php echo $_POST['provot']?></td>
            </tr>
        </table>
    </form>
</body>
</html>