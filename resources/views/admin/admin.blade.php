@extends('layouts.main')

@section('container')
    {{-- MODAL START --}}
    <div class="modal fade" id="modalTambahUser" aria-hidden="true" aria-labelledby="modalTambahUserLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: white;">
                <div class="modal-header">
                    <div class="container d-flex ">
                        <h5 class="modal-title " id="modalTambahUserLabel">Tambah User</h5>
                    </div>
                    <button type="button" class="btn-close mb-5" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- MODAL BODY --}}
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <form action="{{-- /insertPemasukan --}}" method="{{-- POST --}}" enctype="multipart/form-data">
                            <label for="message-text" class="col-form-label labelmid">Role</label>
                            <div class="input-group mb-3 inputmid" style="width: 400px;">
                                <select class="form-select" id="inputGroupSelect01" name="role">
                                    <option selected>Pilih Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="#" class="form-label labelmid">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control inputmid" style="width: 400px;">

                            </div>
                            <div class="mb-3">
                                <label for="#" class="form-label labelmid">Username</label>
                                <input type="text" name="username" class="form-control inputmid"
                                    id="exampleFormControlInput1" style="width: 400px;">
                            </div>
                            <div class="mb-3">
                                <label for="#" class="col-form-label labelmid">Password</label>
                                <input type="password" name="password" class="form-control inputmid"
                                    id="exampleFormControlInput1" style="width: 400px;">
                            </div>
                            <div class="footerTambahUser d-flex justify-content-between align-items-center">
                                <br>
                                <a href="#" class="add_user">
                                    <button class="nav-tu btn-tu mb-5 gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-square-plus">
                                            <rect width="18" height="18" x="3" y="3" rx="2" />
                                            <path d="M8 12h8" />
                                            <path d="M12 8v8" />
                                        </svg>
                                        Tambah User
                                    </button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- MODAL BODY --}}
            </div>
        </div>
    </div>
    {{-- MODAL END --}}
    <div class="d-flex justify-content-center align-items-center ">
        <div class="container">

            <div class="row mt-5 mb-3">
                <div class="col-lg-12">
                    <h3 class="text-halo"><b>Hallo Naurah! </b></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="background: white">
                            <a class="add-user" data-bs-toggle="modal" href="#modalTambahUser" role="button">
                                <button class="nav-tu btn-tu gap-2 ms-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-plus">
                                        <rect width="18" height="18" x="3" y="3" rx="2" />
                                        <path d="M8 12h8" />
                                        <path d="M12 8v8" />
                                    </svg>
                                    Tambah User
                                </button>
                            </a>
                        </div>

                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-bordered border hover text-nowrap mb-0 " id="myTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Role ID</th>
                                            <th class="text-center">Date Created</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>01 Januari 2024</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>02 Juni 2024</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>20 Februari 2024</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>11 Januari 2024</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>23 Januari 2024</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>
                                                <button class="btn btn-hapus">Hapus</button>
                                                <button class="btn btn-edit">Edit</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    {{-- <tfoot>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Role ID</th>
                                            <th class="text-center">Date Created</th>
                                        </tr>
                                    </tfoot> --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
