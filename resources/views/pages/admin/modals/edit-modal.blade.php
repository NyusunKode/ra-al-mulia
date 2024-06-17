@foreach ($informasi as $item)
    <div class="modal fade" id="modal-edit-{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form class="" action="{{ url('/informasi/edit/' . $item->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <h4 class="card-title">Judul</h4>
                            <div class="form-group">
                                <input type="text" class="form-control" name="judul" placeholder="judul informasi"
                                    required value="{{ $item->judul }}">
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Thumbnail</h4>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="thumbnail" id="inputGroupFile01"
                                    accept="image/*">
                                <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Isi</h4>
                            <div class="form-group">
                                <textarea class="form-control" name="isi" rows="4" placeholder="Inputkan isi..." required>{{ $item->isi }}</textarea>
                            </div>
                        </div>
                        <div class="float-right">
                            <button type="sumbit" data-toggle="modal" data-target="#bs-example-modal-lg"
                                class="btn btn-success mr-8" href="">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
