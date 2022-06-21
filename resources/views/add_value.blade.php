<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h3 class="text-center my-5">Masukkan nilai user</h3>
                <form class="card mx-auto p-2" style="width: 25rem;" method="get" action="/addvalue">
                    {{csrf_field()}}
                    <div class="row g-3 mx-auto">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">P1</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" name="nilai1" id="nilai1" class="form-control" required>
                        </div>
                    </div>
                    <div class="row g-3 mx-auto">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">K2</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" name="nilai2" id="nilai2" class="form-control" required>
                        </div>
                    </div>
                    <input type="hidden" name="nbi" id="nbi" value="{{$nbi}}" class="form-control" required>
                    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>