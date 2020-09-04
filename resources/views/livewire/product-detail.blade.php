<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb mb-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}" class="text-dark">List Jersey</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jersey Detail</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-product">
                <div class="card-body">
                    <img src="{{ url('assets/jersey', $product->gambar) }}" alt="{{ $product->nama }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3>
                <strong>{{ $product->nama }}</strong>
            </h3>
            <h4>
                Rp. {{ number_format($product->harga) }}
                @if($product->is_ready == 1)
                <span class="badge badge-success"><i class="fas fa-check"></i> Ready Stock</span>
                @else
                <span class="badge badge-danger"><i class="fas fa-times"></i> Stock Habis</span>
                @endif
            </h4>
            <div class="row">
                <div class="col">
                    <form action="" method="post">
                        <table class="table" style="border-top: hidden;">
                            <tr>
                                <td class="text-left" colspan="3">
                                    <img src="{{ url('assets/liga', $product->liga->gambar) }}" alt="{{ $product->liga->nama }}" class="img-fluid" width="50px" />
                                    <span class="ml-2">{{ $product->liga->nama }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis</td>
                                <td>:</td>
                                <td>{{ $product->jenis }}</td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td>:</td>
                                <td>{{ $product->berat }} Kg</td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td>:</td>
                                <td>
                                    <input id="jumlah_pesanan" type="number" class="form-control @error('jumlah_pesanan') is-invalid @enderror" wire:model="jumlah_pesanan" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('jumlah_pesanan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            @if($jumlah_pesanan > 1)
                            @else
                            <tr>
                                <td colspan="3"><strong>Name set (isi jika tambah name set)</strong></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" value="{{ old('name') }}" autocomplete="name" autofocus>
    
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td>
                                    <input id="nomor" type="number" class="form-control @error('nomor') is-invalid @enderror" wire:model="nomor" value="{{ old('name') }}" autocomplete="name" autofocus>
    
                                    @error('nomor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            @endif
                            <tr>
                                <td colspan="3">
                                    <button class="btn btn-dark btn-block" type="submit" {{ $product->is_ready !== 1 ? 'disabled' : '' }}><i class="fas fa-shopping-cart"></i> Masukkan Keranjang</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
