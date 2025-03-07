<x-layout>
    <div class="container">
        <div class="row p-lg-3">
            <div class="col">
                <form action="/buku" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                            value="{{ old('judul') }}" id="judul" name="judul">
                        @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control @error('penulis') is-invalid @enderror" 
                            value="{{ old('penulis') }}" id="penulis" name="penulis">
                        @error('penulis') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select form-select-md mb-3 @error('kategori') is-invalid @enderror" 
                                name="kategori" id="kategori">
                            <option value="" selected>Pilih Kategori</option>
                            <option value="Novel">Novel</option>
                            <option value="Biografi">Biografi</option>
                        </select>
                        @error('kategori') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sampul" class="form-label">Sampul buku</label>
                        <img id="img-preview" class="img-fluid mb-3 w-25px" style="display:none">
                        <input class="form-control @error('sampul') is-invalid @enderror" 
                            type="file" id="sampul" name="sampul" onchange="previewImage()">
                        @error('sampul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        function previewImage() {
            const image = document.querySelector('#sampul');
            const imagePreview = document.querySelector('#img-preview');
    
            imagePreview.style.display = 'block';
    
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
    
            oFReader.onload = function(oFREvent) {
                imagePreview.src = oFREvent.target.result;
            }
        }
    </script>
</x-layout>