@extends('layouts/main')

@section('content')
<h1 class="mt-4">Movies Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Movies</li>
    </ol>
    <a href="#">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Movies Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Film</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Film</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td> Inside Out</td>
                    <td>Pete Docter
                        Ronnie Del Carmen</td>
                    <td>IMDb 8.2/10</td>
                    <td>Film animasi Inside Out bercerita tentang seorang gadis remaja yang sedang emosinya sedang tidak stabil.</td>
                    <td>2015</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Spirited Away</td>
                    <td>Hayao Miyazaki

                        Kirk Wise</td>
                    <td>IMDb 8.6/10</td>
                    <td>Film ini mengisahkan gadis cilik bernama Chihiro yang terjebak dalam dunia roh bersama dengan orang tuanya</td>
                    <td>2001</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Up</td>
                    <td>	
                        Pete Docter</td>
                    <td>IMDb 8.2/10</td>
                    <td>Petualangan dimulai oleh Carl dan istrinya yang ingin pergi ke tempat liburan mereka. Sayangnya, impian itu harus musnah di tengah jalan. </td>
                    <td>1009</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Zootopia</td>
                    <td>Byron Howard
                        Rich Moore</td>
                    <td>	
                        IMDb 8/10</td>
                    <td>Hidup di dunia binatang memang menyenangkan. Judy Hopps adalah sekor kelinci yang bercita-cita menjadi polisi di kota Zootopia. Dia pun berusaha keras untuk menggapai mimpinya dan berhasil menjadi polisi. Namun, ada kasus misterius yang buat dia kewalahan. Bersama dengam Nick, seekor rubah, dia pun bersama menyelesaikan kasusnya.</td>
                    <td>2016</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>The Lego Movie</td>
                    <td>Chris Miller
                        Phil Lord</td>
                    <td>IMDb 7.8/10</td>
                    <td>Film The Lego Movie juga jadi salah satu film kartun terbaik sepanjang masa yang wajib kamu tonton. Film ini sebenarnya implimentasi dari film keluarga yang menggembarkan hubungan ayah dan anak. Namun, semua penggambarannya dilakukan dengan menggunakan Lego. Para Lego pun digambarkan hidup dengan tenang di kota Lego.</td>
                    <td>2014</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection