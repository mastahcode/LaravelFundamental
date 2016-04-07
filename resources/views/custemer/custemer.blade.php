<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>

<table>
  <tr>
    <th>Nama</th>
    <th>Umur</th> 
    <th>Alamat</th>
    <th>telp Rumah</th>
    <th>Nomor Hp</th>
    
  </tr>
  @foreach($custemer as $custemers)
  <tr>
    <td>{{$custemers->nama}}</td>
    <td>{{$custemers->umur}}</td> 
    <td>{{$custemers->alamat}}</td> 
    <td>{{$custemers->kontaks->nomorRumah}}</td> 
    <td>{{$custemers->kontaks->nomorHP}}</td> 
    
  </tr>
  @endforeach
</table>

