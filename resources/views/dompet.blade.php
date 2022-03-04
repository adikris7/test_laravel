@extends('home')
@section('contentku')
    

<div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>DOMPET</h3>
                </div>
                <div class="col-md-6">
                    <div class="btn-group pull-right" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-baru">Buat Baru</button>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Aktif
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">1</a>
                              <a class="dropdown-item" href="#">2</a>
                              <a class="dropdown-item" href="#">3</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            {{-- <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-sm">
                        <select class="select" data-mdb-filter="true">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span class="input-group-text" id="inputGroup-sizing-sm">/Halaman</span>
                    </div>
                </div>
                <div class="col-md">
                    <div class="input-group pull-right w-25">
                        <input type="search" id="txtSearch" value="" class="form-control" placeholder="Cari">
                    </div>
                </div>
            </div> --}}

            <div class="table-responsive ">
                <table class="table table-hover mydatatable" style="width: 100%">
                    <thead>
                    <tr class="tab-custom">
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Referensi</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>a</td>
                        <td>123</td>
                        <td>bca</td>
                        <td>aktif</td>

                    </tr>
                    
                    <tr>
                        <th scope="row">2</th>
                        <td>b</td>
                        <td>123</td>
                        <td>bca</td>
                        <td>aktif</td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>c</td>
                        <td>123</td>
                        <td>bca</td>
                        <td>aktif</td>
                    </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>
      </div>
@endsection