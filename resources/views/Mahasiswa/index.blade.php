@extends('layouts.app')
@section('title', ' Daftar mahasiswa')
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
      <h1 class="mt-2">Daftar mahasiswa</h1>
      <table class="table">
          <thead class="thead-dark">
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">NRP</th>
              <th scope="col">email</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Aksi</th>
          </thead>
          <tbody>
          @foreach ( $Mahasiswa as $mhs)
              <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{ $mhs->nama}}</td>
                  <td>{{ $mhs->nrp}}</td>
                  <td>{{$mhs->email}}</td>
                  <td>{{$mhs->jurusan}}</td>
                  <td>
                      <a href="" class="badge badge-success">edit</a>
                      <a href="" class="badge badge-danger">hapus</a>
                  </td>
              </tr>
              @endforeach
          </tbody>

      </table>
    </div>
  </div>
  </div>
 @endsection
