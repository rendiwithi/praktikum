<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h3 class="text-center my-5">Masukkan data user</h3>
                <form class="card mx-auto p-2" style="width: 25rem;" method="get" action="/adduser">
                    {{csrf_field()}}
                    <div class="row g-3 mx-auto">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Nama user</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                    </div>
                    <div class="row g-3 mx-auto">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">nbi user(****)</label>
                            <br>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="nbi" id="nbi" class="form-control" required>
                        </div>
                    </div>
                    <div class="row g-3 mx-auto">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Password user</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="password" id="password" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                    <Select name="kelas" , id="kelas" class="form-select">
                        @foreach ($kelas as $dk)
                        <option value="{{$dk->id}}">{{$dk->nama}}</option>
                        @endforeach
                    </Select>
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Role</label>
                    <Select name="role" , id="role" class="form-select">
                        @foreach ($role as $dr)
                        <option value="{{$dr->id_role}}">{{$dr->name}}</option>
                        @endforeach
                    </Select>
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Dosbim</label>
                    <Select name="dosbim" , id="dosbim" class="form-select">
                        @foreach ($dosbim as $dos)
                        <option value="{{$dos->nbi}}">{{$dos->nama}}</option>
                        @endforeach
                    </Select>
                    <br>
                    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>